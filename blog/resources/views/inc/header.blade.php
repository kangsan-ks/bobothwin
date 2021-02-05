<body class="ko">
    <div id="container">
    <div id="header">
        <div class="header_top">
            <div class="lang_box">
                <a href="/switchLang/ko" class="@if(session('locale') == 'ko') on @endif">KO</a>
                <a href="/switchLang/en" class="@if(session('locale') == 'en') on @endif">EN</a>
                <a href="/switchLang/jp" class="@if(session('locale') == 'jp') on @endif">JP</a>
            </div>
        </div>     
        <div class="header_inner">
            <h1 class="logo">
                <a href="/">
                    <img src="/img/logo.png" alt="logo">
                </a>
            </h1>
            <ul class="main_menu inner">
                <li>
                    {{ __('messages.gnb01') }}
                    <ul class="sub_menu">
                        <li><a href="/sub01/sub01_01">{{ __('messages.gnb01_01') }}</a></li>
                    </ul>
                </li>
                <li><a href="/sub02">{{ __('messages.gnb02') }}</a></li>
                <li><a href="/sub03">{{ __('messages.gnb03') }}</a></li>
                {{-- <li>
                    커뮤니티
                    <ul class="sub_menu">
                        <li><a href="/community/fq">F&Q</a></li>
                        <li><a href="/community/news">NEWS</a></li>
                    </ul>
                </li> --}}
                <li>
                    {{ __('messages.gnb04') }}
                    <ul class="sub_menu">
                        <li><a href="/sub04/sub04_01">{{ __('messages.gnb04_01') }}</a></li>
                        <li><a href="/sub04/sub04_02">{{ __('messages.gnb04_02') }}</a></li>
                    </ul>
                </li>
                <li><a href="/sub05">{{ __('messages.gnb05') }}</a></li>
            </ul>           
            <div class="img_box m_block">
                <img src="/img/respon_menu.png" alt="" class="respon_menu_btn">
            </div>
            <div class="respon_menu">
                <div class="img_box">
                    <img src="/img/close_menu.png" alt="닫기" class="close_btn">
                </div>
                <ul class="menu_box">
                    <li>
                        <p>{{ __('messages.gnb01') }}</p> 
                        <span><img src="/img/down_icon.png" alt="메뉴 더보기"></span>
                        <ul>
                            <li><a href="/sub01/sub01_01">{{ __('messages.gnb01_01') }}</a></li>
                        </ul>
                    </li>                    
                    <li><p><a href="/sub02">{{ __('messages.gnb02') }}</a></p></li>                    
                    <li><p><a href="/sub03">{{ __('messages.gnb03') }}</a></p></li> 
                    {{-- <li>
                        <p>커뮤니티</p>
                        <span><img src="/img/down_icon.png" alt="메뉴 더보기"></span>
                        <ul>
                            <li><a href="/sub04/sub04_01">F&Q</a></li>
                            <li><a href="/sub04/sub04_02">NEWS</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <p>{{ __('messages.gnb04') }}</p>
                        <span><img src="/img/down_icon.png" alt="메뉴 더보기"></span>
                        <ul>
                            <li><a href="/sub04/sub04_01">{{ __('messages.gnb04_01') }}</a></li>
                            <li><a href="/sub04/sub04_02">{{ __('messages.gnb04_02') }}</a></li>
                        </ul>
                    </li>
                    <li><p><a href="/sub05">{{ __('messages.gnb05') }}</a></p></li>                    
                </ul>                
            </div>
        </div>
    </div>
            