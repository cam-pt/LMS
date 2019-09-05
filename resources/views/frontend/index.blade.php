@extends('frontend.layouts.app')

@section('title')
{!! trans('strings.frontend.home') !!}
@endsection

@section('after-styles')

<style type="text/css">
#background{display:none;right:0;bottom:0;top:50%;left:50%;width:100%;height:100%;z-index:-100;object-fit:cover;overflow:hidden;border:1px solid rgba(255,255,255,.6)}#FreeTrainingHeadlineHome{background-color:#36302b;border-bottom:2px solid #fff}#FreeTrainingHeadlineHome img{margin-top:-15px}img{vertical-align:middle}img{border:0}.center-block{display:block;margin-right:auto;margin-left:auto}h1 span.goldenUnderline{font-weight:700;display:inline-block;padding-bottom:18px;background-image:url(/img/gold-grunge-line.png);background-repeat:no-repeat;background-position:center bottom;background-size:100% auto}.font12{font-size:12px!important}.nomargin{margin:0}table.stats td img{width:35px}table.stats td{padding:5px 3px}#joinUs div.rightBorder{border-right:thin double #ccc}.font18{font-size:18px!important}.font52{font-size:52px!important}.lato{font-family:Lato,sans-serif;font-weight:100}.lightBrown{color:#c5ab75}@media (min-width:62em){#background{display:block}.jumbotron .bg-stripe-overlay{background-image:linear-gradient(to right,#393939,#6c6d6c,#393939);text-align:left;padding:70px 0}}.awe-parallax{background-color:rgba(17,83,140,.6);z-index:100}.button-set-header{padding:10px 25px;box-shadow:inset 0 1px 3px rgba(0,0,0,.2);border-radius:5px}.button-set-header.one{background:rgba(0,0,0,.2);border-bottom:solid 1px rgba(168,152,164,.65);margin:20px 0 20px}.jumbotron h2{margin-top:0}.jumbotron .search-item{color:#ddd}.jumbotron .tt-hint,.jumbotron .tt-input,.jumbotron .tt-menu,.jumbotron .twitter-typeahead{width:100%}.jumbotron .tt-menu.tt-open{margin-top:0}.jumbotron .tt-hint,.jumbotron .tt-query{padding:8px 12px;font-size:14px;line-height:30px;border:2px solid #ccc;border-radius:4px;outline:0}.jumbotron .tt-query{box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.jumbotron .tt-hint{color:#fff}.jumbotron .tt-menu{min-width:100%;color:#fff!important;padding:0;text-align:left;background-color:rgba(0,0,0,.2);border:1px solid rgba(255,255,255,.6)}.jumbotron .tt-menu a{color:#d3d3d3!important;font-size:1.4em;line-height:1.4em}.jumbotron .tt-suggestion{padding:3px 10px;font-size:15px;line-height:24px}.jumbotron .tt-highlight{color:#fff}.jumbotron .tt-suggestion.tt-cursor,.jumbotron .tt-suggestion.tt-is-under-cursor{color:#fff;background-color:rgba(255,255,255,.2)}.jumbotron #mk-fullscreen-search-input,.jumbotron #mk-fullscreen-search-input:focus,.jumbotron [type=text].form-control{box-shadow:none!important;border:1px solid #ddd;-webkit-box-shadow:none!important;border:1px solid #ddd;border:1px solid rgba(255,255,255,.3);width:100%;background:rgba(255,255,255,.2);color:#fff}.mc-section-1-content-1 .big{margin-bottom:10px}.big{font-family:Lato,sans-serif;font-size:25px;line-height:1.5em;color:#9a9a9a;font-weight:700}.one ::-webkit-input-placeholder{color:#f5f5f5!important}.one ::-moz-placeholder{color:#f5f5f5!important}.one ::-ms-placeholder{color:#f5f5f5!important}.one ::placeholder{color:#f5f5f5!important}.main{width:100%!important}.section{width:100%;height:auto;padding:15px 0}.jCount{font-size:43px;font-weight:700;line-height:47px}.btmFl,.jCount,.topText{text-align:center}.blue-bg{background:#3e8ddd}.white{color:#fff}.fn18{font-size:18px;font-weight:300;line-height:18px}.purple{color:#fff;font-weight:700;font-size:34px}.white-bg{background:#fff}.grey{color:#707170;font-weight:300;font-size:18px!important}.sep-arrow-down-blue,.sep-arrow-down-green,.sep-arrow-down-purple{position:relative;background:#0b1121;color:#fff;text-align:center;padding:20px}.sep-orange-bar{background-color:#e28e76;position:absolute;width:15%;height:100%;right:0;top:0;z-index:1}.sep-arrow-down-blue span,.sep-arrow-down-green span,.sep-arrow-down-purple span{display:block;position:relative;padding:0;margin:0;font-size:40px;letter-spacing:0;font-weight:300;z-index:10;line-height:1.1}.videoDisplay{max-width:606px;background-color:#000;padding:20px;margin-left:auto;margin-right:auto;-webkit-border-top-left-radius:10px;-webkit-border-top-right-radius:10px;-moz-border-radius-topleft:10px;-moz-border-radius-topright:10px;border-top-left-radius:10px;border-top-right-radius:10px}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}#freeTrainingsOffers{background-image:url(img/gold-purple-background.jpg);background-repeat:no-repeat;background-position:50% 50%;padding-top:50px}#learnMoreButtons{background-color:#f8f8f8}#learnMoreButtons img{margin-top:-34px}#testimonialsA{background-color:#f8f8f8}#testimonialsA .testimonial{background-color:#fff;font-family:Raleway,sans-serif;padding:0 10px 30px;color:#7b7a7a;text-align:left;font-size:16px;border:3px solid #eee;margin-top:150px;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}#testimonialsA .testimonial img{margin-top:-130px;padding-bottom:30px}.line45{line-height:45px!important}.trajan{font-family:"Trajan Pro",TrajanPro,Arial,sans-serif}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive{position:relative;display:block;height:0;overflow:hidden}#aboutHarv{background-color:#f5f5f5}#testimonialsB .container p{margin-bottom:24px}.line21{line-height:21px!important}.font21{font-size:21px!important}.maven{font-family:'Maven Pro',sans-serif}p{margin:0 0 10px}img{vertical-align:middle}.line40{line-height:40px!important}.font36{font-size:36px!important}.white{color:#fff}#recentPosts{background-color:#f2f3f4}.line72{line-height:72px!important}.line10{line-height:10px!important}.nomargin-t{margin-top:0}.text-uppercase{text-transform:uppercase}.featuredLessonHeadline{font-size:36px}.blogFooter{background-color:#484848;padding-top:13px;min-height:320px}.blogImage{background-repeat:no-repeat;background-size:cover;background-position:center top;min-height:160px}.blogFooter p.copy{background-color:#484848;padding:10px;font-weight:400}.blogFooter p.copy a:hover{color:#fff;text-decoration:underline}.blogFooter p.copy a{color:#fff}
</style>
@stop

