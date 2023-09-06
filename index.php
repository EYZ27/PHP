<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!-- 합쳐지고 최소화된 최신 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- 부가적인 테마 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

        <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
            .row > *{
                border: 1px solid black;
                background-color: lightblue;
            }            
        </style>
    
    <?php
    // php 코드: java 기반
    // 단열 주석
    /* 다열 주석 */
    // 변수 $변수명
    // 세미콜론으로 마친다.
    // 문자열+붙이기(.)+문자열...
    // 참고: 변수형이 없다. -> 대규모 작업에 불리하다. 작은 홈페이지 정도면 쉽고 빠르고 안정적.
    $a = 'h2';  // 이 부분만 변경 가능하다.
    print('<'.$a.'>안녕하세요</'.$a.'>');

    // 반복문 for(증감변수초기화;증감변수조건;증감){코드블럭} while
    for ($i=1;$i<7;$i++){
        $a='h'.$i;
        print('<'.$a.'>안녕하세요</'.$a.'>');
    }

    // 이제 반복문을 사용해서 컬럼을 만들어보자!
    ?>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-4">.col-lg-4</div>
            <div class="col-lg-4">.col-lg-4</div>
            <div class="col-lg-4">.col-lg-4</div> 
        </div>

        <div class="row">
            <div class="col-lg-3">.col-lg-3</div>
            <div class="col-lg-3">.col-lg-3</div>
            <div class="col-lg-3">.col-lg-3</div> 
            <div class="col-lg-3">.col-lg-3</div>
        </div>

        <br><h2><b>실습하기</b></h2><br>
        <!-- 실습하기 -->
        <div class="row">
            <div class="col-lg-6">1 of 2</div>
            <div class="col-lg-6">2 of 2</div>
        </div>
        <br>

        <div class="row">
            <div class="col-lg-1">1 of 2</div>
            <div class="col-lg-11">2 of 2</div>
        </div>
        <br>

        <div class="row">
            <div class="col-lg-2">1 of 2</div>
            <div class="col-lg-10">2 of 2</div>
        </div>
        <br>

        <div class="row">
            <?php
            for($i=1;$i<13;$i++){
                print('<div class="col-md-3 col-lg-1">'.$i.' of 12</div>');
            }
            ?>

            <div class="row row-cols-6">
            <?php
            for($i=1;$i<7;$i++){
                print('<div class="col">'.$i.' of 6</div>');
            }
            ?>
        </div>
        <br>
    </body>
</html>