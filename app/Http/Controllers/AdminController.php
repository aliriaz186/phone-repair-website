<?php

namespace App\Http\Controllers;

use App\AboutUsTable;
use App\Admin;
use App\BlogTable;
use App\BookARepairTable;
use App\NewsLetterTable;
use App\PhoneColorTable;
use App\PhoneTable;
use App\Product;
use App\RapairVideoTable;
use App\StoresTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function getLoginView()
    {
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

    public function dashboard()
    {
        $storesCount = StoresTable::all()->count();
        $bookingsCount = BookARepairTable::all()->count();
        $productsCount = Product::all()->count();
        return view('admin.dashboard')->with(['storesCount' => $storesCount, 'bookingsCount' => $bookingsCount, 'productsCount' => $productsCount]);
    }

    public function bookings()
    {
        $bookARepair = BookARepairTable::OrderBy('created_at', 'desc')->paginate();
        return view('admin.bookings')->with(['bookARepair' => $bookARepair]);
    }

    public function bookingDetails($id)
    {
        $bookARepair = BookARepairTable::where('id', $id)->first();
        $phone = PhoneTable::where('id', $bookARepair->phone_id)->first();
        return view('admin.booking-details')->with(['bookARepair' => $bookARepair, 'phone' => $phone]);
    }

    public function updateStatus(Request $request)
    {
        $bookARepair = BookARepairTable::where('id', $request->id)->first();
        $bookARepair->status = $request->status;
        $bookARepair->update();
        return redirect('bookings/' . $request->id);
    }

    public function getStores()
    {
        $stores = StoresTable::all();
        return view('admin.stores')->with(['stores' => $stores]);
    }

    public function getProducts()
    {
        $products = Product::all();
        return view('admin.products')->with(['products' => $products]);
    }

    public function newStore()
    {
        return view('admin.add-store');
    }

    public function newProduct()
    {
        return view('admin.add-product');
    }

    public function saveStore(Request $request)
    {
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

    public function savePhone(Request $request)
    {
        $phone = new PhoneTable();
        $phone->name = $request->name;
        $phone->company = $request->company;
        $phone->phone_svg = $request->svg;
        $phone->phone_picture = $request->picture;
        $phone->save();
        return redirect('/phones');
    }

    public function deleteStore($id)
    {
        $store = StoresTable::where('id', $id)->first();
        $store->delete();
        return redirect('/stores');
    }

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect('/products');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function getPhones()
    {
        $phones = PhoneTable::all();
        return view('admin.mobiles')->with(['phones' => $phones]);
    }

    public function addColorView($id)
    {
        return view('admin.add-color')->with(['phoneId' => $id]);
    }

    public function addNewColor(Request $request)
    {
        $color = new PhoneColorTable();
        $color->color_name = $request->name;
        $color->color_svg = $request->svg;
        $color->phone_id = $request->phone_id;
        $color->save();
        return redirect('/phones');
    }

    public function addPhoneView()
    {
        return view('admin.add-phone');
    }

    public function newsletter()
    {
        $emails = NewsLetterTable::all();
        return view('admin.newsletter')->with(['emails' => $emails]);
    }

    public function aboutUs()
    {
        $about = DB::table('about_us_tables')->pluck('description');
        foreach ($about as $aboutUs) {
        }
        if (empty($aboutUs)) {
            $aboutUs = "";
        }
        return view('admin.about')->with('about', $aboutUs);
    }

    public function descriptionSave(Request $request)
    {
        if (count(AboutUsTable::all()) > 0) {
            $about = AboutUsTable::where([['id', '>', 0]])->first();
            $about->description = $request->description;
            $about->update();
            return redirect()->back()->withErrors("Description updated successfully");
        } else {
            $about = new AboutUsTable();
            $about->description = $request->description;
            $about->save();
            return redirect()->back()->withErrors("Description saved successfully");
        }
    }

    public function blog()
    {
        $blog = BlogTable::all();
        return view('admin.blog')->with(['blog' => $blog]);
    }

    public function addBlog()
    {
        return view('admin.new-blog');
    }

    public function saveBlog(Request $request)
    {
        $blog = new BlogTable();
        $fileName = "";
        if ($request->hasFile('image')) {
            $brand_logo = $request->file('image');
            $fileName = time() . '.' . $brand_logo->getClientOriginalExtension();
            $request->image->move(public_path('images/blogs'), $fileName);
            if (!File::exists(public_path('images/blogs/' . $fileName))) {  // check file exists in directory or not
                return json_encode("Image is not uploaded!", 401);
            }
            $input["image"] = $fileName;
        }
        $blog->image = $fileName;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect('admin/blog');
    }

    public function deleteBlog($id)
    {
        $blog = BlogTable::where('id', $id)->first();
        $blog->delete();
        return redirect('admin/blog');
    }

    public function repairVideos()
    {
        $repairVideos=RapairVideoTable::all();
        return view('admin/repair-videos')->with(['repairVideos'=>$repairVideos]);
    }

    public function addVideo()
    {
        return view('admin/add-video');
    }

    public function saveVideo(Request $request)
    {
        $videoTable=new RapairVideoTable();
        if ($request->hasFile('file')) {
            $brand_logo = $request->file('file');
            $fileName = time() . '.' . $brand_logo->getClientOriginalExtension();
            $brand_logo->move(public_path('images/videos'), $fileName);
            if (!File::exists(public_path('images/videos/' . $fileName))) {  // check file exists in directory or not
                return json_encode("File is not uploaded!", 401);
            }
            $input["image"] = $fileName;
        }
        $videoTable->video=$fileName;
        $videoTable->title=$request->title;
        $videoTable->save();
        return redirect('repair/videos');
    }
    public function deleteVideo($id){
        $videoTable = RapairVideoTable::where('id', $id)->first();
        $videoTable->delete();
        return redirect('repair/videos');
    }

}
