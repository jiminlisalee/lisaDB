### 원하지 않은 오류 발생

1. JNI 오류 발생
![image](https://user-images.githubusercontent.com/70564298/99221112-503be100-2823-11eb-8dc5-310364f0b1c0.png)

몇번을 다시 class를 만들다 이 에러때문에 잠시 패닉이왔다. 나는 분명히 따라하고 했는데 오 ㅐ.. 안되는 것일까 ..

이럴 경우는 프로젝트에서 jdk버젼이 이클립스와 맞지 않아서 생긴 애러다 properties에 들어가서 Enable project specific 항공을 체크 후 java compiler메뉴에서 compliance level를 1.8로 바꿔 주면 된다.

2. integrity constraint (HR.COUNTR_REG_FK) violated - parent key not found 오류 발생

countries의 region_id가 다른 테이블이 parent key로 그 다른테이블 에서의 region_id만 insert가능 한 것이 었다. 즉 부모키가 없다는 것 새로운 region_id를 만들 수 있을 줄 알고 그렇게 시도해 본 결과.. 실패였다. 그래서 region table에서 region를 파악하고 그 안에서 선택해서 insert를 했다.


### 모든것이 새롭다.

sql developer를 처음 사용해본다. 생각보다 사용하기가 쉽고 어렵지 않다. 재밌다. 실무를 위한 기초적인 것들을 배우는 듯한 느낌이다.

### 동작화면

https://youtu.be/U4ykvpirLtA

