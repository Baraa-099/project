<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    

    use AuthenticatesUsers;

    
    protected $redirectTo = '/home';

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

protected function authenticated(Request $request, $user)
{
    if ($user->is_admin) {
        return redirect()->route('dashboard'); 
    }

    return redirect()->route('contact'); 
}


}
