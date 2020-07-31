<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * この投稿をいいね中のユーザ。（ Userモデルとの関係を定義）
     */
    public function users()
    {
        return $this->belongsToMany(Micropost::class, 'user_favorites', 'micropost_id','user_id' )->withTimestamps();
    }
}