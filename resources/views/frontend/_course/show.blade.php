@extends('frontend.layouts.app')

@section('title')

{{ $course->title }}

@endsection



@section('meta_description')

{{ $course->subtitle }}

@endsection

@section('after-styles')

<link rel="stylesheet" href="https://unpkg.com/vue-form-wizard/dist/vue-form-wizard.min.css">

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

@stop

@section('content')




<section class="ftf-hero">
    <div class="container container-full paddingb0">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <h2 class="h1 text-center hidden-xs weight600" style="margin-top: 0; margin-bottom:10px;">{{ $course->title }}</h2>
                <h2 class="h1 text-center visible-xs weight600" style="margin-top: 0; margin-bottom:10px;">Will Your
                    Business Ever Make You Wealthy? Or Will You Settle For “Just Getting By”?</h2>
                <div class="line10">&nbsp;</div>
                <p class="font20 line30 text-center">{{ $course->subtitle }}<br class="hidden-xs hidden-sm" />Teacher By:</p>
                <div class="line15">&nbsp;</div>
                <div class="text-center"> <a href="https://lms3.dev.cam-pt.com/courses" class="btn btn-hg btn-gold font28  text-uppercase">Find Your Course</a></div>
                <div class="line20">&nbsp;</div>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
            </div>
        </div>

    </div>
</section>
<section class="ftf-social hidden-xs" style="background: #222222;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="font24 text-center text-white weight400 nomargin-t">AS SEEN ON...</h2>
                <div class="line10">&nbsp;</div>
                <img src="/img/logos-2.png">
            </div>
        </div>
    </div>
</section>
<section class="ftf-learn">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <div class="line20">&nbsp;</div>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
                <div id="more"><img src="/img/marketing1.png" class="center-block img-responsive" alt="The Wealthy Marketer" /></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-7">
                <h2 class="weight700 hidden-xs">Have you ever wondered why your business isn’t making more money? </h2>
                <h2 class="weight700 visible-xs">Have you ever wondered why your business isn’t making more money? </h2>
                <div class="line15">&nbsp;</div>
                <div class="line15 hidden-xs hidden-sm">&nbsp;</div>
                <p>Why working longer or harder just doesn’t seem to make a dent in your bottom line?</p>
                <p>Why chasing after new customers takes so much time and energy?</p>
                <p>And does it ever seem like your successful competitors know some “secret” to making sales that you
                    don’t?</p>
                <p>If this sounds familiar, we have good news and bad news for you.</p>
                <p>The bad news is this: if it seems like there’s something successful people know that you don’t… it’s
                    true! THEY DO.</p>
                <p>But the good news is that there’s nothing holding you back from using the same methods that have
                    made the world’s wealthiest business owners, trainers, coaches, healers, and other professionals so
                    successful.</p>
                <p>All you need is the right system. Once you know the system that wealthy people use to create their
                    success, you can practically print money. And in a moment, we’ll tell you the system that thousands
                    of people from around the world have used to learn these methods. It’s the same step-by-step system
                    T. Harv Eker has used to make over $500 million from his business ventures and soon you’ll be able
                    to use it too. </p>
                <p>But first, there’s something you need to understand…</p>
                <div class="line30">&nbsp;</div>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
            </div>
        </div>
    </div>
</section>
<section class="ftf-meet">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-lg-7 col-sm-offset-1 col-lg-offset-5">
                <h2 class="font24 line32  weight400 hidden-xs text-white">It <strong class=" weight700">Doesn’t Matter</strong>
                    How Good Your Product Or Service Is – You <strong class=" weight700">Won’t Get Rich</strong> If No
                    One Knows You Exist! </h2>
                <h2 class="font20 line26  weight700 visible-xs text-white">It <strong class=" weight700">Doesn’t Matter</strong>
                    How Good Your Product Or Service Is – You <strong class=" weight700">Won’t Get Rich</strong> If No
                    One Knows You Exist! </h2>
                <div class="line15">&nbsp;</div>
                <div class="line15 hidden-xs hidden-sm">&nbsp;</div>
                <p class="font16 line24 text-white">In our society, marketing has a bad name.</p>
                <p class="font16 line24 text-white">We complain about TV commercials trying to manipulate us and play
                    on our emotions. We roll our eyes at cheesy billboards and toss junk mail in the trash. A call from
                    a telemarketer can be frustrating enough to ruin our day.</p>
                <p class="font16 line24 text-white">And yet, for people who run a business, marketing is often seen as
                    a “necessary evil”.</p>
                <p class="font16 line24 text-white">After all, no one can buy your products if they don’t know they
                    exist.</p>
                <p class="font16 line24 text-white">The truth is, marketing doesn’t have to be a dreaded chore. When
                    you find the right approach, suddenly, selling your products and services becomes easy.</p>
                <p class="font16 line24 text-white">But instead of chasing potential customers or clients down,
                    resorting to cold calls, or throwing away money on ads that never seem to show solid results… </p>
            </div>
        </div>
    </div>
</section>
<section class="ftf-learn-2">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="line30">&nbsp;</div>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
                <h2 class="h1 font35 line40  text-center hidden-xs weight600" style="margin-top: 0; margin-bottom:10px;">You
                    Can <strong class=" weight700">Learn To Market Yourself Without “Selling”</strong> <br class="visible-lg" />
                    People Products They Don’t Want And Don’t Need</h2>
                <h2 class="h1 font24 line30  text-center visible-xs weight600" style="margin-top: 0; margin-bottom:10px;">You
                    Can <strong class=" weight700">Learn To Market Yourself Without “Selling”</strong> People Products
                    They Don’t Want And Don’t Need</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <div class="line15">&nbsp;</div>
                <div class="line15 hidden-xs hidden-sm">&nbsp;</div>
                <p>Today you’re going to learn about a step-by-step system you can use to magnetically attract your
                    dream customers or clients.</p>
                <p>Instead of spending your days chasing down the next paycheck, you can spend more of your time doing
                    what you love, and less time wondering when your next sale will come in.</p>
                <p>But it won’t happen if you spend 100 hours a week creating products, ordering inventory, or
                    perfecting your services in the hopes of making it big instead of marketing. </p>
                <p>Unfortunately most people spend less than 20% of their efforts on marketing and that’s one of the
                    most common reasons why most businesses fail. </p>
                <p>Marketing is responsible for the income you bring into your company and it keeps your company
                    afloat. Without marketing you have no customers, without customers you have no money, and without
                    money you have no business. </p>
                <p>So what would happen if you turned the tables and really invested in developing your marketing
                    skills… and went from spending whatever you currently spend on marketing right now to spending 80%
                    of your time on it? How would your life change?</p>
                <p>Some of you reading this might think that sounds agonizing. If you’re only spending 20% or less of
                    your time marketing, there’s probably a reason. Because if you’re like so many business owners,
                    professionals, coaches, trainers, and healers - you hate the idea of “selling” to people. It makes
                    sense. We don’t like to bother other people. We aren’t sure if we’re wasting their time. And most
                    of all, we don’t want to hear a rejection.</p>
                <p>And that’s what makes Harv’s system so powerful. It teaches you how to market yourself and your
                    business – without ever having to “sell” yourself again!</p>
                <p>How? It’s actually very simple. When you target your marketing to the people who really want and
                    need your product or service, making money becomes easy. You no longer have to persuade, nag, or
                    beg your prospects to buy.</p>
                <p>We’ll explain how it all works in a moment. But first, a little about your teacher (T. Harv Eker)
                    and some of the mistakes he’s made on his own journey to wealth.</p>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
            </div>
        </div>
    </div>
