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
        <div class="container newsdetail">
            <div class="row"> 
                <div class="col-lg-8">
                    <div class="news-detail listitems">
                        <div class="shadowWPadding  mb-4">
                            <div class="col-lg-12 p0">
                                <div class="imgTopRound">
                                    <img title="" alt="" src="./assets/img/GeneralNews.jpg" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="newsholder card-text">
                                    <a class="news-title" href="#">New 2019 Ford E-Series Chassis RWD near Niles, IL</a>
                                    <div class="col-lg-12 p0 mb-4">
                                        <div class="authorThumbName">
                                            <img alt="" src="./assets/img/placeholder-user.jpg">
                                        </div>
                                        <div class="news-date">BY LAUREN MOORMAN ● DEC 06, 2017-01:31 PM</div>
                                    </div>
                                    
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    
                                </div>
                            </div>
                        </div>
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