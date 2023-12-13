<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Notifications\StreakMilestoneNotification;

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

                // Notify user at streak milestones
                if (in_array($user->streak_count, [10, 20, 30, 40, 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750, 800, 850, 900, 950, 1000])) {
                    $user->notify(new StreakMilestoneNotification($user->streak_count));
                }
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
