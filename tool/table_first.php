<?php
$connect = mysqli_connect("localhost","root","000325","reserve");
$default_first="";

if(isset($_GET['form'])){
    if($_GET['form']=="N0"){
        $default_first = "N0";
    }else if($_GET['form'] =="B0"){
        $default_first = "B0";
    }else if($_GET['form'] =="C0"){
        $default_first = "C0";
    }else if($_GET['form'] =="D0"){
        $default_first = "D0";
    }else if($_GET['form'] =="E0"){
        $default_first = "E0";
    }else if($_GET['form'] =="F0"){
        $default_first = "F0";
    }else if($_GET['form'] =="G0"){
        $default_first = "G0";
    }else if($_GET['form'] =="H0"){
        $default_first = "H0";
    }else if($_GET['form'] =="I0"){
        $default_first = "I0";
    }else if($_GET['form'] =="J0"){
        $default_first = "J0";
    }else if($_GET['form'] =="K0"){
        $default_first = "K0";
    }else if($_GET['form'] =="S0"){
        $default_first = "S0";
    }else if($_GET['form'] =="M0"){
        $default_first = "M0";
    }else{
        $default_first = "A0";
    }
}else{
    $default_first = "A0";
}

$sql = "select * from r_table where re_pro='{$default_first}'";
$result_first = mysqli_query($connect,$sql);
$li_one_first=array();
$li_two_first=array();
$li_three_first=array();


while($row = mysqli_fetch_array($result_first)){
    $array= Array(
        "professor" => $row['re_pro'],
        "name" => $row['re_name'],
        "time" => $row['re_time'],
        "univ" => $row['re_univ']
    );

    if($array['time']== "one" ){
        array_push($li_one_first,"o");
    } else if($array['time']=="two") {
        array_push($li_two_first,"o");
    } else if($array['time']=="three") {
        array_push($li_three_first,"o");
    } 
}
//"{$array['univ']} <br> {$array['name']}"

while(count($li_one_first)<11){
    array_push($li_one_first,"x"); 
}
while(count($li_two_first)<11){
    array_push($li_two_first,"x");
}
while(count($li_three_first)<11){
    array_push($li_three_first,"x");
}


?>


