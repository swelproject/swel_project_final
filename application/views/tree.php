<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>

        <table border="1">
            <td>
                <table border="1" id="level1">
                    <?php
                    $id=$this->session->userdata('user_id');
                    $this->db->where('parent_id', 10);
                    $this->db->from('user');
                    $query_level1 = $this->db->get();
                    if ($query_level1->num_rows() > 0) {
                        $rows_level1 = $query_level1->result();
                        foreach ($rows_level1 as $row_level1) {
                            ?>
                            <tr>
                                <td>
                                    <table border="1" id="level2">
                                        <?php
                                        $this->db->where('parent_id', $row_level1->id);
                                        $this->db->from('user');
                                        $query_level2 = $this->db->get();
                                        if ($query_level2->num_rows() > 0) {
                                            $rows_level2 = $query_level2->result();
                                            foreach ($rows_level2 as $row_level2) {
                                                ?>
                                                                        <!--<tr><td><?php echo $row_level2->id; ?></td></tr>-->
                                                <tr>
                                                    <td>
                                                        <table border="1" id="level3">
                                                            <?php
                                                            $this->db->where('parent_id', $row_level2->id);
                                                            $this->db->from('user');
                                                            $query_level3 = $this->db->get();
                                                            if ($query_level3->num_rows() > 0) {
                                                                $rows_level3 = $query_level3->result();
                                                                foreach ($rows_level3 as $row_level3) {
                                                                    ?>
                                                                            <!--<tr><td><?php echo $row_level3->id; ?></td></tr>-->
                                                                    <tr>
                                                                        <td>
                                                                            <table border="1" id="level4">
                                                                                <?php
                                                                                $this->db->where('parent_id', $row_level3->id);
                                                                                $this->db->from('user');
                                                                                $query_level4 = $this->db->get();
                                                                                if ($query_level4->num_rows() > 0) {
                                                                                    $rows_level4 = $query_level4->result();
                                                                                    foreach ($rows_level4 as $row_level4) {
                                                                                        ?>
                                                                                        <tr><td><?php echo $row_level4->id; ?></td></tr>
                                                                                        <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </table>
                                                                        </td>
                                                                        <td><?php echo $row_level3->id; ?></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </table>
                                                    </td>
                                                    <td><?php echo $row_level2->id; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </table>
                                </td>
                                <td><?php echo $row_level1->id; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
<!--                    <tr><td>5</td></tr>
<tr><td>5</td></tr>
<tr><td>5</td></tr>-->
                </table>
            </td>
            <td>root<?php echo $this->session->userdata('user_id'); ?></td>
            </tr>
        </table>
        <p>&nbsp;</p>
    </body>
</html>
