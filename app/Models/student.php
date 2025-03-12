<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'coach_id'];

    public function coach()
    {
        return $this->belongsTo(Coache::class, 'coach_id'); // تأكد من اسم العمود
    }
}

