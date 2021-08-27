<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<script type="text/javascript">
    jQuery( document ).ready(function() {
        jQuery('h1.kc_title').text('Our Process & Checkout');
        jQuery('h1.kc_title').css('display','block');
    });
</script>
<?php
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<style media="screen">
    .page-id-8 h1.kc_title{
        display: none;
    }
    .page-id-8 .ssc-breadcrumbs.kc-elm.kc-css-886323 {
        display: none;
    }
body.kc-css-system .kc-css-201936 {
	background: transparent url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/BG-5.jpg) center center/cover no-repeat scroll;
	padding-top: 135px;
	padding-bottom: 140px;
}
body.kc-css-system .kc-css-928913 {
    padding-bottom: 75px;
}
body.kc-css-system .kc-css-928913.ssc_mltttl .wr {
    text-align: center;
}
body.kc-css-system .kc-css-928913 .t1 {
    color: #ff6678;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    line-height: 26px;
    letter-spacing: 0.5px;
    margin-top: 0px;
    margin-bottom: 0px;
}
body.kc-css-system .kc-css-928913 .t2 {
    text-align: center;
    margin-top: 9px;
    margin-bottom: 0px;
}
.title_cont_centr .t1:before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url(data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='7' stroke='%23FF6678' stroke-width='2'/%3E%3Ccircle cx='8' cy='8' r='4' fill='%23FF6678'/%3E%3C/svg%3E);
    background-repeat: no-repeat;
    position: relative;
    margin-right: 10px;
    top: 2px;
}
body.kc-css-system .kc-css-532504 {
    padding-right: 0px;
}
@media only screen and (max-width: 5000px) and (min-width: 1000px){
body.kc-css-system .kc-css-532504 {
    width: 50%;
}
}
body.kc-css-system .kc-css-9149 {
    background: #ffffff url(https://sellerlitcom.stage.site/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2020%2F08%2FImage_icon.png) top left/auto no-repeat scroll;
    height: 270px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.2);
    margin-bottom: 0px;
    padding-top: 36px;
    padding-bottom: 0;
    padding-left: 175px;
    border-radius: 16px 16px 16px 16px;
    background-size: 140px 396px;
}
body.kc-css-system .kc-css-9149 .cont_box {
    padding-right: 30px;
}
body.kc-css-system .kc-css-9149 .icon_box {
    background: linear-gradient(135deg, #ff6678, #f5af73, #ff6678);
    display: block;
    width: 60px;
    height: 60px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.3);
    margin-top: 100px;
    margin-right: -30px;
    border-radius: 50% 50% 50% 50%;
}
body.kc-css-system .kc-css-9149 .title, body.kc-css-system .kc-css-9149 .title a {
    color: #1b1b2d;
    font-size: 22px;
    line-height: 24px;
    font-weight: 700;
    font-family: Sora;
    text-align: left;
    text-transform: none;
    padding-bottom: 20px;
}
body.kc-css-system .kc-css-9149 .cont_box .description, body.kc-css-system .kc-css-9149 .cont_box .description p {
    line-height: 26px;
}
body.kc-css-system .kc-css-9149 .cont_box .description {
    font-size: 18px;
    text-align: left;
    margin-bottom: 15px;
}
body.kc-css-system .kc-css-9149 .cont_box .description, body.kc-css-system .kc-css-9149 .cont_box .description p {
    line-height: 26px;
}
body.kc-css-system .kc-css-9149 .bgr_icon i, body.kc-css-system .kc-css-9149 .bgr_img, body.kc-css-system .kc-css-9149 .bgr_no {
    text-align: center;
}
body.kc-css-system .kc-css-9149 .c_icon i, body.kc-css-system .kc-css-9149 .c_img img, body.kc-css-system .kc-css-9149 .c_text {
    line-height: 60px;
    font-family: Sora;
    font-weight: 700;
}

