<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    public $fillable = ['file_name', 'project_id', 'offer_id'];
    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function offers()
    {
        return $this->belongsTo(Offer::class);
    }
}
