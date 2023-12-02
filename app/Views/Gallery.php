<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <title>Simply Amazed HTML Template by Tooplate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css" /> 
    <link rel="stylesheet" href="css/slick.css" type="text/css" />   
    <link rel="stylesheet" href="css/tooplate-simply-amazed.css" type="text/css" />
    <style>
   body {
    font-family: 'Georgia', serif;
    
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

.gallery-container {
    max-width: 1000px;
    margin: 20px auto; /* Center the container horizontally with some top margin */
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2, p {
    color: #333;
    text-align: center;
    color: green;
}

img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 0 auto 10px; /* Center the image and add some bottom margin */
    display: block; /* Ensure the image is treated as a block element */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}
body {
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}
        }
        nav {
            background-color: #333;
            overflow: hidden;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            float: left;
            display: block;
            color: light-green;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .logo {
            float: right;
        }

        @media (max-width: 600px) {
            nav a {
                float: none;
                display: block;
                width: 100%;
                text-align: right;
            }

            .logo {
                float: none;
                text-align: center;
            }
            body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
        }

        .gallery-container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, p {
            color: #333;
            text-align: center;
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        }

</style>

</head>
<body>
<nav>
    
    <a href="/first">Our Coop</a>
    
    <a href="/gallery">Gallery</a>
    <a href="/workshop">Contact</a>
    <a href="/workshop">Workshop</a>
</nav>

<div class="gallery-container">
    <h1>MucoFaco History Gallery</h1>

    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h2>The Founding Years</h2>
                <img src="img/M1.jpg" alt="Moco">
                <p><strong>Caption:</strong> The visionary founders laying the groundwork for MucoFaco.</p>
            </div>
            <div class="carousel-item">
                <h2> Inaugural Event</h2>
                <img src="img/M2.jpg" alt="Inaugural Event">
                <p><strong>Caption:</strong> The grand inauguration ceremony that marked the official beginning of MucoFaco.</p>
            </div>
            <div class="carousel-item">
                <h2> Milestone Achievement</h2>
                <img src="img/M3.jpg" alt="Milestone Achievement">
                <p><strong>Caption:</strong> Celebrating a significant achievement that shaped the course of MucoFaco's history.</p>
            </div>
            
            <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>





        <div id="imageCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h2>The Founding Years</h2>
                <img src="img/U1.jpg" alt="Moco">
                <p><strong>Caption:</strong> The visionary founders laying the groundwork for MucoFaco.</p>
            </div>
            <div class="carousel-item">
                <h2> Inaugural Event</h2>
                <img src="img/U2.jpg" alt="Inaugural Event">
                <p><strong>Caption:</strong> The grand inauguration ceremony that marked the official beginning of MucoFaco.</p>
            </div>
            <div class="carousel-item">
                <h2> Milestone Achievement</h2>
                <img src="img/U4.jpg" alt="Milestone Achievement">
                <p><strong>Caption:</strong> Celebrating a significant achievement that shaped the course of MucoFaco's history.</p>
            </div>
            <div class="carousel-item">
                <h2>Title</h2>
                <img src="img/U5.jpg" alt="Milestone Achievement">
                <p><strong>Caption:</strong> Celebrating a significant achievement that shaped the course of MucoFaco's history.</p>
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#imageCarousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
    </div>
</div>



<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>
