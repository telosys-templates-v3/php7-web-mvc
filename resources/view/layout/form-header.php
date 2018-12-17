<?php 
require ('view/layout/header.php'); 
?>

<!-- Page content -->
<div class="jumbotron">
    <div class="container">
        <div class="container">
            <!--  ---------- FORM ---------- -->
            <form class="form-horizontal" method="post" >
                <div class="panel-group">
                    <div class="panel panel-info">
                    
                        <!-- ---------- HEAD : TITLE with BUTTONS [List] -->
                        <div class="panel-heading">
                            <h4>
                                <span class="glyphicon glyphicon-file"></span>
                                <span class="font-weight-bold">&nbsp;<?= $href->entityName() ?> /  <?= $formMode == FormMode::CREATE ? "Creation" : "Update" ?> </span>
                                <div class="pull-right"> <!-- Buttons -->
                                    <!-- [List] -->
                                    <a href="<?= $href->list() ?>" title="Go to list">
                                        <button type="button" class="btn btn-primary "> <span class="glyphicon glyphicon-list"></span> List</button></a>
                                </div>
                            </h4>
                        </div>

                        <!-- ---------- FIELDS -->
                        <div class="panel-body">
						<?php if ( $msg != null && $msg != "" ) { ?>
                            <div class="<?= $msg->css() ?>" role="alert">
                                <?= $msg ?>
                            </div>
                    	<?php } ?>
                        
