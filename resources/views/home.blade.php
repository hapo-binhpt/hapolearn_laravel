@extends('layouts.app')

@section('title', 'Home')

@include('parts.chat-box')

@section('content')
<!-- Content -->
<div id="body" class="body container-fluid position-relative p-0">
        <!-- Banner -->
        <div class="hapolearn-banner container-fluid d-flex align-items-center">
            <div class="banner-content container d-flex flex-column">  
                <div class="banner-title d-block">
                    <p class="banner-title-heading">Learn Anytime, Anywhere</p>
                    <p class="banner-title-content">at HapoLearn
                        <img src="./assets/imgs/owl_logo.png" alt="" class="banner-logo"> !
                    </p>    
                </div>
                <div class="banner-slogan d-block">
                    <p>Interactive lessons, "on-the-go" </p>
                    <p>practice, peer support.</p>
                     <button class="banner-button">Start Learning Now!</button>
                </div>
            </div>
        </div>
        <div class="linear-gradient">
            <div class="transition-block"></div>
        </div>
        
        <!-- Courses -->
        <div class="courses-list container justify-content-center">
            <div class="d-flex flex-row courses-flex">
                <div class="courses-item d-flex justify-content-center card">
                    <div class="d-flex justify-content-center align-items-center courses-top bg-html">
                        <img class="courses-img" src="./assets/imgs/course_html_css.png" alt="HTML-CSS">
                    </div>
                    <div class="courses-body card-body d-flex flex-column align-items-center">
                        <p class="courses-heading card-title">HTML/CSS/js Tutorial</p>
                        <p class="courses-desc card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="courses-btn">Take This Course</a>
                    </div>
                </div>
                <div class="courses-item d-flex justify-content-center card">
                    <div class="d-flex justify-content-center align-items-center courses-top bg-lavarel">
                        <img class="courses-img" src="./assets/imgs/course_lavarel.png" alt="Lavarel">
                    </div>
                    <div class="courses-body card-body d-flex flex-column align-items-center">
                        <p class="courses-heading card-title">LARAVEL Tutorial</p>
                        <p class="courses-desc card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="courses-btn">Take This Course</a>
                    </div>
                </div>
                <div class="courses-item d-flex justify-content-center card">
                    <div class="d-flex justify-content-center align-items-center courses-top bg-php">
                        <img class="courses-img" src="./assets/imgs/course_php.png" alt="PHP">
                    </div>
                    <div class="courses-body card-body d-flex flex-column align-items-center">
                        <p class="courses-heading card-title">PHP Tutorial</p>
                        <p class="courses-desc card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="courses-btn">Take This Course</a>
                    </div>
                </div>                
            </div>    
        </div>

        <!-- Other Courses -->
        <div class="other-courses-list container">
            <div class="other-courses-title d-flex flex-column align-items-center">
                Other courses
                <div class="title-underline"></div>
            </div>
            <div class="d-flex flex-row courses-flex">
                <div class="other-courses-item d-flex justify-content-center card">
                    <div class="d-flex justify-content-center align-items-center other-courses-top bg-css">
                        <img class="other-courses-img" src="./assets/imgs/course_css.png" alt="CSS">
                    </div>
                    <div class="other-courses-body card-body d-flex flex-column align-items-center">
                        <p class="other-courses-heading card-title">CSS Tutorial</p>
                        <p class="other-courses-desc card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                        <a href="#" class="other-courses-btn">Take This Course</a>
                    </div>
                </div>
                <div class="other-courses-item d-flex justify-content-center card">
                    <div class="d-flex justify-content-center align-items-center other-courses-top bg-rails">
                        <img class="other-courses-img" src="./assets/imgs/course_rails.png" alt="Rails">
                    </div>
                    <div class="other-courses-body card-body d-flex flex-column align-items-center">
                        <p class="other-courses-heading card-title">Ruby on rails Tutorial</p>
                        <p class="other-courses-desc card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                        <a href="#" class="other-courses-btn">Take This Course</a>
                    </div>
                </div>
                <div class="other-courses-item d-flex justify-content-center card">
                    <div class="d-flex justify-content-center align-items-center other-courses-top bg-java">
                        <img class="other-courses-img" src="./assets/imgs/course_java.png" alt="Java">
                    </div>
                    <div class="other-courses-body card-body d-flex flex-column align-items-center">
                        <p class="other-courses-heading card-title">Java Tutorial</p>
                        <p class="other-courses-desc card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                        <a href="#" class="other-courses-btn">Take This Course</a>
                    </div>
                </div>
            </div>    
        <a href="#" class="d-flex flex-row view-all justify-content-center">
           <span>View all our courses <img src="./assets/imgs/view_all_right_arrow.png" alt="" class="view-all-arrow"></span>
        </a>   
    </div>          

    <!-- Why Hapolearn Banner -->
    <div class="why-hapolearn-banner container-fluid p-0">
        <div class="row w-100 h-100 align-items-center">    
            <div class="banner-slogan col-sm-6 d-flex flex-column align-items-center">
                <div class="slogan-title">
                    <h>Why HapoLearn?</h>
                </div>
                <div class="slogan-content">
                    <i class="far fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.
                </div>
                <div class="slogan-content">
                    <i class="far fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.
                </div>
                <div class="slogan-content">
                    <i class="far fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.
                </div>
                <div class="slogan-content">
                    <i class="far fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.
                </div>
                <div class="slogan-content">
                    <i class="far fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.
                </div>
            </div>
            <div class="banner-devices col-sm-6 d-flex align-items-center"></div>
        </div>
        <div class="banner-laptop"></div>
    </div>

    <!-- Feedback -->
    <div class="container feedback">
        <div class="feedback-title d-flex justify-content-center">Feedback</div>
        <div class="feedback-underline mx-auto"></div>
        <div class="feedback-intro">What other students turned professionals have to say about us after learning with us and reaching their goals</div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class=" mt-lg-4 mt-md-2 carousel-inner feedback-slide mt-0">
                <div class="carousel-item active">
                    <div class="container mt-5">
                        <div class="d-flex row ml-auto mr-auto">
                            <div class="mt-2 m-0 p-0 feedback-border-text ">
                                <p class="feedback-text">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”</p>
                            </div>
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle" src="./assets/imgs/avatar.png">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold user-name">Hoang Anh Nguyen</span>
                                    <span class="user-role text-black-50">PHP</span>
                                    <div class="user-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container mt-5">
                        <div class="d-flex row ml-auto mr-auto">
                            <div class="mt-2 m-0 p-0 feedback-border-text ">
                                <p class="feedback-text">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”</p>
                            </div>
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle" src="./assets/imgs/avatar.png">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold user-name">Phan Thanh Binh</span>
                                    <span class="user-role text-black-50">PHP</span>
                                    <div class="user-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container mt-5">
                        <div class="d-flex row ml-auto mr-auto">
                            <div class="mt-2 m-0 p-0 feedback-border-text ">
                                <p class="feedback-text">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”</p>
                            </div>
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle" src="./assets/imgs/avatar.png">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold user-name">Phan Binh</span>
                                    <span class="user-role text-black-50">PHP</span>
                                    <div class="user-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Become banner -->
    <div class="become-banner container-fluid d-flex justify-content-center align-items-center ">
        <div class="become-banner-content col-md-6 d-flex flex-column align-items-center">
            <p>Become a member of our growing community!</p>
            <a class="btn d-flex justify-content-center align-items-center" href="#">Start Learning Now!</a>
        </div>
    </div>

    <!-- Statistic -->
    <div class="statistic container-fluid p-0 d-flex flex-column">
        <div class="statistic-title d-flex flex-column mx-auto">
            <p>Statistic</p>
            <div class="statistic-underline"></div>
        </div>
        <div class="statistic-content container-fluid p-0">
            <div class="row w-100 h-100 m-0">
                <div class="statistic-courses col-sm-4 d-flex justify-content-center">
                    <div class="item-name">
                        Courses
                        <div class="item-number">1,586</div>
                    </div>                        
                </div>
                <div class="statistic-lessons col-sm-4 d-flex justify-content-center">
                    <div class="item-name">
                        Lessons
                        <div class="item-number">2,689</div>
                    </div>                       
                </div>
                <div class="statistic-learners col-sm-4 d-flex justify-content-center">
                    <div class="item-name">
                        Learners
                        <div class="item-number">16,882</div>
                    </div>                       
                </div>
            </div>
        </div>
    </div>
@endsection
