<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    //
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user
                ->tweets()
                ->withLikes()
                ->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user),],
            'introduce'=>['string', 'max:300'],
            'avatar'=>['file'],
            'background'=>['file'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user),],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if(request('avatar')){
            $attributes['avatar'] = 'storage/'. request('avatar')->store('avatars');
        }
        if(request('background')){
            $attributes['background'] = 'storage/'. request('background')->store('backgrounds');
        }
        $user->update($attributes);
        return redirect($user->path());
    }
}
