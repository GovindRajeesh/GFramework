<?php 
function render($title,$content,$layout,$params=array()){
    include($_SERVER["DOCUMENT_ROOT"]."\\views\layouts\\$layout"); 
}
?>