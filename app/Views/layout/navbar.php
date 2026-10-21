<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link  active fw-bold" href="<?= base_url() ?>">
                        <h5>
                            <i class="fa-solid fa-suitcase" style="color: rgb(255, 255, 255);"></i>
                            Super Travel
                        </h5>
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= url_is("") ? 'active' : '' ?>" href="<?= base_url() ?>">Domů
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= url_is('project-progress*') ? 'active' : '' ?>" href="<?= base_url("project-progress") ?>">Vývoj projektu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= url_is('form*') ? 'active' : '' ?>" href="<?= base_url("form") ?>">Formulář</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link <?= url_is('carousel*') ? 'active' : '' ?>" href="<?= base_url("carousel") ?>">Obrázky</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= url_is('pricing*') ? 'active' : '' ?>" href="<?= base_url("pricing") ?>">Ceník</a>
                </li>



            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>