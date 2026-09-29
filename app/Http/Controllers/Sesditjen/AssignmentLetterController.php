<?php

namespace App\Http\Controllers\Sesditjen;

use App\Http\Controllers\Controller;
use App\Models\AssignmentLetter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssignmentLetterController extends Controller
{
    public function index(): View
    {
        $this->authorizeSesditjen();

        return $this->showList(false);
    }

    public function approvals(): View
    {
        $this->authorizeSesditjen();

        return $this->showList(true);
    }

    public function decide(Request $request, AssignmentLetter $assignmentLetter): RedirectResponse
    {
        $this->authorizeSesditjen();

        abort_unless($assignmentLetter->status === 'Menunggu', 422, 'Surat tugas ini sudah memiliki keputusan.');

        $data = $request->validate([
            'status' => ['required', 'in:Disetujui,Ditolak'],
            'decision_note' => ['nullable', 'required_if:status,Ditolak', 'string', 'max:2000'],
        ]);

        $assignmentLetter->update([
            'status' => $data['status'],
            'decision_note' => $data['decision_note'] ?? null,
            'reviewed_by' => $request->user()->id,
            'reviewed_at' => now(),
        ]);

        return back()->with('status', 'Keputusan surat tugas berhasil disimpan.');
    }

    private function showList(bool $pendingOnly): View
    {
        $query = AssignmentLetter::query()->with('creator', 'reviewer')->latest();
        if ($pendingOnly) {
            $query->where('status', 'Menunggu');
        }

        return view('sesditjen.surat-tugas.index', [
            'letters' => $query->get(),
            'pendingOnly' => $pendingOnly,
            'pendingCount' => AssignmentLetter::where('status', 'Menunggu')->count(),
            'approvedCount' => AssignmentLetter::where('status', 'Disetujui')->count(),
            'rejectedCount' => AssignmentLetter::where('status', 'Ditolak')->count(),
        ]);
    }

    private function authorizeSesditjen(): void
    {
        abort_unless(auth()->user()->role === 'sesditjen', 403);
    }
}
