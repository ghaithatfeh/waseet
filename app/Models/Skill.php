<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];

    public function project()
    {
        return $this->belongsToMany(Project::class, 'project_skills');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_skills');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_skills');
    }
}
