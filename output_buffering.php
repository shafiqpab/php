<?php
 
  // Start buffering
  ob_start();

  // Output stuff (probably not this simple, might be custom CMS functions...
  echo 'Print to the screen!!!';

  // Get value of buffering so far
  $getContent = ob_get_contents();

  // Stop buffering
  ob_end_clean();

  // Do stuff to $getContent as needed

  // Use it
  echo 'Now: ' . $getContent;
  
  
  

?>
