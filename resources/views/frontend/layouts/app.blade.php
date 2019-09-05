<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{app_name()}} - @yield('title', app_name())</title>
        <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon" />
        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', config('settings.site_description'))">
        <meta name="author" content="@yield('meta_author', 'Dr Gabz')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        @langRTL
            <link rel="stylesheet" href="{{ URL::asset('css/frontend.rtl.css') }}" />
        @else
            <link rel="stylesheet" href="{{url('/css/vendor/font-awesome/css/font-awesome.min.css')}}" />
            <link rel="stylesheet" href="{{url('')}}/css/vendor/owl-carousel.css" />
            
            <link rel="stylesheet" href="{{url('/css/vendor/bootstrap.css')}}" />
            <link rel="stylesheet" href="{{url('/css/frontend.css')}}" />
            <link rel="stylesheet" href="{{url('/css/vendor/fileinput.css')}}" />
            <link rel="stylesheet" href="{{url('/css/vendor/theme.css')}}" />
            <link rel="stylesheet" href="{{url('/css/vendor/vodal/common.css')}}" />
            <link rel="stylesheet" href="{{url('/css/vendor/vodal/slide-right.css')}}" />
            <link rel="stylesheet" href="{{url('/css/main.css')}}" />
            <link rel="stylesheet" href="{{url('/css/vendor/hucss.css')}}" />
            

        @endif
        <link href="https://fonts.googleapis.com/css?family=Battambang" rel="stylesheet">
        <link rel="stylesheet" href="/css/themes/{{config('settings.site_theme')}}.css" />
        <link rel="stylesheet" href="{{url('/css/backend/plugin/sweetalert-themes/facebook.css')}}" />
        
        <!-- google adsense -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        @yield('after-styles')
        
        <style type="text/css">
        
            html, body {
              font-family: Battambang, Arial, Helvetica, sans-serif;
              height: 100%;
              margin: 0;
            }
            
            #page-wrap {
              min-height: 100%;
              margin-bottom: 0px;
            }
            .footer, .push {
              height: 115px;
            }
        
            @media (min-width: 768px){
                .navbar {
                    border-radius: 0px;
                }
            }
            
            #footer {
                position: relative;
                z-index: 100;
            }
            .ql-snow .ql-editor pre.ql-syntax {
                background-color: #e6e6e6 !important;
                color: #11538c !important;
            }
            
            pre {
                display: block;
                padding: 11px;
                margin: 0 0 11.5px;
                font-size: 12px;
                line-height: 1.446;
                word-break: break-all;
                word-wrap: break-word;
                color: #11538c;
                background-color: #f5f5f5;
                border: 1px solid rgba(204, 204, 204, 0);
                border-radius: 3px;
            }
            
                
            }
        </style>
        
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
            //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
            window.trans = @php
                // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
                $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
                $trans = [];
                foreach ($lang_files as $f) {
                    $filename = pathinfo($f)['filename'];
                    $trans[$filename] = trans($filename);
                }
                $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
                echo json_encode($trans);
            @endphp
            
            window.stg = @php
                $settinigs = [
                    'site_name' => config('app.name'),
                    'rzk' => config('services.razorpay.key'),
                ];
                
                echo json_encode($settinigs);
            @endphp
        </script>
        
    </head>
    <body id="page-top" class="home">
            @include('includes.partials.ga')
            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5c264b1482491369ba9fc8c5/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
            <!--End of Tawk.to Script-->
            @include('cookieConsent::index')
            <div id="page-wrap">
                <div class="alert-messages">
                  @include('includes.partials.messages')
                </div>
                @include('includes.partials.logged-in-as')
                @include('frontend.includes._navigation')
                
                @yield('content')
                <!-- <div class="push"></div> -->
            </div> 
            
            @include('frontend.includes._footer')
            

        <!-- Scripts -->
        @yield('before-scripts')
        <script>
            //(adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <script src="{{url('')}}/js/frontend.js"></script>
        <script src="{{url('/js/vendor/perfect-scrollbar.min.js')}}"></script>
        <script src="{{url('/js/vendor/jquery.owl.carousel.js')}}"></script>
        <script src="{{url('/js/vendor/jquery.appear.min.js')}}"></script>
        <script src="{{url('/js/vendor/jquery.easing.min.js')}}"></script>
        <script src="{{url('/js/main.js')}}"></script>
        <script src="{{url('/js/vendor/push-navbar.js')}}"></script>
        <script src="{{url('/js/vendor/Typeahead.js')}}"></script>
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
         
        
        @include('frontend.includes._js')
        @yield('after-scripts')
        @include('includes.partials.ga')
        
    </body>
</html>