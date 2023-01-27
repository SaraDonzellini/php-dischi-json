<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles/style.css">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js" integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
</head>

<body>
    <div id="app">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-4" v-for=" item in diskList " >
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" :src="item.poster" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-text">
                                    <p>Titolo: {{ item.title }}</p>
                                    <p>Autore: {{ item.author }}</p>
                                    <p>Genere: {{ item.genre }}</p>
                                    <p>Anno: {{ item.year}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./script.js"></script>
</body>

</html>