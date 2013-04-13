<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title> شيلينات | اتصل بنا</title>

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

        #label{width:73%;height:40px;background:#355009;margin-top:5px;
               -webkit-border-radius: 10px;
               -moz-border-radius: 10px;
               border-radius: 10px;
               color:#fff;

        }
        #label span{text-align:right;float:right;margin:10px 10px 0 0px}
        #label {margin-right:20px;}
        #add{float:left;margin-top:-36px;}
        #name a:hover{text-decoration:underline}
        #result{color:#FC0}
        #ask{width:40px;float:left;margin-top:-20px;}

        select {width:105%;text-align:right;}
        textarea{width:100%}
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

            <div id="content">
                <div id="left">
                    <div class="featured_form">

                        <?php echo form_open('site/contact_validation'); ?>

                        <div class="heading center">
                            <h4><span class="bold">للاستفسار عن اي معلومه او الابلاغ عن شكوي ما بالموقع ادخل البيانات التاليه من فضلك</span></h4>
                            <div class="dotted"></div>
                        </div>
                        <div style="color:#FC3;margin-right:140px;">
                            <?php
                            if (isset($regist)) {
                                echo '<p style="margin-left:30px;color:#3C3;">' . $regist . '</p>';
                            } else {
                                echo validation_errors();
                            }
                            ?></div>
                        <?php if (isset($sent)) { ?>
                            <div id="sent" style="text-align:right;font-size:19px;color:#0C0;margin-right:120px;margin-bottom:20px;">
                                <?php echo '<q>' . $sent . '</q>'; ?>
                            </div>
                        <?php } ?>

                        <?php if (isset($dont_sent)) { ?>
                            <div id="sent" style="text-align:right;font-size:19px;color:#F00;margin-right:120px;margin-bottom:20px;">
                                <?php echo '<q>' . $dont_sent . '</q>'; ?>
                            </div>
                        <?php } ?>

                        <table width="750" border="0">
                            <tr>

                                <td width="554"> <?php echo form_input(array('name' => 'name', 'id' => "name", 'value' => $this->input->post('name'))); ?></td>
                                <td width="186"><label for="name">الاسم</label></td>
                            </tr>
                            <tr>

                                <td> <?php echo form_input(array('name' => 'email', 'id' => "email", 'value' => $this->input->post('email'))); ?></td>
                                <td><label for="email">البريد الالكتروني </label></td>
                            </tr>
                            <tr>

                                <td>

                                    <?php
                                    $options = array(
                                        '' => 'اختار ',
                                        'شكوي عامه' => 'شكوي عامه',
                                        'استفسار' => 'استفسار',
                                        'مشكله في الدفع' => 'مشكله في الدفع',
                                        'شئ اخر' => 'شئ اخر',
                                    );


                                    echo form_dropdown('country', $options, $this->input->post('country'));
                                    ?> 
                                </td>
                                <td><label for="email">سبب المراسله</label></td>
                            </tr>
                            <tr>

                                <td> <?php echo form_textarea(array('name' => 'message', 'id' => "email", 'value' => $this->input->post('message'))); ?></td>
                                <td><label for="email" style="padding-top:-15px;">الرساله</label></td>
                            </tr>
                            <tr>
                        </table>
                        <div class="centerdiv">
                            <div class="cta-button optin small">
                                <button type="submit" class="cta1">ارسال</button>

                                <span class="text" style="margin-right:-10px;padding-right:3px;">سيتم الرد عليك في اسرع وقت ممكن للتواصل معك ومساعدتك في مشكلتك او استفسارك شكرا لتعاونكم</span>

                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>


                <div id="right">
                    <?php include 'tempelet/main_menu.php'; ?>

                    <div id="clear"></div>

                    <?php include 'tempelet/righ.php'; ?>
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