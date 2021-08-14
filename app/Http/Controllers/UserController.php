<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        return view('pages.admin.users.create', ['roles' => $roles]);
    }

    public function edit(User $user)
    {   
        $roles = Role::all();

        return view('pages.admin.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function store(Request $request)
    {
        if(!$request->has('role_id')){
            $this->validate($request, [
                'name' => 'required|max:255',
                'username' => 'required|max:255|unique:users', 
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:5',
            ]);

            // default za usera id 2

            $role_id = 2;
            
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $role_id
            ]);

        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users', 
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5',
            'role_id' => 'required|exists:roles,id' 
        ]);


        User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id
            ]);

        

        return redirect()->back()->with('success', 'User added successfully!');
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        //dd($request->password);

        try
        {
            
            $user->update($request->except('password'));

            if($request->has('password')){
                $NewPassword = Hash::make($request->password);
                $user->password = $NewPassword;
                $user->save();
            }
            
            
            $user->save();

            DB::commit();

            //return redirect()->route('posts.edit', $post->id)->with('success', 'Post edited successfully!');
            return redirect()->back()->with([
                'success' => 'User updated successfully!',
                $user->id
            ]);
        }
        catch(Exception $e)
        {
            DB::rollBack();
            //return redirect()->route('posts.edit', $post->id)->with('errorMessage', 'An error occurred!');
            return redirect()->back()->with([
                'errorMessage' => 'An error occurred!',
                $user->id
            ]);
        }
    }

    public function delete(User $user)
    {
        
        $user->delete();
        
        return redirect()->back();
    }
}
