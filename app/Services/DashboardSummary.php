<?php

namespace App\Services;

use App\Models\AssignmentLetter;
use App\Models\EmployeeRecord;
use App\Models\LeaveRecord;
use Carbon\CarbonImmutable;

class DashboardSummary
{
    public function make(): array
    {
        $today = CarbonImmutable::today();
        $weekStart = $today->subDays(6);

        $weekRecords = LeaveRecord::query()
            ->whereDate('created_at', '>=', $weekStart)
            ->whereDate('created_at', '<=', $today)
            ->get(['created_at']);

        $assignmentWeekRecords = AssignmentLetter::query()
            ->whereDate('created_at', '>=', $weekStart)
            ->whereDate('created_at', '<=', $today)
            ->get(['created_at']);

        $dailyCounts = $weekRecords
            ->groupBy(fn (LeaveRecord $record) => $record->created_at->toDateString())
            ->map(fn ($records) => $records->count());

        $week = collect(range(0, 6))->map(function (int $offset) use ($weekStart, $dailyCounts) {
            $date = $weekStart->addDays($offset);
            $key = $date->toDateString();

            return [
                'label' => $date->locale('id')->translatedFormat('D'),
                'date' => $date->format('d/m'),
                'count' => (int) $dailyCounts->get($key, 0),
            ];
        });

        $assignmentDailyCounts = $assignmentWeekRecords
            ->groupBy(fn (AssignmentLetter $record) => $record->created_at->toDateString())
            ->map(fn ($records) => $records->count());

        $assignmentWeek = collect(range(0, 6))->map(function (int $offset) use ($weekStart, $assignmentDailyCounts) {
            $date = $weekStart->addDays($offset);
            $key = $date->toDateString();

            return [
                'label' => $date->locale('id')->translatedFormat('D'),
                'date' => $date->format('d/m'),
                'count' => (int) $assignmentDailyCounts->get($key, 0),
            ];
        });

        return [
            'today' => $today->locale('id')->translatedFormat('l, d F Y'),
            'totalEmployees' => EmployeeRecord::count(),
            'activeEmployees' => EmployeeRecord::where('status', 'Aktif')->count(),
            'inactiveEmployees' => EmployeeRecord::where('status', 'Nonaktif')->count(),
            'pendingLeaveCount' => LeaveRecord::where('status', 'Menunggu')->count(),
            'monthlyLeaveCount' => LeaveRecord::whereBetween('created_at', [$today->startOfMonth(), $today->endOfMonth()])->count(),
            'week' => $week,
            'latestPendingLeaves' => LeaveRecord::query()->where('status', 'Menunggu')->latest()->limit(5)->get(),
            'latestLeaves' => LeaveRecord::query()->latest()->limit(5)->get(),
            'totalAssignments' => AssignmentLetter::count(),
            'pendingAssignments' => AssignmentLetter::where('status', 'Menunggu')->count(),
            'approvedAssignments' => AssignmentLetter::where('status', 'Disetujui')->count(),
            'rejectedAssignments' => AssignmentLetter::where('status', 'Ditolak')->count(),
            'monthlyAssignments' => AssignmentLetter::whereBetween('created_at', [$today->startOfMonth(), $today->endOfMonth()])->count(),
            'assignmentWeek' => $assignmentWeek,
            'latestPendingAssignments' => AssignmentLetter::query()->where('status', 'Menunggu')->latest()->limit(5)->get(),
            'latestAssignments' => AssignmentLetter::query()->with('reviewer')->latest()->limit(5)->get(),
            'unitCounts' => EmployeeRecord::query()
                ->selectRaw('unit, COUNT(*) as total, SUM(status = ?) as active', ['Aktif'])
                ->groupBy('unit')
                ->orderBy('unit')
                ->get(),
        ];
    }
}
