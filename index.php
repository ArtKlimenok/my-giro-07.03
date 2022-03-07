<?php require_once 'includes/header.php'//подключение хэдера?>

<head>
<script>var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})<script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script type="text/javascript">
 $(function() {
 $(window).scroll(function() {
 if($(this).scrollTop() != 0) {
 $('#toTop').fadeIn();
 } else {
 $('#toTop').fadeOut();
 }
 });
 $('#toTop').click(function() {
 $('body,html').animate({scrollTop:0},800);
 });
 });
 </script>

</head>

<body>

<div class="container">
  <div class="row g-3">
    <div class="col-2">
      <div class="p-3 "> <?php require_once 'includes/slider.php'//подключение слайдера?>
      </div>
    </div>
  </div>
</div>


<div class="container-sm">  
<div class="row">
<p class="fs-2">Особенности</p>
<?php require_once 'includes/gyrosn.php' //минусы?>
</div>
</div>

<div class="container-sm">  
<div class="row">
<?php require_once 'includes/gyrosp.php' //плюсы?>
</div>
</div>

<hr>

<div class="container-sm">  
<div class="row">
<p class="fs-2">Товары</p>
<?php require_once 'includes/lots.php' //подключение списка товаров?>
</div>
</div>

<hr>

<div class="container-sm"> 
<p class="fs-2">О нас</p>
<?php require_once 'includes/cons.php' //вывод описания?>
    <div class="col-6">
        <p>В нашем интернет-магазине представлен большой выбор гироскутеров, сигвеев и электросамокатов от известных мировых производителей.
Все товары, представленные на нашем сайте, отобраны лучшими специалистами в этой области.
Купить гироскутер, электросамокат или сигвей недорого, Вы можете в нашем интернет-магазине в любое время, когда Вам удобно. 
Доставка заказов осуществляется бесплатно, в любую точку России.
Так же, вы можете заказать гироскутер, сигвей или электросамокат по низкой цене, позвонив нам.
Или сделайте заказ, пообщавшись с нашим онлайн-консультантом консультантам.
Продажа гироскутеров, электросамокатов и сигвеев, осуществляется напрямую, от производителей. 
Поэтому, в нашем интернет-магазине самые лучшие цены.
<br><br>
Мы работаем с: XIAOMI SMART BALANCE LINBOL KUGOO SUBOR AIRWHEEL
</p>
    </div>
    </div>
      
<hr>

<div class="container-sm"> 
<p class="fs-2">Подписаться на рассылку</p>
<?php require_once 'includes/mail.php' //вывод описания?>








<?php require_once 'includes/footer.php' //подключение футера?>

<div id = "toTop" >
<img src="media/img/go_up.png" width=50 heigh=50><?// кнопка возвращения наверх ?>
</div>
</body>
