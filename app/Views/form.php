<?= $this->extend("layout/template")?>
<?= $this->section("content")?>

<body>
    

        <h1 class="text-center text-white bg-primary rounded py-3 px-4 my-4">Kontaktní formulář</h1>
        <form class="needs-validation" method="post">



            <div class="row">
                <div class="col-lg-6">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Jméno" required>
                        <label for="name">Jméno</label>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Přijmení"
                            required>
                        <label for="surname">Přijmení</label>
                    </div>
                </div>


            </div>


            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefoní číslo" required>
                <label for="phone">Telefoní číslo</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="mail" id="mail" placeholder="Telefoní číslo" required>
                <label for="mail">Email</label>
            </div>




            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3 form-floating">
                        <input type="date" class="form-control" name="date_from" id="date-from" placeholder="date"
                            required>
                        <label for="date-from">Datum od</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3 form-floating">
                        <input type="date" class="form-control" name="date_to" id="date-to" placeholder="date" required>
                        <label for="date-to">Datum do</label>
                    </div>
                </div>





            </div>






            <div class="form-floating mb-3">
                <select id="destination" class="form-select" name="destination" required>
                    <option value="" selected disabled>Vyberte destinaci...</option>
                    <option value="kreta">Kréta</option>
                    <option value="rim">Řím</option>
                    <option value="londyn">Londýn</option>
                    <option value="barcelona">Barcelona</option>
                    <option value="istanbul">Istanbul</option>
                    <option value="malta">Malta</option>
                    <option value="pariz">Paříž</option>
                    <option value="santorini">Santorini</option>
                    <option value="benatky">Benátky</option>
                    <option value="praha">Praha</option>
                    <option value="amsterdam">Amsterdam</option>
                    <option value="dubrovnik">Dubrovník</option>
                </select>
                <label for="destination">Destinace</label>
            </div>

            <div class="mb-3">
                <label for="select-trips">Vyberte doplňkové výlety</label>
                <select id="select-trips" class="form-control" name="trips[]" multiple
                    placeholder="Vyberte výlety..." autocomplete="off" required>
                    <option value="" disabled>Vyberte výlety...</option>
                    <option value="lod">Výlet lodí</option>
                    <option value="muzeum">Prohlídka muzea / památek</option>
                    <option value="vino">Ochutnávka vína</option>
                    <option value="trekking">Trekking / pěší túra</option>
                    <option value="plaz">Celodenní výlet na pláž</option>
                    <option value="nocni">Noční prohlídka města</option>
                    <option value="gastronomie">Gastronomická prohlídka</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="special">Speciální požadavky</label>
                <textarea id="default" placeholder="Text..."></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Odeslat a otestovat</button>
            </div>









        </form>



    
    <script>
        new TomSelect("#select-trips", {
            maxItems: 5,
            plugins: ["remove_button"],
            placeholder: "Vyberte výlety..."
        });
    </script>

    <script>
        tinymce.init({
            selector: '#default',
            license_key: 'gpl',
      
            suffix: '.min',
            base_url: 'node_modules/tinymce',


            promotion: false,
            
            plugins: 'table lists',

            toolbar: 'bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | table',

            
            image_title: true,
            automatic_uploads: true,
            
            images_upload_url: '/upload-handler.php',

           
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    const reader = new FileReader();

                    reader.addEventListener('load', () => {
                        const id = 'blobid' + (new Date()).getTime();
                        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        const base64 = reader.result.split(',')[1];
                        const blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        cb(blobInfo.blobUri(), { title: file.name });
                    });
                    reader.readAsDataURL(file);
                });

                input.click();
            },

            height: 400,
            language: 'cs' 
        });
    </script>

   






</body>

<?= $this->endSection()?>