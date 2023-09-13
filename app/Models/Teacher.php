<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'name', 'name');
    }
}
