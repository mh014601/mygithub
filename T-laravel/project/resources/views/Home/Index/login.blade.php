<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />


    <title>中意家园网上商城</title>
    <meta name="Keywords" content="中意家园网上商城" />
    <meta name="Description" content="中意家园网上商城" />
    <link href="{{asset('Home/css/style.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('Home/js/jquery.min.js')}}"></script>
    <link href="{{asset('Home/css/nav2.css')}}" type="text/css" rel="stylesheet"><!--藏品分类 -->
    <link href="{{asset('Home/css/amazeui.min.css')}}" rel="stylesheet" />
    <script src="{{asset('Home/js/amazeui.min.js')}}"></script>
    <link href="{{asset('Home/css/fanda.css')}}" type="text/css" rel="stylesheet">

    <!--手滑效果 -->
    <script type="text/javascript">
        <!--
        var timeout         = 500;
        var closetimer		= 0;
        var ddmenuitem      = 0;

        // open hidden layer
        function mopen(id)
        {
            // cancel close timer
            mcancelclosetime();

            // close old layer
            if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

            // get new layer and show it
            ddmenuitem = document.getElementById(id);
            ddmenuitem.style.visibility = 'visible';

        }
        // close showed layer
        function mclose()
        {
            if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
        }

        // go close timer
        function mclosetime()
        {
            closetimer = window.setTimeout(mclose, timeout);
        }

        // cancel close timer
        function mcancelclosetime()
        {
            if(closetimer)
            {
                window.clearTimeout(closetimer);
                closetimer = null;
            }
        }

        // close layer when click-out
        document.onclick = mclose;
        // -->
    </script>
</head>

<body style="height:100%; overflow:hidden;background: #f1f1f1;">

<div class="qing juzhong lobg" style="position: absolute;top: 50%;margin-top: -290px; left:50%; margin-left:-600px;">
    <div class="log-lf"></div>
    <div class="log-rf">
        <div class="logk">
            <form id="loginform" action="{{url('Home/Index/loginAction')}}" method="post">
                <input type="hidden" value="{{$returnUrl}}" name="returnUrl">
                {{csrf_field()}}
                <div class="loto"><img src="{{asset('Home/images/login-t.png')}}" width="145" height="145" class="login-t"><img src="{{asset('Home/images/login-bg.png')}}" width="221" height="247" class="login-bg"></div>
                <div class="lo-dl">
                    <div class="lf">账号：</div>
                    <input type="text" placeholder="请输入注册时的手机号" name="uname" id="uname">
                </div>
                <div class="lo-dl">
                    <div class="lf">密码：</div>
                    <input type="password" placeholder="请输入密码" name="upass" id="upass">
                </div>
                <div>
                    <a href="#"><input type="submit" value="立即登录" class="dlan"></a>
                </div>
                <div class="lo-zc">
                    还没有帐号？　　<a href="#" class="lo-zc1">免费注册</a>　　|　　<a href="#" class="lo-zc2">忘记密码？</a>
                </div>
                <div>
                    <a href="https://graph.qq.com/oauth2.0/authorize?
response_type=code&client_id=101511175&redirect_uri={{$url}}&state=test">
                        <img src="{{asset('Home/images/Connect_logo_1.png')}}" alt="">
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
