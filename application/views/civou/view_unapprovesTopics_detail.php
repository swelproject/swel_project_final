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
                    <div style="border: 2px solid #000; " id="profile_half1">
                        <?php
                        foreach ($detail as $row) {
                            ?>
                            <img class="subject_details" src="<?php echo base_url(); ?>upload/topic/<?php echo $row->t_photo_name; ?>" /> 
                            <h4>
                                <?php echo $row->title; ?>
                            </h4>
                          
                            <p id="content">
                                <?php echo wordwrap($row->content,150); ?>
                            </p>
                            
                            <a style="color: #000; font-size: 20px;" href="<?php echo base_url(); ?>/civou/c_b_subcategory/approve/<?php echo $row->id; ?>" >approve</a>
                        <?php } ?>

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