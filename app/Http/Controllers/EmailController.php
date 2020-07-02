<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('contact');
    }

    public function VerifyHouse(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function ReportHouse(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
    public function VerifyHousemaidService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function VerifySchoolvanService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function VerifySweeperService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function VerifyWatchmanService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function VerifyParkingService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function VerifyInternetService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function VerifyCableService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-single2');
    }
    public function ReportInternetService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
    public function ReportCableService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
    public function ReportHousemaidService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
    public function ReportSchoolvanService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
    public function ReportSweeperService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
    public function ReportWatchmanService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
    public function ReportParkingService(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'number' => ['required']
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
            'number' => $request->number,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('8a891b51c9-158ca6@inbox.mailtrap.io');
        });
        return redirect('properties-for-tenant');
    }
}
