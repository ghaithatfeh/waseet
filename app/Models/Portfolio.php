<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'url',
        'description',
        'main_image',
        'category_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'portfolio_skills');
    }

    public function viewers()
    {
        return $this->belongsToMany(User::class, 'portfolio_viewers');
    }
}
