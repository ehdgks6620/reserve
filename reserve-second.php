<?php 
$connect = mysqli_connect("localhost","root","000325","reserve");
$sql = "select * from r_table";
$result = mysqli_query($connect,$sql);
require_once("tool/table_second.php");
require_once("tool/interpret.php");

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>직무 멘토링</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" />
    
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/> 
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>  
    <script>
        jQuery(function($){
            $("#schema").DataTable();
        });
    </script>
    <link rel="stylesheet" type="text/css" href="style/table.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js" ></script>
    <script type="text/javascript">
    function check_n1(input){
        var koreanA0 = /^[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]$/;
 
        var testingA0 = koreanA0.test(input); 
        if(testingA0){
           
        }else{
        alert('한글로 입력해주세요!');
        document.getElementById("tn1").value = null;
        document.getElementById("tn2").value = null;
        document.getElementById("tn3").value = null;
        }
    }

    function check_p1(input){
        var phoneC0 = /^[0-9]{1,100}$/g;
 
        var testingC0 = phoneC0.test(input); 
        if(testingC0){
            
        }
    }
    
    function reset(){
        document.getElementById("tn1").value = null;
        document.getElementById("tn2").value = null;
        document.getElementById("tn3").value = null;

        document.getElementById("tp1").value = null;  
        document.getElementById("tp2").value = null;
        document.getElementById("tp3").value = null;
    }
    
    $(function(){
        $('#t1').hide();
        $('#t2').hide();
        $('#t3').hide();
        reset();

        $('#start1').click(function(){
            $('#t1').show();
            $('#t2').hide();
            $('#t3').hide();      
            reset();

        })
        $('#update1').click(function(){
            $('#t1').hide();
            $('#t2').show();
            $('#t3').hide();
            reset();
    });
        $('#delete1').click(function(){
            $('#t1').hide();
            $('#t2').hide();
            $('#t3').show();
            reset();
        })
        $('#tn1').keypress(function(){
            var input=$(this).val();
            check_n1(input);
        })
       
        $('#tp1').keypress(function(){
            var input=$(this).val();
            check_p1(input);

        })
        $('#tn2').keypress(function(){
            var input=$(this).val();
            check_n1(input);
        })
        
        $('#tp2').keypress(function(){
            var input=$(this).val();
            check_p1(input);

        })
        $('#tn3').keypress(function(){
            var input=$(this).val();
            check_n1(input);
        })
        
        $('#tp3').keypress(function(){
            var input=$(this).val();
            check_p1(input);

        })
        
        })
</script>

</head>
<style type="text/css">
.btn-sm {
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
}
</style>
<body id = "page-top" >
<header class="masthead bg-primary1 text-green text-center" style = "padding: 170px 0px 0px;">
       <h1 style>직무멘토링</h1>
</header>

