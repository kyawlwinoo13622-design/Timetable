<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <script src="bootstrap.bundle.min.js"></script>
    
    <style>
        *{
            margin: auto;padding: auto;box-sizing: border-box;
        }
        .slide-container{
            max-width: 1120px;
            width: 100%;
            background-color: grey;
        }
        .slide-content{
            margin: 0 40px ;
        }
        .card{
            border-radius: 25px;background-color: #fff;width: 320px;
        }
        .image-content{position: relative;row-gap: 5px;padding: 25px 0;}
        .card-content{
            display: flex;flex-direction: column;align-items: center;padding: 10px 14px ;
        }
               .card{border-radius: 25px;background-color: #fff;}
        .card-image{
            position: relative;height: 150px;width: 150px;border-radius: 50%;background: #fff;padding: 3px;
        }
        .card-image .card-img{
            height: 100%;width: 100%;object-fit: cover;border-radius: 50%;border: 4px solid #4070f4;
        }
        .overlay{
            position: absolute;left: 0;top: 0;height: 100%;width: 100%;background-color: #4070f4;border-radius: 25px 25px 0 25px;
        }
        .overlay::before,
        .overlay::after{position: absolute;content: '';right: 0;bottom: -40px;height: 40px;width: 40px;background-color: red;}
        .overlay::after{border-radius: 0 25px 0 0;background-color: #fff;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="" alt="UCSP">University Of Computer Studies Pyay

    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Department List</a>
        </li>
        <li class="nav-item ms-5">
          <a class="nav-link" href="login.php">Logout</a>
        </li>
        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h3>Department</h3>


        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="design1.png" alt="" class="card-img"  >                         
                             </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The ifd asd</p>
                            <button class="button">view more</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="design1.png" alt="" class="card-img"  >                         
                             </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The ifd asd</p>
                            <button class="button">view more</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="design1.png" alt="" class="card-img"  >                         
                             </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The ifd asd</p>
                            <button class="button">view more</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="design2.png" alt="" class="card-img"  >                         
                             </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The ifd asd</p>
                            <button class="button">view more</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="design2.png" alt="" class="card-img"  >                         
                             </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The ifd asd</p>
                            <button class="button">view more</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        

</body>
<script src="script.js"></script>
<script src="swiper-bundle.min.js"></script>
</html>