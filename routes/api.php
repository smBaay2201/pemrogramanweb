<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/home', function (Request $request) {
    return $request->home();
});

Route::post('/api/chatbot', function (Request $request) {
    $message = $request->input('message');

    $context = "Kamu adalah chatbot untuk organisasi BuBaDiBaKo.";

    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
    ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=AIzaSyB9Z3A987Y2BDWxQy9JAxmEpT9od4rw9Jw', [
        'contents' => [[
            'parts' => [['text' => $context . "\n\n" . $message]]
        ]]
    ]);

    if ($response->failed()) {
        return response()->json(['error' => 'Gagal terhubung ke Gemini', 'detail' => $response->body()], 500);
    }

    return response()->json($response->json());
});