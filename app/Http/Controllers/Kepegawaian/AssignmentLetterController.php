<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\AssignmentLetter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class AssignmentLetterController extends Controller
{
    public function index(): View
    {
        $this->authorizeKepegawaian();

        return view('kepegawaian.surat-tugas.index', [
            'letters' => AssignmentLetter::query()->latest()->get(),
            'pendingCount' => AssignmentLetter::where('status', 'Menunggu')->count(),
            'approvedCount' => AssignmentLetter::where('status', 'Disetujui')->count(),
            'rejectedCount' => AssignmentLetter::where('status', 'Ditolak')->count(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->authorizeKepegawaian();

        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'employee_name' => ['required', 'string', 'max:255'],
            'employee_number' => ['nullable', 'string', 'max:30'],
            'unit' => ['required', 'string', 'max:150'],
            'destination' => ['required', 'string', 'max:150'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'purpose' => ['required', 'string', 'max:2000'],
        ]);

        $data['created_by'] = $request->user()->id;
        $letter = AssignmentLetter::create($data);
        $year = Carbon::parse($letter->start_date)->format('Y');
        $letter->update(['number' => sprintf('ST-%04d/KP2MI/%s', $letter->id, $year)]);

        return back()->with('status', 'Surat tugas berhasil diajukan untuk persetujuan Sesditjen.');
    }

    public function destroy(AssignmentLetter $assignmentLetter): RedirectResponse
    {
        $this->authorizeKepegawaian();
        abort_unless($assignmentLetter->status === 'Menunggu', 422, 'Surat tugas yang sudah diputuskan tidak dapat dihapus.');

        $assignmentLetter->delete();

        return back()->with('status', 'Surat tugas yang menunggu persetujuan berhasil dihapus.');
    }

    private function authorizeKepegawaian(): void
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);
    }
}
