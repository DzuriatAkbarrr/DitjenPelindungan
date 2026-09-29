<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Services\DashboardSummary;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(DashboardSummary $summary): View
    {
        abort_unless(Auth::user()->role === 'kepegawaian', 403);

        return view('kepegawaian.dashboard', $summary->make());
    }
}