</section>
<section class="ftf-about">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-7 col-lg-7">
                <h2 class="font36 line46  hidden-xs text-white" style="margin-top: 0; margin-bottom:10px;">Harv Has
                    Learned How To Market The <br class="visible-lg" />Hard Way – <strong class=" weight700">So You
                        Don’t Have To</strong>!</h2>
                <h2 class="font24 line30  visible-xs text-white" style="margin-top: 0; margin-bottom:10px;">Harv Has
                    Learned How To Market The <br class="visible-lg" />Hard Way – <strong class=" weight700">So You
                        Don’t Have To</strong>!</h2>
                <div class="line10">&nbsp;</div>
                <div class="line15 hidden-xs">&nbsp;</div>
                <p class="text-white font16 line24">This comprehensive training program is taught by T. Harv Eker. You
                    may know him as the bestselling author of the book “Secrets of the Millionaire Mind”, as well as
                    the creator of numerous life-changing trainings on wealth and mindset. </p>
                <p class="text-white font16 line24">Over the years, he’s earned more than $500 million through his
                    businesses – nearly half a billion simply by using his own real-world experiences to help thousands
                    and thousands of students create high levels of success in their own lives.</p>
                <p class="text-white font16 line24">But Harv wasn’t always a millionaire. In fact, for about 10 years
                    he struggled with a series of failed business ventures – wondering why it seemed impossible to get
                    any of his ideas off the ground. At one point he was so broke he had to move back in with his
                    parents – embarrassing at any age, but especially at age 30!</p>
                <p class="text-white font16 line24">Then, he received some advice that would change his life forever. A
                    wealthy family friend told him to study the strategies and mindset of people who were already rich
                    and to find out what they had in common that made them so successful.</p>
                <p class="text-white font16 line24">And the rest is history.</p>
                <p class="text-white font16 line24">Now, after years of trial and error, Harv has created a
                    step-by-step, copy and paste system that literally anyone can use to create wealth. These are
                    powerful marketing strategies that can help any business, in any industry, find ideal customers and
                    draw them to you like magic.</p>
                <p><img src="/img/signature-guarantee.png" alt="T Harv Eker" class="img-responsive" width="210" /></p>
                <p class="nomargin-b">As Seen On:</p>
                <div class="line15">&nbsp;</div>
                <p class="nomargin-b"><img src="/img/logos-white.png" class="img-responsive" /></p>
            </div>
            <div class="row visible-xs visible-sm">
                <div class="col-xs-12 padding0">
                    <div class="line20">&nbsp;</div>
                    <div><img src="/img/marketing2.png" class="img-responsive center-block" /></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftf-learn-2">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs hidden-sm">&nbsp;</div>
                <h2 class="h1 text-center hidden-xs weight600" style="margin-top: 0; margin-bottom:10px;">Here's What
                    Some Of Our Students Are Saying About <em>The Wealthy Marketer</em></h2>
                <h2 class="h1 text-center visible-xs weight600" style="margin-top: 0; margin-bottom:10px;">Here's What
                    Some Of Our Students Are Saying About <em>The Wealthy Marketer</em></h2>
                <div class="line15">&nbsp;</div>
                <div class="line15 hidden-xs hidden-sm">&nbsp;</div>
                <h3>&ldquo;It's worth 10 times its value!&rdquo;</h3>
                <p class="nomargin-b">&ldquo;I just cannot see how a company can work without this knowledge. It's
                    worth 10 times its value!&rdquo;</p>
                <p><strong>&ndash; Andreas Salas</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3>&ldquo;An Action Plan To Boost My Income On Demand&rdquo;</h3>
                <p class="nomargin-b">&ldquo;<em>The Wealthy Marketer</em> helped me develop a comprehensive marketing
                    template for my business and all I have to do now is pull the trigger. So based on the strategies
                    and tactics I now have an action plan to at boost my income on demand. Thanks Harv for another slam
                    dunk.&rdquo;</p>
                <p><strong>&ndash; Roberto Gonzalez</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3 class=" font24 line28 weight800">&ldquo;I have a complete marketing program&rdquo;</h3>
                <p class="nomargin-b">&ldquo;Before the program I was very frustrated with my marketing efforts. Now,
                    after completing <em>The Wealthy Marketer</em>, I have a complete marketing program and I am
                    looking forward to implementing every single bit of it.&rdquo;</p>
                <p><strong>&ndash; Laura Sherlock</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3 class=" font24 line28 weight800">&ldquo;A millionaire marketing mind and marketing plan for my
                    company.&rdquo;</h3>
                <p class="nomargin-b">&ldquo;I've been in business for twenty years and I never wanted to know anything
                    about marketing; I had no marketing plan. Now, after this course, I feel like I now have a
                    marketing mind and a marketing plan for my company. This was one awesome program. Thank you!&rdquo;</p>
                <p><strong>&ndash; Gary Gordon</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3 class=" font24 line28 weight800">&ldquo;A seven course dinner that is juicy, full of meat and
                    nutritiously well-balanced.&rdquo;</h3>
                <p class="nomargin-b">&ldquo;This program is just like being very, very, very hungry and being offered
                    a seven course dinner that is juicy, full of meat and nutritiously well-balanced. Now I am feeling
                    very full but it will take me a while to digest all this food.&rdquo;</p>
                <p><strong>&ndash; Sylvie Dubois</strong></p>
            </div>
        </div>
        <div class="line20">&nbsp;</div>
        <div class="line20 hidden-xs">&nbsp;</div>
    </div>
</section>
<section class="ftf-gradient">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <h2 class=" font35 line44 Raleway text-center hidden-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">Introducing
                    <em>The Wealthy Marketer</em>: <br class="visible-lg" />“Marketing Secrets That Will Make You Rich”</h2>
                <h2 class="font24 line30 Raleway text-center visible-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">Introducing
                    <em>The Wealthy Marketer</em>: “Marketing Secrets That Will Make You Rich”</h2>
                <div class="line35">&nbsp;</div>
                <div class=""><img src="/img/marketing4.png" class="center-block img-responsive" alt="The Wealthy Marketer" /></div>
                <p class="font16 line24 text-center">This comprehensive marketing system will have people literally
                    lining up to buy from you!</p>
                <p class="font16 line24 text-center">Whether you’ve been in business for years and are looking to grow,
                    or you’re just starting out and want to get off to a strong start, this program is packed with
                    information that will accelerate you lightyears beyond your competition.</p>
            </div>
        </div>
    </div>
