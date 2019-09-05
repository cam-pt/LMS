@extends('frontend.layouts.app')

@section('title')
    {{ trans('navs.frontend.instructor_dashboard') }} - {{trans('strings.frontend.courses')}}
@stop

@section('content')
    @include('frontend.author.course._dashboard_top')
    
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Student Name</th>
                <th>Course Title</th>
                <th>Due Date</th>
                <th>Submit Date</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Touminh</td>
                    <td>Php Developer</td>
                    <td>12/04/2019</td>
                    <td>21/04/2019</td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection