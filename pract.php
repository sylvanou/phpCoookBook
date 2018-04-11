<?php

class Render {
    public static function displayDimensions($size) {
      
      return "$size[0] x $size[1]";
    }
  
    public static function detailsKitchen($room) {
      return "Kitchen Dimensions: " . self::displayDimensions($room->getDimensions());
    }
}
