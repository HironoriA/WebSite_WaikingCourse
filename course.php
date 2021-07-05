<?php
class Course {
  protected $courseName;
  protected $distance;
  protected $time;
  protected $image;
  protected $map;
  protected static $count = 0;
  
  public function __construct($courseName, $distance, $time, $image, $map) {
    $this->courseName = $courseName;
    $this->distance = $distance;
    $this->time = $time;
    $this->image = $image;
    $this->map = $map;
    self::$count++;
  }

  public function getName() {
    return $this->courseName;
  }

  public function getDistance() {
    return $this->distance;
  }

  public function getTime() {
    return $this->time;
  }

  public function getImage() {
    return $this->image;
  }
  
  public function getMap() {
    return $this->map;
  }

  public static function getCount() {
    return self::$count;
  }
}