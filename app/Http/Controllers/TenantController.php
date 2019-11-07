<?php

namespace App\Http\Controllers;

use App\Chalet;
use App\Reservation;
use App\User;
use Ghanem\Rating\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reservations = Reservation::where('user_id', Auth::id())->get();
        $ratings = Rating::all();
        return view('tenant.index', compact('reservations','ratings'));
    }
    public function chalets()
    {
        $chalets = Chalet::all();
        return view('tenant.chalets', compact('chalets'));
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
        $reservation = Reservation::find($id);
        return view('tenant.editReservation', compact('reservation'));

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
        $reservation=Reservation::find($id);
        $reservation->from_time = $request->input('from_time');
        $reservation->to_time = $request->input('to_time');
        $reservation->save();
        toast('تم تحديث الحجز','success');
        return redirect()->route('reservation.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editPersonalData($id)
    {
        $user = User::find($id);
        return view('tenant.editProfileTenant', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OwnerData  $ownerData
     * @return \Illuminate\Http\Response
     */
    public function updatePersonalData(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        toast('تم تحديث البيانات','info');
        return redirect()->back();

    }

    public function editProfileTenant($id)
    {
        $user = User::find($id);
        return view('tenant.editProfileTenant',compact('user'));
    }
    public  function updateProfileTenant(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        toast('تم تحديث البيانات','info');
        return redirect()->back();
    }
    public function editPasswordTenant($id)
    {
        $user = User::find($id);
        return view('tenant.editPasswordTenant', compact('user'));
    }

}
