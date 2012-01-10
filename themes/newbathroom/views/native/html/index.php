<!DOCTYPE html>
<html dir="ltr" lang="en" xmlns:cms3="http://www.w3.org/2001/XInclude"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<cms3:include renderer="document" name="header" priority="-100" />
	
<?php
	$media_path = $this->settings('url_path') . '../../../media/';
	$is_main = count(\CMS3\Engine\App::instance()->param()) == 0; // TODO
?>

<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/960_24_col.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/constants.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/style_boxes.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/css3.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/catalog/catalog.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/catalog/product.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/catalog/pagination.css">
<link rel="stylesheet" type="text/css" href="<?php echo $media_path ?>style/jquery.lightbox-0.5.css">

<!--[if lt IE 9]>
<style type="text/css">
.cart_products_options,
.contentPadd.txtPage,
.ui-dialog,
.ui-dialog-titlebar,
.cart,
.ui-progressbar,
.ui-datepicker,

.bg_button .button-t,
.list,
.cart_box,
.box3,
.contentInfoText.un,
.contentInfoBlock,
.cart_products_options,
.row_7 CHECKBOX, .row_7 INPUT, .row_7 RADIO, .row_7 select, .row_7 textarea,
.fieldValue  input, .go, .input,
.contentPadd h3,
.cart th.th1,
.contentInfoText,
.contentPadd h3,
.cart th.th3,
/*.infoBoxWrapper.box2
   { behavior:url(/osc_35400/ext/pie/PIE.php)}*/
</style>
 <![endif]-->
<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 15px 0 15px; position: relative; text-align:center;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]--> 

<style type="text/css">
	.product-images {
		margin-top: 10px;
	}
	.product-images a {
		dispaly: block;
		float: left;
		border: solid 3px white;
		margin-left: 4px;
	}
</style>

<script src="<?php echo $media_path ?>script/jquery-1.6.1.min.js"></script>
<script src="<?php echo $media_path ?>script/jquery.lightbox-0.5.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('.product-images a').lightBox({
			imageLoading:			'<?php echo $media_path ?>image/lightbox-ico-loading.gif',		// (string) Path and the name of the loading icon
			imageBtnPrev:			'<?php echo $media_path ?>image/lightbox-btn-prev.gif',			// (string) Path and the name of the prev button image
			imageBtnNext:			'<?php echo $media_path ?>image/lightbox-btn-next.gif',			// (string) Path and the name of the next button image
			imageBtnClose:			'<?php echo $media_path ?>image/lightbox-btn-close.gif',		// (string) Path and the name of the close btn
			imageBlank:				'<?php echo $media_path ?>image/lightbox-blank.gif'			// (string) Path and the name of a blank image (one pixel)
        });
    });
    </script>

</head>
<body>
<!--<div id="bodyWrapper" class="bg_body"> -->
  	<div class="wrapper-padd"><div class="wrapper">
    	<div class="row_1 ofh">

<div id="header">
	<div>

<div class="boxes_menu">
	<div class="menu">
		<cms3:include renderer="block" position="nb_topmenu" />
	</div>
</div>

</div>
</div>

		    <?php if ($is_main): ?>
            <div class="logo" style="position: absolute; z-index: 4">
                <a href="/">
                    <img src="<?php echo $media_path ?>image/store_logo_round.png" alt="" />
                </a>
            </div>
		    
            <div style="padding-left: 440px; margin-top: 10px; position: relative">
	                    <a href="/?shop.product.type.id=16"><img src="<?php echo $media_path ?>image/bg4.jpg" /></a>
            </div>
		    <?php else: ?>
		        <div class="logo" style="position: absolute; z-index: 4">
                <a href="/">
                    <img src="<?php echo $media_path ?>image/store_logo.png" alt="" />
                </a>
            </div>
		    <div style="height: 22px; width: 100%"></div>
			<?php endif; ?>

		    
        </div>
    	<div class="row_3 ofh">
            <div class="container_24" style="width: auto">

             <!-- LEFT COLUMN BEGIN -->

             <div id="columnLeft" class="grid_5 pull_19" style="left: 0<?php if (! $is_main): ?>; margin-top: 140px<?php endif; ?>">
                 <div>
                     <div class="infoBoxWrapper list">
                         <div class="box_wrapper">
                             <div class="infoBoxHeading">
                                 <span>Категории</span>
                             </div>
                             <div class="infoBoxContents">
								<div class="menu-categories">
									<cms3:include renderer="block" position="nb_leftmenu" />
								</div>
                             </div>
                         </div>
                     </div>
                    <div class="currencies box3" style="display:none">
                        <label class="fl_left">Курс валюты: </label>
                        <form name="currencies" action="http://livedemo00.template-help.com/osc_35400/index.php" method="get">
                            <select name="currency" class="select">
                                <option value="USD" selected="selected">Гривна</option>
                                <option value="UAN" >Доллар</option>
                                <option value="EUR">Евро</option>
                            </select>
                            <input type="hidden" name="cPath" value="2">
                            <input type="hidden" name="osCsid" value="9gv8ia6td4pne7j6qsa8j0kv76">
                        </form>
                    </div>
                 </div>
             </div>


             <!-- LEFT COLUMN END -->
            <div style="position: relative; /*margin-left: 200px;*/ overflow:  hidden">
            	<div id="bodyContent" class="grid_19 push_5 " style="left: auto; width: 100%; min-height: 300px">
 					<div class="wrapper_cont" style="">

	
						<div class="contentPadd">
								<cms3:include renderer="block" position="nb_content" />
						</div>

					</div>
				</div> <!-- bodyContent //-->
			</div>
           
                


    		</div>
    	</div>   
    	<div class="row_4 ofh">     
        	<div class="container_24" style="width: auto">


        <div class="grid_24">
		<div class="footer">
                
            <div class="Footer_BoxWrapper footer_menu">
                <h4 class="Footer_BoxHeading">Main Menu</h4>
	            <cms3:include renderer="block" position="nb_topmenu" />
            </div>
			

            <p>© <strong><a href="http://newbathroom.com.ua/">NewBathroom</a></strong>, 2011. Разработка сайта&nbsp;&#8212; <strong><a href="http://malevich.com.ua">Malevich</a></strong>. Сайт работает под управлением <strong><a href="http://cms3.org">CMS 3.0</a></strong>.<!-- {%FOOTER_LINK} --> </p>

            
        </div>   

</div>
</div>
       </div>       
    
    
 </div></div> <!-- </div> bodyWrapper //-->

<!--[if IE]>
  <link href="css/ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
  
</body></html>