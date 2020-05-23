    <?php include 'header.php' ?>
    <!-- Banner-Slider -->
    
    <section class="inner-banner" style="background-image: url(assets/img/about-banner.jpg);">
        <h2 class="inner-title white">ABOUT  US</h2>
    </section>

    <section class="about-section">
        <div class="container">
           
                <h2>About Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
           
        </div>
    </section>
    
    <section class="mb-5 staff-section">
        <div class="container ">
            <div class="shadow10">
                <h3 class="product-title mb-4">Meet Our Quick Lane Staff</h3>
                <div class="row">
                <?php
                    for ($x = 0; $x <= 3; $x++) {?>
                    <div class="col-lg-3 col-md-3 col-sm-3">
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
    
    <section class="mb-5 staff-section">
        <div class="container">
            <div class="shadow10">
            <h3 class="product-title mb-4">Meet Our Quick Lane Staff</h3>
            <div class="row">
                <?php
                    for ($x = 0; $x <= 3; $x++) {?>
                    <div class="col-lg-3 col-md-3 col-sm-3">
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

    <section class="mb-5 staff-section">
        <div class="container ">
            <div class="shadow10">
            <h3 class="product-title mb-4">Meet Our Sales Manager Staff</h3>
            <div class="row">
                <?php
                    for ($x = 0; $x <= 3; $x++) {?>
                    <div class="col-lg-3 col-md-3 col-sm-3">
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

    <section class="mb-5 staff-section">
        <div class="container ">
            <div class="shadow10">
                <h3 class="product-title mb-4">Meet Our Service Staff</h3>
                <div class="row">
                    <?php
                        for ($x = 0; $x <= 3; $x++) {?>
                        <div class="col-lg-3 col-md-3 col-sm-3">
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

    <section class="mb-5 timetable-section">
        <div class="container"> 
            <div class="table-scroll">
            <table width="100%" class="table shadow10">
                <thead>  
                    <tr>              
                        <th>SALES HOURS</th>
                        <th>SERVICE HOURS</th>
                        <th>PARTS HOURS</th>
                        <th>QUICK LANE HOURS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <table width="100%">
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
                            </table>
                        </td>
                        <td>
                            <table width="100%">
                                <tr>
                                    <td>Monday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>7:00 am - 6:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>8:00 am - 5:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>Closed</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table width="100%">
                                <tr>
                                    <td>Monday</td>
                                    <td>Closed</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>7:00 am - 7:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>8:00 am - 5:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>Closed</td>
                                </tr>
                            </table>
                        </td>                        
                        <td>
                            <table width="100%">
                                <tr>
                                    <td>Monday</td>
                                    <td>Closed</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>7:00 am - 9:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>7:00 am - 7:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>8:00 am - 5:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>Closed</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </section>
    
    <section class="mb-5 timetable-section">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-9 p0">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1oJFDzbsaJiuUBqLvEKChBCW0S7o&hl=en" width="100%" height="385"></iframe>
                    </div>
                    <div class="col-lg-3 bg-black">
                        <div class="location-info ">
                            <h2>OUR LOCATION</h2>
                            <p>Golf Mill Ford <br>9401 N. Milwaukee Ave.<br> Niles, IL 60714</p>
                            <p>Sales: 800-821-7659</p>
                            <p><a href="#" class="whitebtn">Get Directions</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5 contact-section">
        <div class="container ">
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
                            <td align="right" class="button-list"><input type="submit" name="submitBtn" class="submitbutton primary-bg white" value="SUBMIT"></td>
                        </tr>
                     </table>
                </div>
            </div>
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