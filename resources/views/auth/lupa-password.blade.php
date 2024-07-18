<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{config('app.name')}}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.all.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.min.css
" rel="stylesheet">
    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">
</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        @if (session('gagal'))
        <script>
            // Tampilkan pesan dengan SweetAlert
    Swal.fire({
        title: 'Gagal',
        text: '{{ session('gagal') }}',
        icon: 'error',
        confirmButtonText: 'OK'
    });
        </script>
        @endif
        @if (session('sukses'))
        <script>
            // Tampilkan pesan dengan SweetAlert
    Swal.fire({
        title: 'Sukses',
        text: '{{ session('sukses') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
        </script>
        @endif
        <div class="text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="{{url('/')}}">
                            <div>
                                <img class="logo-icon me-2"
                                    src="https://direktori.lldikti4.id/uploads/logo_pt/046002.png" alt="logo">
                                <img class="logo-icon me-2"
                                    src="https://www.toyota.co.id/img/Toyota-logo-new-update.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="mb-5">
                        <h2 class="auth-heading text-center">{{config('app.name')}}</h2>
                        <span>Sistem Informasi Manajemen Magang</span>
                        <br>
                        <span>Lupa Password</span>
                    </div>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" method="POST">
                            @csrf
                            <div class="email mb-3">
                                <label class="sr-only" for="signin-email">Nomor Induk</label>
                                <input id="signin-email" type="number" class="form-control signin-email"
                                    placeholder="Nomor Induk" name="nomor_induk" required="required">
                            </div>
                            <!--//form-group-->
                            <div class="password mb-3">
                                <label class="sr-only" for="signin-password">Password</label>
                                <input id="signin-password" name="password" type="password"
                                    class="form-control signin-password" placeholder="Password Baru"
                                    required="required">
                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-6">
                                    </div>
                                    <!--//col-6-->
                                    <div class="col-6">
                                        <div class="forgot-password text-end">
                                            <a href="{{url('/')}}">Login</a>
                                        </div>
                                    </div>
                                    <!--//col-6-->
                                </div>
                                <!--//extra-->
                            </div>
                            <!--//form-group-->
                            <div class="text-center">
                                <button type="submit"
                                    class="btn app-btn-primary w-100 theme-btn mx-auto">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!--//auth-form-container-->

                </div>
                <!--//auth-body-->

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
                                style="color: #fb866a;"></i> by <a class="app-link"
                                href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
                            developers</small>

                    </div>
                </footer>
                <!--//app-auth-footer-->
            </div>
            <!--//flex-column-->
        </div>
        <!--//auth-main-col-->
        
        <!--//auth-background-col-->

    </div>
    <!--//row-->
</body>

</html>