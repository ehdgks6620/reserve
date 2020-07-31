<?php
$connect = mysqli_connect("localhost","root","000325","reserve");
$array =Array(
    "pro" => $_POST['re_up_pro'],
    "time" => $_POST['re_up_time'],
    "idx" => $_POST['re_up_idx'],
    "page" => $_POST['re_page']
);
$sql = "select re_name from r_table where re_pro='{$array['pro']}' and re_time='{$array['time']}'";
$result=mysqli_query($connect,$sql);
$data = mysqli_num_rows($result);

if($data>9){
    echo "<script>alert('이미 인원이 다찼습니다! 다른것을 고르세요!!')</script>";
    echo "<script language='javascript'>location.href='../reserve.php'</script>";
} else {
$sql = "update r_table set re_pro='{$array['pro']}',re_time='{$array['time']}' where re_idx={$array['idx']} ";
$result = mysqli_query($connect,$sql);
    if($array['page']=="first"){
        if($result===false){
            echo "<script>alert('잘못 입력하셨습니다!!');</script>";
            echo "<script language='javascript'>location.href='../reserve.php'</script>";
        }else{
            echo "<script>alert('예약 변경이 성공했습니다!!');</script>";
            echo "<script language='javascript'>location.href='../reserve.php'</script>";
        }
    }else if($array['page']=="second"){
        if($result===false){
            echo "<script>alert('잘못 입력하셨습니다!!');</script>";
            echo "<script language='javascript'>location.href='../reserve-second.php'</script>";
        }else{
            echo "<script>alert('예약 변경이 성공했습니다!!');</script>";
            echo "<script language='javascript'>location.href='../reserve-second.php'</script>";
        }
    }else if($array['page']=="third"){
        if($result===false){
            echo "<script>alert('잘못 입력하셨습니다!!');</script>";
            echo "<script language='javascript'>location.href='../reserve-third.php'</script>";
        }else{
            echo "<script>alert('예약 변경이 성공했습니다!!');</script>";
            echo "<script language='javascript'>location.href='../reserve-third.php'</script>";
        }
    }
}
?>
