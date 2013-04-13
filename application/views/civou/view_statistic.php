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
                        <h1>الأحصائيات</h1>
                        <table border="1"  style="width: 850px; border: 5px #0084b4; ">
                            <tr>
                                <td>
                                    <p style="font-size: 20px;"><a>الموظفين</a></p>
                                    <p><a href="<?php echo base_url(); ?>">أقل الموظفين تقيما</a> <a href="#"> + </a></p>
                                    <p><a href="<?php echo base_url(); ?>">أكثر الموظفين تقيما</a></p>
                                    <p><a href="<?php echo base_url(); ?>">أقل 10 موظفين تنفيذا للخدمة</a></p>
                                    <p><a href="<?php echo base_url(); ?>">wwqwqw</a></p>

                                </td>

                                <td>
                                    <p style="font-size: 20px;"><a>خدمات</a></p>
                                    <p><a href="<?php echo base_url(); ?>">أكتر 10 خدمات مبيعا</a></p>
                                    <p><a href="<?php echo base_url(); ?>">أقل 10 خدمات مبيعا</a></p>
                                    <p><a href="<?php echo base_url(); ?>">احدث 10 خدمات</a></p>
                                    <p><a href="<?php echo base_url(); ?>">اقدمم 10 خدمات</a></p>
                                    <p><a href="<?php echo base_url(); ?>">أكثر 10 خدمات أرباحا</a></p>
                                    <p><a href="<?php echo base_url(); ?>">أقل 10 خدمات أرباحا</a></p>

                                </td>

                                <td>
                                    <p style="font-size: 20px;"><a>الأعضاء</a></p>

                                    <p><a href="<?php echo base_url(); ?>">أكثر الأعضاء شرائا</a></p>
                                    <p><a href="<?php echo base_url(); ?>">أقل الأعضاء شرئا</a></p>
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