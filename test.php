<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>직무 멘토링</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" />
    
</head>
<body>
    <div class="form animated fliplnX">
       <h2>예약 신청</h2>
            <form action="process/process_re.php" method="post">
                <input placeholder="이름" type="text" name="re_name">
                <input placeholder="대학교" type="text" name="re_univ">
                <select name="re_pro">
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
                </select>
                <select name="re_time">
                    <option value="one">13:00~14:00</option>
                    <option value="two">14:00~15:00</option>
                    <option value="three">15:00~16:00</option>
                    <option value="four">16:00~17:00</option>
                    <option value="five">17:00~18:00</option>
                </select>
                    <input type="submit" value="Apply" name="button">
            </form>
    </div>
    
</body>
</html>