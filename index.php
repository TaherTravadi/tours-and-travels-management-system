<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelogue INDIA</title>

    <!-- css link  -->
    <link rel="stylesheet" href="css/home1.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- branding slider link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

</head>


<!-------------------------------------------------------------------------/ home section /----->

<body>
    <header>
        <nav class="pro-name">Travelogue INDIA</nav>
        <div>

            <input src="search.svg" type="search" name="find" class="search" placeholder="What's in your mind?">
            <!-- <button type="submit" class="btn-search">search</button> -->
            <ion-icon name="search" class="bi-search"></ion-icon>

            <a href="#">
                <img src="img/logott.png" class="prologo">
            </a>
            
        </div>
    </header>

    <!------------------------------------------------------------------------/ top slide show /----->

    <div>

        <!-- <body> -->

            <div class="slideshow-container">
                <div class="slides">

                    <img src="img/ss1.jpg" alt=" TAJ MAHEL" title="TAJ-MAHEL">
                    <img src="img/indiagate.jpg" alt="INDIA GATE" title="INDIA GATE">
                    <img src="img/ss3.jpg" alt="LADAKH" title="LADAKH">
                    <img src="img/ss4.jpg" alt="HAWA MAHAL" title="HAWA MAHAL">
                    <img src="img/jaipur.jpg" alt="JAIPUR" title="JAIPUR">
                    <img src="img/manali.jpg" alt="MANALI" title="MANALI">
                    <img src="img/manali2.jpg" alt="MANALI" title="MANALI">
                    <img src="img/kasmir.jpg" alt="KASHMIR" title="KASHMIR">
                    <img src="img/kasmir2.jpg" alt="KASHMIR2" title="KASHMIR">
                    <img src="img/kovalam-beach-tours.jpg" alt="KOVALAM-BEACH" title="KOVALAM-BEACH">
                    <img src="img/Kumarakom-Backwaters1.jpg" alt="KUMARAKOM-BACKWATER" title="KUMARAKOM-BACKWATER">
                    <img src="img/golden-temple.jpg" alt="GOLDEN TEMPLE" title="GOLDEN TEMPLE">

                </div>
            </div>

        <!-- </body> -->

        <script>
            let slideIndex = 0;
            carousel();

            function carousel() {
                let i;
                const slides = document.querySelectorAll(".slides img");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(carousel, 3000); // Change image every 2 seconds
            }
        </script>

    </div>

    <!-- ---------------navigation bar -->
    <div class="navigation">
        <ul>
            <li class="list active" style="--clr: #2196f3;">
                <a href="index.php">
                    <span class="icon" title="Home">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr: #ffa117;">
                <a href="booking.php">
                    <span class="icon" title="Booking">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr:#f33c2ee1;">
                <a href="contact.php">
                    <span class="icon" title="Contact-us">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr:#0fc70f;">
                <a href="gallary.php">
                    <span class="icon" title="Images">
                        <ion-icon name="images-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr:#b145e9;">
                <a href="login.php">
                    <span class="icon" title="Login">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <!-- --------------------------------------------------------------package section  -->
    <section class="package">
        <span
            style="font-family:Lucida Calligraphy; font-size:38px; font-weight: 540;color: #1877F2;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;position: absolute;left: 400px;">Category's :</span>
        <div class="card1">
            <!-- card 1 section  -->
            <div class="elements imgBox">
                <img src="img/adventure3.jpeg" alt="no-image"
                    style=" width:237px; border-radius: 0.5em; overflow: auto;">
            </div>
            <div class="content">

                <!-- <h2>Enjoy Adventure</h2> -->
                <p>The purpose of life is to live it, to taste experience to the utmost, to reach out eagerly and
                    without fear for newer and richer experience.</p>
            </div>
            <span></span>
        </div>

        <!--------------------------------------------------------------------------/ title section /------------>

        <div class="title_Pac">

            <h2> HEARTLY WELCOME </h2>

            <p>Your Gateway to Unforgettable Journeys!</p>

            <p>Embark on a voyage of discovery with "Travelogue INDIA",
                where every destination is a story waiting to be told.
                Whether you crave the excitement of exotic adventures,
                the tranquility of calm and quite landscapes,or the rich cultural
                tapestry of historic cities,we have curated an exceptional
                array of travel experiences to suit every wanderlust.</p>

            <!---------------------------------------------------------------------/ content section /------->
            <div class="pac_detail">
                <h3>All Packages</h3>
                <span>
                    "It liberates the vandal to travel you never saw a bigoted, opinionated, stubborn, narrow-minded,
                    self-conceited, almighty mean man in your life but he had stuck in one place since he was born and
                    thought God made the world and dyspepsia and bile for his especial comfort and satisfaction"
                    <br></span>
                <p>– Mark Twain</p>

                <!----------------------------------------------------------------/ button /-------------->

                <div class="book_button">

                    <button class="custom-btn btn-5">
                        <a href="category.php">Book Now</a>
                    </button>
                </div>
            </div>
        </div>

        <!----------------------------------------------------------------------/ card 2 section /--------->

        <div class="card2 col2">

            <div class="elements imgBox">
                <img src="img/tourfamily.webp" alt="no-image"
                    style=" width:237px; border-radius: 0.5em; overflow: auto;">
            </div>
            <div class="content">
                <!-- <h2>Tour With Family</h2> -->
                <p>That’s why I love road trips, dude. It’s like doing something without actually doing anything.</p>
            </div>
            <span></span>
        </div>

        <!------------------------------------------------------------------------/ card 3 section /------->

        <div class="card3">

            <div class="elements imgBox">
                <img src="img/adventure.jpeg" alt="no-image" style=" width:237px; border-radius: 0.5em; overflow: auto;">
            </div>
            <div class="content">
                <!-- <h2>Enjoy Love Bird</h2> -->
                <p>"Mountains, where the earth touches the heavens, and the soul find solace."
                </p>
            </div>
            <span></span>
        </div>

        <!-------------------------------------------------------------------------/ cadr 4 section /----->

        <div class="card4 col2">

            <div class="elements imgBox">
                <img src="img/frnd.jpg" alt="no-image" style=" width:237px; border-radius: 0.5em; overflow: auto;">
            </div>
            <div class="content">
                <!-- <h2>Tour With Friends</h2> -->
                <p>The more I traveled the more I realized that fear makes strangers of people who should be friends</p>
                <span></span>
            </div>
        </div>
        <div class="view">
                    <button class="custombtn">
                        <a href="category.php">View All Category..</a>
                    </button>
                </div>

        <!-----------------------------------------------------------------------/ animated tree / ---------->

        <svg style="display:none;">
            <symbol id="leaf" viewBox="0 0 93.999 93.999">
                <path
                    d="M23.602 17.519C4.491 28.608 5.588 46.67 6.246 53.353c24.684-29.24 61.606-27.822 61.606-27.822S15.514 43.484.142 79.485c-1.214 2.842 5.696 6.538 7.273 3.178 4.707-10.012 11.266-17.521 11.266-17.521 9.677 3.601 26.417 7.821 38.282-.528 15.76-11.091 14.149-35.677 36.647-47.648 5.255-2.795-44.099-14.482-70.008.553z" />
            </symbol>
        </svg>
        <div class="tree-abs">
            <div class="tree-wrap">
                <svg class="treeicon" viewBox="0 0 500 500" height="140" aria-hidden="true">
                    <path
                        d="M68.498 550.001c.279.251.64.386 1.016.386h415.383a1.52 1.52 0 0 0 1.159-.532c.267-.312 6.494-7.715 2.154-17.543-7.665-17.365-47.519-38.93-193.395-43.388 2.992-4.076 6.016-8.137 9.036-12.188 20.214-27.114 36.423-54.776 49.554-84.565 11.766-26.699 23.978-57.841 19.93-89.604-3.947-30.955-19.97-60.646-35.459-89.346-1.157-2.191-2.524-4.562-3.966-7.053-7.788-13.47-17.482-30.233-6.295-41.521a1.528 1.528 0 0 0 .034-2.118 1.532 1.532 0 0 0-2.115-.123c-14.602 12.509-6.967 29.141-1.392 41.286 2.613 5.682 5.294 11.359 7.978 17.032 5.101 10.793 10.379 21.95 15.046 32.975 12.76 30.162 13.451 62.105 2.09 97.528-8.645-25.01-33.274-46.809-57.137-67.929-4.314-3.819-8.62-7.629-12.824-11.45-30.842-28.021-43.366-57.789-38.293-91.005 4.416-28.936 24.609-54.581 45.982-81.732 3.14-3.987 6.282-7.98 9.376-11.989 9.945-12.867 21.285-31.861 18.835-49.257-1.225-8.7-5.836-16.034-13.7-21.806a1.53 1.53 0 0 0-1.958 2.344c6.536 6.227 9.73 13.164 9.765 21.212.101 22.222-24.78 47.714-43.275 65.735 13.602-35.414 24.03-67.85 20.649-101.458-.079-.808-.771-1.398-1.598-1.374a1.532 1.532 0 0 0-1.453 1.53c0 32.552-15.578 64.71-30.646 95.812-15.998 33.023-32.5 67.09-30.695 102.127-1.346-2.895-2.65-5.856-3.993-8.908-10.229-23.256-20.808-47.304-59.288-61.402a1.53 1.53 0 0 0-1.175 2.819c35.766 16.854 43.348 40.523 51.377 65.582 3.957 12.353 8.048 25.125 15.848 36.698 10.964 16.27 28.011 31.387 44.498 46.007 23.051 20.441 46.886 41.577 53.596 65.631 10.594 37.987-16.08 75.01-41.876 110.812l-5 6.955c-5.896 8.229-10.814 15.138-15.587 22.313-120.677.575-189.457 14.104-198.912 39.138-4.586 12.124 6.261 21.956 6.726 22.369z"
                        fill="#8c5f37"></path>
                </svg>
                <svg class="leaf-icon" style="top:130px;left:55px;height:50px;width:50px;transform:rotate(200deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:25px;left:120px;height:50px;width:50px;transform:rotate(310deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:90px;left:168px;height:65px;width:65px;transform:rotate(35deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:98px;left:40px;height:44px;width:44px;transform:rotate(220deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:71px;left:50px;height:39px;width:39px;transform:rotate(230deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:61px;left:45px;height:24px;width:24px;transform:rotate(250deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:53px;left:91px;height:48px;width:48px;transform:rotate(275deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:36px;left:63px;height:28px;width:28px;transform:rotate(270deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:15px;left:80px;height:32px;width:32px;transform:rotate(280deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:0px;left:108px;height:36px;width:36px;transform:rotate(290deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:6px;left:144px;height:24px;width:24px;transform:rotate(312deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:139px;left:140px;height:24px;width:24px;transform:rotate(10deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:82px;left:196px;height:39px;width:39px;transform:rotate(50deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:71px;left:218px;height:24px;width:24px;transform:rotate(10deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:54px;left:156px;height:48px;width:48px;transform:rotate(0deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:47px;left:205px;height:29px;width:29px;transform:rotate(20deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:25px;left:186px;height:32px;width:32px;transform:rotate(350deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:27px;left:155px;height:36px;width:36px;transform:rotate(318deg);">
                    <use xlink:href="#leaf">
                </svg>
                <svg class="leaf-icon" style="top:110px;left:82px;height:25px;width:25px;transform:rotate(200deg);">
                    <use xlink:href="#leaf">
                </svg>
            </div>
        </div>

    </section>
    <!-----------------------------------------------------------------/ gallary sectiion /---------->

    <section>
        <div class="section-title">
            <h2>Photo <span>Gallery</span></h2>
        </div>
        <div class="gallary">
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://images.pexels.com/photos/904272/pexels-photo-904272.jpeg?auto=compress&cs=tinysrgb&w=400"
                        loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“What I want in a good beach read is sunshine, drama, easy-reading and transportation to another
                        world and other people’s problems.” </p>
                </div>
            </div>

            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg"
                        loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>Today was about chasing sun-rays, beach waves, & sunsets. All things beautiful that give you
                        peace are worth chasing. Everything else isn’t.</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://cdn.pixabay.com/photo/2019/03/31/14/31/houses-4093227_960_720.jpg"
                        loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Nature is a haunted house--but Art--is a house that tries to be haunted.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="img/c-4.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“What would you do if I kissed you right now?" I stared at his beautiful face and his beautiful
                        mouth and I wanted nothing more than to taste it. "I would kiss you back.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="img/c-5.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Why is it that the right people never wind up together? Why are people so afraid to leave a
                        relationship, even if they know it's a bad one?”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="img/c-1.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“I love the sea’s sounds and the way it reflects the sky. The colors that shimmer across its
                        surface are unbelievable. This, combined with the color of the water over white sand, surprises
                        me every time.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="img/c-2.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>It was as if when I looked into his eyes, I was standing alone on the edge of the world…on a
                        windswept ocean beach. There was nothing but the soft roar of the waves.</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="img/c-3.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Every couple has ups and downs, every couple argues, and that’s the thing—you’re a couple, and
                        couples can’t function without trust.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://cdn.pixabay.com/photo/2016/11/30/15/00/lighthouse-1872998_960_720.jpg"
                        loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Seek not a lighthouse greater than the human mind! Believe not the existence of an emotion
                        nobler than the compassion!”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://images.unsplash.com/photo-1667471730144-2a110a36a7ae?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2Njg2NTk2MTM&ixlib=rb-4.0.3&q=80"
                        loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Don’t walk in front of me… I may not follow Don’t walk behind me… I may not lead Walk beside me…
                        just be my friend”</p>
                </div>
            </div>
        </div>

    </section>
    <!----------------------------------------------------------------------------/ services section /---------->
    <section class="services">
        <div class="section-title">
            <h2>Our<span>Servicies</span></h2>
        </div>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Affordable Hotels</h3>
                <p>We provide Affordable and Secure hotels that make your journey Comfortable.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Food and Drinks</h3>
                <p>You can take your favorite food and drink that make your journey happy.</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>Safety Guide</h3><br>
                <p>Don't Worry About safety our team take care of your security.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>India Travel</h3>
                <p>Travel in India and feel the indian culture with </p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>Fastest Travel</h3>
                <p>"We take pride in offering the fastest travel solutions to our clients. Understanding the value of
                    time in today's fast-paced world".</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>Advanture</h3>
                <p>We provide adventurous tour packages that cater to the thrill-seekers and nature enthusiasts looking
                    for an exhilarating travel experience. Our offerings include a diverse range of adventures, from
                    trekking through scenic landscapes to exploring remote wilderness areas. Whether you're drawn to the
                    challenge of mountain climbing, the excitement of water sports, or the tranquility of nature trails,
                    our adventure tour packages are designed to provide memorable and unique journeys.</p>
            </div>

        </div>
    </section>
    <!------------------------------------------------------------------------------------/ contact us section /------->
    <div class="contact">
        <div class="top-border left"></div>
        <div class="top-border right"></div>
        <h1>GET IN TOUCH</h1>
        <p>“It’s not much we need to be happy: one call, one message, just a simple attention, and the world in your
            eyes will change. Keep in touch, no matter what happens.” <br> you send the message of our team and call for
            any inquiry</p>
        <a href="contact.php">CONTACT US</a>
    </div>
    <!---------------------------------------------------------------------------------/ branding section /----------->

    <!--------------------------------------------------------------------------------/ footer section /---------->

    <!-- <footer class="footer">
        <div class="fcontainer">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>

                        <li><a href="aboutus.php">about us</a></li>
                        <li><a href="service.php">our services</a></li>
                        <li><a href="privacy.php">privacy policy</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="social">follow us</h4>
                    <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook"></i></span>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <span><i class="fab fa-twitter"></i></span>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                        </li>
                        <li class="icon youtube">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer> -->

    <?php include('bottom.php')?>

    <!-- icon link  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>
    <!-- branding slider  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- script link  -->
    <script>
        const navigation = document.querySelector('.navigation');
        const list = document.querySelectorAll('.list');
        const videoBtn = document.querySelectorAll('.vid-btn');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
            item.addEventListener('click', activeLink));
        videoBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.controls .active').classList.remove('active');
                btn.classList.add('active');
                const src = btn.getAttribute('data-src');
                document.querySelector('#video-slider').src = src;
            });
        });
        var swiper = new Swiper(".brand-slider", {
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                450: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
        (function animateTree() {
            let angle = 0;
            const leafs = document.querySelectorAll(".leaf-icon");
            try {
                for (let i = 3, l = leafs.length; i < l; i++) {
                    angle = parseInt(leafs[i].style.transform.substring(7));
                    leafs[i].animate({
                        transform: [
                            `translate3d(${leafs[i].style.left}, ${leafs[i].style.top}, 0px) rotate(${angle}deg)`,
                            `translate3d(
                                ${dir() * Math.round(Math.random() * 10) + parseInt(leafs[i].style.left)}px, 
                                ${dir() * Math.round(Math.random() * 10) + parseInt(leafs[i].style.top)}px,
                                0px) rotate(${dir() * Math.round(Math.random() * 20) + angle}deg)`,
                        ],
                    }, {
                        iterations: Infinity,
                        direction: "alternate",
                        easing: "ease-in-out",
                        duration: 3000,
                    });
                    leafs[i].style = `height:${leafs[i].style.height};width:${leafs[i].style.width};`;
                }
            } catch (e) {
                /* Abort animation if not supported */
                return;
            }

            function dir() {
                return Math.round(Math.random()) * 2 - 1;
            }
        })();
        /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
        // function myFunction() {
        //     document.getElementById("myDropdown").classList.toggle("show");
        // }
        // Close the dropdown menu if the user clicks outside of it
        // window.onclick = function(event) {
        //     if (!event.target.matches('.dropbtn')) {
        //         var dropdowns = document.getElementsByClassName("dropdown-content");
        //         var i;
        //         for (i = 0; i < dropdowns.length; i++) {
        //             var openDropdown = dropdowns[i];
        //             if (openDropdown.classList.contains('show')) {
        //                 openDropdown.classList.remove('show');
        //             }
        //         }
        //     }
        // }
    </script>

</body>

</html>