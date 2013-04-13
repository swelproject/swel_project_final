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
                                <div id="serv_content">
                                    <?php
                                    if ($this->uri->segment(3) != '') {
                                        $id = $this->uri->segment(3);
                                        $this->db->from('service');
                                        $this->db->where('id', $id);
                                        $query = $this->db->get();
                                        if ($query->num_rows() > 0) {
                                            $rows = $query->result();
                                            foreach ($rows as $row) {
                                                ?>
                                                <div id="serv_details">
                                                    <p id="serv_name"><?php echo $row->name; ?></p>
                                                    <a href="<?php echo base_url(); ?>imagesService/<?php echo $row->photo_name; ?>"  data-pretty="prettyPhoto"  class="thumb">
                                                        <img id="serv_img" src="<?php echo base_url(); ?>imagesService/<?php echo $row->photo_name; ?>" width="200" height="150"/></a>
                                                    <div id="serv_d_C">
                                                        <table style="margin-left:70px;margin-top:20px;"  border="0">
                                                            <tr>
                                                                <td>محمد جادو</td>
                                                                <td>: مقدم الخدمه</td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $row->duration; ?>يوم</td>
                                                                <td>: مده انجاز المهمه</td>
                                                            </tr>
                                                            <tr>
                                                                <td>stars</td>
                                                                <td>: تقيم الموظف</td>
                                                            </tr>
                                                            <tr>
                                                                <td>stars</td>
                                                                <td>: تقيم الخدمه</td>
                                                            </tr>

                                                        </table>

                                                        <table  border="0"  style="margin-top:20px;" >
                                                            <tr>
                                                                <td><?php echo $row->price_point; ?></td>
                                                                <td>: سعر الخدمه</td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $row->order_num; ?></td>
                                                                <td>: عدد الطلبات</td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $row->add_date; ?></td>
                                                                <td>: تاريخ العرض</td>
                                                            </tr>

                                                        </table>
                                                        <div id="clear"></div>
                                                        <h4 class="marketh" style="margin-top:30px;height:30px;">

                                                            <div id="media_share">

                                                                <div style="float:left;margin-top:3px;margin-left:5px;">

                                                                    <div class="twitte2r"><a href="http://twitter.com/share"  class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>

                                                                </div>

                                                                <div style="float:left;margin-top:-3px;margin-left:50px;">
                                                                    <a  name="fb_share"  type="button" share_url="<?php echo base_url(); ?>site/blog_details/<?php
                                    echo $id = $this->uri->segment(3);
                                                ?>">FShare</a> 
                                                                    <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript">
                                                                    </script>
                                                                </div>


                                                                <div style="float:left">
                                                                    <iframe  src="https://www.facebook.com/plugins/like.php?href<?php echo base_url(); ?>site/blog_details/<?php
                                                            echo $id = $this->uri->segment(3);
                                                ?>"
                                                                             scrolling="no" frameborder="0" 
                                                                             style="width:330px; height:50px"></iframe>
                                                                </div>

                                                            </div>
                                                       
                                                        </h4>
                                                    </div>
                                                    <table width="750" border="0" id="serv_content" style="margin-top:-20px;margin-bottom:20;margin-right:20px;background:#355009;">
                                                        <tr>

                                                            <td><p id="serv_desc" style="margin-top:-10px;">
                                                                    <?php echo $row->detail; ?>
                                                                </p></td>
                                                            <td width="60"><p style="color:#fff;font-size:20px; font-weight:bold;padding:4px;margin-top:10px;"> التفاصيل</p></td>

                                                        </tr>
                                                    </table>
<div id="clear"></div>
                                                    <a href="<?php echo base_url(); ?>site/order/<?php echo $row->id ?>" style="margin-top:10px;float:left;margin-left:26px" id="ask2">أطلب الخدمه</a>
                                                    </br>
                                                    <div id="clear"></div>
                                                   <div id="clear"></div>
                        <div class="heading center" style="background-color:transparent">
                            <div class="dotted"></div>
                            <h4><span class="bold" style="color:#fff">الخدمات المشابه</span></h4>
                            <div class="dotted"></div>
                        </div>
                        <table width="450" border="0" style="margin:auto">
                            <tr>
                               <?php if(isset($same_topics1)){
							foreach($same_topics1 as $topic1){
							?>
                           
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $topic1->photo_name ; ?>"  width="60" height="50"/>
                                        <h6 id="h6" style="margin-top:-5px;"><a href="<?php echo base_url(); ?>site/blog_details/<?php echo $topic1->id.'/'.$topic1 ->c_id; ?>"><?php echo  $topic1->name ; ?></a></h6>
                                        <p id="p" style="background:none;margin-right:"><?php echo $topic1->detail ; ?></p>
                                    </div>
                                </td>
                           
                            <?php } }?>
                            </tr>
                            <tr>
                                <?php if(isset($same_topics2)){
							foreach($same_topics2 as $topic1){
							?>
                           
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $topic1->photo_name ; ?>"  width="60" height="50"/>
                                        <h6 id="h6" style="margin-top:-5px;"><a href="<?php echo base_url(); ?>site/blog_details/<?php echo $topic1->id.'/'.$topic1 ->c_id; ?>"><?php echo  $topic1->name ; ?></a></h6>
                                        <p id="p" style="background:none;margin-right:"><?php echo $topic1->detail ; ?></p>
                                    </div>
                                </td>
                           
                           
                            <?php } }?>
                            </tr>
                        </table>

                                                    
                                                    <!--///-->
                                                    <div id="clear"></div>  
                                                    <div id="comments"> 
                                                        <h3 style="width:120px;">التعليقات</h3>
                                                        <div id="clear"></div>
                                                        <?php
                                                        $this->db->where('post_id', $id);
                                                        $this->db->where('on', "service");
                                                        $q = $this->db->get('comments');
                                                        include 'tempelet/comments.php';
                                                        ?>
                                                    </div>


                                                </div>


                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
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