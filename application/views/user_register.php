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
        <style type="text/css"> 
            .box img{width:200px;height:120px;
                     border-top-right-radius:12px;
                     -moz-border-radius-topright:12px;
                     -webkit-border-top-right-radius:12px;
                     border-top-left-radius:12px;
                     -moz-border-radius-topleft:12px;
                     -webkit-border-top-left-radius:12px;
            }
            .box-image{
                border-top-right-radius:12px;
                -moz-border-radius-topright:12px;
                -webkit-border-top-right-radius:12px;
                border-top-left-radius:12px;
                -moz-border-radius-topleft:12px;
                -webkit-border-top-left-radius:12px;
            }

            .serv{width:180px;margin-right:10px;}

            .box{
                width:190px;height:250px;
                -moz-border-radius: 12px;
                -webkit-border-radius: 12px;
                border-radius: 12px;	
                margin-bottom:0px;
            }
            .box-desc h5{font-size:14px;}
            .box:hover{
                -webkit-box-shadow: 0px 0px 20px rgba(50, 50, 50, 1);
                -moz-box-shadow:    0px 0px 20px rgba(50, 50, 50, 1);
                box-shadow:         0px 0px 20px rgba(50, 50, 50, 1);	
            }

            select{width:105%;text-align:right}

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

            <!-- start of section middle -->
            <?php include 'tempelet/news.php'; ?>


            <div id="content">
                <div id="left">

                    <div id="serv_content" style="margin:10px 0 0 0;">

                        <div class="featured_form">

                            <?php echo form_open('site/sign_user_validation'); ?>

                            <div class="heading center">
                                <h4><span class="bold">يجب ادخال جميع البيانات بشكل صحيح</span></h4>
                                <div class="dotted"></div>
                            </div>
                            <div style="color:#FC3;margin-right:140px;">
                                <?php
                                if (isset($regist)) {
                                    echo '<p style="margin-left:30px;color:#3C3;">' . $regist . '</p>';
                                } else {
                                    echo validation_errors();
                                    if (isset($$country) && empty($country)) {
                                        echo '<p style="margin-left:500px;">يجب اختيار الدوله</p>';
                                    }
                                }
                                ?></div>


                            <table width="750" border="0">
                                <tr>

                                    <td width="554"> <?php echo form_input(array('name' => 'username', 'id' => "name", 'value' => $this->input->post('username'))); ?></td>
                                    <td width="186"><label for="name">اسم المستخدم</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_input(array('name' => 'email', 'id' => "email", 'value' => $this->input->post('email'))); ?></td>
                                    <td><label for="email">البريد الالكتروني</label></td>
                                </tr>

                                <tr>

                                    <td>

                                        <?php
                                        $options = array(
                                            '' => 'اختار دولتك',
                                            'JO' => 'الأردن',
                                            'AE' => 'الإمارات',
                                            'BH' => 'البحرين',
                                            'SA' => 'السعودية',
                                            'DZ' => 'الجزائر',
                                            'SD' => 'السودان',
                                            'SO' => 'الصومال',
                                            'IQ' => 'العراق',
                                            'KW' => 'الكويت',
                                            'MA' => 'المغرب',
                                            'YE' => 'اليمن',
                                            'TN' => 'تونس',
                                            'KM' => 'جزر القمر',
                                            'DJ' => 'جيبوتي',
                                            'OM' => 'سلطنة عمان',
                                            'SY' => 'سوريا',
                                            'PS' => 'فلسطين',
                                            'QA' => 'قطر',
                                            'LB' => 'لبنان',
                                            'LY' => 'ليبيا',
                                            'EG' => 'مصر',
                                            'MR' => 'موريتانيا',
                                        );


                                        echo form_dropdown('country', $options, 'country');
                                        ?> 
                                    </td>
                                    <td><label for="email">الدوله</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_input(array('name' => 'city', 'id' => "email", 'value' => $this->input->post('city'))); ?></td>
                                    <td><label for="email">المدينه</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_input(array('name' => 'address', 'id' => "email", 'value' => $this->input->post('address'))); ?></td>
                                    <td><label for="email">العنوان</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_input(array('name' => 'phone', 'id' => "email", 'value' => $this->input->post('phone'))); ?></td>
                                    <td><label for="email">التليفون</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_input(array('name' => 'zip_code', 'id' => "email", 'value' => $this->input->post('zip_code'))); ?></td>
                                    <td><label for="email">الرقم البريدي</label></td>
                                </tr>


                                <tr>

                                    <td> <?php echo form_input(array('name' => 'parent_link', 'id' => "email", 'value' => $this->input->post('parent_link'))); ?></td>
                                    <td><label for="email">الاب لين</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_password(array('name' => 'password', 'id' => "email")); ?></td>
                                    <td><label for="email">كلمه السر</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_password(array('name' => 'c_password', 'id' => "email",)); ?></td>
                                    <td> <label for="email">تأكيد كلمه السر</label></td>
                                </tr>

                                <tr>

                                    <td> <?php echo form_password(array('name' => 'sec_password', 'id' => "email",)); ?></td>
                                    <td> <label for="email">كلمه السر الثانيه</label></td>
                                </tr>
                                <tr>

                                    <td> <?php echo form_input(array('name' => 'bank_email', 'id' => "email", 'value' => $this->input->post('email'))); ?></td>
                                    <td><label for="email">ايميل البنك</label></td>
                                </tr>
                            </table>





                            <div class="centerdiv">
                                <div class="cta-button optin small">
                                    <button type="submit" class="cta1">تسجيل</button>

                                    <span class="text"> من فضلك ادخل جميع بياناتك صحيحه لانه في حاله معرفه انها بيانات خاطئه يتم إيقاف العضويه تلقائيا</span>

                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>

                    </div></div>


                <div id="right">

                    <div class="main_menu" >

                        <ul class="nav2" style="margin-top:-10px">
                            <h3 id="dept">الاقسام</h3>
                            <?php
                            $query1 = $this->db->get('category');
                            if ($query1->num_rows() > 0) {
                                $rows = $query1->result();
                                foreach ($rows as $row) {
                                    $base = base_url() . "site/market/";
//                                    echo $rows->num_rows();
                                    $this->db->where('c_id', $row->id);
                                    $query2 = $this->db->get('sub_categ');
                                    if ($query2->num_rows() > 0) {
                                        echo "<li><a>$row->name</a></li>";
                                        ?>
                                        <div class="sub_links" style="display: none; ">

                                            <?php
                                            $rowsSub = $query2->result();
                                            foreach ($rowsSub as $rowSub) {
                                                echo "<p><a href=\"$base$rowSub->c_id/$rowSub->id\">$rowSub->name</a></p> ";
                                            }
                                            ?> 
                                        </div>

                                        <?php
                                    } else {
                                        echo "<li><a href=\"$base$row->id\">$row->name</a></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>    
                    </div>

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