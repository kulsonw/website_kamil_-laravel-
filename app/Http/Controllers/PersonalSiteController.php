<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PersonalSiteController extends Controller
{
    public function news(): View
    {
        $newsItems = [
            [
                'category' => 'Technology',
                'title' => 'AI-powered Code Review Tools Gain Traction',
                'excerpt' => 'Teams report faster reviews and fewer regressions after adopting automated code suggestions and static analysis workflows.',
                'published_at' => 'Aug 24, 2026',
                'image' => 'X.jpg',
            ],
            [
                'category' => 'Events',
                'title' => 'Developer Summit Highlights Collaboration Tools',
                'excerpt' => 'Keynotes focused on improving developer experience with better tooling, observability, and remote collaboration.',
                'published_at' => 'Jul 10, 2026',
                'image' => '_Design Kok Pake Ai_ Meme.jpg',
            ],
            [
                'category' => 'Update',
                'title' => 'Open-Source Library Reaches New Milestone',
                'excerpt' => 'Community contributions accelerate feature development and documentation improvements across the project.',
                'published_at' => 'May 3, 2026',
                'image' => 'sabo (@plisitin) on X.jpg',
            ],
        ];

        return view('news', compact('newsItems'));
    }

    public function cv(): View
    {
        return view('cv');
    }

    public function portfolio(): View
    {
        return view('portfolio');
    }

    public function admin(): View
    {
        return view('admin');
    }

    public function subscribe(): View
    {
        return view('subscribe');
    }

    public function storeSubscription(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        return redirect()
            ->route('subscribe')
            ->with('status', 'Your email was not saved. Subscription storage is not connected yet.');
    }
}
