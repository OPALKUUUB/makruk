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
        <div class="bg-first">
            {{-- <?php include 'header.php'; ?> --}}
            @include('frontend.header')
            <div class="peopleOnline">
                <p><i class="fa fa-eye"></i>&nbsp;222&nbsp;<i class="fa fa-circle green"></i></p>
            </div>
            <div class="container-sm">

                <div class="detailFirst">
                    <h1>THAI BOARD GAMES</h1>
                    <p>PLAYER RANK</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 mt-0 mb-3 mb-lg-0 mt-lg-5 hover-effect">
                        <div class="cardRank icon">
                            <i class="fa fa-medal tree-medal"></i>
                            <img src="{{ asset('assets/img/girl.png') }}" class="img-rank">
                            <div class="textRank">
                                <p>Username</p>
                                <span>Score : 1234</span><br>
                                <span>Level : 5</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-3 mb-lg-0 hover-effect">
                        <div class="cardRank icon">
                            <i class="fa fa-medal one-medal"></i>
                            <img src="{{ asset('assets/img/man.png') }}" class="img-rank">
                            <div class="textRank">
                                <p>Username</p>
                                <span>Score : 1234</span><br>
                                <span>Level : 5</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mt-0 mb-3 mb-lg-0 mt-lg-5 hover-effect">
                        <div class="cardRank icon">
                            <i class="fa fa-medal two-medal"></i>
                            <img src="{{ asset('assets/img/girl.png') }}" class="img-rank">
                            <div class="textRank">
                                <p>Username</p>
                                <span>Score : 1234</span><br>
                                <span>Level : 5</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cardrules">

                    <h4>กติกาการเล่น</h4>
                    <p>1. การเดินหมากตัวหนึ่งให้ใช้เวลาคิดได้ไม่เกิน 2 นาที หากครบ 2 นาทีแล้วไม่เดินให้ถูกปรับเป็นแพ้
                    </p>
                    <p>2. กรณีฝ่ายที่ถูก "รุก" แล้วไม่เดินขุน แต่รอเวลาหมด 2 นาที ให้ถูกปรับเป็นแพ้</p>
                    <p>3. กรณีฝ่ายที่ถูก "รุก" ไม่สามารถเดินขุนได้ เรียกว่า "ถูกรุกจน" ให้ถูกปรับเป็นแพ้</p>
                    <p>4. กรณีฝ่ายที่ถูกกดตาเดินหน้าขุน ไม่สามารถเดินขุนได้ให้สามารถเดินหมากตัวอื่นได้</p>
                </div>

            </div>
            <div class="tableRank">
                <table class="table cardTable table-hover">
                    <thead>
                        <tr>
                            <th colspan="4">PLAYER RANK TOP 10</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Top.1</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.2</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.3</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.4</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.5</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.6</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.7</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.8</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.9</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <td>Top.10</td>
                            <td><img src="{{ asset('assets/img/Group23.png') }}"></td>
                            <td>NameUser</td>
                            <td>5864</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-right">readmore >></th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- <?php include 'footer1.php'; ?>
    <?php include 'javascript.php'; ?> --}}
    @include('frontend.footer1')
    @include('frontend.javascript')
</body>

</html>
