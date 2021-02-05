@include('inc/head')
<div id="sub">
    <div class="sub_banner sub_banner04">
        <h2>{{ __('messages.gnb04_02') }}</h2>
    </div>
    <div class="sub04_02 inner">
        <div class="work_list">
            <div class="work_list_txt">
                <h2>{!! __('messages.sub04_02_main_01') !!}</h2>
                <p>
                    {{ __('messages.sub04_02_box_01') }}
                </p>
            </div>
            <div class="work_list_img">
                <div class="img_box">
                    <img src="/img/business02_01.png" alt="">
                </div>                
            </div>
        </div>
        <div class="work_list">
            <div class="work_list_img">
                <div class="img_box">
                    <img src="/img/business02_02.png" alt="">
                </div>   
            </div>    
            <div class="work_list_txt">
                <h2>{!! __('messages.sub04_02_main_02') !!}</h2>
                <p>
                    {{ __('messages.sub04_02_box_02') }}
                </p>
            </div>            
        </div>
        <div class="work_list">
            <div class="work_list_txt">
                <h2>{!! __('messages.sub04_02_main_03') !!}</h2>
                <p>
                    {{ __('messages.sub04_02_box_03') }}
                </p>
            </div>
            <div class="work_list_img">
                <div class="img_box">
                    <img src="/img/business02_03.png" alt="">
                </div>       
            </div>
        </div>
        <div class="work_list">
            <div class="work_list_img">
                <div class="img_box">
                    <img src="/img/business02_04.png" alt="">
                </div>       
            </div>
            <div class="work_list_txt">
                <h2>{!! __('messages.sub04_02_main_04') !!}</h2>
                <p>
                    {{ __('messages.sub04_02_box_04') }}
                </p>
            </div>            
        </div>
        <div class="work_list">
            <div class="work_list_txt">
                <h2>{!! __('messages.sub04_02_main_05') !!}</h2>
                <p>
                    {{ __('messages.sub04_02_box_05') }}
                </p>
            </div>
            <div class="work_list_img">
                <div class="img_box">
                    <img src="/img/business02_05.png" alt="">
                </div>       
            </div>
        </div>
    </div>
</div>
@include('inc/sub_footer')