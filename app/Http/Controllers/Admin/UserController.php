<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function profile()
    {
        return view('site.profile.profile');
    }

    public function profileUpdate(Request $request)
    {
        $data = $request->all();

        # PASSWORD
        if ($data['password'] != null)
            $data['password'] = bcrypt($data['password']);

        else
            unset($data['password']);


        $update = auth()->user()->update($data);
        
        if ($update)
            return redirect()
                    ->route('profile')
                    ->with('success', 'Sucesso ao atualizar!');

        return redirect()
                ->back()
                ->with('error', 'Falha ao atualizar o perfil...');
    }
}
