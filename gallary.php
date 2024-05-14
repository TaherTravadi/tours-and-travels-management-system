<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary</title>
    <link rel="stylesheet" href="css/gallary.css">
</head>
<body>
<header>
    
    <nav class="pro-name"> <img src="img/logott.png" class="prologo" ><span>Travelogue INDIA</span>
        
            <!-- <input src="search.svg" type="search" class="search" placeholder="What's in your mind?"> 
             <ion-icon name="search" class="bi-search" ></ion-icon> -->
            
            <span><a href="index.php"> Back to Home</a></span>
            </nav>
    </header> 

    <div class="head">
        <div class="map">    
                   
            <div id="gellary">
                <div style="left: 0; transform: perspective(500px) rotateY(40deg) translate3d(0, 0, -200px)">
                    <img src="https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072_960_720.jpg">
                </div>
                <div style="left:0; transform:perspective(500px) rotateY(40deg) translate3d(0, 0, -150px)">
                    <img src="https://cdn.pixabay.com/photo/2017/11/20/18/06/wedding-2966297_960_720.jpg">
                </div>
                <div style="left: 0; transform:perspective(500px) rotateY(40deg) translate3d(0, 0, -100px)">
                    <img src="https://cdn.pixabay.com/photo/2019/08/13/11/30/emotions-4403201_960_720.jpg">
                </div>
                <div class="active" style="left:100px; transform: perspective(500px)  rotateY(0) translate3d(0, 0, 0)">
                    <img src="https://cdn.pixabay.com/photo/2019/06/06/17/07/airplane-4256362_960_720.jpg">
                </div>
                <div style="left: 200px; transform:perspective(500px) rotateY(-40deg) translate3d(0, 0, -100px)">
                    <img src="https://cdn.pixabay.com/photo/2017/06/05/11/01/airport-2373727_960_720.jpg">
                </div>
                <div style="left: 200px;transform:perspective(500px) rotateY(-40deg) translate3d(0, 0, -150px)">
                    <img src="https://cdn.pixabay.com/photo/2018/07/16/16/08/island-3542290_960_720.jpg">
                </div>
                <div style="left: 200px;transform:perspective(500px) rotateY(-40deg) translate3d(0, 0, -200px)">
                    <img src="https://cdn.pixabay.com/photo/2018/02/21/10/16/train-station-3169964_960_720.jpg">
                </div>
                <div style="left: 200px;transform:perspective(500px) rotateY(-40deg) translate3d(0, 0, -250px)">
                    <img src="https://cdn.pixabay.com/photo/2017/12/16/22/22/bora-bora-3023437_960_720.jpg">
                </div>
                <div style="left: 200px;transform:perspective(500px) rotateY(-40deg) translate3d(0, 0, -250px)">
                    <img src="https://cdn.pixabay.com/photo/2018/05/17/16/03/compass-3408928_960_720.jpg">
                </div>

            </div>
            <div class="buttons">
                <button class="prev"><i class="fa-solid fa-arrow-left-long"></i></i></button>
            </div>           
        </div> 
            <div class="buttons2">
                <button class="next"><i class="fa-solid fa-arrow-right-long"></i></i></button>
            </div>
    </div>


    <div class="title1">
        <div class="sec-title-style1 text-center max-width">
            <div class="title">Gellery</div>
            <div class="text"><div class="decor-left"><span></span></div><p>Amazing</p><div class="decor-right"><span></span></div></div>
            <div class="bottom-text">
                <p>Fixyman is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home improvement and repair, providing virtually any home repair.</p>
            </div>
        </div>
    </div>

    <div class="gelalry2">            
        <img tabindex="1" src="img/projectpics/manaliimg.jpg	" alt="Place in Jammu-Kashmir">
        <img tabindex="2" src="img/projectpics/ooty1.jpg"alt="Place in Jammu-Kashmir">
        <img tabindex="3" src="img/projectpics/ooty2.jpg" alt="Place in Jammu-Kashmir">
        <img tabindex="4" src="img/projectpics/ooty3.jpg" alt="Place in Jammu-Kashmir">
        <img tabindex="5" src="img/projectpics/ldkh.jpeg" alt="Place in Jammu-Kashmir">
        <img tabindex="6" src="img/projectpics/ldkh2.jpeg" alt="Place in Jammu-Kashmir">
        <img tabindex="7" src="img/projectpics/ldkh3.jpeg" alt="Place in Jammu-Kashmir">
        <img tabindex="8" src="img/projectpics/msori.jpg" alt="Place in Jammu-Kashmir">
        <img tabindex="9" src="img/projectpics/msori2.jpeg" alt="Place in Jammu-Kashmir">
        <img tabindex="10" src="img/projectpics/msori3.jpeg" alt="Place in Jammu-Kashmir">
        <img tabindex="11" src="img/projectpics/msori4.jpg"alt="Place in Jammu-Kashmir">
        <img tabindex="12" src="img/projectpics/goa1.jpg" alt="Place in Jammu-Kashmir">
        <img tabindex="13" src="img/projectpics/goa2.jpg" alt="Place in Jammu-Kashmir">
        <img tabindex="14" src="img/projectpics/goa3.jpg"alt="Place in Jammu-Kashmir">
        <img tabindex="15" src="img/projectpics/36.jpg" alt="Place in Jammu-Kashmir">
    </div>
    <?php include('bottom.php') ?>



      <!-- jquery link  -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>

    <script>

        var positionR = '200px',
			positionL = 0,
			positionC = '100px',
			tranlateZunit = 50;  
		
		$('.prev').on('click', function(){
			var tempZ = 50 * 2;
			
			$('.active')
				.css({
					left : positionR,
					transform: 'perspective(500px) rotateY(-40deg) translate3d(0, 0, -' + tempZ + 'px)'
				})
				.nextAll()
					.css('transform', function(){
						tempZ += tranlateZunit
						return 'perspective(500px) rotateY(-40deg) translate3d(0, 0, -'+ tempZ +'px)'
					})
				.end()
				.removeClass('active')
				.prev()
					.css({
						left: positionC,
						transform: 'perspective(500px) rotateY(0deg) translate3d(0, 0, 0)'
					})
					.addClass('active');
			
			tempZ =  50 * 2;
			$('.active')
				.prevAll()
					.css('transform', function(){
						tempZ += tranlateZunit
						console.log(this)
						return 'perspective(500px) rotateY(40deg) translate3d(0, 0, -'+ tempZ +'px)'
					})
				
			
		})
		$('.next').on('click', function(){
			var tempZ = 50 * 2;
			
			$('.active')
				.css({
					left : positionL,
					transform: 'perspective(500px) rotateY(40deg) translate3d(0, 0, -' + tempZ + 'px)'
				})
				.prevAll()
					.css('transform', function(){
						tempZ += tranlateZunit
						return 'perspective(500px) rotateY(40deg) translate3d(0, 0, -'+ tempZ +'px)'
					})
				.end()
				.removeClass('active')
				.next()
					.css({
						left: positionC,
						transform: 'perspective(500px) rotateY(0deg) translate3d(0, 0, 0)'
					})
					.addClass('active');
			
			
			tempZ =  50 * 2;
			$('.active')
				.nextAll()
				.css('transform', function(){
					tempZ += tranlateZunit
					return 'perspective(500px) rotateY(-40deg) translate3d(0, 0, -'+ tempZ +'px)'
				})
		})
    </script>

    
</body>
</html>