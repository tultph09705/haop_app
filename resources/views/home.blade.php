@extends('layouts.app')

@section('content')
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>
<section class="banner" >
<div class="banner-container">
        <div class="banner-title">
            <p class="banner-title-content">Learn Anytime, Anywhere</p>
            <p class="banner-title-content banner-title-content-b">
                at HapoLearn
                <svg width="55" height="50" viewBox="0 0 55 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.4835 20.9189C54.3711 20.3004 54.0899 19.7662 53.6963 19.3163C53.3308 14.2275 51.8407 9.25108 48.7761 5.11814C47.4547 3.34688 46.049 1.71619 43.7716 1.15389C42.141 0.760276 40.5103 1.01331 39.0202 1.74431C37.1927 2.67211 35.5058 3.5718 33.5377 4.1341C30.2201 5.09002 26.7619 5.31495 23.36 4.61207C21.7855 4.27468 20.1829 3.82484 18.6928 3.17819C17.0622 2.4753 15.6283 1.32258 13.857 1.04143C11.1017 0.591584 8.68381 1.913 7.02501 4.02164C3.45437 8.52008 1.62688 13.8058 1.23327 19.5131C0.361697 20.694 0.361697 22.2122 1.23327 23.3931C1.62688 29.4378 3.59495 35.089 7.53109 39.8124C10.7081 43.6079 15.0379 46.3913 19.7612 47.8533C28.983 50.7211 39.47 48.1063 46.2177 41.1619C50.8567 36.3823 53.2184 30.1969 53.6963 23.6461C54.118 23.1962 54.3992 22.6621 54.4835 22.0154C54.5117 21.8748 54.5117 21.7061 54.5117 21.5656C54.5398 21.3688 54.5398 21.1438 54.4835 20.9189Z" fill="white"/>
                    <path d="M54.4835 20.9189C54.3711 20.3004 54.0899 19.7662 53.6963 19.3163C53.3308 14.2275 51.8407 9.25108 48.7762 5.11814C47.4547 3.34688 46.049 1.71619 43.7716 1.15389C42.141 0.760276 40.5103 1.01331 39.0202 1.74431C37.1927 2.67211 35.5058 3.5718 33.5377 4.1341C30.2201 5.09002 26.7619 5.31495 23.36 4.61207C21.7855 4.27468 20.1829 3.82484 18.6928 3.17819C17.0622 2.4753 15.6283 1.32258 13.857 1.04143C11.1017 0.591584 8.68381 1.913 7.02501 4.02164C3.45437 8.52008 1.62688 13.8058 1.23327 19.5131C0.361697 20.694 0.361697 22.2122 1.23327 23.3931C1.62688 29.4378 3.59495 35.089 7.53108 39.8124C10.7081 43.6079 15.0379 46.3913 19.7612 47.8533C28.983 50.7211 39.47 48.1064 46.2177 41.1619C50.8567 36.3823 53.2184 30.1969 53.6963 23.6461C54.118 23.1962 54.3992 22.6621 54.4835 22.0154C54.5117 21.8748 54.5117 21.7061 54.5117 21.5656C54.5398 21.3688 54.5398 21.1438 54.4835 20.9189Z" stroke="#B2D237" stroke-width="0.25" stroke-miterlimit="10"/>
                    <path d="M45.993 4.92135C44.6997 3.26255 41.9444 2.27852 39.6951 3.76862C33.566 7.33926 27.4931 7.08622 27.4931 7.08622C27.4931 7.08622 21.5046 7.36737 15.2911 3.76862C13.0419 2.2504 10.2866 3.26255 8.99329 4.92135C7.69999 6.58015 1.43029 13.4965 3.8482 27.6385C6.99711 41.0776 18.0464 46.9255 27.4931 46.9255C36.9398 46.9255 47.9891 41.0776 51.138 27.6385C53.556 13.4965 47.2863 6.58015 45.993 4.92135Z" fill="#B2D237"/>
                    <path d="M23.332 30.4501L27.5493 33.7115L31.7385 30.4782L27.5212 24.0117L23.332 30.4501Z" fill="#F37033"/>
                    <path d="M32.8627 32.1649L27.5489 35.2295L22.207 32.1368L24.5968 30.478L27.5489 32.1649L30.4448 30.5061L32.8627 32.1649Z" fill="#515453"/>
                    <path d="M26.312 21.4531C26.312 26.795 21.9822 31.0966 16.6684 31.0966C11.3265 31.0966 7.0249 26.7669 7.0249 21.4531C7.0249 16.1112 11.3547 11.8096 16.6684 11.8096C22.0103 11.8096 26.312 16.1393 26.312 21.4531Z" fill="white"/>
                    <path d="M16.6684 11.8095C22.0103 11.8095 26.3119 16.1393 26.3119 21.453C26.3119 26.7949 21.9822 31.0966 16.6684 31.0966C11.3546 31.0966 7.02484 26.7668 7.02484 21.453C7.02484 16.1393 11.3546 11.8095 16.6684 11.8095ZM16.6684 9.3916C10.0051 9.3916 4.60693 14.7897 4.60693 21.453C4.60693 28.1164 10.0051 33.5145 16.6684 33.5145C23.3317 33.5145 28.7298 28.1164 28.7298 21.453C28.7298 14.8178 23.3317 9.3916 16.6684 9.3916Z" fill="#515453"/>
                    <path d="M15.3188 18.9228C15.3188 18.2481 15.853 17.7139 16.5278 17.7139C17.2026 17.7139 17.7368 18.2481 17.7368 18.9228C17.7368 19.5976 17.2026 20.1318 16.5278 20.1318C15.853 20.1318 15.3188 19.5695 15.3188 18.9228Z" fill="white"/>
                    <path d="M48.0454 21.4531C48.0454 26.795 43.7156 31.0966 38.4018 31.0966C33.0599 31.0966 28.7583 26.7669 28.7583 21.4531C28.7583 16.1112 33.088 11.8096 38.4018 11.8096C43.7156 11.8096 48.0454 16.1393 48.0454 21.4531Z" fill="white"/>
                    <path d="M38.3735 11.8095C43.7153 11.8095 48.017 16.1393 48.017 21.453C48.017 26.7949 43.6872 31.0966 38.3735 31.0966C33.0597 31.0966 28.7299 26.7668 28.7299 21.453C28.7299 16.1393 33.0597 11.8095 38.3735 11.8095ZM38.3735 9.3916C31.7101 9.3916 26.312 14.7897 26.312 21.453C26.312 28.1164 31.7101 33.5145 38.3735 33.5145C45.0368 33.5145 50.4349 28.1164 50.4349 21.453C50.4349 14.8178 45.0368 9.3916 38.3735 9.3916Z" fill="#515453"/>
                    <path d="M32.2163 18.9228C32.2163 18.2481 32.7505 17.7139 33.4253 17.7139C34.1 17.7139 34.6342 18.2481 34.6342 18.9228C34.6342 19.5976 34.1 20.1318 33.4253 20.1318C32.7505 20.1318 32.2163 19.5695 32.2163 18.9228Z" fill="white"/>
                    <path d="M3.84806 22.6621H5.47875C6.09728 22.6621 6.71582 22.0997 6.6877 21.4531C6.65959 20.8064 6.15351 20.2441 5.47875 20.2441H3.84806C3.22953 20.2441 2.61099 20.8064 2.63911 21.4531C2.66722 22.0997 3.1733 22.6621 3.84806 22.6621Z" fill="#515453"/>
                    <path d="M49.6195 22.6621H51.2502C51.8688 22.6621 52.4873 22.0997 52.4592 21.4531C52.4311 20.8064 51.925 20.2441 51.2502 20.2441H49.6195C49.001 20.2441 48.3825 20.8064 48.4106 21.4531C48.4668 22.0997 48.9448 22.6621 49.6195 22.6621Z" fill="#515453"/>
                    <path d="M21.1109 19.5132C20.0144 19.5132 19.5645 20.441 19.5645 20.441C19.5645 20.441 19.1147 19.5132 18.0182 19.5132C16.1907 19.5132 16.5562 21.2001 16.5562 21.2001C16.5562 21.2001 16.6968 23.1401 19.5927 24.096C22.4604 23.1682 22.6291 21.2001 22.6291 21.2001C22.6291 21.2001 22.9665 19.5132 21.1109 19.5132Z" fill="#F04D4D"/>
                    <path d="M37.7548 19.0352C36.574 19.0352 36.1241 20.0192 36.1241 20.0192C36.1241 20.0192 35.6462 19.0352 34.4934 19.0352C32.5535 19.0352 32.919 20.8345 32.919 20.8345C32.919 20.8345 33.0596 22.9151 36.1241 23.8991C39.1887 22.9151 39.3293 20.8345 39.3293 20.8345C39.3293 20.8345 39.6948 19.0352 37.7548 19.0352Z" fill="#F04D4D"/>
                </svg>
                !
            </p>
        </div>
        <div class="banner-text">
            <p>
                Interactive lessons, "on-the-go" <br>
                practice, peer support.
            </p>
        </div>
        <button class="btn-start">Start Learning Now!</button>
