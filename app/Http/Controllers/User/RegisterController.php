<?php

namespace App\Http\Controllers\User;

use App\User;
use App\role_user;
use App\User_detail;
use App\Employee_official;
use App\Employee_financial;
use App\Employee_ot;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user-records';



    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'ssn' => 'required|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|max:255',
            'obranch' => 'required|max:255',
            'dept' => 'required|max:255',
            'des' => 'required|max:255',
            
            'fixed_allowances' => 'required|max:255',
            'fixed_deductions' => 'required|max:255',
            'ot' => 'required|max:255',
            'bank' => 'required|max:255',
            'bbranch' => 'required|max:255',
            'acc' => 'required|max:255',
            'password' => 'required|confirmed|max:255|min:8',
        ],
        [
            'ssn.required' => 'Please enter the SSN',
            'email.required'  => 'Please enter the email address',
            'email.exists'=> 'This email already registered',
            'username.required' => 'Please enter the username',
            'obranch.required' => 'Select the company branch',
            'dept.required' => 'Select the Department',
            'des.required' => 'Select the Designation',
            'fixed_allowances.required' => 'Please enter the Fixed Allowance',
            'fixed_deductions.required' => 'Please enter the Fixed Deduction',
            'ot.required' => 'Is OT allowed',
            'bank.required' => 'Select the Bank',
            'bbranch.required' => 'Select the Bank Branch',
            'acc.required' => 'Enter the Account number',
            'password.required'=> 'Please enter the password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $logindata=User::create([
            
            'email' => $data['email'],
            'username' =>$data['username'],
            'password' => Hash::make($data['password']),

            
        ]); 

        $current_role=role_user::create([
            
            'role_id' =>'3',
            
        ]);

        $userofficial=Employee_official::create([
            
            'ssn' => $data['ssn'],
            'obranch' =>$data['obranch'],
            'dept' => $data['dept'],
            'des' => $data['des'],
            
        ]);

        $userfinancial=Employee_financial::create([
            
            'fixed_allowances' => $data['fixed_allowances'],
            'fixed_deductions' => $data['fixed_deductions'],
            'ot' =>$data['ot'],
            'bank' =>$data['bank'],
            'bbranch' =>$data['bbranch'],
            'acc' => $data['acc'],
            
        ]);

        $userot=Employee_ot::create([

            'ot' =>$data['ot'],

            
        ]);
        
        $userdetails=User_detail::create([
            
            'ssn' => $data['ssn'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'dob' =>$data['dob'],
            'address_line_1' =>$data['address_line_1'],
            'address_line_2' =>$data['address_line_2'],
            //'gender' => $data['gender'],
            'phoneNumber' =>$data['phoneNumber'],
            


            
        ]);  
            
        $logindata->save();
        $current_role->save();
        $userofficial->save();
        $userfinancial->save();
        $userot->save();
        $userdetails->save();
    }

}
