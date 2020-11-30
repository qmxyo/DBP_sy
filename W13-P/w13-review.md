# 실행 영상 링크
https://youtu.be/xTzkzGl2Wqc

# 새로 배운 내용
JSP란? Java Server Page  
HTML 내부에 java 코드를 입력하여, 웹 서버에서 동적으로 웹 브라우저를 관리하는 언어

<JSP 구동 원리>  
JSP를 실행하면, JSP 에서 생성된 서블릿이 실행됨  
1) 클라이언트가 jsp 실행을 요청하면, 서블릿 컨테이너는 jsp 파일에 대응하는 자바 서블릿을 찾아서 실행한다.  
2) 대응하는 서블릿이 없거나, jsp 파일이 변경되었으면, jsp 엔진을 통해 서블릿 자바 소스를 생성한다.  
3) 자바 컴파일러가 서블릿 자바 소스를 클래스 파일로 컴파일 한다. (jsp 파일이 변경될때마다 반복)  
4) jsp 로 부터 생성된 서블릿은 서블릿 구동 방식에 의해 service() 메소드가 호출되고, 서블릿이 생성한 html 화면을 웹 브라우저로 보낸다. 

<JSP 구성요소>  
템플릿 데이터 : 클라이언트로 출력되는 콘텐츠 ( HTML, JavaScript, CSS, JSON, XML, 일반 텍스트 등)  
JSP 전용 태그 : 서블릿 생성 시 특정 자바 코드로 바뀌는 태그  
Directives (지시자) <%@ %>  
지시자 속성과 값에 따라 자바 코드 생성  
page : jsp 페이지 속성 정의  
taglib : 태그 라이브러리 선언  
include  
Scriptlet Elements (스크립트릿) <% %>  
<% 자바 코드 %>  
Declarations (선언문) <%! %>  
서블릿 클래스의 멤버(변수, 메소드)를 선언할 때 사용  
작성 위치는 상관 없음  
Expressions (표현식) <%= %>  
문자열 출력  
<jsp:...>  
JSP 내장 객체 : JSP 기술 사양 에 정의된 필수적인 9개 객체  
request, response, pageContext, session, application, config, out, page, exception  
JSP에서 별도 선언 없이 사용 가능  

# 문제가 발생하거나 고민한 내용 + 해결 과정
이클립스를 실행하려 하니 Version 1.8.0_271 of the JVM is not suitable for this product. Version: 11 or greater is required. 라는 창이 뜨며 실행이 안 됐다.  
아래 두 링크를 참고해 해결하였다.

이클립스에서 tomcat 서버를 설정해야하는데 계속 tomcat이 안떠서 한참 지웠다 깔았다 반복했다.. 한참 재설치해서 성공했다.

# 참고할 만한 내용
https://blog.naver.com/qpqpqpqp5/222113773497  
https://blog.naver.com/lotu_us/222157657549


# 회고
:heavy_plus_sign: 이클립스에서 바로 html에 접속해 실행해볼 수 있어서 편하고 좋았다.
:heavy_minus_sign: 과제 제출 시간을 오바했다 다신 이러지 않도록 하자! 
:exclamation: 기존 수업에 쓰던 이클립스를 삭제하고 Eclipse IDE for Enterprise Java Developers를 설치해 사용하였는데 톰캣 서버를 이클립스에서 설정하기 위해서였다.