</section>
<section class="layout"></section>
<section class="Courser">
    <div class="container">
    <div class="row">
    <div class="col-md items">
        <div class="info">
            <div class="img-courser">
                <img src="{{ asset('images/Rectangle 7.png') }}" alt="" >
            </div>
            <p class="courser-title"><a href="">HTML/CSS/JS Tutorial</a></p>
            <p class="courser-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
            <button class="btn-courser">Take This Course</button>
        </div>
    </div>
    <div class="col-md items">
        <div class="info">
            <div class="img-courser color">
                <img src="{{ asset('images/laravel-1-logo-black-and-white 1.png') }}" alt="" >
            </div>
            <p class="courser-title"><a href="">LARAVEL Tutorial</a></p>
            <p class="courser-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
            <button class="btn-courser">Take This Course</button>
        </div>
    </div>
    <div class="col-md items">
    <div class="info">
            <div class="img-courser">
                <img src="{{ asset('images/Rectangle 15.png') }}" alt="">
            </div>
            <p class="courser-title"><a href="">PHP Tutorial</a></p>
            <p class="courser-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
            <button class="btn-courser">Take This Course</button>
        </div>
  </div>
    </div>
</section>
<h1>Other Courser</h1>
<div class="line"></div>
<section class="Other-Courser">
    <div class="container">
    <div class="row">
    <div class="col-md items ">
        <div class="info">
            <div class="img-courser blue">
                <img src="{{ asset('images/Rectangle 7.png') }}" alt="" >
            </div>
            <p class="courser-title"><a href="">CSS Tutorial</a></p>
            <p class="courser-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
            <button class="btn-courser">Take This Course</button>
        </div>
    </div>
    <div class="col-md items ">
        <div class="info">
            <div class="img-courser color">
                <img src="{{ asset('images/laravel-1-logo-black-and-white 1.png') }}" alt="" >
            </div>
            <p class="courser-title"><a href="">Ruby on rails Tutorial</a></p>
            <p class="courser-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
            <button class="btn-courser">Take This Course</button>
        </div>
    </div>
    <div class="col-md items ">
    <div class="info">
            <div class="img-courser dark-blue">
                <img src="{{ asset('images/Rectangle 15.png') }}" alt="">
            </div>
            <p class="courser-title"><a href="">Java Tutorial</a></p>
            <p class="courser-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
            <button class="btn-courser">Take This Course</button>
        </div>
  </div>
    </div>
