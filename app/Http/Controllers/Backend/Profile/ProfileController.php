<?php

namespace App\Http\Controllers\Backend\Profile;

use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //INDEX
    public function index()
    {
        $authenticateUserInfo = Auth::user();
        return view('backend.profile.index', compact('authenticateUserInfo'));
    }


    //* STORE METHOD 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . Auth::user()->id,
        ]);


        $authenticateUserUpdate = Auth::user();
        // dd($authenticateUserUpdate);
        $authenticateUserUpdate->name = $request->name;
        $authenticateUserUpdate->email = $request->email;
        $authenticateUserUpdate->save();
        Swal::success([
            'title' => 'Profile Updated! ',
        ]);
        return back();
    }
}
