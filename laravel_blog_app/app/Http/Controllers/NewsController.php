<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function NewsAuthor()
    {

        return view('news.author');
    }

    public function NewsCategory()
    {

        return view('news.category');
    }
    public function News()
    {

        return view('news.index');
    }
    public function NewsSearch()
    {

        return view('news.search');
    }
    public function AdminNews_add_post()
    {

        return view('news.admin.add-post');
    }

    public function AdminNews_add_user()
    {

        return view('news.admin.add-user');
    }
    public function AdminNews_category()
    {

        return view('news.admin.category');
    }
    public function AdminNews_post()
    {

        return view('news.admin.index');
    }
    public function AdminNewsSingle()
    {

        return view('news.admin.post');
    }
    public function AdminNews_update_category()
    {

        return view('news.admin.update-category');
    }
    public function AdminNews_update_post()
    {

        return view('news.admin.update-post');
    }
    public function AdminNews_update_user()
    {

        return view('news.admin.update-user');
    }
    public function AdminNews_user()
    {
        return view('news.admin.users');
    }
}
