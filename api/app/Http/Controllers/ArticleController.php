<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show()
    {
        return(Article::all());
    }

    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();

    }
}
