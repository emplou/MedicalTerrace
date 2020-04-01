<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sp_lead extends Model
{
    //

    use Notifiable;

    protected $table = 'sp_lead';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'sp_id', 'text', 
    ];
}
