
<style type="text/css">
    #background {
        display:none;
        right: 0;
        bottom: 0;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        z-index:-100;
        object-fit: cover;
        overflow: hidden;
    }
    .push{
        display:none;
    }
    @media (min-width: 62em) {
       #background {
          display:block;
       }
    }
    .awe-parallax{
        background-image:url("{{url('/img/background.jpg')}}") ;
        background-position:center center;
        background-size:cover;
        height:100%;
    }
    #page-wrap {
        min-height: 100%;
        margin-bottom: 0px;
        background-image: url(https://lms3.cam-pt.com/img/background.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

</style>