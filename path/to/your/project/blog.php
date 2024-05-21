<?php
include 'config.php';

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);
$slides = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $slides[] = $row;
    }
} else {
    echo "Tidak ada data kategori.";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Blog Makanan</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .slideshow-container {
            position: relative;
            max-width: 800px;
            width: 35%;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #f8f9fa;
            /* Ubah warna background */
            border-radius: 10px;
            overflow: hidden;
        }

        .slide {
            display: none;
            text-align: center;
        }

        .slide img {
            width: 100%;
            /* Set lebar gambar menjadi 100% */
            height: 300px;
            /* Tetapkan tinggi gambar */
            object-fit: cover;
            /* Atur gambar agar mengisi area */
            border-bottom: 1px solid #ddd;
        }

        .description {
            display: none;
            /* Hide description by default */
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 200px;
            /* Adjust as needed */
            margin: 0 auto;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
            /* Tingkatkan margin top */
        }

        .button {
            padding: 15px 25px;
            /* Tingkatkan padding */
            margin: 0 10px;
            /* Tingkatkan margin */
            font-size: 18px;
            /* Tingkatkan font size */
            cursor: pointer;
            border: none;
            border-radius: 30px;
            /* Ubah bentuk menjadi oval */
            background-color: #e67e22;
            /* Warna oranye yang sesuai dengan konsep makanan */
            color: white;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #d35400;
            /* Ubah warna saat hover */
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Beberapa Resep Makanan</h1>
    </div>

    <body>
        <div class="slideshow-container">
            <?php
            foreach ($slides as $index => $slide) {
                $display = ($index == 0) ? 'block' : 'none'; // Show first slide, hide others
                echo '<div class="slide" style="display: ' . $display . '">';
                echo '<a href="detail.php?id=' . $slide["id"] . '">';
                echo '<img src="' . $slide["image_url"] . '" alt="Image">';
                echo '</a>';
                echo '<p class="description">' . $slide["description"] . '</p>'; // Description paragraph
                echo '</div>';
            }
            ?>
        </div>

        <div class="button-container">
            <button class="button" onclick="scrollSlide(-1)">Previous</button>
            <button class="button" onclick="goBack()">Go Back</button>
            <button class="button" onclick="scrollSlide(1)">Next</button>

        </div>

        <script>
            // JavaScript Code
            let slides = document.getElementsByClassName("slide");
            let currentIndex = 0;

            function showSlide(index) {
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[index].style.display = "block";
            }

            function scrollSlide(n) {
                currentIndex = (currentIndex + n + slides.length) % slides.length;
                showSlide(currentIndex);
            }

            function goBack() {
                window.history.back();
            }

            setInterval(function () {
                scrollSlide(1);
            }, 1500); // Change slide every 5 seconds
        </script>
    </body>

</html>