<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lesson 1</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php">Main</a>
        <a href="#">Lesson 2</a>
    </nav>
</header>
<main>
    <section id="lesson1">
        <div>
            <?php
            for ($tr=1; $tr<=5; $tr++){
                ?>
                <div class="bloc1">
                    <?php
                    for ($td=1; $td<=10; $td++){
                        echo $td.'*'.$tr.'='.$tr*$td."<br>";
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
        <div>
            <?php
            for ($tr=6; $tr<=10; $tr++){
                ?>
                <div class="bloc1">
                    <?php
                    for ($td=1; $td<=10; $td++){
                        echo $td.'*'.$tr.'='.$tr*$td."<br>";
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
</main>
<footer>

</footer>
</body>
</html>
