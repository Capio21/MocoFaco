<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CodeIgniter Auth User Registration Example</title>

    <style>
   
    </style>
</head>
<body style="font-family: fantasy; font-style: George; margin: 0; background-color: #4CAF50;">

    <div class="container-fluid mt-5" style="background-color: #4CAF50; padding: 40px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6" style="background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 0 0 10px rgba(0, 1, 4, 0.9); padding: 30px;">
                <h2 class="text-center text-green">Register User</h2>
                <?php if(isset($validation)): ?>
                    <div class="alert alert-warning"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <form action="<?= base_url('/') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div class="form-group mb-3 text-center">
                        <img src="img/logo.png" alt="Placeholder Image" style="max-width: 100%; border-radius: 8px;">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                    <br>
                    <p> Alrady have an account</p>
                    <a href="/" class="btn btn-secondary">login</a>
                    
                </form>
            </div>
        </div>
    </div>
</html>
