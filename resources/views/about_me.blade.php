<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <title>about.me</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
</head>
<body>
<div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="assets/images/author-image.jpg" alt="" /></a>
            </div>
            <div class="author-content">
              <h4>Aziza</h4>
              <span>my web page</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
              <li><a href="/">About Me</a></li>
                <li><a href="about-me">My Work</a></li>
                <li><a href="contact-me">Contact Me</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://fb.com/templatemo"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>Copyright 2019 Reflux Design</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>My Work</h2>
            <div class="line-dec"></div>
            <span
              ></span
            >
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label
                  ><input
                    type="radio"
                    data-type="*"
                    checked=""
                    name="isotope-filter"
                  />
                  <span>all</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="people"
                    name="isotope-filter"
                  />
                  <span>winter</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="nature"
                    name="isotope-filter"
                  />
                  <span>summer</span></label
                >
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="nature">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-01.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-01.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Summer light</h4>
                      <span></span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-02.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-02.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>winter</h4>
                      <span></span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-04.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-04.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>winter</h4>
                      <span></span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="nature">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-05.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-05.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Summer Rain</h4>
                      <span></span>
                    </figcaption>
                  </figure>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      

      $(window).scroll(function() {
        checkSection();
      });
    </script>
</body>
</html>