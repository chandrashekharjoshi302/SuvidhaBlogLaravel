<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scientists extends Model
{
    use HasFactory;

    protected $primaryKey = 'scientistsID';

    protected $fillable = [
        'fname',
        'lname',
        'user',
        'password',
        'role',
    ];

    public function subjects()
    {
        return $this->hasMany(subjects::class, 'scientistsID');
    }
}
