<?php

/***
 *  Model for getting 
 */

class Get extends CI_Model {

  # Display all navigation elements
  public function nav($data) {
    echo "<div class='navbar'>";
    echo "<div class='navbar-inner'>";
    echo "<ul id='navigation' class='nav'>";

    foreach ($data as $value) {
      if($value != 'contact') {
        echo "<li><a href=#".$value.">".ucfirst($value)."</a></li>"; 
      }
      else echo "<li><a href='#myModal' role='button' data-toggle='modal'>".ucfirst($value)."</a></li>";
    }

    echo "</ul>";
    echo "</div><!-- /.navbar-inner -->";
    echo "</div><!-- /.navbar -->";
    echo "</div><!-- /.container -->";
    echo "</div>";
  }


  public function carousel($sources) {
    echo "<!-- Carousel -->";
    echo "<div id='myCarousel' class='carousel slide'>";
    echo "  <div class='carousel-inner'>";

    $count = 0;
    foreach ($sources as $source) {
      if($count == 0) {
        echo "<div class='item active left'>";
      } elseif ($count == 1) {
        echo "<div class='item next left'>";
      }
      else {
        echo "<div class='item left'>";
      }

      echo "<center>";
      echo "<h1>".$source."</h1>";
      echo "</center>";
      echo "</div><!-- /.carousel -->";
      $count++;
    }

    echo "</div>";
    echo "<a class='left carousel-control' href='#myCarousel' data-slide='prev'>&lsaquo;</a>";
    echo "<a class='right carousel-control' href='#myCarousel' data-slide='next'>&rsaquo;</a>";
    echo "</div>";
  }


  public function modal($package) {
    $id = $package[0];
    $header = $package[1];
    $body = $package[2];

    echo "<!-- Modal -->";
    echo "<div id=".$id." class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='".$id."Label' aria-hidden='true'>";
    echo "<div class='modal-header'>";
    echo "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>x</button>";
    echo "<h3 id='".$id."Label'>".$header."</h3>";
    echo "</div>";
    echo "<div class='modal-body'>";
    echo "<p>".$body."</p>";
    echo "</div>";
    echo "<div class='modal-footer'>";
    echo "<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>";
    echo "<button class='btn btn-primary'>Save changes</button>";
    echo "</div>";
    echo "</div>";
  }


  public function columns($package) {
    $heading = $package[0];
    $ctx     = $package[1];
    $button  = $package[2];

    echo "<!-- Three columns of text -->";
    echo "  <div class='row'>";

    for ($i=0; $i < sizeof($package); $i++) { 
      echo "<div class='span4 column'>";
      echo "<img class='img-circle' data-src='holder.js/140x140' alt='140x140' style='width: 140px; height: 140px;' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFCklEQVR4Xu3Y50ubbRiG8SuKiAMFFRe4UBEnDlz4xT/dDy4coAgKbgUXatziTnvdkOBCPYmaphxCaTFn+7RHfu/9PHkj0Wg0ZnxR4IsFIoD5YilmoQBggCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVAIyUizFgMCAVSGswt7e3tri4aMfHx9bY2Gg1NTVv/vH++u7urtXV1Vl9fX14/fDw0FZXV81/f2FhobW0tFh2dvan4X77ep/+hVIwSFswNzc3NjU1ZVlZWXZ1dfUumLOzM5udnbWnp6cEmPv7exsbG7OcnBwrLS21jY0NKykpsY6Ojg/z//b1UmDhS5dMWzDX19fhZCkoKLDp6el3wTio/Pz8FyfMwcGBLSwsWGdnZ4DiJ9D+/r4NDw/b1taWra2tWXd3txUVFSVe6+/vt0gk8u3Xy8jI+NKb9C+N0hZMPOL5+Xk4aV7fknZ2dsKb39fXZ6Ojo4kTxk8U//7g4KDl5eXZ+vp6+DE0NBRuS/5nxWIxa25utpmZGWtoaLDa2trEe/ad1/NTLt2+/kswDw8PNj4+Ht5sv+2MjIwkwPizy+bmZgDib5j/2r83MDAQTqOLi4uAJjMz03Jzc623tzecLh8BTeZ6gPnlAu/9F7+8vGzRaNR6enrs8fExnDDV1dXhoXd7e/vFCeOnjZ86cUD+1/eT5fT01JqamqyqqurFv+gnrvfLyZK63H95wkxOTtrl5eWbMJWVlVZcXPziGcafZ46OjsIzjJ8k/glqfn4+3K78AdlvXf5g/dEJk8z1knr3UvCb0xbM3d2dnZycmH96WVlZsYqKivAQ6x+T/TU/WfzLf56bm7Py8vJwW/LnFD9xnn9KKisrs9bWVvNby8TERLg1+TOM/9pvaf7aT1wvBe930pdMWzCOxT8yv/5qb283BxD/cgTPn2H8+/7pym9b8f8P09bWFk6RpaUl29vbM/9U9PyBuKury/wTzXdfL+l3LwV/QNqCSUErLvm3AGBgIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBUAjJSLMWAwIBX4AzQ9H7USfB6dAAAAAElFTkSuQmCC'>";
      echo "<h2>".$heading[$i]."</h2>";
      echo "<p>".$ctx[$i]."</p>";
      echo "<p><a class='btn' href='#'>".$button[$i]."</a></p>";
      echo "</div><!-- /.span4 -->";
      
    }
    echo "</div><!-- /.row -->";
  }

  public function featurettes($package) {
    $img = $package[0];
    $heading = $package[1];
    $subheading = $package[2];
    $ctx = $package[3];

    echo "<!-- Featurettes -->";
    echo "  <hr class='featurette-divider'>";
    
    # if package > 3 remove -1
    for ($i=0; $i < sizeof($package)-1; $i++) {
      echo "<div class='featurette'>";
      echo "<img class='featurette-image pull-right' src='".$img[$i]."'>";
      echo "<h2 class='featurette-heading'>".$heading[$i]." <span class='muted'>".$subheading[$i]."</span></h2>";
      echo "<p class='lead'>".$ctx[$i]."</p>";
      echo "</div>";
      echo "<hr class='featurette-divider'>";
    }
  }

  public function triangle($package) {
    $orient = $package[0];
    $content = $package[1];

    if ($orient) {
      echo "<div class=".$orient."><h3>".$content."</h3></div>";
    }
    else echo "Problem with triangle";
  }
}

?>