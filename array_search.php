<?php
function search($s)
{
    $a=["red", "blue", "yellow", "black", "grey"];
    return array_search($s,$a);
}


echo search("yellow");
?>