<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preinscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'fisrt_name', 'gender', 'birth_date', 'branch', 'level', 'sup_infos',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_validate' => 'false',
    ];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
