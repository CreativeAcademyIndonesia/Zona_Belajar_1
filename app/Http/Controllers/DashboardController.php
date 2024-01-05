<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];

        $user = User::all();
        $category = Category::all();
        $product = Product::all();
        return view('dashboard.index', compact('user', 'data', 'category', 'product'));
    }

    // User
    public function add_user(request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => '$2y$12$.xhztb7ZelgrS2uneu.r5eap0Hc3QDBbkj9z1/UGSFHzot9HwQcyW',
        ]);

        return redirect()->route('dashboard')->with('success', 'Data User berhasil disimpan.');
    }

    public function edit_user(request $request)
    {
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();
        return redirect()->route('dashboard')->with('success', 'Data User berhasil diperbarui.');
    }

    public function delete_user(request $request)
    {
        $user = User::find($request->input('id'));
        if ($user) {
            $user->delete();
            return redirect()->route('dashboard')->with('success', 'Data user berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data user tidak ditemukan.');
        }
    }

    // Category 
    public function add_category(request $request)
    {
        Category::create([
            'category' => $request->input('category'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Category berhasil disimpan.');
    }

    public function edit_category(request $request)
    {
        $category = Category::find($request->input('id'));
        $category->category = $request->input('category');
        $category->status = $request->input('status');
        $category->save();
        return redirect()->route('dashboard')->with('success', 'Data Category berhasil diperbarui.');
    }

    public function delete_category(request $request)
    {
        $category = Category::find($request->input('id'));
        if ($category) {
            $category->delete();
            return redirect()->route('dashboard')->with('success', 'Data Category berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data Category tidak ditemukan.');
        }
    }

    // Product 
    public function add_product(request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:png,jpg,jpeg,svg|max:7000',
        ]);

        $imageName = time() . '.' . $request->foto->extension(); // Fix here
        $request->foto->storeAs('images', $imageName); // Fix here

        Product::create([
            'category' => $request->input('category'),
            'type_kamar' => $request->input('type_kamar'),
            'ac' => $request->input('ac'),
            'kamar_mandi' => $request->input('kamar_mandi'),
            'kamar_tidur' => $request->input('kamar_tidur'),
            'furniture' => $request->input('furniture'),
            'harga' => $request->input('harga'),
            'stock' => $request->input('stock'),
            'foto' => $imageName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Product berhasil disimpan.');
    }

    public function edit_product(request $request)
    {
        $product = Product::find($request->input('id'));

        $product->category = $request->input('category');
        $product->type_kamar = $request->input('type_kamar');
        $product->ac = $request->input('ac');
        $product->kamar_mandi = $request->input('kamar_mandi');
        $product->kamar_tidur = $request->input('kamar_tidur');
        $product->furniture = $request->input('furniture');
        $product->harga = $request->input('harga');
        $product->stock = $request->input('stock');

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:png,jpg,jpeg,svg|max:7000',
            ]);

            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('images', $imageName);

            $product->foto = $imageName;
        }

        $product->save();
        return redirect()->route('dashboard')->with('success', 'Data Product berhasil diperbarui.');
    }

    public function delete_product(request $request)
    {
        $product = Product::find($request->input('id'));
        if ($product) {
            $product->delete();
            return redirect()->route('dashboard')->with('success', 'Data Product berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data Product tidak ditemukan.');
        }
    }
}
