<!DOCTYPE html>
<html lang="en">

<head>

    <title>Contact Us - IEEE University of Moratuwa Student Branch</title>

    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />

    <?php require_once('codeblocks/meta.php'); ?>

    <?php require_once('codeblocks/css.php'); ?>

</head>

<body>
    <?php require_once('codeblocks/body_start.php'); ?>

    <?php require_once('codeblocks/header.php'); ?>

    <section class="section pt-5 mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7923.605072630748!2d79.8984051957231!3d6.793865056982628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245416b7f34b5%3A0x7bd32721ab02560e!2sUniversity%20of%20Moratuwa!5e0!3m2!1sen!2slk!4v1585393657354!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="custom-form p-4 rounded shadow">
                        <div id="message"></div>
                        <form method="post" action="/php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group position-relative">
                                        <label>Your Name <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-account ml-3 icons"></i>
                                        <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group position-relative">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-email ml-3 icons"></i>
                                        <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Comments</label>
                                        <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                        <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Send Message">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 order-1 order-md-2">
                    <div class="title-heading ml-lg-4">
                        <h4 class="mb-4">Contact Details</h4>
                        <p class="text-muted">We'd love to hear your ideas. Contact us via below details.</p>
                        <div class="contact-detail mt-3">
                            <div class="icon mt-3 float-left">
                                <i class="mdi mdi-email-variant text-muted mdi-36px mr-3"></i>
                            </div>
                            <div class="content mt-3 overflow-hidden d-block">
                                <h6 class="mb-0">Email</h6>
                                <a href="mailto:ieeesbuom@gmail.com" class="text-primary">ieeesbuom@gmail.com</a>
                            </div>
                        </div>

                        <div class="contact-detail mt-3">
                            <div class="icon mt-3 float-left">
                                <i class="mdi mdi-phone text-muted mdi-36px mr-3"></i>
                            </div>
                            <div class="content mt-3 overflow-hidden d-block">
                                <h6 class="mb-0">Phone</h6>
                                <a href="tel:+94766670996" class="text-primary">+94 76 667 0996</a>
                            </div>
                        </div>

                        <div class="contact-detail mt-3">
                            <div class="icon mt-3 float-left">
                                <i class="mdi mdi-map-marker-outline text-muted mdi-36px mr-3"></i>
                            </div>
                            <div class="content mt-3 overflow-hidden d-block">
                                <h6 class="mb-0">Location</h6>
                                <a href="javascript:void();" class="text-primary">University of Moratuwa, Moratuwa, Sri Lanka</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('codeblocks/footer.php'); ?>

    <?php require_once('codeblocks/js.php'); ?>
</body>

</html>