@section('content')

<div class="jumbotron" style="z-index: 2;">
    <div class="bg-stripe-overlay">
        <div class="container">
            <div class="row top-row">
                <div class="col-md-6">
                    <video autoplay loop id="background" poster="/images/background-homepage.jpg"
                        oncanplay="this.muted=true">
                        <source src="/images/training-adabe-final.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-6">
                    <div class="row search-form-box hidden-xs" style="margin-top: 0px;">
                        <div class="well button-set one"
                            style="padding: 10px; border: 0 solid red !important; margin-top:0; width:100%;">
                            <form action="{{ route('frontend.course.get') }}" class="form-horizontal" method="get"
                                id="mk-fullscreen-searchform">
                                <input type="text" name="search" autocomplete="off"
                                    class="main-search form-control input-lg"
                                    placeholder="{{trans('strings.frontend.search-author-or-title')}}..."
                                    id="mk-fullscreen-search-input">
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="left">
                            @if(!auth()->check())
                            <h2>{!!trans('strings.frontend.homepage-caption')!!}</h2>
                            <p>{!!trans('strings.frontend.homepage-paragraph')!!}</p>

                            <div class="button-set" style="padding:0;box-shadow:none;">
                                <a class="btn btn-success" href="{{route('frontend.auth.login')}}">
                                    {!! trans('navs.frontend.login') !!}
                                </a>
                                <span class="divider hidden-xs">or</span>
                                <a href="{{route('frontend.auth.register')}}" class="btn btn-warning">
                                    {!! trans('navs.frontend.register') !!}
                                </a>
                            </div>
                            @else

                            <h2>{!!trans('strings.frontend.homepage-caption')!!}</h2>
                            <p>{!!trans('strings.frontend.homepage-paragraph')!!}</p>
                            <a class="btn btn-success" href="{{route('frontend.course.get')}}">
                                {!! trans('strings.frontend.start-learning') !!}
                            </a>
                            @endif

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="section as-seen-on" style="background:#171E38;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-12 white text-center fn18">AS SEEN ON:</div>
            <div class="col-md-2 col-xs-3"><img src="img/cbs.png"></div>
            <div class="col-md-2 col-xs-3"><img src="img/cnn.png"></div>
            <div class="col-md-2 col-xs-3"><img src="img/NBC.png"></div>
            <div class="col-md-2 col-xs-3"><img src="img/ABC.png"></div>
            <div class="col-md-2 col-sm-12">
                <div class="spacer-15"></div>
                <div class="spacer-100 visible-xs"></div>
                <img class="img-responsive img-responsive-center" src="img/NYT.png" width="231" height="31" alt="">
            </div>
        </div>
    </div>
