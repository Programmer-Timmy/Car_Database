<?php

$cars = Cars::getAll();
//var_dump($cars);
?>

<div class="container pt-5" style="max-width: 90%">
    <div class="row" id="cars">
        <?php foreach ($cars as $car) : ?>
            <div class="col-md-6 col-xl-4 d-flex align-items-stretch">
                <div class="card mb-4 w-100 ">
                    <div id="carousel<?= $car->Nummer ?>" class="carousel slide carousel-dark">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel<?= $car->Nummer ?>" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel<?= $car->Nummer ?>" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel<?= $car->Nummer ?>" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carousel<?= $car->Nummer ?>" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carousel<?= $car->Nummer ?>" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Front ?>"
                                     class="d-block w-100" alt="..." style="height: 300px; object-fit: cover"
                                     class="card-img-top">
                            </div>
                            <div class="carousel-item">
                                <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Face_Front ?>"
                                     class="d-block w-100" alt="..." style="height: 300px; object-fit: contain"
                                     class="card-img-top">
                            </div>
                            <div class="carousel-item">
                                <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Side ?>"
                                     class="d-block w-100" alt="..." style="height: 300px; object-fit: contain"
                                     class="card-img-top">
                            </div>
                            <div class="carousel-item">
                                <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Back ?>"
                                     class="d-block w-100" alt="..." style="height: 300px; object-fit: contain"
                                     class="card-img-top">
                            </div>
                            <div class="carousel-item">
                                <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Face_Back ?>"
                                     class="d-block w-100" alt="..." style="height: 300px; object-fit: contain"
                                     class="card-img-top">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                                data-bs-target="#carousel<?= $car->Nummer ?>"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                                data-bs-target="#carousel<?= $car->Nummer ?>"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">(#<?= $car->Nummer ?>) <?php echo $car->Model; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Merk: <?php echo $car->Merk; ?></li>
                        <li class="list-group-item">Generatie: <?php echo $car->Generatie; ?></li>
                        <li class="list-group-item">Model nummer: <?php echo $car->Modelnr; ?></li>
                        <li class="list-group-item">Producent: <?php echo $car->Producent; ?></li>
                        <li class="list-group-item">Jaar: <?php echo $car->Jaar ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="car?id=<?= $car->ID ?>" class="card-link btn btn-primary">Bekijk</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row pb-5">
        <div class="col-md-12 text-center">
            <button class="btn btn-primary" id="loadMore">Laad meer</button>
        </div>
    </div>
</div>

<script>
    let load = 0;
    let search = '';

    $(document).ready(function () {

        $('#loadMore').click(function () {
            load += 12;
            searchAndLoad();
        });

        $('#search').click(function () {
            search = $('#searchInput').val();
            searchAndLoad();
        });

        /**
         * Search and load cars
         *
         * @return void
         */
        function searchAndLoad() {
            $.ajax({
                url: '/loadMore',
                type: 'POST',
                data: {
                    load: load,
                    search: search
                },
                success: function (response) {
                    $('#cars').html(response);
                }
            });
        }
    });
</script>

