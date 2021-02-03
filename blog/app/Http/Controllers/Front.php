<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;

class Front extends Controller

{
    
    public function main(Request $request){
        
        $fq_list = DB::table('board')
                ->where('board_type', 'fq')
                ->orderBy('idx', 'desc')
                ->limit(4)->get();

        $news_list = DB::table('board')
                ->where('board_type', 'news')
                ->orderBy('idx', 'desc')
                ->limit(2)->get();

        $return_list = array();

        $return_list['fq_list'] = $fq_list;
        $return_list['news_list'] = $news_list;

        return view('index', $return_list);

    }
    public function sub01(Request $request){
        
        $view_url = '';
        $view_url .= '/sub/';
        $view_url .= $request->segment(1).'/'.$request->segment(2);

        $return_list = array();

        return view($view_url, $return_list);
    }
    public function sub02(Request $request){
        
        $return_list = array();

        return view('/sub/sub02', $return_list);
    }
    public function sub03(Request $request){
        
        $return_list = array();

        return view('/sub/sub03', $return_list);
    }
    public function sub04(Request $request){
        
        $view_url = '';
        $view_url .= '/sub/';
        $view_url .= $request->segment(1).'/'.$request->segment(2);

        $return_list = array();

        return view($view_url, $return_list);
    }

    public function sub05(Request $request){
        
        $return_list = array();

        return view('/sub/sub05', $return_list);
    }

    public function community(Request $request){

        $return_list = array();
        
        $view_url = '/sub/';
        $re_type1 = $request->segment(1);
        $re_type2 = $request->segment(2);
        $re_type3 = $request->segment(3);

        if($re_type3 == 'view'){
            $view_url .= 'board_view';
        }else if($re_type3 == ''){
            $view_url .= 'board_list';
        }

        if($re_type2 == 'fq'){
            $sub_title = 'F&Q';
        }else if($re_type2 == 'news'){
            $sub_title = 'NEWS';
        }

        $paging_option = array(
			"pageSize" => 10,
			"blockSize" => 5
        );

        $thisPage = ($request->page) ? $request->page : 1 ;
        $paging = new PagingFunction($paging_option);
        
        $totalQuery = DB::table('board');

        $totalQuery->where('board_type', $re_type2);

        $totalCount = $totalQuery->get()->count();
        
        $paging_view = $paging->paging($totalCount, $thisPage, "page");

        $query = DB::table('board')
                    ->select(DB::raw('*'))
                    ->where('board_type', $re_type2)
                    ->orderBy('idx', 'desc');

		if($request->page != "" && $request->page > 1) {
			$query->skip(($request->page - 1) * $paging_option["pageSize"]);
		}

		$list = $query->take($paging_option["pageSize"])->get();
		
		// 게시판 출력 글 번호 계산
		$number = $totalCount-($paging_option["pageSize"]*($thisPage-1));

        

        $return_list['list'] = $list;
        $return_list['sub_title'] = $sub_title;
        $return_list["number"] = $number;
        $return_list["totalCount"] = $totalCount;
		$return_list["paging_view"] = $paging_view;
		$return_list["page"] = $thisPage;

        return view($view_url, $return_list);
    }

    public function view(Request $request){
        $return_list = array();
        
        $view_url = '/sub/board_view';
        $re_type1 = $request->segment(1);
        $re_type2 = $request->segment(2);
        $re_type3 = $request->segment(3);

        if($re_type2 == 'fq'){
            $sub_title = 'F&Q';
        }else if($re_type2 == 'news'){
            $sub_title = 'NEWS';
        }

        $query = DB::table('board')
                ->select(DB::raw('*'))
                ->where('idx', $request->idx)->first();

        $return_list['sub_title'] = $sub_title;
        $return_list['data'] = $query;

        return view($view_url, $return_list);
    }

}
?>