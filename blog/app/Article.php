<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'title',
        'introduction',
        'author',
        'content',
        'published_at'
    ];

    protected $dates = ['published_at','deleted_at'];


//    public function setPublishedAtAttribute($date){
//        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
//        $this->attributes['published_at'] = Carbon::parse('Y-m-d',$date);
//    }


    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

//    public function getTagListAttribute(){
//        return $this->tags()->pluck('id');
//    }
}
