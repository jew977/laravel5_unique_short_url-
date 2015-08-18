<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    protected $redirectPath = '/url';
    protected $loginPath = '/login';
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user=new User([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
       $user->save();
       return $user;
    }
    public function getRegister(){
    return view('auth.register');
    }



    public function postRegister(Request $request){
       // dd($this->create($request->all()));
     $validator=$this->validator($request->all());
     if($validator->fails()){
           $this->throwValidationException($request,$validator);
     }
     $user=$this->create($request->all());
     return view('auth.login');
    }


    public function getLogin(){
    return view('auth.login');
    }



    public function postLogin(Request $request){
            $name=$request->input('name');         
            $password=$request->input('password');
           if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // Authentication passed...
            return redirect('url');
        }
      return redirect('auth.login')->with('message','用户名或密码不正确')->withIput();
    }

    public function getLogout(){
        Auth::logout();
    }

}
