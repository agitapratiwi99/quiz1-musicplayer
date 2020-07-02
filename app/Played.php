<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    //
    public function track()
    {
        return $this->belongsTo('App\Track', 'play_id_track');
    }
    protected $table ='tb_played';
    protected $primaryKey ='play_id';

    protected $fillable = ['play_id_album'];
}
