<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Micropost;
use Auth;

class FavoritesController extends Controller
{
    public function store($micropostId)  //Micropost $micropost
    {
    /**
     * 投稿をいいねするアクション。
     */
        // 認証済みユーザ（閲覧者）が、 idの投稿をいいねする
        \Auth::user()->favorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * 投稿のいいねをはずすアクション。
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->unfavorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
