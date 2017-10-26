<div class="container-fluid">

<div class="row row-eq-height align-self-center">
<div class='col-md-6 col-md-offset-1 col-sm-2 col-xs-6' align="center" style="background-color:lavender;"> (temp placeholder).Create

  <div class="placeholder-left">

  <form class="form" action="" method="post">
    <!-- .form-group -->
    <div class="form-group">
      <label for="name">Namn</label>
      <input type="text" class="form-control" name="name" placeholder="Förnamn Efternamn" required>
    </div>

    <div class="form-group">
      <label for="activationDate">Registreringsdatum</label>
      <input type="date" class="form-control" name="activationDate" placeholder="åååå-mm-dd" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
    </div>

    <div class="form-group">
      <label for="deactivationDate">Upphör att gälla</label>
      <input type="date" class="form-control" name="deactivationDate" placeholder="åååå-mm-dd" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
    </div>

    <div class="form-group">
      <label for="telNo">Mobilnummer</label>
      <input type="tel" class="form-control" name="telNo" placeholder="xxx-xxxxxxx" required pattern="[0-9]{3}-[0-9]{7}">
    </div>

    <div class="form-group">
      <label for="reason">Anledning till besök</label>
      <textarea class="form-control" name="reason"></textarea>
    </div>
    <!-- .form-group -->
    <!-- .form buttons -->
    <div>
    <button id="addMedia" type="button" value="submit" class="btn btn-success btn-sm">Bifoga Bild</button>
    <button type="submit" value="submit" class="btn btn-primary btn-sm">Skicka</button>
    <button id="print" type="button" value="submit" class="btn btn-secondary btn-sm">Skriv Ut</button>
    </div>
    <!-- .form buttons -->

  </form>
  </div>   <!-- .placeholder ends -->

</div>
<div class='col-md-6 col-sm-2 col-xs-6' align="center" >(temp placeholder).Preview
        <!-- .card -->
        <div class="placeholder-right">
        <article id="card" class="card mb-3" style="width: 300px;">
        <a href="#">
          <div class="shadow">
        <h5 class="card-header" style="background-color:red;width: 100%;">BESÖKARE LEXICON</h5>
          <figure class="thumbnail">
          <img class="card-img-top img-fluid" src="media/207x340.png" alt="Besökskort">
          </figure>
          <!-- .card-content -->
          </div>
          <div class="card-block">
          <p class="text-muted"><?php if (isset($_POST["name"]) && !empty($_POST["name"])) { echo $name;}else{echo "Name is not set";} ?></p>
          <p class="text-muted"><?php if (isset($_POST["telNo"]) && !empty($_POST["telNo"])) { echo "ID: " . $tel_no;}else{echo "ID is not set";} ?></p>
          <p class="text-muted"><?php if (isset($_POST["deactivationDate"]) && !empty($_POST["deactivationDate"])) { echo "Giltig Till: " . $deactivation_date;}else{echo "Deactivation date is not set";} ?></p>
          </div>
          <!-- .card-content -->
        </a>
        </article>
        </div>
      <!-- .card -->

</div>

</div>
</div>
<?php 
echo  'The total number of requests is currently ' . $db->countAll() . "\n";
var_dump($db->getAll());
?>
<a href="phpinfo.php">PHP infoo</a>
