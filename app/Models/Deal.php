<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public function owner(){
        $this->belongsTo(User::class,'owner_id');
    }

    public function org(){
        $this->belongsTo(Org::class);
    }
}
