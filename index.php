<?php

$mobiles =[
            ['brand'=>'Samsung' ,'weight' => '140gm' , 'color' => 'black' ,'camera' => '13px','screen' => '1080px'],
            ['brand'=>'Iphone' ,'weight' => '150gm' , 'color' => 'gold' ,'camera' => '18px','screen' => '1374px'],
            ['brand'=>'Sony' ,'weight' => '135gm' , 'color' => 'black' ,'camera' => '20px','screen' => '1180px']                         
];

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Mobiles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="row">

                <h3 class="text-center"><b>Mobiles</b></h3>

                <div class="col-xs-12 col-md-8 col-md-offset-2 p-t-50">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand</th>
                                <th>Weight</th>
                                <th>Color</th>
                                <th>Camera</th>
                                <th>Screen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($mobiles as $key => $value){
                                
                            
                            ?>
                            
                            <tr>
                                <td><?php echo $key?></td>
                                <td><?php echo $value['brand'] ?></td>
                                <td><?php echo $value['weight'] ?></td>
                                <td><?php echo $value['color'] ?></td>
                                <td><?php echo $value['camera'] ?></td>
                                <td><?php echo $value['screen'] ?></td>
                            </tr>
                            <?php
                                }
                                ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>