<section id="about" class="bg-primary text-white mb-0">
    <div class="container">
        <!--<h2 class="text-uppercase text-re text-center text-secondary mb-0" style="padding: 0px;">예약</h2>-->
        <div class="row" class="nav">
            <div class="col">
                <p class="text-center">
                <a class="btn1 btn-primary1 " id="start1" role="button">
                예약신청
                </a>
                <a class="btn1 btn-primary1 " id="update1" role="button">
                예약변경
                </a>
                <a class="btn1 btn-primary1 " id="delete1" role="button">
                예약취소
                </a>
                </p>
            </div>
        </div>
        <div class="row" id="t1">
            <div class="col-lg-8 mx-auto">
                <form action="process/process_re.php" id="contactForm-1" name="sentMessage" novalidate="novalidate" method="post">
                <h5>예약신청</h5>
                <input type="hidden" name="re_day" value="second">
                    <br>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>이름</label><input name="re_name" id="tn1" type="text" class="form-control" required placeholder="이름" minlength="2" maxlength="4"/><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>전화번호</label><input name="re_num" id="tp1" type="number" class="form-control" required placeholder="전화번호" minlength="10" maxlength="11" /><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>대학교</label>
                        <select name="re_univ" class="form-control" style="height:34px;">    
                            <option value="경남대학교">경남대학교</option>
                            <option value="경상대학교">경상대학교</option>
                            <option value="경성대학교">경성대학교</option>
                            <option value="고신대학교">고신대학교</option>
                            <option value="동명대학교">동명대학교</option>
                            <option value="동서대학교">동서대학교</option>
                            <option value="동의대학교">동의대학교</option>
                            <option value="부경대학교">부경대학교</option>
                            <option value="부산과학기술대학교">부산과학기술대학교</option>
                            <option value="신라대학교">신라대학교</option>
                            <option value="영신대학교">영신대학교</option>
                            <option value="울산과학대학교">울산과학대학교</option>
                            <option value="울산대학교">울산대학교</option>
                            <option value="인제대학교">인제대학교</option>
                            <option value="창원문성대학교">창원문성대학교</option>
                        </select>
                    <small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>강좌</label>
                    <select name="re_pro" class="form-control" style="height:34px;">    
                    <option value="A2">시각/편집</option>
                    <option value="B2">웹</option>
                    <option value="C2">의류/펜션</option>
                    <option value="D2">공간</option>
                    <option value="E2">영상</option>
                    <option value="F2">호텔/외식</option>
                    <option value="G2">관광/여행</option>
                    <option value="H2">매장관리</option>
                    <option value="I2">조경</option>
                    <option value="J2">원무행정</option>
                    <option value="K2">간호</option>
                    <option value="S2">물리치료</option>
                    <option value="M2">임상병리</option>
                </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-5 pb-2"><label>시간</label>
                    <select name="re_time" class="form-control" style="height:34px;">
                    <option value="one">19:00~20:00</option>
                    <option value="two">20:00~21:00</option>
                    <option value="three">21:00~22:00</option>
                    </select><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary3 btn-xl"  type="submit">Send</button></div>
                </form>
            </div>
        </div>
        <div class="row" id="t2">
            <div class="col-lg-8 mx-auto">
                <form action="update_second.php" id="contactForm-2" name="sentMessage" novalidate="novalidate" method="post">
                <h5>예약변경</h5>
                    <br>
                    <input type="hidden" name="days" value="second">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>이름</label><input name="re_up_name" id="tn2" type="text" class="form-control"  required placeholder="이름" minlength="2" maxlength="4"/><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>전화번호</label><input name="re_up_num" id="tp2" type="number" class="form-control" required placeholder="전화번호" minlength="10" maxlength="11"/><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>대학교</label>
                        <select name="re_up_univ" class="form-control" style="height:34px;">    
                            <option value="경남대학교">경남대학교</option>
                            <option value="경상대학교">경상대학교</option>
                            <option value="경성대학교">경성대학교</option>
                            <option value="고신대학교">고신대학교</option>
                            <option value="동명대학교">동명대학교</option>
                            <option value="동서대학교">동서대학교</option>
                            <option value="동의대학교">동의대학교</option>
                            <option value="부경대학교">부경대학교</option>
                            <option value="부산과학기술대학교">부산과학기술대학교</option>
                            <option value="신라대학교">신라대학교</option>
                            <option value="영신대학교">영신대학교</option>
                            <option value="울산과학대학교">울산과학대학교</option>
                            <option value="울산대학교">울산대학교</option>
                            <option value="인제대학교">인제대학교</option>
                            <option value="창원문성대학교">창원문성대학교</option>
                        </select>
                        <small class="form-text text-danger help-block"></small>
                        </div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary3 btn-xl"  type="submit">Send</button></div>
                </form>
            </div>
        </div>
        <div class="row" id="t3">
            <div class="col-lg-8 mx-auto">
                <form action="delete.php" id="contactForm-3" name="sentMessage" novalidate="novalidate" method="post">
                    <h5>예약취소</h5>
                    <input type="hidden" name="re_day" value="second">
                    <br>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>이름</label><input name="re_del_name" id="tn3" type="text" class="form-control" required placeholder="이름" minlength="2" maxlength="4"/><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>전화번호</label><input name="re_del_num" id="tp3" type="number" class="form-control" required placeholder="전화번호" minlength="10" maxlength="11"/><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>대학교</label>
                        <select name="re_del_univ" class="form-control" style="height:34px;">    
                            <option value="경남대학교">경남대학교</option>
                            <option value="경상대학교">경상대학교</option>
                            <option value="경성대학교">경성대학교</option>
                            <option value="고신대학교">고신대학교</option>
                            <option value="동명대학교">동명대학교</option>
                            <option value="동서대학교">동서대학교</option>
                            <option value="동의대학교">동의대학교</option>
                            <option value="부경대학교">부경대학교</option>
                            <option value="부산과학기술대학교">부산과학기술대학교</option>
                            <option value="신라대학교">신라대학교</option>
                            <option value="영신대학교">영신대학교</option>
                            <option value="울산과학대학교">울산과학대학교</option>
                            <option value="울산대학교">울산대학교</option>
                            <option value="인제대학교">인제대학교</option>
                            <option value="창원문성대학교">창원문성대학교</option>
                        </select>
                        <small class="form-text text-danger help-block"></small>
                        </div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary3 btn-xl"  type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>



