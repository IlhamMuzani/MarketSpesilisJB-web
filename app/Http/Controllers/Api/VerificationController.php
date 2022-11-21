<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class VerificationController extends Controller
{
    public function verify(Request $request)
    {
        $id = $request['id'];
        $user = User::findOrFail($id);
        $date = date("Y-m-d g:i:s");
        $user->email_verified_at = $date;
        $user->save();

        return response()->json('Email Verifikasi');
    }
}
