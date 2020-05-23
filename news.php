    <?php include 'header.php' ?>
    
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
               
                    <a title="Home" href="index.php">
                        <span itemprop="name">Home</span>
                    </a>
                    <a title="Used Cars"  href="listpage.php">
                        <span itemprop="name">Used Cars</span>
                    </a>
                    <span>Ahmedabad</span>
              
            </div>
        </div>
    </div>

    <!-- Banner-Slider -->
    <section>
        <div class="container NewsListingpage">
            <div class="row"> 
                <div class="col-lg-8">
                    <div class="news-list listitems">
                        <?php
                        for ($x = 0; $x <= 4; $x++) {?>
                        <div class="shadowWPadding mb-4">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 pr-0">
                                    <div class="imgTopRound">
                                        <img title="Audi Q5 Facelift Spotted, Could Come To India Before The End Of 2020" alt="Audi Q5 Facelift Spotted, Could Come To India Before The End Of 2020" src="https://stimg2.cardekho.com/images/carNewsimages/userimages/24069/1564126810622/GeneralNews.jpg?tr=w-360">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="newsholder card-text">
                                        <a class="news-title" href="#">New 2019 Ford E-Series Chassis RWD near Niles, IL</a>
                                        <p class="news-des">The eighth-gen A6 is offered in two variants and is bigger in every dimension than its predecessor</p>
                                        <div class="authorThumbName">
                                            <img alt="" src="./assets/img/placeholder-user.jpg">
                                        </div>
                                        <div class="news-date">Dhruv<br> Nov 18, 2019</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php }?>
                    </div>
                    <div class="text-right">
                        <ul class="c-pagination mt-0">
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
                
                <div class="col-lg-4">
                    <aside class="sidebar-right">
                        <div class="SLetestnews">
                            <h3 class="sidebar-title">Featured Car</h3>
                            <ul>
                                <?php
                                for ($x = 0; $x <= 3; $x++) {?>
                                <li>
                                    <div class="cardImage">
                                        <img title="Toyota Innova Crysta" alt="Toyota Innova Crysta" src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Toyota/Innova-Crysta/7298/1578374701577/front-left-side-47.jpg?tr=w-110,e-sharpen">
                                    </div>
                                    <div class="sidebar-newstext">
                                        <a title="Toyota Innova Crysta" href="/carmodels/Toyota/Toyota_Innova_Crysta">New 2019 Ford E-Series Chassis RWD near Niles, IL</a>
                                        <div class="price">$33,885</div>
                                    </div>
                                </li>
                                 <?php }?>
                            </ul>
                        </div>
                        <div class="SLetestnews">
                            <h3 class="sidebar-title">Trusted used cars</h3>
                            <ul>
                                <?php
                                for ($x = 0; $x <= 3; $x++) {?>
                                <li>
                                    <div class="cardImage">
                                        <img title="Toyota Innova Crysta" alt="Toyota Innova Crysta" src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Toyota/Innova-Crysta/7298/1578374701577/front-left-side-47.jpg?tr=w-110,e-sharpen">
                                    </div>
                                    <div class="sidebar-newstext">
                                        <a title="Toyota Innova Crysta" href="/carmodels/Toyota/Toyota_Innova_Crysta">New 2019 Ford E-Series Chassis RWD near Niles, IL</a>
                                        <div class="price">$33,885</div>
                                    </div>
                                </li>
                                 <?php }?>
                            </ul>
                        </div>
                        <div class="Contact-Dealer">
                            <h3 class="sidebar-title">Subscribe News</h3>
                            <form class="form-sidebar">
                                <table width="100%">
                                    <tbody>                                  
                                    <tr>
                                        <td width="100%">
                                            <input class="textbox black" type="email" id="Email" name="" maxlength="" placeholder="Email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="button-list">
                                            <input type="submit" name="submitBtn" class=" col-lg-12 submitbutton primary-bg white" value="Subscribe Now">  
                                        </td>
                                    </tr>
                                </tbody></table>
                                
                            </form>
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