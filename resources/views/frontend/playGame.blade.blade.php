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
            <div class="bg-navbar">
                <div class="row mx-0">
                    <div class="logo2 col-lg-3 col-sm-6">
                        <a href="index.php"><img src="{{ asset('assets/img/logo14.png') }}"></a>
                    </div>
                    <div class="logo col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-5 col-sm-4">
                                <div class="row opponent">
                                    <div class="col-lg-4">
                                        <img src="{{ asset('assets/img/Group23.png') }}">
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="gameDetail">
                                            <p>Username</p>
                                            <span>Score : 1234</span><br>
                                            <span>Level : 5</span>
                                        </div>

                                    </div>
                                    <div class="gameTime col-lg-4">
                                        <p>00:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4">
                                <div class="timeGame">
                                    <p>2:00</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-4">
                                <div class="myself row">
                                    <div class="gameTime col-lg-4">
                                        <p>00:00</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="gameDetail">
                                            <p>Username</p>
                                            <span>Score : 1234</span><br>
                                            <span>Level : 5</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="{{ asset('assets/img/Group23.png') }}">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-right col-lg-3">
                        <div class="dropdown">
                            <button type="button" class="btn-user dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-user"></i>&nbsp; User
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php">Home</a></li>
                                <li><a class="dropdown-item" href="homeLevel.php">Playgame</a></li>
                                <li><a class="dropdown-item" href="homeLevel.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="peopleOnline">
                <p><i class="fa fa-eye"></i>&nbsp;222&nbsp;<i class="fa fa-circle green"></i></p>
            </div>
            <div class="chessBackground container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="board">
                        </div>
                    </div>
                    <div class="col-lg-8 px-0">
                        <div class="chess-board">

                            <div class="row-8">
                                <div class="a8"><img src="{{ asset('assets/img/bR.png') }}">
                                </div>
                                <div class="b8"><img src="{{ asset('assets/img/bN.png') }}">
                                </div>
                                <div class="c8"><img src="{{ asset('assets/img/bS.png') }}">
                                </div>
                                <div class="d8"> <img src="{{ asset('assets/img/bM.png') }}">
                                </div>
                                <div class="e8"><img src="{{ asset('assets/img/bK.png') }}">
                                </div>
                                <div class="f8"><img src="{{ asset('assets/img/bS.png') }}">
                                </div>
                                <div class="g8"><img src="{{ asset('assets/img/bN.png') }}">
                                </div>
                                <div class="h8"><img src="{{ asset('assets/img/bR.png') }}">
                                </div>
                            </div>
                            <div class="row-7">
                                <div class="a7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                                <div class="b7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                                <div class="c7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                                <div class="d7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                                <div class="e7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                                <div class="f7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                                <div class="g7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                                <div class="h7"><img src="{{ asset('assets/img/bP.png') }}">
                                </div>
                            </div>
                            <div class="row-6">
                                <div class="a6"></div>
                                <div class="b6"></div>
                                <div class="c6"></div>
                                <div class="d6"></div>
                                <div class="e6"></div>
                                <div class="f6"></div>
                                <div class="g6"></div>
                                <div class="h6"></div>
                            </div>
                            <div class="row-5">
                                <div class="a5"></div>
                                <div class="b5"></div>
                                <div class="c5"></div>
                                <div class="d5"></div>
                                <div class="e5"></div>
                                <div class="f5"></div>
                                <div class="g5"></div>
                                <div class="h5"></div>
                            </div>
                            <div class="row-4">
                                <div class="a4"></div>
                                <div class="b4"></div>
                                <div class="c4"></div>
                                <div class="d4"></div>
                                <div class="e4"></div>
                                <div class="f4"></div>
                                <div class="g4"></div>
                                <div class="h4"></div>
                            </div>
                            <div class="row-3">
                                <div class="a3"></div>
                                <div class="b3"></div>
                                <div class="c3"></div>
                                <div class="d3"></div>
                                <div class="e3"></div>
                                <div class="f3"></div>
                                <div class="g3"></div>
                                <div class="h3"></div>
                            </div>
                            <div class="row-2">
                                <div class="a2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                                <div class="b2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                                <div class="c2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                                <div class="d2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                                <div class="e2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                                <div class="f2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                                <div class="g2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                                <div class="h2"><img src="{{ asset('assets/img/wP.png') }}">
                                </div>
                            </div>
                            <div class="row-1">
                                <div class="a1"><img src="{{ asset('assets/img/wR.png') }}">
                                </div>
                                <div class="b1"><img src="{{ asset('assets/img/wN.png') }}">
                                </div>
                                <div class="c1"><img src="{{ asset('assets/img/wS.png') }}">
                                </div>
                                <div class="d1"><img src="{{ asset('assets/img/wM.png') }}">
                                </div>
                                <div class="e1"><img src="{{ asset('assets/img/wK.png') }}">
                                </div>
                                <div class="f1"><img src="{{ asset('assets/img/wS.png') }}">
                                </div>
                                <div class="g1"><img src="{{ asset('assets/img/wN.png') }}">
                                </div>
                                <div class="h1"><img src="{{ asset('assets/img/wR.png') }}">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="board">
                        </div>
                    </div>
                </div>


            </div>
            <div class="boxSetting">
                <h3>Table</h3>
                <p>#1011</p>
                <hr>
                <div class="btn-setting">
                    <button>เสมอ</button>
                    <button>ยอมแพ้</button>
                </div>
                <hr>
                <div class="setting">
                    <span><i class="fa fa-gear"></i>&nbsp;ตั้งค่า</span><br>
                    <select>
                        <option>ส่วนตัว</option>
                        <option>สาธารณะ</option>
                    </select><br>
                    <span>เวลาของเกม</span><br>
                    <select>
                        <option>3m</option>
                        <option>10m</option>
                    </select><br>
                    <input type="checkbox">&nbsp; เสียง
                </div>

            </div>
            <div class="chat">
                <button class="open-button" onclick="openForm()"><i class="fa fa-comments"></i>&nbsp; Chat</button>

                <div class="chat-popup" id="myForm">
                    <form action="/action_page.php" class="form-container">
                        <button class="w3-button" onclick="openType('chat')">แชท</button>
                        <button class="w3-button" onclick="openType('move')">เคลื่อนที่</button>
                        <div id="chat" class="w3-container type"><br>
                            <label for="msg"><b>ข้อความ</b></label>
                            <textarea placeholder="Type message.." name="msg" required></textarea>
                            <button type="submit" class="btn">Send</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </div>
                        <div id="move" class="w3-container type" style="display:none">
                            <p>1 <span>e2e4</span></p>
                        </div>


                    </form>
                </div>
            </div>



        </div>

    </section>

    {{-- <?php include 'footer2.php'; ?>
    <?php include 'javascript.php'; ?> --}}
    @include('frontend.footer2')
    @include('frontend.javascript')

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    <script>
        function openType(typeName) {
            var i;
            var x = document.getElementsByClassName("type");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(typeName).style.display = "block";
        }
    </script>
</body>

</html>
