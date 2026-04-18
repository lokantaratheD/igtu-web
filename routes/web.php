<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Publication;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\PostController;

// Rute utama (Landing Page) diarahkan ke DashboardController
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Rute statis lainnya (sementara kita buat view-nya nanti)
Route::view('/about', 'about')->name('about');
Route::view('/programs', 'programs')->name('programs');
Route::view('/admissions', 'admissions')->name('admissions');
Route::get('/locale/{lang}', function ($lang) {
    // Pastikan hanya bahasa 'en' atau 'id' yang diizinkan
    if (in_array($lang, ['en', 'id'])) {
        session(['locale' => $lang]);
    }
    return back(); // Kembali ke halaman sebelumnya secara otomatis
})->name('switch.lang');
Route::get('/research', function () {
    // Mengambil semua data publikasi dari database, diurutkan dari yang terbaru
    $publications = Publication::latest()->get(); 
    
    return view('research', compact('publications'));
});

Route::view('/partnerships', 'partnerships');
Route::view('/contact', 'contact');
// Rute untuk halaman News & Events
Route::get('/news', function () {
    // Mengambil semua data berita/post, diurutkan dari yang terbaru
    // Asumsi: Anda memiliki model Post. Jika namanya beda (misal: News), sesuaikan ya.
    $posts = Post::latest()->get(); 
    
    return view('news', compact('posts'));
});
Route::view('/community', 'community');
Route::get('/setup-database', function () {
    try {
        // 1. Force Reset Database
        Artisan::call('migrate:fresh', ['--force' => true]);

        // 2. Buat Akun Super Admin Otomatis
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Ganti email jika mau
            [
                'name' => 'Super Admin',
                'password' => bcrypt('admin123') // Ini password sementaranya
            ]
        );

        return 'Success !!';
    } catch (\Exception $e) {
        return 'YAAAH ERROR: ' . $e->getMessage();
    }
});
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post_show');