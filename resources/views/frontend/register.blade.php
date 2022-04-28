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
    <style>
        .error {
            color: red;
            font-size: 0.7rem;
        }

    </style>
</head>

<body>
    <section id="content">
        <div class="bg-two">
            <div class="container">
                <div class="cardForm">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="logoForm">
                                <img src="{{ asset('assets/img/logo15.png') }}">
                            </div>
                            <form class="formLogin" method="post" action="{{ url('user/checkregister') }}">
                                {{ csrf_field() }}
                                <h5>สมัครสมาชิก</h5>
                                @if (Session::has('error'))
                                    <span class="error">{{ Session::get('error') }}</span>
                                @endif
                                <div class="col-lg-12 my-2">
                                    <label>Username @error('username')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" name="username">
                                </div>

                                <div class="col-lg-12 my-2">
                                    <label>Password @error('password')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="col-lg-12 my-2">
                                    <label>Confirm Password @error('confirm_password')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>

                                <div class="col-lg-12 my-2">
                                    <label>Email @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="col-lg-12 mt-3 text-center">
                                    {{-- <a href="#"><button class="btn-brown">สมัครสมาชิก</button></a> --}}
                                    <button type="submit" class="btn-brown">สมัครสมาชิก</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="rule">
                                <img src="{{ asset('assets/img/Group 35') }}.png">
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
