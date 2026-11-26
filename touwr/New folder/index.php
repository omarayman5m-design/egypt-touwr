<?php
include('./data.php');
include('./includes/hed.php');
include('./includes/nav.php')
?>

<div class="container-fluid text-center ">
    <div class="row ">
        <div class="col-lg-12 bg-black text-warning p-5 fw-bold fs-1 ">Discovre Egypt</div>
    </div>
</div>

<div id="carouselExampleDark" class="carousel carousel-dark slide m-5 p-lg-5  ">
    <div class="carousel-inner">
        <?php foreach($slides as $index => $slide){?>
        <div class="carousel-item  <?= $index ==0 ? 'active' : '' ?> data-bs-interval='10000'">
            <img src="images\images/<?= $slide ?>.jpg" class="d-block w-100" alt="<?= $slide ?>">
        </div>
        <?php }?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- /// -->
<section class="featured mt-5 p-5  " id='city' >
    <h2 class="text-center mb-5  active">featured cities</h2>
    <div class="row">
        <?php foreach($cities as $key=>$city){ ?>
        <div class="col-md-3">
            <div class="card" style="width:18rem;">
                <img src="images/images/<?= $city['img'] ?> " alt="" class="card-img-top">
                <div class="card-body  d-flex flex-column">
                    <h4 class="card-title text-center "><?= $city['titel'] ?></h4>
                    <a href="details.php?id=<?= $key ?>" class="btn btn-outline-info <?= $key ?> ">learn more</a>
                </div>
            </div>
        </div><?php }?>

    </div>
</section>

<?php
include('./includes/footer.php')
?>