<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    /** @use HasFactory<\Database\Factories\DealFactory> */
    use HasFactory;

    public function owner(){
        return $this->belongsTo(User::class,'owner_id');
    }

    public function org(){
        return $this->belongsTo(Organization::class);
    }
}
