<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class, 'name', 'name');
    }
}
