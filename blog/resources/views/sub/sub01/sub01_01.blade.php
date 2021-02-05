@include('inc/head')
<div id="sub">
    <div class="sub_banner sub_banner01">
        <h2>{{ __('messages.gnb01') }}</h2>
    </div>
    <div class="sub01_01_content">
        <img src="/img/intro_bg.png" alt="">
        <div class="sub01_box01 inner">
            <div class="img_box">
                <img src="/img/intro.png" alt="사진">
            </div>            
            <div class="greeting_txt">
                <img src="/img/dot.png" alt="">
                <h2>{!! __('messages.sub01_01') !!}</h2>
            </div>
        </div>
        <div class="sub01_box02 inner">
            <div class="bw_top">
                <p>
                    {{ __('messages.sub01_box01') }}
                </p>
                <div class="img_box">
                    <img src="/img/infro_txt01.png" alt="">
                </div>
            </div>
            <div class="bw_bottom">
                <div class="img_box">
                    <img src="/img/infro_txt02.png" alt="">
                </div>                
                <p class="m_none">
                    {!! __('messages.sub01_box02_01') !!}
                </p>
                <p class="m_block">
                    {!! __('messages.sub01_box02_02') !!}
                </p>
                
            </div>
        </div>
        <div class="sub01_box03">
            <div>
                <h4>{{ __('messages.sub01_box03_01') }}</h4>
                <p>
                    {!! __('messages.sub01_box03_02') !!}
                </p>
            </div>            
        </div>
    </div>
</div>
@include('inc/sub_footer')