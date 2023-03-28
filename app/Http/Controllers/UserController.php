<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {

    }

    /**
     * @return
     */
    function getUser(Request $request){
        $user = User::query()->where('id',$request['id'])->firstOrFail();
        return json_decode($user);
    }
}
