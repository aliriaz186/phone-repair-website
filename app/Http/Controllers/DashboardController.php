<?php

namespace App\Http\Controllers;

use App\AboutUsTable;
use App\BlogTable;
use App\NewsLetterTable;
use App\RapairVideoTable;
use App\StoresTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function viewDashboard()
    {
        $storesData = StoresTable::all()->first();
        return view('welcome')->with(['storesData' => $storesData]);
    }

    public function emailSave(Request $request)
    {
        $newLetterTable = new NewsLetterTable();
        if (NewsLetterTable::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors("Email received successfully");
        } else {
            $newLetterTable->email = $request->email;
            $newLetterTable->save();
            return redirect()->back()->withErrors("Email received successfully");
        }

    }

    public function sendMessage(Request $request)
    {
        $fromEmail = "info@thegfix.com";
        $msg = $request->message;
        $uid = md5(uniqid(time()));
        $eol = PHP_EOL;
        $header = "From: " . $request->name . " <" . $request->email . ">" . $eol;
        $header .= "Reply-To: " . $request->email . $eol;
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"";
        $msg = wordwrap($msg, 70);
        mail("info@thegfix.com", $request->name . " has sent you message from TheGreatFix", $msg, $header, "-f" . $fromEmail);
        return redirect()->back()->withErrors("Message send successfully");
    }

    public function aboutUs()
    {
        $about = DB::table('about_us_tables')->pluck('description');
        foreach ($about as $aboutUs) {
        }
        if (empty($aboutUs)) {
            $aboutUs = "";
        }
        return view('template/frontEnd/pages/about')->with('about', $aboutUs);
    }

    public function showBlog()
    {
        $blog=BlogTable::all();
        return view('template/frontEnd/pages/blogs')->with(['blogs'=>$blog]);
    }

    public function showRepairVideos()
    {
        $video = RapairVideoTable::all();
        return view('template/frontEnd/pages/repair-video')->with(['video' => $video]);
    }
}
