<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>لوحة الأدمن</title>
        <?php include 'tempelet/links.php'; ?>
    </head>
    <style type="text/css">
        h3{font-weight: bold;text-align: right;}
        table tr td a{color: #fff;text-align: right; font-family: cursive; color: #000;}

    </style>
    <body>

        <div id="wrapper">
            <!-- start of section top -->
            <section id="top">
                <div id="top-wrapp">
                    <?php include('tempelet/header.php'); ?>
                </div>
            </section>
            <?php include 'tempelet/news.php'; ?>

            <div id="content">
                <div id="left">
                    <div id="profile_half1">
                        <table border="1"  style="width: 850px; border: 5px #0084b4; ">
                            <tr>
                                <td>
                                    <p><a style="font-size: 20px;">Admin</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_admin/loadAddAdmin">Add New Admin</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_admin/allAdmin">Show All Admins</a></p> 

                                </td>
                                <td>
                                    <p style="font-size: 20px;"><a>الخدمات</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_category/loadAddCategory">أضافة قسم رئيسى</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_category/allcategory">عرض كل الأقسام الرئيسية</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_subcategory/addSubCategory">أضافة قسم فرعى</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_service/loadAddService">أضافة خدمة جديدة</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_service/loadAddService">عرض كل الخدمات</a></p> 
                                </td>
                                <td>
                                    <p style="font-size: 20px;"><a>المدونة</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_b_category/loadaddBCategory">أضافة قسم رئيسى</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_b_subcategory/addbSubCategory">أضافة قسم فرعى</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_b_subcategory/addTopic">أضافة موضوع جديد</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_b_subcategory/show_unapproved_topics">عرض المواضيع للموافقه عليها</a></p>
                                </td>
                                <td>
                                    <p style="font-size: 20px;"><a>العاملين</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_employee/loadAddemployee">أضافة عامل جديد</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_employee/allemployee">عرض كل العاملين</a></p> 

                                </td>
                            </tr>
                            <tr><td colspan="5"><div class="dotted"></div></td></tr>
                            <tr>
                                <td>
                                    <p style="font-size: 20px;"><a>الأعضاء</a></p>
                                    <p><a href="<?php echo base_url(); ?>site/user_register">أضافة عضو جديد</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_user/alluser">عرض كل الأعضاء المسجلين</a></p> 

                                </td>
                                <td>
                                    <p style="font-size: 20px;"><a>الأخبار</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_news/loadAddnews">أضافة خبر جديد</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_news/allnews">عرض كل الأخبار</a></p> 

                                </td>
                                <td>
                                    <p style="font-size: 20px;"><a>أعلانات</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_adv/loadAddadv">أضافة أعلان للأسليدر</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_adv/alladv">عرض كل الاعلانات</a></p> 

                                </td>
                                <td>
                                    <p style="font-size: 20px;"><a>أدارة البلوكات</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_main_block/loadaddtxtblock">أضافه أعلان نصى ثابت</a></p> 
                                    <p><a href="<?php echo base_url(); ?>civou/c_main_block/loadaddbanerblock">أضافه أعلان بانر ثابت</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_main_block/loadaddbanertxtblock">أضافه أعلان بانر ونص  ثابت</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_main_block/loadstatisticsblock">أضافة أحصائيات</a></p>
                                    <p><a href="<?php echo base_url(); ?>civou/c_main_block/allblock">عرض كل البلوكات</a></p> 

                                </td>
                            </tr>
                            <tr>
                                <td colspan="5"><div class="dotted"></div></td></tr>

                            <tr>
                                <td>
                                    <p style="font-size: 20px;"><a>payment Setting </a></p>
                                    <p><a href="<?php echo base_url();?>#"> عدد  الشلنات  فى الدولار </a></p> 
                                    <p><a href="<?php echo base_url(); ?>#"> </a></p>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
                <div id="right">
                    <?php include 'tempelet/menu.php'; ?>
                    <div id="clear"></div>
                    <?php include 'tempelet/serv_block.php'; ?>
                </div>
            </div>
            <?php include('tempelet/footer.php') ?>
        </div>
    </body>
</html>