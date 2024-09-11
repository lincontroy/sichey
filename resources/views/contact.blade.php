@extends('layouts.main')

@section('content')
<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
        <div class="container">
          <ul class="breadcrumb_nav unordered_list">
            <li><a href="index.html">Home</a></li>
            <li><a href="contact.html">Contacts</a></li>
          </ul>
          <h1 class="page_title wow" data-splitting>Contacts</h1>
        </div>
      </section>
      <section class="contact_section section_space_lg">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
            <div class="contact_info_box">
    <h3 class="item_title">Address</h3>
    <ul class="info_list unordered_list_block pe-lg-2">
        <li><span class="info_text mb-3">Pembe Plaza, Ground Floor Homa Bay Road/ Enterprise Road Junction Industrial Area</span></li>
        <li><span class="info_text mb-3">UG Branch: Kampala Road, Plot 22, Kampala, Uganda</span></li>
        <li><span class="info_text mb-3">Eldoret Branch: Oloo Street, Eldoret, Kenya</span></li>
    </ul>
</div>

            </div>
            <div class="col-lg-4">
              <div class="contact_info_box">
                <h3 class="item_title">Office Hours</h3>
                <ul class="info_list unordered_list_block">
                  <li><span class="info_text d-flex align-items-center justify-content-between"><span>Monday -
                        Thursday</span> <span>8 am - 5 pm</span></span></li>
                  <li><span class="info_text d-flex align-items-center justify-content-between"><span>Friday</span>
                      <span>8 am - 6 pm</span></span></li>
                  <li><span class="info_text d-flex align-items-center justify-content-between"><span>Saturday</span>
                      <span>8 am - 1 pm</span></span></li>
                  <li><span class="info_text d-flex align-items-center justify-content-between"><span>Sunday</span>
                      <span>Closed</span></span></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact_info_box">
                <h3 class="item_title">Customer Support</h3>
                <ul class="info_list unordered_list_block">
                  <li><span class="info_text mb-3"><span class="d-block"><a href="tel:+8801680636189">+254 735 500 500 / +254 768 989 407
                          89</a> </span><span class="d-block"><a href="tel:+11234567890">+254 735 500 500 / +254 768 989 407</a></span></span></li>
                  <li><span class="info_text"><span class="d-block"><a
                          href="mailto:+8801680636189">sales@sicheyautomotive.com</a> </span><span class="d-block"><a
                          href="mailto:+11234567890">sales@sicheyautomotive.com</a></span></span></li>
                </ul>
              </div>
            </div>
            <div class="col-12">
              <div class="gmap_canvas"><iframe
                  src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection