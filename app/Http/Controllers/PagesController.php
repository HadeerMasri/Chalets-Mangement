<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\AboutCondition;
use App\Chalet;
use App\Contact;
use App\Offer;
use App\Page;
use App\pages;
use App\Events\UserRegisterationEvent;
use App\Mail\EmailContact;
use App\Price;
use App\Reservation;
use App\User;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Ghanem\Rating\Models\Rating;
use Illuminate\Http\Request;

use Nexmo\Client;
use Nexmo\Laravel\Facade\Nexmo;
use Nexmo\Client\Credentials\Basic;

class PagesController extends Controller
{
    public function index() {
        //$data = 'This is my data';
        // return view('pages.index')->with('data', $data );
        // return view('pages.index', ['data'=>$data ] );
        //return view('pages.index', compact('data') );

        $chalets=Chalet::orderBy('id', 'desc')->get();
        $offers =Offer::orderBy('id', 'desc')->take(8)->get();
        $reservations = Reservation::orderBy('id', 'desc')->take(4)->get();
        $ratings = Rating::all();
        return view('pages.index', compact('chalets','offers','reservations','ratings'));

    }
    public function show($id){

        $chalet = Chalet::with('priceDetails')->where('id',$id)->first();
        // dd($chalet->images);
        $a =Mapper::map(31.5017765,34.1866839, ['zoom' => 15 ,'marker' => false]);
        $b = Mapper::marker($chalet->address->latitude, $chalet->address->longitude, ['symbol' => 'circle', 'scale' => 1000]);
        return view('pages.show', compact('chalet'));
    }
    public function about(){
        $abouts = Page::all();
        return view('pages.about', compact('abouts'));
    }
    public function contact() {
        $admins = User::where('role_id',1)->get();
        return view('pages.contact', compact('admins'));
    }

    public function condition() {
        $conditions = Page::all();

        return view('pages.condition', compact('conditions'));
    }
    public function latestoffers() {

        $offers = Offer::all();
        return view('pages.latestoffers', compact('offers'));

    }

    function sendEmail(){
       // $email = Mail::to('haderhasan904@gmail.com')->send(new EmailContact());
        $user = User::first();
        event(new UserRegisterationEvent($user));
    }
    function store(Request $request){

        $contact=new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        toast('تم ارسال الرسالة','success');//updating password into user table
        return redirect()->back();
    }
    function sendSMS(\Nexmo\Client $nexmo)
    {
        $nexmo->message()->send([
            'to' => '970594329731',
            'from' => 'Nexmo',
            'text' => 'Hello from Nexmo'
        ]);
    }
}
