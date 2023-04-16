<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\UserEditRequest;
use Session;
class UserController extends Controller
{   public $viewprefix;
    public $viewnamespace;
    public function __construct()
    {   //$this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.user.';
        $this->viewnamespace='panel/user';
    }
    public function index()
    {
        $users = User::all();
        return view($this->viewprefix.'index', compact('users'));
    }
    public function getadd()
    {
        return view('admin.user.add'); 
    }
    public function postadd(Request $request)
    {
        $this->validate($request, [
            'txtname' => 'required',
            'txtemail' => 'required',
            'txtpassword' => 'required',
            'role' => 'required'
        ]);

    	   $user = new User;
           $user->name = $request->txtname;
           $user->email = $request->txtemail;
           $user->role = $request->role;
           $user->password = Hash::make($request->txtpassword);
           $user->save();
           return redirect('panel/user/index');
    }
    public function getedit($id)
    {
        $user = User::findOrFail($id);
        return view($this->viewprefix.'edit',compact('user'));      
    }
    public function postedit(UserEditRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'txtname' => 'required',
            'txtemail' => 'required',
            'txtpassword' => 'required',
            'role' => 'required'
        ]);
        $user->name = $request->txtname;
        $user->email = $request->txtemail;
        $user->role = $request->role;
        $user->password = Hash::make($request->txtpassword);
        if($user->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('panel/user/index');   
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);   
        if($user->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('panel/user/index');       
    }
}
