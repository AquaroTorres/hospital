<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'birthDate',
        'gender',
    ];

    public function allergies() {
    	return $this->belongsToMany('\App\Models\Allergy','allergy_patient')->withTimestamps();
    }


}
