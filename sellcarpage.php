    <?php include 'header.php' ?>

    <!--  Service Your Car  -->
    <section class="sellcar-section">
        <div class="container"> 
            <div id="sellcar_step_1" class="steps" >
                <div class="row">                   
                    <div class="col-lg-8">
                    <div class="shadow10">
                        <div class="mainPanel">
                            <div class="cycle-slideshow">
                                <div class="custom-slide-panel-body">
                                    <table class="tableWidth100Percent">
                                        <tbody>
                                            <tr>
                                                <td class="navLinkClass navBackLinkTD">
                                                    <a class="navLinkClass navBackLinkClass"  href="javascript:void(0);">
                                                        <i class="fa fa-angle-left"></i>
                                                        <strong class="navBackButtonTextId">
                                                            Back
                                                        </strong>
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <h4>Select a year</h4>
                                                </td>
                                                <td class="navNextLinkTD text-right">
                                                    <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep(2)">
                                                       <strong class="navNextButtonTextId">Next</strong>
                                                       <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <span class="ui-input displayBlock">
                                        <i class="fa fa-search"></i>
                                        <input id="yearInput" type="text" class="form-control data_field custom-slide-default-form-control paddingLeft56 tab-index-flow" tabindex="1" name="yearInput" placeholder="Find a year" maxlength="4" pattern="\d*" step="1" autocomplete="off">
                                       
                                    </span>
                                </div>
                                <div class="dropdown-wrapper">
                                    <ul class="yearList">
                                        <li><a href="#">Search by VIN <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#">2020</a></li>
                                        <li><a href="#">2019</a></li>
                                        <li><a href="#">2018</a></li>
                                        <li><a href="#">2017</a></li>
                                        <li><a href="#">2016</a></li>
                                        <li><a href="#">2015</a></li>
                                        <li><a href="#">2014</a></li>
                                        <li><a href="#">2013</a></li>
                                    </ul>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4">
                    <div class="shadow10">
                        <div class="sellcar-rightpart">
                            <div class="rightpart-wrapper text-center">
                                <img src="./assets/img/step-1-year.png" alt="" />
                                <h3 class="md-title">Year</h3>
                                <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                            </div>                        
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div id="sellcar_step_2" class="steps" style="display:none;">
                <div class="row">                   
                <div class="col-lg-8">
                    <div class="shadow10">
                        <div class="mainPanel">
                            <div class="pageSlider cycle-slideshow">
                                <div class="custom-slide-panel-body">
                                    <table class="tableWidth100Percent">
                                        <tbody>
                                            <tr>
                                                <td class="navLinkClass navBackLinkTD">
                                                    <a class="navLinkClass navBackLinkClass" href="javascript:void(0);" onclick="nextStep(1)">
                                                        <i class="fa fa-angle-left"></i>
                                                        <strong class="navBackButtonTextId">
                                                            Back
                                                        </strong>
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <h4>Select a make</h4>
                                                </td>
                                                <td class="navNextLinkTD text-right">
                                                    <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep(3)">
                                                       <strong class="navNextButtonTextId">Next</strong>
                                                       <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <span class="ui-input displayBlock">
                                        <i class="fa fa-search"></i>
                                        <input id="yearInput" type="text" class="form-control custom-slide-default-form-control" tabindex="1" name="yearInput" placeholder="Find a make"  autocomplete="off">
                                        
                                    </span>
                                </div>
                                <div class="dropdown-wrapper">
                                    <ul class="yearList">
                                        <li><a href="#">Search by VIN <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/maruti.jpg" alt=""/> </div>Maruti</a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/hyundai.jpg" alt=""/> </div> Hyundai</a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/honda.jpg" alt=""/> </div> Honda</a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/tata.jpg" alt=""/> </div> Tata</a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/mahindra.jpg" alt=""/> </div> Mahindra</a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/renault.jpg" alt=""/> </div> Renault</a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/ford.jpg" alt=""/> </div> Ford</a></li>
                                        <li><a href="#"><div class="car-brand-list"><img src="./assets/img/car-brand/nissan.jpg" alt=""/> </div> Nissan</a></li>
                                    </ul>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shadow10">
                        <div class="sellcar-rightpart">
                            <div class="rightpart-wrapper text-center">
                                <img src="./assets/img/02_make.png" alt="" />
                                <h3 class="md-title">Make</h3>
                                <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="sellcar_step_3" class="steps" style="display:none;">
                <div class="row">                   
                <div class="col-lg-8">
                    <div class="shadow10">
                        <div class="mainPanel">
                            <div class="pageSlider cycle-slideshow">
                                <div class="custom-slide-panel-body">
                                    <table class="tableWidth100Percent">
                                        <tbody>
                                            <tr>
                                                <td class="navLinkClass navBackLinkTD">
                                                    <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('2')">
                                                       <i class="fa fa-angle-left"></i>
                                                       <strong class="navNextButtonTextId">Back</strong>
                                                       
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <h4>Select a model</h4>
                                                </td>
                                                <td class="navNextLinkTD text-right">
                                                    <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('4')">
                                                       <strong class="navNextButtonTextId">Next</strong>
                                                       <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <span class="ui-input displayBlock">
                                        <i class="fa fa-search"></i>
                                        <input id="yearInput" type="text" class="form-control data_field custom-slide-default-form-control paddingLeft56 tab-index-flow" tabindex="1" name="yearInput" placeholder="Find a year" maxlength="4" pattern="\d*" step="1" autocomplete="off">
                                        
                                    </span>
                                </div>
                                <div class="dropdown-wrapper">
                                    <ul class="yearList">
                                        <li><a href="#">Search by VIN <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#">230i Convertible</a></li>
                                        <li><a href="#">230i Coupe</a></li>
                                        <li><a href="#">230xi Convertible</a></li>
                                        <li><a href="#">230xi Coupe</a></li>
                                        <li><a href="#">330i</a></li>
                                        <li><a href="#">330xi</a></li>
                                        <li><a href="#">430i Convertible</a></li>
                                        <li><a href="#">430i Coupe</a></li>
                                    </ul>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shadow10">
                        <div class="sellcar-rightpart">
                            <div class="rightpart-wrapper text-center">
                                <img src="./assets/img/03_model.png" alt="" />
                                <h3 class="md-title">Model</h3>
                                <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="sellcar_step_4" class="steps" style="display:none;">
                <div class="row">                   
                <div class="col-lg-8">
                    <div class="shadow10">
                        <div class="mainPanel">
                            <div class="pageSlider cycle-slideshow">
                                <div class="custom-slide-panel-body">
                                    <table class="tableWidth100Percent">
                                        <tbody>
                                            <tr>
                                                <td class="navLinkClass navBackLinkTD">
                                                    <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('3')">
                                                       <i class="fa fa-angle-left"></i>
                                                       <strong class="navNextButtonTextId">Back</strong>
                                                       
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <h4>Select a trim</h4>
                                                </td>
                                                <td class="navNextLinkTD text-right">
                                                    <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('5')">
                                                       <strong class="navNextButtonTextId">Next</strong>
                                                       <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <span class="ui-input displayBlock">
                                        <i class="fa fa-search"></i>
                                        <input id="trim" type="text" class="form-control custom-slide-default-form-control paddingLeft56" tabindex="1" name="trim" placeholder="Find a trim">
                                    </span>
                                </div>
                                <div class="dropdown-wrapper">
                                    <ul class="yearList">
                                        <li><a href="#">Search by VIN <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#">Not sure</a></li>
                                        <li><a href="#">Base</a></li>
                                        <li><a href="#">Lunch Edition</a></li>
                                    </ul>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shadow10">
                        <div class="sellcar-rightpart">
                            <div class="rightpart-wrapper text-center">
                                <img src="./assets/img/04_trim.png" alt="" />
                                <h3 class="md-title">Trim</h3>
                                <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="sellcar_step_5" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('4')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>What type of title do you have?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('6')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_1">
                                                    <label for="radio_1">I have a clean title.</label>                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_2">
                                                    <label for="radio_2">I have a salvage or rebuilt title.</label>                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_3">
                                                    <label for="radio_3">I do not have a title.</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/05_title.png" alt="" />
                                    <h3 class="md-title">Title</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sellcar_step_6" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('5')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Enter a ZIP code</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('7')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <span class="ui-input displayBlock">
                                            
                                            <input id="Zip" type="text" class="pl-3 form-control custom-slide-default-form-control" tabindex="1" name="Zip" placeholder="Zip code" maxlength="4" autocomplete="off">
                                        </span>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/06_zipcode.png" alt="" />
                                    <h3 class="md-title">ZIP Code</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_7" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('6')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Are the wheels mounted and tires inflated?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('8')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_4">
                                                    <label for="radio_4">All wheels are mounted and tires are inflated.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_5">
                                                    <label for="radio_5">One or more tires are flat.</label>                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_6">
                                                    <label for="radio_6">One or more wheels are removed.</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/07_wheels.png" alt="" />
                                    <h3 class="md-title">Wheels & Tires</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_8" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('7')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Does it drive?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('9')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_7">
                                                    <label for="radio_7">It starts and drives.</label>                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_8">
                                                    <label for="radio_8">It starts but does not drive.</label>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_9">
                                                    <label for="radio_9">It doesn't start.</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/08_drive.png" alt="" />
                                    <h3 class="md-title">Starts & Drives</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_9" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('8')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>What's the mileage shown on the odometer?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('10')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <div class="mileageClass form-control custom-slide-default-form-control-mileage-label">
                                            <input id="mileageInput" type="text" class="mileageInputClass" tabindex="1" name="mileageInput" placeholder="" maxlength="3" autocomplete="off">
                                            <lable class="autoLockMileageInput">,000</lable>
                                        </div>
                                    </div>                                   
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/09_mileage.png" alt="" />
                                    <h3 class="md-title">Mileage</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_10" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('9')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Any removed or loose exterior body panels?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('11')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_7">
                                                    <label for="radio_7">All body panels (doors, bumpers, hood, etc.) are properly intact and attached.</label>                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_8">
                                                    <label for="radio_8">It has loose or missing panels.</label>  
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/10_exterior.png" alt="" />
                                    <h3 class="md-title"> Body Panels</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_11" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('10')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Does it have body damage?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('12')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_11">
                                                    <label for="radio_11">It has no exterior damage.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_12">
                                                    <label for="radio_12">It has damage that is baseball-sized or larger.</label>  
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/11_BodyDamage.png" alt="" />
                                    <h3 class="md-title">Body Damage</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_12" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('11')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Any damaged mirrors, glass, or lights?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('13')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_13">
                                                    <label for="radio_13">The mirrors, glass or lights are intact.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_14">
                                                    <label for="radio_14">Some mirrors, glass or lights are cracked or missing.</label>  
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/12_Mirrors.png" alt="" />
                                    <h3 class="md-title">Mirrors, Glass, & Lights</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_13" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('12')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Any damaged or removed interior parts?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('14')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_15">
                                                    <label for="radio_15">All the interior parts (seats, airbags, radio, etc.) are properly intact and attached</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_16">
                                                    <label for="radio_16">It has damaged or removed interior parts.</label>  
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/13_Interior.png" alt="" />
                                    <h3 class="md-title">Interior Parts</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_14" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-8">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('13')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Any flood or fire damage?</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('15')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="dropdown-wrapper mt-2">
                                        <ul class="yearList">
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_15">
                                                    <label for="radio_15">It has no flood or fire damage.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input class="magic-radio" type="radio" name="layout" id="radio_16">
                                                    <label for="radio_16">It has flood or fire damage.</label>  
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shadow10">
                            <div class="sellcar-rightpart">
                                <div class="rightpart-wrapper text-center">
                                    <img src="./assets/img/14_FireDamage.png" alt="" />
                                    <h3 class="md-title">Flood & Fire Damage</h3>
                                    <p>Not sure what year your car is? Share your VIN with us and we'll determine the year. Take a look at your vehicle, your title, or proof of insurance to locate your VIN.</p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sellcar_step_15" class="steps" style="display:none;">
                <div class="row">                   
                    <div class="col-lg-12">
                        <div class="shadow10">
                            <div class="mainPanel">
                                <div class="pageSlider cycle-slideshow">
                                    <div class="custom-slide-panel-body">
                                        <table class="tableWidth100Percent">
                                            <tbody>
                                                <tr>
                                                    <td class="navLinkClass navBackLinkTD">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(2);" onclick="nextStep('14')">
                                                           <i class="fa fa-angle-left"></i>
                                                           <strong class="navNextButtonTextId">Back</strong>

                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <h4>Select an option</h4>
                                                    </td>
                                                    <td class="navNextLinkTD text-right">
                                                        <a class="navLinkClass navNextLinkClass" href="javascript:void(0);" onclick="nextStep('16')">
                                                           <strong class="navNextButtonTextId">Next</strong>
                                                           <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                  
                                    <div class="choose-offer mt-4 mb-4">
                                        <div class="display-flex-center ml-0 mr-0">
                                            <div class="col-lg-6 ">
                                                <div class="choose-offer offer-card-padding">
                                                    <div class="Getpaid"> Get paid as early as today!</div>
                                                    <div class="offer-wrapper">
                                                        <p>We pick it up and pay</p>
                                                        <h2>$8,700</h2>
                                                        <p>View the times when we are available to come pay you and pick up your car. When accepting your offer, you'll be able to select the pick up time that works for you. At the time of pick up, we will inspect your car's condition and documentation, then pay you on the spot and tow it away!</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> We come to you</li>
                                                            <li><i class="fa fa-check"></i> We pay you on the spot</li>
                                                        </ul>
                                                        <div class="schedule-offer">
                                                            <div class="form-group">
                                                                <input  id="datetimepicker2" name="" type="text" class="form-control ux-date-input input-group date" placeholder="View available pick up times">
                                                                <i class="fa fa-calendar-o"></i>
                                                            </div>
                                                            <button class="submitbutton primary-bg white">Sell instantly</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 choose-offer offer-card-padding">
                                                <div class="choose-offer offer-card-padding">
                                                    <div class="offer-wrapper bordernone">
                                                        <p>We promote your free listing for 7 days</p>
                                                        <h2>Name your price</h2>
                                                        <p>Set an asking price and list your car for sale. We'll start promoting your listing to car buyers right away. Once we find a buyer that accepts your asking price, we'll notify you and get you paid.</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Set your asking price</li>
                                                            <li><i class="fa fa-check"></i> We work to find a buyer</li>
                                                        </ul>
                                                        <div class="schedule-offer mt-3">
                                                            <button class="btn btn-secondary col-lg-12">Sell instantly</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </section>   

    <?php include 'footer.php' ?>
<script>
    function nextStep(id){
       jQuery('.steps').hide();
       jQuery('#sellcar_step_'+id).show();
    }
   
</script>