@extends('layouts.website')
@section('title') Home @endsection
@section('content')
@auth('web')
    @if($ads->count() > 0)
        <div class="pt-5">
            <div class="container">
                <div class="row">
                    @foreach($ads as $ad)
                        <div class="col-md-6 mt-4">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="w-25 text-center">
                                        <img src="{{$ad->image}}" class="img-fluid mb-4" style="height: 100px">
                                    </div>
                                    <div class="w-75 mr-auto text-center">
                                        <h1>{{$ad->title}}</h1>
                                        <p>{{$ad->description}}</p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="alert alert-default-primary">1inch.exchanger-app.io</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endauth
<section class="site-section" id="gallery-section" data-aos="fade">


    <div class="container">

        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Gallery</h2>
            </div>
        </div>



        <div id="posts" class="row no-gutter">
            <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_1.jpg')}}" class="item-wrap fancybox">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_1.jpg')}}">
                </a>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_2.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_2.jpg')}}">
                </a>
            </div>

            <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_3.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_3.jpg')}}">
                </a>
            </div>

            <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">

                <a href="images/img_4.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_4.jpg')}}">
                </a>

            </div>

            <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_5.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_5.jpg')}}">
                </a>
            </div>

            <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_1.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_1.jpg')}}">
                </a>
            </div>

            <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_2.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_2.jpg')}}">
                </a>
            </div>

            <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_3.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_3.jpg')}}">
                </a>
            </div>

            <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_4.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_4.jpg')}}">
                </a>
            </div>

            <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_5.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_5.jpg')}}">
                </a>
            </div>

            <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_1.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_1.jpg')}}">
                </a>
            </div>

            <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/img_2.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset('assets/front/images/img_2.jpg')}}">
                </a>
            </div>


        </div>
    </div>

</section>

<section class="site-section" id="faq-section">
    <div class="container">

        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">How It Works</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas fugiat molestiae eligendi repudiandae error?</p>
            </div>
        </div>

        <div class="row align-items-lg-center" >
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                <div class="owl-carousel slide-one-item-alt">
                    <img src="{{asset('assets/front/images/img_1.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{asset('assets/front/images/img_2.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{asset('assets/front/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="custom-direction">
                    <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
                </div>

            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                <div class="owl-carousel slide-one-item-alt-text">
                    <div>
                        <h2 class="section-title mb-3">01. Online Applications</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum
                            neque voluptas?</p>

                        <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                    </div>
                    <div>
                        <h2 class="section-title mb-3">02. Get an approval</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum neque voluptas?</p>
                        <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                    </div>
                    <div>
                        <h2 class="section-title mb-3">03. Card delivery</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore sapiente labore eius ullam? Iusto?</p>

                        <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section class="site-section" id="about-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                <figure class="circle-bg">
                    <img src="{{asset('assets/front/images/img_4.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">


                <div class="row">



                    <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                            <div>
                                <h3>Bank Loan</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="mb-0"><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                            <div>
                                <h3>Banking Consulation </h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p class="mb-0"><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>
</section>

<section class="site-section" id="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Our Blog</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="{{asset('assets/front/images/img_1.jpg')}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Banking is good for business? Why?</a></h2>
                    <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    <p><a href="#">Continue Reading...</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="{{asset('assets/front/images/img_4.jpg')}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Banking is good for business? Why?</a></h2>
                    <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    <p><a href="#">Continue Reading...</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="{{asset('assets/front/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Banking is good for business? Why?</a></h2>
                    <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    <p><a href="#">Continue Reading...</a></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="site-section bg-light" id="contact-section" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Contact Us</h2>
            </div>
        </div>
        <div class="row mb-5">



            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-room d-block h2 text-primary"></span>
                    <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-phone d-block h2 text-primary"></span>
                    <a href="#">+1 232 3235 324</a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-0">
                    <span class="icon-mail_outline d-block h2 text-primary"></span>
                    <a href="#">youremail@domain.com</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">



                <form action="#" class="p-5 bg-white">

                    <h2 class="h4 text-black mb-5">Contact Form</h2>

                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">First Name</label>
                            <input type="text" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Last Name</label>
                            <input type="text" id="lname" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Subject</label>
                            <input type="subject" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</section>
@endsection
