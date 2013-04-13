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
                        <h4><span class="bold">أدارة البلوكات </span></h4>
                        <table border="5" >
                            <?php
                            $this->db->from('main_blocks');
                            $this->db->order_by("order", "asc");
                            $query = $this->db->get();
                            if ($query->num_rows() > 0) {
                                $rows = $query->result();
                                ?>
                                <tr style="text-align: right;">
                                    <td>اسم البلوك</td>
                                    <td style="width: 100px;"></td>
                                    <td> </td>
                                    <td style="width: 100px;"></td>
                                    <td>ترتيب</td>
                                    <td style="width: 100px;"></td>
                                    <td></td>
                                </tr>
                                <?php
                                foreach ($rows as $row) {
                                    ?>
                                    <tr>
                                        <td><h6><?php echo $row->name; ?></h6></td>
                                        <td style="width: 100px;"></td>
                                        <td><h6><a style="color: #1a1a1a;" href="<?php echo base_url(); ?>civou/c_main_block/delete/<?php echo $row->id; ?>">Delete</a></h6></td>
                                        <td style="width: 100px;"></td>

                                        <?php echo form_open('civou/c_main_block/edite/'); ?>
                                        <td><h6>
                                                <?php
                                                echo form_input(array('name' => 'order', 'id' => "name", 'value' => $row->order));
                                                echo '<input type="hidden" name="id" value="' . $row->id . '" />';
                                                ?>         
                                            </h6></td>
                                        <td style="width: 100px;"></td>
                                        <td><?php
                                        echo form_submit(array('name' => 'button', 'class' => "cta1"), 'تعديل');
                                                ?></td>
                                    </tr>
                                    <?php echo form_close();?>
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