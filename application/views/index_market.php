<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>تسويق الكتروني</title>

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
        <style type="text/css"> 
            .box img{width:200px;height:120px;
                     border-top-right-radius:12px;
                     -moz-border-radius-topright:12px;
                     -webkit-border-top-right-radius:12px;
                     border-top-left-radius:12px;
                     -moz-border-radius-topleft:12px;
                     -webkit-border-top-left-radius:12px;
            }
            .box-image{
                border-top-right-radius:12px;
                -moz-border-radius-topright:12px;
                -webkit-border-top-right-radius:12px;
                border-top-left-radius:12px;
                -moz-border-radius-topleft:12px;
                -webkit-border-top-left-radius:12px;
            }

            .serv{width:180px;margin-right:10px;}

            .box{
                width:190px;height:250px;
                -moz-border-radius: 12px;
                -webkit-border-radius: 12px;
                border-radius: 12px;	
                margin-bottom:0px;
            }
            .box-desc h5{font-size:14px;}
            .box:hover{
                -webkit-box-shadow: 0px 0px 20px rgba(50, 50, 50, 1);
                -moz-box-shadow:    0px 0px 20px rgba(50, 50, 50, 1);
                box-shadow:         0px 0px 20px rgba(50, 50, 50, 1);	
            }
            select{width:100px;float:left;padding:0px;margin-top:-3px;}
            .marketh span a{padding:5px;}
        </style>

    </head>
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
                    <h4 class="marketh" style="margin-top:5px;height:30px;background:#690;width:100%">

                        <span style="text-align:right;float:right;padding-right:5px;">: عرض الخدمه حسب</span>
                        <span style="text-align:right;padding-right:20px;"><a href="<?php echo base_url(); ?>site/market_date/">التاريخ</a></span>
                        <span style="text-align:right;padding-right:20px;"><a href="<?php echo base_url(); ?>site/market_order/">الطلب</a></span>
                        <span style="text-align:right;padding-right:20px;"><a href="<?php echo base_url(); ?>site/market_rate/">التقيم</a></span>

                        <span style="text-align:right;padding-right:10px;">                                        
                            <select ONCHANGE="location = this.options[this.selectedIndex].value;">
                                <option value="">اختر السعر</option> 
                                <?php
                                if (isset($prices)) {
                                    foreach ($prices as $price) {
                                        ?>            
                                        <option value="<?php echo base_url(); ?>site/price_market/<?php echo $price->price_point; ?>"><?php echo $price->price_point; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </span>
                        <span style="text-align:right;padding-right:20px;float:left;padding-left:4px;">السعر بالنقط </span>
                    </h4>
                    <div id="serv_content" style="margin:10px 0 0 0;">
                        <?php if (!isset($filter_prices)) { ?>
                            <?php if (!isset($filter_rate)) { ?>
                                <?php if (!isset($filter_date)) { ?>
                                    <?php if (!isset($filter_order)) { ?>
                                        <?php
//                        $this->load->model('sitead');
//                        $this->db->select('id, name, price_point, left( detail, 100 ) , photo_name, c_id, sc_id');
                                        if ($this->uri->segment(3) != '' && $this->uri->segment(4) != '') {
                                            $c_id = $this->uri->segment(3);
                                            $sc_id = $this->uri->segment(4);
//                            $this->db->from('service');
//                            $this->db->where('sc_id', $sc_id);
                                            $sql = 'SELECT id,c_id, name, price_point, left( detail, 100 )  AS detail, photo_name, c_id, sc_id FROM service where sc_id=' . $sc_id;
//                            $sql+=' where sc_id=' . $sc_id;
                                            $query = $this->db->query($sql);
                                        } else if ($this->uri->segment(3) != '') {
                                            $c_id = (int) $this->uri->segment(3);
//                            $this->db->from('service');
//                            $this->db->where('c_id', $c_id);
                                            $sql = 'SELECT id,c_id, name, price_point, left( detail, 100 )  AS detail, photo_name, c_id, sc_id FROM service where c_id=' . $c_id;

                                            $query = $this->db->query($sql);
                                        } else {
                                            $sql = 'SELECT id,c_id, name, price_point, left( detail, 100 )  AS detail, photo_name, c_id, sc_id FROM service';
                                            $query = $this->db->query($sql);
                                        }
                                        if (isset($query)) {
                                            if ($query->num_rows() > 0) {
                                                $rows = $query->result();
                                                foreach ($rows as $row) {
                                                    ?>

                                                    <div class="serv" >
                                                        <div class="box">
                                                            <div class="box-image">
                                                                <a href="<?php echo base_url() . "site/market_deatils/". $row->id.'/'.$row->c_id ; ?>"  ><img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $row->photo_name; ?>" alt=""  class="scale-grid"/></a>
                                                            </div>
                                                            <div class="box-desc center" style="height:50px;margin:0px;" >
                                                                <h5><a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"><?php echo $row->name ?></a></h5>


                                                                <a href="<?php echo base_url(); ?>site/order/<?php echo $row->id ?>" id="ask" style="width:120px;margin:auto;padding-top:5px;margin-top:20px;margin-right:5px;">أطلب الخدمه</a>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <h3 style="float:right;color:#fff;width:800px;text-align:center">لا توجد نتائج بحث يرجى أعاده المحاولة</h3> 
                                                <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                        <?php
                        if (isset($filter_prices)) {
                            foreach ($filter_prices as $row) {
                                ?>
                                <div class="serv" >
                                    <div class="box">
                                        <div class="box-image">
                                            <a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"  ><img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $row->photo_name; ?>" alt=""  class="scale-grid"/></a>
                                        </div>
                                        <div class="box-desc center" style="height:50px;margin:0px;" >
                                            <h5><a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ;?>"><?php echo $row->name ?></a></h5>


                                            <a href="<?php echo base_url(); ?>site/order/<?php echo $row->id ?>" id="ask" style="width:120px;margin:auto;padding-top:5px;margin-top:20px;margin-right:5px;">أطلب الخدمه</a>

                                        </div>
                                    </div>
                                </div>




                                <?php
                            }
                        }
                        ?>
                        <!------------------------------------------------------>
                        <?php
                        if (isset($filter_prices)) {
                            foreach ($filter_prices as $row) {
                                ?>
                                <div class="serv" >
                                    <div class="box">
                                        <div class="box-image">
                                            <a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ;?>"  ><img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $row->photo_name; ?>" alt=""  class="scale-grid"/></a>
                                        </div>
                                        <div class="box-desc center" style="height:50px;margin:0px;" >
                                            <h5><a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"><?php echo $row->name ?></a></h5>


                                            <a href="<?php echo base_url(); ?>site/order/<?php echo $row->id ?>" id="ask" style="width:120px;margin:auto;padding-top:5px;margin-top:20px;margin-right:5px;">أطلب الخدمه</a>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!------------------------------------------------------>
                        <!------------------------------------------------------>
                        <?php
                        if (isset($filter_date)) {
                            foreach ($filter_date as $row) {
                                ?>
                                <div class="serv" >
                                    <div class="box">
                                        <div class="box-image">
                                            <a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"  ><img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $row->photo_name; ?>" alt=""  class="scale-grid"/></a>
                                        </div>
                                        <div class="box-desc center" style="height:50px;margin:0px;" >
                                            <h5><a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"><?php echo $row->name ?></a></h5>


                                            <a href="<?php echo base_url(); ?>site/order/<?php echo $row->id ?>" id="ask" style="width:120px;margin:auto;padding-top:5px;margin-top:20px;margin-right:5px;">أطلب الخدمه</a>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!------------------------------------------------------> 

                        <!------------------------------------------------------>
                        <?php
                        if (isset($filter_rate)) {
                            foreach ($filter_rate as $row) {
                                ?>
                                <div class="serv" >
                                    <div class="box">
                                        <div class="box-image">
                                            <a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"  ><img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $row->photo_name; ?>" alt=""  class="scale-grid"/></a>
                                        </div>
                                        <div class="box-desc center" style="height:50px;margin:0px;" >
                                            <h5><a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"><?php echo $row->name ?></a></h5>


                                            <a href="<?php echo base_url(); ?>site/order/<?php echo $row->id ?>" id="ask" style="width:120px;margin:auto;padding-top:5px;margin-top:20px;margin-right:5px;">أطلب الخدمه</a>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!------------------------------------------------------>

                        <!------------------------------------------------------>
                        <?php
                        if (isset($filter_order)) {
                            foreach ($filter_order as $row) {
                                ?>
                                <div class="serv" >
                                    <div class="box">
                                        <div class="box-image">
                                            <a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"  ><img src="<?php echo base_url(); ?>imagesService/thumb/<?php echo $row->photo_name; ?>" alt=""  class="scale-grid"/></a>
                                        </div>
                                        <div class="box-desc center" style="height:50px;margin:0px;" >
                                            <h5><a href="<?php echo base_url() . "site/market_deatils/" . $row->id.'/'.$row->c_id ; ?>"><?php echo $row->name ?></a></h5>


                                            <a href="<?php echo base_url(); ?>site/order/<?php echo $row->id ?>" id="ask" style="width:120px;margin:auto;padding-top:5px;margin-top:20px;margin-right:5px;">أطلب الخدمه</a>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!------------------------------------------------------>
                    </div></div>


                <div id="right">

                    <?php include 'tempelet/main_menu.php'; ?>
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