<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Kelompok</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: 5px 0;
            border: none;
            cursor: pointer;
        }
        .group-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="index.php">
            <input type="text" name="member1" placeholder="Nama Anggota 1" required><br>
            <input type="text" name="member2" placeholder="Nama Anggota 2" required><br>
            <input type="text" name="member3" placeholder="Nama Anggota 3" required><br>
            <input type="submit" value="Tampilkan Kelompok">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $member1 = $_POST["member1"];
            $member2 = $_POST["member2"];
            $member3 = $_POST["member3"];

            echo '<div class="group-name">Kelompok:</div>';
            echo '<div>'.$member1.'</div>';
            echo '<div>'.$member2.'</div>';
            echo '<div>'.$member3.'</div>';
        }
        ?>
    </div>
</body>
</html>