</section>
<section class="ftf-learn-2">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
                <h2 class="font34 line40  text-center hidden-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">When
                    you enroll in <em>The Wealthy Marketer</em>,<br class="visible-lg" /> you'll learn how to:</h2>
                <h2 class="font24 line30  text-center visible-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">When
                    you enroll in <em>The Wealthy Marketer</em>, you'll learn how to:</h2>
                <div class="line15">&nbsp;</div>
                <div class="line10 hidden-xs">&nbsp;</div>
                <ul class="manus-list">
                    <li>Define your <strong>message</strong> to attract the best buyers</li>
                    <li>Determine your <strong>target markets</strong> and <strong>discover lucrative specialty markets</strong></li>
                    <li>Write magnetic copy for your <strong>ads</strong>, your <strong>sales letters</strong>, your
                        <strong>emails</strong>, your <strong>website copy</strong>, and even your <strong>brochures</strong>
                        if you use them</li>
                    <li>Add <strong>upsells</strong>, <strong>downsells</strong>, and <strong>cross-sells</strong> to
                        instantly <strong>increase your profits</strong> and bottom line</li>
                    <li><strong>Bundle your services or programs</strong> and how to structure your backend offers so
                        you are maximizing your revenue</li>
                    <li>Create an <strong>irresistible tagline</strong> and <strong>unique selling proposition or hook
                        </strong>to give your market clarity on what you do and why you're the one to help them</li>
                    <li>Articulate your <strong>heart story</strong> so you can <strong>emotionally connect</strong>
                        with your market and make them fall in love with you</li>
                    <li>Create <strong>irresistible offers</strong> to make sales <strong>effortless</strong> while
                        building <strong>extreme goodwill</strong> with your customers</li>
                    <li>Develop the ultimate <strong>sales funnel</strong> to create real wealth and financial success</li>
                    <li>Spend the same amount of money yet <strong>massively increase profits</strong></li>
                    <li>Set up <strong>joint ventures and endorsed mailers</strong> to get 10X the exposure and 10X the
                        sales</li>
                    <li>Use a <strong>continuity program to build</strong> a baseline with <strong>recurring income</strong>
                        for your business</li>
                    <li>Setup the simplest but the most effective <strong>referral program</strong></li>
                    <li><strong>Create a frequent buyer incentive</strong> program that keeps your customers coming
                        back again and again and again</li>
                    <li>And much, MUCH more..</li>
                </ul>
                <p class="font16 line24">This foolproof system can be applied to any business, and used over and over
                    again. </p>
                <p class="font16 line24">These are time-tested principles Harv has used to create success in his own
                    life, and has seen students use again and again across a range of industries.</p>
            </div>
        </div>
    </div>
