<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

<div class="row-fluid">


    

    <div class="span9" style="margin-left: 9px;">

        <div class="span12 container">

            <div class="row-fluid">              
                        <?php
                        if (is_array($user) && count($user)) {
                            foreach ($user as $loop) {
                                 $information = $loop->information;
        $numberplate = $loop->numberplate;
        $chasis = $loop->chasis;
        $fuel = $loop->fuel;
        $engine = $loop->engine;
        $weight = $loop->weight;
        $contact = $loop->contact;
        $sum = $information.' NUMBER-PLATE:'.$numberplate.' CHASIS:'.$chasis.' FUEL:'.$fuel.' ENGINE SIZE:'.$engine.' WEIGHT:'.$weight.' CONTACT:'.$contact;
                                        
        ?>                                 
                                        <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl='<?=$sum?>'&choe=UTF-8"  title="QR code" />
                                   

                            <?php }
                        } ?>
 
            </div>
        </div><!--/span-->
    </div>



    <!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->
