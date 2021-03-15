<?php  
    include('User.php') ;
    include('exstension.php');
    //USER CLASS
    $Federico= new User('Federico','Crudo','password');
    $Federico->setID();
    $Lorenzo= new User('Lorenzo','Licci','lorenzo');
    $Lorenzo->setID();
    $raccolta=[];
    array_push($raccolta,$Federico,$Lorenzo);
    //Extension Class
    $marco=new Employee('Marco','Primogeri','mp');
    $marco->setID();
    $marco->post=85;
    $marco->data='15/05/2020';
    //2
    $Luca=new Employee('Luca','Primogeri','mp');
    $Luca->setID();
    $Luca->post=35;
    $Luca->data='12/05/2020';
    array_push($raccolta,$marco,$Luca);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
            foreach($raccolta as $user){ ?>
                <div class="box-user">
                    <?php 
                    foreach($user as $key => $info){?>
                        <span>
                            <?php 
                            if(!empty($info)){
                                echo $key .': '.$info;
                            }
                        
                            ?>
                    
                    
                        </span>
                        <?php } ?>    
                </div>
            <?php } ?>  
    </div>
    
</body>
</html>