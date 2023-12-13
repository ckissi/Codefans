<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use App\Notifications\VerifyEmailQueued;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'streak_count',
        'last_streak_date',
        'provider_id',
        'provider',
        'token',
        'token_secret',
        'avatar',
        'email_verified_at',
        'uuid',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'last_streak_date' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    /**
     * Generate a unique nickname for the user.
     *
     * @param string $name
     * @param string $surname
     * @return string
     */
    public static function generateUniqueNickname($name)
    {
        $baseNickname = Str::lower(preg_replace('/\s+/', '', $name));
        $nickname = $baseNickname;
        $counter = 1;

        // Check if the nickname exists
        while (UserDetail::where('nickname', $nickname)->exists()) {
            $nickname = $baseNickname . $counter;
            $counter++;
        }

        return $nickname;
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailQueued);
    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new \App\Notifications\ResetPasswordQueued($token));
    }
}
