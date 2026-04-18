<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Publication;

class DashboardService
{
    /**
     * Mengambil postingan aktif terbaru
     */
    public function getLatestPosts(int $limit = 3)
    {
        return Post::where('is_active', true)
                   ->latest('published_at')
                   ->take($limit)
                   ->get();
    }

    /**
     * Mengambil data publikasi terbaru
     */
    public function getRecentPublications(int $limit = 3)
    {
        return Publication::latest('publication_year')
                          ->take($limit)
                          ->get();
    }
}