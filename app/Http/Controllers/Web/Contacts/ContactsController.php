<?php

namespace App\Http\Controllers\Web\Contacts;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Validator;
use Illuminate\Support\Facades\Redirect;

class ContactsController extends Controller
{
    /**
     * Show contact page
     *
     * @return response
     */
    public function index() {
        $setting = Setting::first();
      return view('web.contacts.index',compact('setting'));
    }
    public function GetForm() {
        $setting = Setting::first();
        $types=['Apartement','Duplex','Villa','Store','Office'];
        $services=['Interior Design','Fit out','Interior & Fit out'];
        return view('web.contacts.cotactus',compact('setting','types','services'));
    }

    public function SendMail(Request $request) {
        $validator = validator()->make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'unit_type' => 'sometimes|nullable',
            'space' => 'sometimes|nullable',
            'service' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect::back()->with(['contact_errors' => $validator->errors()->all()]);
        }
        $name=$request->name;
        $phone=$request->phone;
        $unit_type=$request->unit_type ?? '';
        $space=$request->space ?? '';
        $service=$request->service ?? '';
        //return $space;
        $mailh='info@tkdesigns-eg.com';
        Mail::send('emails.code', ['name' =>$name,'phone'=>$phone,'unit_type'=>$unit_type,
          'space'=>$space,'service'=>$service], function ($mail) use ($mailh)
        {

            $mail->to($mailh,'hassan')->subject(' inbox ');



        });

        return redirect:: back()->with(['contact_success' => 'Your Message Was Sent Successfully']);

    }

}
