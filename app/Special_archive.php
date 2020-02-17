<?php

namespace MedicalTerrace;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Special_archive extends Model
{
    //
    use Notifiable;

    protected $table = 'special_archive';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'special_id', 
    ];
}
