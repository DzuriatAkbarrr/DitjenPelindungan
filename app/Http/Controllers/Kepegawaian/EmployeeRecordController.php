<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\EmployeeRecord;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeRecordController extends Controller
{
    public function index(): View
    {
        $this->authorizeKepegawaian();

        return view('kepegawaian.pegawai.index', [
            'employees' => EmployeeRecord::query()->orderBy('name')->get(),
            'activeCount' => EmployeeRecord::where('status', 'Aktif')->count(),
            'inactiveCount' => EmployeeRecord::where('status', 'Nonaktif')->count(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->authorizeKepegawaian();

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nip' => ['required', 'string', 'max:30', 'unique:employee_records,nip'],
            'unit' => ['required', 'string', 'max:150'],
        ]);

        EmployeeRecord::create($data);

        return back()->with('status', 'Data pegawai berhasil ditambahkan.');
    }

    public function updateStatus(Request $request, EmployeeRecord $employeeRecord): RedirectResponse
    {
        $this->authorizeKepegawaian();

        $data = $request->validate(['status' => ['required', 'in:Aktif,Nonaktif']]);
        $employeeRecord->update($data);

        return back()->with('status', 'Status pegawai berhasil diperbarui.');
    }

    public function destroy(EmployeeRecord $employeeRecord): RedirectResponse
    {
        $this->authorizeKepegawaian();
        abort_unless($employeeRecord->status === 'Nonaktif', 422, 'Nonaktifkan pegawai sebelum menghapus datanya.');

        $employeeRecord->delete();

        return back()->with('status', 'Data pegawai nonaktif berhasil dihapus.');
    }

    private function authorizeKepegawaian(): void
    {
        abort_unless(auth()->user()->role === 'kepegawaian', 403);
    }
}
