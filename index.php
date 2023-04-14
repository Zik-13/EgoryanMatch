<?php
require_once "dll/header.php";
?>
    <div class="white-box">
        <div>
            <?php
            /*$answer = 0;
            $egormath = array(rand(0,10), rand(0,100), rand(0,1000), rand(0,10000));

            switch ()

            echo $egormath[rand(0,3)];*/

            $varone = array(
                array(random_int(-1000,1000)),
                array(random_int(-1000,1000)),
                array(random_int(-1000,1000))
            );

            $perone = $varone[rand(0,2)][0];
            $pertwo = $varone[rand(0,2)][0];
            $perthree = $varone[rand(0,2)][0];
            $resultone = 0;


            switch (rand(0,1)){
                case 0:
                    $resultone = $perone - $pertwo - $perthree;
                    echo "$perone - $pertwo - $perthree = ?";

                    break;
                case 1:
                    echo "$perone + $pertwo + $perthree = ?";

                    break;
                /*case 2:
                    echo "$perone * $pertwo * $perthree = ?";
                    echo "Ответ:" + $result = $perone * $pertwo * $perthree;
                    break;
                case 3:
                    echo "$perone / $pertwo / $perthree = ?";
                    echo "Ответ:" + $result = $perone / $pertwo / $perthree;
                    break;
                case 4:
                    echo "$perone - $pertwo + $perthree = ?";
                    echo "Ответ:" + $result = $perone - $pertwo + $perthree;
                    break;
                case 5:
                    echo "$perone + $pertwo - $perthree = ?";
                    echo "Ответ:" + $result = $perone + $pertwo - $perthree;
                    break;
                case 6:
                    echo "$perone - $pertwo * $perthree = ?";
                    echo "Ответ:" + $result = $perone - $pertwo * $perthree;
                    break;
                case 7:
                    echo "$perone * $pertwo - $perthree = ?";
                    echo "Ответ:" + $result = $perone * $pertwo - $perthree;
                    break;
                case 8:
                    echo "$perone * $pertwo + $perthree = ?";
                    echo "Ответ:" + $result = $perone * $pertwo + $perthree;
                    break;
                case 9:
                    echo "$perone + $pertwo * $perthree = ?";
                    echo "Ответ:" + $result = $perone + $pertwo * $perthree;
                    break;
                case 10:
                    echo "$perone + $pertwo / $perthree = ?";
                    echo "Ответ:" + $result = $perone + $pertwo / $perthree;
                    break;
                case 11:
                    echo "$perone / $pertwo + $perthree = ?";
                    echo "Ответ:" + $result = $perone / $pertwo + $perthree;
                    break;
                case 12:
                    echo "$perone - $pertwo / $perthree = ?";
                    echo "Ответ:" + $result = $perone - $pertwo / $perthree;
                    break;
                case 13:
                    echo "$perone / $pertwo - $perthree = ?";
                    echo "Ответ:" + $result = $perone / $pertwo - $perthree;
                    break;
                case 14:
                    echo "$perone * $pertwo / $perthree = ?";
                    echo "Ответ:" + $result = $perone * $pertwo / $perthree;
                    break;
                case 15:
                    echo "$perone / $pertwo * $perthree = ?";
                    echo "Ответ:" + $result = $perone / $pertwo * $perthree;
                    break;*/
            }

            $a = 4;
            $b = 9;
            $c = 2;
            $d = 5;
            $result = 0;


            $variables = array();
            $variables[] = $a;
            $variables[] = $b;
            $variables[] = $c;
            $variables[] = $d;

            function operation($variable, $result) {
                switch (rand(0, 3)) {
                    case 0:
                        $result = $result + $variable;
                        break;
                    case 1:
                        $result = $result - $variable;
                        break;
                    case 2:
                        $result = $result * $variable;
                        break;
                    case 3:
                        $result = $result / $variable;
                        break;
                }
                return $result;
            }



            foreach ($variables as $variable) {
                $result = operation($variable, $result);
            }

            //echo $result;
            ?>
        </div>
       <div>
           <form method="post">
               <p>Введи ответ =) </p><input name="answer" required>
               <p></p><input type="submit" value="Проверить"></p>
           </form>
       </div>
       <div>

       </div>
    </div>
    <h1>body</h1>
<?php
require_once "dll/footer.php";
?>