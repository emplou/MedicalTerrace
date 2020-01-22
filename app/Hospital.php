<?php

namespace MedicalTerrace;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //
    use Notifiable;

    protected $table = 'dv_hospital';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name',
    ];
}
