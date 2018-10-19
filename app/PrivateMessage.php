<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class PrivateMessage extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
