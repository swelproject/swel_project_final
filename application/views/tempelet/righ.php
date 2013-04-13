<link rel="stylesheet" href="<?php echo base_url(); ?>jquery/demo/css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>jquery/flexslider.css" type="text/css" media="screen" />
<script src="<?php echo base_url(); ?>jquery/demo/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>jquery/demo/js/shCore.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>jquery/demo/js/shBrushXml.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>jquery/demo/js/shBrushJScript.js"></script>
<script src="<?php echo base_url(); ?>jquery/demo/js/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>jquery/demo/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>jquery/jquery.flexslider.js"></script>

<div class="dotted"></div>


    <?php
//$this->db->where('name','all');
    $this->db->from('main_blocks');
    $this->db->order_by("order", "asc");
    $queryy = $this->db->get();
    if ($queryy->num_rows() > 0) {
        $rowss = $queryy->result();
        foreach ($rowss as $roww) {
            echo eval("?>" . $roww->content . "<?" . "</div>");
        }
    }
    ?>