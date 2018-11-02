<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $guarded = [];

    public function user(){
        $this->belongsTo(User::class);
    }
    public function message(){
        $this->belongsTo(Messege::class);
    }
}
