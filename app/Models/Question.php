<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'buddy'];
    public function user(){
        return $this->belongTo(User::class);
    }

    //$question = Question::find(1);
    //$question->user->email

}
