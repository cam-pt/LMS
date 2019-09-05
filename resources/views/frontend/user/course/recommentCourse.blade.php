<!-- <div class="col-sm-6 col-md-4" style="margin-bottom: 25px;"> -->
<div class="mc-item mc-item-2">
        <div class="image-heading">
            <a href="{{ route('frontend.course.show', $course) }}">
                <img src="{{$course->image}}" style="max-width: 100%;" alt="">
            </a>
        </div>
        <div class="meta-categories"><a href="#">{{ $course->category->name }}</a></div>
        <div class="content-item">
            <div class="image-author">
                <img src="{{ $course->author->picture }}" alt="">
            </div>
            <h4>
                    {{$course->title}}
            </h4>
            <div class="name-author">
                {{ $course->author->name }}
            </div>
        </div>
        <div class="ft-item">
            <div class="col-md-12">
                <!-- @if(Auth::user() && $course->price > 0)
                <affiliate-button link="{{ URL::route('frontend.course.show', ['course' => $course, 'ref' => Auth::user()->username]) }}"></affiliate-button>
                @endif -->
                <a href="{{ route('frontend.course.show', $course) }}">
                    <button class="btn btn-success btn-block">Learn More</button>
                </a>
            </div>
        </div>
    </div>
<!-- </div> -->
<!-- END / ITEM -->




