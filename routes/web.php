<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $laravelVersion = app()->version();

    $path = base_path('vendor/composer/installed.json');
    $packages = collect();

    if (File::exists($path)) {
        $data = json_decode(File::get($path), true);
        $list = $data['packages'] ?? $data; // compatibility: some installs nest under 'packages'
        $packages = collect($list)->map(function ($p) {
            return [
                'name' => $p['name'] ?? null,
                'version' => $p['version'] ?? ($p['version_normalized'] ?? 'N/A'),
            ];
        })->sortBy('name')->values();
    }

    $message = 'Hello Laravel + Bootstrap 5!';

    return view('welcome', compact('packages', 'laravelVersion', 'message'));
});

Route::post('/forms-demo', function (Request $request) {
    $validated = request()->validate([
        'name' => 'required|string|min:3|max:60',
        'email' => 'required|email',
        'username' => 'required|string',
        'role' => 'required|in:user,admin,guest',
        'plan' => 'required|in:basic,pro',
        'agree' => 'accepted',
        'notifications' => 'array',
        'notifications.*' => 'in:email,sms,push',
        'message' => 'nullable|string|max:500',
    ]);

    // itt feldolgozhatod az adatokat
    return back()->with('status', 'Űrlap sikeresen beküldve ✅');
})->name('form-demo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
