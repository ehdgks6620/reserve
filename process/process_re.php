<?php
$connect = mysqli_connect("localhost","root","000325","reserve");

$sql="select re_name from r_table where re_pro='{$_POST['re_pro']}' and re_time='{$_POST['re_time']}' ";
$result=mysqli_query($connect,$sql);
$max = mysqli_num_rows($result);

if($max>9){
    echo "<script>alert('이미 인원이 다찼습니다! 다른것을 고르세요!!')</script>";
    echo "<script language='javascript'>history.back();</script>";
}
else{

    $sql = "select * from r_table where re_name = '{$_POST['re_name']}' and re_univ = '{$_POST['re_univ']}' and re_num = '{$_POST['re_num']}' or re_num = '{$_POST['re_num']}'";
    $check = mysqli_fetch_array(mysqli_query($connect,$sql));
    if(strlen($_POST['re_name'])<15 && strlen($_POST['re_name'])>3 &&strlen($_POST['re_univ'])<30 && strlen($_POST['re_num'])<=11 && strlen($_POST['re_num'])>9 ){
        if(isset($check['re_name'])){
            echo "<script>alert('이미 등록을 하셨습니다!!')</script>";
            echo "<script language='javascript'>history.back();</script>";
        }else{
            $sql = "insert into r_table(re_pro, re_name, re_time, re_univ, re_num, re_day) values ('{$_POST['re_pro']}','{$_POST['re_name']}','{$_POST['re_time']}','{$_POST['re_univ']}','{$_POST['re_num']}','{$_POST['re_day']}')";
            $result = mysqli_query($connect,$sql);
            if($result === false){
                echo "<script>alert('잘못 입력하셨습니다!!');</script>";
            }else{
                
                echo "<script>alert('예약에 성공하셨습니다!')</script>";
                echo "<script language='javascript'>history.back();</script>";
            }
        }
    } else {
        echo "<script>alert('입력한 형식이 잘못되었습니다!')</script>";
        echo "<script language='javascript'>history.back();</script>";
    }
    }

    
    ?>
