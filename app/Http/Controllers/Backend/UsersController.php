<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

class UsersController extends Controller
{
    public function usersView()
    {
        $data['allDataUser'] = User::all();
        return view('backend.users.view_user', $data);
    }

    public function usersAdd()
    {
        return view('backend.users.add_user');
    }
    public function usersStore(Request $request)
    {
        $validatedData = $request->validate([
            'textName' => 'required',
            'textEmail' => 'required|email',
            'textPassword' => 'required'
        ]);

        $data = new User();
        $data->name = $request->textName;
        $data->email = $request->textEmail;
        $data->password = bcrypt($request->textPassword);
        $data->save();

        return redirect()->route('users.view')->with('info', 'Tambah User Berhasil');
    }
    public function usersEdit($id)
    {
        $editData = User::find($id);
        return view('backend.users.edit_user', compact('editData'));
    }
    public function usersUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'textName' => 'required',
            'textEmail' => 'required|email',
            'textPassword' => 'required'
        ]);
        $data = User::find($id);
        $data->name = $request->textName;
        $data->email = $request->textEmail;
        $data->password = bcrypt($request->textPassword);
        $data->save();

        $notification = array(
            'message'
        );
        return redirect()->route('users.view')->with('info', 'Update Users Berhasil');
    }
    public function usersDelete($id)
    {
        $deleteData = User::find($id);
        $deleteData->delete();

        return redirect()->route('users.view')->with('info', 'Delete Users Berhasil');
    }
}
