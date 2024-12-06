@extends('layouts.app')
       
       
        <!-- header begin -->
       

        
        <!-- header close -->


        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="de-carousel" class="no-top no-bottom carousel slide text-light carousel-fade" data-mdb-ride="carousel">
              <!-- Inner -->
              <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active jarallax" data-video-src="mp4:video/local-video-1.mp4">
                        <div class="mask">
                            <div class="d-content relative z1000">
                                <div class="wm wm-carousel">
                                    <div class="images-carousel-group wow fadeInRight">
                                        <img src="images/gallery/gallery-item-1.jpg" alt="">
                                        <img src="images/gallery/gallery-item-2.jpg" alt="">
                                        <img src="images/gallery/gallery-item-3.jpg" alt="">
                                        <img src="images/gallery/gallery-item-4.jpg" alt="">
                                        <img src="images/gallery/gallery-item-5.jpg" alt="">
                                        <img src="images/gallery/gallery-item-6.jpg" alt="">
                                        <img src="images/gallery/gallery-item-7.jpg" alt="">
                                    </div>
                                </div>                  
                                <div class="v-center">
                                    <div class="container z1000">
                                        <div class="row align-items-center text-center"> 
                                            <div class="spacer-double"></div>
                                            <div class="spacer-double"></div>

                                            <div class="col-lg-12">
                                                <h1>Your New Perfect Style</h1>                                                
                                            </div>

                                            <div class="col-lg-6 offset-lg-3">
                                                <p class="lead">MasterCutz is a Premium Brand for Grooming, Beauty, and Skincare</p>
                                                <a class="btn-main" href="{{('services')}}">Our Services</a>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="de-gradient-edge-bottom"></div>
                    </div>
                    <!-- Single item -->                    
                
                </div>
              <!-- Inner -->

            </section>

            <section aria-label="section" class="no-top no-bottom">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" data-jarallax-element="-50">
                            <p class="lead big wow fadeInUp">MasterCutz is a distinguished brand dedicated to transforming grooming, 
                                beauty, and skincare into an art form. Conveniently located at Sons of David Mall Plaza,
                                 Shop C3, by Cosmilla Hotels Junction, MasterCutz combines innovation, expertise, 
                                 and an unwavering commitment to quality, delivering services tailored to the unique needs of its clientele.

                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-trending" class="pt80">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <h2 class="wow fadeIn">Trending Styles</h2>
                            <div class="de-separator"></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" data-jarallax-element="-20">
                            <div class="d-carousel wow fadeInRight" >
                                <div id="item-carousel-big" class="owl-carousel no-hide owl-center" data-wow-delay="1s">
                                    <div class="c-item">                            
                                        <a href="#">
                                            <span class="c-item_info">
                                                <span class="c-item_title">Slick Back</span>
                                                <span class="c-item_wm">#1</span>
                                            </span>
                                        
                                            <div class="c-item_wrap">
                                                <img src="images/hairstyles/1.jpg" class="lazy img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="c-item">                            
                                        <a href="#">
                                            <span class="c-item_info">
                                                <span class="c-item_title">Classic Quiff</span>
                                                <span class="c-item_wm">#2</span>
                                            </span>
                                        
                                            <div class="c-item_wrap">
                                                <img src="images/hairstyles/2.jpg" class="lazy img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="c-item">                            
                                        <a href="#">
                                            <span class="c-item_info">
                                                <span class="c-item_title">Pompadour</span>
                                                <span class="c-item_wm">#3</span>
                                            </span>
                                        
                                            <div class="c-item_wrap">
                                                <img src="images/hairstyles/3.jpg" class="lazy img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>  

                                    <div class="c-item">                            
                                        <a href="#">
                                            <span class="c-item_info">
                                                <span class="c-item_title">Fringe</span>
                                                <span class="c-item_wm">#4</span>
                                            </span>
                                            
                                            <div class="c-item_wrap">
                                                <img src="images/hairstyles/4.jpg" class="lazy img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>                      


                                    <div class="c-item">                            
                                        <a href="#">
                                            <span class="c-item_info">
                                                <span class="c-item_title">Curly Fade</span>
                                                <span class="c-item_wm">#5</span>
                                            </span>
                                            
                                            <div class="c-item_wrap">
                                                <img src="images/hairstyles/5.jpg" class="lazy img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="c-item">                            
                                        <a href="#">
                                            <span class="c-item_info">
                                                <span class="c-item_title">Undercut</span>
                                                <span class="c-item_wm">#6</span>
                                            </span>
                                            
                                            <div class="c-item_wrap">
                                                <img src="images/hairstyles/6.jpg" class="lazy img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                    <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                                    <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top jarallax">
                <div class="de-gradient-edge-top"></div>
                <img src="images/background/1.jpg" class="jarallax-img" alt="">
                <div class="container relative z1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-jarallax-element="-30">
                            <img src="images/misc/man-2.png" class="img-fluid wow fadeInRight" alt="">
                        </div>
                        <div class="col-lg-6" data-jarallax-element="-60">
                            <h2 class="wow fadeInRight" data-wow-delay=".3s">We’ll  Crafting <span class="id-color">Confidence</span> Through Sharp Style</h2>
                            <p class="wow fadeInRight" data-wow-delay=".4s">We take pride in providing top-notch grooming services that blend classic techniques with modern trends. Step into our warm and inviting space, where you'll find a team of skilled barbers dedicated to enhancing your style and confidence.</p>
                            <a href="book.html" class="btn-main wow fadeInRight" data-wow-delay=".5s">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom"></div>
            </section>

            <section aria-label="section" class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="wow fadeIn">Our Services</h2>
                            <div class="de-separator"></div>
                        </div>
                        <div class="col-lg-3 text-center" data-jarallax-element="-20">
                            <div class="de-box-a">
                                <div class="d-image">
                                    <img src="images/services/1.jpg" alt="">
                                </div>
                                <div class="d-deco-1"></div>
                                <div class="d-deco-2"></div>
                            </div>
                            <div class="spacer-20"></div>
                            <h4>Haircuts</h4>
                        </div>

                        <div class="col-lg-3 text-center" data-jarallax-element="-60">
                            <div class="de-box-a">
                                <div class="d-image">
                                    <img src="images/services/2.jpg" alt="">
                                </div>
                                <div class="d-deco-1"></div>
                                <div class="d-deco-2"></div>
                            </div>
                            <div class="spacer-20"></div>
                            <h4>Beard</h4>
                        </div>

                        <div class="col-lg-3 text-center" data-jarallax-element="-40">
                            <div class="de-box-a">
                                <div class="d-image">
                                    <img src="images/services/3.jpg" alt="">
                                </div>
                                <div class="d-deco-1"></div>
                                <div class="d-deco-2"></div>
                            </div>
                            <div class="spacer-20"></div>
                            <h4>Shaving</h4>
                        </div>

                        <div class="col-lg-3 text-center" data-jarallax-element="-10">
                            <div class="de-box-a">
                                <div class="d-image">
                                    <img src="images/services/4.jpg" alt="">
                                </div>
                                <div class="d-deco-1"></div>
                                <div class="d-deco-2"></div>
                            </div>
                            <div class="spacer-20"></div>
                            <h4>Razor Blade</h4>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="text-center">
                        <a href="services.html" class="btn-main">All Services &amp; Prices</a>
                    </div>
                </div>
            </section>

            <section class="jarallax no-top">
                <div class="de-gradient-edge-top"></div>
                <img src="images/background/1.jpg" class="jarallax-img" alt="">
                <div class="container relative z1000">
                    <div class="row gx-5">
                        <div class="col-lg-6 text-center" data-jarallax-element="-50">
                            <div class="d-sch-table">
                                <h2 class="wow fadeIn">We're Open</h2>
                                <div class="de-separator"></div>
                                <div class="d-col">
                                    <div class="d-title">Mon - Thu</div>
                                    <div class="d-content id-color">7:30AM - 6:30PM</div>
                                </div>
                                <div class="d-col">
                                    <div class="d-title">Friday</div>
                                    <div class="d-content id-color">8:30AM - 8:30PM</div>
                                </div>
                                <div class="d-col">
                                    <div class="d-title">Sat - Sun</div>
                                    <div class="d-content id-color">9:30AM - 5:30PM</div>
                                </div>
                                <div class="d-deco"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 text-center" data-jarallax-element="-100">
                            <div class="d-sch-table">
                                <h2 class="wow fadeIn">Location</h2>
                                <div class="de-separator"></div>
                                <div class="d-col">
                                    <div class="d-title">Sons of David Mall Plaza,</div>
                                    <div class="d-content id-color">Shop C3 by Cosmilla Hotels Junction, Awka</div>
                                </div>
                                <div class="d-col">
                                    <div class="d-title">Phone</div>
                                    <div class="d-content id-color">+234 912 878 1021</div>
                                </div>
                                <div class="d-col">
                                    <div class="d-title">Email</div>
                                    <div class="d-content id-color">contact@masterCutz</div>
                                </div>
                                <div class="d-deco"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom"></div>
            </section>

            <section aria-label="section" class="no-top">
                <div class="wow fadeInRight d-flex">
                  <div class="de-marquee-list wow">
                    <div class="d-item">
                      <span class="d-item-txt">Haircut</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Spa Services</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Massage Therapy</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Teeth Polishing & Scaling</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Nail Care</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Hair Color</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Facial</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Masage</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                      <span class="d-item-txt">Hair Wash</span>
                      <span class="d-item-display">
                        <i class="d-item-block"></i>
                      </span>
                     </div>
                  </div>
                </div>
            </section>
            
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
   
    