body.kc-css-system .kc-css-9149 .c_icon, body.kc-css-system .kc-css-9149 .c_text {
    color: #ffffff;
    font-size: 40px;
}
body.kc-css-system .kc-css-545753 {
    background: transparent url(https://sellerlitcom.stage.site/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2020%2F08%2FDivider-1.png) 7.5% 50%/auto no-repeat scroll;
}
@media only screen and (max-width: 5000px) and (min-width: 1000px){
body.kc-css-system .kc-css-545753 {
    width: 50%;
}
}
body.kc-css-system .kc-css-283609 {
    float: none;
    margin-top: 110px;
    margin-right: auto;
    margin-left: auto;
}
.about_anim_img_serv .img2 {
    position: absolute;
    top: 60px;
    right: -50px;
    animation-name: shift1;
    animation-duration: 7s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
body.kc-css-system .kc-css-9149:hover {
    background: #361d5b url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image_icon.png) top left/auto no-repeat scroll;
    background-size: 140px 396px;
}
body.kc-css-system .kc-css-101140 {
    background: transparent url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Divider-2.png) center center/auto no-repeat scroll;
    height: 110px;
}
body.kc-css-system .kc-css-132153 {
    background: transparent url(https://sellerlitcom.stage.site/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2020%2F08%2FDivider-1.png) 92.5% 50%/auto no-repeat scroll;
}

@media only screen and (max-width: 5000px) and (min-width: 1000px){
body.kc-css-system .kc-css-132153 {
    width: 50%;
}
}
body.kc-css-system .kc-css-638656 {
    float: none;
    margin-right: auto;
    margin-left: auto;
        margin-top: 96px;
}
.about_anim_img_serv2 .img2 {
    position: absolute;
    top: 40px;
    left: -50px;
    animation-name: shift1;
    animation-duration: 7s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
body.kc-css-system .kc-css-170584 {
    padding-left: 0px;
}

@media only screen and (max-width: 5000px) and (min-width: 1000px){
body.kc-css-system .kc-css-170584 {
    width: 50%;
}
}
body.kc-css-system .kc-css-93880 {
    background: #ffffff url(https://sellerlitcom.stage.site/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2020%2F08%2FImage_icon2.png) top right/auto no-repeat scroll;
    height: 270px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.2);
    margin-bottom: 0px;
    padding-top: 36px;
    padding-right: 175px;
    padding-bottom: 0px;
    border-radius: 16px 16px 16px 16px;
        background-size: 140px 533px;
}
body.kc-css-system .kc-css-93880:hover {
    background: #361d5b url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image_icon2.png) top right/auto no-repeat scroll;
        background-size: 140px 533px;
}
body.kc-css-system .kc-css-93880 .icon_box {
    background: linear-gradient(135deg, #ff6678, #f5af73, #ff6678);
    display: block;
    width: 60px;
    height: 60px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.3);
    margin-top: 120px;
    margin-left: -30px;
    border-radius: 50% 50% 50% 50%;
}
body.kc-css-system .kc-css-93880 .cont_box {
    padding-left: 30px;
}
body.kc-css-system .kc-css-93880 .bgr_icon i, body.kc-css-system .kc-css-93880 .bgr_img, body.kc-css-system .kc-css-93880 .bgr_no {
    text-align: center;
}
body.kc-css-system .kc-css-93880 .c_icon i, body.kc-css-system .kc-css-93880 .c_img img, body.kc-css-system .kc-css-93880 .c_text {
    line-height: 60px;
    font-family: Sora;
    font-weight: 700;
}

body.kc-css-system .kc-css-93880 .c_icon, body.kc-css-system .kc-css-93880 .c_text {
    color: #ffffff;
    font-size: 40px;
}
body.kc-css-system .kc-css-93880 .title, body.kc-css-system .kc-css-93880 .title a {
    color: #1b1b2d;
    font-size: 22px;
    line-height: 24px;
    font-weight: 700;
    font-family: Sora;
    text-align: left;
    text-transform: none;
    padding-bottom: 20px;
}
body.kc-css-system .kc-css-93880 .cont_box .description, body.kc-css-system .kc-css-93880 .cont_box .description p {
    line-height: 26px;
}

body.kc-css-system .kc-css-93880 .cont_box .description {
    font-size: 16px;
    text-align: left;
    margin-bottom: 15px;
}
.cont_box .description, body.kc-css-system .kc-css-93880 .cont_box .description p {
    line-height: 26px;
}
body.kc-css-system .kc-css-994602 {
    background: transparent url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Divider-2.png) center center/auto no-repeat scroll;
    height: 110px;
}
body.kc-css-system .kc-css-264770 {
    padding-right: 0px;
}

@media only screen and (max-width: 5000px) and (min-width: 1000px){
body.kc-css-system .kc-css-264770 {
    width: 50%;
}
}
body.kc-css-system .kc-css-555199 {
    background: #ffffff url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image2-6.png) top left/auto no-repeat scroll;
    height: 270px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.2);
    margin-bottom: 0px;
    padding-top: 36px;
    padding-bottom: 0px;
    padding-left: 175px;
    border-radius: 16px 16px 16px 16px;
    background-size: 125px 447px;
}
body.kc-css-system .kc-css-555199:hover {
    background: #361d5b url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image2-6.png) top left/auto no-repeat scroll;
    background-size: 125px 447px;
}body.kc-css-system .kc-css-555199 .cont_box {
    padding-right: 65px;
}
body.kc-css-system .kc-css-555199 .icon_box {
    background: linear-gradient(135deg, #ff6678, #f5af73, #ff6678);
    display: block;
    width: 60px;
    height: 60px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.3);
    margin-top: 76px;
    margin-right: -30px;
    border-radius: 50% 50% 50% 50%;
}
body.kc-css-system .kc-css-555199 .title, body.kc-css-system .kc-css-555199 .title a {
    color: #1b1b2d;
    font-size: 22px;
    line-height: 24px;
    font-weight: 700;
    font-family: Sora;
    text-align: left;
    text-transform: none;
    padding-bottom: 20px;
}
body.kc-css-system .kc-css-555199 .cont_box .description, body.kc-css-system .kc-css-555199 .cont_box .description p {
    line-height: 26px;
}
body.kc-css-system .kc-css-555199 .cont_box .description {
    font-size: 18px;
    text-align: left;
    margin-bottom: 15px;
}
body.kc-css-system .kc-css-558945 {
    background: transparent url(https://sellerlitcom.stage.site/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2020%2F08%2FDivider-1.png) 7.5% 50%/auto no-repeat scroll;
}

@media only screen and (max-width: 5000px) and (min-width: 1000px){
body.kc-css-system .kc-css-558945 {
    width: 50%;
}
}
body.kc-css-system .kc-css-816949 {
    float: none;
    margin-right: auto;
    margin-left: auto;
    margin-top: 23px;
}
.about_anim_img_serv3 .img2 {
    position: absolute;
    top: -45px;
    right: -190px;
    animation-name: shift1;
    animation-duration: 7s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
body.kc-css-system .kc-css-853144 {
    background: transparent url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Divider-2.png) center center/auto no-repeat scroll;
    height: 110px;
}
body.kc-css-system .kc-css-319269 {
    background: transparent url(https://sellerlitcom.stage.site/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2020%2F08%2FDivider-1.png) 92.5% 50%/auto no-repeat scroll;
}

@media only screen and (max-width: 5000px) and (min-width: 1000px){
body.kc-css-system .kc-css-319269 {
    width: 50%;
}
}
body.kc-css-system .kc-css-490659 {
    float: none;
    margin-right: auto;
    margin-left: auto;
    margin-top: 35px;
}
body.kc-css-system .kc-css-147868 {
    background: #ffffff url(https://sellerlitcom.stage.site/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2020%2F08%2FImage_icon2.png) top right/auto no-repeat scroll;
    height: 270px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.2);
    margin-bottom: 0px;
    padding-top: 36px;
    padding-right: 175px;
    padding-bottom: 0px;
    border-radius: 16px 16px 16px 16px;
}
body.kc-css-system .kc-css-147868:hover {
    background: #361d5b url(https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image_icon2.png) top right/auto no-repeat scroll;
}
body.kc-css-system .kc-css-147868 .icon_box {
    background: linear-gradient(135deg, #ff6678, #f5af73, #ff6678);
    display: block;
    width: 60px;
    height: 60px;
    box-shadow: 7.071px 7.071px 40px 0px rgba(131, 121, 160, 0.3);
    margin-top: 70px;
    margin-left: -30px;
    border-radius: 50% 50% 50% 50%;
}
body.kc-css-system .kc-css-147868 .cont_box {
    padding-left: 65px;
}
body.kc-css-system .kc-css-147868 .title, body.kc-css-system .kc-css-147868 .title a {
    color: #1b1b2d;
    font-size: 22px;
    line-height: 24px;
    font-weight: 700;
    font-family: Sora;
    text-align: left;
    text-transform: none;
    padding-bottom: 20px;
}

.kc-css-system .kc-css-147868:hover .cont_box .title,
.kc-css-system .kc-css-555199:hover .cont_box .title,
.kc-css-system .kc-css-9149:hover .cont_box  .title,
.kc-css-system .kc-css-93880:hover .cont_box  .title
{
    color: #ffffff !important;
}
.kc-css-system .kc-css-147868:hover .cont_box .description p,
.kc-css-system .kc-css-555199:hover .cont_box .description p ,
.kc-css-system .kc-css-9149:hover .cont_box .description p ,
.kc-css-system .kc-css-93880:hover .cont_box .description p
 {
    color: #ffffff;
}
body.kc-css-system .kc-css-160156
{
	margin-top: 0px !important;
}



@media only screen and (max-width: 767px)
{
body.kc-css-system .kc-css-555199,
body.kc-css-system .kc-css-93880,
body.kc-css-system .kc-css-9149,
body.kc-css-system .kc-css-147868 {
    padding-top: 45px;
    padding-bottom: 35px;
}
body.kc-css-system .kc-css-555199 .cont_box,
body.kc-css-system .kc-css-93880 .cont_box,
body.kc-css-system .kc-css-9149 .cont_box,
body.kc-css-system .kc-css-147868 .cont_box {
    padding-right: 15px !important;
}

body.kc-css-system .kc-css-555199.icon_box,
body.kc-css-system .kc-css-93880 .icon_box,
body.kc-css-system .kc-css-9149 .icon_box,
body.kc-css-system .kc-css-147868 .icon_box {
    margin-top: 60px;
}
body.kc-css-system .kc-css-545753 , body.kc-css-system .kc-css-132153 , body.kc-css-system .kc-css-558945,body.kc-css-system .kc-css-319269
{
	display: none !important;
}
body.kc-css-system .kc-css-264770 {
    padding-right: 45px;
}
.title:hover{
    color: white;
}
body .p-h{
    margin-bottom: 0!important;
}
.mrk-checkout{
    margin-top: 0!important;
}

/**/
}

</style>
<!-- Custom code added for our process. -->


<section class="kc-elm kc-css-201936 kc_row" style="padding:0px !important;">
   <div class="kc-row-container  kc-container">
      <div class="kc-wrap-columns">
         <div class="kc-elm kc-css-320632 kc_col-sm-12 kc_column kc_col-sm-12">
            <div class="kc-col-container">
               <!-- <div class="ssc_mltttl kc-elm kc-css-928913 title_cont_centr kc-pc-loaded">
                  <div class="wr deb derb dea dera none nonea">
                     <span class="t1">Clearly and according to plan</span>
                     <h2 class="t2">SEO focused on increasing profits</h2>
                  </div>
               </div> -->
               <div class="kc-elm kc-css-883812 kc_row kc_row_inner sst-flex-row-inner">
                  <div class="kc-elm kc-css-532504 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_icon_box kc-elm kc-css-9149 template2 about_icon">
                           <div class="cont_box">
                              <div class="title">Step 1</div>
                              <div class="description lines0">
                                 <p class="p-h">
                                    <?php
                                        echo get_field( "step_1", $_GET['add-to-cart'] );
                                    ?>
                                    <!-- Research and in-depth analytics of the competitive environment is an important basic aspect -->
                                 </p>
                              </div>
                           </div>
                           <div class="icon_box">
                              <div class="bgr_no" style="width:60px; height:60px;">
                                 <div> </div>
                              </div>
                              <div class="c_text" style=" height: 60px; margin-top: -60px; font-size: 40px; ">1</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="kc-elm kc-css-545753 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_img_ef type1 kc-elm kc-css-283609 about_anim_img_serv">
                           <div class="obj ">
                              <div class=" mo  none img1" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image01-1.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image01-1.png"></div>
                              <div class=" mo  none img2" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image00-1.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image00-1.png"></div>
                              <div class="ieslide"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="kc-elm kc-css-101140 kc_row kc_row_inner sst-flex-row-inner">
                  <div class="kc-elm kc-css-187319 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                     <div class="kc_wrapper kc-col-inner-container"></div>
                  </div>
               </div>
               <div class="kc-elm kc-css-698449 kc_row kc_row_inner sst-flex-row-inner">
                  <div class="kc-elm kc-css-132153 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_img_ef type1 kc-elm kc-css-638656 about_anim_img_serv2">
                           <div class="obj ">
                              <div class=" mo  none img1" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image-6-1.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image-6-1.png"></div>
                              <div class=" mo  none img2" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image2-3-1.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image2-3-1.png"></div>
                              <div class="ieslide"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="kc-elm kc-css-170584 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_icon_box kc-elm kc-css-93880 template1 about_icon_r">
                           <div class="icon_box">
                              <div class="bgr_no" style="width:60px; height:60px;">
                                 <div> </div>
                              </div>
                              <div class="c_text" style=" height: 60px; margin-top: -60px; font-size: 40px; ">2</div>
                           </div>
                           <div class="cont_box">
                              <div class="title">Step 2</div>
                              <div class="description lines0">
                                 <p class="p-h">
                                    <?php
                                        echo get_field( "step_2", $_GET['add-to-cart'] );
                                    ?>
                                    <!-- Unique content will not only allow you to bypass competitors, but also add value to the site -->
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="kc-elm kc-css-994602 kc_row kc_row_inner sst-flex-row-inner">
                  <div class="kc-elm kc-css-504169 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                     <div class="kc_wrapper kc-col-inner-container"></div>
                  </div>
               </div>
               <div class="kc-elm kc-css-636362 kc_row kc_row_inner sst-flex-row-inner">
                  <div class="kc-elm kc-css-264770 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_icon_box kc-elm kc-css-555199 template2 about_icon">
                           <div class="cont_box">
                              <div class="title">Step 3</div>
                              <div class="description lines0">
                                 <p class="p-h">
                                    <?php
                                        echo get_field( "step_3", $_GET['add-to-cart'] );
                                    ?>
                                    <!-- An important aspect is a large base of thematic links from proven resources of organic origin --></p>
                              </div>
                           </div>
                           <div class="icon_box">
                              <div class="bgr_no" style="width:60px; height:60px;">
                                 <div> </div>
                              </div>
                              <div class="c_text" style=" height: 60px; margin-top: -60px; font-size: 40px; ">3</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="kc-elm kc-css-558945 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_img_ef type1 kc-elm kc-css-816949 about_anim_img_serv3">
                           <div class="obj ">
                              <div class=" mo  none img1" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image3-1-1.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image3-1-1.png"></div>
                              <div class=" mo  none img2" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image4-2.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image4-2.png"></div>
                              <div class="ieslide"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="kc-elm kc-css-853144 kc_row kc_row_inner sst-flex-row-inner">
                  <div class="kc-elm kc-css-10025 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                     <div class="kc_wrapper kc-col-inner-container"></div>
                  </div>
               </div>
               <div class="kc-elm kc-css-718819 kc_row kc_row_inner sst-flex-row-inner">
                  <div class="kc-elm kc-css-319269 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_img_ef type1 kc-elm kc-css-490659 about_anim_img_serv2">
                           <div class="obj ">
                              <div class=" mo  none img1" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image-8-1.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image-8-1.png"></div>
                              <div class=" mo  none img2" style="-webkit-filter: grayscale(0);filter: grayscale(0);"><img data-src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image2-4-1.png" alt="" class="none lazyloaded" src="https://sellerlitcom.stage.site/wp-content/uploads/2020/08/Image2-4-1.png"></div>
                              <div class="ieslide"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="kc-elm kc-css-717983 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                     <div class="kc_wrapper kc-col-inner-container">
                        <div class="ssc_icon_box kc-elm kc-css-147868 template1 about_icon_r">
                           <div class="icon_box">
                              <div class="bgr_no" style="width:60px; height:60px;">
                                 <div> </div>
                              </div>
                              <div class="c_text" style=" height: 60px; margin-top: -60px; font-size: 40px; ">4</div>
                           </div>
                           <div class="cont_box">
                              <div class="title">Step 4</div>
                              <div class="description lines0">
                                 <p class="p-h">
                                    <?php
                                        echo get_field( "step_4", $_GET['add-to-cart'] );
                                    ?>
                                    <!-- We can now launch your project. Optimized structure, unique content and thematic links --></p>
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

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
<script type="text/javascript">
    jQuery( document ).ready(function() {
        jQuery('.p-h').css({
            'margin-bottom': '0'
            // 'text-align': 'justify'
        });
        // function checkPosition() {
        if (window.matchMedia('(max-width: 767px)').matches) {
            jQuery('.kc-elm.kc-css-698449').css({
                'display': 'flex',
                'flex-direction': 'column-reverse'
            });
            jQuery('.kc-elm.kc-css-718819').css({
                'display': 'flex',
                'flex-direction': 'column-reverse'
            });
        }
        // }
        // jQuery(document).load(jQuery(window).bind("resize", checkPosition));
    });
</script>