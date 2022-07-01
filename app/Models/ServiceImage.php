<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['service_id', 'image_name'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
