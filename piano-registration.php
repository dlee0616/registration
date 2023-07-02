<!DOCTYPE HTML>
<html lang = us-en>
<?php

function getFile($file) {
$result = file_get_content($file);
$d_result = json_decode($result, true);
return $d_result
}


function fileTable($result){
$table = '<table><tr><th>Name</th><th>Location</th><th>Time></th><th>Performance</th>'
for($i=0; $i <count($result); $i++){
    $table .=  "<tr><td>" . $result[$i][name]'</td>'.
    '<td>'.$result[$i]['Location']'</td>'.
    '<td>'.$result[$i][time]'</td>'.
    '<td>'.$result[$i][performance]'</td>'
}
return $table 
}
function main(){
    $file = "./data/piano.json"
    $result = getFile($file)
    
    $result[] = ['name' => $_GET['first_name'].['first_name_2']. $_GET['last_name'].['last_name_2']]
    ['location'=> $_GET['location'].$_GET['room#']]
    ['time'=> .$_GET['time_slot']]
    ['performance' => $_GET['performance'].$_GET['Instrument'].$_GET['skill']]
    

    $table = fileTable($result)
    echo $table;
}




