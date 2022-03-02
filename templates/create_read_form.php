<?php
include 'inc/header.php';

?>
<section class="bg-primary p-3">
    <h2>Select Data / Read Data</h2>
    <form action="." method="GET">
        <input type="hidden" name="action" value="select">
        <label for="city">City Name:</label>
        <input class="form-control" type="text" id="city" name="city" required>
        <button class="btn btn-success mt-1">Submit</button>
    </form>
</section>
<br>

<section class=" p-3 pt-4 shadow-lg">
    <h2>Insert Data / Create Data</h2>

    <form class=" d-flex flex-column pt-4" action="create_read.php" method="POST">
        <input class="form-control" type="hidden"  name="action" value="insert" >
        <label for="newcity">City Name:</label>
        <input class="form-control" type="text" id="city" name="city" required>
        <label for="countrycode">Country Code:</label>
        <input class="form-control" type="text" id="countrycode" name="countrycode" maxlength="3" required>
        <label for="district">District:</label>
        <input class="form-control" type="text" id="district" name="district" required>
        <label for="population">Population:</label>
        <input class="form-control" type="text" id="population" name="population" required>
        <button class="btn btn-success mt-1">Submit</button>
    </form>
</section>


<!-- //get all cities  -->

<table class="table">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">City</th>
      <th scope="col">Code</th>
    </tr>
  </thead>
<?php
    foreach($jobs as $job): ?>
    <div class="row marketing">
        <div class="col-md-10">

        <tbody>
    <tr>
      <th scope="row"> <?php echo $job->ID ?></th>
      <td><?php echo $job->Name ?></td>
      <td><?php echo $job->CountryCode ?></td>
    </tr>
    
  </tbody>
        </div>
    </div>
    <?php endforeach; ?>

<?php
include 'inc/footer.php';

?>