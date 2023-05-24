<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body class="vh-100">

    <div id="app">

        <header>
            <div class="container-fluid py-3">
                <img class="ms-5" src="./img/logo-small.svg" alt="logo">
            </div>
        </header>

        <main>
            <div class="container mt-4 overflow-auto">
                <div class="row row-cols-3 row-gap-4">
                    <div v-for="(disc, index) in data" :key="index" class="col-4">
                        <a href="" class="d-inline-block text-decoration-none" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <div class="card h-100 text-center" @click="clickCard(index)">
                                <img :src="disc.poster" class="card-img-top" :alt="disc.title">
                                <div class="card-body px-0 pb-0 text-light">
                                    <h5 class="card-title fw-bold">{{ disc.title }}</h5>
                                    <p class="card-text mb-2">{{ disc.author }}</p>
                                    <p class="card-text fw-bold">{{ disc.year }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-button" data-bs-theme="dark">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-content">
                        <div class="card h-100 text-center">
                            <img :src="discDetails.poster" class="card-img-top" :alt="discDetails.title">
                            <div class="card-body px-0 pb-0 text-light">
                                <h5 class="card-title fw-bold">{{ discDetails.title }}</h5>
                                <p class="card-text mb-2">{{ discDetails.author }}</p>
                                <p class="card-text fw-bold">{{ discDetails.year }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>