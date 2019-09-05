<?php

namespace App\Http\Controllers\Frontend\Payments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use Auth;
use Mail;
use App\Mail\testing;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
use App\Mail\RequestStudy;

class CheckPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course)
    {
        
        $courses = Course::where('id', $course)->get();
        $data=array(
            "course"=>$courses
        );
        // dd($courses);
        return view('frontend.payment_form',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function introCheckmail($email){
        $data=array(
            'email'=>$email
        );
        return View('frontend.intro_checkmail',$data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      	$bank=$request->bank;

       if($bank==1){
       		
       		DB::table('check_courses')->insert([
		    ['course_id' =>$request->couseId,
		    'user_id'=>Auth::user()->id,
		    'sender' =>$request->sender,
		    'code' => $request->code,
		    'receive' =>$request->receiver,
		    'type' => $request->bank,
		    'date_transfer' =>$request->datetr],
			]);
       		
      	
       }else if($bank==2){
           	
       		DB::table('check_courses')->insert([
		    ['course_id' =>$request->couseId,
		    'user_id'=>Auth::user()->id,
		    'acc_number' =>$request->acName,
		    'acc_name' => $request->acNumber,
		    'receive' =>$request->receiver,
		    'type' => $request->bank,
		    'date_transfer' =>$request->datetr],
			]);
       		

       }else{
           DB::table('check_courses')->insert([
		    ['course_id' =>$request->couseId,
		    'user_id'=>Auth::user()->id,
		    'acc_number' =>$request->acName,
		    'acc_name' => $request->acNumber,
		    'receive' =>$request->receiver,
		    'type' => $request->bank,
		    'date_transfer' =>$request->datetr],
			]);
       		
       }
       $users = DB::table('users')
            ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id','=','1')
            ->get();
       
       foreach ($users as $key) {
           
        Mail::to($key->email)->send(new RequestStudy());
       }
       
       return View('frontend.waiting_admin_approve');
        
    }
    public function send(Request $request){
        
        DB::table('user_info')->insert([
            'user_id' => Auth::user()->id,
            'course_id' => $request->course_id,
            'first_name' =>$request->fname,
            'last_name' => $request->lname,
            'company' =>$request->cname,
            'address_one' => $request->adr,
            'address_two' =>$request->adrt,
            'city' => $request->city,
            'country' =>$request->country,
            'zip' =>$request->zip,
            'p_number' =>$request->pnum,
            'e_address' =>$request->eadr 
        ]);
        Mail::to($request->eadr)->send(new testing($request->course_id));
        return redirect('/courses/intro/mail/'.$request->eadr);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
