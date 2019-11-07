<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('userProfile.editProfile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
       // $user->password = $request->input('password');
        $user->save();
        toast('تم تحديث البيانات','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPassword($id)
    {
        $user = User::find($id);
        return view('userProfile.editPassword', compact('user'));
    }
    public function updatePassword(Request $request, $id)
    {
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        if (!Hash::check($oldPassword, Auth::user()->password)) {
            toast('كلمة المرور غير مطابقة لكلمة المرور الاصلية', 'error');
            return redirect()->back();
            //return back()->with('msg','كلمة المرور غير مطابقة لكلمة المرور الاصلية'); //when user enter wrong password as current password
        } else {
            $request->user()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
            toast('تم تحديث كلمة المرور', 'info');//updating password into user table
            return redirect()->back();
            //return back()->with('msg','تم تحديث كلمة المرور');
        }
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        toast('تم حذف المستخدم','error');
        return redirect()->back();//
    }
}