</section>
<h2><a href="">View All Our Courses <i class="fas fa-arrow-right"></i></a></h2>

<section class="why-hapo">
    <div class="container">
        <div class="why-hapo">
                <div class="col-sm-6">
                    <div class="info-hapo">
                        <p class="tittle-why">Why HapoLearn?</p> 
                        <p class="text-why"><i class="fas fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p class="text-why"><i class="fas fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p class="text-why"><i class="fas fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p class="text-why"><i class="fas fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p class="text-why"><i class="fas fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer support.</p>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="{{ asset('images/transparent-1911160_1280.png') }}" alt="" class="img-hapo" >
                </div>
        </div>
    </div>
</section>

<section class="feedback">
    <h1>FeedBack</h1>
    <div class="line line-feed"></div>
    <p class="feed-title">What other students turned professionals have to say about us<br>after learning with us and reaching their goals</p>
    <div class="container">
        <div class="slider">
            <div class="slider-item">
                <div class="slider-message">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="{{ asset('images/ellipse 1.png') }}" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Hoang Anh Nguyen</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-message">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="{{ asset('images/ellipse 1.png') }}" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Hoang Anh Nguyen</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-message">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="{{ asset('images/ellipse 1.png') }}" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Hoang Anh Nguyen</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-message">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="{{ asset('images/ellipse 1.png') }}" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Hoang Anh Nguyen</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="member">
    <div class="container">
        <div class="member-info">
            <p class="member-text">Become a member of our <br>growing community!</p>
            <button class="btn-member">Start Learning Now!</button> 
        </div>
    </div>
</section>
<section class="statistic">
    <h1>Statistic</h1>
    <div class="line line-sta"></div>
    <div class="container sta">
    <div class="row">
        <div class="col-sm">
        <p class="sta-title">Courses</p>
        <p class="sta-number">1,586</p>
        </div>
        <div class="col-sm">
        <p class="sta-title">Lessons</p>
        <p class="sta-number">2,689</p>
        </div>
        <div class="col-sm">
        <p class="sta-title">Learners</p>
        <p class="sta-number">16,882</p>
        </div>
    </div>
    </div>
</section>
@endsection
