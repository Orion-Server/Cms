<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private const FIXED_ARTICLES_LIST_COUNT_WHEN_AUTH = 4;
    private const FIXED_ARTICLES_LIST_COUNT_WHEN_GUEST = 6;

    private const ARTICLES_LIST_COUNT_WHEN_AUTH = 5;
    private const ARTICLES_LIST_COUNT_WHEN_GUEST = 3;

    public function index(): View
    {
        $isAuthenticated = \Auth::check();

        $articlesListCount = match($isAuthenticated) {
            true => self::ARTICLES_LIST_COUNT_WHEN_AUTH,
            false => self::ARTICLES_LIST_COUNT_WHEN_GUEST
        };

        $fixedArticlesListCount = match($isAuthenticated) {
            true => self::FIXED_ARTICLES_LIST_COUNT_WHEN_AUTH,
            false => self::FIXED_ARTICLES_LIST_COUNT_WHEN_GUEST
        };

        $defaultArticles = Article::forIndex($articlesListCount)->get();
        $fixedArticles = Article::forIndex($fixedArticlesListCount, true)->get();
        $latestUsers = User::latest('account_created')->take(16)->get();

        $compact = [
            'defaultArticles',
            'fixedArticles',
            'latestUsers'
        ];

        if($isAuthenticated) {
            $onlineFriends = \Auth::user()->getOnlineFriends();
            $referredUsersCount = \Auth::user()->referredUsers()->count();

            $compact = array_merge($compact, [
                'onlineFriends',
                'referredUsersCount'
            ]);
        }

        return view('index', compact($compact));
    }
}
