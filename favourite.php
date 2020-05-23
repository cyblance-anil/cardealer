    <?php include 'header.php' ?>
    


    <!-- Banner-Slider -->
    <section>
        <div class="container UsedCarListing">
            <div class="row">   
                <div class="col-lg-12">
                    <div class="list-right filterPanel ">
                        <!--  Recommended Cars For You  -->
                        <section class="mb-5">                          
                            <div class="griditems">
                                <h3 class="product-title mb-4">Favourite Cars</h3>
                                <div class="row">
                                   <?php
                                    for ($x = 0; $x <= 10; $x++) {?>
                                    <div class="col-lg-4 col-md-6">
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
                        </section>
                    </div>
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