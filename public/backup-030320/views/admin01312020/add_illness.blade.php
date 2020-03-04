@extends('layouts.app')
@section('content')

<!-- <h2>Add Illness</h2> -->
<br>
{!! Form::open(array('url' => '/', 'method' => 'post')) !!}
<div class="row" style="font-size:12px;">
    <div class="col-8">
        <h3>手足口病</h3>
        ID番号：I00000
    </div>
    <div class="col-1">
        作成日<br>
        Date
    </div>
    <div class="col-1">
        0000/00/00
    </div>
    <div class="col-1">
    最終更新日<br>
    Update
    </div>
    <div class="col-1">
        0000/00/00
    </div>
</div>
<hr>
<div style="position: absolute;left:65%; max-width: 100px; font-size:12px;">
    <!-- <td colspan="2"> -->
        <ul class="step d-flex flex-nowrap">
            <li class="step-item">
                <a href="#!" class="">下書き<br>Draft</a>
            </li>
            <li class="step-item">
                <a href="#!" class="">プレビュー<br>Preview</a>
            </li>
            <li class="step-item active">
                <a href="#!" class="">承認依頼<br>Approval request</a>
            </li>
            <li class="step-item">
                <a href="#!" class="">承認済<br>Approved</a>
            </li>
            <li class="step-item">
                <a href="#!" class="">公開予約<br>Release reservation</a>
            </li>
            <li class="step-item">
                <a href="#!" class="">公開中<br>Release</a>
            </li>
        </ul> 
    <!-- </td> -->
</div>

<div class="float-center">
<table class="table table-borderless" style="width:100%;background-color:#F7F7F7;">

<tr>
    <td>URL自動生成名<br>URL generation</td>
    <td>{!! Form::text('url_generation', null , ['class' => 'form-control small-width']) !!}</td>
</tr>

<tr>
    <td>病気カテゴリー<br>Illness category</td>
    <td>
    {!! Form::select('illness_category', $items ,null ,['class' => 'form-control small-width']) !!}
    
    </td>