</section>
<section class="ftf-celebrity">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <h2 class="font30 line36 text-light-grey text-center  nomargin-t">Here's What People Say About Harv</h2>
                <div class="line30">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <p><img src="/img/celebrity-Canfield.png" class="img-responsive center-block" /></p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h3 class="font24 line28 openSans nomargin-t">&ldquo;I Highly Recommend Harv's Work&rdquo;</h3>
                        <p class="font18 line28"><em>&ldquo;I have witnessed and admired T. Harv Eker's work for years.
                                I highly recommend his work for anyone seeking to increase their financial, mental and
                                emotional wealth.&rdquo;</em></p>
                        <p class="font14"><strong class="font18 line28">- Jack Canfield,</strong><br />
                            <strong>#1 New York Times bestselling co-author of Chicken Soup For The Soul series.</strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin blue" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <p><img src="/img/celebrity-Robbins.png" class="img-responsive center-block" /></p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h3 class="font24 line28 openSans nomargin-t">&ldquo;Study Harv's Work As If Your Life Depended
                            On It!&rdquo;</h3>
                        <p class="font18 line28"><em>&ldquo;Study Harv's work as if your life depended on it…
                                Financially it may!&rdquo;</em></p>
                        <p class="font14"><strong class="font18 line28">- Tony Robbins,</strong><br />
                            <strong>Bestselling author and Peak Performance Strategist.</strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin blue" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <p><img src="/img/celebrity-Shimoff.png" class="img-responsive center-block" /></p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h3 class="font24 line28 openSans nomargin-t">&ldquo;Harv Is A Master!&rdquo;</h3>
                        <p class="font18 line28"><em>&ldquo;Harv is a master at making the road to riches simple.
                                Finally, his powerful principles are available.&rdquo;</em></p>
                        <p class="font14"><strong class="font18 line28">- Marci Shimoff,</strong><br />
                            <strong>#1 New York Times bestselling author.</strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin blue" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <p><img src="/img/celebrity-Allen.png" class="img-responsive center-block" /></p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h3 class="font24 line28 openSans nomargin-t">&ldquo;Watch Your Relationships Transform&rdquo;</h3>
                        <p class="font18 line28"><em>&ldquo;Harv demystifies why some people are destined to be rich
                                while others are destined for a life of struggle. If you want to learn about the root
                                cause of success, learn from Harv.&rdquo;</em></p>
                        <p class="font14"><strong class="font18 line28">- Robert G. Allen,</strong><br />
                            <strong>#1 New York Times bestselling author.</strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin blue" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <p><img src="/img/celebrity-Tracy.png" class="img-responsive center-block" /></p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h3 class="font24 line28 openSans nomargin-t">&ldquo;Take One Of His Programs!&rdquo;</h3>
                        <p class="font18 line28"><em>&ldquo;Harv has a heart of gold… If you can take one of his
                                programs I highly recommend it.&rdquo;</em></p>
                        <p class="font14"><strong class="font18 line28">- Brian Tracy,</strong><br />
                            <strong>#1 New York Times bestselling author.</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftf-learn-2">
    <div class="container container-full">
        <div class="row ">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
                <h2 class="font34 line40  text-center hidden-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">What
                    You’ll Get When You Order <br class="visible-lg" /><em>The Wealthy Marketer</em> Today:</h2>
                <h2 class="font24 line30  text-center visible-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">What
                    You’ll Get When You Order <em>The Wealthy Marketer</em> Today:</h2>
                <div class="line15">&nbsp;</div>
                <div class="line10 hidden-xs">&nbsp;</div>
                <p class="font24 line30 text-center">Here’s a quick taste of the highlights from each module in this
                    program.</p>
                <div class="line15">&nbsp;</div>
                <div class="line10 hidden-xs">&nbsp;</div>
            </div>
        </div>
        <div class="row paddingt0 paddingb0">
            <div class="col-xs-12 col-sm-12">
                <div class="moduleBox">
                    <img src="/img/module-1.jpg" class="center-block img-responsive visible-xs" />
                    <div class="moduleText">
                        <h3>Module 1: Introduction and The Wealthy Marketing Mind</h3>
                        <ul class="manus-list manus-list-white">
                            <li>Why simply learning marketing skills won’t necessarily make you rich - unless you spend
                                the time and energy to develop a “marketing mind”.</li>
                            <li>How subconscious blocks around marketing could be causing you to sabotage your own
                                success without you even realizing it.</li>
                            <li>The “4 keys” that will help you let go of limiting thoughts and beliefs around
                                marketing that might be holding you back from success in life.</li>
                        </ul>
                    </div>
                    <div class="graphicBox hidden-xs" style="background-image: url(/img/module-1.jpg);"></div>
                </div>
                <div class="moduleBox">
                    <img src="/img/module-2.jpg" class="center-block img-responsive visible-xs" />
                    <div class="moduleText">
                        <h3>Module 2: Marketing Strategy and Target Market</h3>
                        <ul class="manus-list manus-list-white">
                            <li>What a marketing system is and why it’s vital to any successful business and how to
                                create your own.</li>
                            <li>How to identify the perfect market – so you don’t have to spend time, energy and money
                                trying to convince uninterested people to buy.</li>
                            <li>How to create a “secondary” market to maximize your income without any added effort.</li>
                        </ul>
                    </div>
                    <div class="graphicBox hidden-xs" style="background-image: url(/img/module-2.jpg);"></div>
                </div>
                <div class="moduleBox">
                    <img src="/img/module-3.jpg" class="center-block img-responsive visible-xs" />
                    <div class="moduleText">
                        <h3>Module 3: The Message</h3>
                        <ul class="manus-list manus-list-white">
                            <li>How to develop your business’s message and help your products or services stand out
                                from the crowd.</li>
                            <li>What a unique selling proposition is, why you need one and how it will help you uncover
                                hidden advantages against your competitors.</li>
                            <li>Why positioning yourself as an expert is one of the best USP’s (Unique Selling
                                Propositions) you can use in your marketing and how to automatically become one.</li>
                        </ul>
                    </div>
                    <div class="graphicBox hidden-xs" style="background-image: url(/img/module-3.jpg);"></div>
                </div>
                <div class="moduleBox">
                    <img src="/img/module-4.jpg" class="center-block img-responsive visible-xs" />
                    <div class="moduleText">
                        <h3>Module 4: The Medium</h3>
                        <ul class="manus-list manus-list-white">
                            <li>60+ effective ways you can market and distribute your product – some you’ve probably
                                never considered before.</li>
                            <li>What joint ventures are, and why they’re one of the best ways to create rapid growth
                                along with helping you maintain steady, ongoing momentum in your business.</li>
                            <li>Step-by-step how to create a referral system, so you can turn your existing customers
                                into raving fans and have them connect with an unlimited amount of new potential
                                prospects. (Just imagine if every single one of your customers referred you just 1 new
                                customer - your business would AUTOMATICALLY DOUBLE!)</li>
                        </ul>
                    </div>
                    <div class="graphicBox hidden-xs" style="background-image: url(/img/module-4.jpg);"></div>
                </div>
                <div class="moduleBox">
                    <img src="/img/module-5.jpg" class="center-block img-responsive visible-xs" />
                    <div class="moduleText">
                        <h3>Module 5: Maximizing Marketing</h3>
                        <ul class="manus-list manus-list-white">
                            <li>How developing a “backend” to your business is the quickest way to get rich in business
                                and how it cultivates loyal customers or clients who last for life.</li>
                            <li>What your customer’s lifetime value is and how to increase it by 10X by using T. Harv
                                Eker’s special “marketing funnel”.</li>
                            <li>How to create high-end packages and how to create attractive bundles of your products
                                and services using Harv’s irresistible offer template.</li>
                            <li>BONUS TRAINING: How to double your profits in 5 minutes or less.</li>
                        </ul>
                    </div>
                    <div class="graphicBox hidden-xs" style="background-image: url(/img/module-5.jpg);"></div>
                </div>
                <div class="moduleBox">
                    <img src="/img/module-6.jpg" class="center-block img-responsive visible-xs" />
                    <div class="moduleText">
                        <h3>Module 6: Million Dollar Copywriting Secrets</h3>
                        <ul class="manus-list manus-list-white">
                            <li>How great copywriting can double, triple, or even quadruple your profits - and make the
                                difference between a million dollar launch or a product that bombs.</li>
                            <li>How to craft powerful headlines for your promotional material that hooks prospects from
                                the second they lay eyes on it. </li>
                            <li>The two most effective types of stories and how you can use them to create persuasive
                                copy that compels your potential customers to buy whenever you want.</li>
                            <li>PLUS, Harv’s very own Million Dollar Copywriting Templates, which you can easily use to
                                create high-performing sales pages – even if you’ve never written copy before.</li>
                        </ul>
                    </div>
                    <div class="graphicBox hidden-xs" style="background-image: url(/img/module-6.jpg);"></div>
                </div>
            </div>
            <div class="line20">&nbsp;</div>
            <div class="line30 hidden-xs">&nbsp;</div>
        </div>
    </div>
</section>
<section class="ftf-gradient">
    <div class="container container-full">
        <div class="row paddingb0">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="line20 hidden-xs">&nbsp;</div>
                <h2 class="font34 line40  text-center hidden-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">Order
                    Now To Lock In A <strong class=" weight800">Very Special Discount</strong><br class="visible-lg" />
                    - 70% Off The Entire Program</h2>
                <h2 class="font24 line30  text-center visible-xs weight600 text-light-grey" style="margin-top: 0; margin-bottom:10px;">Order
                    Now To Lock In A <strong class=" weight800">Very Special Discount</strong> - 70% Off The Entire
                    Program</h2>
            </div>
        </div>
        <div class="row paddingb0">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <p class="font16 line24">Harv has presented the information you’ll learn in this program many times. In
                    fact, the live version of <em>The Wealthy Marketer</em> sells for $4,000 a ticket.</p>
                <p class="font16 line24">Because you’re experiencing it online, we don’t have to pay the costs
                    associated with a live event. Now, normally when we sell the online version of this program we sell
                    it for a modest $997 tuition.</p>
                <p class="font16 line24">But you’re not going to pay $997 today. In fact, we’re not even going to
                    charge $597. For the next few days only, we’re slashing the price even further, taking 70% off the
                    regular price.</p>
                <p class="font16 line24">That’s right. For a limited time, new students can learn the same system that
                    earned Harv hundreds of millions of dollar in sales for only $297.</p>
                <p class="font16 line24">Why are we offering this ridiculously low price today? It’s simple. We know
                    there are countless business owners out there who could benefit from this system, and we want to
                    encourage those who are ready to do whatever it takes and who are committed to growing their
                    businesses.</p>
                <p class="font16 line24">That’s our little way of rewarding our students who are serious about creating
                    more wealth in the world. And as soon as this special offer expires, the program goes back up to
                    the normal cost of $997. So don’t wait – order now to lock in this special price.</p>
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
            </div>
        </div>
    </div>
