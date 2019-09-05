@extends('frontend.layouts.app')

@section('title')
{{ trans('navs.frontend.instructor_dashboard') }} - {{trans('strings.frontend.courses')}}
@stop

@section('content')
@include('frontend.author.course._dashboard_top')

<section id="categories-content" class="categories-content">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-md-push-0">
                <div class="content grid">
                    <div class="row">
                        <div class="panelx panel-defaultx">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            {{trans('strings.frontend.assignment-list')}}
                                        </h4>
                                    </div>
                                    <div>
                                        <div class="panel-body">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Student Name</th>
                                                        <th>Course Title</th>
                                                        <th>Due Date</th>
                                                        <th>Submit Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Touminh</td>
                                                        <td>Php Developer</td>
                                                        <td>12/04/2019</td>
                                                        <td>21/04/2019</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a id="dLabel" data-target="#" href="#"
                                                                    data-toggle="dropdown" role="button"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <li class="glyphicon glyphicon-tasks pull-right">
                                                                        <span class="caret"></span></li>

                                                                </a>

                                                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                                    <li><a href="#">Approve</a></li>
                                                                    <li><a href="#">Disapprove</a></li>
                                                                    <li><a href="#">Preview</a></li>
                                                                    <li><a href="#">Delete</a></li>

                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer clearfix"><span class="pull-right"></span></div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end panel -->
                    </div><!-- end row -->
                </div>
            </div>

        </div>
    </div>
</section>



@endsection