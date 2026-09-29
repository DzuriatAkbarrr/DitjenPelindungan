<?php

namespace App\Http\Controllers\Sesditjen;

use App\Http\Controllers\Controller;
use App\Services\DashboardSummary;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(DashboardSummary $summary): View
    {
        abort_unless(Auth::user()->role === 'sesditjen', 403);

        return view('sesditjen.dashboard', $summary->make());
    }
}
