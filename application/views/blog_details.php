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
        textarea{margin-right:50px;width:685px;}


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
                    <!---------------------------------------------------------->                
                    <div id="blog_details">
                    
                    
                        <?php
                        if ($this->uri->segment(3) != '') {
                            $id = $this->uri->segment(3);
                            $sql = "UPDATE `topic` SET `num_seen`=(`topic`.`num_seen` +1) WHERE `id`=$id";
                            $this->db->query($sql);
//                            $this->load->model('sitead');
//                            $this->sitead->update_num_blog($id);
                            $this->db->from('topic');
                            $this->db->where('id', $id);

                            $query = $this->db->get();
                            if ($query->num_rows() > 0) {
                                $rows = $query->result();
                                foreach ($rows as $row) {
                                    ?>
                                    <img class="subject_details" src="<?php echo base_url(); ?>upload/topic/<?php echo $row->t_photo_name; ?>" /> 
                                    <div id="blog_content">
                                    <h4>
                                        <?php echo $row->title; ?></h4>
                                    <p id="content">
                                        <?php echo $row->content; ?>
                                    </p>
                                    <?php
                                }
                            } else {
                                redirect('site/blog');
                            }
                        } else {
                            redirect('site/blog');
                        }
                        ?>
                        <div id="clear"></div>
                        <h4 style="margin-top:30px;height:30px;">

                            <div id="media_share">

                                <div style="float:left;margin-top:3px;margin-left:5px;">

                                    <div class="twitte2r">
                                    <a href="http://twitter.com/share"  class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>

                                </div>

                                <div style="float:left;margin-top:-3px;margin-left:50px;">
                                    <a  name="fb_share"  type="button" share_url="<?php echo base_url(); ?>site/blog_details/<?php
                        echo $id = $this->uri->segment(3);
                        ?>">FShare</a> 
                                    <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript">
                                    </script>
                                </div>


                                <div style="float:left">
                                    <iframe  src="https://www.facebook.com/plugins/like.php?href<?php echo base_url(); ?>site/blog_details/<?php
                                        echo $id = $this->uri->segment(3);
                        ?>"
                                             scrolling="no" frameborder="0" 
                                             style="width:330px; height:50px"></iframe>
                                </div>

                            </div>
                          
                        </h4>
                        
                        </div>
                        <div id="clear"></div>
                        <div class="heading center" style="background-color:transparent">
                            <div class="dotted"></div>
                            <h4><span class="bold" style="color:#fff">موضوعات مشابه</span></h4>
                            <div class="dotted"></div>
                        </div>
                        <table width="450" border="0" style="margin:auto">
                         <tr>
                        <?php if(isset($same_topics1)){
							foreach($same_topics1 as $topic1){
							?>
                           
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/topic/thumb/<?php echo $topic1->t_photo_name ; ?>"  width="60" height="50"/>
                                        <h6 id="h6" style="margin-top:-5px;"><a href="<?php echo base_url(); ?>site/blog_details/<?php echo $topic1->id.'/'.$topic1 ->c_id; ?>"><?php echo  $topic1->title ; ?></a></h6>
                                        <p id="p" style="background:none;margin-right:"><?php echo $topic1->content ; ?></p>
                                    </div>
                                </td>
                           
                            <?php } }?>
                           </tr>
                           <tr>
                        <?php if(isset($same_topics2)){
							foreach($same_topics2 as $topic1){
							?>
                           
                                <td>
                                    <div id="most">
                                        <img src="<?php echo base_url(); ?>upload/topic/thumb/<?php echo $topic1->t_photo_name ; ?>"  width="60" height="50"/>
                                        <h6 id="h6" style="margin-top:-5px;"><a href="<?php echo base_url(); ?>site/blog_details/<?php echo $topic1->id.'/'.$topic1 ->c_id; ?>"><?php echo  $topic1->title ; ?></a></h6>
                                        <p id="p" style="background:none"><?php echo $topic1->content ; ?></p>
                                    </div>
                                </td>
                           
                           
                            <?php } }?>
                           </tr>    
                        </table>
                        <div id="clear"></div>
                        <div id="comments" style="margin-top:-30px;"> 
                            <h3 style="width:120px;">أضافة تعليق</h3>
                            <div id="clear"></div>
                            <div style="margin-top:-20px;">
                            <?php
                            echo form_open('site/addcomment');
                            ?>
                            <input type="hidden" name="type" value="blog"/>
                            <input type="hidden" name="post_id" value="<?php echo $id; ?>"/>
                            <input type="hidden" name="parent" value="0"/>
                            <?php echo form_textarea(array('name' => 'comment', 'id' => "comment")); ?>

                            <input type="submit" id="ask2" style="margin-top:130px;margin-right:-120px;position:relative" value="اضف التعليق" />
                            <?php
                            echo form_close();
                            ?>
                            </div>
                        </div>
                        <div id="clear"></div>   
                        <div id="comments" style="margin-top:-50px;"> 
                            <h3 style="width:120px;">التعليقات</h3>
                            <?php
                            $this->db->where('post_id', $id);
                            $this->db->where('on', "blog");
                            $this->db->where('parent', "0");
                            $q = $this->db->get('comments');
                            include 'tempelet/comments.php';
                            ?>
                        </div>

                    </div>
                    <div id="serv_content">


                    </div></div>


                <div id="right">
                <?php echo form_open('search');  ?>
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