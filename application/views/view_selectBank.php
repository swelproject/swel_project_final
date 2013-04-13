<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>تسويق الكتروني</title>

        <meta name="keywords" content="content">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">		

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/stylesheet.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/angelina.css" type="text/css" >		
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" >		
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" >	
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
        <!-- template skin -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/skin.css"type="text/css" >	

        <link href="<?php echo base_url(); ?>css/ticker-style.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js" type="text/javascript" ></script>

        <!-- FlexSlider -->	
        <script src="<?php echo base_url(); ?>js/jquery.flexslider.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/function.js" type="text/javascript" ></script> 
        <script src="<?php echo base_url(); ?>js/custom.js" type="text/javascript" ></script> 
        <!-- Ticker -->	
        <script src="<?php echo base_url(); ?>js/ticker.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/setting.js"  type="text/javascript" ></script> 

        <!-- prettyPhoto -->	
        <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/setting-1.js"type="text/javascript"  ></script> 

        <!-- ui totop -->	
        <script src="<?php echo base_url(); ?>js/smoothscroll.js"  type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>js/jquery.ui.totop.js"  type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>js/jquery.ticker.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/site.js" type="text/javascript"></script>


    </head>

    <style type="text/css">
        #serv_img{
            background:#fff;
            padding:3px;
            border:1px solid #ccc;
            -moz-border-radius: 12px;
            -webkit-border-radius: 12px;
            border-radius: 12px;


        }
        textarea{margin-right:20px;width:730px;}
    </style>
    <body>

        <!-- start of wrapper -->
        <div id="wrapper">

            <!-- start of section top -->
            <section id="top">
                <div id="top-wrapp">
                    <?php include('header.php') ?>
                </div>
            </section>
            <!-- end of section top -->

            <!-- start of section middle -->
            <?php include 'tempelet/news.php'; ?>
            <section id="">	
                <div class="container totop30">
                    <section id="middle">
                        <div id="content">
                            <div id="left">       
                                <form method="post" action="https://secure.payza.com/checkout" >
                                    <input type="hidden" name="ap_merchant" value="mohamedsaad2085@yahoo.com"/>
                                    <input type="hidden" name="ap_purchasetype" value="Service"/>
                                    <input type="hidden" name="ap_itemname" value="creidit"/>
                                    <input type="text" name="ap_amount" />
                                    <input type="hidden" name="ap_currency" value="USD"/>

                                    <!--<input type="hidden" name="ap_quantity" value="20"/>-->
<!--                                    <input type="hidden" name="ap_itemcode" value="XYZ123"/>
                                    <input type="hidden" name="ap_description" value="Service"/>-->
                                    <input type="hidden" name="ap_returnurl" value="http://localhost/shelen/payment/okMessage">
                                    <input type="hidden" name="ap_cancelurl" value="http://localhost/shelen/payment/cancelMessage"/>

                                    <!--<input type="hidden" name="ap_taxamount" value="2.49"/>-->
                                    <!--<input type="hidden" name="ap_additionalcharges" value="1.19"/>-->
                                    <!--<input type="hidden" name="ap_shippingcharges" value="7.99"/>--> 

                                    <!--<input type="hidden" name="ap_discountamount" value="4.99"/>--> 
                                    <input type="hidden" name="apc_1" value="Blue"/>

                                    <input type="image" src="https://www.payza.com/images/payza-buy-now.png"/>
                                </form>

                            </div>

                            <div id="right">
                                <?php include 'tempelet/main_menu.php'; ?>
                                <div id="clear"></div>

                                <?php include 'tempelet/righ.php'; ?>
                            </div>	
                    </section>

                </div>		
            </section>
            <!-- end of section middle -->

            <!-- start of section bottom -->
            <?php include('footer.php') ?>
            <!-- end of section bottom -->

        </div>
        <!-- end of wrapper -->

    </body>
</html>