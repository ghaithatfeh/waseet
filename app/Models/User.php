<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $dates = ['birthdate', 'last_login'];
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'job_name',
        'description',
        'phone',
        'social_media',
        'gender',
        'birthdate',
        'profile_image',
        'status',
        'category_id',
        'country_id',
        'last_login'
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
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Category::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skills');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    // Likeable
    public function likes()
    {
        return $this->morphToMany(User::class, 'likeable');
    }

    public function likedProjects()
    {
        return $this->morphedByMany(Project::class, 'likeable');
    }

    public function likedOffer()
    {
        return $this->morphedByMany(Offer::class, 'likeable');
    }

    public function likedService()
    {
        return $this->morphedByMany(Service::class, 'likeable');
    }

    public function likedPortfolios()
    {
        return $this->morphedByMany(Portfolio::class, 'likeable');
    }

    public function likedUsers()
    {
        return $this->morphedByMany(User::class, 'likeable');
    }


    public function filled()
    {
        $attributes = collect($this->attributes);
        unset(
            $attributes['id'],
            $attributes['email_verified_at'],
            $attributes['remember_token'],
            $attributes['status'],
            $attributes['social_media'],
            $attributes['created_at'],
            $attributes['updated_at'],
            $attributes['last_login'],
        );

        $totalCount  = $attributes->count();
        $filledCount = 0;

        $attributes->keys()
            ->map(function ($key) use (&$filledCount) {
                !empty($this->{$key}) ? $filledCount++ : $filledCount;
            });

        return ($filledCount / $totalCount) * 10;
    }


    public function chats()
    {
        return $this->belongsToMany(Chat::class, 'user_chat');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
