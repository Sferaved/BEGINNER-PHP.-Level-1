<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lesson 3 (Answer)</title>
</head>
<body>
<header>
</header>
<main>
    <section id="lesson3-1">
         <?php
         $str = $_POST['inputText'];
         function mb_strrev($st): string
         {
             $r = '';
             for ($i = mb_strlen($st); $i >= 0; $i--) {
                 $r .= mb_substr($st, $i, 1);
             }
             return $r;
         }
         $str_rez = mb_strrev($str);
         echo 'Вводили: ' . $str . "<br>" . 'Стало: ' . $str_rez; ?>
        <p>
        <form action="lesson3.php" target="_self">
            <button>Назад</button>
        </form>
        </p>
    </section>
</main>
<footer>
</footer>
</body>
</html>
