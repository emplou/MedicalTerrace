@extends('layouts.app')
@section('content')

    
    {!! Form::open(array('url' => '/', 'method' => 'post')) !!}
    <table class="table table-borderless" style="width:100%;background-color:#F7F7F7;">
        <tr>
            <td>URL自動生成名<br>URL generation</td>
            <td>{!! Form::text('url_generation', null , ['class' => 'form-control']) !!}</td>
        </tr>
       
        <tr>
            <td></td>
            <td>{!! Form::text('position', null , ['class' => 'form-control']) !!}</td>
        </tr>
            <tr>
            <td>専門医・認定医 (取得資格)<br>Certificate</td>
            <td>{!! Form::text('certificate', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
        </tr>
        <tr>
            <td>氏名<br>Name</td>
            <td>{!! Form::text('name', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>ローマ字(名・氏)<br>Alphabet Name</td>
            <td>{!! Form::text('alpha_name', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>プロフィール画像<br>Profile image</td>
            <td>{!! Form::file('profile_img', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>出生地<br>Place of birth</td>
            <td>{!! Form::text('place_of_birth', null , ['class' => 'form-control']) !!}</td>
            <td>出身地</td>
            <td>{!! Form::text('birthday_place', null , ['class' => 'form-control']) !!}</td>
            <td>表示</td>
            <td>{!! Form::checkbox('place_of_birth_ok', null , ['class' => 'form-control']) !!} 出生地可</td>
            <td>{!! Form::checkbox('birthday_place_ok', null , ['class' => 'form-control']) !!} 出身地可</td>
            <td>{!! Form::checkbox('no', null , ['class' => 'form-control']) !!} 否</td>
        </tr>
        <tr>
            <td>プロフィール ミニ<br>Mini Profile image</td>
            <td>{!! Form::file('mini_profile_img', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>画像キャプション<br>Image Caption</td>
            <td>{!! Form::text('img_caption', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>画像alt<br>Image alt</td>
            <td>{!! Form::text('img_alt', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>業種<br>Job-type</td>
            <td>{!! Form::select('industry', array('L' => 'industry', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>所属学会<br>Conference</td>
            <td>{!! Form::text('conference', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
        </tr>
        <tr>
            <td>生年月日<br>Birthday</td>
            <td>{!! Form::selectRange('coverage_year', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
            <td>{!! Form::selectMonth('coverage_month',null ,['class' => 'form-control']) !!}</td>
            <td>{!! Form::selectRange('coverage_year', 1, 31,null ,['class' => 'form-control']) !!}</td>
            <td>表示<br>Display</td>
            <td>{!! Form::checkbox('ok', null , ['class' => 'form-control']) !!} 可</td>
            <td>{!! Form::checkbox('no', null , ['class' => 'form-control']) !!} 否</td>
            <td>{!! Form::checkbox('birthday_ok', null , ['class' => 'form-control']) !!} 生まれ年のみ可</td>
        </tr>
        
        <tr>
            <td>経歴(学歴)<br>Alma mater</td>
            <td colspan="3">
                <table class="table" style="background-color:#F7F7F7;">
                    <tr>
                        <td>{!! Form::selectRange('aca_year', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
                        <td>{!! Form::selectMonth('c_ac_month',null ,['class' => 'form-control']); !!}</td>
                        <td>{!! Form::text('c_ac_desc', null , ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::selectRange('c_ac_year_to', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
                        <td>{!! Form::selectMonth('c_ac_month_to',null ,['class' => 'form-control']); !!}</td>
                        <td>{!! Form::text('c_ac_desc_to', null , ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>経歴(職歴)<br>Working place</td>
            <td colspan="3">
                <table class="table" style="background-color:#F7F7F7;">
                    <tr>
                        <td>{!! Form::selectRange('work_year', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
                        <td>{!! Form::selectMonth('c_we_month',null ,['class' => 'form-control']); !!}</td>
                        <td>{!! Form::text('c_we_desc', null , ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::selectRange('c_we_year_to', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
                        <td>{!! Form::selectMonth('c_we_month_to',null ,['class' => 'form-control']); !!}</td>
                        <td>{!! Form::text('c_we_desc_to', null , ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>経歴(賞・表彰)<br>Award</td>
            <td colspan="3">
                <table class="table" style="background-color:#F7F7F7;">
                    <tr>
                        <td>{!! Form::selectRange('c_aw_year', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
                        <td>{!! Form::selectMonth('c_aw_month',null ,['class' => 'form-control']); !!}</td>
                        <td>{!! Form::text('c_aw_desc', null , ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::selectRange('c_aw_year_to', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
                        <td>{!! Form::selectMonth('c_aw_month_to',null ,['class' => 'form-control']); !!}</td>
                        <td>{!! Form::text('c_aw_desc_to', null , ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
                    </tr>
                </table>
            </td>
        </tr>
         <tr>
            <td>病気カテゴリー<br>Position</td>
            <td>{!! Form::select('position', array('L' => 'Illness_category', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>最後の行に現在に至る<br>Add“現在に至る”at line end</td>
			<td>{!! Form::checkbox('no', null , ['class' => 'form-control']) !!} 無<br>No</td>
        </tr>
        <tr>
            <td>所属病院・勤務先<br>Hospital・Office</td>
            <td>{!! Form::select('office', array('L' => 'Hospital office', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>エリア<br>Work location</td>
            <td>{!! Form::select('Prefectures', array('L' => '選択してください', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
            <td>{!! Form::select('Prefectures', array('L' => '選択してください', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>所属診療科・所属科<br>Department</td>
            <td>{!! Form::select('department', array('L' => '選択してください', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>医師コメント<br>Doctor Comment</td>
            <td colspan="3">{!! Form::textarea('doc_comment', null , ['class' => 'form-control']) !!}</td>
            <td colspan="3">
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
    </table>
<table class="table" style="background-color:#aee4e4;">
	<tr>
		<td>エディター担当者<br>Editor</td>
		<td>{!! Form::text('Editor', null , ['class' => 'form-control']) !!}</td>
		<td>{!! Form::button('エディター変更申請', ['class' => 'btn btn-success']) !!}</td>
	</tr>
	<tr>
		<td>会話メモ<br>Conversation Note</td>
		<td>{!! Form::textarea('Honorarium', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td>エディターの所見<br>Editor Opinion</td>
		<td>{!! Form::textarea('Note', null , ['class' => 'form-control']) !!}</td>
	</tr>
</table>



    {!! Form::close() !!}

@endsection