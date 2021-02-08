@if(!\Illuminate\Support\Facades\Request::is('user/*'))
<div class="site-blocks-cover overlay" style="background-image: url({{asset('assets/front/images/hero_2.jpg')}});" data-aos="fade" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">


            <div class="col-md-10 mt-lg-5 text-center">
                <div class="single-text owl-carousel">
                    <div class="slide">
                        <h1 class="text-uppercase" data-aos="fade-up">Banking Solutions</h1>
                        <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>
                        </div>
                    </div>

                    <div class="slide">
                        <h1 class="text-uppercase" data-aos="fade-up">Financing Solutions</h1>
                        <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>
                        </div>
                    </div>

                    <div class="slide">
                        <h1 class="text-uppercase" data-aos="fade-up">Savings Accounts</h1>
                        <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
    </a>
</div>
@endif
