<?php

namespace MedicalTerrace;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DepartmentExam extends Authenticatable
{
    //

    use Notifiable;

    protected $table = 'hospital_departments_exam';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
    ];
}
