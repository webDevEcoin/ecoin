<?php

$var = NULL;
                   
// Évaluée à vrai car $var est vide
if (empty($var)) {
  echo '$var  Empty vaut soit 0, vide, ou pas définie du tout <hr>';
}
                   
// Évaluée à vrai car $var est définie
if (isset($var)) {
  echo '$var ISSET est définie même si elle est vide';
}