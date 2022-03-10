<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Libs\Common;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function redirect;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login()
    {
        return view('pages.login.index');
    }

    public function executeLogin(LoginRequest $request)
    {
        $data = [
            'email'    => Common::clearXSS($request->email),
            'password' => Common::clearXSS($request->password)
        ];

        if ( $this->authService->login($data) ) {
            return redirect()->route('get.home');
        } else {
            $request->session()->flash('login_fail', 'Login was fail!');
            return redirect()->back()->withInput();
        }
    }

    public function register()
    {
        return view('pages.register.index');
    }

    public function executeRegister(RegisterRequest $request)
    {
        $data = [
            'name'     => Common::clearXSS($request->name),
            'email'    => Common::clearXSS($request->email),
            'password' => Common::clearXSS($request->password)
        ];

        if ( $this->authService->register($data) ) {
            $request->session()->flash('register_successful', 'Register was successful!');
            return redirect()->route('get.login');
        } else {
            $request->session()->flash('register_fail', 'Register was fail!');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $this->authService->logout();
        return redirect()->route('get.home');
    }
}
