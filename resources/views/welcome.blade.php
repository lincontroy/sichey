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

</style>
<section class="hero_section hero_section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero_section_content">
                    <h1 class="hero_title wow" data-splitting>SICHEY AUTOMOTIVE</h1>
                    <p>We are an automotive company specializing in offering customized mobility solutions to address
                        unique customer needs. Unwavering spirit and commitment to evoking smiles in our customers when
                        we engage is what drives us.</p><a class="btn btn-primary" href="service_details.html"><span
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
                    <h2 class="heading_text mb-0 wow" data-splitting>Our Services</h2>
                </div>
                <div class="col-lg-6 d-none d-lg-flex justify-content-end"><a class="btn btn-primary"
                        href="service.html"><span class="btn_text">All Services</span></a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon"><svg width="50" height="53" viewBox="0 0 50 53" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.989 16.9198C18.4298 16.9198 18.8798 17.0943 19.2104 17.4458L24.5082 22.9241L26 21.3814L19.1257 14.2727C20.6345 11.1347 20.4649 7.26919 18.3882 4.20132C16.353 1.21233 13.0218 -0.260247 9.74147 0.0377745L14.1246 6.49696C14.7256 7.39191 14.5137 8.61029 13.6576 9.23263L8.92011 12.6774C8.05552 13.2989 6.87646 13.0894 6.27549 12.1944L1.88388 5.72649C0.503078 8.82942 0.706511 12.5714 2.73152 15.5603C5.13965 19.1024 9.37784 20.5136 13.1998 19.3829L20.5666 27L22.0661 25.4573L16.7684 19.979C16.0911 19.2768 16.0911 18.147 16.7684 17.4458C17.0998 17.0943 17.5482 16.9198 17.989 16.9198ZM48.2825 37.3754C45.8849 33.8112 41.6359 32.3339 37.7669 33.3778L30.5482 26L29.024 27.5569L33.8719 32.5099C34.5635 33.2185 34.5635 34.3588 33.8719 35.0674C33.5257 35.4212 33.0756 35.5982 32.616 35.5982C32.1659 35.5982 31.7167 35.4212 31.3696 35.0674L26.5234 30.1047L25 31.6704L31.5946 38.4104C29.9769 41.5773 30.0799 45.5236 32.1927 48.6729C34.2354 51.716 37.6284 53.2278 40.9867 52.9722L36.5716 46.3994C35.9665 45.4962 36.1916 44.2763 37.0736 43.6474L41.9475 40.2247C42.8304 39.6055 44.0335 39.8355 44.6472 40.729L49.0528 47.3017C50.4983 44.1967 50.3261 40.4096 48.2825 37.3754Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.4928 35.7352C23.1839 36.0883 22.681 36.0883 22.3721 35.7352L17.2323 29.8606C16.9226 29.5066 16.9226 28.9337 17.2323 28.5797L17.5078 28.2648C17.8159 27.9117 18.3188 27.9117 18.6285 28.2648L23.7683 34.1403C24.0772 34.4934 24.0772 35.0682 23.7683 35.4213L23.4928 35.7352Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21 36.5822L9.31104 49.9421L7.86996 51.5866C7.42042 52.0577 6.91066 52.4123 6.35085 52.6435C5.92675 52.831 5.49417 52.9368 5.05396 52.9732C4.90977 52.991 4.76558 52.9999 4.6129 52.9999C3.43391 53.0079 2.25407 52.5377 1.35499 51.5946C-0.451663 49.7021 -0.451663 46.6435 1.35499 44.7599L15.664 31L21 36.5822Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M45 8.1179L42.7813 11.7545L40.8159 12.6281L23.1857 31L21 28.7233L38.6378 10.3514L39.4765 8.31292L42.9677 6L43.1532 6.19502L40.5787 8.43646C40.1288 8.90417 40.3322 9.91017 40.782 10.3867C41.2471 10.8632 42.2383 11.1447 42.6966 10.6691L44.806 7.91581L45 8.1179Z"
                                fill="#EDEDED" /></svg></div>
                    <div class="item_content">
                        <h3 class="item_title">OPERATING STRUCTURE</h3>
                        <a class="btn-link" href="service_details.html"><span class="btn_icon"><i
                                    class="fa-regular fa-angle-right"></i></span>
                            <p>We are organized into four business verticals offering customers 360 degrees support to
                                their business. The choice of customers is deliberate to ensure that we establish long
                                term business relationships. We offer solutions to customer segments where high levels
                                of competence is required to ensure improved performance of the customers’ businesses /
                                operations.</p>
                            <span class="btn_text">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon"><svg width="25" height="52" viewBox="0 0 25 52" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.521 20.2881L11.6342 36.9322H3.06641L7.94341 20.2881H14.521Z" fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.43709H24.1346V0H0V6.43709Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.6744H24.1346V8.19287H0V10.6744Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.1333 18.1352C11.0407 18.1352 10.144 17.2606 10.1202 16.168V16.1212C10.1202 15.0056 11.0254 14.1081 12.1333 14.1081C13.2489 14.1081 14.155 15.0056 14.155 16.1212C14.155 16.4729 14.0604 16.8084 13.9046 17.0963C13.5538 17.7205 12.898 18.1352 12.1333 18.1352ZM0 12.439V23.799H6.04707L6.98381 20.2956C6.98381 19.8596 7.28782 19.5079 7.68551 19.5079H16.4721C16.8621 19.5079 17.1747 19.8596 17.1747 20.2956L18.2272 23.799H24.1346V12.439H0Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.75729 49.5814C3.85425 49.5814 1.49027 47.225 1.49027 44.3143C1.49027 41.4036 3.85425 39.0465 6.75729 39.0465C9.66799 39.0465 12.0243 41.4036 12.0243 44.3143C12.0243 47.225 9.66799 49.5814 6.75729 49.5814ZM0 51.2351H13.5222V37.7129H0V51.2351Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.74684 47.6261C5.13991 47.6261 3.79015 46.4637 3.50062 44.9342H2.07422C2.37057 47.2437 4.3522 49.0312 6.74684 49.0312C9.14319 49.0312 11.1257 47.2437 11.422 44.9342H9.99306C9.70523 46.4637 8.35547 47.6261 6.74684 47.6261ZM6.74684 41.0016C8.35547 41.0016 9.70523 42.1564 9.99306 43.6867H11.422C11.1257 41.3763 9.14319 39.5889 6.74684 39.5889C4.3522 39.5889 2.37057 41.3763 2.07422 43.6867H3.50062C3.79015 42.1564 5.13991 41.0016 6.74684 41.0016Z"
                                fill="#EDEDED" /></svg></div>
                    <div class="item_content">
                        <h3 class="item_title">DEALERSHIPS</h3>
                        <a class="btn-link" href="service_details.html"><span class="btn_icon"><i
                                    class="fa-regular fa-angle-right"></i></span>
                            <p>
                                <ul>
                                    <li>Dealer for CASE Agriculture for Nairobi region offering Sales, Parts and
                                        Service.</li>
                                    <li>Distributor for BONLUCK buses from China.</li>
                                    <li>Sales Agency for Hino Trucks and Buses.</li>
                                    <li>Operates a Ford and Mazda service center.</li>

                                </ul>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon"><svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M38.9933 39.3424L37.4178 40.756C36.992 41.0805 36.4896 41.4552 35.9446 41.8043C35.3144 42.2386 34.6672 42.6125 34.0371 42.9114C31.1843 44.4102 27.9227 45.2106 24.6186 45.2106H24.5675C21.1952 45.2021 17.9933 44.3931 15.0383 42.8092L13.1733 41.6936C12.6283 41.3351 12.2111 41.0294 11.8449 40.7228L11.8278 40.7143L11.6575 40.5951L10.2362 39.2922L10.1417 39.1976C6.1989 35.2642 4.03589 30.0695 4.06229 24.5598C4.06995 23.3591 4.18066 22.2265 4.39355 21.0939C4.51277 20.3181 4.66691 19.6198 4.86192 18.9649C4.98966 18.5221 5.15997 18.0529 5.31326 17.6109L5.40693 17.3554C5.70498 16.5379 6.00304 15.8907 6.34367 15.2946C9.3242 9.36762 15.0638 5.23746 21.6806 4.28284C22.3704 4.17298 23.0857 4.11337 23.784 4.10486C24.014 4.07846 24.2533 4.06994 24.5002 4.06994C24.5002 4.06994 24.7131 4.06228 24.7208 4.06228C25.0529 4.06228 25.3424 4.06994 25.6575 4.11337C26.194 4.12189 26.8582 4.1815 27.7354 4.30072C34.3266 5.30644 40.0415 9.47833 43.0383 15.4649C43.4215 16.2399 43.7025 16.8786 43.9069 17.4823C44.1368 17.9848 44.2994 18.5817 44.4434 19.1352C44.6733 19.8846 44.8351 20.6255 44.9211 21.2897C45.0991 22.3108 45.2013 23.4783 45.2098 24.7046C45.1842 30.2739 42.9786 35.4686 38.9933 39.3424ZM24.7293 0.00024092C11.1551 -0.0593697 0.050491 10.9507 0.000247817 24.5258C-0.0602144 38.117 10.9507 49.2301 24.5419 49.2803C38.1085 49.3323 49.2122 38.3299 49.2803 24.7386C49.3229 11.1559 38.3214 0.0513357 24.7293 0.00024092Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M37.4353 37.3763L30.8441 26.5527L42.4937 21.8852C42.6555 22.8134 42.7151 23.768 42.7066 24.7048C42.6981 29.5077 40.8246 34.004 37.4353 37.3763ZM35.8599 38.8155C35.4426 39.122 35.0509 39.4371 34.574 39.7437C34.5655 39.7437 34.5569 39.7607 34.5484 39.7778L27.7358 30.3508C28.2382 30.0783 28.6981 29.7376 29.1068 29.3459L35.8854 38.7806C35.8769 38.7984 35.8769 38.7984 35.8599 38.8155ZM24.5764 42.7242C21.6811 42.7072 18.9134 42.0259 16.4183 40.723L24.5509 31.1342L32.709 40.7997C30.2054 42.0855 27.4471 42.7242 24.5764 42.7242ZM14.5874 39.65L14.5363 39.5989C14.102 39.3349 13.6847 39.0198 13.3441 38.7312L13.2674 38.6707L20.1141 29.2948C20.5144 29.6942 20.9742 30.0357 21.4682 30.2997L14.5874 39.65ZM11.7099 37.2486C8.37086 33.8346 6.53144 29.3459 6.54847 24.56C6.55699 23.6318 6.65066 22.7121 6.79543 21.7668L6.91465 21.8086L18.428 26.5357L11.7099 37.2486ZM7.2638 19.6549C7.39154 19.1695 7.56185 18.6841 7.74069 18.2072C7.7492 18.1979 7.75772 18.1561 7.77475 18.1391L18.8197 21.7839C18.5643 22.2778 18.3854 22.8134 18.2662 23.3678L7.23911 19.723C7.24677 19.706 7.25614 19.6796 7.2638 19.6549ZM21.7918 6.78754L20.8814 19.3398V19.3483H20.8721L8.65188 16.2316C11.3173 11.1902 16.1884 7.67318 21.7918 6.78754ZM20.31 24.1002C19.7905 24.1002 19.3648 23.6829 19.3648 23.1626C19.3648 22.6354 19.7905 22.2182 20.31 22.2182C20.8295 22.2182 21.2553 22.6354 21.2553 23.1626C21.2553 23.6829 20.8295 24.1002 20.31 24.1002ZM21.9459 27.3277C22.4645 27.3277 22.8903 27.7449 22.8903 28.2721C22.8903 28.7924 22.4645 29.2096 21.9459 29.2096C21.4256 29.2096 20.9998 28.7924 20.9998 28.2721C20.9998 27.7449 21.4256 27.3277 21.9459 27.3277ZM24.636 22.0215C26.0837 22.0215 27.2589 23.1975 27.2589 24.6452C27.2589 26.0843 26.0837 27.2595 24.636 27.2595C23.1969 27.2595 22.0217 26.0843 22.0217 24.6452C22.0217 23.1975 23.1969 22.0215 24.636 22.0215ZM24.636 19.0247C25.164 19.0247 25.5813 19.442 25.5813 19.9691C25.5813 20.4895 25.164 20.9067 24.636 20.9067C24.1166 20.9067 23.6908 20.4895 23.6908 19.9691C23.6908 19.442 24.1166 19.0247 24.636 19.0247ZM23.8449 6.59168C23.9122 6.57464 23.9803 6.56613 24.0399 6.56613C24.2188 6.55676 24.3891 6.55676 24.5764 6.55676H24.8319C25.0022 6.55676 25.1981 6.55676 25.5047 6.59168H25.5387L25.4961 18.2072C25.2151 18.1647 24.9256 18.1476 24.636 18.1476C24.3465 18.1476 24.0655 18.1647 23.7845 18.2072L23.8449 6.59168ZM28.2893 28.2721C28.2893 28.7924 27.872 29.2096 27.3441 29.2096C26.8255 29.2096 26.3997 28.7924 26.3997 28.2721C26.3997 27.7449 26.8255 27.3277 27.3441 27.3277C27.872 27.3277 28.2893 27.7449 28.2893 28.2721ZM29.9414 23.1626C29.9414 23.6829 29.5156 24.1002 28.9961 24.1002C28.4767 24.1002 28.0509 23.6829 28.0509 23.1626C28.0509 22.6354 28.4767 22.2182 28.9961 22.2182C29.5156 22.2182 29.9414 22.6354 29.9414 23.1626ZM40.7054 16.3423L28.4426 19.3739L27.6081 6.8216C33.2123 7.73279 38.0569 11.2924 40.7054 16.3423ZM41.591 18.3946C41.7869 18.8629 41.941 19.3824 42.0594 19.8244C42.0594 19.8423 42.0594 19.8423 42.0679 19.8593L31.0059 23.4027C30.9037 22.8483 30.7248 22.3204 30.4864 21.8264L41.5484 18.266C41.5655 18.3179 41.5655 18.3426 41.591 18.3946ZM44.0776 21.3913C43.9925 20.7109 43.8221 20.0126 43.6178 19.3483C43.4815 18.8119 43.3367 18.2754 43.1068 17.7636C42.8769 17.1087 42.5873 16.47 42.2808 15.8475C39.4706 10.2364 34.0545 6.12331 27.6251 5.14314C26.9353 5.05032 26.237 4.97367 25.5557 4.95664C25.2747 4.92173 25.0107 4.91406 24.7297 4.91406C24.4231 4.92173 24.1336 4.91406 23.8526 4.95664C23.1628 4.96516 22.4645 5.02477 21.8003 5.12696C15.3623 6.05433 9.9037 10.1172 7.08497 15.7206C6.72731 16.3423 6.4548 16.9724 6.20784 17.6367C6.02901 18.1476 5.83315 18.6841 5.67986 19.2121C5.484 19.8678 5.34008 20.5491 5.22852 21.2465C5.02415 22.3382 4.92196 23.4274 4.91429 24.56C4.88789 30.0433 7.14458 35.0081 10.7468 38.5941L10.8149 38.6622L12.237 39.9651L12.2966 39.9907C12.7139 40.3483 13.1738 40.6719 13.6166 40.9615L15.439 42.06C18.1555 43.5162 21.2467 44.3507 24.5679 44.3593C27.8465 44.3678 30.9462 43.5758 33.6713 42.1451C34.3015 41.8471 34.9155 41.4809 35.4852 41.0892C35.9621 40.7826 36.4134 40.4505 36.8485 40.1175L38.3976 38.7312C42.0423 35.1877 44.3331 30.2154 44.3586 24.7133C44.3501 23.5884 44.265 22.4736 44.0776 21.3913Z"
                                fill="#EDEDED" /></svg></div>
                    <div class="item_content">
                        <h3 class="item_title">SPECIALIZED EQUIPMENT</h3>
                        <a class="btn-link" href="service_details.html"><span class="btn_icon"><i
                                    class="fa-regular fa-angle-right"></i></span>

                            <ul>
                                <li>Construction equipment.</li>
                                <li>Farm implements.</li>
                                <li>Airport airside equipment.</li>
                                <li>Ambulances and life support.</li>
                                <li>CIT and Police patrol.</li>
                                <li>Fire fighting and rapid response.</li>
                                <li>Special needs persons.</li>
                                <li>Refrigerated vans and trucks.</li>


                            </ul>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon"><svg width="36" height="53" viewBox="0 0 36 53" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.7153 24.3511L20.7189 12.0969L30.2311 24.019L30.7591 24.6824L21.7153 24.3511ZM5.28831 47.2245H29.916V29.2392H5.28831V47.2245ZM35.4002 24.6824L35.2895 24.5461L35.2639 24.5214L20.5146 6.64674L20.1058 6.15283C19.8163 5.89735 19.4331 5.75258 19.0158 5.75258H13.9063V4.50928H5.96106V5.75258H1.70316C0.766422 5.75258 0 6.51049 0 7.45574V51.0217C0 51.9678 0.766422 52.7249 1.70316 52.7249H34.0632C34.9999 52.7249 35.7664 51.9678 35.7664 51.0217V25.7221C35.7664 25.321 35.6301 24.9634 35.4002 24.6824Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.5149 6.64589L20.1062 6.15198C20.2773 6.28738 20.4136 6.45855 20.5149 6.64589Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.28809 3.65498H14.5848V0H5.28809V3.65498Z" fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.0482 43.3239C16.7586 43.7157 16.1881 43.3665 15.8474 43.1792C15.4387 42.9578 14.6467 42.3105 14.7148 41.7485C14.834 40.9565 15.626 41.493 16.0774 41.8669C16.6735 42.4127 17.1759 43.1621 17.0482 43.3239ZM21.4168 38.1625L21.3486 38.0612L17.8912 31.8872L14.2294 38.3933C13.8888 38.9894 13.71 39.6792 13.71 40.4115C13.71 42.7185 15.5834 44.5758 17.8912 44.5758C20.199 44.5758 22.064 42.7185 22.064 40.4115C22.064 39.5846 21.8255 38.8097 21.4168 38.1625Z"
                                fill="#EDEDED" /></svg></div>
                    <div class="item_content">
                        <h3 class="item_title">DISTRIBUTION</h3>
                        <a class="btn-link" href="service_details.html"><span class="btn_icon"><i
                                    class="fa-regular fa-angle-right"></i></span>
                            <ul>
                                <li>Distribution of parts to plantations and large fleet operators.</li>
                                <li>Applies consignment stock model for parts distribution to lower stock holding costs
                                    to the customers and improve availability</li>
                                <li>Deals in Continental Tyres for export to remote mining operations and deliver to
                                    customers in Burundi and Eastern DRC.</li>

                            </ul>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                    <div class="item_icon"><svg width="48" height="40" viewBox="0 0 48 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32.9904 23.2013H41.7957V20.8595H32.9904V23.2013ZM21.0606 29.1368L24.0573 23.2183H21.0606L27.2933 16.031L24.9856 21.4556L27.8128 21.3874L21.0606 29.1368ZM15.4053 23.2013H12.1778V26.4288H9.83594V23.2013H6.59994V20.8595H9.83594V17.632H12.1778V20.8595H15.4053V23.2013ZM2.19727 39.9178H46.1218V11.7476H2.19727V39.9178Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.0019H47.8171V6.63818H0V10.0019Z"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.0021 2.55474V5.46714H5.89258V2.55474C5.89258 1.14112 7.0337 0 8.44732 0C9.15413 0 9.7843 0.281021 10.2527 0.749391C10.7125 1.20924 11.0021 1.84793 11.0021 2.55474"
                                fill="#EDEDED" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M41.796 2.55474V5.46714H36.6865V2.55474C36.6865 1.14112 37.8276 0 39.2413 0C39.9481 0 40.5868 0.281021 41.0466 0.749391C41.515 1.20924 41.796 1.84793 41.796 2.55474"
                                fill="#EDEDED" /></svg></div>
                    <div class="item_content">
                        <h3 class="item_title">CONSULTANCY</h3>
                        <a class="btn-link" href="service_details.html"><span class="btn_icon"><i
                                    class="fa-regular fa-angle-right"></i></span>
                            <ul>
                                <li>Sales leadership and management</li>
                                <li>Fleet management and After Sales operations.</li>
                                <li>Leasing and tender structuring.</li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>

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


<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
    <div class="container">
        
        <h1 class="page_title wow" data-splitting>Our Gallery</h1>
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



<section class="appointment_form_section section_space_lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section_heading">
                    <div class="outline_text">Contact Us</div>
                    <h3 class="heading_text wow" data-splitting>Request An Appointment Online</h3>
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
