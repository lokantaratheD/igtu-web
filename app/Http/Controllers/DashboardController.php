<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DashboardService;

class DashboardController extends Controller
{
    protected $dashboardService;

    // Dependency Injection: Laravel akan otomatis menginisialisasi DashboardService
    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function index()
    {
        // Memanggil data melalui jembatan Service
        $latestPosts = $this->dashboardService->getLatestPosts(3);
        $recentPublications = $this->dashboardService->getRecentPublications(3);

        // Melempar data ke tampilan frontend (misal: view 'welcome' atau 'home')
        return view('welcome', compact('latestPosts', 'recentPublications'));
    }
}