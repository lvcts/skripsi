<!doctype html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href=<?= base_url("login/css/style.css") ?>>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(<?= base_url('img/slides_bg/slide1.jpg'); ?>"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Masuk</h3>
                                </div>
                            </div>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form method="$_POST" action="<?= base_url(); ?>/signin-process" class="signin-form">
                                <?= csrf_field(); ?>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="email" id="email" required>
                                    <label class="form-control-placeholder" for="username">Email</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" name="password" id="password" required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                                </div>
                            </form>
                            <p class="text-center">Belum memiliki akun? <a href="<?= route_to('signUp'); ?>">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src=<?= base_url("login/js/jquery.min.js") ?>></script>
    <script src=<?= base_url("login/js/popper.js") ?>></script>
    <script src=<?= base_url("login/js/bootstrap.min.js") ?>></script>
    <script src=<?= base_url("login/js/main.js") ?>></script>

</body>

</html>