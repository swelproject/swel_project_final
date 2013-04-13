<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>المدونة</title>

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


    </head>
    <style type="text/css">

        #label{width:73%;height:40px;background:#355009;margin-top:5px;
               -webkit-border-radius: 10px;
               -moz-border-radius: 10px;
               border-radius: 10px;
               color:#fff;

        }
        #label span{text-align:right;float:right;margin:10px 10px 0 0px}
        #label {margin-right:20px;}
        #add{float:left;margin-top:-36px;}
        #name a:hover{text-decoration:underline}
        #result{color:#FC0}
        #ask{width:40px;float:left;margin-top:-20px;}
    </style>
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
                    <!---------------------------------------->

                    <?php
//                        $this->load->model('sitead');
                    if ($this->uri->segment(3) != '' && $this->uri->segment(4) != '') {
                        $c_id = $this->uri->segment(3);
                        $sc_id = $this->uri->segment(4);
                        $this->db->from('topic');
                        $this->db->where('statue', '1');
                        $this->db->where('sc_id', $sc_id);
                        $query = $this->db->get();
                    } else if ($this->uri->segment(3) != '') {
                        $c_id = (int) $this->uri->segment(3);
                        $this->db->from('topic');
                        $this->db->where('c_id', $c_id);
                        $this->db->where('statue', '1');
                        $query = $this->db->get();
                    } else {
                        $this->db->where('statue', '1');
                        $query = $this->db->get('topic');
                    }
                    if (isset($query)) {
                        if ($query->num_rows() > 0) {
                            $rows = $query->result();

                            //<!----------------------------------------------------------> 
                            foreach ($rows as $row) {
                                ?>

                                <div id="blog" style="width: 780px;">
                                    <a href="<?php echo base_url(); ?>site/blog_details/<?php echo $row->id.'/'.$row ->c_id; ?>"> <img src="<?php echo base_url(); ?>upload/topic/thumb/<?php echo $row->t_photo_name; ?>" width="190" height="160" /> </a>
                                    <h3> <a href="<?php echo base_url(); ?>site/blog_details/<?php echo $row->id.'/'.$row ->c_id; ?>"><?php echo $row->title; ?></a></h3>
                                    <p>
                                        <?php
                                        $this->db->from('user');
                                        $this->db->where('id', $row->user_id);
                                        $user_query = $this->db->get();
                                        if ($user_query->num_rows() > 0) {
                                            $user_rows = $user_query->result();
                                            foreach ($user_rows as $user_row) {
                                                ?>
                                            <div id="add">  <span style="float:right;margin-left:5px;color:#FFF">تمت اضافته بواسطة </span><span id="name"><a style="color:#CCC" href="<?php echo base_url(); ?>user/visit_profile/<?php echo $user_row->id; ?>"><?php echo $user_row->username; ?></a></span></div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </p>
                                    <p style="text-align:right;margin-top:10px;height:72px;width:100%">
                                        <?php echo substr($row->content, 0, 300); ?>
                                    </p>
                                    <div id="label">  
                                        <?php
                                        //category name
                                        $this->db->from('blog_category');
                                        $this->db->where('id', $row->c_id);
                                        $blog_name = $this->db->get();
                                        $blog_name = $blog_name->result();
                                        foreach ($blog_name as $name) {
                                            
                                        }
                                        ?>
                                        <div> <span id="result">: التصنيف</span><span ><?php echo $name->name; ?></span> </div>
                                        <div> <span id="result">: تاريخ الأضافة</span><span ><?php echo substr($row->date, 0, 10); ?></span> </div>
                                        <?php
                                        $sqll = 'SELECT count(id) as count FROM `comments` WHERE `on`="blog" and `post_id`=' . $row->id;
                                        $count_comments = $this->db->query($sqll);
                                        if ($count_comments->num_rows() > 0) {
                                            $count_comment = $count_comments->result();
                                            foreach ($count_comment as $comment) {
                                                
                                            }
                                        }
                                        ?>
                                        <div><span id="result">: التعليقات</span> <span ><?php echo $comment->count; ?></span>  </div>
                                        <div><span id="result">: عدد الزيارات</span>  <span><?php echo $row->num_seen; ?></span></div> </div>
                                    <a href="<?php echo base_url(); ?>site/blog_details/<?php echo $row->id.'/'.$row ->c_id; ?>" id="ask" style="margin-top:-35px;margin-left:10px;" >المزيد </a>                      
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>

                    <!----------------------------------------------->
                </div>
                <div id="right">

<?php echo form_open('search/');  ?>
 <?php
            echo form_input(array('id' => 'searchinput', 'name' => 'keywords', 'value' => 'البحث في المدونه',
                'onblur' => "if(this.value=='') this.value='البحث في المدونه'", 'onfocus' => "if(this.value =='البحث في المدونه' ) this.value=''"
            ));
            ?>
  
<?php echo form_close();?>
                    <?php include 'tempelet/blog_menu.php'; ?>

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