    <?php include 'header.php' ?>
    <!-- Banner-Slider -->
    
    <section class="inner-banner" style="background-image: url(assets/img/financepage.jpg);">
        <h2 class="inner-title white">finance department </h2>
    </section>
    <section class="mb-5 mt-5 finance-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="finance-box shadowWPadding" style="background-image: url(assets/img/financebg.jpg);">
                        <div class="finance-title primary-bg white">FINANCE DEPARTMENT</div>
                        <div class="ApplyFor"><a href="#" class="btn readmore primary-bg white">Apply For Financing</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="finance-box shadowWPadding">
                        <div class="finance-title primary-bg white">OUR LOCATION</div>
                        <div class="location-info">                            
                            <p>Golf Mill Ford <br>9401 N. Milwaukee Ave.<br> Niles, IL 60714</p>
                            <p>Sales: 800-821-7659</p>
                            <i class="fa fa-map-marker"></i>
                            <p><a href="#" class="whitebtn">Get Directions</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="finance-box shadowWPadding">
                        <div class="finance-title primary-bg white">OUR LOCATION</div>
                        <table width="100%" class="table finance-table">
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>9:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>9:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>9:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>9:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>9:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>9:00 am - 7:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>Closed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-5 contact-section">
        <div class="container">
            <div class="shadow10">
                <h3 class="product-title mb-2">Finance Steps</h3>
                <div id="exTab1" class="car-product-tab">
                    <ul class="car-tab-wrapper nav nav-pills">
                        <li>
                            <a class="active" href="#one" data-toggle="tab">Get Pre-Approved</a>
                        </li>
                        <li>
                            <a href="#two" data-toggle="tab">Get Pre-Approved</a>
                        </li>  
                        <li>
                            <a href="#two" data-toggle="tab">Payment Calculator</a>
                        </li>
                        <li>
                            <a href="#two" data-toggle="tab">View Inventory</a>
                        </li>
                    </ul>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="one">
                            <table width="100%" class="FinanceSteps">
                                    <tr>
                                        <td>
                                            <input class="textbox black" type="text" id="FName" name="" maxlength="" placeholder="First Name">
                                        </td>
                                        <td>
                                            <input class="textbox black" type="text" id="Lname" name="" maxlength="" placeholder="Last Name">
                                        </td>
                                        <td>
                                            <input class="textbox black" type="email" id="Email" name="" maxlength="" placeholder="Email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="textbox black" type="text" id="Phone" name="" maxlength="" placeholder="Phone Number"></td>
                                        <td><input class="textbox black" type="text" id="Zipcode" name="" maxlength="" placeholder="Zipcode"></td>
                                        <td width="33%">
                                            <select id="State" class="textbox black">
                                                <option>State</option>
                                                <option>AL</option>
                                                <option>AL</option>
                                                <option>AL</option>
                                                <option>AL</option>
                                                <option>AL</option>
                                                <option>AL</option>
                                                <option>AL</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="textbox black" type="text" id="City" name="" maxlength="" placeholder="City"></td>
                                        <td colspan="2">
                                            <textarea  name="comments-617" id="comments-617" placeholder="Message" class="textbox black"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><p><a href="#">Terms & Conditions</a></p></td>
                                        <td align="right" class="button-list"><input type="submit" name="submitBtn" class="submitbutton primary-black-btn white" value="NEXT"></td>
                                    </tr>
                             </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--  Service Your Car   -->
    <section class="mb-5 staff-section">
        <div class="container ">
            <div class="shadow10">
                <h3 class="product-title mb-4">Meet Our Finance Staff</h3>
                <div class="row">
                    <?php
                        for ($x = 0; $x <= 3; $x++) {?>
                        <div class="col-lg-3 col-md-3">
                            <div class="staff-box">
                                <div class="staffimg">
                                    <img src="./assets/img/placeholder-staff.jpg" alt="" />
                                </div>
                                <div class="staff-detail text-center">
                                    <h4 class="staff-name">Staff Name</h4>
                                    <p class="staff-position">Owner</p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>



    <!-- contact section -->

    <section class="mb-5 contact-section">
        <div class="container">
            
            <div class="shadow10">
                <div class="container-inner">
                    <h2>Contact Information</h2>
                    <table width="100%">
                        <tr>
                            <td>
                                <input class="textbox black" type="text" id="FName" name="" maxlength="" placeholder="First Name*">
                            </td>
                            <td>
                                <input class="textbox black" type="text" id="LName" name="" maxlength="" placeholder="last Name*">
                            </td>
                        </tr>
                        <tr>
                            <td><input class="textbox black" type="email" id="Email*" name="" maxlength="" placeholder="Email"></td>
                            <td><input class="textbox black" type="text" id="Phone*" name="" maxlength="" placeholder="Phone Number"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea rows="4" name="comments-617" id="comments-617" placeholder="Message" class="textbox black"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><i>*Required Field</i></td>
                            <td align="right" class="button-list"><input type="submit" name="submitBtn" class="submitbutton primary-black-btn white" value="SUBMIT"></td>
                        </tr>
                     </table>
                </div>
            </div>
            
        </div>
    </section>

    <!--  Testimonial - Slider   -->
    <section class="testimonial-section pt-5 pb-5">
        <div class="container ">
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