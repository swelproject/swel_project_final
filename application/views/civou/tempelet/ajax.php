<script type="text/javascript" src="<?php echo base_url(); ?>_js/jquery-1.3.2.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#loader').hide();
        $('#show_heading').hide();
             
        $('#search_category_id').change(function(){
            $('#show_sub_categories').fadeOut();
            $('#loader').show();
            $('#show_heading').show();
                    
            $.post("<?php echo site_url('_js/get_chid_categories.php') ?>", {
                parent_id: $('#search_category_id').val()
            }, function(response){			
                setTimeout("finishAjax('show_sub_categories', '"+escape(response)+"')", 400);
            });
            return false;
        });
    });

    function finishAjax(id, response){
        $('#loader').hide();
        $('#show_heading').show();
        $('#'+id).html(unescape(response));
        $('#'+id).fadeIn();
    } 

    function alert_id()
    {
        if($('#sub_category_id').val() == '')
            alert('Please select a sub category.');
        else
            alert($('#sub_category_id').val());
        return false;
    }

</script>
<style>
    .both h4{ font-family:Arial, Helvetica, sans-serif; margin:0px; font-size:14px;}
    #search_category_id{ padding:3px; width:200px;}
    #sub_category_id{ padding:3px; width:200px;}
    .both{ float:left; margin:0 15px 0 0; padding:0px;}
</style>        
<!--end of drop down compobox    -- ---------------------------------------------------------  -->
<style type="text/css">
    .error{color:#F00;font-size:18px}

</style>