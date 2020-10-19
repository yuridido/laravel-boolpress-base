<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public $timestamps = false; //per evitare errore visto che non inserisco timestamp
    protected $fillable = [
        'telefono', 'avatar', 'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
