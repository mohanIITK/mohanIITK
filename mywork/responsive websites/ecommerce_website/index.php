<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5f59ca6ad3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-website-logo-img.png" class="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active text-dark link" href="#">Home<span class="sr-only">(current)</span></a>
                        <a class="nav-link text-dark link" href="#services">Services</a>
                        <a class="nav-link text-dark link" href="#products">Products</a>
                        <a class="nav-link text-dark link" href="#deals">Explore Deals</a>
                        <a class="nav-link text-dark link" href="#offers">Offers</a>
                        <a class="nav-link text-dark link" href="#blogs">Trending Blogs</a>
                        <a class="nav-link text-dark link" href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide corousel-container" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-carousel-1-sm-img.png" class="d-inline d-md-none h-100 w-100" alt="...">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-carousel-1-img.png" class="d-none d-md-inline h-100 w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-carousel-2-sm-img.png" class="d-inline d-md-none h-100 w-100" alt="...">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-carousel-2-img.png" class="d-none d-md-inline h-100 w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-carousel-3-sm-img.png" class="d-inline d-md-none h-100 w-100" alt="...">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-carousel-3-img.png" class="d-none d-md-inline h-100 w-100" alt="...">
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
    </div>
         <div id="services" class="container serviceMainCon pt-5 pb-1 pb-lg-5">
            <div class="row">
                <div class="col-12 mb-2">
                    <h1 class="serviceMainHeading">Our Services</h1>
                    <p class="serviceDesc">Most online stores offer lower prices. Online shopping makes price comparison simpler and quicker.It is very covenient to shop from where you are located.It saves you the cost of driving to store,as well as parking fees.</p>
                </div>
                <div class="col-12 col-md-4 mb-3 text-center">
                    <div class="shadow serviceCon mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-services-delivery-img.png" class="w-25 " />
                        <div class="p-3">
                            <h1 class="serviceHeading">Fast and Free Delivery</h1>
                            <p class="serviceDesc">Fast ,free and convenient delivery choices on millions of items.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 text-center">
                    <div class="shadow serviceCon mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-services-money-back-img.png" class="w-25 m-3 mr-auto" />
                        <div class="p-3">
                            <h1 class="serviceHeading">100% Money back guarantee</h1>
                            <p class="serviceDesc">This is probably the most popular guarantee in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 text-center">
                    <div class="shadow serviceCon mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-services-24-by-7-support-img.png" class="w-25 m-3 mr-auto" />
                        <div class="p-3">
                            <h1 class="serviceHeading">Online Support 24/7</h1>
                            <p class="serviceDesc">Our Online Support will provide you with many useful functions,valuable information,tips</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="products" class="container pt-5 pb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="productMainHeading"> Our Products</h1>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="d-flex flex-column justify-content-end mb-3 p-3 card1">
                        <h1 class="productHeading">Smart Headphones</h1>
                        <p class="productDesc">Headphones with Deep Bass,sound,touch...</p>
                        <button type="button" class="viewBtn mr-auto" data-toggle="modal" data-target="#modal1">View Details</button>
                    </div>
                    <div class="modal fade" id="modal1" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title modalTitle" id="ModalLabel">Sony WH-1000XM4 Noise Cancelling Headphones</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p class="modalProductDesc">
                                        Get Best Smart Headphones Prices Online in India.
                                        Select from the best range of Headphones from most
                                        popular brands...
                                    </p>
                                    <ul class="list">
                                        <li class="list-item">
                                            <span class="modalCategory">Voice assistant:</span> Alexa, Google Assistant & Siri
                                        </li>
                                        <li class="list-item">
                                            <span class="modalCategory">Smart listening:</span> Ambient sound with the best noise
                                            cancellation
                                        </li>
                                        <li class="list-item">
                                            <span class="modalCategory">Long battery life:</span> A single charge provides 30 hours
                                            of playtime
                                        </li>
                                        <li class="list-item">
                                            <span class="modalCategory">Quick charging:</span> Charge for 10 min for 5 hours
                                            play back
                                        </li>
                                        <li class="list-item">
                                            <span class="modalCategory">Touch controls:</span> Change the track with your fingertip
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="d-flex flex-column justify-content-end p-3 card2">
                        <h1 class="productHeading">Laptops</h1>
                        <p class="productDesc">Explore vast selection of Laptops..</p>
                        <button type="button" class="viewBtn mr-auto" data-toggle="modal" data-target="#modal2">View Details</button>
                    </div>
                    <div class="modal fade" id="modal2" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modalTitle" id="ModalLabel2">Inspiron 14 5490 core i5 Laptop</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p class="modalProductDesc">
                                        Get Best Laptop Prices Online in India. Select from the best range of Laptops from most popular brands...
                                    </p>
                                    <ul class="list">
                                        <li class="list-item">
                                            <span class="modalCategory">Performance:</span> Core i5 3rd Gen, 2.6 Ghz, 4 GB RAM
                                        </li>
                                        <li class="list-item"><span class="modalCategory">Storage:</span> 500 GB HDD, SATA, 7200 RPM</li>
                                        <li class="list-item"><span class="modalCategory">Battery:</span> Li-Ion, 6 Cell</li>
                                        <li class="list-item"><span class="modalCategory">Design:</span> 14.0 Inches, 1366 X 768 , 2.07 Kg, 34 Mm Thick</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a class="products-section-link" href="">
                        See All Offers
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    <div id="blogs" class="blogMainCon pt-5 pb-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="blogMainHeading mb-3">Trending Blogs</h1>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <div class="blogCon shadow mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-trending-blogs-1-img.png" class="w-100" />
                        <div class="p-3">
                            <h1 class="blogHeading"> Fountain Pens</h1>
                            <h1 class="blogSubHeading">Guide to Fountain Pen Nibs</h1>
                            <p class="blogDesc">If you're having trouble with a fountain pen whether it's scratchy,too dry,or too wet...</p>
                            <a href="#" class="blogLink">
                                Read More <svg width="30px" height="25px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#ff9f00" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <div class="shadow blogCon mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-trending-blogs-2-img.png" class="w-100" />
                        <div class="p-3">
                            <h1 class="blogHeading"> Productivity</h1>
                            <h1 class="blogSubHeading">How to Craft a Better Todo List</h1>
                            <p class="blogDesc">A well-crafted Todo list acts as a guiding light for your day. It helps you overcome...</p>
                            <a href="#" class="blogLink">
                                Read More <svg width="30px" height="25px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#ff9f00" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div id="deals" class="container exploreMainCon pt-5 pb-5">
            <div class="row">
                <div class="col-12 mb-2">
                    <h1 class="exploreMainHeading">Explore Deals & Offers</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="shadow exploreCon p-3">
                        <h1 class="exploreHeading">Up to 80% Off | Electronics & Gadgets</h1>
                        <div class="d-flex flex-row text-center">
                            <div class="d-flex flex-column mr-2">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-mamba-watch-img.png" class="exploreImg" />
                                <p class="exploreProduct">Smart Watch</p>
                            </div>
                            <div class="d-flex flex-column">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-camera-img.png" class="exploreImg" />
                                <p class="exploreProduct">Cameras</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row text-center">
                            <div class="d-flex flex-column mr-2">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-sport-and-fitness-img.png" class="exploreImg" />
                                <p class="exploreProduct">Sports & Fitness</p>
                            </div>
                            <div class="d-flex flex-column">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-ear-phones-pink-img.png" class="exploreImg" />
                                <p class="exploreProduct">Earphones</p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="exploreLink mt-2">
                                See All Deals<svg width="30px" height="25px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#ff9f00" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="shadow exploreCon mb-3 p-3">
                        <h1 class="exploreHeading">Festive Offers TV & appliances</h1>
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-tv-img.png" class="image_tv" />
                        <div class="mt-2">
                            <a href="" class="exploreLink mt-2">
                                See All Deals<svg width="30px" height="25px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#ff9f00" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="shadow exploreCon p-3">
                        <h1 class="exploreHeading">Under Rs 4000 | Friendly Accessories</h1>
                        <div class="d-flex flex-row text-center">
                            <div class="d-flex flex-column">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-tablet-device-img.png" class="exploreImg" />
                                <p class="exploreProduct">Tablet</p>
                            </div>
                            <div class="d-flex flex-column">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-joy-stick-img.png" class="exploreImg" />
                                <p class="exploreProduct">Play Station</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row text-center">
                            <div class="d-flex flex-column">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-speakers-big-img.png" class="exploreImg" />
                                <p class="exploreProduct">Speakers</p>
                            </div>
                            <div class="d-flex flex-column">
                                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-explore-vr-set-img.png" class="exploreImg" />
                                <p class="exploreProduct">Virtual Reality Set</p>
                            </div>
                        </div>
                        <div class="mt-1">
                            <a href="" class="exploreLink mt-2">
                                See All Deals<svg width="30px" height="25px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#ff9f00" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div id="offers" class="container offerCon pb-5 pt-5 ">
            <div class="row ">
                <div class="col-12 col-md-2 order-1 order-md-2 text-center">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-offers-special-img.png" class="w-75" />
                </div>
                <div class="col-12 col-md-5 order-2 order-md-3">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-offers-appliances-img.png" class="w-100" />
                </div>
                <div class="col-12 col-md-5 order-3 order-md-1">
                    <h1 class="offerHeading">BEST NEW YEAR SPECIAL OFFERS</h1>
                    <p class="offerDesc">Best time to buy. Save upto <span class="text-bold">70% cash</span></p>
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-offers-credit-card-img.png" class="w-75" />
                </div>
            </div>
        </div>
   
    <div class="container contactCon pt-5 pb-3 text-center">
        <h1 contactHeading>Let us Join Together</h1>
        <button class="btn contactBtn">CONTACT US</button>
    </div>
 
        <div id="contact" class="container footerCon pt-3 pb-3">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 text-center text-md-left">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row justify-content-center justify-content-md-start">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-website-logo-img.png" class="footerLogo mb-2" />
                        </div>
                        <div class="d-flex flex-row justify-content-center justify-content-md-start">
                            <i class="fab fa-google m-2 iconFooter"></i>
                            <i class="fab fa-twitter m-2 iconFooter"></i>
                            <i class="fab fa-instagram m-2 iconFooter"></i>
                            <i class="fab fa-linkedin m-2 iconFooter"></i>
                        </div>
                        <p class="footerPara"> New Delhi, India</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3 p-3">
                    <div class="d-flex flex-column">
                        <h1 class="footerHeading">Get to know us</h1>
                        <p class="footerPara">About us</p>
                        <p class="footerPara">Career</p>
                        <p class="footerPara">Press Release</p>
                        <p class="footerPara">Gift a smile</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3 p-3">
                    <div class="d-flex flex-column">
                        <h1 class="footerHeading">Contact with Us</h1>
                        <p class="footerPara">Facebook</p>
                        <p class="footerPara">Twitter</p>
                        <p class="footerPara">Instagram</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3 p-3">
                    <div class="d-flex flex-column">
                        <h1 class="footerHeading">Let Us Help You</h1>
                        <p class="footerPara">100% Purchase Protection</p>
                        <p class="footerPara">Your Account</p>
                        <p class="footerPara">Return Centre</p>
                        <p class="footerPara">Help</p>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <hr class="hrlineFooter">
                    <p class="footerPara mb-1"><i class="far fa-copyright"></i> 2020 by Mohan Lal Lothiya. Created with Bootstrap.</p>
                </div>
            </div>
        </div>
</body>
</html>