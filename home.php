<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>홈</title>

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

    <!-- home section starts -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>탐험, 발견, 여행</span>
                        <h3>전 세계를 여행하자</h3>
                        <a href="package.php" class="btn">더 알아보기</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>탐험, 발견, 여행</span>
                        <h3>전 세계를 발견하자</h3>
                        <a href="package.php" class="btn">더 알아보기</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>탐험, 발견, 여행</span>
                        <h3>당신의 여행을 가치있게!!</h3>
                        <a href="package.php" class="btn">더 알아보기</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title"> 우리의 서비스 </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>어드벤처</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>가이드 투어</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>트래킹</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>캠프 파이어</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>오프로드</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>캠핑</h3>
            </div>
        </div>
    </section>
    <!-- services section end -->

    <!-- honme about section start  -->
        <secrion class="home-about">
            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>우리에 대해서</h3>
                <p>우리는 여러분의 여행을 더 즐겁게 해드리겠습니다. 그리고 있지 못할 여행을 선물해드립니다.
                여러분의 여행은 나의 것이라는 이념을 있지 않겠습니다.</p>
                <a href="about.php" class="btn">더보기</a>
            </div>

        </secrion>
    <!-- honme about section end  -->

    <!-- home packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title"> 우리의 패키지들 </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>어드밴처 & 투어</h3>
                    <p>우리는 고객분들에게 어드밴처 투어를 해드립니다.</p>
                    <a href="book.php" class="btn">지금 예약</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>어드밴처 & 투어</h3>
                    <p>우리는 고객분들에게 어드밴처 투어를 해드립니다.</p>
                    <a href="book.php" class="btn">지금 예약</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>어드밴처 & 투어</h3>
                    <p>우리는 고객분들에게 어드밴처 투어를 해드립니다.</p>
                    <a href="book.php" class="btn">지금 예약</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">더 보기</a></div>
    </section>
    <!-- home packages section ends -->

    <!-- home offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% 할인</h3>
            <p>모든 패키지를 50% 할인해드립니다!! 여러분의 즐거운 추억을 만들어드립니다.</p>
            <a href="book.php" class="btn">지금 예약</a>
        </div>
    </section>
    <!-- home offer section ends -->

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