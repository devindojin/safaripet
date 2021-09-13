<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetImageId extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id', 'pet_im_id', 'status'
    ];
}
