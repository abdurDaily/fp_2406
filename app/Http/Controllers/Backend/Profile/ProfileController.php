<?php

namespace App\Http\Controllers\Backend\Profile;

use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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


    //* PASSWORD UPDATE 
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            // 'new_password' => 'required|confirmed',
        ]);


        $passUpdate = Auth::user();

        if (!Hash::check($request->current_password, $passUpdate->password)) {
            return back();
        }



        $passUpdate->password = Hash::make($request->new_password);
        $passUpdate->save();
        Swal::success([
            'title' => 'Password Updated! ',
        ]);
        return back();
    }

    //* IMAGE UPDATE 
    public function imageUpdate(Request $request)
    {

        $authUserImage = Auth::user();

        if ($request->hasFile('image')) {
            $image =  $request->file('image');
            $imageUniName = 'profile-' . time() . $image->getClientOriginalName();
            $image->storeAs('profile/', $imageUniName, 'public');
            $authUserImage->image = $imageUniName;
            $authUserImage->save();
            Swal::success([
                'title' => 'Profile Updated! ',
            ]);
            return back();
        }
    }
}