</div>
@if(!is_null($coupon))
<section id="testimonial">
    <div class="container">
        <div class="coupon-info">
            <h3 class="code orange">{{$coupon->percent}}% {{trans('strings.frontend.off')}}</h3>
            <h3>{{trans('strings.frontend.any-course')}}</h3>
            <h3>{{trans('strings.frontend.use-coupon')}}</h3>

            <h3 class="orange">{{$coupon->code}}</h3>
            <h3>{{trans('strings.frontend.expires-in')}}</h3>
            <h3 class="orange">
                <div id="getting-started"></div>
            </h3>
        </div>
    </div>
</section>
@endif





<!-- END / SECTION 1 -->

@if(config('settings.adsense_top_responsive_slot') != '')
<section id="mc-section-3" class="mc-section-3 section">
    <div class="container">
        <center>
            @if(config('demo.demo_mode'))
            <div
                style="max-width: 100%; height: auto; background: rgb(153, 153, 153); color: #fff; line-height: 90px; text-align: center; ">
                AD BANNER</div>
            @endif
            <!-- Banner Add -->
            <google-adsense ad-client="{{config('settings.adsense_ad_client')}}"
                ad-slot="{{config('settings.adsense_top_responsive_slot')}}" ad-style="display: block" ad-format="auto">
            </google-adsense>
        </center>
    </div>
</section>
@endif

@if($featuredCategories->count() > 0)
@foreach($featuredCategories as $category)
@if(count($category->courses))
<section id="mc-section-3" class="mc-section-3 section">
    <div class="container">
        <!-- FEATURE -->
        <div class="feature-course">
            <h4 class="title-box text-uppercase">{{trans('strings.frontend.featured-in')}} <b><a
                        href="{{route('frontend.course.get')}}?category={{$category->slug}}">{{$category->name}}</a></b>
            </h4>
            <a href="{{route('frontend.course.get')}}?category={{$category->slug}}"
                class="all-course mc-btn btn-style-1 hidden-xs hidden-sm">
                {{trans('strings.frontend.more')}}
            </a>

            <div class="spinner">
                <center>
                    <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-muted"></i>
                </center>
            </div>
            <div class="row">
                <div class="feature-slider" style="display:none">
                    @foreach($category->courses as $course)
                    @include('frontend._course_home')
                    @endforeach
                </div>
            </div>


        </div>
        <!-- END / FEATURE -->
    </div>
</section>

@if(Auth::check())
<!-- Modal -->
@foreach($category->courses as $course)
<div class="modal fade" id="affiliateLink-{{$course->id}}" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <strong>
                    {{trans('strings.frontend.copy-affiliate-link')}}
                </strong>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" style="font-size:12px !important;"
                            id="promoLink-{{$course->id}}"
                            value="{{ URL::route('frontend.course.show', ['course' => $course, 'ref' => Auth::user()->affiliate_id]) }}">
                        <span class="input-group-addon">
                            <a href="javascript:void(0)" class="copyLink" id="copyLink"
                                onclick="copyToClipboard('#promoLink-{{$course->id}}')">
                                <i class="fa fa-clipboard"></i>
                            </a>
                        </span>
                    </div>
                    <small class="text-success feedback-message"></small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">
                    {{trans('strings.frontend.close')}}
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif


