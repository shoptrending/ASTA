<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\Controller;
use App\Http\Requests\StoreNewsArticleRequest;
use App\Models\NewsArticle;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/** @untested-ignore */
final class AdminNewsController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function index() : View
    {
        // Get all news articles with the associated user...
        $articles = NewsArticle::with('user')->paginate(10);

        return view('admin.news.index', compact('articles'));
    }

    /**
     * Show a form to create a news article.
     */
    public function createArticle() : View
    {
        return view('admin.news.create');
    }

    /**
     * Store a new article.
     */
    public function store(StoreNewsArticleRequest $request) : RedirectResponse
    {
        // Todo: add user_id when login is done.
        $data = $request->validated();

        $user = User::where('username', '=', 'admin')->first();

        // Ensure unique slug on minimal way...
        if (NewsArticle::where('slug', $data['slug'])->exists())
        {
            $data['slug'] .= '-' . Str::random(6);
        }

        NewsArticle::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'is_published' => $data['is_published'] ?? false,
            'published_at' => $data['published_at'] ?? now(),
            'slug' => Str::slug($data['slug']),
            'user_id' => $user->id,
        ]);

        return redirect()->route('admin.news.index')->with('status', 'Artikel toegevoegd');
    }
}
