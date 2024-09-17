@extends('layouts.main')
@section('content')

<style>

/* Remove text-transform: uppercase; where applied */

.heading_text, .item_title, .btn_text,.btn-link,.info_text {
    text-transform: none;
}

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        border-radius: 10px;
        /* Optional: adds rounded corners */
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .quotation-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        
    }

    

</style>
<section class="hero_section hero_section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero_section_content">
                    <h1 class="hero_title wow" data-splitting>SICHEY AUTOMOTIVE</h1>
                    <p>We are an automotive company specializing in offering customized mobility solutions to address
                        unique customer needs. Unwavering spirit and commitment to evoking smiles in our customers when
                        we engage is what drives us.</p><a class="btn btn-primary" href="/service"><span
                            class="btn_text">Get Service</span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero_section_image"><img data-parallax='{"scale" : 0.6, "smoothness": 8}'
                        src="assets/images/hero/hero_image_1.png" alt="ProMotors – Car Service Image"></div>
            </div>
        </div>
    </div>
    <div class="outline_text" data-parallax='{"x" : -200, "smoothness": 8}'>Sichey</div>
</section>
<div class="counter_section bg_gray_dark section_space_md">
    <div class="container">
        <div class="counter_items_group row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter_item">
                    <div class="counter_value"><span class="odometer" data-count="8">0</span> <span>K+</span></div>
                    <hr>
                    <p class="counter_description mb-0">Over 8,000 satisfied clients have trusted us with their
                        projects, and we’ve delivered excellence every time.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter_item">
                    <div class="counter_value"><span class="odometer" data-count="22">0</span> <span>+</span></div>
                    <hr>
                    <p class="counter_description mb-0">More than 22 dedicated services designed to meet every client's
                        needs with precision and care.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter_item">
                    <div class="counter_value"><span class="odometer" data-count="500">0</span> <span>+</span></div>
                    <hr>
                    <p class="counter_description mb-0">A growing team of 500+ professionals committed to delivering
                        top-notch results for our clients.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter_item">
                    <div class="counter_value"><span class="odometer" data-count="99">0</span> <span>%</span></div>
                    <hr>
                    <p class="counter_description mb-0">We pride ourselves on a 99% customer satisfaction rate, ensuring
                        that your experience is nothing short of exceptional.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service_section section_space_lg">
    <div class="container">
        <div class="section_heading">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="heading_text mb-0 wow" data-splitting>Our services</h2>
                </div>
                <div class="col-lg-6 d-none d-lg-flex justify-content-end">
                    <a class="btn btn-primary" href="service.html">
                        <span class="btn_text">All services</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon">
                        <svg width="50" height="53" viewBox="0 0 50 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content remains unchanged -->
                        </svg>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title">Operating structure</h3>
                        <a class="btn-link" href="">
                            <span class="btn_icon"><i class="fa-regular fa-angle-right"></i></span>
                            <p>We are organized into four business verticals offering customers 360 degrees support to their business. The choice of customers is deliberate to ensure that we establish long-term business relationships. We offer solutions to customer segments where high levels of competence are required to ensure improved performance of the customers’ businesses/operations.</p>
                            <span class="btn_text"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon">
                        <svg width="25" height="52" viewBox="0 0 25 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content remains unchanged -->
                        </svg>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title">Quality control</h3>
                        <a class="btn-link" href="service_details.html">
                            <span class="btn_icon"><i class="fa-regular fa-angle-right"></i></span>
                            <p>With our quality control mechanisms, we ensure that our products meet and exceed customer expectations. Our comprehensive testing and inspection processes guarantee the highest standards of quality in all our offerings.</p>
                            <span class="btn_text"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon">
                        <svg width="29" height="32" viewBox="0 0 29 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content remains unchanged -->
                        </svg>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title">Product design</h3>
                        <a class="btn-link" href="service_details.html">
                            <span class="btn_icon"><i class="fa-regular fa-angle-right"></i></span>
                            <p>Our product design team excels in creating innovative and user-centric designs that meet market demands. We focus on delivering high-quality, aesthetically pleasing, and functional products that stand out in the marketplace.</p>
                            <span class="btn_text"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-lg-none text-center">
            <a class="btn btn-primary" href="service.html">
                <span class="btn_text">All services</span>
            </a>
        </div>
    </div>
</section>


<section class="video_section">
    <div class="container">
        <div class="section_heading mb-0">
            <h2 class="heading_text mb-0 wow" data-splitting>OUR GUIDING PRINCIPLES
            </h2>
        </div>
        <hr>

        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/Zvht3gvkrRs?si=24Kf-8Y0mJ_HztDm" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<hr>

<section class="service_section bg_gray_dark">
    <div class="service_split_wrapper">
        <div class="service_split_item">
            <div class="item_image"><img src="assets/images/hino.png" alt="Sichey - Service Image">
            </div>
            <div class="item_content">
                <div class="section_heading">
                    <div class="outline_text">Service</div>
                    <h3 class="heading_text wow" data-splitting>VALUE
                        CHAIN</h3>
                    <ul class="info_list unordered_list_block text-uppercase">
                        <li><span class="info_icon"><img src="assets/images/icons/icon_square.svg"
                                    alt="ProMotors - Icon Square"> </span><span class="info_text">Consultancy and
                                training.
                                Market and product planning.
                                Territory management.
                                Import and warehousing.
                                Parts distribution and retailing.
                                Vehicles, tractors, buses and trucks sales.
                                After Sales and servicing.
                                Finance and insurance.</span></li>

                    </ul>
                </div><a class="btn btn-primary" href="/contact"><span class="btn_text">Get Service</span></a>
            </div>
        </div>

    </div>
</section>




<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
    <div class="container">
        
        <h1 class="page_title wow" data-splitting>Our Gallery</h1>
    </div>
</section>
@include('partials.gal')

<section class="section_space_lg">
<div class="testimonials_section py-5">
    <div class="container">
        <h2 class="section_title text-center mb-5">What Our Clients Say</h2>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial_card p-4 text-center border rounded">
                <img src="assets/images/quotations.png" alt="Quotation Mark" class="quotation-img mb-3">
                    <div class="client_testimonial">
                        <p>"Sichey Automation Company truly understands the meaning of customer satisfaction. They designed a mobility solution for my business that has exceeded my expectations. Their attention to detail and innovation is unmatched. I’m now able to transport goods efficiently, saving time and costs!"</p>
                        <h5 class="client_name mt-3">James Kamau</h5>
                     
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial_card p-4 text-center border rounded">
                <img src="assets/images/quotations.png" alt="Quotation Mark" class="quotation-img mb-3">
                    <div class="client_testimonial">
                        <p>"The team at Sichey Automation listened carefully to my needs and delivered a solution tailored perfectly for me. Their professionalism and commitment to ensuring I was happy with the result made the whole experience wonderful. I would recommend them to anyone looking for customized automotive solutions!"</p>
                        <h5 class="client_name mt-3">Grace Achieng</h5>
                        
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
    <div class="testimonial_card p-4 text-center border rounded shadow-sm">
        <!-- Circular quotation image -->
        <img src="assets/images/quotations.png" alt="Quotation Mark" class="quotation-img mb-3">
        
        <div class="client_testimonial">
            <p>"I needed a customized vehicle for my farm work, and Sichey Automation came through brilliantly. Their team was not only professional but also friendly and patient in helping me choose the right solution. I’m thrilled with the outcome and how it has improved my operations!"</p>
            <h5 class="client_name mt-3 font-weight-bold">Peter Kiptoo</h5>
        </div>
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
