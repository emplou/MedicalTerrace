<?php

namespace MedicalTerrace;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Ill_image extends Model
{
    //

    use Notifiable;

    protected $table = 'ill_image';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'im_id', 'im_ill_id', 'im_file', 'im_caption', 'im_alt',  
    ];
}
