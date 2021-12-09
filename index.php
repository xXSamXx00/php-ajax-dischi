<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Dischi</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="px-3 py-2">
        <img src="./assets/spotify-logo.svg" alt="Logo Spotify" height="45">
    </header>
    <main class="px-3 py-5">
        <div id="app" class="row gx-5 my-5 justify-content-center">
            <div class="col-md-2 text-center card_music my-3" v-for="album in albums">
                <div class="content p-4">
                    <img :src="album.poster" :alt="album.author" class="img-fluid">
                    <h2 class="title mt-3">{{ album.title }}</h2>
                    <p class="text mt-4">{{ album.author }}<br>{{ album.year }}</p>
                </div>
            </div>
        </div>
    </main>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>