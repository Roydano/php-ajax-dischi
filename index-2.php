<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="css/style.css">


    <!-- Link Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Link Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <title>Dischi con Vue</title>
</head>
<body>

<div id="app">

    <div class="container">
        <div class="row">
            <div v-for="music in dischi" class="col-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <img :src="music.poster" class="card-img-top" alt="music.title">
                    <div class="card-body">
                        <h5 class="card-title">{{music.title}}</h5>
                        <p class="card-text">{{music.author}}</p>
                        <p class="card-text">{{music.year}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>






<!-- Link My JS -->
<script src="js/script.js"></script>

</body>
</html>