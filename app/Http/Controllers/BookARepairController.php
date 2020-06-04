<?php

namespace App\Http\Controllers;

use App\PhoneColorTable;
use App\PhoneTable;
use Illuminate\Http\Request;

class BookARepairController extends Controller
{
    public function viewPhoneList($phoneProblem, $phoneType)
    {
        if ($phoneType == 'apple') {
            $phonesData = PhoneTable::where('company', $phoneType)->get();
        } elseif ($phoneType == 'samsung') {
            $phonesData = PhoneTable::where('company', $phoneType)->get();
        }
        for($i=0;$i<count($phonesData);$i++)
        {
            $phonesDataa[$i]['phonesData'] = $phonesData[$i];
            $phonesDataa[$i]['phoneProblem'] = $phoneProblem;
        }
        return view('template/frontEnd/pages/view-phone-list')->with(['phonesData' => $phonesDataa]);
    }

    public function viewPhoneWithAllColors($phoneProblem, $phoneType, $phoneId)
    {
        $phoneColorTable = PhoneColorTable::where('phone_id', $phoneId)->get();
        for($i=0;$i<count($phoneColorTable);$i++)
        {
            $phoneColorData[$i]['phonesColorData'] = $phoneColorTable[$i];
            $phoneColorData[$i]['phoneInfo'] = PhoneTable::where('id', $phoneId)->first();
            $phoneColorData[$i]['phoneProblem'] = $phoneProblem;
        }
        return view('template/frontEnd/pages/view-phone-color-list')->with(['phoneColorData' => $phoneColorData]);
    }

    public function viewSchedulePage()
    {
        return view('template/frontEnd/pages/schedule-repair');
    }
}
