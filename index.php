<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-300  font-serif  text-center my-8  ">
    <div class=" font-bold bg-slate-300 rounded-2xl mx-8 pt-4 pb-4">
        <h1 class="text-center font-mono text-red-950 uppercase text-6xl hover:text-green-900 transition">hamro gallery</h1>
    </div>
    
    <div class="container  grid lg:grid-cols-3 ">
    <?php
    $serverName="localhost";
    $username="root";
    $password="";
    $database="hamro_gallery";
    $conn=new mysqli($serverName,$username,$password,$database);
    if ($conn->connect_error) {
        die("Connection Failed.");
        # code...
    } else {
        # code...
        $sql='SELECT * FROM gallery';
        $res=$conn->query($sql);
        if($res->num_rows){
            while ($row=$res->fetch_assoc()) {
                ?>
                <div class="block justify-around">
                <div class="h-80 w-80 my-8 flex px-8 ">
                    <img src="<?php echo($row['Image URL']);?>" alt="an image" class="rounded-2xl cursor-pointer ">
                   <div class="ml-4 block text-justify py-4 my-8 border-solid border-2 rounded-lg border-black pr-24 text-xl">
                    <p><b>Id:</b>  <?php echo($row['ID']);?></p> 
                    <p><b>Title:</b>  <?php echo($row['Title']);?></p>
                    <p><b>Remarks:</b>  <?php echo($row['Remarks']);?></p>
                    </div>
                </div>
                </div>
    <?php

            }
        }
    }
    
    ?>
        </div>
    <footer class="border-black rounded-2xl ml-80 mr-80 bg-slate-400 text-2xl font-serif cursor-pointer hover:text-cyan-800 transition-all font-bold text-gray-50 border-2 py-4">&copy;Copyright @ Karan Thakur</footer>
</body>
</html>