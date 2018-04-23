<?php 
include("auth.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tour-addict</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:400,500,600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body">
    <nav class="navbar navbar-light navbar-expand-lg" id="nav">
        <div class="container-fluid"><a class="navbar-brand" href="#" data-aos="fade-up" data-aos-duration="700" style="background-image:url(&quot;assets/img/ta5-01.png&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;width:190px;height:50px;"></a>
            <button
                class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-end" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="#"><button class="btn btn-primary nav-link bt-anim" type="button" data-aos="fade-up" data-aos-duration="700" data-aos-delay="150" data-toggle="modal" data-target="#modal-tambah" style="color:#29abe2;">Tambah</button></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="#"><button class="btn btn-primary nav-link bt-anim" type="button" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" data-toggle="modal" data-target="#modal-map" style="color:#29abe2;" id="tipe" value="Usulan">Usulkan atau Adukan</button></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="logout.php"><button class="btn btn-primary nav-link bt-anim" type="button" data-aos="fade-up" data-aos-duration="700" data-aos-delay="750" data-toggle="modal" data-target="#modal1" style="color:#29abe2;"><?php echo $_SESSION['username']; ?></button></a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <section data-aos="fade" data-aos-duration="700" data-aos-delay="300" id="sec-1" style="width:100%;height:75vh;background-position:center;background-size:cover;">
        <div style="width:100%;height:75vh;"><img class="back-img" style="width:100%;height:75vh;background-image:url(&quot;assets/img/sunrise-3283434_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
            <div class="d-flex flex-column justify-content-center align-items-center text-in-img"
                style="width:100%;height:75vh;">
                <div class="row" style="height:70px;">
                    <div class="col">
                        <h1 style="font-weight:normal;">Tour Addict</h1>
                    </div>
                </div>
                <div class="row" style="width:100%;">
                    <div class="col d-flex justify-content-center align-items-center">
                        <p class="text-center p-in-img">Tour Addict membantu Anda untuk menemukan lokasi wisata terbaik di Yogyakarta.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><input type="search" class="ipt"></div>
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary btn-in-img" type="button" data-aos="fade" data-aos-duration="700" data-aos-delay="450" data-aos-once="true" data-toggle="modal" data-target="#modal-res">Temukan</button></div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-flex justify-content-center align-items-center" id="sec-2">
        <div class="container d-flex flex-column justify-content-center align-items-center align-content-center" style="margin-top:40px;">
            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                    <div class="card th-img">
                        <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/prambanan-1301726_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                        <div class="card-body img-p">
                            <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="700" data-aos-delay="150" data-aos-once="true">
                    <div class="card th-img">
                        <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/lagoon-2349401_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                        <div class="card-body">
                            <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" data-aos-once="true">
                    <div class="card align-items-center th-img">
                        <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/dawn-3321127_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                        <div class="card-body">
                            <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="height:70px;">
                <div class="col d-flex justify-content-center align-items-center align-content-center"><button class="btn btn-primary btn-light-backg" type="button" data-aos="fade" data-aos-duration="700" data-aos-delay="450" data-aos-once="true" data-toggle="modal" data-target="#modal-more">Lokasi lainnya</button></div>
            </div>
        </div>
    </section>
    <section data-aos="fade" data-aos-duration="700" data-aos-once="true" id="sec-1" style="width:100%;height:75vh;background-position:center;background-size:cover;">
        <div style="width:100%;height:75vh;"><img class="back-img" style="width:100%;height:75vh;background-image:url(&quot;assets/img/surfer-2193859_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
            <div class="d-flex flex-column justify-content-center align-items-center text-in-img"
                style="width:100%;height:75vh;">
                <div class="row" style="width:100%;">
                    <div class="col d-flex justify-content-center" style="width:100%;">
                        <p class="text-center p-in-img">Anda bisa memberikan usulan dan saran atau melaporkan tindak perusakan dan kejahatan terhadap lokasi wisata disini.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary btn-in-img" type="button">Pengaduan</button></div>
                    <div class="col"><button class="btn btn-primary btn-in-img" type="button">Usulan</button></div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="fade" data-aos-duration="700" data-aos-once="true" id="sec-1" style="width:100%;height:75vh;">
        <div style="width:100%;height:75vh;background-color: #ffffff;">
            <div class="d-flex flex-column justify-content-center align-items-center text-in-img"
                style="width:100%;height:75vh;">
                <div class="row" style="width:100%;">
                    <div class="col d-flex justify-content-center" style="color: black;">
                        <p class="p-in-img">Atau Anda bisa menambahkan lokasi wisata baru agar bisa dikenal publik.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary btn-in-img" type="button">Tambah</button></div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex flex-column justify-content-center align-items-center footer-basic" style="height:13px;">
        <footer>
            <p class="copyright">Tour Addict Team © 2018</p>
        </footer>
    </div>
    <div class="modal fade justify-content-center" role="dialog" tabindex="-1" id="modal-map">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content" style="height: auto;">
                <div class="modal-header" style="background-color:#29abe2;">
                    <h4 class="modal-title modal-head" style="color:rgb(255,255,255);" id="hasil"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                    <?php
                    include 'maps.php';
                    ?>
                    <form method="POST" action="simpanlokasi.php" enctype="multipart/form-data">
                        <input type="hidden" id="id_user" name="id_user" autofocus="" class="modal-ipt" value="<?php echo $_SESSION['id']; ?>">
                        <p><input type="hidden" id="x" name="x" autofocus="" class="modal-ipt" >
                        <p><input type="hidden" id="y" name="y" autofocus="" class="modal-ipt" >
                        <p><input type="hidden" id="tipe" name="tipe" value="usulan" autofocus="" class="modal-ipt" />
                        <p class="modal-p">Jenis: 
                        <input type=radio id="jenis" name="jenis" value="pengaduan" class="modal-ipt" required/>Adukan
                        <input type=radio id="jenis" name="jenis" value="usulan" class="modal-ipt " required/>Usulkan</p>
                        <p class="modal-p">Nama:<br>
                        <input type=text id="judul" size="32" name="judul"  autofocus="" class="modal-ipt modal-maps" required/></p>
                        <p class="modal-p">Deskripsi:<br>
                        <textarea cols=24 rows=3 id="deskripsi" name="des"  autofocus="" class="modal-ipt modal-maps" required/></textarea></p>
                        <p class="modal-p">Foto:<br>
                        <input type="file" id="foto" name="foto"  autofocus="" class="modal-ipt modal-maps" required/></p>
                        <button id="tombol_simpan" class="btn btn-primary btn-in-img" type="submit" style="margin:auto;">Simpan</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade justify-content-center" role="dialog" tabindex="-1" id="modal-tambah">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content" style="height: auto;">
                <div class="modal-header" style="background-color:#29abe2;">
                    <h4 class="modal-title modal-head" style="color:rgb(255,255,255);" id="hasil"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                    <form method="POST" action="tambahinfo.php" enctype="multipart/form-data">
                        <input type="hidden" id="id_user" name="id_user" autofocus="" class="modal-ipt" value="<?php echo $_SESSION['id']; ?>">
                        <p class="modal-p">Nama Wisata:<br>
                        <input type=text id="judul" size="32" name="judul"  autofocus="" class="modal-ipt modal-maps" required/></p>
                        <p class="modal-p">Alamat:<br>
                        <input type=text id="alamat" size="32" name="alamat"  autofocus="" class="modal-ipt modal-maps" required/></p>
                        <p class="modal-p">Perkiraan Total Biaya:<br>
                        <input type=text id="fee" size="32" name="fee"  autofocus="" class="modal-ipt modal-maps" placeholder="Rp" required/></p>
                        <p class="modal-p">Deskripsi:<br>
                        <textarea cols=24 rows=3 id="deskripsi" name="des"  autofocus="" class="modal-ipt modal-maps" required/></textarea></p>
                        <p class="modal-p">Foto:<br>
                        <input type="file" id="foto" name="foto"  autofocus="" class="modal-ipt modal-maps" required/></p>
                        <button id="tombol_simpan" class="btn btn-primary btn-in-img" type="submit" style="margin:auto;">Simpan</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade justify-content-center" role="dialog" tabindex="-1" id="modal-login">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#29abe2;color:rgb(255,255,255);">
                    <h4 class="modal-title" style="font-weight:normal;">Login</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center" style="height:0;min-height:314px;">
                    <p class="modal-p" style="margin-top:0;">Username</p><input type="text" autofocus="" class="modal-ipt">
                    <p class="modal-p" style="margin-top:35px;">Password</p><input type="password" class="modal-ipt"><button class="btn btn-primary btn-in-img" type="button" style="margin-top:19px;">Login</button></div>
                <div class="modal-footer d-flex flex-column justify-content-end align-items-end">
                    <p class="modal-p" style="margin-right:14px;color:rgb(157,157,157);">Belum punya akun?</p><a href="daftar.html"><button class="btn btn-primary nav-link bt-anim" type="button" data-toggle="modal" data-target="#modal1" style="color:#29abe2;margin-top:-6px;">Daftar</button></a></div>
            </div>
        </div>
    </div>
    <div class="modal fade justify-content-center" role="dialog" tabindex="-1" id="modal-more">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#29abe2;color:rgb(255,255,255);">
                    <h4 class="modal-title" style="font-weight:normal;">Lokasi Wisata</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center" style="height:0;min-height:500px;">
                    <div class="container" id="thumb" style="height:1000px;">
                        <div class="row">
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/prambanan-1301726_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body img-p">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal-map">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/lagoon-2349401_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/dawn-3321127_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/buildings-203194_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body img-p">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/jeep-3327095_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/landscape-330112_1280.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/sunset-3283437_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body img-p">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/surfer-2212948_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/mosque-3321512_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-column justify-content-end align-items-end"></div>
            </div>
        </div>
    </div>
    <div class="modal fade justify-content-center" role="dialog" tabindex="-1" id="modal-res">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#29abe2;color:rgb(255,255,255);">
                    <h4 class="modal-title" style="font-weight:normal;">Hasil Pencarian</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center" style="height:0;min-height:500px;">
                    <div class="container" id="thumb" style="height:1000px;">
                        <div class="row">
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/prambanan-1301726_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body img-p">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal-map">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/lagoon-2349401_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/dawn-3321127_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/buildings-203194_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body img-p">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/jeep-3327095_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/landscape-330112_1280.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/sunset-3283437_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body img-p">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/surfer-2212948_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                            <div class="col">
                                <div class="card th-img">
                                    <h4 class="text-center th-h">Title</h4><img class="card-img w-100 d-block loc-img" style="background-image:url(&quot;assets/img/mosque-3321512_1920.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <p class="card-text th-p">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </div><button class="btn btn-primary btn-block btn-map" type="button" data-toggle="modal" data-target="#modal1">Lihat Lokasi</button></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-column justify-content-end align-items-end"></div>
            </div>
        </div>
    </div>
    <div class="modal fade justify-content-center" role="dialog" tabindex="-1" id="modal-map">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#29abe2;color:rgb(255,255,255);">
                    <h4 class="modal-title" style="font-weight:normal;">Peta</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center" style="height:0;min-height:450px;">
                    <div class="container" style="height:1000px;"><iframe allowfullscreen="" frameborder="0" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDP0vC9XyDeI8bCNGveiUFRmJwGv7yOzKI&amp;q=Yogyakarta&amp;zoom=11"></iframe></div>
                </div>
                <div class="modal-footer d-flex flex-column justify-content-end align-items-end"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>