@endif
<!-- END / SECTION 3 -->

@endforeach
@endif

@if(config('settings.adsense_top_responsive_slot') != '')
<section id="mc-section-3" class="mc-section-3 section">
    <div class="container">
        <center>
            @if(config('demo.demo_mode'))
            <div
                style="max-width: 100%; height: auto; background: rgb(153, 153, 153); color: #fff; line-height: 90px; text-align: center; ">
                AD BANNER</div>
            @endif
            <!-- Banner Add -->
            <google-adsense ad-client="{{config('settings.adsense_ad_client')}}"
                ad-slot="{{config('settings.adsense_top_responsive_slot')}}" ad-style="display: block" ad-format="auto">
            </google-adsense>
        </center>
    </div>
</section>
@endif
<input type="hidden" value="" id="days-left" />

<div class="main">


    <div class="section" style="background:#fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center purple">What is Innercise?</h2>
                    <p class="text-center text-lg grey" style="line-height: 1.2">Innercise is a scientifically
                        proven
                        methodology to train and strengthen your mental and emotional skills.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="sep-arrow-down-purple" style="background:#171E38;color:#ffffff;"> <span>The Science</span>

    </div>
    <div class="container">
        <div class="col-md-6" style="padding:30px;">
            <h2 class="text-center">The Power is Within You</h2>
            <p class="gray">The latest scientific findings establish that you can change your life by changing
                your brain. For many years, scientists believed that your brain was a static, hard-wired organ,
                but the study of Neuroplasticity has proven otherwise. Your brain is forming new connections
                and growing new brain cells everyday.
                A study published in Clinical Psychology Review suggests that, when you practice a variety of
                specific brain related activities you have the ability to transform your health, finances,
                career and relationships. NeuroGym, uses the latest brain science to help you achieve positive,
                lasting change, creating the life of your dreams. We call our brain-retraining process
                Innercise<sup class="small">®</sup>. </p>
        </div>
        <div class="col-md-6" style="margin-right:0;padding:0;">
            <img src="img/beach.jpg" class="img-responsive" alt="">
        </div>
    </div>
    <div class="sep-arrow-down-green" style="background:#171E38;color:#ffffff;"> <span>About Cam-PT</span>

    </div>
    <div class="container">

        <div class="col-md-6" style="margin-left:0;padding:0;">
            <img src="img/goal.jpg" class="img-responsive" alt="">
        </div>
        <div class="col-md-6" style="padding:30px;">
            <h2 class="text-center">The Power is Within You</h2>
            <p class="gray">The latest scientific findings establish that you can change your life by changing
                your brain. For many years, scientists believed that your brain was a static, hard-wired organ,
                but the study of Neuroplasticity has proven otherwise. Your brain is forming new connections
                and growing new brain cells everyday.
                A study published in Clinical Psychology Review suggests that, when you practice a variety of
                specific brain related activities you have the ability to transform your health, finances,
                career and relationships. NeuroGym, uses the latest brain science to help you achieve positive,
                lasting change, creating the life of your dreams. We call our brain-retraining process
                Innercise<sup class="small">®</sup>. </p>
        </div>
    </div>
</div>
<!-- SECTION 1 -->
<!-- <section id="mc-section-1" class="mc-section-1 section" style="background:#171e38;padding:25px 0px;margin-top:30px;">
    <div class="container">
        <div class="row">
            @if($featured_page)
            <div class="col-md-{{count($posts) ? '6' : '12'}}">
                <div class="mc-section-1-content-1">
                    <h2 class="big">{{$featured_page->title}}</h2>
                    <p class="mc-text">{!! str_limit(strip_tags($featured_page->body), 250) !!}</p>
                    <a href="{{route('frontend.pages.show', $featured_page)}}"
                        class="mc-btn btn-style-1">{{trans('strings.frontend.read-more')}}</a>
                </div>
            </div>
            @endif

            <div class="col-md-{{!is_null($featured_page) ? '6' : '12'}}">
                <div class="row">
                    <h2 class="big">{{trans('strings.frontend.recent-posts')}}</h2>
                    @foreach($posts as $p)
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="featured-item">
                                <h4 class="title-box text-uppercase">
                                    <a href="{{route('frontend.posts.show', $p)}}">{{$p->title}}</a>
                                </h4>
                                <p>
                                    {!! str_limit(strip_tags($p->body), 120) !!}
                                    <span><a href="{{route('frontend.posts.show', $p)}}">{{trans('strings.frontend.read-more')}}
                                            <i class="fa fa-angle-double-right"></i></a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
