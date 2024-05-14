
    <!-- icon link  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>

    <style>
header
{
  position: absolute;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height:100px;
    width: 1473px;
    top: 3px;
    padding: 7px 19px;
    z-index: 10000;
    overflow: hidden;
}
.pro-name{
  display: flex; 
  color: #ffa600; 
  font-style: italic;
  position: relative;
  font-family: 'brush script';
  font-size: 25px;
  left:100px
}
.prologo{
  width: 14vw;  
  position: relative;  
  bottom: 30px;
  right: 1180px;
}
.search{
  position: relative;
    display: flex;
    bottom: -110px;
    align-items: center;
    left: -605px;
    height: 36px;
    width: 20vw;
    border-radius: 20px;
    /* border-color: rgb(13, 153, 204); */
    border: 2px solid #087cf1;
    text-align: center;
    box-shadow: 4px 5px 4px 2px hsla(0, 0%, 0%, 0.352);
}
.bi-search{
  position: relative;
  display: flex;
  bottom: -84px;
  left: -587px;
  /* height: 0px; */
}
.search {
  color: black;
  background: transparent;
  font-size: medium;
}
.button.btn-search{
  position: absolute;
  display: flex;
  align-items: center;
  text-align: center;
  left: 832px;
  bottom: 44px;
  border-radius: 6px;
  border: none;
  height: fit-content;
  color: black;
  background-color: white;    
}

.navigation 
{
    position: absolute;
    inset: 10px 0 10px 15px;
    width: 75px;
    height: 770px;
    background: none;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s; 
    border-radius: 20px;
    z-index: 3;
}  
 .navigation ul
 {
    display: flex;
    flex-direction: column;
    gap: 12px;
    width: 100%;
 }
.navigation ul li
 {
    list-style: none;
    position: relative;
    width: 100%;
    height: 50px;
    padding: 0 10px;
    transition: 0.5s;
 }
.navigation ul li.active
 {
    transform: translateX(30px);
    background: var(--bg);
 }
 .navigation.open ul li.active
 {
    transform: translateX(10px);
    background: var(--bg);
 }
 .navigation ul li a
{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    text-decoration: none;
}
.navigation ul li a .icon
{
    position: relative;
    display: flex;
    min-width: 55px;
    height: 55px;
    line-height: 60px;
    font-size: 1.90em;
    transition: 0.5s;
    border-radius: 10px;
    color: #000000;
    /* padding: 13px; */
    align-items: center;
    justify-content: center;
}
.navigation ul li.active a .icon
{
    color: #fff;
    background: var(--clr);
}
.navigation ul li a .icon::before
{
    content: '';
    position: absolute;
    top: 10px;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--clr);
    filter: blur(8px);
    opacity: 0;
    transition: 0.5s;
}
.navigation ul li.active a .icon::before
{
    opacity: 0.5;
} 
.fa-money-check-pen
{
  height: 100%;
  width: 100%;
  display: flex;
  position: absolute;
}
    </style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<header>
    <nav class="pro-name">Travelogue INDIA</nav>
    <div>
    
        <input src="search.svg" type="search" class="search" placeholder="What's in your mind?">
         <!-- <button type="submit" class="btn-search">search</button> -->
         <ion-icon name="search" class="bi-search" ></ion-icon>

        
    
        <a href="#">
            <img src="img/logott.png" class="prologo" >
        </a>
    </div>
</header> 

 <!-- ---------------navigation bar -->
 <div class="navigation">
        <ul>
            <li class="list active" style="--clr: #2196f3;">
                <a href="index.php">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr: #ffa117;">
                <a href="booking.php">
                    <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr:#f33c2ee1;">
                <a href="contact.php">
                    <span class="icon">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr:#0fc70f;">
                <a href="gallary.php">
                    <span class="icon">
                        <ion-icon name="images-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list" style="--clr:#b145e9;">
                <a href="login.php">
                    <span class="icon">
                        <ion-icon name="person-add-outline" ></ion-icon>
                    </span>
                </a>
            </li>
        </ul>
    </div> 

     <!-- icon link  -->
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>

     <script>
        const navigation = document.querySelector('.navigation');
        const list = document.querySelectorAll('.list');
        const videoBtn = document.querySelectorAll('.vid-btn');


         function activeLink(){
             list.forEach((item) =>
             item.classList.remove('active'));
             this.classList.add('active');
         }
 
         list.forEach((item) =>
         item.addEventListener('click',activeLink));

         videoBtn.forEach(btn => {
            btn.addEventListener('click', () =>{
               document.querySelector('.controls .active').classList.remove('active');
                btn.classList.add('active');
                const src = btn.getAttribute('data-src');
                document.querySelector('#video-slider').src = src;
            });
        });
     </script>
    </body>
<!-- </html> -->