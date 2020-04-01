<?php

namespace MedicalTerrace;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Ill_graph extends Model
{
    //

    use Notifiable;

    protected $table = 'ill_graph';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'ig_id', 'ig_ill_id', 'ig_img', 'ig_caption', 'ig_details', 'ig_txt', 'ig_alt', 'ig_title',
    ];
}
