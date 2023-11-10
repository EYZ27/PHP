<?php
    include('../module/header.php');
    // 네비게이션바 삽입
    include('../module/navbar.php');
    include('../module/pageheader.php');
    include('../module/mysql.php');
    
    $qry='select id, name, uid, uemail from users';
    $f_all3 = getData($qry);
    $heads=array('id','이름','아이디','이메일','관리');
    print('<table class="table-bordered" style="border:2px solid">');
    print('<tr>');
    foreach($heads as $head){
        print('<th style="padding:10px; border:2px solid">'.$head.'</th>');
    }
    print('</tr>');
    print('<tr>');
    foreach($f_all3 as $k=>$v){
        print('<td style="padding:10px; border:2px solid">'.$v.'</td>');
    }
    $btns='<div class="btn-group">
    <a href="/page/user.php" class="btn btn-primary">Edit</a>
    <a href="#" class="btn btn-warning">Delete</a>
    </div>';

    print('<td>'.$btns.'</td>');
    print('</tr>');
    print('</table>');

    // footer 삽입
    include('../module/footer.php');
?>