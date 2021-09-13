<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'f_name'   =>  'required',
            'l_name' => 'required',
            'email'   =>  'required',
            'phone'   =>  'required',
            'subject'   =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        
        $email = $request['email'];
        $f_name = $request['f_name'];
		$messageData = ['email' =>$request['email'],'f_name' =>$request['f_name'], 'l_name' =>$request['l_name'], 'phone' =>$request['phone'], 'subject' =>$request['subject'], 'description' =>$request['description']];
		Mail::send('emails.ContactMail',$messageData,function($message) use($email, $f_name){
		$message->to('mpewz20@gmail.com')->subject('You Recived One New Message');
        });

       $form_data = array(
            'f_name'   =>  $request->f_name,
            'l_name'   =>  $request->l_name,
            'email'   =>  $request->email,
            'phone' =>  $request->phone,
            'subject'  =>  $request->subject,
            'description' => $request->description,
        );
        

        Contact::create($form_data);

        return response()->json(['success' => 'Message Send successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
