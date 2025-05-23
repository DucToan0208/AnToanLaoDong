<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryPost;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;



class HomepageController extends Controller
{
    public function index(){
        $category_posts = CategoryPost::all();
        $carts = Cart::where('id_user', Auth::id())->paginate(5);
        $count_carts = Cart::where('id_user', Auth::id())->count();
        $users = Auth::user();

        return view('User.homepage.index',compact('category_posts','carts','count_carts','users'));
    }

    public function indexIntroduce(){
        $category_posts = CategoryPost::all();
        $carts = Cart::where('id_user', Auth::id())->paginate(5);
        $count_carts = Cart::where('id_user', Auth::id())->count();
        $users = Auth::user();
        return view('User.introduce.index',compact('category_posts','carts','count_carts','users'));
    }

    public function indexRecruitment(){
        $category_posts = CategoryPost::all();
        $carts = Cart::where('id_user', Auth::id())->paginate(5);
        $count_carts = Cart::where('id_user', Auth::id())->count();
        $users = Auth::user();
        return view('User.recruitment.index',compact('category_posts','carts','count_carts','users'));
    }
}
