<?php

require "vendor/autoload.php";


$user = new \App\User();

$users = $user->getUsers();
// $user->addUser(['name' => 'katya', 'surname' => 'petrova', 'lastname' => 'petrovna', 'age' => 22, 'login' => 'kate', 'password' => '12345']);
// $user->addUser(['name' => 'Olga', 'surname' => 'ivanova', 'lastname' => 'ivanovna', 'age' => 16, 'login' => 'ol', 'password' => '12345']);
// $user->addUser(['name' => 'Elena', 'surname' => 'Zlatova', 'lastname' => 'Zlatovna', 'age' => 34, 'login' => 'Elle', 'password' => '1991']);
?>


<style>

    .wrapper{
        width: 1200px;
        height: 900px;
        background-color: silver;
        border-radius: 20px;
        margin: auto;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 2px 2px 10px silver;
    }

    .carts{
        width: 90%;
        height: 800px;
        margin: auto;
        display: flex;
        justify-content: start;
        flex-wrap: wrap;
    }
    .cart{
        width: 300px;
        height: 350px;
        border-radius: 20px;
        padding: 10px;
        box-sizing: border-box;
        background-color: rgba(179, 231, 23, 0.81);
        box-shadow: 4px 4px 10px rgba(205, 112, 36, 0.81);
        text-align: center;
        opacity: 0.1;
        margin: 20px;
        cursor: pointer;
    }
    .cart span{
        color: blue;
        font-size: 19px;
    }
</style>

<div class="wrapper">
    <div class="carts">
        <? foreach($users as $item):?>

            <div class="cart">
                <h4>Имя: <span><?=$item['name']?></span></h4>
                <h4>Фамилия: <span><?=$item['surname']?></span></h4>
                <h4>Отчество: <span><?=$item['lastname']?></span></h4>
                <h4>Возраст: <span><?=$item['age']?></span></h4>
                <h4>Логин: <span><?=$item['login']?></span></h4>
                <h4>Пароль: <span><?=$item['password']?></span></h4>
                <h4>Дата: <span><?=$item['regdate']?></span></h4>
            </div>

        <? endforeach?>
    </div>
</div>


<script>
    const carts = document.querySelectorAll('.cart')
    carts.forEach((cart) =>{
        cart.addEventListener('click', function(event){
            event.currentTarget.style.opacity = '1'
        })
    })
</script>