<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .width-10 {
            width: 10%;
            height: 10%;
        }

        .width-5 {
            width: 5%;
            height: 5%;
        }

        .width-40 {
            width: 40%;
            height: 40%;
        }

        .width-50 {
            width: 50%;
            height: 50%;
        }

        .width-100 {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: aliceblue;
        }

        .fs-7 {
            font-size: 12px;
        }

        .fs-0 {
            font-size: 50px;
        }

        .canvas {
            border-radius: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <div class="d-flex">
                    <div class="width-10 me-3">
                        <img src="beruang.jpg" class="width-100" alt="">
                    </div>
                    <div class="batas">
                        <a class="navbar-brand fw-bolder font-serif fs-4" href="#">EDU AIRLINE</a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-2">
                        <a class="nav-link active fs-4" aria-current="page" href="#">Menu1</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link fs-4" href="#">Menu2</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link fs-4" href="#">Menu3</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ms-4">
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit"><i class="fas fa-search logo"></i></button>
                </form>
            </div>
        </nav>
    </div>
    <div class="content">
        <section class="m-40">
            <h1 class="heading">HEADING</h1>
            <h1 class="subtitle">SUBTITLE</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus!</p>
            <div>
                <button id="btn1">Contoh Button 1</button>
                <button id="btn2">Contoh Button 2</button>
            </div>
        </section>
        <section class="m-40">
            <div class="batasGambar1">
                <img src="beruang.jpg" alt="" class="width-100">
            </div>
        </section>
    </div>
    <div class="text-center fs-2">
        <a href="#"><i class="fas fa-angle-double-down"></i></a>
    </div>
    <div class="d-flex justify-content-center mt-4 container">
        <select class="form-select me-4" id="menu">
            <option selected>Open this select menu</option>
            <option value="makanan">makanan</option>
            <option value="minuman">minuman</option>
        </select>
        <select class="form-select me-4" id="submenu1">
            <option selected>Select</option>
            <option value="makanan">Rendang</option>
            <option value="minuman">Ayam</option>
        </select>
        <select class="form-select me-4" id="submenu2">
            <option selected>Select</option>
            <option value="makanan">teh</option>
            <option value="minuman">jus</option>
        </select>
        <div class="">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search logo"></i></button>
        </div>
    </div>
    <section class="container border border-dark canvas mt-5 bg-light">
        <div class="container d-flex justify-content-center align-items-center row">
            <div class="col-3 mt-3">
                <div class="width-40 text-center">
                    <img src="beruang.jpg" alt="" class="width-100 rounded-pill"><br>
                    <p class="fs-5">Edu Airlines</p>
                </div>
            </div>
            <div class="col-5 mt-2">
                <div class="d-flex justify-content-center text-center">
                    <div class="">
                        <h1 class="fw-bold">15:30</h1>
                        <p class="fs-5">Jakarta</p>
                    </div>
                    <div class="fs-0 ms-3 mt-2 me-3 align-items-center">
                        <i class="fa fa-angle-right"></i>
                    </div>
                    <div class="">
                        <h1 class="fw-bold">18:15</h1>
                        <p class="fs-5">Singapore</p>
                    </div>
                </div>
            </div>
            <div class="col-3 text-end">
                <div class="d-flex justify-content-center">
                    <h3 class="text-primary fw-bold">IDR 2.475.000</h3>
                    <h3>/</h3>
                    <p class="fs-5">pcs</p>
                </div>
                <div class="">
                    <br>
                    <button class="btn btn-success fs-5 rounded-pill width-50">PILIH</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container border border-dark canvas mt-5 bg-light">
        <div class="container d-flex justify-content-center align-items-center row">
            <div class="col-3 mt-3">
                <div class="width-40 text-center">
                    <img src="beruang.jpg" alt="" class="width-100 rounded-pill"><br>
                    <p class="fs-5">Edu Airlines</p>
                </div>
            </div>
            <div class="col-5 mt-2">
                <div class="d-flex justify-content-center text-center">
                    <div class="">
                        <h1 class="fw-bold">15:30</h1>
                        <p class="fs-5">Jakarta</p>
                    </div>
                    <div class="fs-0 ms-3 mt-2 me-3 align-items-center">
                        <i class="fa fa-angle-right"></i>
                    </div>
                    <div class="">
                        <h1 class="fw-bold">18:15</h1>
                        <p class="fs-5">Singapore</p>
                    </div>
                </div>
            </div>
            <div class="col-3 text-end">
                <div class="d-flex justify-content-center">
                    <h3 class="text-primary fw-bold">IDR 2.475.000</h3>
                    <h3>/</h3>
                    <p class="fs-5">pcs</p>
                </div>
                <div class="">
                    <br>
                    <button class="btn btn-success fs-5 rounded-pill width-50">PILIH</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container border border-dark canvas mt-5 bg-light">
        <div class="container d-flex justify-content-center align-items-center row">
            <div class="col-3 mt-3">
                <div class="width-40 text-center">
                    <img src="beruang.jpg" alt="" class="width-100 rounded-pill"><br>
                    <p class="fs-5">Edu Airlines</p>
                </div>
            </div>
            <div class="col-5 mt-2">
                <div class="d-flex justify-content-center text-center">
                    <div class="">
                        <h1 class="fw-bold">15:30</h1>
                        <p class="fs-5">Jakarta</p>
                    </div>
                    <div class="fs-0 ms-3 mt-2 me-3 align-items-center">
                        <i class="fa fa-angle-right"></i>
                    </div>
                    <div class="">
                        <h1 class="fw-bold">18:15</h1>
                        <p class="fs-5">Singapore</p>
                    </div>
                </div>
            </div>
            <div class="col-3 text-end">
                <div class="d-flex justify-content-center">
                    <h3 class="text-primary fw-bold">IDR 2.475.000</h3>
                    <h3>/</h3>
                    <p class="fs-5">pcs</p>
                </div>
                <div class="">
                    <br>
                    <button class="btn btn-success fs-5 rounded-pill width-50">PILIH</button>
                </div>
            </div>
        </div>
    </section>
    <br>
    <footer class="bd-footer mt-5" style="background-color:#00549c; color:#f9f9f9;">
        <div class="container d-flex justify-content-between">
            <div class=" mt-5">
                <div class="width-40">
                    <img src="beruang.jpg" class="width-100" alt=""><br>
                </div>
                <div class="">
                    <ul class="list-unstyled text-white">
                        <li class="mt-3">+62 873 8765 2453</li>
                        <li>Semarang Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="mt-5">
                <ul class="d-flex justify-content-center">
                    <li class="ms-2 fs-4" type="none">
                        <a class="nav-link text-white" href="#">Menu1</a>
                    </li>
                    <li class="nav-item ms-2 fs-4" type="none">
                        <a class="nav-link text-white" href="#">Menu2</a>
                    </li>
                    <li class="nav-item ms-2 fs-4" type="none">
                        <a class="nav-link text-white" href="#">Menu3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <p class="text-white mb-1">@2022 ZenTicket. All right Reserved</p>
            <br>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        // let submenu1 = document.getElementById("submenu1");
        // let submenu2 = document.getElementById("submenu2");
        // document.getElementById("menu").addEventListener('change', function(e) {
        //     e.target.disabled = true;
        //     if (e.target.value == "makanan") {
        //         submenu1.classList.remove("d-none");
        //         submenu2.classList.add("d-none");
        //     } else {
        //         submenu2.classList.remove("d-none");
        //         submenu1.classList.add("d-none");
        //     }
        // });
    </script>

</body>

</html>