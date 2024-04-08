<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Offer;
use App\Models\Invoice;

class Client extends Controller
{




   public function ShowListItemsOffer(Request $request)
   {

    $data=Offer::all();
    
  
    return view('client.list-items',['data'=>$data]);
   }



   public function ShowDetailsOffer($id,Request $request)
   {
     
    $data=DB::table('offers')
    ->where('offers.id','=',$id)
    ->first();
    $People = $request->person;
    $Days = $request-> days ;

    return view('client.details',['data'=>$data,'People'=> $People, 'Days'=> $Days]);
   }



   

   public function Invoice($id,Request $request)
   {

    $data=DB::table('offers')
    ->where('offers.id','=',$id)
    ->first();
   // $data->price=$price;
    $price=$data->Price;
    
    $person =$request-> person;
    $days =$request-> days;
    
    $total=$price*$person*$days; 

    return view('client.invoice',['data'=>$data, 'person'=>$person, 'days'=>$days, 'total'=>$total]);
    
   }

   public function CreateInvoice($id, $person, $days, Request $request)
   {

    $userid=$request->user()->id; //get current user id
    $data=DB::table('offers')
    ->where('offers.id','=',$id)
    ->first();
   
    $price=$data->Price;
    
     $total=$price*$person*$days;

    //  $valdite=$request->validate([
    //     'name'=>'required',
    //     'Phone'=>'required|',
    //     'Email'=>'required|string|max:25'
    //     ]);

    $products=Invoice::create([
        'name'=>$request->name,
        'Phone'=>$request->phone,
        'Email'=>$request->email,
        'Person'=>$person,
        'Days'=>$days,
        'Total_Price'=>$total,
        'Offerid'=>$id,
    ]);
    
    $products->save();
       return Redirect('Offer/showitem');
    
   }

}
