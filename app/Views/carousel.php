<?= $this->extend("layout/template")?>
<?= $this->section("content")?>
<body>
    
    <div class="container p-5">

        <h1 class="text-center text-white bg-primary rounded py-3 px-4 mb-4">Podívejte se na fotky z našich destinačních cest</h1>

        <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

        
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>

        
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/rome.jpg" alt="udolí" class="d-block w-100">
                    <div class="carousel-caption">
                        <h3>Řím</h3>
                        <p>Krásný výhled na koloseum</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/instanbul.jpg" alt="lesík" class="d-block w-100">
                    <div class="carousel-caption">
                        <h3>Instanbul</h3>
                        <p>Úžasné podívaná na majestátní mešity</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="images/paris.jpg" alt="Jezero " class="d-block w-100">
                    <div class="carousel-caption">
                        <h3>Paříž</h3>
                        <p>Romantický pohled na Eiffelovu věž</p>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/london.jpg" alt="pláž" class="d-block w-100">
                    <div class="carousel-caption">
                        <h3>Londýn</h3>
                        <p>Úžasný pohled na Big Ben</p>
                        
                    </div>
                </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <h2 class="text-center text-white bg-primary rounded py-3 px-4 mt-5 mb-4">Nabídka zájezdů</h2>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/barcelona.jpg" class="card-img-top" alt="Barcelona">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Barcelona</h5>
                        <p class="card-text flex-grow-1">Sagrada Família, pláže a Gaudího architektura. 7 nocí, polopenze.</p>
                        <p class="fw-bold mb-3">od 17 990 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/kreta.jpg" class="card-img-top" alt="Kréta">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Kréta</h5>
                        <p class="card-text flex-grow-1">Pláž Matala, bílé vesničky a řecké moře. 7 nocí, all inclusive.</p>
                        <p class="fw-bold mb-3">od 15 490 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/malta.jpg" class="card-img-top" alt="Malta">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Malta</h5>
                        <p class="card-text flex-grow-1">Valletta, laguny a středomořské město. 7 nocí, all inclusive.</p>
                        <p class="fw-bold mb-3">od 16 990 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/santorini.jpg" class="card-img-top" alt="Santorini">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Santorini</h5>
                        <p class="card-text flex-grow-1">Bílé domy, modré kopule a západ slunce. 7 nocí, snídaně.</p>
                        <p class="fw-bold mb-3">od 21 490 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/benatky.jpg" class="card-img-top" alt="Benátky">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Benátky</h5>
                        <p class="card-text flex-grow-1">Kanály, gondoly a náměstí sv. Marka. 5 nocí, snídaně.</p>
                        <p class="fw-bold mb-3">od 16 490 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/praha.jpg" class="card-img-top" alt="Praha">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Praha</h5>
                        <p class="card-text flex-grow-1">Karlův most, Hradčany a Staré Město. 4 noci, snídaně.</p>
                        <p class="fw-bold mb-3">od 8 990 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/amsterdam.jpg" class="card-img-top" alt="Amsterdam">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Amsterdam</h5>
                        <p class="card-text flex-grow-1">Kanály, kola a muzea. 5 nocí, bez stravy.</p>
                        <p class="fw-bold mb-3">od 14 490 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
                <div class="card h-100 shadow-sm">
                    <img src="images/dubrovnik.jpg" class="card-img-top" alt="Dubrovník">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Dubrovník</h5>
                        <p class="card-text flex-grow-1">Hradby, Jadran a Staré město. 7 nocí, polopenze.</p>
                        <p class="fw-bold mb-3">od 18 490 Kč</p>
                        <a href="form.html" class="btn btn-primary mt-auto">Rezervovat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



  

</body>
<?= $this->endSection()?>