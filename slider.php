
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>   

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner" style="height:400px; margin-top:80px; margin-bottom:30px; border-radius:20px;">
    <div class="carousel-item active" data-bs-interval="10000" >
      <img src="img/ss1.jpg" alt=" TAJ MAHEL" class="d-block w-100" alt="..."style="height:500px; ">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/indiagate.jpg" alt="INDIA GATE" class="d-block w-100" alt="..." style="height:500px; ">
    </div>
    <div class="carousel-item">
      <img src="img/ss3.jpg" alt="LADAKH" class="d-block w-100" alt="..." style="height:500px; ">
    </div>
  
  <div class="carousel-item">
      <img  src="img/ss4.jpg" alt="HAWA MAHAL" class="d-block w-100" alt="..." style="height:500px; ">
  </div>
  <div class="carousel-item">
      <img  src="img/jaipur.jpg" alt="JAIPUR" class="d-block w-100" alt="..." style="height:500px; ">
  </div>
  <div class="carousel-item">
      <img src="img/manali.jpg" alt="MANALI" class="d-block w-100" alt="..." style="height:500px; ">
  </div>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:black; border-radius:5px;"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:black; border-radius:5px;"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script>

const carousel = new bootstrap.Carousel('#myCarousel');
</script>
</body>
</html>