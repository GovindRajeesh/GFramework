<?php
// Import cors
require __DIR__."/tools/cors.php";
// Import router class
require __DIR__."/tools/router.php";

require __DIR__."/tools/render.php";

// Run cors
cors();

// Our application router
$router=new Router();

$router->get("/",function(){
    render("Home",$_SERVER["DOCUMENT_ROOT"]."\\views\home.php","layout.php"); 
});

$router->get("/about",function($params){
    render("About",$_SERVER["DOCUMENT_ROOT"]."\\views\about.php","layout.php"); 
});

// Run router
$router->run($_SERVER["REQUEST_URI"],$_SERVER["REQUEST_METHOD"]);

?>