<?php

class ArticlesController extends Controller{
  public function index()
  {
    return ('ff');
  }

    public function create()
    {
        return View::make('articles.create');
    }
    public function store()
     {
        // ①フォームの入力値を取得
        $inputs = \Request::all();

        // ②マスアサインメントを使って、記事をDBに作成
        //Article::create($inputs);

        // ③記事一覧へリダイレクト
        //return redirect('articles');
        echo $inputs;
    }
}

?>
