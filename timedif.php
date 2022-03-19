<?php 
$date1 = new DateTime('2006-04-12T14:30:00');
$date2 = new DateTime('2006-04-12T10:30:00');

$diff = $date2->diff($date1);

$hours = $diff->h;
$hours = $hours + ($diff->days*24);

//$hourf=(0.7*$hours);
$deadline=(0.5*2);
echo $hours-$deadline;
?>




   <div class="showback">
              <h4><i class="fa fa-angle-right"></i> Button Nesting</h4>
              <div class="btn-group">
                <button type="button" class="btn btn-default">1</button>
                <button type="button" class="btn btn-default">2</button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Dropdown
                    <span class="caret"></span>
                    </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Dropdown link</a></li>
                    <li><a href="#">Dropdown link</a></li>
                  </ul>
                </div>
              </div>
            </div>







            <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Image Gallery</title>
<style type="text/css">
    .img-box{
        display: inline-block;
        text-align: center;
        margin: 0 15px;
    }
</style>
</head>
<body>
    <?php
    // Array containing sample image file names
    $images = array("kites.jpg", "balloons.jpg");
    
    // Loop through array to create image gallery
    foreach($images as $image){
        echo '<div class="img-box">';
            echo '<img src="/examples/images/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
            echo '<p><a href="/examples/php/download.php?file=' . urlencode($image) . '">Download</a></p>';
        echo '</div>';
    }
    ?>
</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Download Links</title>
</head>
<body>
    <p><a href="/examples/downloads/test.zip">Download Zip file</a></p>
    <p><a href="/examples/downloads/masters.pdf">Download PDF file</a></p>
    <p><a href="/examples/downloads/sample.jpg">Download Image file</a></p>
</body>
</html>




RewriteEngine On
RewriteCond %{HTTPS} !=on
RewriteRule .* https://essayroom.net/%{REQUEST_URI} [R,L]
