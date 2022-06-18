<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    /**
     * 記事一覧情報を表示
     */
    public function showArticleList(Article $article)
    {
        try {
            $articles = $article->getArticleList();
            return view('articles.index', compact('articles'));
        } catch (\Exception $e) {
            Log::emergency('記事一覧の表示に失敗しました' . $articles) ;
            Log::emergency($e->getMessage());
            return $e;
        }
    }
}
