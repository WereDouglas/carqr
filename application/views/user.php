<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

<div class="row-fluid">


    <h4>User details to below: </h4>

    <div class="span9" style="margin-left: 9px;">

        <div class="span12 container">



            <div class="row-fluid">
                <table id="datatable" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>                                           

                            <th></th>
                            <th>contact</th>
                            <th >Number plate</th>

                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (is_array($users) && count($users)) {
                            foreach ($users as $loop) {
                                 $information = $loop->information;
        $numberplate = $loop->numberplate;
        $chasis = $loop->chasis;
        $fuel = $loop->fuel;
        $engine = $loop->engine;
        $weight = $loop->weight;
        $contact = $loop->contact;
        $sum = $information.' NUMBER-PLATE:'.$numberplate.' CHASIS:'.$chasis.' FUEL:'.$fuel.' ENGINE SIZE:'.$engine.' WEIGHT:'.$weight.' CONTACT:'.$contact;
        
                                
                                ?>  

                                <tr>

                                
                                    <td>
                                        <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl='<?=$sum?>'&choe=UTF-8"  title="QR code" />
                                    </td>
                                      <td ><?= $loop->contact ?></td>

                                    <td >  <?= $numberplate ?> </td> 
                                    <td>                                                     
                                        <a href="<?php echo base_url() . "index.php/user/delete/" . $loop->id; ?>" title="Delete">

                                            Delete  </a>
                                    </td>


                                </tr>

                            <?php }
                        } ?>

                    </tbody>
                </table>    
            </div>
        </div><!--/span-->
    </div>



    <!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<script src='<?= base_url(); ?>js/jquery.min.js'></script>
<script src='<?= base_url(); ?>js/jquery.dataTables.min.js'></script>

<script src="<?= base_url(); ?>js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#datatable").dataTable();

    });
</script>

<script type="text/javascript">
    $('#Loading_name').hide();
    $("#username").blur(function (e) {

        var username = $("#username").val();

        if (username != null) {           // show loader 

            $('#Loading_name').show();
            $.post("<?php echo base_url() ?>index.php/user/checks", {
                username: username
            }, function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_name').hide();
                setTimeout(finishAjax('Loading_name', escape(response)), 400);
            });
        }
        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    }

    );
</script>
<script type="text/javascript">

    $("#userfile").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>