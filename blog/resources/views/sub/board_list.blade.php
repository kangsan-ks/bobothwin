@include('inc/head')
<script src="https://kit.fontawesome.com/7f5faa19ba.js" crossorigin="anonymous"></script>
<div id="sub">
    <div class="sub_banner sub_banner06">
        <h2>{{ $sub_title }}</h2>
    </div>
    <div class="community inner">
        <div class="bbs_list">
            <table class="list_type_01" style="table-layout:fixed">
                <colgroup>
                    <col width="10%">
                    <col width="80%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>제목</th>
                        <th>작성일</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($totalCount < 1)
                    <tr>
                        <td class="txt-center" colspan="3">게시글이 없습니다.</td>
                    </tr>    
                    @else
                    @foreach ($list as $list)
                    <tr>
                        <td class="txt-center">{{$number--}}</td>
                        <td class="text_ec">
                            <a href="/community/{{request()->segment(2)}}/view?idx={{$list->idx}}" class="">
                                {{$list->subject}}
                            </a>
                        </td>
                        <td class="txt-center">{{substr($list->reg_date, 0, 10)}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="txt-center">
                <ul class="pagination">
                    {!! $paging_view !!}
                </ul>
            </div>
        </div>
    </div>
</div>
<form name="search_form" action="{{ $_SERVER['REQUEST_URI'] }}" class="board_search_con" onsubmit="return search();">
    <input type="hidden" name="page" />
    <button></button>
</form>
@include('inc/sub_footer')