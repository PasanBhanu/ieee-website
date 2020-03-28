<!DOCTYPE html>
<html lang="en">

<head>

    <title>TITLE - IEEE University of Moratuwa Student Branch</title>

    <meta name="description" content="META" />

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
                        <h2> Blog Title </h2>
                        <ul class="list-unstyled mt-4">
                            <li class="list-inline-item h6 user text-muted mr-2"><i class="mdi mdi-account"></i> Writer</li>
                            <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</li>
                        </ul>
                        <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold text-dark">Blogs</a></li>
                            <li>
                                <span class="text-uppercase text-primary font-weight-bold">Blog Title</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="col-lg-12 col-md-12">
                    <div class="mr-lg-3">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/blog.jpg" width="100%" class="img-fluid rounded-top" alt="">
                            </div>
                            <div class="content p-4">
                                <h6><i class="mdi mdi-tag text-primary mr-1"></i><a href="javscript:void(0)" class="text-primary">Software</a>, <a href="javscript:void(0)" class="text-primary">Application</a></h6>
                                <p class="text-muted mt-3">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. </p>
                                <blockquote class="blockquote mt-3 p-3">
                                    <p class="text-muted mb-0 font-italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                                </blockquote>
                                <p class="text-muted">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
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