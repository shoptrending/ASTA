<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\Controller;
use App\Models\NewsArticle;
use Illuminate\Contracts\View\View;
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
    public function createArticle()
    {
        return view('admin.news.create');
    }

    /**
     * Store a new article.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'is_published' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
        ]);

        $data['is_published'] = (bool) ($data['is_published'] ?? false);
        $data['slug'] = Str::slug($data['title']);

        // Ensure unique slug on minimal way...
        if (NewsArticle::where('slug', $data['slug'])->exists())
        {
            $data['slug'] .= '-' . Str::random(6);
        }

        NewsArticle::create($data);

        return redirect()->route('admin.news.index')->with('status', 'Artikel toegevoegd');
    }
}
