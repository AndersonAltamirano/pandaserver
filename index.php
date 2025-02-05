<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panda's Server</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/6aaf19ff43.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto+Condensed:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100&family=Open+Sans:wght@300&display=swap" rel="stylesheet">    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Pathway+Gothic+One&family=Roboto+Condensed:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6aaf19ff43.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="container">
        <div class="logos">
            <a href="" class="logo">Panda's Server</a>
            <img src="Imagenes/panda.png" alt="" class="panda">
        </div>



           
        <ul>
            <a href="iniciarsesion.php"><li class="opcion"><i class="fa-solid fa-user"></i></li></a>
            <a href=""><li class="opcion"><i class="fa-solid fa-bars fa-xl"></i></li></a>
        </ul>
    </nav>
    <section class="buscador">
        <form action="" class="formulario">
            <input type="text" class="search">
            <button type="submit" class="botonBuscar"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

    </section>
    <section class="centro">
        <section class="recomendados">
            <h2 class="recomendadosh2" style="color: white;">Recien agregados</h2>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <img src="Imagenes/foto1.jpg" alt="Imagen 1" class="imgcarru">
                </div>
                <div class="carousel-slide">
                    <img src="Imagenes/foto2.png" alt="Imagen 2" class="imgcarru">
                </div>
                <div class="carousel-slide">
                    <img src="Imagenes/foto3.png" alt="Imagen 3" class="imgcarru">
                </div>
            
                <div class="carousel-numbers">
                    <span class="number" onclick="currentSlide(1)"></span>
                    <span class="number" onclick="currentSlide(2)"></span>
                    <span class="number" onclick="currentSlide(3)"></span>
                </div>
            </div>
        
            
            <hr class="l1">
            <h2 class="recomendadosh2" style="color: white;">Series Recomendadas</h2>

            <div class="vidrecs">

                <img src="Imagenes/foto1.jpg" alt="" class="vidrec">
                <img src="Imagenes/foto2.png" alt="" class="vidrec">
                <img src="Imagenes/foto3.png" alt="" class="vidrec">
                <img src="Imagenes/foto4.jpg" alt="" class="vidrec">
                <img src="Imagenes/foto1.jpg" alt="" class="vidrec">
                <img src="Imagenes/foto2.png" alt="" class="vidrec">
              
            </div>
        </section>
        <section class="reproductor">
            <div class="reproductorv">
                <h2 class="seguir" style="color: white;">Seguir viendo: <a href="" class="vermas">Una noche estrellada en la gran ciudad</a></h2>
                <video src="videos/street_-_19627 (Original).mp4"  autoplay muted controls class="videos"></video>
                <div class="botones">
                    <p class="anterior" style="color: white;"><i class="fa-solid fa-arrow-left fa-lg"></i> Anterior</p>
                    <p class="siguiente" style="color: white;">Siguiente <i class="fa-solid fa-arrow-right"></i></p>
                </div>
            </div>
        </section>
        <div class="vidrecs-cel">
            <h2 class="recomendadosh2" style="color: white;"> Series Recomendadas</h2>
          
            <img src="Imagenes/dbs.jpe" alt="" class="vidrec-cel">
            <img src="Imagenes/elite.jpg" alt="" class="vidrec-cel">
            <img src="Imagenes/jujutsu.webp" alt="" class="vidrec-cel">
            <img src="Imagenes/kimetsu.webp" alt="" class="vidrec-cel">
            <img src="Imagenes/merlina.jpg" alt="" class="vidrec-cel">
            <img src="Imagenes/naruto.jpg" alt="" class="vidrec-cel">
          
        </div>
    </section>
    <script>
        let currentSlideIndex = 0;
        showSlide(currentSlideIndex);
    
        function currentSlide(n) {
            clearInterval(slideInterval);
            showSlide(currentSlideIndex = n - 1);
            slideInterval = setInterval(nextSlide, 5000);
        }
    
        function nextSlide() {
            showSlide(currentSlideIndex += 1);
        }
    
        function showSlide(n) {
            const slides = document.getElementsByClassName('carousel-slide');
            const numbers = document.getElementsByClassName('number');
    
            if (n >= slides.length) {
                currentSlideIndex = 0;
            }
    
            if (n < 0) {
                currentSlideIndex = slides.length - 1;
            }
    
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
    
            for (let i = 0; i < numbers.length; i++) {
                numbers[i].className = numbers[i].className.replace(' active', '');
            }
    
            slides[currentSlideIndex].style.display = 'block';
            numbers[currentSlideIndex].className += ' active';
        }
    
        let slideInterval = setInterval(nextSlide, 5000);
    </script>
</body>
</html>
