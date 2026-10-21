<?= $this->extend("layout/template")?>
<?= $this->section("content")?>
<body>
    

        <h1 class="text-center text-white bg-primary rounded py-3 px-4 my-4">Vývoj projektu</h1>



        <div class="progress mt-4 border border-danger rounded-pill" style="height: 28px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:15%">
                15% 02.09.2026
            </div>
        </div>

        <div class="progress mt-4 border border-warning rounded-pill" style="height: 28px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:30%">
                30% 07.09.2026
            </div>
        </div>

        <div class="progress mt-4 border border-info rounded-pill" style="height: 28px;">
            <div class="progress-bar progress-bar-striped bg-info " style="width:45%">
                45% 09.09.2026
            </div>
        </div>

        <div class="progress mt-4 border border-primary rounded-pill" style="height: 28px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:65%">
                65% 13.09.2026
            </div>
        </div>

        <div class="progress mt-4 mb-5 border border-success rounded-pill" style="height: 28px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:95%">
                95% 15.09.2026
            </div>
        </div>

    

       

</body>

<?= $this->endSection()?>