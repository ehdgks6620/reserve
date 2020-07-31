<?php 
require_once("table_first.php");
require_once("table_second.php");
require_once("table_third.php");

$subject_first = "IT프로그래머";
$subject_second = "시각/편집";
$subject_third="인사총무";
if($default_first=="A0"){
    $subject_first = "IT프로그래머";
}else if($default_first =="B0"){
    $subject_first = "정보통신";
}else if($default_first =="C0"){
    $subject_first = "자동차";
}else if($default_first =="D0"){
    $subject_first = "조선";
}else if($default_first =="E0"){
    $subject_first = "기계";
}else if($default_first =="F0"){
    $subject_first = "반도체";
}else if($default_first =="G0"){
    $subject_first = "디스플레이";
}else if($default_first =="H0"){
    $subject_first = "화학";
}else if($default_first =="I0"){
    $subject_first = "전기";
}else if($default_first =="J0"){
    $subject_first = "전자";
}else if($default_first =="K0"){
    $subject_first = "제약";
}else if($default_first =="S0"){
    $subject_first = "헬스케어";
}else if($default_first =="M0"){
    $subject_first = "식품";
}else if($default_first =="N0"){
    $subject_first = "건축";
}



if($default_second =="A2"){
    $subject_second = "시각/편집";
}else if($default_second =="B2"){
    $subject_second = "웹";
}else if($default_second =="C2"){
    $subject_second = "의류/패션";
}else if($default_second =="D2"){
    $subject_second = "공간";
}else if($default_second =="E2"){
    $subject_second = "영상";
}else if($default_second =="F2"){
    $subject_second = "호텔/외식";
}else if($default_second =="G2"){
    $subject_second = "관광/여행";
}else if($default_second =="H2"){
    $subject_second = "매장관리";
}else if($default_second =="I2"){
    $subject_second = "조경";
}else if($default_second =="J2"){
    $subject_second = "원무행정";
}else if($default_second =="K2"){
    $subject_second = "간호";
}else if($default_second =="S2"){
    $subject_second = "물리치료";
}else if($default_second =="M2"){
    $subject_second = "임상병리";
}else{
    $subject_second = "시각/편집";
}



if($default_third =="A3"){
    $subject_third = "인사총무";
}else if($default_third =="B3"){
    $subject_third = "재무회계";
}else if($default_third =="C3"){
    $subject_third = "마케팅";
}else if($default_third =="D3"){
    $subject_third = "영업";
}else if($default_third =="E3"){
    $subject_third = "해외영업";
}else if($default_third =="F3"){
    $subject_third = "은행";
}else if($default_third =="G3"){
    $subject_third = "증권";
}else if($default_third =="H3"){
    $subject_third = "유통물류";
}else if($default_third =="I3"){
    $subject_third = "상담";
}else if($default_third =="J3"){
    $subject_third = "복지행정";
}else if($default_third =="K3"){
    $subject_third = "공무원";
}else if($default_third =="S3"){
    $subject_third = "공공기관";
}else if($default_third =="M3"){
    $subject_third = "외국계 기업";
}



?>