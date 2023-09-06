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
            * {
                font-size: 1.5rem;
                margin-left: 10px;
            }
            .row > *{
                border: 1px solid black;
                background-color: lightblue;
            }
            .redbox{
                background-color: orange;
                background-color: rgba( 255, 125, 0, 0.5 );
            }
            .row-cols-6 {
                border: unset;
                background-color: unset;
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
        </div>
            <br>
        <div class="row row-cols-6">
            <?php
            for($i=1;$i<7;$i++){
                print('<div class="col">'.$i.' of 6</div>');
            }
            print('</div>')
            ?>

        </div>
        <br>
        <br>
        <h2>php 구문</h2>

        <!-- <?php
        $total=12;          // 부트스트랩 전체 컬럼 수
        $wkan=3;            // 나누고 싶은 칸 수
        $cNo=($total/$wkan);    // 클래스 숫자
        $cnt=($total/$cNo);     // 반복 숫자
        print($wkan.'칸으로 나누기');
        print('<div class="row">');
        for($i=0;$i<$cnt;$i++){     
            $s='<div class="col-lg-'.$cNo.'"><h1>.col-md-'.$cNo.'</h1></div>'."\n";
            print($s);
        }
        print('</div>');
        print('<br>');
        ?>

        <?php
        $total=12;          // 부트스트랩 전체 컬럼 수
        $wkan=4;            // 나누고 싶은 칸 수
        $cNo=($total/$wkan);    // 클래스 숫자
        $cnt=($total/$cNo);     // 반복 숫자
        print($wkan.'칸으로 나누기');
        print('<div class="row">');
        for($i=0;$i<$cnt;$i++){     
            $s='<div class="col-lg-'.$cNo.'"><h1>.col-md-'.$cNo.'</h1></div>'."\n";
            print($s);
        }
        print('</div>');
        print('<br>');
        ?>

        <?php
        $total=12;          // 부트스트랩 전체 컬럼 수
        $wkan=6;            // 나누고 싶은 칸 수
        $cNo=($total/$wkan);    // 클래스 숫자
        $cnt=($total/$cNo);     // 반복 숫자
        print($wkan.'칸으로 나누기');
        print('<div class="row">');
        for($i=0;$i<$cnt;$i++){     
            $s='<div class="col-lg-'.$cNo.'"><h1>.col-md-'.$cNo.'</h1></div>'."\n";
            print($s);
        }
        print('</div>');
        print('<br>');
        ?> -->

        <?php
        for ($wkan=2;$wkan<7;$wkan++){
            $total=12;          // 부트스트랩 전체 컬럼 수
            $cNo=($total/$wkan);    // 클래스 숫자
            $cnt=($total/$cNo);     // 반복 숫자
            if ($wkan ==5){
                continue;
            }
            
            print('<p>'.$wkan.'칸으로 나누기</p>');
            print('<div class="row">');
            for($i=0;$i<$cnt;$i++){
                if($i %2==1){
                    $addClass="redbox";
                }else{
                    $addClass="";
                }
                $s='<div class="col-lg-'.$cNo.' '.$addClass.'"><h1>.col-md-'.$cNo.'</h1></div>'."\n";
                print($s);
            }
            print('</div>');
            print('<br>');
        }

        // for ($kan=2;$kan<7;$kan++){
        //     makeBcol($kan);
        // }

        $score=75;
        $score=10*floor($score/10);
        switch($score){
            case 90:
                print('<p>수</p>');
                break;
            case 80:
                print('<p>우</p>');
                break;
            case 70:
                print('<p>미</p>');
                break;
            default:
                print('<p>낙제</p>');

        }

        ?>
        <br>
        <br>

        <?php
        print('<p>');
        for ($i=1;$i<6;$i++){
            for ($j=1;$j<($i+1);$j++){
                $star = '*';
                print(''.$star);
            }
            print(nl2br("\n"));
        }
        ?>

        <?php
        function makeHr($title=""){
            print('<hr>');
            print('<h1>'.$title.'</h1>');
            print('<hr>');
        }
        makeHr('사다리만들기');

        $kn = 1;
        function grid1($cNo=1){
            $other=12-$cNo;
            $s='<div class="row">';
            $s.='<div class="col-lg-'.$cNo.' '.$addClass.'"><h3>.col-lg-'.$cNo.'</h3></div>'."\n";
            // $s.='<div class="col-lg-'.$other.' '.$addClass.'"><h1>.col-lg-'.$cNo.'</h1></div>'."\n";
            $s.='</div>';
            print($s);
        }

        for ($i=11;$i>0;$i--){
            grid1($i);
        }
        for ($i=2;$i<12;$i++){
            grid1($i);
        }

        makeHr('단순 배열');

        $arr = array(1,2,'국어','수학');
        for($i=0;$i<count($arr);$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }
        foreach($arr as $a){
            print('<li>'.$a.'</li>');
        }

        makeHr('연관 배열 key - value');
        $arr=array(1=>'국어', 2=>'수학', 5=>'영어', '6'=>'수학');
        for($i=0;$i<7;$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }

        foreach($arr as $k=>$v){
            print('<li>'.$k.':'.$v.'</li>');
        }
        ?>

    </body>
</html>