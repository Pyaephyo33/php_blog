<?php
session_start();
require_once('./config/db.php');
// title & bootstrap css
require_once('layout/header.php');
// navbar
require_once('layout/navbar.php');
?>


<!-- Header -->
<header class="pt-5">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 text-center">
                <img src="assets/images/header.jpg" class="img-fluid rounded" alt="" data-aos="zoom-in" data-aos-duration="2000">
            </div>
            <div class="col-md-6 py-5 text-center" data-aos="zoom-in" data-aos-duration="2000">
                <h1>Today a reader, tomorrow a leader :)</h1>
                <h5>Focus on your dream & fight for it, then become the king</h5>
            </div>
        </div>
    </div>
</header>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#6366f1" fill-opacity="1" d="M0,128L60,138.7C120,149,240,171,360,165.3C480,160,600,128,720,138.7C840,149,960,203,1080,208C1200,213,1320,171,1380,149.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
</svg>


<!-- Blog / main content -->
<div id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 data-aos="fade-right" data-aos-duration="2000">Read Our Blogs</h3>
                <div class="heading-line" data-aos="fade-left" data-aos-duration="2000"></div>
                <div class="card my-3" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="assets/images/header.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content p-3">
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <div class="mb-3">2023-02-19 | by Ye Myint Soe</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus vel quam velit reiciendis repudiandae asperiores tenetur molestiae corporis nemo quasi, necessitatibus commodi unde eveniet non ea, voluptas libero, eaque veritatis.
                                <a href="blog-detail.php" class="text-decoration-none">See More </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card my-3" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="assets/images/1.png" class="img-fluid" alt="">
                        </div>
                        <div class="content p-3">
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <div class="mb-3">2023-02-19 | by Ye Myint Soe</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus vel quam velit reiciendis repudiandae asperiores tenetur molestiae corporis nemo quasi, necessitatibus commodi unde eveniet non ea, voluptas libero, eaque veritatis.
                                <a href="blog-detail.php" class="text-decoration-none">See More </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card my-3" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="assets/images/2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content p-3">
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <div class="mb-3">2023-02-19 | by Ye Myint Soe</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus vel quam velit reiciendis repudiandae asperiores tenetur molestiae corporis nemo quasi, necessitatibus commodi unde eveniet non ea, voluptas libero, eaque veritatis.
                                <a href="blog-detail.php" class="text-decoration-none">See More </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card my-3" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="assets/images/3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content p-3">
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <div class="mb-3">2023-02-19 | by Ye Myint Soe</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus vel quam velit reiciendis repudiandae asperiores tenetur molestiae corporis nemo quasi, necessitatibus commodi unde eveniet non ea, voluptas libero, eaque veritatis.
                                <a href="blog-detail.php" class="text-decoration-none">See More </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
                require_once('layout/right-side.php')
            ?>
        </div>
    </div>
</div>

<?php
require_once('layout/footer.php')
?>