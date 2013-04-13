
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

        <script type="text/javascript">
            var sender_id="<?php echo $sender_id; ?>";
            var receiv_id="<?php echo $receiv_id; ?>";
        </script>


        <script type="text/javascript">
            var base_url=" <?php echo base_url(); ?>";
        </script>


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js" type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>js/ticker.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/setting.js"  type="text/javascript" ></script> 


        <script src="<?php echo base_url(); ?>js/jquery.ticker.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/site.js" type="text/javascript"></script>


        <script src="<?php echo base_url(); ?>js/chat.js" type="text/javascript" ></script>


        <style type="text/css"> 
            .box img{width:250px;height:150px;}
            #chat_message{width:760px;margin-left:10px;}
            .cta1{padding:5px 15px 5px 15px; margin-top:-30px;}
            a:hover{text-decoration:underline}
            .blog-one{background:none;padding-bottom:10px;border-bottom:dotted 1px #111;margin-bottom:15px;}
            #mail_icon{margin-top:10px; padding:1px;  border: 1px solid #ccc;-webkit-border-radius: 3px;
                       -moz-border-radius: 3px;
                       border-radius: 3px;background:#fff;}

        </style>

    </head>
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
            <?php include 'tempelet/news.php'; ?>


            <div id="content">
                <div id="left">
                    <h3 style="float:right;color:#fff;width:800px;text-align:center">اخر الرسائل الوارده اليك</h3>                       

                    <div class="chat_box" >



                    </div><!-----/chat_box---------->




                    <?php echo form_input(array('id' => 'chat_message', 'name' => 'message', 'onclick' => 'get_chat_messages();')); ?></td>

                    <div class="centerdiv">

                        <button type="button" id="post_button" class="cta1">ارسال</button>




                    </div>          
                </div>


                <div id="right">
                    <?php include 'tempelet/main_menu.php'; ?>
                    <div id="clear"></div>
                    <div id="serv_block" >
                        <h3 style="margin-top:-10px;">الخدمات الاكثر ربحا</h3>
                        <div style="background-color:#5e8d03">
                            <div id="most">
                                <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                            </div>

                            <div id="most">
                                <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                            </div>

                            <div id="most">
                                <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                            </div>

                            <div id="most">
                                <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                            </div>

                            <div id="most">
                                <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                            </div>

                        </div>

                        <div id="clear"></div>

                        <?php include 'tempelet/righ.php'; ?>
                    </div>	

                </div>

            </div>


            <!-- end of section middle -->

            <!-- start of section bottom -->
            <?php include('footer.php') ?>
            <!-- end of section bottom -->

        </div>
        <!-- end of wrapper -->

    </body>
</html>