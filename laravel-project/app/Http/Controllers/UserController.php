<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        
        return view('user/edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user()
            ->update([
                'email' => $request->email,
                'name' => $request->name,
            ]);
        return redirect("/shop");
    }
}
