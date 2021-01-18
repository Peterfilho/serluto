<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::withCount('posts')->paginate(5);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (auth()->user() == $user) {
            //flash()->overlay("You can't delete yourself.");
            $this->flashError("Você não pode deletar você mesmo!");

            return redirect('/admin/users');
        }

        $user->delete();
        //flash()->overlay('User deleted successfully.');
        $this->flashError("Usuário excluido com sucesso!");

        return redirect('/admin/users');
    }
}
