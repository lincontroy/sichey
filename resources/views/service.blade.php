@extends('layouts.main')
@section('content')
<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
    <div class="container">
        <ul class="breadcrumb_nav unordered_list">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog_2.html">SERVICE CENTER</a></li>
        </ul>
        <h1 class="page_title wow" data-splitting>SERVICE CENTER</h1>
    </div>
</section>
<section class="blog_standard_section section_space_lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_item mb-5"><a class="item_image" href=""><img src="assets/images/s1.jpg"
                            alt="ProMotors - Blog Image"></a>
                    <div class="item_content">
                        <ul class="item_type_list unordered_list">
                            <li><a href="#!">Car service</a></li>
                        </ul>
                        <h3 class="item_title"><a href="">We have a fully equipped, state of the art service center</a>
                        </h3>
                        <p>As a dealer for Case IH, we are accredited to offer major and minor service for Case IH
                            tractors. We have a mobile service unit fully dedicated to field service. This ensures we
                            are able to support our Agricultural customers with a wholesome package of parts and
                            service.


                            We are an authorized Caetano express service center offering parts distribution and service
                            for Renault, KIA and Hyundai passenger vehicles.


                            We offer service to both corporate and individual customers. We deal with all types of
                            vehicles, German models, Japanese vehicles and all locally assembled motor vehicles.</p>

                    </div>
                </div>

                
            </div>
            <div class="col-lg-12">
                <div class="blog_item mb-5"><a class="item_image" href=""><img src="assets/images/s2.jpg"
                            alt="ProMotors - Blog Image"></a>
                    <div class="item_content">
                        <ul class="item_type_list unordered_list">
                            <li><a href="#!">Car service</a></li>
                        </ul>
                        <h3 class="item_title"><a href="">Engine room</a>
                        </h3>
                        <p>We have an Engine room dedicated to handling very comprehensive engine overhauls. We pride ourselves in having two of the few world class hoist units to ensure our team of experienced specialists are able to solve all your suspension issues. Our diagnostic machine ensures that we get to the root of your car trouble in minutes so your downtime is greatly reduced</p>

                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>

<section class="appointment_form_section section_space_lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section_heading">
                    <div class="outline_text">Contact Us</div>
                    <h3 class="heading_text wow" data-splitting>Request Service</h3>
                    <p class="heading_description mb-0">Fill out this form</p>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="form_wrap row">
                <div class="col-md-6">
                    <div class="form-group mb-0"><label for="input_name">Your Name</label> <input type="text"
                            name="name" class="form-control" id="input_name" placeholder="Enter Your Name"></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-0"><label for="input_phone">Your Phone</label> <input type="tel"
                            name="phone" class="form-control" id="input_phone" placeholder="Enter Your Phone"></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-0"><label for="input_date">Select Date</label> <input type="date"
                            name="date" class="form-control" id="input_date"></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-0"><label for="input_time">Select Time</label> <input type="time"
                            name="time" class="form-control" id="input_time"></div>
                </div>
                <div class="col-12">
                    <div class="form-group"><label for="input_textarea">Your Message</label> <textarea name="message"
                            class="form-control" id="input_textarea" placeholder="Describe Your Problem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="btn_text">Send Now</span></button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
