<?php

namespace App\Http\Controllers;

use App\Admin;
use App\BookARepairTable;
use App\PhoneTable;
use App\Product;
use App\StoresTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function getLoginView(){
        return view('admin/login');
    }

    public function login(Request $request)
    {
        if (Admin::where(['email' => $request->email, 'password' => $request->password])->exists()) {
            $id = Admin::where(['email' => $request->email, 'password' => $request->password])->first()['id'];
            Session::put('id', $id);
            Session::put('isAdmin', true);
            return redirect('admin-dashboard');
        } else {
            return view("admin.error-message");
        }
    }

    public function dashboard(){
        $storesCount = StoresTable::all()->count();
        $bookingsCount = BookARepairTable::all()->count();
        $productsCount = Product::all()->count();
        return view('admin.dashboard')->with(['storesCount' => $storesCount, 'bookingsCount' => $bookingsCount, 'productsCount' => $productsCount]);
    }

    public function bookings(){
        $bookARepair = BookARepairTable::OrderBy('created_at', 'desc')->paginate();
        return view('admin.bookings')->with(['bookARepair' => $bookARepair]);
    }

    public function bookingDetails($id){
        $bookARepair = BookARepairTable::where('id', $id)->first();
        $phone = PhoneTable::where('id', $bookARepair->phone_id)->first();
        return view('admin.booking-details')->with(['bookARepair' => $bookARepair, 'phone' => $phone]);
    }

    public function updateStatus(Request $request){
        $bookARepair = BookARepairTable::where('id', $request->id)->first();
        $bookARepair->status = $request->status;
        $bookARepair->update();
        return redirect('bookings/' . $request->id);
    }

    public function getStores(){
        $stores = StoresTable::all();
        return view('admin.stores')->with(['stores' => $stores]);
    }

    public function getProducts(){
        $products = Product::all();
        return view('admin.products')->with(['products' => $products]);
    }

    public function newStore(){
        return view('admin.add-store');
    }

    public function newProduct(){
        return view('admin.add-product');
    }

    public function saveStore(Request $request){
        $store = new StoresTable();
        $store->name = $request->name;
        $store->location = $request->location;
        $store->description = $request->description;
        $store->phone_no = $request->phone;
        $store->from_day = $request->from_day;
        $store->to_day = $request->to_day;
        $store->from_time = $request->from_time;
        $store->to_time = $request->to_time;
        $store->save();
        return redirect('/stores');
    }

    public function deleteStore($id){
        $store = StoresTable::where('id', $id)->first();
        $store->delete();
        return redirect('/stores');
    }

    public function deleteProduct($id){
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect('/products');
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