</section>
<section class="ftf-guarantee">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
                <h2 class="font36 line46  hidden-xs text-white" style="margin-top: 0; margin-bottom:10px;">Not Sure
                    About The Program? Try It For 30 Days <strong class=" weight800">Risk-Free</strong></h2>
                <h2 class="font24 line30  visible-xs text-white" style="margin-top: 0; margin-bottom:10px;">Not Sure
                    About The Program? Try It For 30 Days <strong class=" weight800">Risk-Free</strong></h2>
                <div class="line10">&nbsp;</div>
                <div class="line15 hidden-xs">&nbsp;</div>
                <p class="text-white font16 line24">We know it can be nerve-wracking to invest in a new program to
                    expand or kickstart your business. What if the program doesn’t address your business’s unique
                    problems? What if it just tells you information you already know? Or what if you try everything
                    outlined in the program and it doesn’t work?</p>
                <p class="text-white font16 line24">We’re confident that this program has something to offer everyone –
                    no matter what type of business you run or how long you’ve been on the market. But if you’re not
                    sure, not to worry.</p>
                <p class="text-white font16 line24">We would never ask you to take a risk we wouldn’t take ourselves.
                    That’s why we back every single enrollment with a super easy, 30 day money-back guarantee. If for
                    any reason you’re not fully satisfied with the program, simply contact us for a quick and courteous
                    refund.</p>
                <p class="text-white font16 line24">(But just between us. We’ve seen Harv share this knowledge with
                    tens of thousands of people before, and we’ve seen the results as it transformed their lives. We
                    strongly believe you’ll like what you see once you’re enrolled in the program… because we’ve
                    already seen thousands of students use these principles to achieve real, lasting success.)</p>
                <div class="line20">&nbsp;</div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 img-badge-container">
                <div class="line70 visible-lg">&nbsp;</div>
                <div class="text-right"><img src="/img/Bong Saroeun.png" alt="30 Day Money Back Guarantee" class="img-responsive" /></div>
            </div>
        </div>
    </div>
</section>
<section class="ftf-gradient">
    <div class="container container-full">
        <div class="row paddingb0 paddingt20">
            <div class="col-xs-12">
                <h2 class=" font35 line40  text-center hidden-xs weight600" style="margin-top: 0; margin-bottom:10px;">When
                    You Order <em>“The Wealthy Marketer”</em> <br class="visible-lg" />Today, You’ll Receive:</h2>
                <h2 class="font24 line30  text-center visible-xs weight600" style="margin-top: 0; margin-bottom:10px;">When
                    You Order <em>“The Wealthy Marketer”</em> Today, You’ll Receive:</h2>
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
                <div class=""><img src="/img/marketing1.png" class="center-block img-responsive"
                        alt="The Wealthy Marketer" /></div>
            </div>
        </div>
        <div class="row paddingt0 paddingb0">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <ul class="manus-list">
                    <li><strong>6 step-by-step, in depth modules,</strong> over <strong>7 hours of pure wealth
                            producing content</strong> that will have you giddy with excitement because you can taste
                        your future success... and it's all personally taught by T. Harv Eker.</li>
                    <li>A special bonus recording on <strong>“How To Double Your Profits In 5 Minutes”</strong> taught
                        by T. Harv Eker.</li>
                    <li>Harv's<strong> multi-million dollar templates</strong> that are identical to what he uses in
                        ALL his businesses to date.</li>
                    <li>A professionally designed <strong><em>The Wealthy Marketer</em></strong> workbook in printable
                        PDF format for jotting down all key points, biggest learnings and powerful writing exercises.</li>
                </ul>
                @if (! $logged_in_user)

                <a href="{{route('frontend.auth.login')}}" class="mc-btn btn-style-1">

                    {{trans('strings.frontend.login-to-enroll')}}

                </a>
                @else

                    @if(Helper::getPrice($course) == 'FREE')

                    <a href="{{route('frontend.course.enroll', $course)}}" class="mc-btn btn-style-1">

                        {{trans('strings.frontend.enroll-now')}}

                    </a>

                    @else

                    <p class="font83 line80 text-light-grey text-center  nomargin"><strong>${{$course->price}}</strong></p>
                    <div class="line25">&nbsp;</div>
                    <p class="text-center"><a class="btn btn-primary" href="{{url('/inforuser/bank/')}}/{{$course->id}}"><strong>Buy Now</strong></a></p>
                    @endif

                 @endif
                <div class="line20">&nbsp;</div>
                <div class="line20 hidden-xs">&nbsp;</div>
                <h3 class="font24 line32 text-center hidden-xs" style="margin-top: 0; margin-bottom:10px;"><strong>What
                        Happens After You Order</strong></h3>
                <h3 class="font20 line26 text-center visible-xs" style="margin-top: 0; margin-bottom:10px;"><strong>What
                        Happens After You Order</strong></h3>
                <p class="text-center nomargin-b">1. Click the “Add To Cart” button above and you’ll be taken to a
                    Secure Checkout page.</p>
                <div class="line10">&nbsp;</div>
                <p class="text-center nomargin-b">2. Complete your order and you’ll get an email with your login name
                    and password.</p>
                <div class="line10">&nbsp;</div>
                <p class="text-center nomargin-b">3. Visit <strong><a href="#" target="_blank" class="text-dark-grey">https://lms3.dev.cam-pt.com/login</a></strong>
                    to get access to <em>The Wealthy Marketer</em> program.</p>
                <div class="line10">&nbsp;</div>
                <p class="text-center">4. You will receive each of the 6 Modules from the program every week for 6
                    weeks.</p>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
            </div>
        </div>
    </div>
</section>
<section class="ftf-learn-2">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="line30">&nbsp;</div>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
                <h2 class="h1 font35 line40  text-center hidden-xs weight600 light-gray" style="margin-top: 0; margin-bottom:10px;">But
                    <strong class=" weight700">Before You Decide</strong>…<br class="visible-lg" /> A Word Of Warning!</h2>
                <h2 class="h1 font24 line30  text-center visible-xs weight600 light-gray" style="margin-top: 0; margin-bottom:10px;">But
                    <strong class=" weight700">Before You Decide</strong>… A Word Of Warning!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <div class="line15">&nbsp;</div>
                <div class="line15 hidden-xs hidden-sm">&nbsp;</div>
                <p class="font16 line24">We know that $297 can be a lot of money. Especially if you’re just starting
                    out, or your business is nowhere near the level you want it to be.</p>
                <p class="font16 line24">But when it comes to success, there’s a simple way… and there’s a hard way.</p>
                <p class="font16 line24">You can spend years experimenting with this stuff, attempting to learn
                    effective marketing through trial and error. Knowing all the while that you might be missing out on
                    potential profits while you try to find your footing. And in the end? You may become rich. Or if
                    you’re like most people, you’ll struggle forever.</p>
                <p class="font16 line24">Or there’s the simple way. You can find someone who’s already had multiple
                    successful businesses under their belt. Someone who’s already made millions and millions using
                    time-tested techniques and systems. And you can learn how they got to where they are today.</p>
                <p class="font16 line24">The saying goes “time is money”. And it’s true that time is our most precious
                    commodity. Why risk the hassle and expense of taking a shot in the dark that may or may not work?
                    Following in the footsteps of someone who’s already in the position you want to be in eliminates
                    the risk, the frustration, and most of all… all the wasted time!</p>
                <p class="font16 line24">So if you’re serious about finding success – without spending years trying to
                    develop your own way – then T. Harv Eker’s “<em>The Wealthy Marketer</em>” is for you.</p>
                <div class="line30">&nbsp;</div>
                <div class="line20 hidden-xs hidden-sm">&nbsp;</div>
            </div>
        </div>
    </div>
