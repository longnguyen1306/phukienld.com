<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect()->route('admin.index');
        }
        return view('backend.auth.login');
    }

    public function loginSubmit(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'pass' => 'required|min:4'
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                toastr()->error($item[0]);
            }
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->pass])) {
            toastr()->success('Chào bạn quay trở lại');
            return redirect()->route('admin.index');
        }

        toastr()->error('Tên đăng nhập hoặc mật khẩu không đúng.');
        return back()->withInput();;
    }

    public function logout() {
        if (Auth::check()) {
            Auth::logout();
            toastr()->success('hẹn gặp lại');
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('admin.index');
        }
    }
}
