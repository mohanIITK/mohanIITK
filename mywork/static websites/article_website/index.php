<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="section1">
        <div class="d-flex flex-column div1">
            <h1 class="h_main">Empower yourself</h1>
            <p class="p_main">By learning new courses from worlds leading experts</p>
            <div class="d-flex flex-row justify-content-center">
                <div class="d-flex flex-column icon" onclick="display('section2')">
                    <img src="https://assets.ccbp.in/frontend/static-website/articles-technology-icon-img.png" class="mx-auto d-block im_icon" onclick="display('section2')" />
                    <p class="p_p"> Technology</p>
                </div>
                <div class="d-flex flex-column icon" onclick="display('section3')">
                    <img src="https://assets.ccbp.in/frontend/static-website/articles-science-icon-img.png" class="mx-auto d-block im_icon" onclick="display('section3')" />
                    <p class="p_p">Science</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <div class="d-flex flex-column icon" onclick="display('section4')">
                    <img src="https://assets.ccbp.in/frontend/static-website/articles-healthcare-icon-img.png" class="mx-auto d-block im_icon" onclick="display('section4')" />
                    <p class="p_p">Health Care</p>
                </div>
                <div class="d-flex flex-column icon" onclick="display('section5')">
                    <img src="https://assets.ccbp.in/frontend/static-website/articles-business-icon-img.png" class="mx-auto d-block im_icon" onclick="display('section5')" />
                    <p class="p_p">Business</p>
                </div>
            </div>
        </div>

    </div>
    <div id="section2">
        <div class="d-flex flex-column div">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-technology-c1-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-technology-c2-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-technology-c3-img.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h1 class="list_of_topic">List of Topics</h1>
            <ul>
                <li class="list_item">Artificial Intelligence</li>
                <li class="list_item">Data Science</li>
                <li class="list_item">Machine Learning</li>
                <li class="list_item">Internet of Things</li>
                <li class="list_item">Blockchain</li>
                <li class="list_item">Virtual Reality</li>
                <li class="list_item">Robotic Process Automation (RPA)</li>
            </ul>

            <div class="d-flex flex-row justify-content-center">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <div id="section3">
        <div class="d-flex flex-column div">
            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-science-c1-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-science-c2-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-science-c3-img.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h1 class="list_of_topic">List of Topics</h1>
            <ul>
                <li class="list_item"> Biology</li>
                <li class="list_item">Zoology</li>
                <li class="list_item">Cardiology</li>
                <li class="list_item">Chemistry</li>
                <li class="list_item">Bio Chemistry</li>
                <li class="list_item">Nano Science</li>
                <li class="list_item">Astronomy</li>
            </ul>
            <div class="d-flex flex-row justify-content-center">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <div id="section4">
        <div class="d-flex flex-column div">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-healthcare-c1-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-healthcare-c2-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-healthcare-c3-img.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h1 class="list_of_topic">List of Topics</h1>
            <ul>
                <li class="list_item">Infrastructure Management </li>
                <li class="list_item">Latest in Health Care</li>
                <li class="list_item">Pharmaceuticals</li>
                <li class="list_item">COVID-19</li>
            </ul>
            <div class="d-flex flex-row justify-content-center">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <div id="section5">
        <div class="d-flex flex-column div">
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-business-c1-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-business-c3-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.ccbp.in/frontend/static-website/articles-business-c3-img.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h1 class="list_of_topic">List of Topics</h1>
            <ul>
                <li class="list_item">Business Models</li>
                <li class="list_item">21st Century Business Skills</li>
                <li class="list_item">Traditional Business Approaches</li>
                <li class="list_item">How to go from 0 to 1 ? The Startup 101</li>
            </ul>
            <div class="d-flex flex-row justify-content-center">
                <button class="btn back" onclick="display('section1')">Back</button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
</body>

</html>