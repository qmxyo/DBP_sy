# 실행 영상 링크
https://youtu.be/aLEg1GKqMoo

# 새로 배운 내용

--복습차 정리

SELECT 컬럼  
FROM 테이블  
WHERE 조건  
ORDER BY 컬럼  

UPDATE 테이블명  
SET  
컬럼1 = 변경할 값,  
컬럼2 = 변경할 값  
...  
WHERE 조건;

INSERT INTO 테이블명 (컬럼1, 컬럼2, 컬럼3, ...)  
VALUES (값1, 값2, 값3, ...)

DELETE FROM 테이블명
WHERE 조건;

--새로 배운 내용
Oracle Transaction
트랜잭션 : DB의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위, 한꺼번에 모두 수행되어야 할 일련의 연산들, commit 되거나 rollback 된다.  
트랜잭션의 성질 : 원자성, 일관성, 독립성, 지속성  
원자성 atomicity, 트랜잭션의 연산은 db에 모두 반영되거나 전혀 반영되지 않아야 한다.  
일관성 consistency, 실행이 성공적으로 완료하면 DB 상태가 일관성있게 변환된다.  
독립성 isolation, 둘 이상의 트랜잭션이 병행될 경우, 다른 트랜잭션에 끼어들 수 없다.  
지속성 durability, 트랜잭션이 성공적으로 수행하면 그 결과는 영구적으로 반영되어야 한다.  
트랜잭션의 상태 : 활동 active -> 부분완료 partially committed -> 완료 committed | 활동 active -> 실패 failed -> 철회 aborted

Statement, PreparedStatement, CallableStatement

DB 접속 이후 자원 반납
- select, update, insert, delete 할 때 마다 db 연결하고 종료해
- Connection, Statement, ResultSet 객체를 사용할 뒤 close() 메소드를 호출
- 반납하지 않으면 DB서버가 해당 SQL문의 결과를 계속 저장하고 있어야하므로 메모리 낭비 발생

# 문제가 발생하거나 고민한 내용 + 해결 과정

요청한 작업을 수행하는 중 데이터베이스 경고 발생:  
ORA-28002: 7 일안에 비밀번호가 만기  
28002. 00000 -  "the password will expire within %s days"  
*Cause:    The user's account is about to expire and the password  
           needs to be changed  
*Action:   change the password or contact the DBA  
업체 코드 28002  
라는 알림이 떠서 아래 링크를 참고해 해결하였다. 실습중인 local-system을 접속하면서 뜬 건 아니라 신경 안 써도 될 거 같았지만 그대로 두면 나중에 똑같은 알림이 뜰 거 같아서 미리 바꿔두었다.

오라클에서 insert into를 이용해 데이터를 삽입할 때 계속 앞에 삽입되어 select * from (select * from employees order by rownum DESC) where rownum = 1; 사용시 새로 삽입한 데이터가 뜨지 않았다. 검색을 해도 나오지 않아 해결하지 못했다. 이클립스에선 원하는대로 데이터 삽입이 됐다. 

# 참고할 만한 내용
https://blog.naver.com/0neslife/221394075093


# 회고
:heavy_plus_sign: 오라클에서 테이블들을 쉽게 확인하고 직접 원하는 정보를 입력 수정 삭제해볼 수 있어서 좋았다.  
:heavy_minus_sign: 반려동물이 입원했다 퇴원한지 얼마 안 돼서 케어하느라 강의에 집중하지 못하고 계속 끊어 들어서 제대로 익히지 못한 것 같다. 여유될 때 꼭 복습해야겠다.  
:exclamation: 오라클 서버에서 commit을 잊지말자!
