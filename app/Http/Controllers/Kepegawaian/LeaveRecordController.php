<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\LeaveRecord;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class LeaveRecordController extends Controller
{
    public function index(): View
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);

        $records = LeaveRecord::query()->latest('start_date')->latest()->get();

        return view('kepegawaian.cuti.index', [
            'records' => $records,
            'total' => $records->count(),
            'pending' => $records->where('status', 'Menunggu')->count(),
            'approved' => $records->where('status', 'Disetujui')->count(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);

        $data = $request->validate([
            'employee_name' => ['required', 'string', 'max:255'],
            'employee_number' => ['nullable', 'string', 'max:30'],
            'unit' => ['required', 'string', 'max:150'],
            'leave_type' => ['required', 'in:Tahunan,Sakit,Melahirkan,Penting,Alasan lain'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'reason' => ['required', 'string', 'max:2000'],
        ]);

        $data['days'] = (int) Carbon::parse($data['start_date'])->diffInDays(Carbon::parse($data['end_date'])) + 1;
        $data['created_by'] = $request->user()->id;
        LeaveRecord::create($data);

        return redirect()->route('kepegawaian.cuti.index')->with('status', 'Pengajuan cuti berhasil disimpan.');
    }

    public function destroy(LeaveRecord $leaveRecord): RedirectResponse
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);

        $leaveRecord->delete();

        return redirect()->route('kepegawaian.cuti.index')->with('status', 'Rekap cuti berhasil dihapus.');
    }
}
