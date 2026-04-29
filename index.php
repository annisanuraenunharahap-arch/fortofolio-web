<?php 
// 1. Koneksi Database
include 'db.php'; 

// 2. Ambil data profil
$query_profile = mysqli_query($conn, "SELECT * FROM profile_data LIMIT 1");
$profile = mysqli_fetch_assoc($query_profile);

// Gunakan nilai default jika data database kosong
$nama = $profile['full_name'] ?? 'Annisa Nuraenun Harahap';
$status = $profile['status'] ?? 'Informatics Engineering Student - Universitas Muhammadiyah Sukabumi';
$email = $profile['email'] ?? 'annisanuraenunharahap@gmail.com';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio <?php echo htmlspecialchars($nama); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header-text">
        <h1>Hallo, I'm <span><?php echo htmlspecialchars($nama); ?></span></h1>
    </div>

    <div class="profile-circle">
        <img src="assets/profil.jpg" alt="Foto Profil">
    </div>

    <p class="subtitle"><?php echo htmlspecialchars($status); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    
    <div class="tabs">
        <button class="tab-btn active" data-target="skills-content">Skills</button>
        <button class="tab-btn" data-target="partof-content">Part of</button>
        <button class="tab-btn" data-target="experience-content">Experience</button>
    </div>

    <div id="skills-content" class="content-section active">
        <h2>Design</h2>
        <div class="gallery-grid">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM gallery_items WHERE category = 'skills'");
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<div class="gallery-item"><img src="'.$row['image_url'].'" alt="'.$row['alt_text'].'"></div>';
            }
            ?>
        </div>
    </div>

    <div id="partof-content" class="content-section">
        <h2>HMIF UMMI</h2>
        <div class="gallery-grid">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM gallery_items WHERE category = 'partof'");
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<div class="gallery-item"><img src="'.$row['image_url'].'" alt="'.$row['alt_text'].'"></div>';
            }
            ?>
        </div>
    </div>

    <div id="experience-content" class="content-section">
        <h2>Google Student Ambassador 2026</h2>
        <div class="gallery-grid">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM gallery_items WHERE category = 'experience'");
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<div class="gallery-item"><img src="'.$row['image_url'].'" alt="'.$row['alt_text'].'"></div>';
            }
            ?>
        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>