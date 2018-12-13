<?php require ('view/layout/header.php'); ?>

<script>
history.pushState(null, "", '<?= $href->list() ?>');
</script>

<!-- Page content -->
<div class="jumbotron">

    <div class="container">
        <div class="container">
            <div class="panel-group">
                <div class="panel panel-info">

                    <!-- ---------- HEAD : TITLE with BUTTONS [List] and [Create] -->
                    <div class="panel-heading">
                        <h4>
                            <span class="glyphicon glyphicon-list"></span>
                            <span class="font-weight-bold">&nbsp; <?= $href->entityName() ?> / List</span>
                            <div class="pull-right"> <!-- Buttons -->
                                <!-- [Create] -->
                        <a href="<?= $href->formForCreate() ?>" title="Create a new entity">
                            <button type="button" class="btn btn-success pull-right"><span
                                                class="glyphicon glyphicon-plus"></span> Create
                                    </button>
                        </a>
						</div>
                    </h4>
                </div>
                <div class="panel-body">
                	<?php if ( $msg != null && $msg != "" ) { ?>
                        <div class="alert alert-success" role="alert">
                            <?= $msg ?>
                        </div>
                	<?php } ?>
