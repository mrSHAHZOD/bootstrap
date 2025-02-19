<?php
$title = 'Bosh Sahifa';
require 'includs/header.php';  ?> 




        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg> -->
                    <img src="https://picsum.photos/1200/400" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD_aMXFc6TwHRBEOEI-NRXHcENeFZKHi3omw&s" class="d-block w-100" alt="...">     <img src="h" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


      


<?php require 'includs/footer.php'; ?>