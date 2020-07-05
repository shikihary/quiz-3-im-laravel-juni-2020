<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel {
    public $timestamps = true;

    public static function get_all() {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function save($data) {
        $new_article = DB::table('articles')->insert($data);

        return $new_article;
    }

    public static function find_by_id($id) {
        $article = DB::table('articles')->where('id', $id)->first();
        return $article;
    }

    public static function update($id, $request) {
        $update =new \DateTime();
        $article = DB::table('articles')
                        ->where('id', $id)
                        ->update([
                            'title' => $request["title"],
                            'content' => $request["content"],
                            'slug' => $request["slug"],
                            'tag' => $request["tag"],
                            'updated_at' => $update,
                        ]);
        return $article;
    }

    public static function destroy($id) {
        $deleted = DB::table('articles')
                        ->where('id', $id)
                        ->delete();
        return $deleted;
    }
}