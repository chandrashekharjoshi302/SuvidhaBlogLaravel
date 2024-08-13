<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    use HasFactory;

    protected $primaryKey = 'subjectsID';

    protected $fillable = [
        'title',
        'descriptions',
        'subjectcategoriesID',
        'scientistsID',
    ];

    public function scientist()
    {
        return $this->belongsTo(scientists::class, 'scientistsID');
    }

    public function category()
    {
        return $this->belongsTo(subjectcategory::class, 'subjectcategoriesID');
    }
}
