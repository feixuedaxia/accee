<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    protected $fillable=[
        'post_title',
        'post_content',
        'post_name',
        'published_at',
        'post_author_id'//temporary
    ];

    protected $dates=['published_at'];

    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }
    public function scopeUnpublished($query){
        $query->where('published_at','>',Carbon::now());
    }

    //setNameAttribute

    public function setPublishedAtAttribute($date){

        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);//Carbon::parse($date);
    }

    /**
     * An article is owned by a user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){

        return $this->belongsTo('App\User','post_author_id');
    }

    public function terms()
    {
        return $this->belongsToMany('App\Term', 'term_post', 'post_id', 'term_id');
    }

    /**
     * Get the tags associated with the given article.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the current article.
     * @return array
     */
    public function getTagListAttribute(){
        return $this->tags()->lists('id')->toArray();
    }
}
