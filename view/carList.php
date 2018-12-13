
<?php require ('view/layout/list-header.php'); ?>

    <!-- LIST OF ENTITIES  -->
    <table class="table table-striped table-bordered text-center">
    
      <thead>
        <tr>
          <td><b>id</b></td>
          <td><b>name</b></td>
          <td><b>year</b></td>
          <td><b>price</b></td>
          <td><b>brand</b></td>
          <td><b>driver</b></td>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($list as $car) { ?>
        <tr onclick="window.location.href = '<?= $href->formForUpdate($car) ?>';" style="cursor: pointer">
          <td><?= $car->getId() ?></td>
          <td><?= $car->getName() ?></td>
          <td><?= $car->getYear() ?></td>
          <td><?= $car->getPrice() ?></td>
          <td><?= $car->getBrand() ?></td>
          <td><?= $car->getDriver() ?></td>
          <td><a href="<?= $href->delete($car) ?>" title="Delete"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
      <?php } ?>
      </tbody>
      
    </table>

<?php require ('view/layout/list-footer.php'); ?>
