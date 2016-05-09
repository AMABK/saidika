<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    
    protected $fillable = ['question','answer_id','q_status'];
    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }
}
