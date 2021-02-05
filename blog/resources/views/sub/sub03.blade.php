@include('inc/head')
<div id="sub">
    <div class="sub_banner sub_banner03">
        <h2>{{ __('messages.gnb03') }}</h2>
    </div>
    <div class="sub03 inner">
        <img src="/img/chart_logo.png" alt="" class="logo">
        <h2>{{ __('messages.sub03_01') }}</h2>
        <img src="/img/chart.png" alt="조직도" class="chart_p">
        <img src="/img/chart_en.png" alt="조직도" class="chart_en_p">
        <img src="/img/chart_jp.png" alt="조직도" class="chart_jp_p">
        <div class="img_box">
            <img src="/img/m_chart.png" alt="조직도" class="chart_m">
            <img src="/img/m_chart_en.png" alt="조직도" class="chart_en_m">
            <img src="/img/m_chart_jp.png" alt="조직도" class="chart_jp_m">
        </div>        
    </div>
</div>
@include('inc/sub_footer')