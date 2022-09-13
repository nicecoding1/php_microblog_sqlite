# php_microblog_sqlite
PHP + SQLite 를 사용한 micro blog (CRUD 학습용)  
  
## 파일 리스트
common.php – db 접속 함수, 공통 함수  
signup_form.php, signup.php – 회원 가입  
signin_form.php, signin.php – 로그인, 로그아웃  
write_form.php, write.php – 글 작성  
modify_form.php, modify.php – 글 수정  
view.php – 글 보기  
list.php – 글 리스트  
  
## DB 테이블 생성 스크립트
CREATE TABLE "user" (  
	"no"	INTEGER NOT NULL,  
	"id"	TEXT NOT NULL UNIQUE,  
	"pw"	TEXT NOT NULL,  
	"name"	TEXT NOT NULL,  
	"insdt"	TEXT NOT NULL,  
	PRIMARY KEY("no" AUTOINCREMENT)  
);  
  
CREATE TABLE "board" (  
	"no"	INTEGER NOT NULL,  
	"subject"	TEXT NOT NULL,  
	"content"	TEXT,  
	"insdt"	TEXT,  
	PRIMARY KEY("no" AUTOINCREMENT)  
);  
  
## php 다운로드
https://www.php.net/downloads  
  
## sqlite browser 다운로드
https://sqlitebrowser.org/dl/  