@include('inc/head')
<div id="sub">
    <div class="sub_banner sub_banner03">
        <h2>{{ $sub_title }}</h2>
    </div>
    <div class="community inner">
        <div class="bbs_view">
            <div class="bbs_view_top">
                <div class="bbs_title">
                    <h2>{{ $data->subject }}</h2>
                </div>
                <div class="bbs_date">
                    <p>작성일 : {{ substr($data->reg_date, 0, 10) }}</p>
                </div>
            </div>
            <div class="bbs_view_inner">
                {!! $data->contents !!}
            </div>
            <div class="back_box">
                <a href="javascript:history.go(-1)">목록</a>
            </div>
        </div>
    </div>
</div>
@include('inc/sub_footer')