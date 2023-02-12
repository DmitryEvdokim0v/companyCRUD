<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            $company = Company::all();
            return view ('company.index')->with('company', $company);
        }
        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)){
            $company = Company::all();
            return redirect()->intended( view ('company.index')->with('company', $company));
        }
        return redirect(route('user.login'))->withErrors([
            'email' => 'Не удалось авторизоваться'
        ]);
    }
}
