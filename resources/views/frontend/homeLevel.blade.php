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
        <div class="bg-tree">
            {{-- <?php include 'header.php'; ?> --}}
            @include('frontend.header')
            <div class="peopleOnline">
                <p><i class="fa fa-eye"></i>&nbsp;222&nbsp;<i class="fa fa-circle green"></i></p>
            </div>
            <div class="container">
                <div class="boardLevel">
                    <div class="boxLevel hover-effect">
                        <p class="bg-box1">Level 1</p>
                        <a href="{{ url('dashboard/1') }}">
                            <div class="icon">
                                <img src="{{ asset('assets/img/level1.png') }}">
                            </div>
                        </a>
                    </div>
                    <div class="boxLevel hover-effect">
                        <p class="bg-box2">Level 2</p>
                        <a href="{{ url('dashboard/2') }}">
                            <div class="icon">
                                <img src="{{ asset('assets/img/level2.png') }}">
                            </div>
                        </a>
                    </div>
                    <div class="boxLevel hover-effect">
                        <p class="bg-box3">Level 3</p>
                        <a href="{{ url('dashboard/3') }}">
                            <div class="icon">
                                <img src="{{ asset('assets/img/level3.png') }}">
                            </div>
                        </a>
                    </div>
                    <div class="boxLevel hover-effect">
                        <p class="bg-box4">Level 4</p>
                        <a href="{{ url('dashboard/4') }}">
                            <div class="icon">
                                <img src="{{ asset('assets/img/level4.png') }}">
                            </div>
                        </a>
                    </div>
                    <div class="boxLevel hover-effect">
                        <p class="bg-box5">Level 5</p>
                        <a href="{{ url('dashboard/5') }}">
                            <div class="icon">
                                <img src="{{ asset('assets/img/level5.png') }}">
                            </div>
                        </a>
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
