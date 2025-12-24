<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    // 1. Get Real IP (Trusting the Nginx Proxy)
    $ip = $request->header('X-Forwarded-For') ?? $request->ip();
    // Handle multiple IPs in header
    if (str_contains($ip, ',')) {
        $ip = trim(explode(',', $ip)[0]);
    }

    $userAgent = $request->header('User-Agent');

    // 2. Get Location
    try {
        $geo = Http::timeout(2)->get("http://ip-api.com/json/{$ip}")->json();
        $country = $geo['country'] ?? 'Unknown';
        $city = $geo['city'] ?? 'Unknown';
    } catch (\Exception $e) {
        $country = 'Error';
        $city = 'Error';
    }

    // 3. Log to Container Storage
    $logData = sprintf(
        "| IP: %s | Loc: %s, %s | Device: %s | Time: %s",
        $ip, $city, $country, $userAgent, now()->toDateTimeString()
    );

    Log::build([
        'driver' => 'single',
        'path' => storage_path('logs/visitors.log'),
    ])->info($logData);

    return view('christmas');
});
