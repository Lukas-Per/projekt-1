<?= $this->extend("layout/template")?>
<?= $this->section("content")?>
<body>
   
    <div class="container my-5">
        <h1 class="text-center text-white bg-primary rounded py-3 px-4 mb-4">Ceník zájezdů</h1>
        <p class="text-center mb-4">Aktuální termíny a ceny za osobu. Cena zahrnuje dopravu a ubytování.</p>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Destinace</th>
                        <th>Termín</th>
                        <th>Nocí</th>
                        <th>Strava</th>
                        <th>Cena / osoba</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kréta</td>
                        <td>10. 7. – 17. 7. 2026</td>
                        <td>7</td>
                        <td>All inclusive</td>
                        <td>15 490 Kč</td>
                    </tr>
                    <tr>
                        <td>Řím</td>
                        <td>12. 7. – 19. 7. 2026</td>
                        <td>7</td>
                        <td>Polopenze</td>
                        <td>18 990 Kč</td>
                    </tr>
                    <tr>
                        <td>Londýn</td>
                        <td>1. 9. – 8. 9. 2026</td>
                        <td>7</td>
                        <td>Bez stravy</td>
                        <td>19 990 Kč</td>
                    </tr>
                    <tr>
                        <td>Barcelona</td>
                        <td>15. 8. – 22. 8. 2026</td>
                        <td>7</td>
                        <td>Polopenze</td>
                        <td>17 990 Kč</td>
                    </tr>
                    <tr>
                        <td>Istanbul</td>
                        <td>5. 8. – 12. 8. 2026</td>
                        <td>7</td>
                        <td>Snídaně</td>
                        <td>16 490 Kč</td>
                    </tr>
                    <tr>
                        <td>Malta</td>
                        <td>3. 6. – 10. 6. 2026</td>
                        <td>7</td>
                        <td>All inclusive</td>
                        <td>16 990 Kč</td>
                    </tr>
                    <tr>
                        <td>Paříž</td>
                        <td>20. 6. – 24. 6. 2026</td>
                        <td>4</td>
                        <td>Snídaně</td>
                        <td>14 990 Kč</td>
                    </tr>
                    <tr>
                        <td>Santorini</td>
                        <td>18. 7. – 25. 7. 2026</td>
                        <td>7</td>
                        <td>Snídaně</td>
                        <td>21 490 Kč</td>
                    </tr>
                    <tr>
                        <td>Benátky</td>
                        <td>8. 6. – 13. 6. 2026</td>
                        <td>5</td>
                        <td>Snídaně</td>
                        <td>16 490 Kč</td>
                    </tr>
                    <tr>
                        <td>Praha</td>
                        <td>2. 5. – 6. 5. 2026</td>
                        <td>4</td>
                        <td>Snídaně</td>
                        <td>8 990 Kč</td>
                    </tr>
                    <tr>
                        <td>Amsterdam</td>
                        <td>14. 9. – 19. 9. 2026</td>
                        <td>5</td>
                        <td>Bez stravy</td>
                        <td>14 490 Kč</td>
                    </tr>
                    <tr>
                        <td>Dubrovník</td>
                        <td>22. 8. – 29. 8. 2026</td>
                        <td>7</td>
                        <td>Polopenze</td>
                        <td>18 490 Kč</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="form.html" class="btn btn-primary">Rezervovat zájezd</a>
        </div>
    </div>

  
</body>

<?= $this->endSection()?>
