# 실행 영상 링크
https://youtu.be/j7j6wmDHy1o

# 실습 과제

employees와 dept_emp를 JOIN해서 부서별 직원 정보를 볼 수 있게 하였다.

사용자가 존재하는 모든 부서명을 알 수 없을 거라 판단해 option value를 이용하여 부서명을 목록으로 불러와 선택할 수 있도록 하였다.

볼 수 있는 인원도 get방식으로 직접 입력할 수 있도록 하고 싶었는데 계속 에러가 나서 제외했다.


# 새로 배운 내용

git pull origin master(main) : 현재 깃허브와 동일한 상태로 만든다

테이블 약자 사용 가능

salaries LEFT JOIN employees ON salaries.emp_no = employees.emp_no -> salaries s LEFT JOIN employees e ON s.emp_no = e.emp_no

(알던 내용이지만 복습차 정리)

<PHP>

변수: 제일 앞에 $ 표시한다. / 문자와 숫자, 언더바(_)를 사용할 수 있으나 숫자로 시작할 수 없다. / 대소문자를 구분한다.

print: 하나의 입력을 받아 리턴 함

echo: 하나 이상의 문자열 출력

문자열: "" 또는 ''로 사용 / 문자열에 " or '를 직접 사용하고 싶으면 \(백슬래쉬)를 사용함 \'\" / 문자열 안에 변수를 사용하려면, ""안에 {}를 사용한다. / 문자와 문자(또는 변수)를 연결할 때는 .(마침표)를 사용한다.

제어문: if / if else / if elseif else / switch case / for / while

배열: 연관배열

mysqli, MySQL Improved Extension: mysqli_connect() / mysqli_connect_errno() / mysqli_connect_error() / mysqli_real_escape_string() (php에서 제공하는 함수로 MYSQL과 커넥션을할때
String을 Escape한 상태로 만들어준다.) / mysqli_fetch_array / mysqli_query


# 문제가 발생하거나 고민한 내용 + 해결 과정
자잘한 오타 외엔 문제가 발생하지 않았다.


# 참고할 만한 내용
X


# 회고
:heavy_plus_sign: 하루 일찍 시작하기도 했고 지난 수업에 비해 양이 많이 적어 여유롭게 배웠던 부분들을 복습해볼 수 있어서 좋았다.

:heavy_minus_sign: 대부분의 오류가 오타였던 점 외엔 딱히 없다.

:exclamation: 지난 번 과제를 할 때 실수로 VMware를 종료해서 다시 실행하고 접속하느라 시간을 많이 썼었는데 따로 설정할 것 없이 그냥 켜놓기만 해도 된다는 것을 알게 되었다.
