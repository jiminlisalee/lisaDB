### midTerm 과제 회고

1. kaggle를 만나다.
    kaggle, 사실 처음 들어봤다.
    내가 모르는 데이터들이 존재 했고 방대했다. 데이터를 가지고 분석을 즐기는 이들이 많다는 것이 새삼 느껴졌다.
2. 데이터를 옮겨보다.
   * 데이터셋을 가져오는 entry를 잘못 기입하여 각각 줄의 데이터를 구분하지 못하고 두 line의 내용이 한 row에 들어간 사실을 발견하였다.
   * 거의 다 php파일을 만들고 나서.. 재확인도중 내용을 읽어보니.. 밑에 사진 처럼 조회가 된것을 알아차렸다
   * 사실 window에서도 해보려 했는데 오류메세지를 찾고 my.ini파일을 고쳐보아도.. 전혀 옮겨지질 않아.. 포기했다..
    ![다음줄까지조회](https://user-images.githubusercontent.com/70564298/97769835-8e71a900-1b71-11eb-81c9-3f37a0dfcc8c.PNG)

   * 다양한 블로거님들 Q&A 플랫폼 들을 통해서 해결 할 수 있었다.. 한숨이 계속 나왔지만 포기하지 않았다.

3. query row의 갯수를 파악하다.
    마지막 조회기능을 보면 국가와 연도를 함께 조합해 검색하는 기능을 만들어 보았다. 그런데 모든 국가가 그 원하는 해당년도에 netflix 프로그램이 없을 것은 당연하였다. 그래서 어떻게 하면 데이터가 없다는 echo를 넣을까 생각하여 이것 저것 시도해 보았다. $result[] == 0 으로 해야하나 $result == NULL로 해야하나.. 다안되서 또 구글링을 통해 mysqli_num_rows를 찾았다! 그래서 row의 수를 세어 데이터가 있는지 없는지 확인 할 수 있었다.

    ![데이터없](https://user-images.githubusercontent.com/70564298/97774385-a873b180-1b9a-11eb-88a9-8dcf12a333b2.PNG)

4. 두개의 where조건을 사용해보다.
    마지막 조회기능을 보면 국가와 연도를 함께 조합해 검색하는 기능을 만들어 보았다. 수업시간에 다루지 않았었지만 따로 찾아보지 않고 이렇게 하면 조회가 되지 않을까 출력이 되지 않을까 생각하며 PHP파일을 완성해 본 결과 박수를 칠정도로 내가 원하는 출력 결과가 나와서 😜행복했다.

5. github사용 법을 70% 익히다.
    저번에 github를 잘못 다뤄서.. 앞주차에 했던것들이 모두 삭제되고 w07만 덩그러니.. 남았던 충격적이었던.. 날이 있었다. 이번엔 구글링을 잘 해서 원하는 빠른 방법을 찾은 것 같다. 그래서 이 visual studio에 있던 모든 기록들을 다시 github에 push해서 넣었다.. 아직 다 알려면 멀었겠지만 하나하나씩 알아보려한다. 

✨역시 프로그래밍은 내가 하나하나 찾아야 기억에 더 쉽게 남고 다음에 재사용할 시 빠르게 생각난다.