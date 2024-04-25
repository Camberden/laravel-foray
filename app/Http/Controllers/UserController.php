<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function login(Request $request) {
        $incomingFields = $request->validate([
            "login-name" => "required",
            "login-password" => "required",
        ]);

        if (auth()->attempt(["name" => $incomingFields["login-name"], "password" => $incomingFields["login-password"]])){
            $request->session()->regenerate();
        }



        return redirect("/");
    }

    public function logout() {
        auth()->logout();
        return redirect("/");
    }

    public function register(Request $request){ //Request $request THIS REPRESENTS THTE DATA TO BE POSTED
        $incomingFields = $request->validate([
            "name" => ["required", "min:3", 'max:15', Rule::unique('users', 'name')], // can input specific validations into array
            "email" => ["required", "min:3", "email", Rule::unique("users", "name")],
            "password" => ["required", "min:3", "max:20"],
        ]); // IF THIS VALIDATION IS NOT PASSED, THEN IT WILL NOT PROCEED TO return 
    
        $incomingFields["password"] = bcrypt($incomingFields["password"]);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect("/");

        return "Hello from the Controllololo!";
    }

   
}
