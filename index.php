<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body class="vh-100">

    <div id="app">

        <header>
            <div class="container py-3">
                <img src="./img/logo-small.svg" alt="logo">
            </div>
        </header>

        <main>
            <div class="container mt-4">
                <div class="row row-gap-4">
                    <div v-for="(dischi, index) in data" :key="index" class="col-4">
                        <div class="card text-center ">
                            <img :src="dischi.poster" class="card-img-top" :alt="dischi.title">
                            <div class="card-body px-0 pb-0 text-light">
                                <h5 class="card-title fw-bold">{{ dischi.title }}</h5>
                                <p class="card-text">{{ dischi.author }}</p>
                                <p class="card-text fw-bold">{{ dischi.year }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>