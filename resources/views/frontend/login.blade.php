<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thai Board Games</title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    {{-- <?php include 'stylesheet.php'; ?> --}}
    @include('frontend.stylesheet')
</head>

<body>
    <section id="content">
        <div class="bg-two">
            <div class="container">
                <div class="cardForm">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="logoForm">
                                <img src="{{ asset('assets/img/logo15.png') }}" />
                            </div>
                            <div class="formLogin">
                                <h5>เข้าสู่ระบบ</h5>
                                <div class="col-lg-12 my-2">
                                    <label>Username</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-12 my-2">
                                    <label>Password</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-12 my-2">
                                    <div class="forgot">
                                        <a href="#">Forgot Password?</a>
                                    </div>

                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    <a href="homeLevel"><button class="btn-brown">เข้าสู่ระบบ</button></a>
                                    <a href="register"><button class="btn-brown">สมัครสมาชิก</button></a>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn-brown w-100"><i class="fa fa-facebook-square"></i> Login with
                                        Facebook</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rule">
                                <img src="{{ asset('assets/img/Group 35.png') }}">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    {{-- <?php include 'footer2.php'; ?>
    <?php include 'javascript.php'; ?> --}}
    @include('frontend.footer2')
    @include('frontend.javascript')
</body>

</html>
