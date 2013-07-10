<?php

/***
 *  Model for setting
 */

class Set extends CI_Model {

  # Navigation elements
  public function nav() 
  {
    $nav_elements = array(
      1 => 'home', 
      2 => 'about',
      3 => 'contact'
      );

    return $nav_elements;
  }

  # Carousel Images
  public function carousel() 
  {
    $sources = array("Vicky", "Icky", "Sticky");
    // $sources = array("../b/public/img/slidephoto1.jpg",
    //                  "../b/public/img/slidephoto2.jpg",
    //                  "../b/public/img/slidephoto3.jpg");
    return $sources;
  }  

  # Columns Content
  public function columns() 
  {
    $heading = array("Heading 1",
                     "Heading 2",
                     "Heading 3");

    $ctx = array("Context 1",
                 "Context 2",
                 "Context 3");

    $button = array("View 1",
                    "View 2",
                    "View 3");

    return $package = array($heading, $ctx, $button);
  }

  # Featurettes Content
  public function featurettes() 
  {
    $img = array("../b/public/img/diamond.png",
                 "../b/public/img/diamond.png",
                 "../b/public/img/diamond.png");

    $heading = array("Heading 1",
                     "Heading 2",
                     "Heading 3");

    $subheading = array("Sub Heading 1",
                        "Sub Heading 2",
                        "Sub Heading 3");

    $ctx = array("Context 1",
                 "Context 2",
                 "Context 3");

    return $package = array($img, $heading, $subheading, $ctx);
  }


  # Modal
  public function modal()
  {
    $id = 'myModal';
    $header = 'Contact';
    $body = 'Some Text';

    return $package = array($id, $header, $body);
  }

  # Triangle
  public function triangle() {
    $orient = "triangle-down";
    $content = "Austere";

    return $package = array($orient, $content);
  }
}

?>