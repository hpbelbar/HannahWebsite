<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Include your custom styles -->
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Login Form</h1>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="row mt-4">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <button type="submit" name="login"class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        // Function to toggle password visibility
        function togglePasswordVisibility(inputField, toggleButton) {
            var type = inputField.getAttribute('type') === 'password' ? 'text' : 'password';
            inputField.setAttribute('type', type);
            toggleButton.classList.toggle('fa-eye-slash');
        }
    
        // Event listener for toggle password button
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var toggleButton = this;
            togglePasswordVisibility(passwordInput, toggleButton);
        });
    </script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
