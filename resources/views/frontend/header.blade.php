<div class="bg-navbar">
    <div class="row mx-0">
        <div class="logo col-lg-6 col-sm-6 col-md-6">
            <a href="{{ url('index') }}"><img src="{{ asset('assets/img/logo13.png') }}"></a>
        </div>
        <div class="btn-right col-lg-6 col-sm-6 col-md-6">
            @if (isset(Auth::user()->email))
                <a href="{{ url('user/logout') }}">
                    <div class="btn-login">
                        <i class="fa fa-user"></i>&nbsp; ออกจากระบบ
                    </div>
                </a>
            @else
                <a href="{{ url('login') }}">
                    <div class="btn-login">
                        <i class="fa fa-user"></i>&nbsp; เข้าสู่ระบบ
                    </div>
                </a>
                <a href="{{ url('register') }}">
                    <div class="btn-login">
                        <i class="fa fa-user-plus"></i>&nbsp; สมัครสมาชิก
                    </div>
                </a>
            @endif
        </div>
    </div>
</div>
