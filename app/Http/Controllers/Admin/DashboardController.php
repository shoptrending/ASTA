<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Contracts\Controller;
use Illuminate\Contracts\View\View;

/** @untested-ignore */
final class DashboardController extends Controller
{
    /**
     * Show all resources.
     */
    public function index() : View
    {
        return view('pages.admin.dashboard.index');
    }
}
