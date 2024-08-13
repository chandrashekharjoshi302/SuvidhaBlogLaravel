<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectcategory extends Model
{
    use HasFactory;


    protected $primaryKey = 'subjectcategoriesID';

    protected $fillable = [
        'name',
    ];

    public function subjects()
    {
        return $this->hasMany(subjects::class, 'subjectcategoriesID');
    }
}
