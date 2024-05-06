<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmailVerificationController extends Controller
{
    public function index() {
        return view('verify-email');
    }

    public function verifyEmail(Request $request) {

        $data = $request->only([
            'contrato',
            'user_name',
            'senha_provisoria',
            'password',
            'password_confirmation',
        ]);

        $action = Http::acceptJson()->post(env("API_PAINEL_BASE_URL").'/verify-email', $data)->json();


        if(isset($action['errors'])) {
            return view('verify-email', [
                'apierrors' => $action['errors']
            ]);
        }
        return redirect(route('home'));
    }

}
