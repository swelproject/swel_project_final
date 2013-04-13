<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>لوحة الأدمن</title>
        <?php include 'tempelet/links.php'; ?>
        <?php include 'tempelet/ajax.php'; ?>

    </head>
    <body>

        <?php include('dbcon.php'); ?>
        <div id="wrapper">
            <!-- start of section top -->
            <section id="top">
                <div id="top-wrapp">
                    <?php include('tempelet/header.php') ?>
                </div>
            </section>
            <?php include 'tempelet/news.php'; ?>

            <div id="content">

                <div id="left" style="background:#111">       
                    <div class="featured_form">
                        <?php echo form_open_multipart('civou/c_adv/addadv'); ?>
                        <div class="heading center">
                            <h4><span class="bold">اضافة اعلان جديد</span></h4>
                            <div class="dotted"></div>
                        </div>
                        <ul>
                            <li>
                                <label for="name">اسم الاعلان</label>
                                <?php echo form_input(array('name' => 'name', 'id' => "name")); ?>

                            </li>
                            <li>
                                <label for="name">لينك الاعلان </label>
                                <?php echo form_input(array('name' => 'link', 'id' => "name")); ?>

                            </li>
                            <li>
                                <label for="name">الاعلان</label>
                                <?php echo form_textarea(array('name' => 'content', 'id' => "name", 'rows' => 5, 'cols' => 100)); ?>
                            </li>

                            <li>
                                <label for="name">صوره للاعلان</label>
                                <?php echo form_upload('userfile'); ?>

                            </li>
                        </ul>
                        <div class="centerdiv">
                            <div class="cta-button optin small">
                                <?php echo form_submit(array('name' => 'button', 'class' => "cta1"), 'تسجيل') ?>
                            </div>
                        </div>

                        <div class="centerdiv">
                            <div class="cta-button optin small">
                                <label> 
                                    <?php
                                    if (isset($mes)) {
                                        echo $mes;
                                    }
                                    ?>
                                </label>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
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