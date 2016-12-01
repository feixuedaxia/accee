<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{

	protected $table='terms';               
	protected $fillable = ['name', 'alias', 'description'];
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'term_post', 'term_id', 'post_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'term_user', 'term_id', 'user_id');
    }
}
