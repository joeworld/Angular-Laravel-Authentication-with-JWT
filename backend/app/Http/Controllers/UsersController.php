<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

        /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['ShowUserlist']]);
    }

    //

    public function ShowUserlist(){


        $users = User::all();

        return response()->json($users->toArray());
        
    }

}
