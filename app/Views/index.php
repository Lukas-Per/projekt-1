<?= $this->extend("layout/template")?>
<?= $this->section("content")?>
<body>
    

    <div class="container-fluid p-5 text-center">
        <div class="position-relative">


            <img src="<?= base_url("images/why-traveling-1070x620.png")?>" class="img-fluid rounded border border-primary border-3" alt="">

            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="h1 text-white bg-primary rounded px-4 py-3 mb-0">Cestovní kancelář Super Travel</h1>

            </div>

        </div>




    </div>

    <div class="container my-5">
        <h2 class="text-center text-white bg-primary rounded py-3 px-4 mb-4">Co o nás říkají naši klienti</h2>

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 mb-5 d-flex">
                <div class="card h-100 shadow-sm bg-light">
                    <div class="card-body d-flex flex-column">
                        <div class="text-warning mb-2">
                            ★★★★★
                        </div>
                        <p class="card-text flex-grow-1">"S Super Travel jsme letos navštívili Řecko a vše bylo naprosto
                            bezchybné. Hotel odpovídal popisu a delegát byl neuvěřitelně ochotný. Určitě pojedeme
                            znovu!"</p>
                        <div class="d-flex align-items-center mt-3 pt-3 border-top">
                            <div>
                                <h6 class="mb-0 fw-bold">Jana Nováková</h6>
                                <small class="text-muted">Zájezd: Kréta</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-5 d-flex">
                <div class="card h-100 shadow-sm  bg-light">
                    <div class="card-body d-flex flex-column">
                        <div class="text-warning mb-2">
                            ★★★★★
                        </div>
                        <p class="card-text flex-grow-1">"Skvělý poměr ceny a kvality. Komunikace s cestovkou byla
                            rychlá a bezproblémová. Doporučuji všem, kdo chtějí dovolenou bez starostí."</p>
                        <div class="d-flex align-items-center mt-3 pt-3 border-top">
                            <div>
                                <h6 class="mb-0 fw-bold">Petr Svoboda</h6>
                                <small class="text-muted">Zájezd: Itálie</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-5 d-flex">
                <div class="card h-100 shadow-sm bg-light">
                    <div class="card-body d-flex flex-column">
                        <div class="text-warning mb-2">
                            ★★★★★
                        </div>
                        <p class="card-text flex-grow-1">"Super Travel nezklamal! Poznávací zájezd do Londýna byl skvěle
                            zorganizovaný, skvělý program a úžasný průvodce. Dáváme palec nahoru!"</p>
                        <div class="d-flex align-items-center mt-3 pt-3 border-top">
                            <div>
                                <h6 class="mb-0 fw-bold">Martina Dvořáková</h6>
                                <small class="text-muted">Zájezd: Londýn</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>






</body>
<?= $this->endSection()?>



