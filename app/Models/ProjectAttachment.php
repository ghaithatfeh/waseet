<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectAttachment extends Model
{
    use HasFactory;
    public $fillable = ['file_name', 'project_id'];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
