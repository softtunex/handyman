<?php

include_once "./include/indexheader.php";
$cities = ["Aiyedaade	Gbongan","Aiyedire	Ile Ogbo","Atakunmosa East	Iperindo","Atakunmosa West	Osu","Boluwaduro	Otan Ayegbaju","Boripe	Iragbiji","Ede North	Oja Timi","Ede South	Ede","Egbedore	Awo","Ejigbo	Ejigbo","Ife Central	Ile-Ife","Ife East	Oke-Ogbo","Ife North	Ipetumodu","Ife South	Ifetedo","Ifedayo	Oke-Ila Orangun","Ifelodun	Ikirun","Ila	Ila Orangun","Ilesa East	Ilesa","Ilesa West	Ereja Square","Irepodun	Ilobu","Irewole	Ikire","Isokan	Apomu","Iwo	Iwo","Obokun	Ibokun","Odo Otin	Okuku","Ola Oluwa	Bode Osi","Olorunda	Igbonna, Osogbo","Oriade	Ijebu-Jesa","Orolu	Ifon-Osun","Osogbo	Osogbo"];

?>

<body>
<hr>
<div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="card card-image">
                    <div class="card-body">
                        <div class="card-text text-position text-center text-white">
                            <h1>The Best Quality<br> In Shortest Time</h1>
                        </div>

                        <div id="owl_demo_2" class="owl-carousel col-full owl-theme owl-carousel-hover">
                            <div class="item"><img class="img-height" src="356-3569285_plumber-png.png" alt="Owl Image">
                            </div>
                            <div class="item"><img class="img-height" src="IMGBIN_handyman-stock-photography-png_k1a4XeWG.png" alt="Owl Image">
                            </div>
                            <div class="item"><img class="img-height" src="IMGBIN_house-painter-and-decorator-baxter-decorating-marietta-png_j8ZMWMjp.png" alt="Owl Image">
                            </div>
                            <div class="item"><img class="img-height" src="pngkit_mechanic-png_1207738.png" alt="Owl Image">
                            </div>
                            <div class="item"><img class="img-height" src="pngkit_welder-png_10119275.png" alt="Owl Image">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="form-group col-5">
            <label for="">City</label>
            <select class="form-control" name="city" id="city">
                <option value="none">-- Select City --</option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-5">
            <label for="">Who's Required</label>
            <select class="form-control" name="profession" id="profession">
                <option value="none">Select Profession</option>
                <option value="electrician">Electrician</option>
                <option value="plumber">Plumber</option>
                <option value="mobile">Mobile Repairer</option>
            </select>
        </div>

        <div class="form-group col-2">
            <label for="">Action</label>
            <button id="search" class="form-control btn btn-success" type="button">Search</button>
        </div>
    </div>

    <div class="table-responsive">
        <table id="providers" class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='5' style="color:blac">Select city and profession..</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
 <div class="container-fluid">
        <h4 class="pt-1 text-center" id="service">OUR SERVICE</h4>
        <div class="row pt-2 mt-1">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1  row-borde">
                <div class="card">
                    <img src="car-auto-mechanic-automobile-repair-shop-chevrolet-car-mechanic-png-800_662.png" class="card-img img-fluid">
                    <h4 class="card-title text-center">Mechanical Service</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, ex?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1  row-border">
                <div class="card">
                    <img src="car-auto-mechanic-automobile-repair-shop-chevrolet-car-mechanic-png-800_662.png" class="card-img img-fluid">
                    <h4 class="card-title text-center">Carpentry</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, ex?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1  row-border">
                <div class="card">
                    <img src="car-auto-mechanic-automobile-repair-shop-chevrolet-car-mechanic-png-800_662.png" class="card-img img-fluid">
                    <h4 class="card-title text-center">Plumbing</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, ex?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1  row-border">
                <div class="card">
                    <img src="car-auto-mechanic-automobile-repair-shop-chevrolet-car-mechanic-png-800_662.png" class="card-img img-fluid">
                    <h4 class="card-title text-center">painting</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, ex?</p>
                </div>
            </div>
            <button class="button mt-4 p-2 text-uppercase" type="submit">Check all Services</button>
        </div>
    </div>
    <div class="container">
        <h4 class="pb-1 text-center" id="about">About Us</h4>
        <div class="row px-5 mr-auto ml-auto">
            <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                <img src="kelvyn-ornettte-sol-marte-yz6JxUK_NeQ-unsplash.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 px-0 pb-5">
                <div class="card-body pt-md-0">
                    <div class="row">
                        <div class="col-2">
                            <div class="rounded-circle i-size text-white card-background-color"><i class="fas fa-plug bb"></i></div>
                        </div>
                        <p class="col-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis autem illo!</p>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="rounded-circle i-size text-white card-background-color"><i class="fas fa-plug bb"></i></div>
                        </div>
                        <p class="col-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab vitae facere obcaecati expedita! Animi, vero.</p>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="rounded-circle i-size text-white card-background-color"><i class="fas fa-plug bb"></i></div>
                        </div>
                        <p class="col-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, quos.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.js"></script>
<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='5'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='5'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td><img style='height:150px' src='images/" + provider
                                .photo +
                                "'/></td>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 + ",<br>" + provider.adder2 +
                                ",<br>" +
                                provider.city + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                "<td><a href='booking.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
        });
    });
</script>
<link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/proper.js"></script>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="owl-data.js"></script></body>
<?php include_once "./include/footer.php";
