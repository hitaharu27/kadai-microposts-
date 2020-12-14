<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
public function store($id)
        {
            // 認証済み投稿（閲覧者）が、 idの投稿をお気に入り追加する
            \Auth::user()->favorite($id);
            // 前のURLへリダイレクトさせる
            return back();
        }
    
        /**
         * 投稿をアンお気に入り追加するアクション。
         *
         * @param  $id  相手投稿のid
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            // 認証済み投稿（閲覧者）が、 idの投稿をお気に入り削除する
            \Auth::user()->unfavorite($id);
            // 前のURLへリダイレクトさせる
            return back();
        }
}
