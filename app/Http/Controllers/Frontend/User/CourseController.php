<?php

namespace App\Http\Controllers\Frontend\User;
use Auth;
use Helper;
use Carbon\Carbon;
use App\Models\Course;
use App\Models\Completion;
use App\Models\Lesson;
use App\Models\Section;
use App\Models\Access\User\User;
use App\Models\Category;
use App\Models\Technology;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Access\Role\Role;
use App\Http\Controllers\Controller;

/**
 * Class AccountController.
 */
class CourseController extends Controller
{
    // user's first course to become an author
    public function becomAnAuthor(Request $request)
    {
        $categories = Category::get(['id', 'name']);
        $tags = Course::allTags();
        
        return view('frontend.author.course.new-author-create', compact('categories', 'tags'));
    }
    
    public function store(Request $request)
    {
 
        $this->validate($request, [
            'title' => 'required|max:50',
            'subtitle' => 'required|max:120',
            'category' => 'required',
            'slug' => 'required|unique:courses,slug'
        ]);
        
        $user = $request->user();
        $author_role = Role::where('name', 'Author')->first();
        
        $course = new Course();
        $course->title = $request->title;
        $course->subtitle = $request->subtitle;
        $course->slug = $request->slug;
        $course->price = 0;
        $course->description = $request->description;
        $course->category_id = $request->category;
        $course->user_id = $user->id;
        $course->save();
        
        $course->tag(explode(',', $request->tags));
        
        $section = $course->sections()->create([
            'title' => 'Start here',
            'objective' => 'Short course objective',
            'sortOrder' => 1
        ]);
        
        $section->lessons()->create([
            'title' => 'Introduction',
            'uid' => random_int(100, 20000) + random_int(99, 2000),
            'sortOrder' => 1
        ]);
        
        if( !$user->hasRole('Author') ){
            $user->roles()->sync([$author_role->id]);
        }
        
        return redirect()->route('frontend.author.course.edit', $course->slug);
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myCourses(Request $request)
    {
       
        $success=false;
        //dd(Carbon::now()->startOfMonth());
        $courses = $request->user()->enrollments;
        
        $re_com=Course::all()->where("approved",1);
        $new=Course::all()->where("approved",0);
	    foreach($new as $course)
	    {
	        $course->image = Helper::coverImage($course);
	    }
	    foreach($courses as $course)
	    {
            $course->image = Helper::coverImage($course);
            
        }
        
        foreach ($re_com as $key) {
            $key->image=Helper::coverImage($key);
        }
        foreach ($new as $key) {
            $key->image=Helper::coverImage($key);
        }
        
        $sections = Section::where('course_id', $courses[0]->id)
            ->orderBy('sortOrder', 'ASC')
            ->pluck('id');
           
        if(Auth::check()){
        $first_lesson = Lesson::whereIn('section_id', $sections)->orderBy('sortOrder', 'asc')->first();
        $lessons = Lesson::whereIn('section_id', $sections)->pluck('id');
        
        $completion = Completion::latest()->whereIn('lesson_id', $lessons)->where('user_id', Auth::id())->first();
        
        $last_watched = $completion ? Lesson::find($completion->lesson_id) : null;
        }
        // dd($first_lesson);
        return view('frontend.user.course.my-courses', compact('courses','re_com','new','success','last_watched','first_lesson'));
    }


    public function congrate(Request $request){
        $courses = $request->user()->enrollments;
        $re_com=Course::all()->where("approved",1);
        $new=Course::all()->where("approved",0);
	    foreach($courses as $course)
	    {
            $course->image = Helper::coverImage($course);
            
	    }
        foreach ($re_com as $key) {
            $key->image=Helper::coverImage($key);
        }
        foreach ($new as $key) {
            $key->image=Helper::coverImage($key);
        }
        $success=true;
        $sections = Section::where('course_id', $courses[0]->id)
            ->orderBy('sortOrder', 'ASC')
            ->pluck('id');
           
        if(Auth::check()){
        $first_lesson = Lesson::whereIn('section_id', $sections)->orderBy('sortOrder', 'asc')->first();
        $lessons = Lesson::whereIn('section_id', $sections)->pluck('id');
        
        $completion = Completion::latest()->whereIn('lesson_id', $lessons)->where('user_id', Auth::id())->first();
        
        $last_watched = $completion ? Lesson::find($completion->lesson_id) : null;
        }
        
        return view('frontend.user.course.my-courses',compact('courses','re_com','new','success','last_watched','first_lesson'));
    }

    public function getCourses(Request $request)
    {
        $filters = [];
        $search_term = $request->search;
        $search_category = $request->category;
        $search_level = $request->level;
        //$search_language = $request->language;
        $search_price = $request->price;
        $sort_order = $request->sort_order;
        
        if(!is_null($request->tag)){
            $query = Course::withAnyTags($request->tag)->with('sections', 'author', 'averageReviewRatings')->with('sections.lessons')->with('sections.lessons.content')->where('approved', true)->where('published', true);
        } else {
            $query = Course::with('sections', 'author', 'averageReviewRatings')->with('sections.lessons')->with('sections.lessons.content')->where('approved', true)->where('published', true);
        }
        if(!is_null($search_term))
        {
            $query->where(function ($q) use ($search_term) {
               $q->where('title', 'like', "%$search_term%")
                    ->orWhere('description', 'like', "%$search_term%")
                    ->orWhereHas('author', function($q) use ($search_term){
                        $q->where('first_name', 'like', "%$search_term%")
                        ->orWhere('last_name', 'like', "%$search_term%")
                        ->orWhere('username', 'like', "%$search_term%")
                        ->orWhere(DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%".$search_term."%");
                    });
            });
            
        }
        
        // filter by level
        if(!is_null($search_level))
        {
            $query->where(function ($q) use ($search_level) {
               $q->where('level', '=', "$search_level") ;
            });
            $filters = array_add($filters, 'level', $search_level);

        } 
        
        // filter by category
        if(!is_null($search_category))
        {
            $query->whereHas('category', function ($q) use ($search_category) {
               $q->where('slug', '=', $search_category) ;
            });
            $filters = array_add($filters, 'category', $search_category);
        } 
        
        // filter by price
        if(!is_null($search_price))
        {
            if($search_price=='free'){
                $query->where(function ($q) use ($search_price) {
                   $q->where('price', '=', 0) ;
                });
            } else {
                $query->where(function ($q) use ($search_price) {
                   $q->where('price', '>', 0) ;
                });
            }
            
            $filters = array_add($filters, 'price', $search_price);
        }

        if(!is_null($sort_order))
        {
            if( $sort_order == 'price_asc' ) { 
                $query = $query->orderBy('price', 'asc'); 
            } elseif( $sort_order == 'price_desc' ) { 
                $query = $query->orderBy('price', 'desc'); 
            } elseif( $sort_order == 'dte_recent_last' ) { 
                $query = $query->orderBy('created_at', 'asc'); 
            } elseif( $sort_order == 'dte_recent_first' ) { 
                $query = $query->orderBy('created_at', 'desc'); 
            } elseif ($sort_order == 'highest_rated') {
                $query->leftJoin('course_review_ratings', 'courses.id', '=', 'course_review_ratings.course_id')->hasContent()->orderBy('course_review_ratings.average_rating', 'desc');
            }

            $filters = array_add($filters, 'sort_order', $sort_order);
        }
        
        
        $courses = $query->paginate(9);

        foreach($courses as $course)
        {
            $course->image = Helper::coverImage($course);
        }
        
        $used_tags = DB::table('taggable_tags')
                ->join('taggable_taggables', 'taggable_tags.tag_id', '=', 'taggable_taggables.tag_id')
                ->join('courses', 'courses.id', '=', 'taggable_taggables.taggable_id')
                ->groupBy('taggable_tags.normalized')
                ->groupBy('taggable_tags.name')
                ->orderBy('tag_count', 'DESC')
                ->limit(20)
                ->get(['taggable_tags.name', 'taggable_tags.normalized', DB::raw('count(taggable_tags.normalized) as tag_count')] );
        
        $all_categories = Category::with('courses')->orderBy('name')->get();
        return view('frontend._course.index', compact('courses', 'search_term', 'all_categories', 'filters', 'used_tags'));
    }
    
    public function myWishlist(Request $request)
    {
        $courses = $request->user()->bookmarkedCourses()->get();

	    foreach($courses as $course)
	    {
	        $course->image = Helper::coverImage($course);
	    }
        return view('frontend.user.course.my-wishlist', compact('courses'));
    }
    
    public function myPurchases(Request $request)
    {
        $purchases = Payment::where('user_id', $request->user()->id)->with('course', 'coupon')->paginate(10);
        
	    
	    foreach($purchases as $purchase)
	    {
	        $purchase->course->coverImage = Helper::coverImage($purchase->course);
	    }
	    //return response()->json($purchases, 200);
        return view('frontend.user.course.my-purchases', compact('purchases'));
    }
    
    
    public function bookmark(Request $request, $course_id)
    {
        $course = Course::find($course_id);
        if ($request->user()->hasBookmarked($course)) {
            return;
        }
        $request->user()->bookmarks()->create([
            'course_id' => $course->id
        ]);

        return response()->json(null, 200);
    }
    
    
    public function unBookmark(Request $request, $course_id)
    {
        $course = Course::find($course_id);
        if ($request->user()->hasBookmarked($course)){
            $request->user()->bookmarks()->where('course_id', $course->id)->delete();
        }
        return response()->json(null, 200);
    }
    
    public function getBookmarkStatus(Request $request, $course)
    {
        $course = Course::find($course);
        if($request->user()){
            $user_bookmarked = $request->user()->hasBookmarked($course); 
        } else {
            $user_bookmarked = false;
        }
        
        return response()->json($user_bookmarked, 200);
    }
    
    
    public function markAsComplete(Request $request, Lesson $lesson)
    {
        if(! $request->user()->hasCompleted($lesson)){
            $completion = $lesson->completions()->create([
                'user_id' => $request->user()->id        
            ]);
        } 
        
        return response()->json(null, 200);
        
    }
    
    public function markAsInComplete(Request $request, Lesson $lesson)
    {
        if($request->user()->hasCompleted($lesson)){
            $request->user()->completions->where('lesson_id', $lesson->id)->first()->delete();
        } 
        
        return response()->json(null, 200);
        
    }
    
    public function getMarketing(Request $request, $course){
        $coupon_code = $request->COUPON;

		$course = Course::where('slug', $course)->with(['sections' => function($q){
			$q->orderBy('sortOrder', 'ASC');
			$q->with(['lessons' => function($q){
				$q->orderBy('sortOrder', 'ASC');
				$q->with('content');
			}]);
		}])->with('author')->first();

	
    	$sections = Section::where('course_id', $course->id)
            ->orderBy('sortOrder', 'ASC')
            ->pluck('id');

        $preview_lessons = Lesson::whereIn('section_id', $sections)->where('preview', true)
        	->whereHas('content', function($q){
        		$q->where('content_type', 'video');	
        	})->get();

        foreach($preview_lessons as $l){
            $l->content_type = 'video';
            $l->video_provider = $l->content->video_provider ? $l->content->video_provider:'mp4';
            $l->video_link = $l->content->video_path;
        }
        
    	if(Auth::check() && $request->user()->hasEnrolled($course)){
    		$first_lesson = Lesson::whereIn('section_id', $sections)->orderBy('sortOrder', 'asc')->first();
    		$lessons = Lesson::whereIn('section_id', $sections)->pluck('id');
    		$completion = Completion::latest()->whereIn('lesson_id', $lessons)->where('user_id', Auth::id())->first();
    		$last_watched = $completion ? Lesson::find($completion->lesson_id) : null;
			return view('frontend._course.enrolled.show', compact('course', 'coupon_code', 'last_watched', 'first_lesson')); 
			
    	}else {
    	    return view('frontend._course.show', compact('course', 'coupon_code', 'preview_lessons'));
    	}

    }
}

