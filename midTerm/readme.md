# 데이터 웹사이트 만들기

## 개발환경
- MariaDB
- PHP
- HTML
- 리눅스 Apache Web Server

선택이유 : 서버가 분리되어있는 곳에서 개발을 하는 것이 더 안전하다 판단했으며 , MySQL 엔터프라이즈 버전과 MariaDB의 기능을 비교하자면 MariaDB가 무료로 기능을 사용 할 수 있는 부분이 많다. 그래서 연습을 위해선 mariadb가 적합하다 생각했다. 그리고 apache는 1995년 이후 지속적으로 사랑 받아왔고 다양한 모듈과 강력한 커뮤니티로 인해서 많은 자료들이 있다. 즉 검색해서 문제를 해결 할 수 있는 방법을 쉽게 찾을 수 있다.

## 데이터
- kaggle에서 데이터 가져오기

![우분투에 옮기기](https://user-images.githubusercontent.com/70564298/97769723-cc220200-1b70-11eb-9b6d-27f1497f0a54.PNG)

⁉ kaggle에서 데이터셋을 다운받아 우분투 서버에 /home/test로 옮겼다.

![database import](https://user-images.githubusercontent.com/70564298/97769796-494d7700-1b71-11eb-93e0-dd2c55fe7ec7.PNG)

⁉ visual studio terminal에서 해당 데이터셋을 미리 만들어 놓은 table로 IMPORT를 완료 했다.

**** 여기서 miss!! 데이터셋을 가져오는 entry를 잘못 기입하여 각각 줄의 데이터를 구분하지 못하고 두 line의 내용이 한 row에 들어간 사실을 발견하였다.
![다음줄까지조회](https://user-images.githubusercontent.com/70564298/97769835-8e71a900-1b71-11eb-81c9-3f37a0dfcc8c.PNG)

⁉ 다시 데이터를 모두 삭제하고 (TRUNCATE) 다시 IMPORT했다. 그 이후로는 정확하게 데이터가 조회됬다.


## 데이터 분석 기능 4가지
1. 한국 tvshow,movie를 방송년도 오름차순으로 확인 가능
2. 제목을 기입하여 해당 프로그램의 정보 확인 가능
3. 국가명을 기입하여 해당 국가의 프로그램을 확인 가능
4. 국가,방송년도 두 정보를 기입 후 조회 가능

## 소개영상
https://youtu.be/3Hz9jmIOoTY
