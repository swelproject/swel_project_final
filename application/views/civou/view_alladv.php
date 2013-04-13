<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>لوحة الأدمن</title>
        <?php include 'tempelet/links.php'; ?>
    </head>
    <body>

        <div id="wrapper">
            <!-- start of section top -->
            <section id="top">
                <div id="top-wrapp">
                    <?php include('tempelet/header.php') ?>
                </div>
            </section>
            <?php include 'tempelet/news.php'; ?>

            <div id="content">
                <div id="left">
                    <div id="profile_half1">
                        <h4><span class="bold">الأعلانات</span></h4>
                        <table border="5" >
                            <?php
                            $this->db->from('adv');
                            $query = $this->db->get();
                            if ($query->num_rows() > 0) {
                                $rows = $query->result();
                                ?>
                                <tr style="text-align: right;">
                                    <td>اسم الاعلان</td>
                                    <td style="width: 40px;"></td>
                                    <td>لينك الأعلان</td>
                                    <td style="width: 40px;"></td>
                                    <td>نص الأعلان</td>
                                    <td style="width: 40px;"></td>
                                    <td></td>
                                </tr>
                                <?php
                                foreach ($rows as $row) {
                                    ?>
                                    <tr>
                                        <td><h6><?php echo $row->title; ?></h6></td>
                                        <td style="width: 40px;"></td>
                                        <td><h6>
                                                <?php
                                                echo $row->link;
                                                ?>
                                            </h6></td>
                                        <td style="width: 40px;"></td>
                                        <td><h6><?php echo substr($row->content,0,100); ?></h6></td>
                                        <td style="width: 40px;"></td>
                                        <td><h6><a style="color: #1a1a1a;" href="<?php echo base_url(); ?>civou/c_adv/delete/<?php echo $row->id; ?>">Delete</a></h6></td>
                                        <td style="width: 40px;"></td>
                                        <td><h6><img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $row->image; ?>"  width="60" height="50"/></h6></td>
                                        <td style="width: 40px;"></td>
                                        <td><h6><a style="color: #1a1a1a;" href="<?php echo base_url(); ?>civou/c_adv/active/<?php echo $row->id;?>/<?php echo $row->statue; ?>"><?php echo $row->statue;?></a></h6></td>
                                        <td style="width: 40px;"></td>
                                        
                                    </tr>

                                    <?php
                                }
                            }
                            ?>

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