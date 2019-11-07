<?php

namespace App\Http\Controllers;

use App\Address;
use App\Chalet;
use App\Contact;
use App\Details;
use App\Image;
use App\Mail\ContactResponse;
use App\Page;
use App\Price;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chalets = Chalet::all();
        return view('admin.index', compact('chalets'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public function message(){
        $contacts = Contact::all();
        return view('admin.messages', compact('contacts'));
    }





    public function replyToMessages($id){
        $user = Contact::find($id) ;
        return view('admin.replyToMessages',compact('user'));
    }



    function MessageSend(Request $request){
        $user_email = $request->email ;
        $user_name = $request->name ;
        $user_msg = $request->TextMessage ;
//        dd($user_email , $user_name ,$user_msg);
        $email = Mail::to($user_email)->send(new ContactResponse($user_email ,$user_name ,$user_msg ));
        toast('تم ارسال الرسالة','success');//updating password into user table
        return redirect('/adm/messages');
    }
}
