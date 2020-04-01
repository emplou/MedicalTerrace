<?php

namespace MedicalTerrace;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    //

    use Notifiable;

    protected $table = 'illness';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'ill_id', 'ill_name',  
    ];
}
           