<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'expected_deadline', 'status', 'budget_id', 'user_id', 'category_id'];

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
        return $this->belongsToMany(Skill::class, 'project_skills');
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function likes()
    {
        return $this->morphToMany(User::class, 'likeable');
    }
}