</section>




<section id="portfolio" class="portfolio">
    <div class="container">
        <h2 class="text-uppercase text-center text-tb text-secondary">2일차 멘토상담</h2>
        <div class="col" style="padding: 50px 50px;">
        <p class="text-center"> 
        <a class="btn btn-primary btn-sm" href="reserve-second.php?form=A2" role="button">시각/편집</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve-second.php?form=B2">웹</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve-second.php?form=C2">의류/패션</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve-second.php?form=D2">공간</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve-second.php?form=E2">영상</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve-second.php?form=F2">호텔/외식</a>
            <a class="btn btn-primary btn-sm"  role="button"  href="reserve-second.php?form=G2">관광/여행</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve-second.php?form=H2">매장관리</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve-second.php?form=I2">조경</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve-second.php?form=J2">원무행정</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve-second.php?form=K2">간호</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve-second.php?form=S2">물리치료</a>
            <a class="btn btn-primary btn-sm"  role="button" href="reserve-second.php?form=M2">임상병리</a>
        </p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <h4 class="text-center"><?= "{$subject_second} 멘토상담 예약현황";?></h4>
                    <br>
                    <div class="tavle" style="margin: 0px 15px 0px;">
                     
                    <table  class="table" style="margin-left : auto; margin-right: auto;">
                        <thead>
                            <tr><th>시간</th><th>참여1</th><th>참여2</th><th>참여3</th><th>참여4</th><th>참여5</th>
                            <th>참여6</th><th>참여7</th><th>참여8</th><th>참여9</th><th>참여10</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>19:00~20:00</td><td><?= $li_one_second[0]?></td><td><?= $li_one_second[1]?></td><td><?= $li_one_second[2]?></td><td><?= $li_one_second[3]?></td><td><?= $li_one_second[4]?></td>
                            <td><?= $li_one_second[5]?></td><td><?= $li_one_second[6]?></td><td><?= $li_one_second[7]?></td><td><?= $li_one_second[8]?></td><td><?= $li_one_second[9]?></td></tr>
                            <tr><td>20:00~21:00</td><td><?= $li_two_second[0]?></td><td><?= $li_two_second[1]?></td><td><?= $li_two_second[2]?></td><td><?= $li_two_second[3]?></td><td><?= $li_two_second[4]?></td>
                            <td><?= $li_two_second[5]?></td><td><?= $li_two_second[6]?></td><td><?= $li_two_second[7]?></td><td><?= $li_two_second[8]?></td><td><?= $li_two_second[9]?></td></tr>
                            <tr><td>21:00~22:00</td><td><?= $li_three_second[0]?></td><td><?= $li_three_second[1]?></td><td><?= $li_three_second[2]?></td><td><?= $li_three_second[3]?></td><td><?= $li_three_second[4]?></td>
                            <td><?= $li_three_second[5]?></td><td><?= $li_three_second[6]?></td><td><?= $li_three_second[7]?></td><td><?= $li_three_second[8]?></td><td><?= $li_three_second[9]?></td></tr>
                        </tbody>
                    </table>
                    </div> 
                </div>
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