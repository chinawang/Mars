<!DOCTYPE html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Blog China</title>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <link rel='stylesheet' href="/css/bootstrap.min.css" type="text/css" media="all"/>
    <script type='text/javascript' src="/js/all.js"></script>

    {{--<link rel='stylesheet' href="/css/select2.css" type='text/css' media='all'/>--}}
    {{--<script src="/js/jquery-2.1.1.min.js"></script>--}}
    {{--<script src="/js/select2.full.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
    <div class="container">
        <section class="content">
            <div class="pad group">
                @yield('content')
            </div>
        </section>
    </div>

    <nav class="nav-container group" id="nav-footer">
        <div class="nav-wrap">
            <ul class="nav container group">
                <li class="menu-item">
                    <a href="/" rel="nofollow" target="_blank">Laravel 5 Blog</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
</body>
</html>

