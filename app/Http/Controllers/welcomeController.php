<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class welcomeController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->intended($this->redirectTo());
        }
        $category = Category::all();
        $product = Product::all();

        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];
        return view('POS.main', compact('category', 'product'));
    }

    public function redirectTo()
    {
        if (!Auth::check()) {
            return '/login';
        }

        return '/'; // Default redirect if user is not authenticated or has an unrecognized role
    }
}
