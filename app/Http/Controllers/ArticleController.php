<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'nullable|string',
            'status' => 'required|in:ativo,inativo'
        ]);

        Article::create($request->all());
        return redirect()->route('articles.index')
                        ->with('success', 'Artigo criado com sucesso!');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'nullable|string',
            'status' => 'required|in:ativo,inativo'
        ]);

        $article->update($request->all());
        return redirect()->route('articles.index')
                        ->with('success', 'Artigo atualizado com sucesso!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')
                        ->with('success', 'Artigo excluído com sucesso!');
    }
}