@include('inc/head')
<div id="main">

  <div class="swiper-container"> 
    <div class="swiper-wrapper">
        <div class="swiper-slide slide01">
            <div class="slide_text_box">              
                <h3>{!! __('messages.slide01_01') !!}</h3> 
                <h1>{!! __('messages.slide01_02') !!}</h1>
                <p>{!! __('messages.slide01_03') !!}</p>
            </div>
        </div>
        <div class="swiper-slide slide02">
              <div class="slide_text_box">
                <h3>{!! __('messages.slide01_01') !!}</h3> 
                <h1>{!! __('messages.slide01_02') !!}</h1>
                <p>{!! __('messages.slide01_03') !!}</p>
              </div>
          </div>
          <div class="swiper-slide slide03">
              <div class="slide_text_box">
                <h3>{!! __('messages.slide01_01') !!}</h3> 
                <h1>{!! __('messages.slide01_02') !!}</h1>
                <p>{!! __('messages.slide01_03') !!}</p>
              </div>
        </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  <div class="q_box01 inner">
    <ul class="q_box01_inner">
      <li>
        <div class="main_img_box q_img01 img_box">
          <img src="/img/main_box_img01.jpg" alt="">
        </div>
        <div class="main_text_box">
          <h2>{{ __('messages.gnb01') }}</h2>
          <p>{{ __('messages.main_box1_01_02') }}</p>
          <a href="/sub01/sub01_01">{{ __('messages.main_box1_01_03') }}</a> 
        </div>
      </li>
      <li>
        <div class="main_img_box q_img02 img_box">
          <img src="/img/main_box_img02.jpg" alt="">
        </div>
        <div class="main_text_box">
          <h2>{{ __('messages.gnb02') }}</h2>
          <p class="d_none">{!! __('messages.main_box1_02_02') !!}</p>
          <p class="d_block">{{ __('messages.main_box1_02_02_01') }}</p>
          <a href="/sub02">{{ __('messages.main_box1_01_03') }}</a> 
        </div>
      </li>
      <li>
        <div class="main_img_box q_img03 img_box">
          <img src="/img/main_box_img03.jpg" alt="">
        </div>
        <div class="main_text_box">
          <h2>{{ __('messages.gnb04') }}</h2>
          <p class="d_none">{!! __('messages.main_box1_03_02') !!}</p>
          <p class="d_block">{{ __('messages.main_box1_03_02_01') }}</p>
          <a href="/sub04/sub04_01">{{ __('messages.main_box1_01_03') }}</a> 
        </div>
      </li>
      <li>
        <div class="main_img_box q_img04 img_box">
          <img src="/img/main_box_img04.jpg" alt="">
        </div>
        <div class="main_text_box">
          <h2>{{ __('messages.gnb05_01') }}</h2>
          <p class="d_none">{!! __('messages.main_box1_04_02') !!}</p>
          <p class="d_block">{{ __('messages.main_box1_04_02_01') }}</p>
          <a href="/sub05">{{ __('messages.main_box1_01_03') }}</a> 
        </div>
      </li>
    </ul>
  </div>
  {{-- <div class="q_box02">
    <ul class="q_box02_list inner">
      <li class="q_box02_01">
        <div class="left_title">
          <div class="left_txt_box">
            <div>
              <p>F&amp;Q</p>
              <h2>자주하는 질문</h2>
            </div>
            <a href="/community/fq">
             <img src="/img/arrow.png" alt="arrow" class="arrow">
            </a>
          </div>
          <div>
            <img src="/img/mark_img.png" alt="" class="mark">
          </div>          
        </div>
        <div class="left_board">
          @foreach ($fq_list as $fq_list)
          <p>
            <span><a href="/community/news/view?idx={{ $fq_list->idx }}">&middot;{{ $fq_list->subject }}</a></span>
            <span><a href="/community/news/view?idx={{ $fq_list->idx }}">관리자   {{ substr($fq_list->reg_date,0 ,10) }}</a></span>
          </p>
          @endforeach
          
        </div>
      </li>
      <li class="q_box02_02">
        <div class="right_title">
          <div>
            <p>NEWS</p>
            <h2>뉴스정보</h2>
          </div>
          <span><a href="/community/news">+</a></span>
        </div>
        <div class="right_board">
          @foreach ($news_list as $news_list)
              <h3><a href="/community/news/view?idx={{ $news_list->idx }}">{{ $news_list->subject }}</a></h3>
              {!! $news_list->contents !!}
          @endforeach
        </div>
      </li>
    </ul>
  </div> --}}
</div>


@include('inc/sub_footer')