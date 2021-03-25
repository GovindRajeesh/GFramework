<?php 
function render($title,$content,$layout){
    include($_SERVER["DOCUMENT_ROOT"]."\\views\layouts\\$layout"); 
}
?>