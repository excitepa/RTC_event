<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthController extends Controller
{
    use ValidatesRequests;
    //
    public function login()
    {
        try
        {
            return view('login');
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function admin_login(Request $request)
    {
        try{
            $this->validate($request, [
                'email' => 'bail|required|email',
                'password' => 'bail|required'
            ]);

            if ($user = Auth::attempt([
                    'email' => $request->email,
                    'password' => $request->password
                ]))
            {
                $user = User::where('id', Auth::user()->id)->first();

                return redirect()->route('admin.dashboard')->with('success', 'You have successfully logged in');
            }

            // dd('Invalid login details');

            return redirect()->back()->with('danger', 'Invalid Login Details');
        } catch (ValidationException $e)
        {
            // dd($e->validator->errors()->first());
            return redirect()->back()->with('danger', $e->validator->errors()->first());
        } catch (\Exception $e)
        {
            // dd($e->getMessage());
            return redirect()->back()->with('danger', $e->getMessage());
        }

    }

    public function logout(Request $request)
    {
        try{
            $request->session()->flush();
            Auth::logout();
            return redirect()->route('login')->with('danger', 'You have been logged out');
        } catch(\Exception $e)
        {
            // dd($e->getMessage());
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }
}
