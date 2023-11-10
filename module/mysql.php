<?php
    // http://127.0.0.1/myadmin/ root apmsetup
    // 데이터베이스 생성
    // 데이터베이스 연결
function getConn(){
    $hostname = 'localhost';
    $username = 'root';
    $password = 'apmsetup';
    $dbase = 'myshop';
    $conn = mysqli_connect($hostname, $username, $password, $dbase);
    mysqli_query($conn, 'SET NAMES utf8');
    return $conn;
}

function getData($qry='select * from users'){
    $conn = getConn();
    $res = mysqli_query($conn, $qry);   // result
    // print_r($res);

    // $f_all = mysqli_fetch_array($res);   // 쿼리 결과 fetch(불러오기) ; col_name까지
    // $f_all2 = mysqli_fetch_row($res);    // 순서대로 ; array 순서대로 0~
    $data = mysqli_fetch_assoc($res);     // 연관배열
    return $data;
}

?>