@extends('web.layout.overall')
@section("page_title", "Leveraging Technology for Market Access")
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/5.jpg);">
    <div class="auto-container">
        <h1>Event Detail</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Event Detail</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

 <!-- Event Detail -->
<section class="event-detail">
    <div class="auto-container">
        <div class="image-box">
            <figure class="image wow fadeIn"><a href="images/resource/event-detail.jpg" class="lightbox-image"><img src="images/resource/event-detail.jpg" alt=""></a></figure>
        </div>

        <div class="content-box">
            <div class="speaker-info">
                <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                <h5 class="name">Ashli Scroggy</h5>
                <span class="designation">Founder & CEO</span>
            </div>
            <ul class="upper-info">
                <li><span class="icon far fa-clock"></span>9.00 AM - 10.00 PM</li>
                <li><span class="icon fa fa-map-marker-alt"></span>Collins Street West Victoria 8007 Canada</li>
            </ul>
            <h2>Digital Disruption in Route-to-Market Strategies:
                Evolving Trends in Distribution and Channels.</h2>
            <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in repre hen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat eaque ipsa quae illo proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudant rem aperiam eaque ipsa quae ab illo inventore veritatis quasi architecto.</p>
            <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
            <div class="row two-column">
                <div class="column col-lg-6 col-md-12">
                    <figure class="image"><img src="images/resource/post-img.jpg" alt=""></figure>
                </div>
                <div class="column col-lg-6 col-md-12">
                    <h4>Evolution of user Interface</h4>
                    <ul class="list-style-two">
                        <li>Multiple Announcements during the event.</li>
                        <li>Logo & company details on the WordCamp Kolkata.</li>
                        <li>Dedicated blog post thanking each of our Gold.</li>
                        <li>Acknowledgment and thanks in opening and closing.</li>
                    </ul>
                </div>
            </div>

            <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in repre hen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat eaque ipsa quae illo proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudant rem aperiam eaque ipsa quae ab illo inventore veritatis quasi architecto.</p>
            <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
        </div>
    </div>
</section>
<!--End Event Detail -->

@endsection