</section> -->
<section style="background: linear-gradient(to bottom,#000 0%,#103253 50%,#1d5c9a 100%);padding-top:50px;">
    <div class="container">
        <div class="col-sm-12 col-md-6 col-lg-6 white font18 line24">
            <div class="hidden-xs">
                <p class="nomargin-b line34">&nbsp;</p>
                <h1 class="text-center lato white font38" style="font-weight:100;"><span style="font-weight:700">T. Harv
                        Eker</span> has helped <br class="visible-lg"><span style="font-weight:700;"
                        class="lightBrown">over
                        1.5 million people</span> <br class="visible-lg">move closer to their goal of<br
                        class="visible-lg">
                    <span style="font-weight:700">True Financial Freedom</span></h1>
                <h1 class="text-center"><span class="goldenUnderline font52">Are You Next?</span></h1>
            </div>
            <div class="visible-xs">
                <p class="nomargin-b line16">&nbsp;</p>
                <h1 class="text-center lato white font26" style="font-weight:100"><span style="font-weight:700">T. Harv
                        Eker</span> has helped <span style="font-weight:700;" class="lightBrown">over 1.5 million
                        people</span> move closer to their goal of <span style="font-weight:700">True Financial
                        Freedom</span></h1>
                <h1 class="text-center"><span class="goldenUnderline font40">Are You Next?</span></h1>
                <p>&nbsp;</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="videoDisplay">
                <div class="embed-responsive embed-responsive-16by9"> <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/oRfrokMDjOA" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe></div>
            </div>
            <div align="center"> <img src="{{url('/img/computer-footer.png')}}" class="img-responsive lazyloading"
                    data-was-processed="true"></div>
        </div>
    </div>
</section>
<section>
    <div id="joinUs">
        <p>&nbsp;</p>
        <h3 class="text-center lato font18">JOIN OVER <span style="font-weight:700;">1.5 MILLION RICHER MEMBERS</span>
        </h3>
        <div class="container" align="center" style="max-width:800px;">
            <div class="row">
                <div class="col-md-2 col-md-offset-1 rightBorder">
                    <table class="stats">
                        <tbody>
                            <tr>
                                <td><img src="/img/stats_suscriber.png" class="img-responsive lazyloading"
                                        data-was-processed="true"></td>
                                <td>
                                    <p class="font14 nomargin">447,510</p>
                                    <p class="font12 nomargin">Subscribers</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2 rightBorder">
                    <table class="stats">
                        <tbody>
                            <tr>
                                <td><img src="/img/stats_facebook.png" class="img-responsive lazyloading"
                                        data-was-processed="true"></td>
                                <td>
                                    <p class="font14 nomargin">749,437</p>
                                    <p class="font12 nomargin">Fans</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2 rightBorder">
                    <table class="stats">
                        <tbody>
                            <tr>
                                <td><img src="/img/stats_twitter.png" class="img-responsive lazyloading"
                                        data-was-processed="true"></td>
                                <td>
                                    <p class="font14 nomargin">129,108</p>
                                    <p class="font12 nomargin">Followers</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2 rightBorder">
                    <table class="stats">
                        <tbody>
                            <tr>
                                <td><img src="/img/stats_linkedIn.png" class="img-responsive lazyloading"
                                        data-was-processed="true"></td>
                                <td>
                                    <p class="font14 nomargin">600+</p>
                                    <p class="font12 nomargin">Connections</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2">
                    <table class="stats">
                        <tbody>
                            <tr>
                                <td><img src="/img/stats_instagram.png" class="img-responsive lazyloading"
                                        data-was-processed="true"></td>
                                <td>
                                    <p class="font14 nomargin">129,838</p>
                                    <p class="font12 nomargin">Followers</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
    </div>
