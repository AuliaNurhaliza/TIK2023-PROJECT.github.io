<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM categories WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $image_url = $row["image_url"];
    $description = $row["description"];
} else {
    echo "Data kategori tidak ditemukan.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f3f3;
        }
        .detail-container {
            max-width: 700px;
            width: 800px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
        }
        .detail-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .detail-container p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="detail-container">
        <img src="<?php echo $image_url; ?>" alt="Image">
        <p><?php echo $description; ?></p>
    </div>
    <div class="button-container">
        <button class="button" onclick="goBack()">Kembali</button>
    </div>
    
    <script>
        // JavaScript Code
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
