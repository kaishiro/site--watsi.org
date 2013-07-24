<?php 

  function include_block($block,$n=1) {
    $docroot = $_SERVER['DOCUMENT_ROOT'];
    for ($i=1; $i<=$n; $i++)
    {
    include "$docroot/templates/blocks/". $block .".html";
    }
  }

?>
