<?php

function devel ($input) {

  echo 'cli' !== PHP_SAPI ? "<pre>" : '';

  var_dump($input);

  echo 'cli' !== PHP_SAPI ? "</pre>" : '';
}