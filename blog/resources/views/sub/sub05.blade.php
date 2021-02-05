@include('inc/head')
<div id="sub">
    <div class="sub_banner sub_banner05">
        <h2>{{ __('messages.gnb05_01') }}</h2>
    </div>
    <div class="sub05 inner">
        <h2>location</h2>
        <div class="local">
            <div class="local_img">
                <div class="img_box">
                    <img src="/img/local.png" alt="지도" class="local_map">
                </div>
            </div>
            <div class="local_txt">
                <div class="img_box">
                    <img src="/img/local_logo.png" alt="logo">
                </div>                
                <div>
                    <img src="/img/local_icon01.png" alt="">
                    <span class="bold">{!! __('messages.sub05_01') !!}</span>
                </div>
                <div>
                    <div class="in_li in_01">
                        <img src="/img/local_icon02.png" alt="">
                        <span>{!! __('messages.sub05_02') !!}</span>
                    </div>
                    <div class="in_li">
                        <img src="/img/local_icon03.png" alt="">
                        <span>{!! __('messages.sub05_03') !!}</span>
                    </div>
                </div>               
                <div>
                    <img src="/img/local_icon04.png" alt="">
                    <span>{!! __('messages.sub05_04') !!}</span>
                </div>
            </div>
        </div>
        <div class="local_jp">
            <h2>位置のご案內</h2>
            <div class="local_add">            
                <div class="add_box01">
                    <h3>&middot; 地下鐵をご利用頂く場合</h3>
                    <p>
                        地下鐵3号線及び新盆唐線·良才驛(1番出口)から徒步2分
                        (1番出口を道なりに進み、シンバンビルで右折して2番目のビル(シンホビル)の6階)
                    </p>
                </div>
                <div class="add_box02">
                    <h3>&middot; 自動車·タクシ―をご利用頂く場合</h3>
                    <p>
                        ①  地下鐵3号線及び新盆唐線·良才驛(1番出口)を目標に移動した後, 良才驛の交差點で瑞草IC方向に進入して、1番目のビル(シンバンビル) で右折して2番目のビル(シンホビル)の6階にあります。<br>
                        ②  また、下記の韓國語の文章をタクシ―の運轉手などに見せて頂ければ、弊所に到着できゐよう詳しく說明してあります。また、弊所にお電話(02-518-8129) 頂けますと、弊所の職員が運轉手などに直接說明致します。
                    </p>
                </div>
                <div class="add_box03">
                    <h3>&middot; 弊所までの行き方(韓國語):韓國人に見せる場合にご利用下さい <span>(이 지도에 표시된 장소까지 친절히 설명해 주시면 대단히 감사하겠습니다.)</span>
                    </h3>
                    <p>
                        보스윈특허법률사무소<br>
                        주소: (06735) 서울시 서초구 강남대로 37길 23, 신호빌딩 6층 <br>
                        전화: Tel 02-518-3131(한국어직통)<br><br>
                        
                        <오시는 방법><br>
                        양재역 1번 출구에서 서초 IC 방향으로 첫번째 우측길의 신방빌딩에서 우회전하여
                        두번째 빌딩인 신호빌딩에 위치하고 있습니다.
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@include('inc/sub_footer')