</section>
<section class="faq ftf-gradient" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <h2 class="h1 text-center"><strong>Still Have Questions?</strong></h2>
                <h3 class="h3 text-center"><strong>See below For Answers To Our Most Common Questions</strong></h3>
                <br>
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h3 class="panel-title  font16 line20 weight600"><a aria-controls="rlc-faq-1" aria-expanded="true"
                                    href="#rlc-faq-1" data-parent="#accordion" data-toggle="collapse" class="collapsed"
                                    class="collapsed"><strong>Can't I just hire a marketing agency? Why do I need to
                                        know how to market?</strong></a></h3>
                        </div>
                        <div aria-labelledby="Can't I just hire a marketing agency? Why do I need to know how to market?"
                            role="tabpanel" class="panel-collapse collapse" id="rlc-faq-1" style="height: 0px;">
                            <div class="panel-body">
                                <p>Some of you might think that you can just hire marketing consultants and ad agencies
                                    to try and do this for you and many business people do go that route, but here's
                                    why that decision should be made AFTER you learn <strong>everything inside <em>The
                                            Wealthy Marketer</em></strong>...</p>
                                <p>First, it will <strong>cost you a fortune</strong> to get started with a good agency
                                    and second, what makes you think these companies know what they're doing? Do they
                                    really know and understand your specific business? In our experience... they don't.</p>
                                <p>And if you go through the whole process of taking the time to teach them and get
                                    them to understand your business plus pay them, what happens <strong>if they're not
                                        getting good results</strong>, then what do you do? <strong>Well you're stuck
                                    </strong>because now they're gone. You've wasted a ton of money and you <strong>still
                                        don't fully understand marketing yourself.</strong></p>
                                <p>So <em>The Wealthy Marketer</em> will give you the<strong> pure essentials</strong>
                                    to get rich in your business. If you know this you can then communicate it with
                                    anyone especially an agency. This will <strong>reduce your risk</strong>, <strong>save
                                        you a lot more money</strong> and <strong>10X your results.</strong></p>
                                <p class="nomargin-b"><strong><a href="#" target="_blank">Click here to get started now</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h3 class="panel-title  font16 line20 weight600"><a aria-controls="rlc-faq-2" aria-expanded="true"
                                    href="#rlc-faq-2" data-parent="#accordion" data-toggle="collapse" class="collapsed"><strong>I
                                        don't like to sell. Is this program still for me?</strong></a></h3>
                        </div>
                        <div aria-labelledby="I don't like to sell. Is this program still for me" role="tabpanel" class="panel-collapse collapse"
                            id="rlc-faq-2">
                            <div class="panel-body">
                                <p>If you don't like to sell this program was<strong> meant for you</strong>. As you
                                    learned on The 500 Million Dollar Secret, you aren't selling, <strong>you're
                                        helping</strong>; and the goal is to find something that <strong>resonates with
                                        you when you are marketing</strong>. In <em>The Wealthy Marketer</em>, this is
                                    what we will work on with you.</p>
                                <p>We'll <strong>clear any non-supportive</strong> beliefs you have around selling and
                                    marketing. We'll also help you<strong> create a message</strong> that attracts your
                                    target market and people who want to buy from you so you'll never feel like you are
                                    selling anything...only providing pure value.</p>
                                <p>In addition, we'll help you find a medium that you can use to <strong>launch your
                                        message that makes you feel comfortable</strong> and <strong>resonates with you</strong>.
                                    This is just the tip of the iceberg for what we will work on with you when you
                                    enroll in <em>The Wealthy Marketer</em>. In all, you will<strong> feel completely
                                        comfortable</strong> with your marketing efforts. This will be <strong>fun</strong>
                                    and <strong>enjoyable </strong>for you...not intimidating. We promise!</p>
                                <p class="nomargin-b"><strong><a href="#" target="_blank">Click here to get started now</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h3 class="panel-title  font16 line20 weight600"><a aria-controls="rlc-faq-3" aria-expanded="true"
                                    href="#rlc-faq-3" data-parent="#accordion" data-toggle="collapse" class="collapsed"><strong>When
                                        is this course being held?</strong></a></h3>
                        </div>
                        <div aria-labelledby="When is this course being held?" role="tabpanel" class="panel-collapse collapse"
                            id="rlc-faq-3">
                            <div class="panel-body">
                                <p class="nomargin-b">Anytime you want! <em>The Wealthy Marketer</em> is a video
                                    training program that's <strong>delivered on demand</strong>. Access the video
                                    lessons and other resources with your smartphone, tablet, laptop or desktop &ndash;
                                    whichever you prefer. You'll get access as soon as your registration is complete.</p>
                                <p class="nomargin-b"><strong><a href="#" target="_blank">Click here to get started now</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h3 class="panel-title  font16 line20 weight600"><a aria-controls="rlc-faq-4" aria-expanded="true"
                                    href="#rlc-faq-4" data-parent="#accordion" data-toggle="collapse" class="collapsed"><strong>There
                                        are a lot of resources and experts on the topic of marketing. How is <em>The
                                            Wealthy Marketer</em> different?</strong></a></h3>
                        </div>
                        <div aria-labelledby="There are a lot of resources and experts on the topic of marketing. How is The Wealthy Marketer different?"
                            role="tabpanel" class="panel-collapse collapse" id="rlc-faq-4">
                            <div class="panel-body">
                                <p>T. Harv Eker has put virtually everything and every secret he knows about <strong>money
                                        making marketing into one place</strong>. This comes from over 30 years of
                                    experience and revenues of over 500 million dollars. There are not many teachers
                                    that have this <strong>type of real world experience</strong>. Best of all this is
                                    taught in a way that is simple, usable and most importantly, <strong>creates wealth
                                        for people.</strong></p>
                                <p>Most people teach single tactics that eventually go out of style but these are
                                    <strong>timeless principles</strong> that will help you create a true marketing
                                    system to use over and over and over again. Good or Good?</p>
                                <p class="nomargin-b"><strong><a href="#" target="_blank">Click here to get started now</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h3 class="panel-title  font16 line20 weight600"><a aria-controls="rlc-faq-5" aria-expanded="true"
                                    href="#rlc-faq-5" data-parent="#accordion" data-toggle="collapse" class="collapsed"><strong>What
                                        if I don't like <em>The Wealthy Marketer</em>? Will you refund my money?</strong></a></h3>
                        </div>
                        <div aria-labelledby="What if I don't like The Wealthy Marketer? Will you refund my money?"
                            role="tabpanel" class="panel-collapse collapse" id="rlc-faq-5">
                            <div class="panel-body">
                                <p><em>The Wealthy Marketer</em> has a <strong>30-day, super easy money back guarantee.</strong></p>
                                <p>Take 30 days to listen to the program, experience it, go through the whole thing,
                                    and if you aren't completely blown away with what you learn, we will refund you
                                    every penny, no questions asked.</p>
                                <p>We truly want to <strong>take any risk away from you</strong> and make you feel as
                                    comfortable as possible. You can also chat with us if you have more questions by
                                    using our live chat function in the lower right corner of this page or send us a
                                    message at <a href="">admin@cam-pt.com</a>.</p>
                                <p class="nomargin-b"><strong><a href="#" target="_blank">Click here to get started now</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h3 class="panel-title  font16 line20 weight600"><a aria-controls="rlc-faq-6" aria-expanded="true"
                                    href="#" data-parent="#accordion" data-toggle="collapse" class="collapsed"><strong>Do
                                        I get access to the whole course immediately when I enroll in the program?</strong></a></h3>
                        </div>
                        <div aria-labelledby="Do I get access to the whole course immediately when I enroll in the program?"
                            role="tabpanel" class="panel-collapse collapse" id="rlc-faq-6">
                            <div class="panel-body">
                                <p>No ... and here's why: Our students <strong>achieve bigger results</strong> when the
                                    program is delivered in manageable chunks rather than a firehose of information.</p>
                                <p>The course is set up so that you receive access to one new module each week. This
                                    way you can consume and focus on one section at a time.</p>
                                <p>But don't worry &ndash; If you're moving through the material at a faster pace and
                                    want access to everything at once, simply contact our support team. We'll be happy
                                    to unlock the rest of the modules for you.</p>
                                <p class="nomargin-b"><strong><a href="#" target="_blank">Click here to get started now</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftf-learn-2">
    <div class="container container-full">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs hidden-sm">&nbsp;</div>
                <h2 class="h1 font35 line40  text-center hidden-xs weight600" style="margin-top: 0; margin-bottom:10px;">Here's
                    What Some Of Our Students Are Saying About <em>The Wealthy Marketer</em></h2>
                <h2 class="h1 font24 line30  text-center visible-xs weight600" style="margin-top: 0; margin-bottom:10px;">Here's
                    What Some Of Our Students Are Saying About <em>The Wealthy Marketer</em></h2>
                <div class="line15">&nbsp;</div>
                <div class="line15 hidden-xs hidden-sm">&nbsp;</div>
                <h3 class=" font24 line28 weight800">&ldquo;It's worth 10 times its value!&rdquo;</h3>
                <p class="nomargin-b">&ldquo;I just cannot see how a company can work without this knowledge. It's
                    worth 10 times its value!&rdquo;</p>
                <p><strong>&ndash; Andreas Salas</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3 class=" font24 line28 weight800">&ldquo;An Action Plan To Boost My Income On Demand&rdquo;</h3>
                <p class="nomargin-b">&ldquo;<em>The Wealthy Marketer</em> helped me develop a comprehensive marketing
                    template for my business and all I have to do now is pull the trigger. So based on the strategies
                    and tactics I now have an action plan to at boost my income on demand. Thanks Harv for another slam
                    dunk.&rdquo;</p>
                <p><strong>&ndash; Roberto Gonzalez</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3 class=" font24 line28 weight800">&ldquo;I have a complete marketing program&rdquo;</h3>
                <p class="nomargin-b">&ldquo;Before the program I was very frustrated with my marketing efforts. Now,
                    after completing <em>The Wealthy Marketer</em>, I have a complete marketing program and I am
                    looking forward to implementing every single bit of it.&rdquo;</p>
                <p><strong>&ndash; Laura Sherlock</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3 class=" font24 line28 weight800">&ldquo;A millionaire marketing mind and marketing plan for my
                    company.&rdquo;</h3>
                <p class="nomargin-b">&ldquo;I've been in business for twenty years and I never wanted to know anything
                    about marketing; I had no marketing plan. Now, after this course, I feel like I now have a
                    marketing mind and a marketing plan for my company. This was one awesome program. Thank you!&rdquo;</p>
                <p><strong>&ndash; Gary Gordon</strong></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 padding0">
                        <hr class="nomargin grey" />
                        <div class="line30">&nbsp;</div>
                    </div>
                </div>

                <h3 class=" font24 line28 weight800">&ldquo;A seven course dinner that is juicy, full of meat and
                    nutritiously well-balanced.&rdquo;</h3>
                <p class="nomargin-b">&ldquo;This program is just like being very, very, very hungry and being offered
                    a seven course dinner that is juicy, full of meat and nutritiously well-balanced. Now I am feeling
                    very full but it will take me a while to digest all this food.&rdquo;</p>
                <p><strong>&ndash; Sylvie Dubois</strong></p>

            </div>
        </div>
        <div class="line20">&nbsp;</div>
        <div class="line20 hidden-xs">&nbsp;</div>
    </div>
