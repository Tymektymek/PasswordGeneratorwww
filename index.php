<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <title>Project 1</title>
</head>
<body>
        <div id="title">
        Password generator
        </div>
        <div id="generator">
            Password lenght:
            <form id="form" action="index.php" method="get">
            <input type="text" name='p_lenght'>
            <button id="button">
            Generate!
            </button>
            
            <?php
                $list = array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","Y","Z","X","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","w","v","y","z","x","z");
                $password = array();
                
                if(isset($_GET['p_lenght'])){
                    $p_length = $_GET['p_lenght'];
                    try{
                        $converted = intval($p_length);
                        if($p_length <= 0 or $p_length >100){
                            echo "write an integer from 1 to 100";
                        }
                        else{
                            for ($x = 0; $x <= $p_length; $x++) {
                                $random = random_int(0, 61);
                                array_push($password, $list[$random]);
                            }
                    
                            echo "Your password: "; 
                            for ($b = 0; $b < $p_length; $b++) {
                                echo $password[$b];
                            }
                            reset($password);
                        }
                    }catch (Exception $p_length) {
                        echo "write an integer from 1 to 100";
                    } 
                }  
            ?>
            </form>
        </div>          
</body>
</html>