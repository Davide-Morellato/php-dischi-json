<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Dischi</title>
</head>

<body>
    <!-- importo Vue tramite CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <!-- 7. creo un ciclo v-for per ciclare l'array chiamato con axios in app.js -->
                        <div class="card" v-for="(disk, i) in disks" :key="i">
                            <!-- v-bind su src con template literal -->
                            <img class="card-img-top" :src="`${disk.poster}`" :alt="`${disk.poster}`">
                            <div class="card-body">
                                <h5 class="card-title">{{disk.title}}</h5>
                                <p class="card-text">{{disk.author}}</p>
                                <p>
                                    {{disk.year}} - {{disk.genre}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- collego il file js -->
    <script src="./app.js"></script>
</body>

</html>