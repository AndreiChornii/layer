<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/jokes.css" type="text/css">
    <title><?= $title ?></title>
</head>
<body>
<nav>
    <header>
        <h1>Послуги автоадвоката по ДТП <?php if ($loggedIn) echo ' | Welcome: ' . $user->name; ?></h1>
    </header>
    <ul>
        <li><a href="/">Головна сторінка</a></li>
<!--        <li><a href="/joke/list">Jokes List</a></li>-->
<!--        <li><a href="/joke/edit">Add a new Joke</a></li>-->
<!--        <li><a href="/author/register">Register new author</a></li>-->
<!--        <li><a href="/category/list">Categories list</a></li>-->
<!--        <li><a href="/author/list">Users list</a></li>-->
<!--        --><?php //if ($loggedIn): ?>
<!--            <li><a href="/logout">Log out</a>-->
<!--            </li>-->
<!--        --><?php //else: ?>
<!--            <li><a href="/login">Log in</a></li>-->
<!--        --><?php //endif; ?>
    </ul>
</nav>

<main>
    <?= $output ?>
</main>

<footer>
    <div class="wrapper_footer">
        <div id="logotype">

        </div>
        <div>
            <h4>
                Контакти
            </h4>
            <div class="menu_footer">
                <ul>
                    <li>Зв'яжіться електронною поштою</li>
                    <li><a href="mailto:strongfart@i.ua">strongfart@i.ua</a></li>
                    <li>або за телефонами</li>
                    <li>(093)837-73-43</li>
                    <li>(066)419-79-52</li>
                    <li>Адреса:</li>
                    <li>м.Дніпро,вул.Глінки 1</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>