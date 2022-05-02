<?php

namespace App\Models;

use App\Models\User;
use App\Models\question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class answer extends Model
{
    use HasFactory;

    protected $primaryKey = 'answer_id';
    public $table = 'answer';

    public $fillable = [
        'answers',
        'question_id',
        'user_id'
    ];

    public function question()
    {
        return $this->hasMany(question::class, 'question_id', 'question_id');
    }
    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}

