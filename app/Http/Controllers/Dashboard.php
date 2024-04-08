<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Offer;

class Dashboard extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');   // check for user log in or no
   } 

   public function Index(Request $request)
   {
 
        return view('dashboard.index');
   }


   public function Tourist_Attraction(Request $request)
   {
     
        return view('dashboard.tourist_attractions');
   }

   
   public function CreateOffer(Request $request)
   {
    $products=Offer::create([
        'Offername'=>$request->Offername,
        'Decription'=>$request->Decription,
        'Price'=>$request->Price,
        'Image'=>$request->Image,
    ]);

    $products->save();
    return Redirect('/dashboard/offers');
   }

   public function DeleteOffer($id)
    {
        $products=Offer::where('id',$id); //search
        $products->delete();
        return Redirect('/dashboard/offers');
    }

    public function GetOffers(Request $request)
   {

        $products=Offer::all();
 

        
        return view('dashboard.offers',['products'=>$products]);
        
   }
   public function Edit($id)
    {
        $products=Offer::find($id);
        
        return view('dashboard.edit',['products'=>$products]);
    }

    public function Update(Request $request)
    {
        $products=Offer::where('id',$request->id)->update([

            'Offername'=>$request->Offername,
            'Decription'=>$request->Decription,
            'Price'=>$request->Price,
            'Image'=>$request->Image,
        ]);
        
        return Redirect('/dashboard/offers');
    }


    public function GetInvoice(Request $request)
   {


    $data=DB::table('invoices')
    ->get();
   // $data->price=$price;
   
   //$id=$data->id;
     //   dd($id);
    // $data=Invoice::all();
        
    //    // $id=$products->id;
    //     //$id=$products->id;
    //     //$id=$data->id;
    //     dd($data);

        
        return view('dashboard.invoice_d', ['data'=>$data]);
        
   }
    

   

    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
