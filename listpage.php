    <?php include 'header.php' ?>
    
    <div class="breadcrumb">
        <div class="container">
            <a title="Home" href="index.php">
                <span itemprop="name">Home</span>
            </a>
            <a title="Used Cars"  href="listpage.php">
                <span itemprop="name">Used Cars</span>
            </a>
            <span>Ahmedabad</span>
        </div>
    </div>

    <!-- Banner-Slider -->
    <section>
        <div class="container UsedCarListing">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 order2">
                    <div class="list-right filterPanel ">
                         <!--  Recommended Cars For You  -->
                        <section class="mb-5">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-6 col-md-6">
                                    <span class="count">1152</span>
                                    <h1 class="truncate">Used Cars for Sale Burbank IL | Used Trucks Chicago </h1>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 sortBy">
                                    <div class="ReactTypeahead inputfield gs_ta smallInput" data-gsmtl-container="true">
                                        <input type="text" id="sortbyName" data-id="sortbyName" name="sortbyName52aaf72c63388" maxlength="50" data-gsv-type="required" data-gsv-min-length="50" data-gsf-name="sortbyName" data-type="sortbyName" aria-label="Select City" data-move-top="0" autocomplete="new-password" class="" readonly="" value="Relevance">
                                        <label for="sortbyName" class=" active">Sort by :</label>
                                    </div>
                                    <div class="viewTypeWrap">
                                        <span onclick="viewChange('grid',this)" class="viewType">
                                            <i class="fa fa-th-large" aria-hidden="true"></i>
                                        </span>
                                        <span onclick="viewChange('list',this)" class="viewType active">
                                            <i class="fa fa-list-ul" aria-hidden="true"></i>
                                        </span>
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="sortedItem">
                                        <div class="mobileCarousel">
                                            <ul class="clearfilter">
                                                <li>0 Lakh - 7 Lakh <span value="0 Lakh - 7 Lakh">×</span></li>
                                                <li class="clearall"><span class="linkBlack hover">Clear All Filters</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="griditems" class="griditems" style="display:none;">
                                <div class="row">
                                   <?php
                                    for ($x = 0; $x <= 10; $x++) {?>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="card-grid shadowWPadding mb-4">
                                            <div class="imgTopRound">
                                                <img class="" title="2015 Honda City i VTEC SV" alt="" src="https://images10.gaadicdn.com/usedcar_image/320x240/used_car_1903667_1577185210.jpg?tr=w-266,e-sharpen">
                                                <div class="ds-price-bar trans-primary-color-background">
                                                     <div class="checkbox">
                                                      <input class="magic-checkbox" type="checkbox" name="layout" id="compare_<?php echo $x; ?>">
                                                      <label for="compare_<?php echo $x; ?>">Compare</label>
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="holder card-text">
                                                <a title=" Toyota Yaris " class="title" href="/toyota/yaris"> Toyota Yaris </a>
                                                <h4 class="price">$30,995</h4>
                                                 <ul class="dot-list-ul"> 
                                                    <li>37,191 Miles</li>
                                                    <li>Stock Number 16665</li>
                                                </ul>
                                                <div class="my-0 buttonHolder">
                                                    <a href="#" class="border-btn primaryBorderbtn"> View Year End Offers </a>
                                                    <span class="heartLink"><i class="fa fa-heart-o"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div id="listitems" class="listitems">
                                <div class="row">
                                   <?php
                                    for ($x = 0; $x <= 10; $x++) {?>
                                    <div class="col-lg-12">
                                        <div class="card-grid shadowWPadding mb-4 ">
                                            <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 pr-0">
                                                <div class="imgTopRound">
                                                    <img class="" title="2015 Honda City i VTEC SV" alt="" src="https://images10.gaadicdn.com/usedcar_image/320x240/used_car_1903667_1577185210.jpg?tr=w-266,e-sharpen">
                                                    <div class="ds-price-bar primary-bg">
                                                        <div class="checkbox">
                                                            <input class="magic-checkbox" type="checkbox" name="layout" id="list_compare_<?php echo $x; ?>">
                                                            <label for="list_compare_<?php echo $x; ?>">Compare</label>
                                                            <span><i class="fa fa-heart-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                <div class="holder card-text">
                                                    <div class="row">
                                                        <div class="col-lg-9 col-md-9">
                                                            <a title=" Toyota Yaris " class="title" href="/toyota/yaris">2018 Acura ILX Special Edition</a>
                                                            <h5>Backup Cam**Bluetooth**Sunroof**Heated Seats</h5> 
                                                            <ul class="list-view-ul"> 
                                                                <li>Engine: 2.4L 4 Cylinders</li>
                                                                <li>Transmission:  Automatic</li>
                                                                <li>MPG: City 25 / Hwy 35</li>
                                                                <li>Stock Number: 16665</li>
                                                                <li>VIN: 19UDE2F43JA001827</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 text-right">
                                                             <h4 class="price">$30,995</h4>
                                                             <h5 class="miles">42K Miles </h5>
                                                             <p class="color-option"><i class="fa fa-circle-o"></i>  <i class="fa fa-circle"></i></p>
                                                        </div>
                                                    </div>
                                                    <div class="my-0 button-list">
                                                        <a href="#" class="border-btn primaryBorderbtn">Special Features</a>
                                                        <a href="#" class="border-btn primaryBorderbtn">Text Us</a>
                                                        <a href="#" class="border-btn primaryBorderbtn">Details</a>
                                                        <a href="#" class="btn btn-success">Get Approved</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <aside class="sidebar-left">
                        <div class="filtersection">
                            <div class="usedCarLoction">
                                <div class="title">Show me a trusted used cars in</div>
                                <div class="posR">
                                    <i class="fa fa-map-marker"></i>
                                    <i class="fa fa-pencil"></i>
                                    <div class="searchbox" data-track-section="Search by city">
                                        <div class="ReactTypeahead">
                                            <input type="text" id="cityList" data-id="cityList" name="cityName0ea1fcb74b09a" maxlength="50" data-gsv-type="required" data-gsv-min-length="50" data-gsf-name="cityName" data-type="cityName" aria-label="Select City" data-move-top="0" autocomplete="new-password" class="textbox" value="Ahmedabad">                                           
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <ul class="sidebartoggle" id="accordionExample" role="tablist" aria-multiselectable="true">
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapseOne">Which is Year</h3>	
                                    <div id="collapseOne" class="collapse" data-parent="#accordionExample"> 
                                          <label class="form-label">Price Range ($) </label>
                                          <input type="text" class="js-range-slider" name="my_range" value=""
                                            data-skin="big"     
                                            data-type="double"
                                            data-min="1970"
                                            data-max="2020"
                                            data-from="1970"                                   
                                            data-grid="false"
                                            data-force_edges="false"
                                            data-hide_min_max="true"
                                            data-hide_from_to="true"
                                            data-block="false"
                                         />                                      
                                    </div>                            
                                </li>                                
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapseTwo">Make</h3>
                                    <div id="collapseTwo" class="collapse mb-3" data-parent="#accordionExample">
                                        <?php for ($x = 0; $x <= 10; $x++) {?>
                                            <div class="checkbox">
                                                <input class="magic-checkbox" type="checkbox" name="layout" id="make_<?php echo $x; ?>">
                                                <label for="make_<?php echo $x; ?>">Make <?php echo $x; ?></label>
                                            </div>
                                        <?php } ?>
                                        <?php /* ?>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="make_2">
                                            <label for="1">Audi</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="make_3">
                                            <label for="1">BMW</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="make_4">
                                            <label for="1">Buick</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="make_5">
                                            <label for="1">Cadillac</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="make_6">
                                            <label for="1">Chevrolet</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Chrysler</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Dodge</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">FIAT</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Ford</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">GMC</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Honda</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Hyundai</label>
                                        </div>
                                         <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">INFINITI</label>
                                        </div>
                                        <?php */ ?>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse3">Model</h3>
                                    <div id="collapse3" class="collapse mb-3" data-parent="#accordionExample">
                                        <?php for ($x = 0; $x <= 10; $x++) {?>
                                            <div class="checkbox">
                                                <input class="magic-checkbox" type="checkbox" name="layout" id="model_<?php echo $x; ?>">
                                                <label for="model_<?php echo $x; ?>">Make <?php echo $x; ?></label>
                                            </div>
                                        <?php } ?>
                                        <?php /* ?>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">3 Series</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">3 Series Gran Turismo</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">4 Series</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">5 Series</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">6 Series</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">7 Series</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">X1</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">X4</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">X5</label>
                                        </div>
                                        <?php */ ?>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse33">Trim</h3>
                                    <div id="collapse33" class="collapse mb-3" data-parent="#accordionExample">
                                        <?php for ($x = 0; $x <= 10; $x++) {?>
                                            <div class="checkbox">
                                                <input class="magic-checkbox" type="checkbox" name="layout" id="trim_<?php echo $x; ?>">
                                                <label for="trim_<?php echo $x; ?>">Trim <?php echo $x; ?></label>
                                            </div>
                                        <?php } ?>
                                        <?php /* ?>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Base</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Denali</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">King Ranch</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Lariat</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Limited</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Platinum</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Raptor</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">SLT</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">SV</label>
                                        </div>
                                        <?php */ ?>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse4">Body Type </h3>
                                    <div id="collapse4" class="collapse mb-3" data-parent="#accordionExample">
                                        <?php for ($x = 0; $x <= 10; $x++) {?>
                                            <div class="checkbox">
                                                <input class="magic-checkbox" type="checkbox" name="layout" id="body_type_<?php echo $x; ?>">
                                                <label for="body_type_<?php echo $x; ?>">Body Type <?php echo $x; ?></label>
                                            </div>
                                        <?php } ?>
                                        <?php /* ?>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Cargo Van (19)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Coupe (9)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Crossover SUV (3)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Other Body Type (40)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Passenger Van (11)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Pickup (18)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Sedan (101)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">SUV (80)</label>
                                        </div>
                                        <?php */ ?>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse5">Exterior Color</h3>
                                    <div id="collapse5" class="collapse mb-3" data-parent="#accordionExample">
                                        <?php for ($x = 0; $x <= 10; $x++) {?>
                                            <div class="checkbox">
                                                <input class="magic-checkbox" type="checkbox" name="layout" id="exterior_color_<?php echo $x; ?>">
                                                <label for="exterior_color_<?php echo $x; ?>">Exterior Color <?php echo $x; ?></label>
                                            </div>
                                        <?php } ?>
                                        <?php /* ?>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">All Color</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Aegean Blue Metallic (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Agate Black (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Alpine White (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Andorite Grey Metallic (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Arctic Ice (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Atlantis Blue Metallic (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Aurora Black (1)</label>
                                        </div>  
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Basque Red Pearl II (1)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Billet Silver Metallic Clearcoat (4)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Black (12)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Black (Charcoal) (1)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Black Clearcoat (1)</label>
                                        </div> 
                                        <?php */ ?>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse6">Interior Color </h3>
                                    <div id="collapse6" class="collapse mb-3" data-parent="#accordionExample">
                                        <?php for ($x = 0; $x <= 10; $x++) {?>
                                            <div class="checkbox">
                                                <input class="magic-checkbox" type="checkbox" name="layout" id="interior_color_<?php echo $x; ?>">
                                                <label for="interior_color_<?php echo $x; ?>">Interior Color <?php echo $x; ?></label>
                                            </div>
                                        <?php } ?>
                                        <?php /* ?>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">All Color</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="2">
                                            <label for="2">Almond (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="3">
                                            <label for="3">Ash (2)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="4">
                                            <label for="4">Beige (4)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Beige/Espresso (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Black (102)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Black Interior (1)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Black/Light Graystone (5)</label>
                                        </div>  
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Brown (3)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Brown (Beige) (1)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Brown (Tan) (1)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Charcoal (43)</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="1">
                                            <label for="1">Charcoal Black (3)</label>
                                        </div>
                                        <?php */ ?>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse7">Transmission </h3>
                                    <div id="collapse7" class="collapse mb-3" data-parent="#accordionExample">
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="transmission_1">
                                            <label for="transmission_1">Manual (57)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="transmission_2">
                                            <label for="transmission_2">Automatic (18)</label>
                                        </div>                                        
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse8">Drivetrain </h3>
                                    <div id="collapse8" class="collapse mb-3" data-parent="#accordionExample">
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="drivetrain_1">
                                            <label for="drivetrain_1">4x2 (57)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="drivetrain_2">
                                            <label for="drivetrain_2">4x4 (18)</label>
                                        </div>   
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="drivetrain_3">
                                            <label for="drivetrain_3">FWD (1) </label>
                                        </div>   
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="drivetrain_4">
                                            <label for="drivetrain_4">RWD (18)</label>
                                        </div>   
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse9">Fule Type </h3>
                                     <div id="collapse9" class="collapse mb-3" data-parent="#accordionExample">
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="fule_1">
                                            <label for="fule_1">Diesel (194)</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="fule_2">
                                            <label for="fule_2">Flex Fuel (118)</label>
                                        </div>   
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="fule_3">
                                            <label for="fule_3">Gasoline (437) </label>
                                        </div> 
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse10">Price</h3>
                                    <div id="collapse10" class="collapse mb-3" data-parent="#accordionExample">
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="price_1">
                                            <label for="price_1">Any</label>
                                        </div>
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="price_2">
                                            <label for="price_2">$0-$10,000 (1)</label>
                                        </div>   
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="price_3">
                                            <label for="price_3">$10,000-$20,000</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="price_4">
                                            <label for="price_4">$20,000-$30,000</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="price_5">
                                            <label for="price_5">$30,000-$40,000</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="price_6">
                                            <label for="price_6">$40,000-$50,000</label>
                                        </div> 
                                        <div class="checkbox">
                                            <input class="magic-checkbox" type="checkbox" name="layout" id="price_7">
                                            <label for="price_7">$50,000-$60,000</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse11">Milage </h3>
                                    <div id="collapse11" class="collapse mb-3" data-parent="#accordionExample">
                                    <input type="text" class="js-range-slider" name="my_range" value=""                                   
                                    data-min="0"
                                    data-max="39000"
                                    data-from="100"
                                    data-to="500"
                                    data-hide_min_max="true"
                                    data-grid="false"
                                    data-skin="round"
                                    data-prefix="$"
                                    data-values_separator=" to "/>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
<script>
function viewChange(type, active){
    if(type=='grid'){
       jQuery('#listitems').hide();
        jQuery('#griditems').show();
        jQuery('.viewTypeWrap .viewType').removeClass('active');
        jQuery(active).addClass('active');
    } else{
        jQuery('#griditems').hide();
        jQuery('#listitems').show();
        jQuery('.viewTypeWrap .viewType').removeClass('active');
        jQuery(active).addClass('active');
    }
}
</script>