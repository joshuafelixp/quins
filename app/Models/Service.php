<?php

namespace App\Models;

use App\Models\Mitra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'service_name',
    //     'image',
    //     'description'
    // ];

    protected $guarded = [
        'id'
    ];

    public function mitra()
    {
        return $this->hasMany(Mitra::class);
    }
}
