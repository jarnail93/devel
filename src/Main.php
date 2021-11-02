<?php

namespace Jarnail\Devel;

function dump($input)
{

  echo 'cli' !== PHP_SAPI ? "<pre>" : '';

  var_dump($input);

  echo 'cli' !== PHP_SAPI ? "</pre>" : '';
}