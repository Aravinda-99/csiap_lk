<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lanka's Tank Cascade System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
            background: url('./assets/img/backgrounds/02 copy (1).jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.3); /* Slight dark overlay for readability */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .content-container {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .title-container {
            background: rgb(0 0 0 / 4%);
    padding: 15px;
    border-radius: 10px;
    text-align: justify;
    width: fit-content;
        max-width: 100%;
    margin: 0 auto;
    color: white;
    font-family: serif;
    font-weight: bold;
    }

    .title-container h1 {
        text-align: center;
        font-size: 27px;
        margin-bottom: 8px;
    }

    .title-container p {
        text-align: justify;
        font-size: 20px;
        margin: 5px 0;
        line-height: 1.4;
    }

        .title-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.5);
        }

        .buttons-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .btn-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 220px;
            padding: 12px;
            background: white;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            color: black;
            text-decoration: none;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #8BC34A;
            color: white;
        }

        .btn-custom img {
            width: 25px;
            margin-right: 10px;
        }
    </style>
</head>


 <?php include('includes/header.php'); ?>


<body>
<?php include('includes/navbar.php'); ?>


    <div class=""></div>

    <div class="container content-container">
        <div class="row align-items-center" style="align-items: flex-start !important;">
            <!-- Left Side: Title -->
            <div class="col-md-6 d-flex justify-content-center">

                <img src="./assets/img/Untitled-31.png" alt="alternatetext" style="
    max-width: 157%;
    height: auto;
">
    <!--             <div class="title-container">
    <h1 style="color: #ffffff;">Sri Lanka's Tank Cascade   System</h1>
    <h1 style="color: #ffffff;" >ශ්‍රී ලංකාවේ   එල්ලංගා      පද්ධතිය </h1>
    <h1 style="color: #ffffff;">இலங்கையில் எல்லங்கா அமைப்பு</h1>
</div> -->
            </div>

            <!-- Right Side: Buttons -->
            <div class="col-md-6">
              <div style="position: absolute; display: flex; flex-direction: column; gap: 15px;">

            <!-- Leaflets -->
            <div style="background: white; padding: 10px 20px; border-radius: 20px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
                📜 
                <a href="leaflets-si.html" style="color: black; text-decoration: none;">පත්‍රිකා</a> | 
                <a href="leaflets-ta.html" style="color: black; text-decoration: none;">பிரசுரங்கள்</a> | 
                <a href="leaflets-en.html" style="color: black; text-decoration: none;">Leaflets</a>
            </div>

            <!-- Posters -->
            <div style="background: white; padding: 10px 20px; border-radius: 20px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
                🖼️ 
                <a href="posters-si.html" style="color: black; text-decoration: none;">පෝස්ටර්</a> | 
                <a href="posters-ta.html" style="color: black; text-decoration: none;">சுவரொட்டிகள்</a> | 
                <a href="posters-en.html" style="color: black; text-decoration: none;">Posters</a>
            </div>

            <!-- Images -->
            <div style="background: white; padding: 10px 20px; border-radius: 20px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
                📷 
                <a href="casecaseimages.php" style="color: black; text-decoration: none;">රූප</a> | 
                <a href="casecaseimages.php" style="color: black; text-decoration: none;">படங்கள்</a> | 
                <a href="casecaseimages.php" style="color: black; text-decoration: none;">Images</a>
            </div>

            <!-- Documents -->
            <div style="background: white; padding: 10px 20px; border-radius: 20px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
                📄 
                <a href="CasecadeDocument.php" style="color: black; text-decoration: none;">ලේඛන</a> | 
                <a href="CasecadeDocument.php" style="color: black; text-decoration: none;">ஆவணங்கள்</a> | 
                <a href="CasecadeDocument.php" style="color: black; text-decoration: none;">Documents</a>
            </div>

            <!-- Videos -->
            <div style="background: white; padding: 10px 20px; border-radius: 20px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
                🎥 
                <a href="TankCascadevedio.php" style="color: black; text-decoration: none;">වීඩියෝ</a> | 
                <a href="TankCascadevedio.php" style="color: black; text-decoration: none;">வீடியோ</a> | 
                <a href="TankCascadevedio.php" style="color: black; text-decoration: none;">Videos</a>
            </div>

        </div>
            </div>
        </div>
    </div>





    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



     

</body>


 
</html>
