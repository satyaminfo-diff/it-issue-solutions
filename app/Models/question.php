<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    
    public $table='question';
    protected $primaryKey='question_id';
    

    public $fillable = [
        'questions',
        'description',
        'user_id'
    ];
    public function answer()
    {
        return $this->hasMany(answer::class, 'question_id', 'question_id');
    }
    public function users()
    {
        
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
