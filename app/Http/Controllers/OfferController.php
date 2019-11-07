<?php

namespace App\Http\Controllers;

use App\Chalet;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::where('user_id', Auth::id())->get();
        return view('offers.index', compact('offers'));
    }

    public function allOffers()
    {
        $offers = Offer::all();
        return view('pages.latestoffers', compact('offers'));
    }



        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $chalet = Chalet::find($id);
        return view('offers.create', compact('chalet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $offer=new Offer();
        $offer->chalet_id = $request->input('chalet_id');
        $offer->user_id =  Auth::id();
        $offer->from_time = $request->input('from_time');
        $offer->to_time = $request->input('to_time');
        $offer->new_price = $request->input('new_price');
        $offer->save();
        toast('تم اضافة عرض جديد','success');
        return redirect('offer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::find($id);
        return view('offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        $chalet = Chalet::find($id);
        return view('offers.edit', compact('offer','chalet'));
    }


    public function update(Request $request, $id)
    {

        $offer=new Offer();
        $offer->chalet_id = $request->input('chalet_id');
        $offer->new_price=$request->input('new_price');
        $offer->from_time=$request->input('from_time');
        $offer->to_time=$request->input('to_time');
        $offer->save();
        toast('تم تحديث البيانات','info');
        return view('offers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offer::find($id)->delete();
        toast('تم حذف العرض','error');
        return redirect('offer');
    }
}
