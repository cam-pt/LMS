@extends('frontend.layouts.app')
@section('title')
    {{trans('strings.frontend.blog')}}
@stop
@section('content')
    <div class="jumbotron">
        <div class="bg-stripe-overlay">
            <div class="container">
                <div class="left">
                    <h2 style="font-size: 35px;">{{trans('strings.frontend.blog')}}</h2>
                    <p>{{trans('strings.frontend.blog-small')}}</p>
                </div>
            </div>
        </div>
    </div>
    
    <section id="categories-content" class="last categories-content">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR CATEGORIES -->
                <div class="col-md-3">
                    <aside class="sidebar-categories">
                        <div class="inner">
                            
                            <!-- WIDGET TOP -->
                            
                            <div class="widget">
                                <ul class="list-style-block">
                                    <strong>{{trans('strings.frontend.categories')}}</strong>
                                    @foreach($postCategories as $category)
                                        <li class="current"><a href="{{route('frontend.blog.category.index', $category)}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- END / WIDGET TOP -->
                            {{-- Rith --}}
                            {{-- <div class="row" style="margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="list-group">
                                      <h5 class="list-group-item active">PREMIUM</h5>
                                      @foreach ($postsPremium as $titlePremium)
                                          <a href="{{url('')}}" class="list-group-item">{{$titlePremium->title}}</a>
                                      @endforeach
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <form method="POST" :action="'/author/lesson/'+lesson.id+'/attachment/upload'" class="form-inline" enctype="multipart/form-data">           				                    
                                {{csrf_field()}}
                                
                                <div class="form-group pull-right">
                                    
                                    <input type="file" id="attachment" @change="fileSelected" name="attachment[]" multiple /><br />
                                    <button type="submit" disabled class="btn btn-primary btn-xs attachment-submit-btn">
                                        {{trans('strings.frontend.upload')}}
                                    </button>
                                    <a href="#" @click.prevent="showAddAttachment=false">
                                        <i class="fa fa-times text-danger"></i> {{trans('strings.frontend.cancel')}}
                                    </a>
                                    <br />
                                    <div class="help-block pull-right">
                                        {{trans('strings.frontend.upload-msg')}}
                                    </div>
                                </div>
                                
                            </form> --}}
                            <!-- Banner Add -->
                            {{-- end Rith --}}



                            <div class="mc-banner">
                                @if(config('demo.demo_mode'))
                                    <a href="#"><img src="/images/banner-ads-2.jpg" alt=""></a>
                                @endif
                                <google-adsense
                                  ad-client="{{config('settings.adsense_ad_client')}}"
                                  ad-slot="{{config('settings.adsense_sidebar_responsive_slot')}}"
                                  ad-style="display: block"
                                  ad-format="auto">
                                </google-adsense>
                            </div>
                        </div>
                    </aside>
                </div>
                
                <div class="col-md-9">
                    <div class="content list">
                        <center>
                            @if(config('demo.demo_mode'))
                                <div style="width: 728px; height: auto; background: #eee; color: #999; line-height: 5px; text-align: center; ">AD BANNER</div>
                            @endif
                            <!-- Banner Add -->
                            <google-adsense
                              ad-client="{{config('settings.adsense_ad_client')}}"
                              ad-slot="{{config('settings.adsense_top_responsive_slot')}}"
                              ad-style="display: block"
                              ad-format="auto">
                            </google-adsense>
                        </center>
                    </div>
                    <div id="courses" class="content grid">
                        
                        <div class="spinner">
                            <center>
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-muted"></i>
                            </center>
                        </div>
                        
                        <div class="infinite-scroll" style="display:none">
                            
                            @foreach($posts as $post)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        {{$post->title}}
                                        <span class="pull-right text-muted">{{trans('strings.frontend.posted')}} {{$post->created_at->diffForHumans()}} in <a href="{{route('frontend.blog.category.index', $post->category)}}">{{$post->category->name}}</a></span>
                                    </div>
                                    <div class="panel-body">
                                        {!! str_limit($post->body, 400) !!}
                                        <p>
                                            <a href="{{route('frontend.posts.show', $post)}}" class="btn btn-xs btn-success">{{trans('strings.frontend.read-more')}}...</a>
                                        </p>
                                        
                                    </div>
                                </div>
                                
                            @endforeach
                            <span class="pull-right">
                                {!! $posts->links() !!}
                            </span>
                        </div>
                    </div>
                </div>
                
                
                
            </div> <!--/ end row -->
        </div>
    </section>
    
@endsection
@section('after-scripts')
    <script type="text/javascript">
        $('.infinite-scroll').delay(1000).fadeIn(1000);
        $('.spinner').delay(500).fadeOut(200);

    </script>

@endsection