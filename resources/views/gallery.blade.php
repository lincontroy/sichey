@extends('layouts.main')

@section('content')
<style>
    .team_expert_image img {
    width: 100%;
    height: 300px; /* Set a fixed height for consistency */
    object-fit: cover; /* Ensures images retain aspect ratio and fill the box */
    border-radius: 10px; /* Optional: gives a slightly rounded corner to images */
}
</style>
<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
    <div class="container">
        <ul class="breadcrumb_nav unordered_list">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog_2.html">Gallery</a></li>
        </ul>
        <h1 class="page_title wow" data-splitting>Gallery</h1>
    </div>
</section>
<section class="portfolio_section section_space_lg">
    <div class="container">
        <div class="row">
            <!-- First row -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg1.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg2.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg3.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                    <div class="team_expert_content">
                        <!-- Content goes here -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg4.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Second row -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg5.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg6.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg7.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg8.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg9.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg10.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg11.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg12.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg13.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg14.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/gg15.jpeg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection