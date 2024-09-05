<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | Campus Life</title>

    @include('links')
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        @include('links')

</head>

<body style="background-color: whitesmoke">
    <!-- navbar -->
    @include('partials.navbar')
    <!-- bg -->
    <section>
        <div>
            <div class="landing-image">
                <div class="landing-text nav-content">
                    <!-- <h1>Welcome to Mwenge Catholic University</h1> -->
                    <div class="underline mt-5 mb-5">
                        <h1 style="text-align: center">Campus Life</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main content -->
    <div class="container-fluid" style="background-color: white">
        <div class="underline mt-5 mb-2" style="width: 100%">
            <h1 style="text-align: center">Student Life</h1>
        </div>
        <p style="text-align: center; font-size: 20px; color: rgb(99, 97, 97)">
            Life at MWECAU is enriching, exciting, and energizing
        </p>
        <div class="row pt-5 campus-row">
            <div class="col-12 col-md-4 col-lg-4 mb-4 d-flex">
                <a href="#" class="card-1">
                    <div class="card h-100 campus-card" style="width: 100%; border: none">
                        <img src="{{ asset('img/students3.jpg') }} " class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Student Affairs</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-4 d-flex">
                <a href="#" class="card-2">
                    <div class="card h-100 campus-card" style="width: 100%; border: none">
                        <img src="{{ asset('img/students3.jpg') }} " class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Clubs and Organization</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-4 d-flex">
                <a href="#" class="card-3">
                    <div class="card h-100 campus-card" style="width: 100%; border: none">
                        <img src="{{ asset('img/students3.jpg') }} " class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Housing</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row talent-cont">
            <div class="talent-content-container">
                <div class="talent-pics">
                    <!-- <div
                  style="
                    width: 80%;
                    height: 100%;
                    position: relative;
                    background-color: blue;
                  "
                > -->
                    <img src="{{ asset('img/students3.jpg') }} " alt="students" class="fade-in" data-target="1" />
                    <img src="{{ asset('img/students3.jpg') }} " alt="students" class="fade-out" data-target="2" />
                    <img src="{{ asset('img/students3.jpg') }} " alt="students" class="fade-out" data-target="3" />
                    <!-- </div> -->
                </div>
                <div class="talent-content">
                    <div class="underline mt-4 mb-5" style="width: 80%">
                        <h1 style="text-align: center">Creativity & Talents</h1>
                    </div>
                    <p>
                        MWECAU has a rich tradition of fostering creativity and talents,
                        and presents a wide range of performances.
                    </p>
                    <div class="pic-nav">
                        <h3 data-target="1" style="font-weight: 600">Picture 1</h3>
                        <h3 data-target="2">Picture 2</h3>
                        <h3 data-target="3">Picture 3</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- small gallery -->
    <div class="container-fluid p-3">
        <div class="campus-gallery">
            <div class="gallery-pic gallery-pic-1">
                <img src="{{ asset('img/students3.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-pic gallery-pic-2">
                <img src="{{ asset('img/campus life/guests.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-pic gallery-pic-3">
                <img src="{{ asset('img/students3.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-pic gallery-pic-4">
                <img src="{{ asset('img/students3.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-pic gallery-pic-5">
                <img src="{{ asset('img/campus life/library2.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-pic gallery-pic-6">
                <img src="{{ asset('img/campus life/library3.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-pic gallery-pic-7">
                <img src="{{ asset('img/campus life/books.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-pic gallery-pic-8">
                <img src="{{ asset('img/campus life/parking.jpg') }} " alt="" class="campus-gallery-img" />
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sports and Ent -->
    <div class="container-fluid">
        <div class="underline mt-4 mb-5" style="width: 100%">
            <h1 style="text-align: center">Sports and Entertainments</h1>
        </div>
        <div class="row sports">
            <div class="col-6 col-sm-12 col-lg-6 sports-col1">
                <img src=" {{ asset('img/students3.jpg') }} " alt="sports picture" class="sports-col1-img" />
                <div class="sport-tag">
                    <p>Athletics</p>
                </div>
            </div>
            <div class="col-6 col-sm-12 col-lg-6 sports-col2">
                <div class="col2-div1">
                    <img src="{{ asset('img/students3.jpg') }} " alt="sports picture" class="sports-col2-img sp-1" />
                    <div class="sport-tag">
                        <p>Entertainment</p>
                    </div>
                </div>
                <div class="col2-div2">
                    <img src="{{ asset('img/students3.jpg') }} " alt="sports picture" class="sports-col2-img sp-2" />
                    <div class="sport-tag">
                        <p>Baseball</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content end -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all caption elements
            var captions = document.querySelectorAll('.pic-nav h3')

            // Attach click event to each caption
            captions.forEach(function(caption) {
                caption.addEventListener('click', function() {
                    var target = this.getAttribute('data-target')

                    // normalize all the heads
                    document.querySelectorAll('.pic-nav h3').forEach(function(head) {
                        head.style.fontWeight = 'normal'
                    })

                    var targetHead = document.querySelector(
                        '.pic-nav h3[data-target="' + target + '"]'
                    )
                    targetHead.style.fontWeight = '600'

                    // Hide all images
                    document
                        .querySelectorAll('.talent-pics img')
                        .forEach(function(image) {
                            image.classList.remove('fade-in')
                            image.classList.add('fade-out')
                        })

                    // Show the clicked image
                    var targetImage = document.querySelector(
                        '.talent-pics img[data-target="' + target + '"]'
                    )
                    targetImage.classList.remove('fade-out')
                    targetImage.classList.add('fade-in')
                })
            })
        })
        // })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    @include('jslinks')
    @include('partials.footer')
</body>

</html>
