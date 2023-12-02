<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Page</title>
    <style>
        body {
            font-family: fantasy;
            font-style: italic;
            margin: 0;
            background-color: #4CAF50; /* Green background color */
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 0 10px rgba(0, 1, 4, 0.9);
            width: 100%;
            max-width: 400px;
        }

        
        .btn-danger {
            background-color: #FF5733; /* Orange button color for Admin */
        }

        .input-group-text {
            background-color: #4CAF50; /* Green background for input group text */
        }

        .form-check-input:checked {
            background-color: #4CAF50; /* Green background for checked checkbox */
        }

        .image-container {
            text-align: center;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>

<body class="center-container">
    <div class="container-fluid mt-5">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 form-container">
                
                <h2>Login as User</h2>
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>

                <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo base_url(); ?>/signin/loginAuth" method="post">
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-text"></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="username" placeholder="Username" value="<?= set_value('username') ?>" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupPassword">Password</label>
                        <input type="password" class="form-control" id="inlineFormInputGroupPassword" name="password" placeholder="Password" required>
                    </div>
                    
                    <div class="col-12">
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="/register" class="btn btn-secondary">Register</a>
</div>
                </form>

                <div class="image-container">
                    <img src="img/logo.png" alt="Placeholder Image">
                </div>
                <div class="btn-group" role="group" aria-label="User Type">
                <div class="btn-group" role="group" aria-label="User Type">
   
</div>

</div>

            </div>
        </div>
    </div>
</body>
</html>
