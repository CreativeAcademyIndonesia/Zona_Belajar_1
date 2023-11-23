<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'Master User',
            'content' => 'Ini adalah halaman Master User.'
        ];
        return view('dashboard.masterUser.index', $data);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        return redirect()->route('users.index');
    }

}
