<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대해서</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!--font awasome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">TR.</a>

        <nav class="navbar">
            <a href="home.php">홈</a>
            <a href="about.php">대해서</a>
            <a href="package.php">패키지</a>
            <a href="book.php">예약</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>
    <!-- header section end -->

    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
        <h1>바로 예약</h1>
    </div>
    <!-- booking section starts -->
    <section class="booking">
      <h1 class="heading-title">너의 여행 예약!!</h1>
      <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
          <div class="inputBox">
            <span>이름 :</span>
            <input type="text" placeholder="이름을 입력" name="name">
          </div>
          <div class="inputBox">
            <span>이메일 :</span>
            <input type="email" placeholder="이메일을 입력" name="email">
          </div>
          <div class="inputBox">
            <span>전화번호 :</span>
            <input type="tel" placeholder="전화번호를 입력" name="phone">
          </div>
          <div class="inputBox">
            <span>주소 :</span>
            <input type="text" placeholder="주소를 입력" name="address">
          </div>
          <div class="inputBox">
            <span>여행지 :</span>
            <input type="text" placeholder="가고 싶은 여행지를 입력" name="location">
          </div>
          <div class="inputBox">
            <span>인원 수:</span>
            <input type="number" placeholder="가는 인원수를 입력" name="guests">
          </div>
          <div class="inputBox">
            <span>도착일 :</span>
            <input type="date" name="arrivals">
          </div>
          <div class="inputBox">
            <span>출발일 :</span>
            <input type="date" name="leaving">
          </div>
        </div>
        <input type="submit" value="예약하기" class="btn" name="send">
      </form>
    </section>
    <!-- booking section ends -->

    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>빠른 링크</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> 홈</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> 대해서</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> 패키지</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> 예약</a>
            </div>

            <div class="box">
                <h3>추가 링크</h3>
                <a href="#"><i class="fas fa-angle-right"></i> 문의사항</a>
                <a href="#"><i class="fas fa-angle-right"></i> 우리에 대해서</a>
                <a href="#"><i class="fas fa-angle-right"></i> 개인정보 정책</a>
                <a href="#"><i class="fas fa-angle-right"></i> 이용약관</a>
            </div>

            <div class="box">
                <h3>연락처 정보</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"><i class="fas fa-envelope"></i> sallyzzang@naver.com </a>
                <a href="#"><i class="fas fa-map"></i> 경기도 부천시 신흥로56번길 25 </a>
            </div>

            <div class="box">
                <h3>우리를 팔로우</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> 페이스북 </a>
                <a href="#"><i class="fab fa-twitter"></i> 트위터 </a>
                <a href="#"><i class="fab fa-instagram"></i> 인스타그램 </a>
            </div>
        </div>
        <div class="credit"> created by <span>장채윤</span> | all rights reserved! </div>
    </section>

    <!-- footer section ends -->
    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--custom js file link-->
    <script src="js/script.js"></script>
</body>
</html>
