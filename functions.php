<?php

// Die and Dump Function
function dd($data)
{
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}
