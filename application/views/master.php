<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Start Bootstrap </title>
        <link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/') ?>css/sb-admin.css" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            <?php echo $navbar; ?>
            <div id="page-wrapper">
                <?php echo $content; ?>
                
            </div>
        </div>
        <!-- /#wrapper -->
        <script src="<?php echo base_url('assets/') ?>js/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets/') ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url('assets/') ?>js/sb-admin.js"></script>
    </body>
</html>
