    <?php include 'header.php' ?>
    <!-- Banner-Slider -->
    
    <section class="inner-banner" style="background-image: url(assets/img/service-banner.jpg);">
        <h2 class="inner-title white">SERVICES </h2>
    </section>

    <!--  Service Your Car  -->
    <section class="servicelist-section">
        <div class="container">
            <h3 class="product-title mb-4">Service Your Car</h3>
            <div class="row">
                <?php
                    for ($x = 0; $x <= 8; $x++) {?>
                    <div class="col-lg-4 col-md-6">
                        <div class="servives-list shadow10 p0">
                            <div class="servicesimg">
                                <a href="#">
                                    <img src="./assets/img/services-1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="services-detail">
                                <h4>AC and Car Heating</h4>
                                <p>Car AC systems have components that require love and attention to avoid drying out and cracking. Th...</p>
                                <div class="my-0 button-list">
                                    <a href="#" class="border-btn primaryBorderbtn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <div class="text-center col-lg-12">
                    <ul class="c-pagination">
                        <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>   

    <!--  Business Hours   -->
    <section class="mb-5 srpage timetable-section">
        <div class="container">  
            <h3 class="product-title mb-4">Business Hours</h3>
            <table width="100%" class="table shadowWPadding">
                <thead>  
                    <tr>              
                        <th>Sales</th>
                        <th>Service</th>                
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <table width="100%">
                                <tr>
                                    <td width="100px">Monday</td>
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
                                    <td width="100px">Monday</td>
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
                    </tr>
                </tbody>
            </table> 
        </div>
    </section>

    <!--  Schedule an Appointment   -->
    <section class="mb-5 contact-section">
     
        <div class="container">
                <div class="shadow10 appointment">
                    <div class="container-inner">
                        <h2>Schedule an Appointment</h2>
                        <p>We will respond to confirm your appointment. If the time you have requested is<br> booked, we will find a convenient alternate time.</p>
                        
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
                                <td colspan="2"><label>Preferred Appointment</label></td>
                            </tr>
                            <tr>
                                <td><input class="textbox black" type="text" id="Date" placeholder="Date"></td>
                                <td><input class="textbox black" type="text" id="time" name="" maxlength="" placeholder="Time"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label>Service & Car Details</label></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p0">
                                    <table width="100%">
                                        <tr>
                                            <td width="33%">
                                                <select id="servicetype" class="textbox black">
                                                    <option>servicetype</option>
                                                    <option>AC and Car Heating</option>
                                                    <option>Belts & Hoses</option>
                                                    <option>Brakes & Brake Repair</option>
                                                    <option>Car Battery & Charging</option>
                                                    <option>Check Engine Light</option>
                                                    <option>Mufflers, Emissions</option>
                                                    <option>Oil Change</option>
                                                    <option>Radiator</option>
                                                    <option>Steering, Suspension</option>
                                                    <option>Tires & Tire Repair</option>
                                                    <option>Visibility</option>
                                                </select>
                                            </td>
                                            <td><input class="textbox black" type="text" id="VIN" placeholder="VIN # (Optional)"></td>
                                            <td><input class="textbox black" type="text" id="Mileage" placeholder="Mileage (Optional)"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p0">
                                    <table width="100%">
                                        <tr>
                                            <td width="33%">
                                            <select id="Year" class="textbox black">
                                            <option>Year</option>
                                            <option>Belts & Hoses</option>
                                            <option>Brakes & Brake Repair</option>
                                            <option>Car Battery & Charging</option>
                                            <option>Check Engine Light</option>
                                            <option>Mufflers, Emissions</option>
                                            <option>Oil Change</option>
                                            <option>Radiator</option>
                                            <option>Steering, Suspension</option>
                                            <option>Tires & Tire Repair</option>
                                            <option>Visibility</option>
                                            </select>
                                            </td>
                                            <td width="33%">
                                            <select id="Make" class="textbox black">
                                            <option>Make</option>
                                            <option>Acura</option>
                                            <option>Alfa Romeo</option>
                                            <option>Aston Martin</option>
                                            <option>Audi</option>
                                            <option>Bentley</option>
                                            <option>BMW</option>
                                            <option>Buick</option>
                                            <option>Cadillac</option>
                                            <option>Chevrolet</option>
                                            <option>Chrysler</option>
                                            </select>
                                            </td>
                                            <td width="33%">
                                            <select id="Model" class="textbox black">
                                            <option>Model</option>
                                            <option>Belts & Hoses</option>
                                            <option>Brakes & Brake Repair</option>
                                            <option>Car Battery & Charging</option>
                                            <option>Check Engine Light</option>
                                            <option>Mufflers, Emissions</option>
                                            <option>Oil Change</option>
                                            <option>Radiator</option>
                                            <option>Steering, Suspension</option>
                                            <option>Tires & Tire Repair</option>
                                            <option>Visibility</option>
                                            </select>
                                            </td>
                                        </tr>
                                     </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea rows="4" name="comments-617" id="comments-617" placeholder="Message" class="textbox black"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><i>*Required Field</i></td>
                                <td align="right" class="button-list">
                                    <input type="submit" name="submitBtn" class="submitbutton primary-black-btn white" value="Schedule Appointment">
                                </td>
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