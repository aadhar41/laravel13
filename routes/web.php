<?php

use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use Laravel\Ai\Ai;
use Laravel\Fortify\Features;
use function Laravel\Ai\agent;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::inertia('dashboard', 'dashboard')->name('dashboard');
    });

Route::middleware(['auth'])->group(function () {
    Route::get('invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('invitations.accept');
});

// Route::get('/ai-test', function () {
//     // Using the newer 3.1 Lite model which has better availability
//     return agent()->prompt("I am a Senior Developer in Jaipur building a specialized SaaS using Laravel 13. 
//  Give me 3 short, punchy, and professional taglines for my app.", model: 'gemini-3.1-flash-lite-preview');
// });


Route::get('/ai-test', function () {
    try {
        // This confirms your Gemini key is active and working
        return agent()->prompt(
            "I am a Senior Developer in Jaipur building a specialized SaaS using Laravel 13. 
             Give me 3 short, punchy, and professional taglines for my app."
        );
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});


require __DIR__ . '/settings.php';
