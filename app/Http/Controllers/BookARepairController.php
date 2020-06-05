<?php

namespace App\Http\Controllers;

use App\BookARepairTable;
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
        for ($i = 0; $i < count($phonesData); $i++) {
            $phonesDataa[$i]['phonesData'] = $phonesData[$i];
            $phonesDataa[$i]['phoneProblem'] = $phoneProblem;
        }
        return view('template/frontEnd/pages/view-phone-list')->with(['phonesData' => $phonesDataa]);
    }

    public function viewPhoneWithAllColors($phoneProblem, $phoneType, $phoneId)
    {
        $phoneColorTable = PhoneColorTable::where('phone_id', $phoneId)->get();
        for ($i = 0; $i < count($phoneColorTable); $i++) {
            $phoneColorData[$i]['phonesColorData'] = $phoneColorTable[$i];
            $phoneColorData[$i]['phoneInfo'] = PhoneTable::where('id', $phoneId)->first();
            $phoneColorData[$i]['phoneProblem'] = $phoneProblem;
        }
        return view('template/frontEnd/pages/view-phone-color-list')->with(['phoneColorData' => $phoneColorData]);
    }

    public function viewSchedulePage($selectedPhoneProblem, $selectedPhoneType, $phoneId, $selectPhoneColor)
    {
        return view('template/frontEnd/pages/schedule-repair')->with(['selectedPhoneProblem' => $selectedPhoneProblem, 'selectedPhoneType' => $selectedPhoneType, 'phoneId' => $phoneId, 'selectedPhoneColor' => $selectPhoneColor]);
    }

    public function scheduleARepair(Request $request)
    {
        $bookARepairTable = new BookARepairTable();
        $bookARepairTable->phone_id = $request->phoneId;
        $bookARepairTable->phone_problem = $request->selectedProblem;
        $bookARepairTable->selected_phone_type = $request->selectedPhoneType;
        $bookARepairTable->selected_phone_color = $request->selectedPhoneColor;
        $bookARepairTable->customer_name = $request->customerName;
        $bookARepairTable->customer_address = $request->customerAddress;
        $bookARepairTable->date = $request->date;
        $bookARepairTable->time = $request->time;
        $bookARepairTable->customer_location = $request->customerLocation;
        $bookARepairTable->customer_number = $request->customerNumber;
        $bookARepairTable->save();
        return view('template/frontEnd/pages/success-message-page')->with(['message' => 'Repair booked Successfully!']);
    }
}
