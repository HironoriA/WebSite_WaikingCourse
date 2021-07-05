<?php
require_once('data.php');
require_once('course.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="walking-course" content="width=device-width,initial-scale=1">
  <title>散歩コース</title>
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
  <link href="css/walking-course.css" rel="stylesheet", >
</head>

<body>
  <div class="walking-menu">
    <h1 class="logo">散歩</h1>
    <h3>コース<?php echo Course::getCount() ?>つ</h3>
    <div class="course-items">
      <?php foreach ($locations as $location): ?>
        <div class="course-item">
          <a href="<?php echo $location->getMap() ?>"><img src="<?php echo $location->getImage() ?>" class="course-item-image"></a>
          <h3 class="course-item-name"><?php echo $location->getName() ?></h3>
          <p class="distance"><?php echo $location->getDistance() ?>km</p>
          <p class="time"><?php echo $location->getTime() ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>
