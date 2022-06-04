<select>
    <option select>--selecione o ano--</option>
    <?php
        for($ano=2022 ; $ano>=2000 ; $ano--){
            echo "<option>{$ano}</option>";
        }
    ?>
</select>

<select>
    <option select>--selecione o mes--</option>
    <?php
        for($mes=1 ; $mes<=12 ; $mes++){
            echo "<option>{$mes}</option>";
        }
    ?>
</select>

<select>
    <option select>--selecione o dia--</option>
    <?php
        for($dia=1 ; $dia<=31 ; $dia++){
            echo "<option>{$dia}</option>";
        }
    ?>
</select>


<?php

for($vezes=1 ; $vezes<=10 ; $vezes++){
    echo "oi";
}





