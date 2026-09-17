<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Login | Sistem Inventaris Sekolah</title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon"
          href="<?= base_url('assets/img/favicon.ico') ?>"
          type="image/x-icon">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800"
          rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- ThemeKit -->
    <link rel="stylesheet"
          href="<?= base_url('assets/css/theme.min.css') ?>">

</head>

<body>

    <!-- Login Wrapper -->
    <div class="auth-wrapper">

        <div class="container-fluid h-100">

            <div class="row flex-row h-100 bg-white">

                <!-- Background -->
                <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">

                    <div class="lavalite-bg"
                         style="background-image: url('<?= base_url('assets/img/auth/login-bg.jpg') ?>');">

                        <div class="lavalite-overlay"></div>

                    </div>

                </div>

                <!-- Login Form -->
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">

                    <div class="authentication-form mx-auto">

                        <!-- Logo -->
                        <div class="logo-centered">

                            <a href="#">

                                <img src="<?= base_url('assets/img/brand.svg') ?>"
                                     alt="Logo">

                            </a>

                        </div>

                        <!-- Title -->
                        <h3>Sign In</h3>

                        <p>Silakan login untuk melanjutkan.</p>

                        <!-- Error Message -->
                        <?php if (session()->getFlashdata('error')) : ?>

                            <div class="alert alert-danger">
                                <?= esc(session()->getFlashdata('error')) ?>
                            </div>

                        <?php endif; ?>


                        <!-- Login Form -->
                        <form action="<?= base_url('login/attempt') ?>"
                              method="post">

                            <?= csrf_field() ?>

                            <!-- Username -->
                            <div class="form-group">

                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    placeholder="Username"
                                    required
                                    autofocus>

                                <i class="ik ik-user"></i>

                            </div>


                            <!-- Password -->
                            <div class="form-group">

                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="Password"
                                    required>

                                <i class="ik ik-lock"></i>

                            </div>


                            <!-- Remember Me -->
                            <div class="row">

                                <div class="col text-left">

                                    <label class="custom-control custom-checkbox">

                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="item_checkbox"
                                            name="item_checkbox"
                                            value="1">

                                        <span class="custom-control-label">
                                            &nbsp;Remember Me
                                        </span>

                                    </label>

                                </div>

                            </div>


                            <!-- Login Button -->
                            <div class="sign-btn text-center">

                                <button
                                    type="submit"
                                    class="btn btn-theme">

                                    Sign In

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- JavaScript -->

    <script src="<?= base_url('assets/js/vendor/jquery-3.3.1.min.js') ?>">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="<?= base_url('assets/js/theme.js') ?>">
    </script>

</body>

</html>