</section>

<section class="ftf-gradient">
    <div class="container container-full">
        <div class="row paddingb0">
            <div class="col-xs-12">
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
                <h2 class=" font35 line40  text-center hidden-xs weight600" style="margin-top: 0; margin-bottom:10px;">When
                    You Order <em>“The Wealthy Marketer”</em> <br class="visible-lg" />Today, You’ll Receive:</h2>
                <h2 class="font24 line30  text-center visible-xs weight600" style="margin-top: 0; margin-bottom:10px;">When
                    You Order <em>“The Wealthy Marketer”</em> Today, You’ll Receive:</h2>
                <div class="line20">&nbsp;</div>
                <div class="line30 hidden-xs">&nbsp;</div>
                <div class=""><img src="/img/TheWealthyMarketer_fullcover_small.png" class="center-block img-responsive"
                        alt="The Wealthy Marketer" /></div>
            </div>
        </div>
        <div class="row paddingt0">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <ul class="manus-list">
                    <li><strong>6 step-by-step, in depth modules,</strong> over <strong>7 hours of pure wealth
                            producing content</strong> that will have you giddy with excitement because you can taste
                        your future success... and it's all personally taught by T. Harv Eker.</li>
                    <li>A special bonus recording on <strong>“How To Double Your Profits In 5 Minutes”</strong> taught
                        by T. Harv Eker.</li>
                    <li>Harv's<strong> multi-million dollar templates</strong> that are identical to what he uses in
                        ALL his businesses to date.</li>
                    <li>A professionally designed <strong><em>The Wealthy Marketer</em></strong> workbook in printable
                        PDF format for jotting down all key points, biggest learnings and powerful writing exercises.</li>
                </ul>
                
                @if (! $logged_in_user)

                <a href="{{route('frontend.auth.login')}}" class="mc-btn btn-style-1">

                    {{trans('strings.frontend.login-to-enroll')}}

                </a>
                @else

                    @if(Helper::getPrice($course) == 'FREE')

                    <a href="{{route('frontend.course.enroll', $course)}}" class="mc-btn btn-style-1">

                        {{trans('strings.frontend.enroll-now')}}

                    </a>

                    @else

                    <p class="font83 line80 text-light-grey text-center  nomargin"><strong>${{$course->price}}</strong></p>
                    <div class="line25">&nbsp;</div>
                    <p class="text-center"><a class="btn btn-primary" href="{{url('/inforuser/bank/')}}/{{$course->id}}" ><strong>Buy Now</strong></a></p>


                    @endif

                 @endif





                <div class="line10">&nbsp;</div>
                <div class="line10 hidden-xs">&nbsp;</div>
                <div class="line20">&nbsp;</div>
                <div class="line20 hidden-xs">&nbsp;</div>
                <h3 class="font24 line32 text-center hidden-xs" style="margin-top: 0; margin-bottom:10px;"><strong>What
                        Happens After You Order</strong></h3>
                <h3 class="font20 line26 text-center visible-xs" style="margin-top: 0; margin-bottom:10px;"><strong>What
                        Happens After You Order</strong></h3>
                <p class="text-center nomargin-b">1. Click the “Add To Cart” button above and you’ll be taken to a
                    Secure Checkout page.</p>
                <div class="line10">&nbsp;</div>
                <p class="text-center nomargin-b">2. Complete your order and you’ll get an email with your login name
                    and password.</p>
                <div class="line10">&nbsp;</div>
                <p class="text-center nomargin-b">3. Visit <strong><a href="#" target="_blank" class="text-dark-grey">https://lms3.dev.cam-pt.com/login</a></strong>
                    to get access to <em>The Wealthy Marketer</em> program.</p>
                <div class="line10">&nbsp;</div>
                <p class="text-center">4. You will receive each of the 6 Modules from the program every week for 6
                    weeks.</p>
            </div>
        </div>
    </div>
