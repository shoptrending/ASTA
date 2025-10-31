<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Contracts\Controller;
use App\Http\Requests\StoreNewsArticleRequest;
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
        // Todo: add user_id when login is done.
        $data = $request->validated();

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
     * update an existing article.
     */
    public function update() : View
    {
        //
    }
}
