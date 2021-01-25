<?php
require("vendor/autoload.php");

use NestedJsonFlattener\Flattener\Flattener;

$data = [
    // * copy your api result
    // ** replace brackets { } to [ ]
    // *** replace : to =>
    
    // **** also replace new line brake
    //    ] 
    //     [
    // -- to -- 
    //   ], 
    //    [
    //  * use ctrl+enter to add new line brake on vscode

];

$flattener = new Flattener();
$flattener->setArrayData($data);
$flattener->writeCsv('yourcsvfileresult');