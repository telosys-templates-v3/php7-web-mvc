<?php $ENTITYNAME="car" ; ?> <!-- Used to build the PHP page name ( eg "car.php" ) -->

<?php require ('view/layout/form-header.php'); ?>

	<!-- FORM FIELDS -->
	<div class="form-group">
        <label for="id" class="col-sm-2">id *</label>
        <div class="col-sm-8">
            <input id="id" class="form-control" name='id' value="<?= $car->getId() ?>" />
        </div>
    </div>
	<div class="form-group">
        <label for="name" class="col-sm-2">name </label>
        <div class="col-sm-8">
            <input id="name" class="form-control" name='name' value="<?= $car->getName() ?>" />
        </div>
    </div>
	<div class="form-group">
        <label for="year" class="col-sm-2">year </label>
        <div class="col-sm-8">
            <input id="year" class="form-control" name='year' value="<?= $car->getYear() ?>" />
        </div>
    </div>
	<div class="form-group">
        <label for="price" class="col-sm-2">price </label>
        <div class="col-sm-8">
            <input id="price" class="form-control" name='price' value="<?= $car->getPrice() ?>" />
        </div>
    </div>
	<div class="form-group">
        <label for="brand" class="col-sm-2">brand </label>
        <div class="col-sm-8">
            <input id="brand" class="form-control" name='brand' value="<?= $car->getBrand() ?>" />
        </div>
    </div>
	<div class="form-group">
        <label for="driver" class="col-sm-2">driver </label>
        <div class="col-sm-8">
            <input id="driver" class="form-control" name='driver' value="<?= $car->getDriver() ?>" />
        </div>
    </div>
                        
<?php require ('view/layout/form-footer.php'); ?>
