@extends('frontend.layouts.app')

@section('content')

    @include('frontend.user.course._top')
        
<style>
    body{
    background:#24282f;
}
h1,
h2,
h3,
h4,
p{
    color:#ffff;
}


/*============================ View Page ============================*/

h4{
    font-size:13px;
}
.padding{
    padding:50px 0;
}
.biger{
    font-size: 40px;
    vertical-align: middle;
}


</style>
<div class="container">

    <section>
        <div class="row" style="margin-top:23px;">
            <div class="col-md-6 col-sm-12">
            
            @if(!is_null($last_watched))
                            
                <a href="{{route('frontend.lesson.show', [$courses[0], $last_watched] )}}" ><img src="{{$courses[0]->image}}"/></a>
            @else 
                <a href="{{route('frontend.lesson.show', [$courses[0], $first_lesson] )}}" ><img src="{{$courses[0]->image}}"/></a>
            @endif
            
            </div>
            <div class="col-md-6 col-sm-12">
            @if($success==true)
                <h3 style="text-align:centertext-transform: uppercase;">CONGRATULATIONS {{ $logged_in_user->name }} !</h3>
                <h5 style="text-align:center"> YOU WAS SUCCESS OF YOURE TRANING</h5>
                <div class="col-md-6 col-md-offset-3">
                        <a href="{{url('/courses')}}">
                            <button class="btn btn-success btn-block">
                                GO TO COURSES LIBRARY
                            </button>
                        </a>
                </div>
            @else
                <h3 style="text-align:center;color:green;text-transform: uppercase;">HELLO {{ $logged_in_user->name }} !</h3>
                <h5 style="text-align:center"> WELCOME INTO YOURE COURE</h5>
                <div class="col-md-6 col-md-offset-3">
                        @if(!is_null($last_watched))
                            
                            <a href="{{route('frontend.lesson.show', [$courses[0], $last_watched] )}}" class="btn btn-warning btn-block">{{trans('strings.frontend.continue-to-lesson')}} {{$last_watched->sortOrder}}</a>
                        @else 
                            <a href="{{route('frontend.lesson.show', [$courses[0], $first_lesson] )}}" class="btn btn-warning btn-block">{{trans('strings.frontend.start-course')}}</a>
                        @endif
                        
                </div>
            @endif
                
                
            </div>
        </div>
    </section>
    <section>
        <h3><i class="glyphicon glyphicon-star-empty"></i>This Month Featured Web Class</h3>
        <div class="row imageBg" style="padding:120px 0;background:#0B1121;box-shadow: 0px 0px 20px #000000;background-image: url(/img/backgroundcourse.png);background-repeat: no-repeat;background-position: left;">
            <div class="col-md-4 col-md-offset-4">
                <button class="btn center-block" style="background:rgba(13, 86, 138,.6);border-color:#073863;"><h3 style="color:#fff;">COMING SOON</h3></button>
            </div> 
        </div>
    </section>
    <section>
        <h3><i class="glyphicon glyphicon-th"></i>My Programs</h3>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
            </div>
        </div>
        <div class="row" style="padding:20px 0;background:#0B1121;box-shadow: 0px 0px 20px #000000;background-image: url(/img/backgroundcourse.png);background-repeat: no-repeat;background-position: center;" >
            @foreach($courses as $course)
            <div class="col-md-3 col-sm-6">
            
                <!-- @include('frontend.user.course._course') -->
            
            </div>
            @endforeach
        </div>
    </section>
    <section>
        <h3><i class="glyphicon glyphicon-leaf"></i>Recommended Programs</h3>
        <div class="row imageBg" style="padding:20px 0;background:#0B1121;box-shadow: 0px 0px 20px #000000;background-image: url(/img/backgroundcourse.png);background-repeat: no-repeat;background-position: right;">
            @foreach($re_com as $course)
            <div class="col-md-3 col-sm-6">
                @if($loop->index==4)
                    @break
                @endif
                <!-- @include('frontend.user.course.recommentCourse') -->
            
            </div>
            @endforeach
            
        </div>
    </section>
    <section>
        <div class="row" style="margin-top: 23px;padding:20px 0;background:#0B1121;box-shadow: 0px 0px 20px #000000;background-image: url(/img/backgroundcourse.png);background-repeat: no-repeat;background-position: left;">
            <div class="col-md-12">
            <img src="/img/promotion.jpg" width="100%" alt="">
            </div>
        </div>
    </section>
    <section>
        <h3><i class="glyphicon glyphicon-usd"></i>My Premium Courses</h3>
        <div class="row black" style="padding:20px 0;background:#0B1121;box-shadow: 0px 0px 20px #000000;background-image: url(/img/backgroundcourse.png);background-repeat: no-repeat;background-position: left;">
            <div class="col-md-12">
                <!-- @include('frontend.user.course._course1') -->
            </div>
        </div>
    </section>
</div>
@endsection