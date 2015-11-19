<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
       
            <h3>Generate you QR car information code</h3>        
            
                     <div class="col-md-6">
                                                            
                        <div class="col-md-6  form-group">
                            <label class="col-md-6" >Number  plate</label>
                            <input type="text" name="numberplate" id="numberplate" class="col-md-6" placeholder="number plate" />
                            <label>Chasis number</label>
                            <input type="text" name="chasis" id="chasis" class="span6" placeholder="chasis" /> 
                            <label class="span6">Fuel</label>
                          <select class="span6" id="fuel" name="fuel">
                             <option value="Petrol" >Petrol</option>
                               <option value="Diesel" >Diesel</option>                                                          
                           </select>
                             <label class="span6">Engine size</label>
                            <input type="text" name="engine" id="engine" class="span6" placeholder="engine size" /> 
                          <label class="span6">Weight</label>
                            <input type="text" name="weight" id="weight" class="span6" placeholder="weight" /> 
                         
                           <label class="span6">Contact</label>
                            <input type="text" name="contact" id="contact" class="span6" placeholder="contact" />                          
                            <label class="span6">owner information</label>               
                            <textarea id="information" name="information" class="form-control" rows="1" placeholder="Information"></textarea>
                      
                        </div>

                     
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <button type="submit" id="generate" class="btn btn-primary btn-block btn-flat">Generate</button>

                            </div>
                        </div>
                   
                     </div>
              
      
  <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="loading" /></span><br>
 
        </div> <!-- /.container -->
      

<!--<script type="text/javascript" src="js/jquery.min.js"></script> -->


    </body>
</html>
<script src='<?= base_url(); ?>js/jquery.min.js'></script>
<script type="text/javascript">
    $('#Loading').hide();
 
     $("#generate").on ("click",function (e) {
         
            var numberplate = $("#numberplate").val();
            var chasis = $("#chasis").val();
            var fuel = $("#fuel").val();
            var engine = $("#engine").val();
            var weight = $("#weight").val();
            var contact = $("#contact").val();
            var information = $("#information").val();       
      
        $('#Loading').show();
        $.post("<?php echo base_url() ?>index.php/user/generate", {numberplate:numberplate,chasis:chasis,fuel:fuel,engine:engine,weight:weight,contact:contact,information:information}
        , function (response) {
            //#emailInfo is a span which will show you message
            $('#Loading').hide();
            setTimeout(finishAjaxitem('Loading', escape(response)), 200);

        }); //end change

        function finishAjaxitem(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    });

  


</script>