</section>
<section>
    <div id="FreeTrainingHeadlineHome" class="brownBG">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12"><img
                        src="https://www.harveker.com/wp-content/themes/harveker-responsive-2016/images/education-FreeTrainingsHeadline.png"
                        class="img-responsive center-block lazyloading" alt="Free T. Harv Eker Trainings"
                        data-was-processed="true"></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="freeTrainingsOffers">
        <div class="container widestContainer">
            <div class="row">
                <div class="col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0">
                    <p class="line72 visible-md visible-lg">&nbsp;</p>
                    <p class="line30">&nbsp;</p>
                    <p class="white font36 line40 text-center">Are you interested <br class="visible-lg">in creating
                        extreme <br class="visible-lg">wealth in business?</p>
                    <p class="hidden-xs">&nbsp;</p>
                    <div align="center"> <img src="/img/zero-to-multimillionaire.png" alt="Zero to Multimillionaire"
                            class="img-responsive lazyloading" data-was-processed="true">
                    </div>
                    <p class="hidden-xs">&nbsp;</p>
                    <div align="center" class="visible-xs visible-sm visible-md"
                        style="margin-top:25px; margin-bottom:25px;"> <a
                            href="http://www.harvekeronline.com/zero-to-multimillionaire/invite/b/green/"
                            target="_blank"><img src="/img/learn-more_zero-to-mm.png"
                                alt="Learn More - Zero to Multimillionaire" class="img-responsive"></a></div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div align="center"> <img src="{{url('/img/Tim Saroeun portrait.png')}}"
                            alt="Harv with Hand on Heart" class="img-responsive harvHeart lazyloading" width="300"
                            style="vertical-align:bottom;" data-was-processed="true"></div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <p class="line72 visible-md visible-lg">&nbsp;</p>
                    <p class="line30">&nbsp;</p>
                    <p class="white font36 line40 text-center">Are you interested <br class="visible-lg">in creating
                        your <br class="visible-lg">level 10 life?</p>
                    <p class="hidden-xs">&nbsp;</p>
                    <div align="center"> <img src="/img/life-makeover-system.png" alt="Zero to Multimillionaire"
                            class="img-responsive lazyloading" data-was-processed="true">
                    </div>
                    <p class="hidden-xs">&nbsp;</p>
                    <div class="visible-xs visible-sm visible-md" align="center"
                        style="margin-top:25px; margin-bottom:25px;"> <a href="" target="_blank"><img
                                src="/img/learn-more_life-makeover-system.png"
                                alt="Learn More - Zero to Multimillionaire" class="img-responsive"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="learnMoreButtons" class="hidden-xs hidden-sm hidden-md">
        <div class="container widestContainer">
            <div class="row">
                <div class="col-lg-4">
                    <div align="center"> <a
                            href="http://www.harvekeronline.com/zero-to-multimillionaire/invite/b/green/"
                            target="_blank"><img src="/img/learn-more_zero-to-mm.png"
                                alt="Learn More - Zero to Multimillionaire" class="img-responsive lazyloading"
                                data-was-processed="true"></a></div>
                </div>
                <div class="col-lg-4 col-lg-offset-4">
                    <div align="center"> <a href="http://www.harvekeronline.com/lifemakeoversystem-new/"
                            target="_blank"><img src="/img/learn-more_life-makeover-system.png"
                                alt="Learn More - Zero to Multimillionaire" class="img-responsive lazyloading"
                                data-was-processed="true"></a></div>
                </div>
            </div>
        </div>
    </div>
    <p class="line30 visible-lg">&nbsp;</p>
    <h2 class="text-center lato" style="font-weight:700;font-size: 30px;">See what participants of Harv's trainings have
        to say:</h2>
    <div id="testimonialsA">
        <div class="container testimonialsAcontainer" align="center" style="max-width:800px;">
            <div class="row">
                <div class="col-md-4" style="padding-left:5px; padding-right:5px;">
                    <div class="testimonial">
                        <div align="center"> <img src="{{url('/img/student1.png')}}" class="img-responsive lazyloading"
                                data-was-processed="true"></div> Ever since Harv's
                        class I have gone from being worth $0 to now having almost $800,000 in real estate, a fully paid
                        for car, and my beloved Harley. I did it on a $13/hour job and with some wise investing in real
                        estate and house flipping. Everything I touch turns to gold!<div align="center" class="author">
                            David Jackson</div>
                    </div>
                </div>
                <div class="col-md-4" style="padding-left:5px; padding-right:5px;">
                    <div class="testimonial">
                        <div align="center"> <img src="{{url('/img/student2.png')}}" class="img-responsive lazyloading"
                                data-was-processed="true"></div> After my husband and
                        I took your class our lives forever changed. It was one of the most important steps in an
                        amazing personal journey, that lead us to our amazing life. We are now more than financially
                        abundant and enjoying personal and business growth. Thank you so much.<div align="center"
                            class="author">Aviva Varey Keely</div>
                    </div>
                </div>
                <div class="col-md-4" style="padding-left:5px; padding-right:5px;">
                    <div class="testimonial">
                        <div align="center"> <img src="{{url('/img/student3.png')}}" class="img-responsive lazyloading"
                                data-was-processed="true"></div> Harv, I just wanted
                        to say thank you for everything you've done to help better our world! You've changed so many
                        people's lives... including my own! Personally, I wanted to share that I was able to reach my
                        goal of saving $10,000 for investment purposes, mostly because some of the tools I've learned in
                        your trainings. Thanks to you, I've definitely raised the bar for myself and what I can
                        accomplish.<div align="center" class="author">Moriah Diamond</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #1b1e36;border-top: 8px solid #fff;padding: 33px 15px;">
    <div class="container">

        <div class="col-md-12">
            <form class="form-inline pull-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <button type="submit" class="btn btn-default">Go</button>
            </form>
        </div>
    </div>
