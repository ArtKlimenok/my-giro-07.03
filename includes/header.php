<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="media/bootstrap/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="media/style.css">
    <title>My-Giro - гироскутеры</title>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-sm">
            <a class="navbar-brand" href="#">
                <img src="media/img/logo-white.png" alt="" width="160" height="100" class="d-inline-block align-text-top">
            </a>
            <p class="text-center mt-3">
            <a style="text-decoration: none"href="tel:+7(123)456-78-90">+7(123)456-78-90</a>
            - контактный номер. Москва, Набережная 2 оф. 142</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       Заказать звонок
                    </button>
              


            </div>
        </div>
    </nav>
    <div class="container-sm">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Укажите свой номер</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="input-group mb-3 pt-3 ps-3 pe-3">
                    <span class="input-group-text" id="addon-wrapping">+7</span>
                    <input type="text" class="form-control" placeholder="(123)-456-78-90" aria-label="(123)-456-78-90" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Отправить</button>
                    </div>
                    <div class="modal-body">
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

</body>