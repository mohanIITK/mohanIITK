<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="section1">
        <div class="d-flex flex-column justify-content-center div">
            <div class="one">
                <h1 class="h"> Sleep Music</h1>
                <p class="p">Soothing bedtime music to help you fall into a deep and natural sleep</p>
            </div>
            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/moon-bg.png" class="im1" />
            <p class="p1">Non-stop 8-hour mixes of our most popular sleep audio</p>
            <button class="btn start" onclick="display('section2')">Get Started</button>
        </div>
    </div>
    <div id="section2">
        <div class="d-flex flex-column div2">
            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/clouds-img.png" class="im3" />
            <h1 class="h1">Night Island</h1>
            <p class="p2">Ease the mind into a restful night's sleep with these deep,amblent tones.</p>
            <p class="p3"> 45 MIN SLEEP MUSIC</p>
            <h1 class="h3"> Related</h1>
            <div class="d-flex flex-row ">
                <div class="d-flex flex-column rel">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/moon-clouds-img.png" class="im2" />
                    <h1 class="h3">Moon Clouds</h1>
                    <p class="p3">55 MIN SLEEP MUSIC</p>
                </div>
                <div class="d-flex flex-column rel">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/sweet-sleep-img.png" class="im2" />
                    <h1 class="h3">Sweet Sleep</h1>
                    <p class="p3">60 MIN SLEEP MUSIC</p>
                </div>
            </div>
            <button class="btn back" onclick="display('section1')">Back</button>
        </div>

    </div>
    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
</body>

</html>