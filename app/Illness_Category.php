<?php

namespace MedicalTerrace;
namespace App;
use Illuminate\Database\Eloquent\Model;

class Illness_Category extends Model
{
    //

    use Notifiable;

    protected $table = 'illness_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
    ];
}
