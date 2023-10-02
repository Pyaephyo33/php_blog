<?php
// title & bootstrap css
require_once('layout/header.php');
// navbar
require_once('layout/navbar.php');
?>

<div id="blog-detail">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <h3 data-aos="fade-right" data-aos-duration="1000">Blog Detail</h3>
                <div class="heading-line" data-aos="fade-left" data-aos-duration="1000"></div>
                <div class="card my-3" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="assets/images/header.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content p-3">
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <div class="mb-3">2023-02-19 | by Ye Myint Soe</div>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus vel quam velit reiciendis repudiandae asperiores tenetur molestiae corporis nemo quasi, necessitatibus commodi unde eveniet non ea, voluptas libero, eaque veritatis.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio provident eligendi sit impedit quas, amet vitae accusamus quos vero, odit, deserunt temporibus repellendus cumque velit dolore necessitatibus in soluta ipsa?
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus vel quam velit reiciendis repudiandae asperiores tenetur molestiae corporis nemo quasi, necessitatibus commodi unde eveniet non ea, voluptas libero, eaque veritatis.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio provident eligendi sit impedit quas, amet vitae accusamus quos vero, odit, deserunt temporibus repellendus cumque velit dolore necessitatibus in soluta ipsa?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <h5 data-aos="fade-right" data-aos-duration="1000">Leave a Comment</h5>
                    <form action="" data-aos="fade-left" data-aos-duration="1000">
                        <div class="mb-2">
                            <textarea name="" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="btn">Submit</button>
                    </form>
                    <div class="card card-body my-3" data-aos="fade-right" data-aos-duration="1000">
                        <h6>Ye Myint Soe</h6>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, repudiandae?
                        <div class="mt-3">
                            <span class="float-end">01.03.2023</span>
                        </div>
                    </div>
                    <div class="card card-body my-3" data-aos="fade-right" data-aos-duration="1000">
                        <h6>Lisa</h6>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, repudiandae?
                        <div class="mt-3">
                            <span class="float-end">01.03.2023</span>
                        </div>
                    </div>
                    <div class="card card-body my-3" data-aos="fade-right" data-aos-duration="1000">
                        <h6>Jiso</h6>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, repudiandae?
                        <div class="mt-3">
                            <span class="float-end">01.03.2023</span>
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
// footer
require_once('layout/footer.php')
?>