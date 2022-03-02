<?php if($results) { ?>
    <section>
            <h2 class="bg-primary p-3">Update Or Delete Data</h2>
            <?php foreach ($results as $result) {
                    $id = $result['ID'];
                    $city = $result['Name'];
                    $countrycode = $result['CountryCode'];
                    $district = $result['District'];
                    $population = $result['Population'];
            
            ?>
              <form class="update d-flex flex-column p-3 shadow-lg" action="." method="POST">

              <input type="hidden" name="action" value="update">
                <input class="form-control" type="hidden" name="id" value="<?= $id ?>">

                <label for="city-<?= $id ?>">City Name:</label>
                <input class="form-control" type="text" id="city-<?= $id ?>" name="city" value="<?= $city ?>" required>

                <label for="countrycode-<?= $id ?>">Country Code:</label>
                <input class="form-control" type="text" id="countrycode-<?= $id ?>" name="countrycode" maxlength="3" value="<?= $countrycode ?>" required>

                <label for="district-<?= $id ?>">District:</label>
                <input class="form-control" type="text" id="district-<?= $id ?>" name="district" value="<?= $district ?>">

                <label for="population-<?= $id ?>">Population:</label>
                <input class="form-control" type="text" id="population-<?= $id ?>" name="population" value="<?= $population ?>">

                <button class="btn btn-success mt-2">Update</button>
            </form>
            <div class="d-flex">
            <form class="delete " action="." method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button class="btn btn-danger mt-1">Delete</button>
            </form>
            <?php } ?>
        </section>
        <?php } else {?>
            <p>Sorry, no results.</p>
            <?php }?>
            <div class=" shadow-lg">
            <?php include('status.php') ?>
            </div>
            <a class="shadow-sm"  href=".">Back to request Forms</a>
            </div>
        