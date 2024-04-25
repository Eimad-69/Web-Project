<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="card-body">
                                <h3 class="card-title">Création d'un compte</h3>
                                <form>
                                    <div class="form-group">
                                        <label for="username">Votre nom d'utilisateur</label>
                                        <input type="text" class="form-control" id="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Votre adresse mail</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Votre mot de passe</label>
                                        <input type="password" class="form-control" id="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Créer un compte</button>
                                </form>
                                <div class="social-login">
                                    <p>OU</p>
                                    <button class="btn btn-google">Google</button>
                                    <button class="btn btn-twitter">X</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="../assets/images/icones/register.jpg" alt="Register" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>