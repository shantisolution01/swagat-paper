<?php

namespace App\Http\Controllers\web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Validator;
use App\Jobs\EnquiryMail;
use Mail;

class EnquiryController extends Controller
{
    public function index()
    {
        return view('web.enquiry');
    }

    public function sendMessage(Request $request)
    {
        $email_data = [
            'company'      =>  $request->company,
            'name'         =>  $request->name,
            'email' =>  $request->email,
            'phone'      =>  $request->phone,
            'city'         =>  $request->city,
            'country' =>  $request->country,
            'postcode'      =>  $request->post_code,
            'website'         =>  $request->website,
            'mail_message' =>  $request->message,
        ];

        try{
            Mail::send('web.enquiry_email', $email_data, function ($message) use ($request) {
                  $message->to('swagatpaper@gmail.com')->subject('Enquiry From Website');
                  $message->from($request->email,$request->name);
            });
                //EnquiryMail::dispatch($email_data);
            // \Session::flash('alert-type', 'success');
            // \Session::flash('message', 'Enquiry send successfully');
            //\Session::put('success', 'Enquiry send successfully');
            return response()->json(['status' => true, 'message' => 'Enquiry send successfully.']);
            //return redirect()->route('enquiry')->with('success','Enquiry send successfully.');
        } catch(\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Error while sending email!']);
        }
    }
}
