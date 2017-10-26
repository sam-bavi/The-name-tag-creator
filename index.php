<?php
    #Comment the first 3 line out for no error reporting by php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require __DIR__ . '/app/src/app.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>NameTag Creator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/application.css" />
  <link rel="stylesheet" href="css/eq.css" />
</head>
<body>
  
<!-- .main body found under app/views -->
<div class="container-fluid">
<?php
    include('app/views/header.php');
    include('app/views/content.php');
    include('app/views/footer.php');
?>
</div>
<!-- .main body found under app/views -->

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="app/src/print.js"></script>
<script src="bower_components/dom-to-image/src/dom-to-image.js"></script>
    <script>
    /* JS Script for printing the card container
        found under app/views/content. At the moment
        a blob img.png is created, this will probobly 
        be changed to .svg format and and a canvas 
        in future for better prints */ 
    $( document ).ready(function() {
        console.log( "document loaded" );
        $( "#print" ).click(function() {
          //printFunction();
          var node = document.getElementById('card');
            console.log('Inside print function');

            domtoimage.toBlob(document.getElementById('card'))
            .then(function (blob) {
                //window.saveAs(blob, 'my-node.png');
                console.log(blob);
                var fileURL = URL.createObjectURL(blob);
                window.open(fileURL, '_blank');
                window.focus();
            })
            .catch(function (error) {
            console.error('oops, something went wrong!', error);
            });
    });
    });
 
    $( window ).on( "load", function() {
        console.log( "window loaded" );
    });
    </script>
</body>
</html>

