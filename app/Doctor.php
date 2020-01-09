<?php

namespace MedicalTerrace;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    use Notifiable;

    protected $table = 'dv_doctors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name',
    ];
}
