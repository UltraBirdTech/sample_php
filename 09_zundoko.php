<?php
  $array = [];
  CONST ZUN_DOKO = array('ズン', 'ドコ');
  $i = 0;    
  // loop
  while( true ) {
    $i++;
 
    $char = ZUN_DOKO[array_rand(ZUN_DOKO, 1)];
    print_r($char);
    array_push($array, $char);
    
    if ((count($array)) > 4) {
      // check
      if ( implode('', $array) === 'ズンズンズンズンドコ') { 
        print_r("KI ☆ YO ☆ SHI !!\n");
        break;
      }
      // shift
      array_shift($array); 
    } 
  }
