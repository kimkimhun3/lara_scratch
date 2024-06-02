<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    //to define the relation between the note and the owner
    protected $fillable = ['note', 'user_id'];
}
