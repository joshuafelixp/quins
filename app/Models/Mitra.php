<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'service_id'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
