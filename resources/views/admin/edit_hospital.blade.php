@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-sm-8">col-sm-8</div>
  <div class="col-sm-4">col-sm-4</div>
</div>

{!! Form::open(array('url' => '/', 'method' => 'post')) !!}

<table class="table table-borderless" style="width:100%;background-color:#F7F7F7;" id="dynamic_field">
    <tr>
        <td>URL自動生成名<br>URL generation</td>
        <td>{!! Form::text('url_gen', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr> 
        <td>医療機関名<br>Medical institution</td>
        <td>{!! Form::text('medical_ins', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>医療機関英語名<br>Medical institution English</td>
        <td>{!! Form::text('medical_ins_eng', 'Medical institution English' , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td><br>Common name</td>
        <td>{!! Form::text('common_name', 'hospital namessss' , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>郵便番号<br>Postal code</td>
        <td>{!! Form::text('postal_code', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>住所<br>Address</td>
        <td>
        <!-- {!! Form::text('address', null , ['class' => 'form-control']) !!}<button type="submit"><i class="fa fa-search"></i></button>  -->
        <div class="input-group">
            <input type="text" class="form-control" name="address">
            <span class="input-group-btn">
                <button class="btn btn-search" type="button"> MAP</button>
            </span>
        </div>
        </td>
    </tr>
    <tr>
        <td>住所英語表記<br>Address English</td>
        <td>{!! Form::text('address_english', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <!-- <tr>
        <td>分院名・住所<br>Address</td>
        <td>
        <div class="input-group">
            <input type="text" class="form-control" name="branch_address">
            <span class="input-group-btn">
                <button class="btn btn-search" type="button"> MAP</button>
            </span>
        </div>
        </td>
    </tr> -->
    <!-- <tr>
        <td>分院名・住所英語表記<br>Address English</td>
        <td>{!! Form::text('branch_address_english', null , ['class' => 'form-control']) !!}</td>
    </tr> -->
    <tr>
        <td>アクセス<br>Access</td>
        <td>
        <table class="table" style="background-color:#F7F7F7;">
            <tr>
                <td>
                    <select name="access_trans" class="form-control">
                        <option value="car">Car</option>
                        <option value="walking">Walking</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>{!! Form::text('access_from', null , ['class' => 'form-control']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::text('access_mins', null , ['class' => 'form-control']) !!}</td>
            </tr>
        </table>
        </td>
    </tr>
    <tr>
        <td>駐車場<br>Parking</td>
        <td>
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td>項目 {!! Form::radio('p_radio', '料金' , ['class' => 'form-control']) !!}  </td>
                    <td>費用 {!! Form::radio('p_radio', '無料' , ['class' => 'form-control']) !!}</td>
                </tr>
                <!-- <tr>
                    <td>台数 {!! Form::text('parking_number', null , ['class' => 'form-control']) !!}</td>
                </tr> -->
            </table>
        </td>
    </tr>
    <tr>
        <td>問合せ電話番号<br>Inquiry phone number</td>
        <td>
            <table>
                <tr>
                    <td>{!! Form::number('phone_no', null , ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::number('phone_no_one', null , ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::number('phone_no_two', null , ['class' => 'form-control']) !!}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>FAX<br>Facsimile</td>
        <td>
        <table>
                <tr>
                    <td>{!! Form::number('fax', null , ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::number('fax_one', null , ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::number('fax_two', null , ['class' => 'form-control']) !!}</td>
                    <td><input type="checkbox"> 非表示 <br> Not show</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>Email<br>Email address</td>
        <td>
        <table>
                <tr>
                    <td width="400px">{!! Form::text('email', null , ['class' => 'form-control']) !!}</td>
                    <td><input type="checkbox"> 非表示 <br> Not show</td>
                </tr>
            </table>    
        </td>
        
    </tr>
    <!-- <tr>
        <td>URK<br>URL</td>
        <td>
        <table>
                <tr>
                    <td width="400px">{!! Form::text('url', null , ['class' => 'form-control']) !!}</td>
                    <td><input type="checkbox"> 非表示 <br> Not show</td>
                </tr>
            </table>
        </td>
    </tr> -->
    <tr>
        <td>医院外観画像<br>Clinic appearance image</td>
        <td>
        <!-- {!! Form::file('clinic_image', null , ['class' => 'form-control']) !!} -->
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="zn" name="clinic_image">
            <label class="custom-file-label" for="customFileLang">参照...</label>
        </div>
        </td> 
    </tr>
    <tr>
        <td>画像キャプション<br>Image Caption</td>
        <td>{!! Form::text('img_caption', null , ['class' => 'form-control']) !!}</td>
        <td rowspan="3"><button class="btn btn-success" style="width:150px;background-color:#6ebaba;border-color:#6ebaba;">保存<br>Save</button></td>
    </tr>
    <tr>
        <td>画像alt<br>Image alt</td>
        <td>{!! Form::text('img_alt', null , ['class' => 'form-control']) !!}</td>
    </tr>
    
        <tr>
            <td>医療機関キャッチ<br>Subheading</td>
            <td>{!! Form::text('subheading', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>本文<br>Text of Subheading</td>
            <td><div id="adding">{!! Form::textarea('text_subheading_hospital', null , ['class' => 'form-control']) !!}</div></td>
        </tr>
    
    <tr>
        <td colspan="2" align="right">
            <button type="button" id="add" class="btn btn-default btn-lg add">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            </button>
        </td>
    </tr>
    <!-- <div id="dynamic_field">
    </div> -->
    <tr>
        <td>区分<br>Division</td>
        <td>{!! Form::select('division', array('division one' => 'division', 'division two' => 'division two'),null ,['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>診療科目一覧<br>Medical subject list</td>
        <td>
        <table width="600px">
            <tr>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
            </tr>
            <tr>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
                <td>{!! Form::select('med_sbj_list', array('L' => '診療科目一覧', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>

                <td style="vertical-align: bottom;">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
        </table>
        </td>
    </tr>
    <tr>
        <td>診療科目<br>Medical subject</td>
        <td>{!! Form::select('medical_subj', array('L' => '診療科目', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>診療科目別キャッチ<br>Subheading</td>
        <td>{!! Form::text('med_subj_subheading', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>診療科目本文<br>Text of Subheading</td>
        <td>{!! Form::textarea('med_subj_text_subheading_hospital', null , ['class' => 'form-control']) !!}</td>
        <td style="vertical-align: bottom;">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                    </button>
        </td>
    </tr>
    <tr>
        <td>診療科目別 外来受付時間<br>Examination date</td>
        <td colspan="2">
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td  width="100px">
                    <!-- {!! Form::selectRange('from', 1, 12, null , ['class' => 'form-control']) !!} -->
                    <input type="text" name="from" data-toggle="timepicker" class="form-control">
                    <!-- <input type="text" name="timepicker" id="timepicker" class="timepicker"/> -->
                    </td>
                    <td width="100px">
                    <!-- {!! Form::selectRange('to', 1, 12, null , ['class' => 'form-control']) !!} -->
                    <input type="text" name="to" data-toggle="timepicker" class="form-control">
                    </td>
                    <!-- <td><input type="text" name="to" data-toggle="timepicker" class="form-control"></td> -->
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>診療</td>
                                <td width="100px"><input type="text" name="to" data-toggle="timepicker" class="form-control"></td>
                            </tr>
                        </table>
                    </td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 月</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 火</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 水</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 木</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 金</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 土</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 日</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 祝</td>
                </tr>
                <tr>
                    <td width="100px"><input type="text" name="to" data-toggle="timepicker" class="form-control"></td>
                    <td width="100px"><input type="text" name="to" data-toggle="timepicker" class="form-control"></td>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>診療</td>
                                <td width="100px"><input type="text" name="to" data-toggle="timepicker" class="form-control"></td>
                            </tr>
                        </table>
                    </td>
                    <!-- <td><input type="text" name="to" data-toggle="timepicker" class="form-control"></td> -->
                    <td>{!! Form::checkbox('tag_season', null) !!} 月</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 火</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 水</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 木</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 金</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 土</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 日</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 祝</td>
                </tr>
                <tr>
                    <td colspan="6">{!! Form::text('exam_comment', null , ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td width="100px"><input type="text" name="to" data-toggle="timepicker" class="form-control"></td>
                    <td width="100px"><input type="text" name="to" data-toggle="timepicker" class="form-control"></td>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>診療</td>
                                <td width="100px"><input type="text" name="to" data-toggle="timepicker" class="form-control"></td>
                            </tr>
                        </table>
                    </td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 月</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 火</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 水</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 木</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 金</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 土</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 日</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 祝</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>特徴タイトル<br>Subheading</td>
        <td>{!! Form::text('title_subheading', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>特徴本文<br>Text of Subheading</td>
        <td>{!! Form::textarea('feature_text_subheading_hospital', null , ['class' => 'form-control']) !!}</td>
        <td style="vertical-align: bottom;">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                    </button>
        </td>
    </tr>
    <tr>
        <td>設備・機器<br>Equipment</td>
        <td>{!! Form::text('equipment_subheading', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td></td>
        <td>{!! Form::textarea('equipment_text_subheading_hospital', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td></td>
        <td align="right"><div id="new_chq"></div>
        <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
    </tr>
    <tr>
	    <td>メイン画像<br>Image</td>
	    <td>{!! Form::file('Image', null , ['class' => 'form-control']) !!}</td>
	</tr>
    <tr>
        <td>スタッフリード<br>Staff subheading</td>
        <td>{!! Form::text('staff_subheading_hospital', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>スタッフコメント<br>Staff comment</td>
        <td>{!! Form::textarea('staff_comment_hospital', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td></td>
        <td align="right"><div id="new_chq"></div>
        <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
    </tr>
    <tr>
        <td>院内処方の有無<br>In-hospital prescription</td>
        <td>
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td>{!! Form::radio('radio') !!} 有</td>
                    <td>{!! Form::radio('radio') !!} 一部有</td>
                    <td>{!! Form::radio('radio') !!} 無</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>自由診療費用<br>Free medical expenses</td>
        <td>
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td>項目 {!! Form::text('item', null , ['class' => 'form-control']) !!}</td>
                    <td>費用 {!! Form::text('cost', null , ['class' => 'form-control']) !!}</td>
                    <td>診療科 {!! Form::select('clinic_dpt', array('L' => '診療科目', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td></td>
        <td align="right"><div id="new_chq"></div>
        <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
    </tr>
    <tr>
        <td></td>
        <td>台数 {!! Form::text('pay', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>入院可否<br>Hospitalization</td>
        <td>
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td>項目 {!! Form::radio('charge', null , ['class' => 'form-control']) !!}</td>
                    <td>費用 {!! Form::radio('free', null , ['class' => 'form-control']) !!}</td>
                    <td>診療科 {!! Form::text('pay', null , ['class' => 'form-control']) !!}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>病床種別・病床数<br>Number of beds</td>
        <td>
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td>種別 {!! Form::text('type', null , ['class' => 'form-control']) !!}</td>
                    <td>数 {!! Form::text('number', null , ['class' => 'form-control']) !!}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>面会可能日・時間<br>Possible date of visit</td>
        <td>
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td>{!! Form::selectRange('from', 1, 12, null , ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::selectRange('to', 1, 12, null , ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 月</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 火</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 水</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 木</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 金</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 土</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 日</td>
                    <td>{!! Form::checkbox('tag_season', null) !!} 祝</td>
                </tr>
            </table
        </td>
    </tr>
    <tr>
        <td>院内サービス<br>In-hospital service</td>
        <td>{!! Form::textarea('hospital_services', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>対応可能な外国語<br>Supported languages</td>
        <td>{!! Form::textarea('support_lang', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>売店・食堂の有無Shop, dining room</td>
        <td>{!! Form::textarea('shop_dining_room', null , ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>クレジットカードに <br> よる支払いの可否<br>Credit card payment</td>
        <td>
            <table class="table" style="background-color:#F7F7F7;">
                <tr>
                    <td>可 {!! Form::radio('ok', null , ['class' => 'form-control']) !!}</td>
                    <td>否 {!! Form::radio('no', null , ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::textarea('notes', null , ['class' => 'form-control']) !!}</td>
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
		<td>会話メモ<br>Conversation Note </td>
		<td>{!! Form::textarea('Honorarium', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td>エディターの所見<br>Editor Opinion</td>
		<td>{!! Form::textarea('Note', null , ['class' => 'form-control']) !!}</td>
	</tr>
</table>


{!! Form::close() !!}

@endsection