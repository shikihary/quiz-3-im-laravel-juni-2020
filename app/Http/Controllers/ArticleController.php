<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public function index() {
        $articles = ArticleModel::get_all();
        return view('article.index', compact('articles'));
    }

    public function create() {
        return view('article.create');
    }

    public function store(Request $request) {
        //dd($request->all());
        $data = $request->all();
        $data['slug'] = strtolower(str_replace(" ","-",$data['title']));
        $data['created_at'] =new \DateTime();
        $data['updated_at'] =new \DateTime();
        unset($data["_token"]);
        $article = ArticleModel::save($data);
        if($article) {
            return redirect('articles');
        }
    }

    public function show($id) {
        $article = ArticleModel::find_by_id($id);

        return view('article.show', compact('article'));
    }

    public function edit($id) {
        $article = ArticleModel::find_by_id($id);

        return view('article.edit', compact('article'));
    }

    public function update($id, Request $request) {
        $article = ArticleModel::update($id, $request->all());
        return redirect('/articles');
    }

    public function destroy($id) {
        $deleted = ArticleModel::destroy($id);
        return redirect('/articles');
    }
}
