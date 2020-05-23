    <?php include 'header.php' ?>
    
    
    <!-- Banner-Slider -->
    
	<div class="banner">
		<ul class="bannerSlider">
          <!--  1. slide  -->
					<li class="slide" style="background-image: url(assets/img/slide-2.jpg);">
                        <div class="slide__text">
                            <h2>Buy Your New Car Or Used Car.</h2>
                            <p>We have more than a thousand cars for you to choose.</p>
                            <p><a href="#" class="btn readmore primary-bg"> Read More</a></p>
                        </div>
                        <div class="slide__image" >
                            
                        </div>
					</li>
          <!--  2. slide  -->
					<li class="slide" style="background-image: url(assets/img/slide-2.jpg);">
                        <div class="slide__text">
                            <h2>Buy Your New Car Or Used Car.</h2>
                            <p>We have more than a thousand cars for you to choose.</p>
                            <p><a href="#" class="btn readmore primary-bg"> Read More</a></p>
                        </div>
					</li>
          <!--  3. slide  -->
					<li class="slide"  style="background-image: url(assets/img/kia-seltos.jpg);">
                        <div class="slide__text">
                            <h2>Buy Your New Car Or Used Car.</h2>
                            <p>We have more than a thousand cars for you to choose.</p>
                            <p><a href="#" class="btn readmore primary-bg"> Read More</a></p>
                        </div>
                       
					</li>
          <!--  4. slide  -->
					<li class="slide" style="background-image: url(assets/img/kia-seltos.jpg);">
                        <div class="slide__text">
                            <h2>Buy Your New Car Or Used Car.</h2>
                            <p>We have more than a thousand cars for you to choose.</p>
                            <p><a href="#" class="btn readmore primary-bg"> Read More</a></p>
                        </div>                       
					</li>       
				</ul>			
	</div>
    
    <!--  Homepage-Form  -->
    <section class="FindCarForm mb-5">
        <div class="container">
            <div class="homeform-wrapper primary-bg white-text">                   

                    <div class="homeform col-lg-12">
                                            <h3 class="white mb-3">Find Your Dream Car</h3>
                        <form class="row" action="#" method="get">
                            <input type="hidden" id="style1_nonce" name="style1_nonce" value="e76a66327f">
                            <div class="col-md-3 mb-4">
                                <div class="select">
                                    <select name="location" class="textbox">
                                        <option value="">
                                            Select Location </option>
                                        <option value="austin-usa">Austin, USA</option>
                                        <option value="colorado-usa">Colorado, USA</option>
                                        <option value="san-mateo-usa">San Mateo, USA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="select">
                                    <select name="autobrand" class="textbox">
                                        <option value="">
                                            Select Brand </option>
                                        <option value="audi">Audi</option>
                                        <option value="bmw">BMW</option>
                                        <option value="ford">Ford</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="select">
                                    <select class="textbox" name="fueltype">
                                        <option value="">Select Model</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Petrol">Petrol </option>
                                        <option value="Autogas">Autogas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="select">
                                    <select class="textbox" name="modelyear">
                                        <option value="">
                                            Year of Model </option>
                                        <option value="2010">2010</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 form_price_col home-range-slider">
                                <label class="form-label">
                                    Price Range ($)
                                </label>
                                <input type="text" class="js-range-slider" name="my_range" value=""
                                    data-type="double"
                                    data-min="0"
                                    data-max="1000"
                                    data-from="100"
                                    data-to="500"
                                    data-hide_min_max="true"
                                    data-grid="false"
                                    data-skin="round"
                                    data-prefix="$"
                                    data-values_separator=" to "/>
                               
                            </div>
                            <div class="col-md-3">
                                <div class="select">
                                    <select class="textbox" name="autotype">
                                        <option value="">
                                            Type of Car </option>
                                        <option value="new">NEW</option>
                                        <option value="old">OLD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 input_col_wp">
                                <button type="submit" class="btn-block" name="searchauto">
                                    <i class="fa fa-search" aria-hidden="true"></i>Search Car 
                                </button>
                            </div>
                        </form>                      
                    </div>
                </div>
        </div>
    </section>
    
    <!--  Recommended Cars For You  -->
    <section class="mb-5 car-slider-common">
        <div class="container ">
            <div class="shadow10">
                <h3 class="product-title mb-4">Recommended Cars For You</h3>
                <div class="product-slider row">
                   <?php
                    for ($x = 0; $x <= 10; $x++) {?>
                    <div class="card-grid shadowWPadding">
                        <div class="imgTopRound">
                            <img class="" title="Maruti Swift" alt="Maruti Swift" src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Swift/6318/1572069250647/front-left-side-47.jpg" data-lazy="true">
                        </div>
                        <div class="holder card-text">
                            <a title=" Toyota Yaris " class="title" href="/toyota/yaris"> Toyota Yaris </a>
                            <h4 class="price">$30,995</h4>
                            <p class="my-0"><a href="#" class="border-btn primaryBorderbtn"> View Year End Offers</a></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <!--  Featured Car For You  -->
    <section class="mb-5 car-slider-common">
        <div class="container">
            <div class="shadow10">
            <h3 class="product-title mb-4">Featured Car For You</h3>
            <div class="product-slider row">
               <?php
                for ($x = 0; $x <= 10; $x++) {?>
                <div class="card-grid shadowWPadding">
                    <div class="imgTopRound">
                        <img class="hover" title="Audi A3" alt="Audi A3" src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Audi/Audi-A3/5749/front-left-side-47.jpg">
                    </div>
                    <div class="holder card-text">
                        <a title=" Toyota Yaris " class="title" href="/toyota/yaris"> Toyota Yaris </a>
                        <h4 class="price">$30,995</h4>
                        <p class="my-0"><a href="#" class="border-btn primaryBorderbtn"> View Year End Offers</a></p>
                    </div>
                </div>
                <?php }?>
            </div>
            </div>
        </div>
    </section>
    
    <!--  The most searched cars  -->
    <section class="mb-5 car-slider-common">
        <div id="exTab1" class="container  ">
            <div class="shadow10">
                <h3 class="product-title mb-2">The most searched cars</h3>
                <div class="car-product-tab">
                    <ul class="car-tab-wrapper nav nav-pills">
                        <li title="Hatchback">
                            <a class="active" href="#one" data-toggle="tab">Hatchback</a>
                        </li>
                        <li title="Sedan">
                            <a href="#two" data-toggle="tab">Sedan</a>
                        </li>
                        <li title="SUV" class="">
                            <a href="#three" data-toggle="tab">SUV</a> 
                        </li>
                        <li title="MUV" class="">
                            <a href="#for" data-toggle="tab">MUV</a>
                        </li>
                        <li title="Luxury" class="">
                            <a href="#five" data-toggle="tab">Luxury</a>
                        </li>
                    </ul>
                </div>
                <div  class="tab-content clearfix">
                    <div class="product-slider row  tab-pane active" id="one">
                       <?php
                        for ($x = 0; $x <= 10; $x++) {?>
                            <div class="card-grid shadowWPadding">
                                <div class="imgTopRound">
                                    <img class="hover imageTransition hide active" title="Toyota Yaris" alt="Toyota Yaris" src="https://stimg.cardekho.com/images/carexteriorimages/360x240/Toyota/Toyota-Yaris/047.jpg" data-lazy="true">
                                </div>
                                <div class="holder card-text">
                                    <a title=" Toyota Yaris " class="title" href="/toyota/yaris"> Toyota Yaris </a>
                                    <h4 class="price">$30,995</h4>
                                    <p class="my-0"><a href="#" class="border-btn primaryBorderbtn"> View Year End Offers</a></p>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--  The most searched cars  -->
    <section class="mb-5 car-slider-common">
        <div class="container">
            <div class="shadow10">
                <h3 class="product-title mb-2">Trusted used cars by budget</h3>
                <div class="car-product-tab">
                    <ul class="car-tab-wrapper" data-track-section="tab">
                        <li title="Hatchback" class="car-tab-active">$50K - $100k</li>
                        <li title="Sedan">$110K - $150k</li>
                        <li title="SUV" class="">$160K - $200K</li>
                    </ul>
                </div>
                <div class="product-slider row">
                   <?php
                    for ($x = 0; $x <= 10; $x++) {?>
                        <div class="card-grid shadowWPadding">
                            <div class="imgTopRound">
                                <img class="" title="Maruti Wagon R" alt="Maruti Wagon R" src="https://stimg.cardekho.com/images/car-images/320x224/Maruti/Maruti-Wagon-R/6741/1548234622027/front-left-side-47.jpg" data-lazy="true">
                            </div>
                            <div class="holder card-text">
                                <a title=" Toyota Yaris " class="title" href="/toyota/yaris"> Toyota Yaris </a>
                                <h4 class="price">$30,995</h4>
                                <p class="my-0"><a href="#" class="border-btn primaryBorderbtn"> View Year End Offers</a></p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <!--  News on cars that you like  -->
    <section class="car-slider-common news-section pt-5 pb-5">
        <div class="container">
            <h2 class="lg-title mb-4 text-center">News on cars that you like</h2>            
            <div class="product-slider row">
               <?php
                for ($x = 0; $x <= 10; $x++) {?>
                    <div class="card-grid shadowWPadding">
                        <div class="imgTopRound">
                            <img title="" alt="Audi A3" src="https://stimg2.cardekho.com/images/carNewsimages/userimages/23803/1559542162247/Audi.jpg?tr=w-360" data-lazy="true">
                        </div>
                        <div class="holder card-text">
                            <a title=" Toyota Yaris " class="news-title" href="/toyota/yaris">MG Motor India And Exicom Tie Up To
Reuse Old Batteries Of The ZS EV </a>
                            <p class="news-des">The old batteries will be evaluated, disassembled and reused for non-automotive applications once their lifecycle end</p>
                            <div class="news-date">Dhruv, Nov 18, 2019</div>
                        </div>
                    </div>
                <?php }?>                
            </div>
            <p class="mt-4 text-center"><a href="#" class="black-btn primary-black-btn">View All Letest News</a></p>
        </div>
    </section>
    
    <!--  Testimonial - Slider   -->
    <section class="testimonial-section pt-5 pb-5">
        <div class="container">
            <div class="container_inner">
                <h2 class="lg-title mb-4 text-center white">What Our Client Say</h2> 
                <div class="testimonial-slider row">
                   <?php
                    for ($x = 0; $x <= 10; $x++) {?>
                        <div class="text-center white testi-wrapper">
                            <div class="rounded-img">
                                <img title="" alt="user" src="./assets/img/placeholder-user.jpg">
                            </div>
                            <div class="testimonial-info">                                
                                <h4 class="white">Donald Brooks</h4>
                                <p>CEO of xzy company</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt.</p>
                            </div>
                        </div>
                    <?php }?>                
                </div>
                </div>
         </div>
    </section>


    <?php include 'footer.php' ?>