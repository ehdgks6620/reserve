<?php 
$connect = mysqli_connect("localhost","root","000325","reserve");
$array = Array(
    "name" => $_POST['re_up_name'],
    "univ" => $_POST['re_up_univ'],
    "num" => $_POST['re_up_num']
);
$sql = "select * from r_table where re_name='{$array['name']}' and re_univ='{$array['univ']}' and re_num='{$array['num']}'";
$result = mysqli_query($connect,$sql);
$li=array();
if($row=mysqli_fetch_array($result)){
    array_push($li,"{$row['re_name']}");
    array_push($li,"{$row['re_univ']}");
    array_push($li,"{$row['re_pro']}");
    array_push($li,"{$row['re_time']}"); 
    array_push($li,"{$row['re_idx']}");
    array_push($li,"{$row['re_num']}");
} else {
    $li = array("없음","없음","없음","없음","없음","없음");
    echo "<script>alert('예약정보가 없습니다')</script>";
    echo "<script language='javascript'>location.href='reserve.php'</script>";
}

$default_pro=$li[2];
$default_time=$li[3];
require_once("tool/interpret_up.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>예약 변경</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" />
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/> 
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <script>
        jQuery(function($){
            $("#schema").DataTable();
        });
    </script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>   
    <link rel="stylesheet" type="text/css" href="style/update.css">
</head>
<style type="text/css">
.btn {
    background-color : black;
}
</style>

<body>

<section id = "top1" class="content-section text-center text-blue" >
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">직무 멘토링</h3>
            <h2 class="mb-5">예약 변경</h2>
        </div>
            
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h4><strong>변경 이전</strong></h4>
            </div>

            <div class="col">    
                <table>
                    <tr>
                        <th>이름</th><td><?= $li[0]?></td>
                    </tr>
                    <tr>
                        <th>대학교</th><td><?= $li[1]?></td>
                    </tr>
                    <tr>
                        <th>전화번호</th><td><?= $li[5]?></td>
                    </tr>
                    <tr>
                        <th>강연자</th><td><?= $subject_first?></td>
                    </tr>
                    <tr>
                        <th>시간</th><td><?= $time?></td>
                    </tr>
                </table>
            </div>

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                 <h4><strong>변경 이후</strong></h4>
            </div>
            
            <div class="col">
                <form action="process/process_up.php" id="form1" method="post">
                <table>
                    <tr>
                        <th>이름</th><td><?= $li[0]?></td>
                    </tr>
                    <tr>
                        <th>대학교</th><td><?= $li[1]?></td>
                    </tr>
                    <tr>
                        <th>전화번호</th><td><?= $li[5]?></td>
                    </tr>
                    <tr >
                        <th>강연자</th><td><select name="re_up_pro">
                            <option value="A0">IT프로그래머</option>
                            <option value="B0">정보통신</option>
                            <option value="C0">자동차</option>
                            <option value="D0">조선</option>
                            <option value="E0">기계</option>
                            <option value="F0">반도체</option>
                            <option value="G0">디스플레이</option>
                            <option value="H0">화학</option>
                            <option value="I0">전기</option>
                            <option value="J0">전자</option>
                            <option value="K0">제약</option>
                            <option value="S0">헬스케어</option>
                            <option value="M0">식품</option>
                            <option value="N0">건축</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th>시간</th>
                        <td>
                        <select name="re_up_time">
                            <option value="one">19:00~20:00</option>
                            <option value="two">20:00~21:00</option>
                            <option value="three">21:00~22:00</option>
                        </select>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="re_up_idx" value="<?= $li[4]?>">
                <input type="hidden" name="re_page" value="first">
                <input type="submit" value="변경완료">
                </form>
            </div>
            
        </div>
    </div>
</section>


<script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
</body>
</html>
