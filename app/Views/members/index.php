<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
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
        nav {
            background-color: #333; /* Black background color */
            overflow: hidden;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            float: left;
            display: block;
            color: #00ff00; /* Green font color */
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #333; /* Darker background color on hover */
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
<body class="bg-success text-white">

<nav>
    
    <a href="/first">Our Coop</a>
    
    <a href="/members">Members List</a>
    <a href="/Contact">Contact</a>
    <a href="/workshop">Workshop</a>
</nav>

    <div class="container text-center">
        <h1 class="mt-4 mb-4">Members of MucoFaco</h1>

        <!-- Add Member Button -->
       

        <table class="table table-striped table-bordered table-dark">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $member) : ?>
                    <tr>
                        <td><?= $member['name']; ?></td>
                        <td><?= $member['email']; ?></td>
                        <td><?= $member['phone']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Footer section -->
<footer>
    <p>&copy; 2023 Your Company Name. All rights reserved.</p>
</footer>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