</section>
<span id="hide-firstx" class="hiddenx">

    @include('frontend._modals.checkout')

    @if(!$preview_lessons->isEmpty())

    @include('frontend._modals.preview')

    @endif

</span>





@endsection



@section('after-scripts')

<link href="{{ URL::asset('css/vendor/card.js.css') }}" rel="stylesheet">

<script src="https://js.stripe.com/v2/"></script>



<script src="https://cdn.omise.co/omise.js"></script>

<script>

    Omise.setPublicKey("{{config('services.omise.key')}}");

</script>



<script src="{{ URL::asset('js/vendor/Video.js') }}"></script>

<script src="{{ URL::asset('js/vendor/Youtube.js')}}"></script>

<script src="{{ URL::asset('js/vendor/Vimeo.js') }}"></script>





<script type="text/javascript">

    var player = videojs('previewPlayer');

    $('.lesson-title').on("click", function () {

        $('.preview').removeClass('disabled ');

        $(this).parent('li').addClass('disabled');

        var video_src = $(this).data('video');

        var video_type = $(this).data('type');

        player.src({ "type": "video/" + video_type, "src": video_src });

        player.play();

    });

    $('.close').on('click', function () {

        player.pause();

        player.src('');

    })

</script>





<script>

    /*===================

    STRIPE PAYMENT

    ====================*/

    $(function () {

        Stripe.setPublishableKey("{{config('services.stripe.key')}}");



        $("#checkout-btn").click(function () {

            var form = $("#checkout-form");

            var submit = form.find("button");

            var submitInitialText = submit.text();

            submit.attr("disabled", "disabled").html("<i class='fa fa-gear fa-spin'></i> Processing...");

            Stripe.card.createToken(form, function (status, response) {

                if (response.error) {

                    $('.stripe-errors').removeClass('hidden');

                    $('.stripe-errors span').text(response.error.message);

                    form.find(".stripe-errors").text(response.error.message).show();

                    submit.removeAttr("disabled");

                    submit.text(submitInitialText);

                } else {

                    form.append($("<input type='hidden' name='token'>").val(response.id));

                    form.submit();

                }

            });

        });



    });



    // paypal button click event

    $('#paypal-button').click(function () {

        $(this).attr('disabled', 'disabled');

        $(this).html("<i class='fa fa-gear fa-spin'></i> {{trans('strings.frontend.processing')}}");

        $(this).parents('form').submit()

    })







    // Omise Payment

    $("#omise-payment").submit(function () {



        var form = $(this);

        // Disable the submit button to avoid repeated click.

        $('#create_token').attr('disabled', 'disabled');

        $('#create_token').html("<i class='fa fa-gear fa-spin'></i> {{trans('strings.frontend.processing')}}");



        // Serialize the form fields into a valid card object.

        var card = {

            "name": form.find("[data-omise=holder_name]").val(),

            "number": form.find("[data-omise=number]").val(),

            "expiration_month": form.find("[data-omise=expiration_month]").val(),

            "expiration_year": form.find("[data-omise=expiration_year]").val(),

            "security_code": form.find("[data-omise=security_code]").val()

        };

        // Send a request to create a token then trigger the callback function once

        // a response is received from Omise.

        //

        // Note that the response could be an error and this needs to be handled within

        // the callback.

        Omise.createToken("card", card, function (statusCode, response) {

            if (response.object == "error") {

                // Display an error message.

                $('#token_errors').removeClass('hidden');

                $('#token_errors span').text(response.message);

                form.find("#token_errors").text(response.message).show();



                $('#create_token').prop("disabled", false);

                $('#create_token').html("{{trans('strings.frontend.pay')}}");



            } else {

                // Then fill the omise_token.

                form.find("[name=omise_token]").val(response.id);



                setTimeout(function () {

                    form.get(0).submit();

                }, 3000);

                // And submit the form.

            };

        });

        // Prevent the form from being submitted;

        return false;

    });



</script>



























<style type="text/css">
    .checkbox.pull-right {
        margin: 0;
    }

    .pl-ziro {
        padding-left: 0px;
    }

    .form-body {

        min-height: 450px !important;

    }



    .form-checkout .form-2 .form-email {

        clear: both;

        overflow: hidden;

        margin-top: 0px;

    }

    .form-checkout .fs-title {

        margin-top: 0;

        font-weight: bold;

    }
</style>

@endsection