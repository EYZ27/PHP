<!DOCTYPE html>
<html>
    <head><!-- 주석) 전체적 페이지에 영향을 주는 요소 -->
        <meta charset="utf-8"/>
        <title>My php</title>
        

        <!-- CSS 문법 => SCSS ---------------------------------------------------->
        <style type="text/css">  /* CSS 영역 */
            /* Cascading Style Sheet 주석 = 스크래이핑 CSS selector로서 사용된다. */
            /* 태그 셀렉터: h1 태그를 찾아서 모두 red 컬러로 바꿀 것 */
            h1{
                color: red;
            }
            div{
                border: 1px solid red;
            }
            p{
                color: blue;
            }
            form{
                border: 1px dotted skyblue;
            }
            

            /* # 아이디셀렉터 */
            #hello{
                border: 1px dotted red;
            }


            /* . 클래스셀렉터 */
            
            .txtGreen{
                color:green;
            }

            /* > 자손셀렉터 : 꺾쇠가 있으면 자기 자손에게만 영향 */
            li > span{
                color : orange;
            }
            div > ul{
                color: grey;
            }

        </style>


        <!-- javascript 영역 ----------------------------------------------------->
        <script type="text/javascript">
            // 자바스크립트 한 줄 주석
            /* 자바스크립트 블럭 주석 */
            /* 요즘은 javascript만 써서 type="text/javascript" 이 코드가 필요없다. */

        </script>
    </head>

    <body><!--페이지 본문-->
        <div>
            <h1>hello           html</h1> <!-- 띄어쓰기를 해도 표시되지 않는다. -->
            <h2 class="txtGreen">h2</h2>
            <h3>h3</h3>
            <h4>...</h4>
            <h6>h6</h6>
            <h7>h7</j7> <!-- 해당 태그는 존재하지 않고, 사용자 정의 태그로 작성할 수 있다. -->
            <!-- W3C(https://www.w3.org/)에서 권고사항으로 제안하고 있다 -->
        </div>

        <p>안녕하세요</p>
        <p>여러분</p>
        
        <div id="hello">여러분 반갑습니다.</div>
        <div>
            <ul> <!-- 순서없는 리스트 -->
                <li>짜장면</li>
                <li>짬뽕</li>
                <li>탕수육</li>
            </ul>
            <ol>
                <li>서울</li>
                <li>도쿄</li>
                <li>뉴욕</li>
            </ol>
            <p>
            날씨가 <span>매우</span> 덥습니다.
            더운 날 먹는 음식
            <ul>
                <li><span>매운</span> 냉면</li>
                <li><span>시원한</span> 냉면</li>
            </p>
        </div>

        <br>
        <form action="go.php" method="POST">
            <h2>가입하기</h2>
            <ul>
                <li>
                    <label for="">이름</label>
                    <input type="text" name="text" id="unname"></li>

                <li>
                    <label for="">여성<input type="radio" name="gender" value="F" checked> | 
                    <label for="">남성<input type="radio" name="gender" value="M">
                </li>
                <li>
                    <label for="">광고 메시지 받기</label>
                    <input type="checkbox" name="ad" id="checkbox" value="agree"> 동의합니다.
                </li>
                <li><input type="text" placeholder="인삿말 작성하기"></li>
            </ul>
            <input type="submit" value="전송하기">
        </form>

    </body> 
</html>