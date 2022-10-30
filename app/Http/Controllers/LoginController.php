<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){
        return view('Login');
    }
    public function checkLogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );

        $customer=Customer::where('nic','=',$request->get('username'))->first();;

        if(Auth::attempt($user_data))
        {
            return redirect('/AdminDash');
        }

        else if($customer !=null)
        {
            if(Hash::check($user_data['password'],$customer->password));
            return view('Customer/show',compact('customer'));
        }
        else{
            return back();
        }
    }
}
