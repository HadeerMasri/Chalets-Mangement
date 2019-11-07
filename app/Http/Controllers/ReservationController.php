<?php

namespace App\Http\Controllers;

use App\Chalet;
use App\Notifications\ChangeStatus;
use App\Reservation;
use App\User;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {

        $reservations = [];
        $data = Reservation::where('role_id', 2)->where('status','تم الحجز ')->get();
        //$data = Event::all();
        if($data->count()){
            foreach ($data as $key => $value) {
                $reservations[] = Calendar::event(
                    $value->chalet->name,
                    true,
                    new \DateTime($value->from_time),
                    new \DateTime($value->to_time.' +1 day')
                );
            }
        }
        $calendar = Calendar::addEvents($reservations);

        return view('owner.reservationsCalender',compact('reservations','calendar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $chalet = Chalet::find($id);
        return view('tenant.createReservation',compact('chalet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation=new Reservation();
        $reservation->user_id = Auth::id();
        $reservation->role_id = 2;
        $reservation->chalet_id = $request->input('chalet_id');
        $reservation->from_time = $request->input('from_time');
        $reservation->to_time = $request->input('to_time');
        $reservation->status = 1;
        $reservation->save();
        toast('الشاليه تحت الطلب الرجاء الانتظار للموافقة ام الرفض من قبل صاحب الشاليه','success');

        return redirect()->route('tenant.index');


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
    public function reservationChalets(){
        $reservations = Reservation::where('role_id',2)->get();
        return view('owner.reservationChalets', compact('reservations'));

    }
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('owner.editStatusReservation', compact('reservation'));

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
        $reservation->status = $request->input('status');
        $reservation->save();
        toast('تم تغيير الحالة','success');
        //Reservation::find(1)->notify(new ChangeStatus);
        return redirect()->route('reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::find($id)->delete();
        toast('تم حذف الحجز','error');
        return redirect()->back();
    }


}
