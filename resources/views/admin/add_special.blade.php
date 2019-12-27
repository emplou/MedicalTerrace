@extends('layouts.app')
@section('content')

   <h2>Add special</h2>

  
{!! Form::open(array('url' => '/', 'method' => 'post')) !!}
<table class="table table-borderless">
   	<tr>
	    <td>URL自動生成名<br>URL generation</td>
	    <td>{!! Form::text('url_generation', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>掲載誌<br>Magazine</td>
	    <td>{!! Form::text('magazine', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>病気カテゴリー<br>Illness category</td>
	    <td>{!! Form::select('illness_category', array('L' => 'Illness_category', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>特集カテゴリー<br>Special Category</td>
	    <td>{!! Form::select('Special_category', array('L' => 'Special_category', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>特集ショルダー<br>Special Title Shoulder</td>
	    <td>{!! Form::text('Special_Title_Shoulder', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>特集タイトル<br>Special Title</td>
	    <td>{!! Form::text('Special_Title', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>特集タイトル<br>Doctor</td>
	    <td>{!! Form::select('Doctor', array('L' => 'Doctor', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
	    <td>{!! Form::radio('radio') !!} 監修</td>
	    <td>{!! Form::radio('radio') !!} 取材協力</td>
	    <td>{!! Form::radio('radio') !!} 監修・取材協力</td>
	</tr>
	<tr>
	    <td>医師コメント<br>Doctor Comment</td>
	    <td>{!! Form::textarea('Doctor_Comment', null , ['class' => 'form-control']) !!}</td>
	    <td>{!! Form::button('Save') !!}</td>
	</tr>
	<tr>
	    <td>メイン画像<br>image</td>
	    <td>{!! Form::file('Image', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>画像キャプション<br>Image Caption</td>
	    <td>{!! Form::text('Image_Caption', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>画像alt<br>Image alt</td>
	    <td>{!! Form::text('Image_alt', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
	    <td>リード<br>Text of Subheading</td>
	    <td>{!! Form::textarea('Text_of_Subheading_special', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td></td>
		<td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
	</tr>
	<tr>
	    <td>小見出し<br>Subheading</td>
	    <td>
	    	<table class="table">
	    		<tr>
	    			<td>{!! Form::select('Subheading', array('L' => 'Subheading', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
	    		</tr>
	    		<tr>
	    			<td>{!! Form::text('Subheading', null , ['class' => 'form-control']) !!}</td>
	    		</tr>
	    	</table>
	    </td>
	</tr>
	<tr>
		<td>本文<br>Text of Subheading</td>
		<td>{!! Form::textarea('Text_of_Subheading_two_special', null , ['class' => 'form-control']) !!}</td>
		<td><table class="table">
	            <tr>
	                <td>{!! Form::button('Preview') !!}</td>
	            </tr>
	            <tr>
	                <td>{!! Form::button('Release_reservation') !!}</td>
	            </tr>
	            <tr>
	                <td>{!! Form::button('Release') !!}</td>
	            </tr>
	        </table></td>
	</tr>
	<!-- <tr>
		<td></td>
		<td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
	</tr>
	<tr>
	    <td>小見出し</td>
	    <td>{!! Form::text('Subheading', null , ['class' => 'form-control']) !!}</td>
	    <td>
			<table class="table">
	            <tr>
	                <td>{!! Form::button('Preview') !!}</td>
	            </tr>
	            <tr>
	                <td>{!! Form::button('Release_reservation') !!}</td>
	            </tr>
	            <tr>
	                <td>{!! Form::button('Release') !!}</td>
	            </tr>
	        </table>
		</td>
	</tr> -->
	<tr>
		<td></td>
		<td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
	</tr>
	<tr>
	    <td>検索キーワード<br>Search Key word</td>
	    <td>
	        <table class="table">
	            <tr>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	            </tr>
	            <tr>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	            </tr>
	            <tr>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	                <td>{!! Form::text('Search_keyword', null , ['class' => 'form-control']) !!}</td>
	            </tr>
	        </table>
	    </td>
	</tr>
	<tr>
	    <td>タイトルタグ<br>Title tag for SEO</td>
	    <td>
	    	<table class="table">
	    		<tr>
	    			<td>{!! Form::checkbox('yes') !!}<b style="color:red;"> 子どもの夏の感染症の症状・原因・治療と予防法|メディカルテラス</b></td>
	    		</tr>
	    		<tr>
	    			<td>{!! Form::text('Title_tag_for_SEO', null , ['class' => 'form-control']) !!}</td>
	    		</tr>
	    	</table>
	    </td>
	</tr>
	<tr>
		<td>ディスクリプション<br>Meta description for SEO</td>
		<td>{!! Form::textarea('Meta_description_for_SEO', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td>h2</td>
		<td>{!! Form::text('h2', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td></td>
		<td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
	</tr>
	<tr>
		<td>タグ（キーワード）<br>Tag(key word)</td>
		<td colspan="2">
			<table class="table">
				<tr>
					<td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
					<td>{!! Form::checkbox('tag_keyword', null) !!} 検索キーワド入力より</td>
					<td>{!! Form::checkbox('tag_keyword', null ) !!} 検索キーワド入力より</td>
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
		<td>タグ（症状）<br>Tag(illness name)</td>
		<td colspan="2">
			<table class="table">
				<tr>
					<td>{!! Form::checkbox('tag_illness_name', null) !!} 考えられる病気より</td>
					<td>{!! Form::checkbox('tag_illness_name', null) !!} 考えられる病気より</td>
					<td>{!! Form::checkbox('tag_illness_name', null) !!} 考えられる病気より</td>
				</tr>
				<tr>
					<td>{!! Form::checkbox('tag_illness_name', null) !!} 考えられる病気より</td>
					<td>{!! Form::checkbox('tag_illness_name', null) !!} 考えられる病気より</td>
					<td>{!! Form::checkbox('tag_illness_name', null) !!} 考えられる病気より</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
	    <td>タグ (診療科・所属科)<br>Tag(department)</td>
	    <td>{!! Form::select('Tag_Department', array('L' => 'Tag_Department', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td></td>
		<td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
	</tr>
	<tr>
	    <td>タグ(症状)<br>Tag(Symptoms)</td>
	    <td>{!! Form::select('Tag_Symptoms', array('L' => 'Tag_Symptoms', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td></td>
		<td align="right"><a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
	</tr>
	<tr>
		<td>タグ（季節）<br>Tag(season)</td>
		<td colspan="2">
        <table class="table">
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
		<td colspan="1">
			<table class="table">
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
			<table class="table">
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
		<td>{!! Form::button('プレビュー', ['class' => 'btn btn-success']) !!}
		{!! Form::button('公開予約', ['class' => 'btn btn-warning']) !!}
		{!! Form::button('公開', ['class' => 'btn btn-info']) !!}</td>
	</tr> -->
</table>

<table class="table" style="background-color:#aee4e4;">
	<tr>
		<td>エディター担当者<br>Editor</td>
		<td>{!! Form::text('Editor', null , ['class' => 'form-control']) !!}</td>
		<td>{!! Form::button('エディター変更申請', ['class' => 'btn btn-success']) !!}</td>
	</tr>
	<tr>
		<td>取材日<br>Coverage date</td>
		<td>{!! Form::selectRange('coverage_year', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
		<td>{!! Form::selectMonth('coverage_month',null ,['class' => 'form-control']) !!}</td>
		<td>{!! Form::selectRange('coverage_year', 1, 31,null ,['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td>エディター担当者<br>Honorarium</td>
		<td>{!! Form::text('Honorarium', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td>エディター担当者<br>Note</td>
		<td>{!! Form::textarea('Note', null , ['class' => 'form-control']) !!}</td>
	</tr>
</table>


{!! Form::close() !!}
   
@endsection