<?php
$connect = mysqli_connect("localhost","root","000325","reserve");
$default_third="";

if(isset($_GET['form'])){
    if($_GET['form']=="N3"){
        $default_third = "N3";
    }else if($_GET['form'] =="B3"){
        $default_third = "B3";
    }else if($_GET['form'] =="C3"){
        $default_third = "C3";
    }else if($_GET['form'] =="D3"){
        $default_third = "D3";
    }else if($_GET['form'] =="E3"){
        $default_third = "E3";
    }else if($_GET['form'] =="F3"){
        $default_third = "F3";
    }else if($_GET['form'] =="G3"){
        $default_third = "G3";
    }else if($_GET['form'] =="H3"){
        $default_third = "H3";
    }else if($_GET['form'] =="I3"){
        $default_third = "I3";
    }else if($_GET['form'] =="J3"){
        $default_third = "J3";
    }else if($_GET['form'] =="K3"){
        $default_third = "K3";
    }else if($_GET['form'] =="S3"){
        $default_third = "S3";
    }else if($_GET['form'] =="M3"){
        $default_third = "M3";
    }else{
        $default_third = "A3";
    }
}else{
    $default_third = "A3";
}

$sql = "select * from r_table where re_pro='{$default_third}'";
$result_third = mysqli_query($connect,$sql);
$li_one_third=array();
$li_two_third=array();
$li_three_third=array();


while($row = mysqli_fetch_array($result_third)){
    $array= Array(
        "professor" => $row['re_pro'],
        "name" => $row['re_name'],
        "time" => $row['re_time'],
        "univ" => $row['re_univ']
    );

    if($array['time']== "one" ){
        array_push($li_one_third,"o");
    } else if($array['time']=="two") {
        array_push($li_two_third,"o");
    } else if($array['time']=="three") {
        array_push($li_three_third,"o");
    }
}
//"{$array['univ']} <br> {$array['name']}"

while(count($li_one_third)<11){
    array_push($li_one_third,"x"); 
}
while(count($li_two_third)<11){
    array_push($li_two_third,"x");
}
while(count($li_three_third)<11){
    array_push($li_three_third,"x");
}


?>