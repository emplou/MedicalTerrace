<?php

namespace MedicalTerrace;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

class Risk_assessment extends Model
{
    use Notifiable;

    protected $table = 'risk_assessment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'ra_ill_id', 'ra_title', 'ra_text', 'ra_risk_lvl', 'ra_result',  
    ];
}
