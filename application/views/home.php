<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
</head>
<body>
    <main class="mx-auto position-relative">
        <h1 class="position-absolute start-50 translate-middle p-3 text-danger">ADVISOR</h1>

        <?= form_open('home/search') ?>
            <div class="form-floating mb-3 input-group mt-5">
                <input type="text" class="form-control bg-transparent border border-3 border-danger" id="search" placeholder="search" name="search">
                <label for="search">search</label>
                <button class="btn btn-outline-danger" type="submit">search</button>
            </div>
        <?= form_close(); ?>

        <div id="carouselExampleControls" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (!isset($slips)): ?>
                    <div class="carousel-item active">
                        <p class=" w-75 mx-auto">
                            <?= $advice ?>                            
                        </p>
                    </div>
                <?php else: ?>
                    <?php for ($i = 0; $i < sizeof($slips); $i++): ?>
                        <?php if ($i === 0): ?>
                            <div class="carousel-item active">
                                <p class=" w-75 mx-auto">
                                    <?= $slips[$i]['advice'] ?>                            
                                </p>
                            </div>
                        <?php else: ?>
                            <div class="carousel-item">
                                <p class=" w-75 mx-auto">
                                    <?= $slips[$i]['advice'] ?>                            
                                </p>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                <?php endif; ?>


                <!-- <div class="carousel-item">
                    <p class=" w-75 mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere deserunt voluptate hic reiciendis! Magni enim a vitae eius nisi. Quasi.
                    </p>
                </div>

                <div class="carousel-item">
                    <p class=" w-75 mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere deserunt voluptate hic reiciendis! Magni enim a vitae eius nisi. Quasi.
                    </p>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <button class="position-absolute bottom-0 mx-auto start-50 translate-middle" onclick="go_home()">get random</button>
    </main>

    <script>
        function go_home()
        {
            window.location.href = '<?= site_url() ?>';
        }
    </script>
</body>
</html>