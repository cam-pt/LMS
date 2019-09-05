<?php

namespace App\Http\Controllers\Frontend\User;

use DB;
use Auth;
use Helper;
use Cookie;
use App\Models\Access\User\User;
use App\Models\Course;
use App\Models\Section;
use App\Models\Lesson;
use App\Models\Completion;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class InfouserpayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      
       
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {  
        $course_id=$id;
        $user_id=Auth::user()->id;
        $comment = DB::table('reviews')
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->select('reviews.*', 'users.last_name', 'users.first_name')
            ->where('course_id','=',$course_id)
            ->get();
            // dd($comment);
            $courses = DB::table('courses')->where('id', '=', $course_id)->get();
           
            
            $announcement_comments = DB::table('announcement_comments')->where('user_id', '=', $user_id)->get();
        return view('frontend.payment', compact('courses', 'announcement_comments','comment'));

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
