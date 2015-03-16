<?php
class Menushka {

function __construct($menuClass, $spisok, $razd, $p) { 
//$spisok - array of strings with divider $razd; $p - active menu item (from 0)

  echo '<ul class="' . $menuClass . '">';
  $i = 0;
  foreach($spisok as $value) {
    $ia = explode($razd, $value);
    if ($i == $p) {
        echo '<li><a href="#" title="' . $ia[1] . '" class="current">' . $ia[2] . '</a></li>';
    } else {
        echo '<li><a href="' . $ia[0] . '" title="' . $ia[1] . '">' . $ia[2] . '</a></li>';
    }
    $i++;
  }
  echo '</ul>';
}
}

?>