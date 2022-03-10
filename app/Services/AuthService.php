<?php

namespace App\Services;

use App\Mail\RegisterEmail;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthService
{
    public function login(array $data)
    {
        try {
            $email    = $data['email'];
            $password = $data['password'];

            $auth = [
                'email'    => $email,
                'password' => $password
            ];
            return Auth::guard('customer')->attempt($auth);
        } catch (\Exception $e) {
            Log::error($e);

            return false;
        }
    }

    public function register(array $data)
    {
        try {
            $name     = $data['name'];
            $password = $data['password'];
            $email    = $data['email'];

            DB::beginTransaction();

            $customer = Customer::create([
                'name'     => $name,
                'email'    => $email,
                'password' => bcrypt($password)
            ]);

            $message = (new RegisterEmail($name))->onQueue('email_register');
            Mail::to($email)->queue($message);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error($e);

            return false;
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
    }
}