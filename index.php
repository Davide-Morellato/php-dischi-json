<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>

<body>
    <!-- importo Vue tramite CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <header class="bg-deepblue text-white height-60 pt-3">
            <!-- includo l'header sfruttando include __DIR__ . '/header.php' -->
            <?php include  __DIR__ . '/header.php' ?>    
        </header>
        <main class="py-5 bg-grayblue">
            <div class="container">
                <div class="row gap-2 justify-content-center">
                    <!-- 7. creo un ciclo v-for per ciclare l'array chiamato con axios in app.js -->
                    <div class="col-3" v-for="(disk, i) in disks" :key="i">                    
                        <div class="card h-100 p-3 bg-darkblue text-white">
                            <!-- v-bind su src con template literal -->
                            <img class="card-img-top" :src="`${disk.poster}`" :alt="`${disk.poster}`">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{disk.title}}</h5>
                                <p class="card-text">{{disk.author}}</p>
                                <h6 class="card-text">
                                    {{disk.year}} - {{disk.genre}}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- collego il file js -->
    <script src="./app.js"></script>
</body>

</html>