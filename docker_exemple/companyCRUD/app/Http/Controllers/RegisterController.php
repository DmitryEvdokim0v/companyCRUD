<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            $company = Company::all();
            return view ('company.index')->with('company', $company);
        }
        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(User::where('email', $validateFields['email'])->exists() )
        {
            return redirect(route('user.registration'))->withErrors([
                'Email' => 'Даннай пользователь уже существует'
            ]);
        }
    
        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            $company = Company::all();
            return view ('company.index')->with('company', $company);
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'Ошибка при создании пользователя'
        ]);
    }
}
