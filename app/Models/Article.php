<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Article extends Model
{
    use HasFactory;

    /**
     * 記事一覧情報を取得
     */
    public function getArticleList()
    {
        try {
            $articles = $this->orderBy('created_at', 'desc')->get();
            return $articles;
        } catch (\Exception $e) {
            Log::emergency('記事一覧の取得に失敗しました' . $articles) ;
            Log::emergency($e->getMessage());
            return $e;
        }
    }
}
