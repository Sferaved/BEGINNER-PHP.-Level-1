<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lesson 2</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php">Main</a>
    </nav>
</header>
<main>
    <section id="lesson2">
        <div>
            <?php
            $red = "<span style='color: red'>";         // color for 1
            $green = "<span style='color: green'>";     // color for 2
            $yellow = "<span style='color: yellow'>";   // color for 3
            $blue = "<span style='color: blue'>";       // color for 4
            $sp = "</span>";
            for ($tr = 1; $tr <= 5; $tr++) {
                ?>
                <div class="bloc1">
                    <?php
                    for ($td = 1; $td <= 10; $td++) {
                        $tr_str = $tr;
                        $td_str = $td;
                        $rez = $tr * $td;
                        settype($tr_str, "string");
                        settype($td_str, "string");
                        settype($rez, "string");
                        if ($tr == 10) {
                            $tr_str = $red . '1' . $sp . '0';
                        }
                        switch ($tr) {
                            case (1):
                                $tr_str = $red . $tr_str . $sp;
                                break;
                            case (2):
                                $tr_str = $green . $tr_str . $sp;
                                break;
                            case (3):
                                $tr_str = $yellow . $tr_str . $sp;
                                break;
                            case (4):
                                $tr_str = $blue . $tr_str . $sp;
                                break;
                        }
                        switch ($tr_str[1]) {
                            case (1):
                                break;
                            case (2):
                                $tr_str = $green . $tr_str . $sp;
                                break;
                            case (3):
                                $tr_str = $yellow . $tr_str . $sp;
                                break;
                            case (4):
                                $tr_str = $blue . $tr_str . $sp;
                                break;
                        }
                        if ($td == 10) {
                            $td_str = $red . '1' . $sp . '0';
                        }

                        switch ($td) {
                            case (1):
                                $td_str = $red . $td_str . $sp;
                                break;
                            case (2):
                                $td_str = $green . $td_str . $sp;
                                break;
                            case (3):
                                $td_str = $yellow . $td_str . $sp;
                                break;
                            case (4):
                                $td_str = $blue . $td_str . $sp;
                                break;
                        }
                        switch ($rez[0]) {
                            case (1):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $red . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $red . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $red . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $red . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $red . $rez[0] . $sp . $rez[1];
                                }
                                break;
                            case (2):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $green . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $green . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $green . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $green . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $green . $rez[0] . $sp . $rez[1];
                                }
                                break;
                            case (3):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $yellow . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $yellow . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $yellow . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $yellow . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $yellow . $rez[0] . $sp . $rez[1];
                                }
                                break;
                            case (4):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $blue . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $blue . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $blue . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $blue . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $blue . $rez[0] . $sp . $rez[1];
                                }
                                break;
                        }

                        echo $tr_str . '*' . $td_str . '=' . $rez . "<br>";
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
        <div>
            <?php
            for ($tr = 6; $tr <= 10; $tr++) {
                ?>
                <div class="bloc1">
                    <?php
                    for ($td = 1; $td <= 10; $td++) {
                        $tr_str = $tr;
                        $td_str = $td;
                        $rez = $tr * $td;
                        settype($tr_str, "string");
                        settype($td_str, "string");
                        settype($rez, "string");
                        if ($tr == 10) {
                            $tr_str = $red . '1' . $sp . '0';
                        }
                        switch ($tr) {
                            case (1):
                                $tr_str = $red . $tr_str . $sp;
                                break;
                            case (2):
                                $tr_str = $green . $tr_str . $sp;
                                break;
                            case (3):
                                $tr_str = $yellow . $tr_str . $sp;
                                break;
                            case (4):
                                $tr_str = $blue . $tr_str . $sp;
                                break;
                        }
                        switch ($tr_str[1]) {
                            case (1):
                                break;
                            case (2):
                                $tr_str = $green . $tr_str . $sp;
                                break;
                            case (3):
                                $tr_str = $yellow . $tr_str . $sp;
                                break;
                            case (4):
                                $tr_str = $blue . $tr_str . $sp;
                                break;
                        }
                        if ($td == 10) {
                            $td_str = $red . '1' . $sp . '0';
                        }

                        switch ($td) {
                            case (1):
                                $td_str = $red . $td_str . $sp;
                                break;
                            case (2):
                                $td_str = $green . $td_str . $sp;
                                break;
                            case (3):
                                $td_str = $yellow . $td_str . $sp;
                                break;
                            case (4):
                                $td_str = $blue . $td_str . $sp;
                                break;
                        }
                        switch ($rez[0]) {
                            case (1):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $red . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $red . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $red . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $red . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $red . $rez[0] . $sp . $rez[1];
                                }
                                break;
                            case (2):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $green . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $green . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $green . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $green . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $green . $rez[0] . $sp . $rez[1];
                                }
                                break;
                            case (3):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $yellow . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $yellow . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $yellow . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $yellow . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $yellow . $rez[0] . $sp . $rez[1];
                                }
                                break;
                            case (4):
                                switch ($rez[1]) {
                                    case (1):
                                        $rez = $blue . $rez[0] . $sp . $red . $rez[1] . $sp;
                                        break;
                                    case (2):
                                        $rez = $blue . $rez[0] . $sp . $green . $rez[1] . $sp;
                                        break;
                                    case (3):
                                        $rez = $blue . $rez[0] . $sp . $yellow . $rez[1] . $sp;
                                        break;
                                    case (4):
                                        $rez = $blue . $rez[0] . $sp . $blue . $rez[1] . $sp;
                                        break;
                                    default:
                                        $rez = $blue . $rez[0] . $sp . $rez[1];
                                }
                                break;
                        }

                        echo $tr_str . '*' . $td_str . '=' . $rez . "<br>";
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
