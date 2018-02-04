<?php 
include 'header.php';
 ?>

<div class="main">
    <div class="main-overlay"></div>
    <div class="wrapper">
        <div class="main-text container">
            <div class="row">
                <div class="col-md">
                    <h1 class="display-4">Подготовка к экзаменам</h1>
                    <p>по математике и физике</p>
                    <p>занятия проходят по скайпу</p>
                    <h3><strong>+7(924)123-04-32</strong></h3><br>
                </div>
                <div class="col-md">
                 <form method="post" action="send.php">
                    <div class="form-group">
                        <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <input name="login" type="skype" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите логин в Skype">
                    </div>
                    <div class="form-group">
                        <input name="phone" type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите телефон">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                    </div>
                    <div class="form-group">
                        <textarea name="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="С чем помочь? " ></textarea>
                    </div>
                    <input value="Записаться" type="submit" class="btn btn-success" style="width: 100%; text-transform:uppercase;">
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="next">
    <div class="container"><br>
     <h1 class="display-4">Подготовка к экзаменам ОГЭ/ЕГЭ</h1>
     <p style="color: red; text-decoration: underline;">Математика/физика:</p>

     <p>Индивидуальная подготовка к ОГЭ и ЕГЭ по физике и математике.</p>
     <ol>
        <li>регулярные занятия до экзамена</li>
        <li>удобное для Вас расписание</li>
        <li>индивидуально (без групп)</li>
    </ol>

    <p><strong>Запись по телефону или на сайте.</strong></p>

    <p>Вы не тратите время на дорогу, эффективность занятий та же, большая экономия времени.</p>

    <p>Пробный урок бесплатно.</p>
</div>
</div>


<?php 
include 'footer.php';
 ?>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/parallax.min.js"></script>
</body>
</html>