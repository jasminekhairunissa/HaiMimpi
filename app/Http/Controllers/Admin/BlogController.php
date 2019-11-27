<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class BlogController extends \App\Http\Controllers\Controller
{
    public function showAll(){
        return view('blog', [
            'articles' => Article::withoutGlobalScopes()->published()->get(),
            'categories' => Category::all()]);
    }

    public function showArticle(){
        return view('blog', [
            'article' => Article::withoutGlobalScopes()->published()->findOrFail($id),
            'categories' => Category::all()]);
    }
}
