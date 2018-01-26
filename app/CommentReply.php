<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    //
    protected $fillable = ['comment_id', 'body', 'user_id', 'is_active'];

    public function comment(){
        return $this->belongsTo('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }

}