</section>
<section style="background:#F5F5F5;">
    <div class="container" style="padding-top:50px;">
        <div id="aboutHarv">
            <div class="container" align="center">
                <div class="row aboutHeader">
                    <div class="col-md-6 font18 line24">
                        <p class="line45 hidden-xs hidden-sm">&nbsp;</p>
                        <div align="center" class="trajan">During his years of struggle, Eker vowed that should he ever
                            get rich, he would help others do the same. <br class="hidden-xs">
                            <p class="line10">&nbsp;</p> <span style="font-weight:700;"><em>He has kept his
                                    promise.</em></span>
                            <p class="line10 hidden-lg">&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="videoDisplay">
                            <div class="embed-responsive embed-responsive-16by9"> <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/oRfrokMDjOA" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe></div>
                        </div>
                        <div align="center"> <img src="/img/computer-footer.png" class="img-responsive lazyloading"
                                data-was-processed="true"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-left text-uppercase lato" style="font-weight:700;">A deeper look into where Harv
                            came from</h2>
                    </div>
                </div>
                <div class="line5 hidden-xs" style="height:5px">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 text-justify font18 line22">
                        <p style="font-weight:700">Using the principles he teaches, T. Harv Eker went from <span
                                class="blue">zero to millionaire in only 2 1/2 years!</span> He combines a unique brand
                            of ‘street-smarts with heart'.</p>
                        <p>Eker's high-energy, ‘cut-to-the-chase' style keeps his audience spellbound. T. Harv Eker's
                            motto is "talk is cheap" and his unique ability is getting people to take "action" in the
                            real world to produce real success.</p>
                        <p>Eker is the author of the best-selling books, <span style="font-weight:700">Secrets of the
                                Millionaire Mind</span> and SpeedWealth. He has also developed several highly-acclaimed
                            courses such as The Millionaire Mind Intensive, Life Directions, Wizard Training and Train
                            the Trainer. He is also the producer and trainer of the world-famous Enlightened Warrior
                            Training.</p>
                        <p>T. Harv Eker is the son of European immigrants who came to North America with only thirty
                            dollars to their name. He grew up in Toronto, but spent most of his adult years in the
                            United States.</p>
                        <p>Money was scarce throughout his childhood, so at thirteen, Eker began his work career. As a
                            teen he delivered newspapers, scooped ice cream, sold novelties at fairs, and suntan lotions
                            at the beach. After a year at York University, he decided to take time off to pursue his
                            dream of becoming a millionaire.</p>
                        <p>During his early adult years, he lived in five different cities, including Lake Tahoe and Ft.
                            Lauderdale. He had a variety of jobs and started more than a dozen different businesses, but
                            regardless of what he did, or how hard he worked, he just couldn't achieve success.</p>
                    </div>
                    <div class="col-md-6 text-justify font18 line22">
                        <p>Finally after many years of frustration, Eker hit the jackpot. He opened one of the first
                            retail fitness stores in North America and grew the business to ten stores in only two and a
                            half years. He then sold part of the company to a Fortune 500 corporation.</p>
                        <p>With the sale, Eker reached his dream. He was finally a millionaire; however, in less than
                            two years, the money was gone. Through a combination of poor investments and unchecked
                            spending, Eker was back at his original net worth ... again.</p>
                        <p>It was at that point that Eker began developing his theories about people's mental and
                            emotional relationship to money. He realized that his "inner-money thermostat" was set for a
                            specific amount of financial success, and that everyone else had a financial set point too.
                            His most profound discovery was that this money blueprint could be changed. Using the
                            principles and practices found in his book, Secrets of the Millionaire Mind, Eker reset his
                            own blueprint to not only create success, but to keep it and grow it, and become a
                            multi-millionaire.</p>
                        <p style="font-weight:700">During his years of struggle, Eker vowed that should he ever get
                            rich, he would help others do the same. He has kept his promise.</p>
                        <p>He has already touched the lives of over 1.5 million people, helping them move closer to
                            their goal of true financial freedom.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div id="testimonialsB">
            <div class="container testimonialsBContainer black openSans font16" style="max-width:800px;">
                <p class="line30 visible-lg">&nbsp;</p>
                <h2 class="text-center lato" style="font-weight:700;color:black;font-size:30px;">See what others have to
                    say about Harv:</h2>
                <div class="row">
                    <div class="col-sm-3"> <img
                            src="{{url('/img/Manil.png')}}"
                            class="img-responsive center-block lazyloading" alt="" data-was-processed="true"></div>
                    <div class="col-sm-9">
                        <div class="copy">
                            <p class="maven font21 line21 text-center-xs text-left-sm">“I Highly Recommend Harv's
                                Work”<strong></strong></p>
                            <p>“I have witnessed and admired T. Harv Eker's work for years. I highly recommend his work
                                for anyone seeking to increase their financial, mental and emotional wealth.”</p>
                            <p><strong class="orange">Jack Canfield</strong> <small><em>#1 New York Times bestselling
                                        co-author of Chicken Soup For The Soul series.</em></small></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-push-9"> <img
                            src="{{url('/img/Mr LOO.png')}}"
                            class="img-responsive center-block lazyloading" alt="" data-was-processed="true"></div>
                    <div class="col-sm-9 col-sm-pull-3">
                        <div class="copy">
                            <p class="maven font21 line21 text-center-xs text-left-sm">“Study Harv's Work As If Your
                                Life Depended On It!”<strong></strong></p>
                            <p>“Study Harv's work as if your life depended on it... Financially it may!”</p>
                            <p><strong class="orange">Tony Robbins</strong> <small><em>bestselling author and Peak
                                        Performance Strategist.</em></small></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"> <img
                            src="{{url('/img/Shusovann 1.PNG')}}"
                            class="img-responsive center-block lazyloading" alt="" data-was-processed="true"></div>
                    <div class="col-sm-9">
                        <div class="copy">
                            <p class="maven font21 line21 text-center-xs text-left-sm">“Harv Is A
                                Master!”<strong></strong></p>
                            <p>“Harv is a master at making the road to riches simple. Finally, his powerful principles
                                are available.”</p>
                            <p><strong class="orange">Marci Shimoff </strong> <small><em>#1 New York Times bestselling
                                        author.</em></small></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<blog-post></blog-post>

@endsection
@section('after-scripts')
@if(!is_null($coupon))
<script type="text/javascript">
    $('#getting-started').countdown('{{$coupon->expires}}', function (event) {
        $(this).html(event.strftime("%D {{str_plural(trans('strings.frontend.day'), $coupon->days_left)}} %H:%M:%S"));
    });
</script>
@endif

<script type="text/javascript">
    $(document).ready(function () {
        $('.search-form-box').fadeIn(100);
    });


    function copyToClipboard(el) {
        document.querySelector(el).select();
        document.execCommand('copy');
        $('.feedback-message').text("{{trans('strings.frontend.copied-to-clipboard')}}");
        setTimeout(() => {
            $('.feedback-message').text('');
        }, 3000);

    }
</script>



@endsection