</tr>
<!-- <tr>
    <td>特集カテゴリー</td>
    <td>{!! Form::select('special_category', array('L' => 'Large', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>特集タイトル</td>
    <td>{!! Form::select('special_title', array('L' => 'Large', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
</tr> -->
<tr>
    <td>病名ショルダー<br>Illness shoulder</td>
    <td>{!! Form::text('illness_shoulder', null , ['class' => 'form-control']) !!}</td>
    <td style="vertical-align:bottom;">0/20</td>
</tr>
<tr>
    <td>病名<br>Illness</td>
    <td>{!! Form::text('illness', null , ['class' => 'form-control']) !!}</td>
    <td style="vertical-align:bottom;">0/14</td>
</tr>
<tr>
    <td>病名ふりがな<br>Illness phonetic</td>
    <td>{!! Form::text('illness_phonetic', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>監修・協力医師<br>Doctor</td>
    <td>{!! Form::select('doctor', $doctors ,null ,['class' => 'form-control']) !!}</td>
    <td>{!! Form::radio('radio_button', null) !!} 監修</td>
    <td>{!! Form::radio('radio_button', null) !!} 取材協力</td>
    <td>{!! Form::radio('radio_button', null) !!} 監修・取材協力</td>
</tr>
<tr>
    <td>医師コメント<br>Doctor comment</td>
    <td>{!! Form::textarea('doctor_comment', null , ['class' => 'form-control']) !!}</td>
    <td colspan="2"><a href="#" class="btn btn-info"><i class='far fa-arrow-alt-circle-down' style='font-size:18px;color:white'></i> 保存</a></td>
</tr>
<tr>
    <td>まとめ<br>Summarize</td>
    <td><div id="academic">
        {!! Form::textarea('summarize', null , ['class' => 'form-control']) !!}
    </div>
    <div id="new_chq"></div>
    <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
</tr>
<tr>
    <td>メイン画像<br>Main image</td>
    <td>{!! Form::file('main_image', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>画像キャプション<br>Image caption</td>
    <td>{!! Form::text('img_caption', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>画像alt<br>Image alt</td>
    <td>{!! Form::text('img_alt', null , ['class' => 'form-control']) !!}</td>
</tr>
<div id="academic">
<tr>
    <td>小見出し<br>Subheading</td>
    <td>{!! Form::text('subheading', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td></td>
    <td>{!! Form::text('subheading_input', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>本文<br>Text of Subheading</td>
    <td>{!! Form::textarea('text_of_heading', null , ['class' => 'form-control']) !!}</td>
</tr>
</div>
<tr>
    <td></td>
    <td align="right"><div id="new_chq"></div>
    <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
</tr>
<tr>
    <td>小見出し<br>Subheading</td>
    <td>{!! Form::textarea('Subheading_two_text', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>本文<br>Text of Subheading</td>
    <td>{!! Form::text('subheading_two', null , ['class' => 'form-control']) !!}</td>
    <td>リスク度</td>
    <td>{!! Form::selectRange('risk_level', 1, 5,null, ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td align="right"><div id="new_chq"></div>
    <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
</tr>
<tr>
    <td>チェック結果<br>Check result</td>
    <td>
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>{!! Form::text('check_result', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('check_result', null , ['class' => 'form-control']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::text('check_result', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('check_result', null , ['class' => 'form-control']) !!}</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>検索キーワード<br>Search Key word</td>
    <td>
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('keyword', null , ['class' => 'form-control']) !!}</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>タイトルタグ<br>Title tag for SEO</td>
    <td>{!! Form::checkbox('check_title_tag', null) !!} <b style="color:red;">手足口病の症状・原因・治療と予防法｜メディカルテラス</b></td>
</tr>
<tr>
    <td></td>
    <td>{!! Form::textarea('check_title_tag_text', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>ディスクリプション<br>Meta description for SEO</td>
    <td>{!! Form::textarea('meta_desc', null , ['class' => 'form-control']) !!}</td>
</tr>
<tr>
    <td>h2</td>
    <td>
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>{!! Form::text('h2', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('h2', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('h2', null , ['class' => 'form-control']) !!} <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>タグ（キーワード）<br>Tag(key word)</td>
    <td colspan="2">
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
            </tr>
            <tr>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
            </tr>
            <tr>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
                <td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>タグ（病名）<br> Tag(illness name)</td>
    <td>{!! Form::checkbox('tag_illness_name', null) !!} 病名より自動生成</td>
</tr>
<tr>
    <td>タグ（診療科・所属科）<br> Tag(department)</td>
    <td colspan="2">
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>{!! Form::select('tag_dpmt', array('L' => '選択してください', 'S' => 'Admissions', 'A' => 'Anesthetics', 'B' => 'Cardiology', 'C' => 'Discharge Lounge', 'D' => 'Gastroenterology', 'E' => 'General Services'),null ,['class' => 'form-control', 'F' => 'Health & Safety']) !!}</td>
                <td>{!! Form::select('tag_dpmt', array('L' => '選択してください', 'S' => 'Admissions', 'A' => 'Anesthetics', 'B' => 'Cardiology', 'C' => 'Discharge Lounge', 'D' => 'Gastroenterology', 'E' => 'General Services'),null ,['class' => 'form-control', 'F' => 'Health & Safety']) !!}</td>
                <td>{!! Form::select('tag_dpmt', array('L' => '選択してください', 'S' => 'Admissions', 'A' => 'Anesthetics', 'B' => 'Cardiology', 'C' => 'Discharge Lounge', 'D' => 'Gastroenterology', 'E' => 'General Services'),null ,['class' => 'form-control', 'F' => 'Health & Safety']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::select('tag_dpmt', array('L' => '選択してください', 'S' => 'Admissions', 'A' => 'Anesthetics', 'B' => 'Cardiology', 'C' => 'Discharge Lounge', 'D' => 'Gastroenterology', 'E' => 'General Services'),null ,['class' => 'form-control', 'F' => 'Health & Safety']) !!}</td>
                <td>{!! Form::select('tag_dpmt', array('L' => '選択してください', 'S' => 'Admissions', 'A' => 'Anesthetics', 'B' => 'Cardiology', 'C' => 'Discharge Lounge', 'D' => 'Gastroenterology', 'E' => 'General Services'),null ,['class' => 'form-control', 'F' => 'Health & Safety']) !!}</td>
                <td>{!! Form::select('tag_dpmt', array('L' => '選択してください', 'S' => 'Admissions', 'A' => 'Anesthetics', 'B' => 'Cardiology', 'C' => 'Discharge Lounge', 'D' => 'Gastroenterology', 'E' => 'General Services'),null ,['class' => 'form-control', 'F' => 'Health & Safety']) !!}</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>タグ（症状）<br> Tag(Symptoms)</td>
    <td colspan="2">
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>{!! Form::text('tag_symptoms', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_symptoms', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_symptoms', null , ['class' => 'form-control']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::text('tag_symptoms', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_symptoms', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_symptoms', null , ['class' => 'form-control']) !!}</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>タグ（季節）<br> Tag(season)</td>
    <td colspan="2">
        <table class="table" style="background-color:#F7F7F7;padding:2px;">
            <tr>
                <td>{!! Form::checkbox('tag_season', null) !!} 春</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 夏</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 秋</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 夏</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 4月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 5月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 6月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 7月</td>
            </tr>
            <tr>
                <td>{!! Form::checkbox('tag_season', null) !!} 8月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 9月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 10月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 11月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 12月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 1月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 2月</td>
                <td>{!! Form::checkbox('tag_season', null) !!} 3月</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>タグ（フリー入力）<br> Tag(free)</td>
    <td colspan="2">
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>{!! Form::text('tag_free', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_free', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_free', null , ['class' => 'form-control']) !!}</td>
            </tr>
	    <tr>
                <td>{!! Form::text('tag_free', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_free', null , ['class' => 'form-control']) !!}</td>
                <td>{!! Form::text('tag_free', null , ['class' => 'form-control']) !!}</td>
            </tr>
        </table>
    </td>
    <td>
			<table class="table" style="background-color:#F7F7F7;">
				<tr>
					<td>{!! Form::button('プレビュー', ['class' => 'btn btn-success']) !!}</td>
				</tr>
				<tr>
					<td>{!! Form::button('公開予約', ['class' => 'btn btn-warning']) !!}</td>
				</tr>
				<tr>
					<td>{!! Form::button('公開', ['class' => 'btn btn-info']) !!}</td>
				</tr>
			</table>
		</td>
</tr>
<!-- <tr>
    <td></td>
    <td>{!! Form::button('preview') !!}
    {!! Form::button('release_one') !!}
    {!! Form::button('release_two') !!}</td>
</tr> -->
        
    
</table>
</div>
<table class="table" style="background-color:#aee4e4;">
	<tr>
		<td>エディター担当者<br>Editor</td>
		<td>{!! Form::text('Editor', null , ['class' => 'form-control']) !!}</td>
        <td>{!! Form::button('エディター変更申請', ['class' => 'btn btn-success']) !!}</td>
	</tr>
	<tr>
		<td>メモ<br>Note </td>
		<td>{!! Form::textarea('Honorarium', null , ['class' => 'form-control']) !!}</td>
	</tr>
</table>

{!! Form::close() !!}

@endsection