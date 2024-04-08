<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Client;
use Illuminate\Support\Facades\App;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard',[Dashboard::class,'Index'])-> name('index');
Route::get('/dashboard/offers',[Dashboard::class,'GetOffers'])-> name('offers');
Route::get('/dashboard/tourist_ttraction',[Dashboard::class,'Tourist_Attraction'])-> name('tourist-attraction');
Route::post('/dashboard/createoffer',[Dashboard::class,'CreateOffer'])-> name('create-offer'); 
Route::get('/delete-offer/{id}', [Dashboard::class, 'DeleteOffer'])->name('del-offer');
Route::get('/edit/{id}',[Dashboard::class,'Edit'])->name('edit-offer'); 
Route::post('/update',[Dashboard::class,'Update'])->name('Update-offerr');
Route::post('/update-offer', [Dashboard::class, 'update'])->name('Update-offer');


Route::get('/dashboard/products',[Dashboard::class,'GetProduct'])-> name('products'); 
Route::post('/dashboard/createproducts',[Dashboard::class,'CreateProducts'])-> name('createproducts'); 

Route::get('/del/{id}',[Dashboard::class,'Deleteproducts'])->name('del-itemss'); 
Route::get('/del{id}',[Dashboard::class,'DeleteproductDetails'])->name('del-details');

Route::get('/edit{id}',[Dashboard::class,'Edit'])->name('edit-items'); 
Route::post('/update',[Dashboard::class,'Update'])->name('Update-product'); 
Route::post('/dashboard/search',[Dashboard::class,'Search'])-> name('search'); 
Route::get('/dashboard/getinvoice',[Dashboard::class,'GetInvoice'])-> name('GetInvoice'); 





Route::post('/dashboard/createproductdetails',[Dashboard::class,'CreateProductsdetails'])-> name('create-details'); 
Route::get('Offer/showitem',[Client::class,'ShowListItemsOffer'])-> name('show-items-offer'); 
Route::post('shopping/details/{id}',[Client::class,'Showtest'])-> name('show-test');
Route::get('/offer-details/{id}', [Client::class, 'ShowDetailsOffer'])->name('show-offer-details');
Route::post('offer/invoice/{id}/',[Client::class,'Invoice'])-> name('new-invoice')->middleware('auth');
Route::post('shopping/createInvoiceinvoice/{id}/{person}/{days}',[Client::class,'CreateInvoice'])-> name('create-invoice');


Route::get('/logout',[Dashboard::class,'logout'])-> name('logout'); 

Auth::routes();
