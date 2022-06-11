<!DOCTYPE html>
<html>

<head>
    <title>Buku Hehe</title>

    <style>
        .carousel-caption {
            background-color: white;
            border-radius: 7px;
        }
        
        .carousel-caption p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div style="margin-top: 120px; text-align: center;">
        <h1 style="font-weight: bold">
            MARI MEMBACA!!
        </h1>
    </div>

    <!-- Carousel -->
    <div style="margin:auto; width:50%;" id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner" style="border-radius:10px">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://wallpapercave.com/wp/wp2036901.jpg" class="d-block w-100" alt="assets\img\book_carousel-1.png">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Al Imamul Luthfi</h5>
                    <p>Tetaplah santai walau deadline mengintai</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://wallpapercave.com/wp/wp2046075.jpg" class="d-block w-100" alt="assets\img\book_carousel-2.png">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Andrew Benedictus Jamesie</h5>
                    <p>Jika Anda paham, tetaplah mengejar SCL</p>
                    <p>Jika tidak, tetaplah berpura-pura paham</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/wp6651848.jpg" class="d-block w-100" alt="assets\img\book_carousel-3.png">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ariel Matius Surbakti</h5>
                    <p>Dengan membaca, kita dapat mengetahui isi suatu buku</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/wp6651900.jpg" class="d-block w-100" alt="assets\img\book_carousel-4.png">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Avin Chaili Salim</h5>
                    <p>Jika orang lain bisa, kenapa harus kita?</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel -->

    <div style="margin-top: 70px; text-align: center;">
        <h2 style="font-weight: bold">Lihat Daftar Buku Kami</h2>
        <a class="btn btn-info btn-lg" href="<?= base_url() ?>book" role="button">Daftar Buku</a>
    </div>

</body>

</html>