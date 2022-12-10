<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Costumer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new Costumer as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect Costumer after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Nama_User'=>['required', 'string', 'max:60'],
            'Email_User'=>['required', 'string', 'email', 'max:60', 'unique:customers_tabel'],
            'Password'=>['required', 'string', 'min:8', 'confirmed'],
            'Nomor_Telepon'=>['required'],
            'Alamat'=>['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Costumer
     */
    protected function create(array $data)
    {
        return Costumer::create([
            'Nama_User'=>$data['Nama_User'],
            'Email_User'=>$data['Email_User'],
            'Password'=>Hash::make($data['Password']),
            'Nomor_Telepon'=>$data['Nomor_Telepon'],
            'Alamat'=>$data['Alamat'],
        ]);
    }

    public function showRegistrationForm()
    {
        $data = array('title'=> 'Register');
        return view('auth.register', $data);
    }
}
?>
