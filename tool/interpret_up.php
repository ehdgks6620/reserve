<?php
$subject_first = "";
$subject_second = "";
$subject_third = "";
$time = "";

if($default_pro=="A0"){
    $subject_first = "IT프로그래머";
}else if($default_pro =="B0"){
    $subject_first = "정보통신";
}else if($default_pro =="C0"){
    $subject_first = "자동차";
}else if($default_pro =="D0"){
    $subject_first = "조선";
}else if($default_pro =="E0"){
    $subject_first = "기계";
}else if($default_pro =="F0"){
    $subject_first = "반도체";
}else if($default_pro =="G0"){
    $subject_first = "디스플레이";
}else if($default_pro =="H0"){
    $subject_first = "화학";
}else if($default_pro =="I0"){
    $subject_first = "전기";
}else if($default_pro =="J0"){
    $subject_first = "전자";
}else if($default_pro =="K0"){
    $subject_first = "제약";
}else if($default_pro =="S0"){
    $subject_first = "헬스케어";
}else if($default_pro =="M0"){
    $subject_first = "식품";
}else if($default_pro =="N0"){
    $subject_first = "건축";
}

if($default_pro == "A2"){
    $subject_second = "시각/편집";
}else if($default_pro =="B2"){
    $subject_second = "웹";
}else if($default_pro =="C2"){
    $subject_second = "의류/펜션";
}else if($default_pro =="D2"){
    $subject_second = "공간";
}else if($default_pro =="E2"){
    $subject_second = "영상";
}else if($default_pro =="F2"){
    $subject_second = "호텔/외식";
}else if($default_pro =="G2"){
    $subject_second = "관광/여행";
}else if($default_pro =="H2"){
    $subject_second = "매장관리";
}else if($default_pro =="I2"){
    $subject_second = "조경";
}else if($default_pro =="J2"){
    $subject_second = "원무행정";
}else if($default_pro =="K2"){
    $subject_second = "간호";
}else if($default_pro =="S2"){
    $subject_second = "물리치료";
}else if($default_pro =="M2"){
    $subject_second = "임상병리";
}

if($default_pro == "A3"){
    $subject_third = "인사총무";
}else if($default_pro =="B3"){
    $subject_third = "재무회계";
}else if($default_pro =="C3"){
    $subject_third = "마케팅";
}else if($default_pro =="D3"){
    $subject_third = "영업";
}else if($default_pro =="E3"){
    $subject_third = "해외영업";
}else if($default_pro =="F3"){
    $subject_third = "은행";
}else if($default_pro =="G3"){
    $subject_third = "증권";
}else if($default_pro =="H3"){
    $subject_third = "유통물류";
}else if($default_pro =="I3"){
    $subject_third = "상담";
}else if($default_pro =="J3"){
    $subject_third = "복지행정";
}else if($default_pro =="K3"){
    $subject_third = "공무원";
}else if($default_pro =="S3"){
    $subject_third = "공공기관";
}else if($default_pro =="M3"){
    $subject_third = "외국계 기업";
}

if($default_time=="one"){
    $time="19:00~20:00";
}else if($default_time=="two"){
    $time="20:00~21:00";
}else if($default_time=="three"){
    $time="21:00~22:00";
}
?>