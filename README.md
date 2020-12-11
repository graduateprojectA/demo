# (●'◡'●) 졸업프로젝트 CurVelio를 소개합니다 (●'◡'●)

## 1) 시연 영상 (유튜브채널 주소) 📽

웹사이트 CurVelio 시연 영상 (Web Site CurVelio Demonstration Video): https://www.youtube.com/watch?v=jL7Vck2iIyc&feature=youtu.be

## 2) 프로젝트에 대한 소개✏

CurVelio는 시간표 자동 생성 웹사이트로, 각 학번과 학기에 맞는 커리큘럼에 따라, 강의를 표시하고, 시간표를 자동으로 생성해주는 웹입니다.사용자에게 맞춤형 시간표를 제공함으로써, 기존에 시간표 설계의 불편함을 해결해 줍니다. <br>
저희는 사용자로부터 학번, 학기, 들을 학점 수, 원하지 않는 시간대, 원하지 않는 분반, 그리고 사용자가 중요하게 생각하는 항목의 가중치값(건물 간 거리, 공강 시간 등)을 입력받습니다.
<br>
사용자의 입력값에 따, 시간표가 자동으로 생성됩니다. 
<br>
만약, 강의 시간이 겹치는 경우와 같이 생성된 시간표의 학점이 들을 학점 수보다 부족하다면, 나머지 학점을 채울 수 있는 교양 과목을 추천해줍니다.

CurVelio is an auto-generated website that displays lectures and automatically generates schedules according to the curriculum for each class and semester.It solves the inconvenience of traditional timetable designs by providing customized timelines to users. <br>
We receive student numbers, semesters, the number of credits to be taken, unwanted time zones, unwanted divisions, and the weighting of items that you consider important (such as distance between buildings, time between classes, etc.).
<br>
The user's input automatically generates timetables.
<br>
If the credits in the generated timetable, such as when the lecture times overlap, are less than the number of credits to be taken, then we recommend a liberal arts course to fill the remaining credits.

### 시나리오 설계
1. 사용자로부터 학번, 해당 학기, 들을 학점 수, 원하지 않는 시간대를 입력받습니다.
2. 원하지 않는 분반, 추가적으로 필요한 분반(재수강 등의 이유로)을 우선적으로 입력받습니다. 
3. 사용자가 중요하게 생각하는 카테고리 항목의 가중치값(건물 간 거리, 공강 시간, 시험 기간 등)을 입력받습니다.
4. 시간표 생성!
5. 추가적으로 남은 학점 수에 교양 과목을 추천합니다.
<br>
사용자의 입력값에 따, 시간표가 자동으로 생성됩니다. 
<br>
만약, 강의 시간이 겹치는 경우와 같이 생성된 시간표의 학점이 들을 학점 수보다 부족하다면, 나머지 학점을 채울 수 있는 교양 과목을 추천해줍니다.

### 프로젝트 구조(architecture)

<img src = "https://user-images.githubusercontent.com/55133538/101370660-1d01e480-38ed-11eb-8fcb-a38c826db387.png" width="600px">
<img src = "https://user-images.githubusercontent.com/55133538/101752471-e9090800-3b14-11eb-98a3-1486cab2098a.png" width="600px">



## 3) To Do List📃

전체적인 구조
- [x] React & Nodejs 연동하기
- [x] UI 설계
- [ ] React 코드
- [ ] Nodejs 코드
- [x] DEMO 코드 완성 (html,js,php 등 사용)

알고리즘
- [x] 컴퓨터공학과 18학번 3학년 2학기에 열린 과목 DB 저장 및 연결 가능
- [x] 분반 별 가능한 모든 시간표 생성 가능  (ex: A분반이 2개 B분반이 3개 나머지가 다 1개면 총 경우의 수에 맞게 시간표 6개 생성)
- [x] 사용자가 입력한 원하지 않는 시간대 DB 연결 가능
- [x] 사용자가 입력한 원하지 않는 분반 DB 연결 가능
- [x] 강의 계획안 크롤링 가능
- [ ] 컴퓨터공학과를 비롯한 모든 전공 18~21학번 커리큘럼 DB에 입력
- [ ] 2021-1에 열릴 과목들 DB에 입력
- [ ] 사용자로부터 가중치값 설정받고 가중치값에 맞는 시간표 생성
- [ ] 사용자에게 맞춤형 (교양)수업 추천

## 4) Reference🔗
[React] React blog : https://reactjs.org/blog/2020/10/20/react-v17.html<br>
[Nodejs]생활코딩 Nodejs : https://opentutorials.org/course/2136/11850<br>
웹 기반 시간표 자동 조합 프로그램 - BATTO : https://www.tuwlab.com/showcase/20026<br>
[C언어]가능한 시간표 조합을 모두 찾기 :  http://blog.naver.com/PostView.nhn?blogId=makariotita&logNo=70173896828&parentCategoryNo=&categoryNo=15&viewDate=&isShowPopularPosts=true&from=search<br>
콘텐츠 기반 추천 알고리즘 : https://techblog-history-younghunjo1.tistory.com/115<br>
[호스팅] AWS EC2 인스턴스 생성, 접속, MySQL 설치, Apache, PHP 연동 : https://ndb796.tistory.com/314<br>

## 5) 팀원 소개 및 기술 블로그🔨

김서영(Seoyeong Kim) : https://velog.io/@ksy990628/series/%EC%BA%A1%EC%8A%A4%ED%86%A4%EB%94%94%EC%9E%90%EC%9D%B8%ED%94%84%EB%A1%9C%EC%A0%9D%ED%8A%B8
<br><br>
변영신(Yeongsin Byeon) : https://velog.io/@dudtls11444/%EC%A1%B8%EC%97%85%ED%94%84%EB%A1%9C%EC%A0%9D%ED%8A%B8-1.-%EC%95%84%EC%9D%B4%EB%94%94%EC%96%B4-%EB%B0%8F-%EA%B8%B0%EB%B3%B8-%EA%B5%AC%EC%83%81
<br><br>
장진희(Jinhui Chang) : https://www.notion.so/b20405ba0e8f43f2869ba2d7d0b48195
<br><br>
정예림(Yelim Jung) : https://m.blog.naver.com/118dg?suggestAddBuddy=true

## 6) LICENSE🔐  
  
MIT License
Copyright (c) 2020 graduateprojectA
