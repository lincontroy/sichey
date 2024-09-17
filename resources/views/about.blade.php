@extends('layouts.main')

@section('content')

<style>
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

    .unordered_list {
        list-style-type: disc;
        /* Default bullet style */
        padding-left: 20px;
        /* Add space between bullet and text */
        margin: 0;
        /* Remove default margin */
    }

    .unordered_list li {
        margin-bottom: 10px;
        /* Space between list items */
    }

</style>
<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
    <div class="container">
        <ul class="breadcrumb_nav unordered_list">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
        <h1 class="page_title wow" data-splitting>About Us</h1>
    </div>
</section>
<section class="about_section section_space_lg pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 order-lg-last">
                <div class="image_widget">

                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/zl6MDUcN6lQ?si=24Kf-8Y0mJ_HztDm"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about_content">
                    <div class="section_heading">
                        <h2 class="heading_text wow" data-splitting>Our DNA is Automotive</h2>
                        <p class="heading_description mb-0">Sichey Automotive East Africa Limited was established in
                            2019 during the height of Covid 19 pandemic outbreak. The spirit and foundation of our
                            organization is that of overcoming any challenge though innovation and adaptation to the
                            prevailing environment. Our people is what makes the organization unique and sets us apart
                            since the approach to work is entrepreneurial in nature.

                            We bring true meaning to superior customer experience by leveraging on suitable channels to
                            engage with our customers especially the digital assets relevant to each customer segment.

                            We believe in life long business relationships and for this reason each customer as well as
                            supplier engagement is uniquely nurtured. People are our business.</p>
                    </div>
                    <div class="about_content">
                        <div class="section_heading">
                            <h2 class="heading_text wow" data-splitting>Our Vision</h2>
                            <p class="heading_description mb-0">To be the most effective and efficient business partner
                                to our customers and stakeholders.</p>
                        </div>
                    </div>
                    <div class="about_content">
                        <div class="section_heading">
                            <h2 class="heading_text wow" data-splitting>Our Mission</h2>
                            <p class="heading_description mb-0">To always offer our customers solutions with their
                                business needs in mind.</p>
                        </div>
                    </div>

                    <div class="about_content">
                        <div class="section_heading">
                            <h2 class="heading_text wow" data-splitting>BUSINESS STRATEGY</h2>

                            <ul class="unordered_list">
                                <li>Offer superior customer engagement.</li>
                                <li>Become a business partner of choice to all our stakeholders.</li>
                                <li>Diversify our revenue streams within the automotive and Agri- mechanization sectors.
                                </li>
                                <li>Leverage on our industry and regional business knowledge.</li>
                                <li>Invest in world class teams and infrastructure.</li>

                            </ul>
                        </div>
                    </div>



                </div>

                <div class="about_content">
                    <div class="section_heading">
                        <h2 class="heading_text wow" data-splitting>BUSINESS MODEL</h2>

                        <ul class="unordered_list">
                            <li>Strong market position and performance.</li>
                            <li>Selective and premium brand partnerships.</li>
                            <li>Diversified market led route to market.</li>
                            <li>Diversified revenue streams to create business stability..</li>


                        </ul>
                    </div>
                </div>

                <div class="about_content">
                    <div class="section_heading">
                        <h2 class="heading_text wow" data-splitting>THE ENVIRONMENT</h2>

                        <p>We care about our planet and strive to ensure that all our activities have a green footprint.</p>
                    </div>
                </div>

                <div class="about_content">
                    <div class="section_heading">
                        <h2 class="heading_text wow" data-splitting>Touching Lives; One Delivery at a Time</h2>

                        <p>We are a people-based company. We strive to not only deliver units to our customers, but go beyond and ensure the units impact their lives positively and that the units are the most suitable for their needs.</p>
                    </div>
                </div>




            </div>


        </div>
    </div>
</section>

<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
        <div class="container">
          
          <h1 class="page_title wow" data-splitting>Our Team</h1>
        </div>
      </section>
      <section class="team_section section_space_lg">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t1.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Patrick Amenya</h3><span class="team_expert_designation d-block">Director
            </span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t2.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Brenda Amenya</h3><span class="team_expert_designation d-block">Director
                      </span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t3.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Faith chepkorir</h3><span class="team_expert_designation d-block">GM Finance and Admin</span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t4.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Brian Edward</h3><span class="team_expert_designation d-block">BUSINESS ANALYST - DIGITAL, MARKETING & SALES</span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t5.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Nelson Ruto</h3><span class="team_expert_designation d-block">GM AFTERSALES</span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t6.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Peter Eugin</h3><span class="team_expert_designation d-block">Sales consultant</span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t7.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Morrice Odhiambo Bala</h3><span class="team_expert_designation d-block">Parts Supervisor</span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team_expert_item">
                <div class="team_expert_image"><img src="assets/images/t8.jpg"
                    alt="ProMotors - Team Expert Image"></div>
                <div class="team_expert_content">
                  <div class="team_expert_title">
                    <h3 class="team_expert_name">Eric Carlton</h3><span class="team_expert_designation d-block">Technician</span>
                  </div>
                  <ul class="social_links unordered_list">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
