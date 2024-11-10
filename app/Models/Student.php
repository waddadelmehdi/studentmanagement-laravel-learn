<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Static_;

class Student extends Model{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = ['name', 'age', 'gender','gender','email'];

    public function course()
    {
        return $this->belongsTo(Course::class);

    }

}
