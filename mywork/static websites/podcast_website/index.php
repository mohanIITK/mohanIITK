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
    <div class="div" id="section1">
        <div class="pod">
            <h1 class="h">Podcasts</h1>
        </div>
        <div class=" d-flex flex-row justify-content-center mt-2 a">
            <div class="d-flex flex-column m-2" onclick="display('section2')">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/puri-jagannadh-img.png" class="im2" />
                <h1 class="h1">Puri Jagannadh</h1>
                <p class="p">24 Episodes</p>
            </div>
            <div class="d-flex flex-column m-2" onclick="display('section3')">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/tedx-img.png" class="im2" />
                <h1 class="h1">Tedx talks</h1>
                <p class="p">12 Episodes</p>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-center a">
            <div class="d-flex flex-column m-1" onclick="display('section4')">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/sadhguru-img.png" class="im2" />
                <h1 class="h1">Sadhguru</h1>
                <p class="p">49 Episodes</p>
            </div>
            <div class="d-flex flex-column m-1" onclick="display('section5')">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/on-purpose-img.png" class="im2" />
                <h1 class="h1">On purpose</h1>
                <p class="p">49 Episodes</p>
            </div>
        </div>
    </div>
    <div id="section2">
        <div class="d-flex flex-column div">
            <div class="bg-container d-flex flex-row first">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/puri-jagannadh-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <p class="podcast">Podcast</p>
                    <h1 class="h_main">Puri Jagannadh Podcast</h1>
                    <p class="p_main">The Puri Jagannadh Podcast</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/puri-jagannadh-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Molecular Gastronomy</h1>
                    <p class="p_detail">Anything happens there it will not cook,...</p>
                    <p class="p_min">15 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/puri-jagannadh-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Mysterious book</h1>
                    <p class="p_detail">The Voynich manuscript is the 15th century book....</p>
                    <p class="p_min">12 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/puri-jagannadh-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Predator Drone</h1>
                    <p class="p_detail">The most power full drone. It is 10 feet height ....</p>
                    <p class="p_min">10 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/puri-jagannadh-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Paella</h1>
                    <p class="p_detail">The national dish of spain. It was first star...</p>
                    <p class="p_min">6 min</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <div id="section3">
        <div class="d-flex flex-column div">
            <div class="bg-container d-flex flex-row first">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/tedx-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <p class="podcast">Podcast</p>
                    <h1 class="h_main">The Tedx podcast</h1>
                    <p class="p_main">The Tedx podcast</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/tedx-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">The science of friction</h1>
                    <p class="p_detail">Tribology:It's a funny sounding word you might...</p>
                    <p class="p_min">12 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/tedx-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Unleash you</h1>
                    <p class="p_detail">What can we learn from the world's most enduringly....</p>
                    <p class="p_min">8 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/tedx-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">3 psychological tricks</h1>
                    <p class="p_detail">We all want to save more money-but overall ....</p>
                    <p class="p_min">10 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/tedx-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">The case for stubborn</h1>
                    <p class="p_detail">This decade is a moment of choice unlike any we...</p>
                    <p class="p_min">12 min</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <div id="section4">
        <div class="d-flex flex-column div">
            <div class="d-flex flex-row first">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/sadhguru-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <p class="podcast">Podcast</p>
                    <h1 class="h_main">The Sadhguru podcast</h1>
                    <p class="p_main">The Sadhguru Podcast</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/sadhguru-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Head or heart</h1>
                    <p class="p_detail">Sadhguru shares his wisdom on how to make...</p>
                    <p class="p_min">16 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/sadhguru-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">How to equip yourself</h1>
                    <p class="p_detail">Society and human interactions are going....</p>
                    <p class="p_min">13 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/sadhguru-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">How not to get irritated</h1>
                    <p class="p_detail">How do you see an unpleasant spouse the ....</p>
                    <p class="p_min">15 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/sadhguru-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Isha Kriya</h1>
                    <p class="p_detail">Rooted in the timeless wisdom if the yogic...</p>
                    <p class="p_min">16 min</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <div id="section5">
        <div class="d-flex flex-column div">
            <div class="d-flex flex-row first">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/on-purpose-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <p class="podcast">Podcast</p>
                    <h1 class="h_main">On purpose with Jay</h1>
                    <p class="p_main">The Jay Shetty podcast</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/on-purpose-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Patrick bet David</h1>
                    <p class="p_detail">Are you an entrepreuneur or have dreams of mental...</p>
                    <p class="p_min">10 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/on-purpose-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">5 techniques to cope</h1>
                    <p class="p_detail">Does anxiety looms around every corner of your....</p>
                    <p class="p_min">4 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/on-purpose-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">Radhanath Swami ON</h1>
                    <p class="p_detail">World-renowned spritual leader and philanthropist...</p>
                    <p class="p_min">12 min</p>
                </div>
            </div>
            <div class="bg-container d-flex flex-row bottom">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/on-purpose-img.png" class="im" />
                <div class="bg-container d-flex flex-column ml-3">
                    <h1 class="h_remain">3 ways to let go</h1>
                    <p class="p_detail">Do the opinions of others veer you from the core...</p>
                    <p class="p_min">13 min</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
</body>

</html>