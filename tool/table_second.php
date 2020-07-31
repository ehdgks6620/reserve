<?php
$connect = mysqli_connect("localhost","root","000325","reserve");
$default_second="";

if(isset($_GET['form'])){
    if($_GET['form']=="N2"){
        $default_second = "N2";
    }else if($_GET['form'] =="B2"){
        $default_second = "B2";
    }else if($_GET['form'] =="C2"){
        $default_second = "C2";
    }else if($_GET['form'] =="D2"){
        $default_second = "D2";
    }else if($_GET['form'] =="E2"){
        $default_second = "E2";
    }else if($_GET['form'] =="F2"){
        $default_second = "F2";
    }else if($_GET['form'] =="G2"){
        $default_second = "G2";
    }else if($_GET['form'] =="H2"){
        $default_second = "H2";
    }else if($_GET['form'] =="I2"){
        $default_second = "I2";
    }else if($_GET['form'] =="J2"){
        $default_second = "J2";
    }else if($_GET['form'] =="K2"){
        $default_second = "K2";
    }else if($_GET['form'] =="S2"){
        $default_second = "S2";
    }else if($_GET['form'] =="M2"){
        $default_second = "M2";
    }else{
        $default_second = "A2";
    }
}else{
    $default_second = "A2";
}

$sql = "select * from r_table where re_pro='{$default_second}'";
$result_second = mysqli_query($connect,$sql);
$li_one_second=array();
$li_two_second=array();
$li_three_second=array();


while($row = mysqli_fetch_array($result_second)){
    $array= Array(
        "professor" => $row['re_pro'],
        "name" => $row['re_name'],
        "time" => $row['re_time'],
        "univ" => $row['re_univ']
    );

    if($array['time']== "one" ){
        array_push($li_one_second,"o");
    } else if($array['time']=="two") {
        array_push($li_two_second,"o");
    } else if($array['time']=="three") {
        array_push($li_three_second,"o");
    }
}
//"{$array['univ']} <br> {$array['name']}"

while(count($li_one_second)<11){
    array_push($li_one_second,"x"); 
}
while(count($li_two_second)<11){
    array_push($li_two_second,"x");
}
while(count($li_three_second)<11){
    array_push($li_three_second,"x");
}


?>