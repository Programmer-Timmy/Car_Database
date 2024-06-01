<?php

$car = Cars::get($_GET['id']);

?>

<div class="container py-5" style="max-width: 90%">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center"><?= $car->Merk ?> <?= $car->Model ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div id="carousel<?= $car->Nummer ?>" class="carousel slide carousel-dark" data-bs-ride="carousel">
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
                             class="d-block w-100" alt="..." style="height: 500px; object-fit: cover"
                             class="card-img-top">
                    </div>
                    <div class="carousel-item">
                        <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Face_Front ?>"
                             class="d-block w-100" alt="..." style="height: 500px; object-fit: contain"
                             class="card-img-top">
                    </div>
                    <div class="carousel-item">
                        <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Side ?>"
                             class="d-block w-100" alt="..." style="height: 500px; object-fit: contain"
                             class="card-img-top">
                    </div>
                    <div class="carousel-item">
                        <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Back ?>"
                             class="d-block w-100" alt="..." style="height: 500px; object-fit: contain"
                             class="card-img-top">
                    </div>
                    <div class="carousel-item">
                        <img src="http://192.168.2.10/CarDatabase/img/<?= $car->Photo_Face_Back ?>"
                             class="d-block w-100" alt="..." style="height: 500px; object-fit: contain"
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
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Specificaties</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nummer: <?= $car->Nummer ?></li>
                        <li class="list-group-item">Merk: <?= $car->Merk ?></li>
                        <li class="list-group-item">Model: <?= $car->Model ?></li>
                        <li class="list-group-item">Model nummer: <?= $car->Modelnr ?></li>
                        <li class="list-group-item">Generatie: <?= $car->Generatie ?></li>
                    </ul>
                    <h5 class="card-title text-center mt-3">Producent</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Producent: <?= $car->Producent ?></li>
                        <li class="list-group-item">Jaar: <?= $car->Jaar ?></li>
                    </ul>
                    <H5 class="card-title text-center mt-3">Extra</H5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kleur: <?= $car->Kleur ?></li>
                        <li class="list-group-item">Staat: <?= $car->Staat ?></li>
                        <li class="list-group-item">Locatie: <?= $car->Locatie ?></li>
                    </ul>
                    <h5 class="card-title text-center mt-3">Opmerkingen</h5>
                    <p class="card-text text-center"><?= $car->Opmerkingen ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
