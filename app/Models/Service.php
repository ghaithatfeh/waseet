<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'deadline', 'price', 'category_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'service_skills');
    }
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
}
