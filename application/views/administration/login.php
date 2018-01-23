<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">

    <title>{title}</title>
</head>
<body>
    <div class="container">
        <div id="login" class="offset-4 col-4">
            <div class="text-center">
                <img src="<?php echo site_url('assets/images/logo.png'); ?>" alt="logo hydrate">
            </div>
            <hr>
            <h1 class="text-center">Web CV</h1>

            <?php if(!empty($this->session->flashdata())){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('errorLogin'); ?>
                </div>
            <?php } ?>

            <?php echo form_open('administration/login'); ?>
                <div class="form-group">
                    <label for="username">Nom utilisateur</label>
                    <input type="input" class="form-control" name="username" id="username" value="<?php echo set_value('username'); ?>">
                    <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="password">
                    <?php echo form_error('password'); ?>
                </div>
                <input type="submit" class="btn btn-outline-primary float-right" value="Connexion">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
