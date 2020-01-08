<?php

namespace App\Http\Controllers;


use App\Address;
use App\Chalet;
use App\Contact;
use App\Details;
use App\Image;
use App\Offer;
use App\Price;
use App\Reservation;
use App\User;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use AgilePixels\Rateable\Rating;

class ChaletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::where('role_id',1)->get();
        return view('layout.master1',compact('admin'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chalets = Chalet::all();
        return view('chalet.create', compact('chalets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request['user_id'] = Auth::id();
        $chalet = Chalet::create($request->all());
        $address = new Address();
        $address->latitude = $request->input('latitude');
        $address->longitude = $request->input('longitude');
        $address->city = $request->input('city');
        $chalet->Address()->save($address);


        $price = new Price();
        $price->sat_morning = $request->input('sat_morning');
        $price->sat_evening = $request->input('sat_evening');
        $price->sun_morning = $request->input('sun_morning');
        $price->sun_evening = $request->input('sun_evening');
        $price->mon_morning = $request->input('mon_morning');
        $price->mon_evening = $request->input('mon_evening');
        $price->tue_morning = $request->input('tue_morning');
        $price->tue_evening = $request->input('tue_evening');
        $price->wed_morning = $request->input('wed_morning');
        $price->wed_evening = $request->input('wed_evening');
        $price->thu_morning = $request->input('thu_morning');
        $price->thu_evening = $request->input('thu_evening');
        $price->fri_morning = $request->input('fri_morning');
        $price->fri_evening = $request->input('fri_evening');
        $chalet->priceDetails()->save($price);

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            $imagesPath = [];
            foreach ($images as $image) {
                $imagesPath[] = new Image([
                    'path' => $image->store('pages/chaletsImages')
                ]);
            }
            $chalet->images()->saveMany($imagesPath);
        }
        $detail = new Details();
        $detail->area = $request->input('area');
        $detail->individuals_num = $request->input('individuals_num');
        $detail->Bedroom = Input::has('Bedroom') ? true : false;
        $detail->Garden = Input::has('Garden') ? true : false;
        $detail->Parking = Input::has('Parking') ? true : false;
        $detail->Large_Swimming_pool = Input::has('Large_Swimming_pool') ? true : false;
        $detail->Child_Swimming_pool = Input::has('Child_Swimming_pool') ? true : false;
        $detail->Bathroom = Input::has('Bathroom') ? true : false;
        $detail->SalonForEvents = Input::has('SalonForEvents') ? true : false;
        $detail->Tennis_Table = Input::has('Tennis_Table') ? true : false;
        $detail->Pool_Table = Input::has('Pool_Table') ? true : false;
        $detail->Play_Station = Input::has('Play_Station') ? true : false;
        $detail->Volleyball = Input::has('Volleyball') ? true : false;
        $detail->football = Input::has('football') ? true : false;
        $detail->basketball = Input::has('basketball') ? true : false;
        $detail->Soggy_Barrel = Input::has('Soggy_Barrel') ? true : false;
        $detail->Barbecue = Input::has('Barbecue') ? true : false;
        $detail->Electric_Oven = Input::has('Electric_Oven') ? true : false;
        $detail->Gaz = Input::has('Gaz') ? true : false;
        $detail->Fridge = Input::has('Fridge') ? true : false;
        $detail->Television = Input::has('Television') ? true : false;
        $detail->WIFI = Input::has('WIFI') ? true : false;
        $detail->Electronic_Generator = Input::has('Electronic_Generator') ? true : false;
        $detail->Solar_Energy = Input::has('Solar_Energy') ? true : false;
        $detail->UPS = Input::has('UPS') ? true : false;
        $detail->other = $request->input('other');
        $chalet->Details()->save($detail);
        toast('تم اضافة الشاليه','success');
        if (Auth::user()->role_id == 1){
        return redirect()->route('chalet.index');}
        else
            return redirect()->route('owner.index');

    }




    public function show($id)
    {
      $chalet = Chalet::find($id);
      return view('chalet.show',compact('chalet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $chalet = Chalet::find($id);
        return view('chalet.edit',compact('chalet'));
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

        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $chalet = Chalet::find($id);
        $chalet->name = $name;
        $chalet->description = $description;
        $chalet->price = $price;
        $chalet->save();
        toast('تم تحديث البيانات','info');
        return redirect()->route('chalet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chalet::find($id)->delete();
        toast('تم حذف الشاليه','error');
        return redirect()->back();
    }

    public function evaluateChalet(Request $request){

        $user = auth()->user();
        $chalet = Chalet::find($request->chalet_id);
        $rating = $chalet->rating([
            'rating' => $request->score
        ], $user);
        return redirect()->back();
        //dd($rating);
    }
    public function mainDashboard(){
        $chalets = Chalet::all();
        $users = User::all();
        $offers = Offer::all();
        $reservations = Reservation::all();
        $messages = Contact::all();
        $chalet = Chalet::where('user_id', Auth::id())->get();
        $offer = Chalet::where('user_id', Auth::id())->get();
        $reservation = Reservation::where('user_id', Auth::id())->get();
        $client = new Client();
        $request = $client->request('get', 'https://api.darksky.net/forecast/1e13a3cfa21b5c8af2e02ee8f8b1f53a/31.5017765,34.1866839');
        $response = $request->getBody()->getContents();
        $today = Carbon::now()->toDayDateTimeString();
        $weather  = json_decode($response);
        return view('dashboard.main',compact('chalets','users','offers','reservations','messages','chalet','offer','reservation','weather','today'));
    }

    function weather()
    {
        $client = new Client();
        $request = $client->request('get', 'https://api.darksky.net/forecast/1e13a3cfa21b5c8af2e02ee8f8b1f53a/31.5017765,34.1866839');
        $response = $request->getBody()->getContents();
        //return view('dashboard.main',compact('response'));
        dd(json_decode($response));
    }

}
