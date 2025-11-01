<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Contracts\Controller;
use App\Http\Requests\StoreNewsArticleRequest;
use App\Http\Requests\UpdateNewsArticleRequest;
use App\Models\NewsArticle;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

/** @untested-ignore */
final class NewsController extends Controller
{
    /**
     * Show all news articles.
     */
    public function index() : View
    {
        // Get all news articles with the associated user...
        $articles = NewsArticle::latest()->paginate(10);

        return view('pages.admin.news.index', compact('articles'));
    }

    /**
     * Display the specified news article.
     */
    public function show(NewsArticle $article) : View
    {
        return view('pages.admin.news.show', compact('article'));
    }

    /**
     * Show a form to create a news article.
     */
    public function create() : View
    {
        return view('pages.admin.news.create');
    }

    /**
     * Store a new article.
     */
    public function store(StoreNewsArticleRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        // Todo: add user_id to form request when login is done.
        $user = User::where('username', '=', 'admin')->first();

        NewsArticle::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'is_published' => $data['is_published'] ?? false,
            'published_at' => $data['published_at'] ?? now(),
            'user_id' => $user->id,
        ]);

        return redirect()->route('admin.news.index')->with('status', 'Artikel toegevoegd');
    }

    /**
     * Show the form for editing the specified news article.
     */
    public function edit(NewsArticle $article) : View
    {
        return view('pages.admin.news.edit', compact('article'));
    }

    /**
     * Update the specified news article in storage.
     */
    public function update(UpdateNewsArticleRequest $request, NewsArticle $article) : RedirectResponse
    {
        $data = $request->validated();

        $article->update([
            'title' => $data['title'],
            'content' => $data['content'],
            'published_at' => $data['published_at'] ?? now(),
        ]);

        return redirect()->route('admin.news.index')->with('status', 'Artikel bijgewerkt');
    }

    /**
     * Destroy the specified article.
     */
    public function destroy(NewsArticle $article) : RedirectResponse
    {
        $article->delete();

        return redirect()->route('admin.news.index')->with('status', 'Artikel verwijderd');
    }
}
