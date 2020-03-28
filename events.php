<!DOCTYPE html>
<html lang="en">

<head>

    <title>Events - IEEE University of Moratuwa Student Branch</title>

    <meta name="description" content="Events hosted by IEEE University of Moratuwa Student Branch." />

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
                        <h4 class="title"> Events </h4>
                        <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                            <li>
                                <span class="text-uppercase text-primary font-weight-bold">Events</span>
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
                <ul class="col container-filter list-unstyled categories-filter text-center" id="filter">
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded active" data-filter="*">All</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".branch">Main Branch</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".ias">IAS</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".pes">PES</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".ras">RAS</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row container-grid projects-wrapper">
                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 branch">
                    <div class="work-container position-relative rounded">
                        <img src="images/events/thumbnail.jpg" class="img-fluid rounded" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            <a href="event_template.php" class="title text-white d-block font-weight-bold">Event Name</a>
                            <small class="text-light">Chapter</small>
                        </div>
                        <div class="client">
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