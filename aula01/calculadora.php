<form action="" method="post">
    <input name="num1" placeholder="num1"> <br/>
    <input name="num2" placeholder="num2"> <br/>
    <input name="operacao" placeholder="operação"> <br/>
    <button>Enviar</button>
</form>

<?php
    if($_POST) {
        $v1=$_POST['num1'];
        $v2=$_POST['num2'];
        if($_POST['operacao']=="+"){
            $total=$v1+$v2;
            echo"A soma é:$total";
        }else{
            if($_POST['operacao']=="-"){
                $total=$v1-$v2;
                echo"A subtração é:$total";
            }else{
                if($_POST['operacao']=="/"){
                    $total=$v1/$v2;
                    echo"A divisão é:$total";
                }else{
                    if($_POST['operacao']=="*"){
                        $total=$v1*$v2;
                        echo"A multiplicação é:$total";
                    }
                }
            }
        }
    }
?>