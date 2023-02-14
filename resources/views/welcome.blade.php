<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BGéSZC Eötvös Loránd Technikum - Beiratkozás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>

    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 text-md-start text-center">
                    <img src="https://eotvosszki.hu/_next/image?url=https%3A%2F%2Fbg-eotvos.cms.intezmeny.edir.hu%2Fuploads%2Fthumbnail_elg_logo_8fc4582687.PNG&w=256&q=90" alt="Eötvös Logo" class="img-fluid">
                </div>
                <div class="col-12 col-md-9 text-md-start text-center">
                    <h1>BGéSZC Eötvös Loránd Technikum - Beiratkozás</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="bg-light mt-3 p-3 border rounded">
                    <h2>Tanuló személyes adatai</h2>
                    <div>
                        <label for="oktatasi_azonosito">Oktatási azonosító:</label>
                        <input type="text" name="oktatasi_azonosito" id="oktatasi_azonosito" class="form-control" maxlength="11">
                        <span class="small fst-italic">Pl.: 11 számjegy: 70599002701</span>
                    </div>

                    <div class="mt-3">
                        <label for="taj_szam_1">Taj-szám:</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="taj_szam_1" id="taj_szam_1" maxlength="3" class="form-control">
                            </div>
                            <div class="col">
                                <input type="text" name="taj_szam_2" id="taj_szam_2" maxlength="3" class="form-control">
                            </div>
                            <div class="col">
                                <input type="text" name="taj_szam_3" id="taj_szam_3" maxlength="3" class="form-control">
                            </div>
                        </div>
                        <span class="small fst-italic">Pl.: 012 345 678</span>
                    </div>


                    <div class="mt-3">
                        <label for="tanulo_adoazonosito_jel">Adóazonosító jel:</label>
                        <input type="text" name="tanulo_adoazonosito_jel" id="tanulo_adoazonosito_jel" class="form-control" maxlength="10">
                        <span class="small fst-italic">Pl.: 10 számjegy: 8123465789</span>
                    </div>

                    <div class="mt-3">
                        <label for="tanulo_emailcim">E-mail cím:</label>
                        <input type="email" name="tanulo_emailcim" id="tanulo_emailcim" class="form-control" maxlength="100">
                        <span class="small fst-italic">Pl.: gerzsonka@domain.hu</span>
                    </div>

                    <div class="mt-3">
                        <label for="tanulo_vezeteknev">Vezetéknév:</label>
                        <input type="text" name="tanulo_vezeteknev" id="tanulo_vezeteknev" class="form-control" maxlength="100">
                        <span class="small fst-italic">Pl.: Kovács</span>
                    </div>

                    <div class="mt-3">
                        <label for="tanulo_keresztnev">Keresztnév:</label>
                        <input type="text" name="tanulo_keresztnev" id="tanulo_keresztnev" class="form-control" maxlength="100">
                        <span class="small fst-italic">Pl.: Gerzsonka</span>
                    </div>

                    <div class="mt-3">
                        <label for="tanulo_szuletesi_hely">Születési hely:</label>
                        <input type="text" name="tanulo_szuletesi_hely" id="tanulo_szuletesi_hely" class="form-control" maxlength="100">
                        <span class="small fst-italic">Pl.: Budapest IX.</span>
                    </div>

                    <div class="mt-3">
                        <label for="tanulo_szuletesi_ido">Születési idő:</label>
                        <input type="date" name="tanulo_szuletesi_ido" id="tanulo_szuletesi_ido" class="form-control">
                        <span class="small fst-italic">Pl.: 2009-04-12</span>
                    </div>
                    

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="bg-light mt-3 p-3 border rounded">
                    <h2>Tanuló állandó lakhelye</h2>

                    <div>
                        <div class="row">
                            <div class="col-3">
                                <label for="tanulo_allando_lh_irsz">Irányítószám</label>
                                <input type="number" name="tanulo_allando_lh_irsz" id="tanulo_allando_lh_irsz" class="form-control" maxlength="4">
                                <span class="small fst-italic">Pl.: 1214</span>
                            </div>
                            <div class="col-9">
                                <label for="tanulo_allando_lh_telepules">Település:</label>
                                <input type="text" name="tanulo_allando_lh_telepules" id="tanulo_allando_lh_telepules" class="form-control" maxlength="100">
                                <span class="small fst-italic">Pl.: Budapest XX.</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-8">
                                <label for="tanulo_allando_lh_kozterulet_nev">Közterület neve:</label>
                                <input type="text" name="tanulo_allando_lh_kozterulet_nev" id="tanulo_allando_lh_kozterulet_nev" class="form-control" maxlength="100">
                                <span class="small fst-italic">Pl.: Kossuth Lajos.</span>
                            </div>
                            <div class="col-4">
                                <label for="tanulo_allando_lh_kozterulet_jellege">Közterület jellege:</label>
                                <input type="text" name="tanulo_allando_lh_kozterulet_jellege" id="tanulo_allando_lh_kozterulet_jellege" class="form-control" maxlength="100">
                                <span class="small fst-italic">Pl.: utca</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="tanulo_allando_lh_kozterulet_hazszam">Házszám, emelet, ajtó stb.:</label>
                                <input type="text" name="tanulo_allando_lh_kozterulet_hazszam" id="tanulo_allando_lh_kozterulet_hazszam" class="form-control" maxlength="30">
                                <span class="small fst-italic">Pl.: 89/a</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="bg-light mt-3 p-3 border rounded">
                    <h2>Tanuló ideiglenes lakhelye</h2>

                    <div>
                        <div class="row">
                            <div class="col-3">
                                <label for="tanulo_ideiglenes_lh_irsz">Irányítószám</label>
                                <input type="number" name="tanulo_ideiglenes_lh_irsz" id="tanulo_ideiglenes_lh_irsz" class="form-control" maxlength="4">
                                <span class="small fst-italic">Pl.: 1214</span>
                            </div>
                            <div class="col-9">
                                <label for="tanulo_ideiglenes_lh_telepules">Település:</label>
                                <input type="text" name="tanulo_ideiglenes_lh_telepules" id="tanulo_ideiglenes_lh_telepules" class="form-control" maxlength="100">
                                <span class="small fst-italic">Pl.: Budapest XX.</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-8">
                                <label for="tanulo_ideiglenes_lh_kozterulet_nev">Közterület neve:</label>
                                <input type="text" name="tanulo_ideiglenes_lh_kozterulet_nev" id="tanulo_ideiglenes_lh_kozterulet_nev" class="form-control" maxlength="100">
                                <span class="small fst-italic">Pl.: Kossuth Lajos.</span>
                            </div>
                            <div class="col-4">
                                <label for="tanulo_ideiglenes_lh_kozterulet_jellege">Közterület jellege:</label>
                                <input type="text" name="tanulo_ideiglenes_lh_kozterulet_jellege" id="tanulo_ideiglenes_lh_kozterulet_jellege" class="form-control" maxlength="100">
                                <span class="small fst-italic">Pl.: utca</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="tanulo_ideiglenes_lh_kozterulet_hazszam">Házszám, emelet, ajtó stb.:</label>
                                <input type="text" name="tanulo_ideiglenes_lh_kozterulet_hazszam" id="tanulo_ideiglenes_lh_kozterulet_hazszam" class="form-control" maxlength="30">
                                <span class="small fst-italic">Pl.: 89/a</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>