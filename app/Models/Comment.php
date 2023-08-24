<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    #To get the info of the owner of the comment
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
