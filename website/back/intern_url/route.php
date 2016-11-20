<?php

function route($clef)
{
  $url = parse_ini_file('routes.ini');
  if (isset($url[$clef])) {
    return ($url[$clef]);
  }
  return null;
}

 ?>
