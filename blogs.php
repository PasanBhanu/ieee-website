<!DOCTYPE html>
<html lang="en">

<head>

    <title>Blogs - IEEE University of Moratuwa Student Branch</title>

    <meta name="description" content="Read the latest news and blogs from IEEE University of Moratuwa Student Branch." />

    <?php require_once('codeblocks/meta.php'); ?>

    <?php require_once('codeblocks/css.php'); ?>

</head>

<body>
    <?php require_once('codeblocks/body_start.php'); ?>

    <?php require_once('codeblocks/header.php'); ?>

    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> Blog </h4>
                        <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                            <li><a href="index.php" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                            <li>
                                <span class="text-uppercase text-primary font-weight-bold">Blogs</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog position-relative overflow-hidden shadow rounded">
                        <div class="position-relative">
                            <img src="images/blog/thumbnail.jpg" class="img-fluid rounded-top" alt="">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="content p-4">
                            <h4><a href="blog_template.php" class="title text-dark">Design your apps in your own way</a></h4>
                            <div class="post-meta mt-3">
                                <a href="blog_template.php" class="text-muted float-right readmore mb-2">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
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