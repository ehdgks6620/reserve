<?php
$connect=mysqli_connect("localhost","root","000325","reserve");
$array = Array(
    "name" => $_POST['re_del_name'],
    "univ" => $_POST['re_del_univ'],
    "num" => $_POST['re_del_num'],
    "day" => $_POST['re_day']
);
$sql = "delete from r_table where re_name='{$array['name']}' and re_univ='{$array['univ']}' and re_num='{$array['num']}' and re_day='{$array['day']}'";
$result = mysqli_query($connect,$sql);
if($result===false){
    echo "<script>alert('잘못 입력하셨습니다!!');</script>";
    echo "<script language='javascript'>history.back();</script>";
}else{
    echo "<script>alert('예약이 취소됐습니다!!');</script>";
    echo "<script language='javascript'>history.back();</script>";
}
?>
