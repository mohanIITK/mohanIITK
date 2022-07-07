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
        <div class="bg-container d-flex flex-column div">
            <img src=" https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/conference-img.png" class="image1" />
            <h1 class="h1">The Things Conference</h1>
            <p class="p">Redefining the future of IoT with LoRaWAN</p>
            <Button class="btn btn-primary bt1" onclick="display('section2')">Know more</Button>
        </div>
    </div>
    <div id="section2">
        <div class="bg-container d-flex flex-column div">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive item" src="https://www.youtube.com/embed/vKJ6nXE_6Hc?rel=0" allowfullscreen>
                </iframe>
            </div>
            <h1 class="h2">The Things Conference</h1>
            <p class="p2">Join Asia's Largest Conference on LoRaWAN</p>
            <div class="bg-container d-flex flex-column detail ">
                <div class="bg-container d-flex flex-row justify-content-between ">
                    <div class="bg-container d-flex flex-column text-center a">
                        <h1 class="headingN">1400+</h1>
                        <p class="paraN">Attendees</p>
                    </div>
                    <div class="bg-container d-flex flex-column text-center b">
                        <h1 class="headingN">100+</h1>
                        <p class="paraN">Workshops</p>
                    </div>
                </div>
                <div class="bg-container d-flex flex-row justify-content-between detail ">
                    <div class="bg-container d-flex flex-column text-center a">
                        <h1 class="headingN">120+</h1>
                        <p class="paraN">Speakers</p>
                    </div>
                    <div class="bg-container d-flex flex-column text-center b">
                        <h1 class="headingN">10+</h1>
                        <p class="paraN">Countries</p>
                    </div>
                </div>
                <Button class="btn btn-primary bt1" onclick="display('section1')">Back</Button>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
</body>

</html>