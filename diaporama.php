<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Custom Slider</title>
       <!-- <style>
          html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
img {
    max-width: 100%;
}
.slider-container {
    max-width: 800px;
    position: relative;
    margin: auto;
    height: 350px;
    overflow: hidden;
}
.menu {
    position: absolute;
    left: 0;
    z-index: 11;
    width: 100%;
    bottom: 0;
    text-align: center;
}
.menu label {
    cursor: pointer;
    display: inline-block;
    width: 10px;
    height: 10px;
    background: #ccc;
    border-radius: 50px;
    margin: 0 0.2em 1em;
}
.menu label:hover,.menu label:focus {
    background: #1c87c9;
}
.slide-input{
    opacity: 0;
}
.slide-img {
    width: 100%;
    height: 300px;
    position: absolute;
    top: 0;
    left: 100%;
    z-index: 10;
    transition: left 0s 0.75s;
}
[id^="slide"]:checked + .slide-img {
    left: 0;
    z-index: 100;
    transition: left 0.65s ease-out;
}
</style>
-->
<style>
    body{
        background-color:#fbfbfc;
    }
    .custom-slder { display: none; }
    .slde-container {
    max-width: 800px;
    position: relative;
    margin: auto;
    }
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: white;
    font-size: 30px;
    background-color: rgba(0,0,0,0);
    transition: background-color 0.6s ease;
    }
    .prev{ left: -100px; background-color: #D8901D}
    .next { right: -100px; background-color: #D8901D}
    .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.5);
    }
    .slde-text {
    position: absolute;
    color: #ffffff;
    font-size: 15px;
    padding: 15px;
    bottom: 15px;
    width: 100%;
    text-align: center;
    }
    .slde-index {
    color: #ffffff;
    font-size: 13px;
    padding: 15px;
    position: absolute;
    top: 0;
    }
    .slde-img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    object-position: center;
    }
    .slde-dot{ text-align: center; }
    .dot {
    cursor: pointer;
    height: 10px;
    width: 10px;
    margin: 0 2px;
    background-color: #D8901D;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }
    .active, .dot:hover { background-color: #111111; }
    .fade {
    animation-name: fade;
    animation-duration: 1s;
    }
    @keyframes fade {
    from {opacity: 0}
    to {opacity: 1}
    }
</style>
</head>
<body>
    <div class="slde-container">
        <div class="custom-slder fade">
            <img class="slde-img" src="./tous_les_images/roux.jpg">
        </div>
        <div class="custom-slder fade">
            <img class="slde-img" src="./tous_les_images/voyage.jpg">
        </div>
        <div class="custom-slder fade">
            <img class="slde-img" src="./tous_les_images/yaich.jpg">
        </div>
        <a class="prev" onclick="plusSlides(-1)"><</a>
        <a class="next" onclick="plusSlides(1)">></a>
    </div>
    <div class="slde-dot">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
        var sldeIndex = 1;
        showSlides(sldeIndex);

        function plusSlides(n) {
            showSlides(sldeIndex += n);
            /*
            function tafonction(){
// traitement
setTimeout(tafonction,2000); /* rappel après 2 secondes = 2000 millisecondes 
}
 
 tafonction();
            */
        }
        function currentSlide(n) {
            showSlides(sldeIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("custom-slder");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {sldeIndex = 1};
            if (n < 1) {sldeIndex = slides.length};
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[sldeIndex-1].style.display = "block";
            dots[sldeIndex-1].className += " active";
            
        }
    </script>
</body>
</html>
