<?php

namespace App\Http\Controllers;

use App\Models\scientists;
use App\Models\subjectcategory;
use App\Models\subjects;
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
    public function AdminNews_update_user(Request $request, $id)
    {

        $Scientists = scientists::findOrFail($id);
        // dd($Scientists);


        return view('news.admin.update-user', compact('Scientists'));
    }
    public function AdminNews_user()
    {
        $Scientists = scientists::all();
        return view('news.admin.users', compact('Scientists'));
    }

    public function AdminNews_add_user_DataPost(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'user' => 'required|string|max:255',
            'password' => 'required',
            'role' => 'required',
        ]);



        scientists::create([
            'fname' =>  $request->fname,
            'lname' =>  $request->lname,
            'user' =>  $request->user,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return redirect()->route('AdminNews_user');
    }

    public function AdminNews_post_DataPost(Request $request)

    {

        // dd($request->name);

        $request->validate([
            'name' => 'required|string|max:255',

        ]);



        subjectcategory::create([
            'name' =>  $request->name,

        ]);

        return redirect()->route('AdminNews_category');
    }


    public function AdminNews_add_post_DataPost(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string|max:255',
            'descriptions' => 'required|string|max:255',
            'subjectcategoriesID' => 'required',
            'scientistsID' => 'required',
        ]);



        subjects::create([
            'title' =>  $request->title,
            'descriptions' =>  $request->descriptions,
            'subjectcategoriesID' => $request->subjectcategoriesID,
            'scientistsID' => $request->scientistsID,
        ]);

        return redirect()->route('AdminNews_user');
    }


    public function AdminNews_update_user_DataPost(Request $request, $id)
    {


        $Scientists = scientists::findOrFail($id);
        // dd($Scientists);
        $Scientists->update([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'user' => $request->input('user'),
            'role' => $request->input('role'),
        ]);


        return redirect()->route('AdminNews_user')->with('success', 'Admin updated successfully.');
    }
}
