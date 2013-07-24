<?php 

  function include_block($block,$n=1) {
    for ($i=1; $i<=$n; $i++)
    {
    include 'templates/blocks/'. $block .'.html';
    }
  }

?>
