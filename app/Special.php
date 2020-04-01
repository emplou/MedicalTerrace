<?php

namespace MedicalTerrace;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    //

    use Notifiable;

    protected $table = 'special';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'sp_id', 'sp_title',
    ];
}
