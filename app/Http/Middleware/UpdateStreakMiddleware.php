<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UpdateStreakMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ($user) {
            $today = now()->startOfDay();
            $lastActivity = $user->last_streak_date ? $user->last_streak_date->startOfDay() : null;
            //dd($lastActivity);

            // If last activity was yesterday, increment streak
            if ($lastActivity && $lastActivity->diffInDays($today) == 1) {
                $user->streak_count++;
            } elseif (!$lastActivity || $lastActivity->diffInDays($today) > 1) {
                // If it's been more than a day since last activity, reset streak
                $user->streak_count = 1;
            }

            // Update the last activity date to today
            $user->last_streak_date = $today;
            $user->save();
        }

        return $next($request);
    }
}
