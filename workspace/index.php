<?php include '_header.php';?>
<h3>
  Hello, Welcome!
</h3>
<hr />
<p>
  Book Store
</p>

<div class="row">
  <?php
    $string = file_get_contents("data/books.json");
    $data = json_decode($string, true);
    foreach($data as $object) {
      foreach($object as $value) {
   ?> 
   <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $value["Name"] ?></h3>
      </div>
      <div class="panel-body">       
        <img src="<?php echo $value["ImageUrl"] ?>" alt="...">
        <p>Publisher: <?php echo $value["Publisher"] ?></p>
        <p><a href="#" class="btn btn-primary" role="button">Buy</a></p>
      </div>
    </div>
   </div>
  <?php
    }
  }
?>  
</div>

<?php include '_footer.php';?>