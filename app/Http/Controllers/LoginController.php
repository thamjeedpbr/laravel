<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = $request->all();
        if (Auth::guard('web')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
            if (Auth::guard('web')->user()) {
                if (Auth::guard('web')->user()->type == "admin") {
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->back()->with('error_message', ' Invalid User');
                }
            } else {
                return redirect()->back()->with('error_message', ' Invalid User');
            }
        } else {
            return redirect()->back()->with('error_message', ' Invalid credentials');
        }
    }
    public function change_password_view()
    {
        return view('Super.change_password');
    }
    public function update_password(Request $request)
    {
        $request->validate([
            'old_Password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        $change_password = Auth::user()->password;
        if (Hash::check($request->old_Password, $change_password)) {

            $model = User::find(Auth::user()->id);
            $model->password = Hash::make($request->password);
            $model->save();
            return redirect()->back()->with('success', 'Password changed Successfully');
        } else {
            return redirect()->back()->with("error", "Something went wrong");
        }
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');
    }
}
