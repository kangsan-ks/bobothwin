@include('inc/head')
<div id="main">
  <div class="swiper-container"> 
    <div class="swiper-wrapper">
        <div class="swiper-slide slide01">
            <div class="slide_text_box">
                <h3>고객과더불어 <strong>Win-Win</strong>하는</h3> 
                <h1><strong>보스윈</strong>특허</h1>
                <p>BothWin Patent & Law Firm aiming<br> for a win-win solution.</p>
            </div>
        </div>
        <div class="swiper-slide slide02">
              <div class="slide_text_box">
                <h3>고객과더불어 <strong>Win-Win</strong>하는</h3> 
                <h1><strong>보스윈</strong>특허</h1>
                <p>BothWin Patent & Law Firm aiming<br> for a win-win solution.</p>
              </div>
          </div>
          <div class="swiper-slide slide03">
              <div class="slide_text_box">
                <h3>고객과더불어 <strong>Win-Win</strong>하는</h3> 
                <h1><strong>보스윈</strong>특허</h1>
                <p>BothWin Patent & Law Firm aiming<br> for a win-win solution.</p>
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
          <h2>사무소 소개</h2>
          <p>보스윈특허법률 사무소를 소개합니다.</p>
          <a href="/sub01/sub01_01">+ view more</a> 
        </div>
      </li>
      <li>
        <div class="main_img_box q_img02 img_box">
          <img src="/img/main_box_img02.jpg" alt="">
        </div>
        <div class="main_text_box">
          <h2>구성원</h2>
          <p class="d_none">보스윈특허법률 사무소의 구성원을<br> 소개합니다.</p>
          <p class="d_block">보스윈특허법률 사무소의 구성원을 소개합니다.</p>
          <a href="/sub02">+ view more</a> 
        </div>
      </li>
      <li>
        <div class="main_img_box q_img03 img_box">
          <img src="/img/main_box_img03.jpg" alt="">
        </div>
        <div class="main_text_box">
          <h2>업무분야</h2>
          <p class="d_none">보스윈특허법률 사무소의 업무분야를<br> 안내합니다.</p>
          <p class="d_block">보스윈특허법률 사무소의 업무분야를 안내합니다.</p>
          <a href="/sub04/sub04_01">+ view more</a> 
        </div>
      </li>
      <li>
        <div class="main_img_box q_img04 img_box">
          <img src="/img/main_box_img04.jpg" alt="">
        </div>
        <div class="main_text_box">
          <h2>오시는길</h2>
          <p class="d_none">보스윈특허법률 사무소의 오시는 길을<br> 안내합니다.</p>
          <p class="d_block">보스윈특허법률 사무소의 오시는 길을 안내합니다.</p>
          <a href="/sub05">+ view more</a> 
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