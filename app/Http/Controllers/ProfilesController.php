<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show',compact('user'));
    }

    public function edit(User $user)
    {
        // abort_if($user->isNot(current_user()),404);

        //see policy
        $this->authorize('edit',$user);

        return view('profiles.edit',compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'user_name' => ['required','string','alpha_dash', 'max:255', Rule::unique('users')->ignore($user)],
            'avatar' => 'required|image',
            'email' => ['required', 'email', 'string', 'max:255', Rule::unique('users')->ignore($user)],

            // 'password' => 'required|string|min:6|max:255|confirmed'
        ]);

        $attributes['avatar'] = request('avatar')->store('avatars');

        $user->update($attributes);
        return redirect($user->path());

    }
}
