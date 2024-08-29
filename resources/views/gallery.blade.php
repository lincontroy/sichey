@extends('layouts.main')

@section('content')

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
                        <img src="assets/images/g1.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g2.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g3.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                    <div class="team_expert_content">
                        <!-- Content goes here -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g4.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Second row -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g5.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g6.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g7.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g8.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team_expert_item">
                    <div class="team_expert_image">
                        <img src="assets/images/g9.jpg" alt="ProMotors - Car Repair Service">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection