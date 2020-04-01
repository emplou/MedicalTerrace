<?php

namespace MedicalTerrace;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Illness_archive extends Model
{
    //
    use Notifiable;

    protected $table = 'illness_archive';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'illness_id', 
    ];
}
