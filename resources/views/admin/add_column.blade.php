@extends('layouts.app_sp')
@section('content')

    
	<div class="header-wrapper">
	<hr />
		<div class="form-container add">
			<div class="form-progress">
				<ul>
					<li class="active">下書き<br><span>Draft</span></li>
					<li class="active">プレビュー<br><span>Preview</span></li>
					<li>承認依頼<br><span>Approval Request</span></li>
					<li>承認済<br><span>Approved</span></li>
					<li class="rel">公開予約<br><span>Release reservation</span></li>
					<li>公開中<br><span>Release</span></li>
				</ul>
			</div>

    {!! Form::open(array('url' => '/save_special', 'method' => 'post', 'files' => true)) !!}

		<div class="form-horizontal">
		<div class="form-pads">
            <div class="form-group">
                <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
                <div class="cols-4">
                    <input type="text" class="form-control" placeholder="例）special_kids" name="url">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">掲載誌<br><span>Magazine</span></label>
                <div class="cols-4">          
                    <input type="text" class="form-control" placeholder="例）GL1907" name="magazine">
                </div>
            </div>

           
            

            <div class="form-group check">
                <label class="control-label cols-15">タグ(病名) <br><span>Tag(illness name)</span></label>
                <div class="cols-7" style="border: 1px solid #CCC; border-radius: 5px; padding: 5px; color: #F00;">   
                    <div class="cols-4">
						<input type="checkbox" id="tag1b" name="tag_ill[]" value="考えられる病気より"> 
						<label for="tag1b">考えられる病気より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag2b" name="tag_ill[]" value="考えられる病気より"> 
						<label for="tag2b">考えられる病気より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag3b" name="tag_ill[]" value="考えられる病気より"> 
						<label for="tag3b">考えられる病気より</label>
                    </div>
                    <div class="clear"></div>
                    <div class="cols-4">
						<input type="checkbox" id="tag4b" name="tag_ill[]" value="考えられる病気より"> 
						<label for="tag4b">考えられる病気より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag5b" name="tag_ill[]" value="考えられる病気より"> 
						<label for="tag5b">考えられる病気より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag6b" name="tag_ill[]" value="考えられる病気より"> 
						<label for="tag6b">考えられる病気より</label>
                    </div>
                    
                </div>
            </div>

            

            <div class="form-group">
                <label class="control-label cols-15">タグ(症状) <br> <span>Tag(Symptoms)</span></label>
                <div class="cols-7">   
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="擬音や検索されやすい症状">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="cols-1"></div>
                    <div class="clear"></div>

                    <div class="field_wrap7"></div>

                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="cols-1 relative">
                        <button type="button" class="btn btn-success add7"><span class="lnr lnr-plus-circle"></span></button>
                    </div>
                </div>
            </div>

            <div class="form-group check">
                <label class="control-label cols-15">タグ(季節)<br><span>Tag(season)</span></label>
                <div class="cols-7">   
                    <div class="cols-11">
						<input type="checkbox" id="tag_s1" name="tag_s[]" value="1"> 
						<label for="tag_s1">春</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s2" name="tag_s[]" value="1"> 
						<label for="tag_s2">夏</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s3" name="tag_s[]" value="1"> 
						<label for="tag_s3">秋</label>
                    </div>  
                    <div class="cols-11">
						<input type="checkbox" id="tag_s4" name="tag_s[]" value="1"> 
						<label for="tag_s4">冬</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s5" name="tag_s[]" value="1"> 
						<label for="tag_s5">4月</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s6" name="tag_s[]" value="1"> 
						<label for="tag_s6">5月</label>
                    </div>  
                    <div class="cols-11">
						<input type="checkbox" id="tag_s7" name="tag_s[]" value="1"> 
						<label for="tag_s7">6月</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s8" name="tag_s[]" value="1">
						<label for="tag_s8">7月</label>
                    </div>
                    <div class="clear"></div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s9" name="tag_s[]" value="1">
						<label for="tag_s9">8月</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s10" name="tag_s[]" value="1">
						<label for="tag_s10">9月</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s11" name="tag_s[]" value="1">
						<label for="tag_s11">10月</label>
                    </div>  
                    <div class="cols-11">
						<input type="checkbox" id="tag_s12" name="tag_s[]" value="1"> 
						<label for="tag_s12">11月</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s13" name="tag_s[]" value="1"> 
						<label for="tag_s14">12月</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s14" name="tag_s[]" value="1"> 
						<label for="tag_s14">1月</label>
                    </div>  
                    <div class="cols-11">
						<input type="checkbox" id="tag_s15" name="tag_s[]" value="1"> 
						<label for="tag_s15">2月</label>
                    </div>
                    <div class="cols-11">
						<input type="checkbox" id="tag_s16" name="tag_s[]" value="1"> 
						<label for="tag_s16">3月</label>
                    </div>

                    <div class="clear"></div>

                    <div class="field_wrap8"></div>

                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_txt[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_txt[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_txt[]" placeholder="">
                    </div>
                    <div class="cols-1 relative"><button type="button" class="btn btn-success add8"><span class="lnr lnr-plus-circle"></span></button></div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">タグ(フリー入力)<br><span>Tag(free)</span></label>
                <div class="cols-7"> 

                    <div class="field_wrap9"></div>

                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_f[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_f[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_f[]" placeholder="">
                    </div>
                    <div class="cols-1 relative"><button type="button" class="btn btn-success add9"><span class="lnr lnr-plus-circle"></span></button></div>
                    
                </div>
            </div>
		</div>
		<div class="form-nopads">
			<!-- Editor Page -->
			<div class="editor-page">
				<div class="form-group">
					<label class="control-label cols-15">エディター担当者</label>
					<div class="cols-5">   
						<input type="text" name="editor" class="form-control green" placeholder="Medical T. 編集部 A.Ito">&nbsp;&nbsp;&nbsp;
					</div>
					<div class="cols-2"><button type="button" class="btn-prime editor"></button></div>
				</div>

				<div class="form-group">
					<label class="control-label cols-15">取材日</label>
					<div class="cols-3">   
						<select class="form-control" name="c1">
							<option value="">－－－－年</option>
						</select>
					</div>
					<div class="cols-1">   
						<select class="form-control" name="c2">
							<option value="">－－月</option>
						</select>
					</div>
					<div class="cols-1">   
						<select class="form-control" name="c2">
							<option value="">－－日</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label cols-15">謝礼</label>
					<div class="cols-7">   
						<input type="text" name="hono" class="form-control" placeholder="例）10,000円">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label cols-15">メモ</label>
					<div class="cols-7">   
						<textarea class="form-control" name="note"></textarea>
					</div>
				</div>
			</div>
		</div>
		<input type="submit" name="save" value="" class="save-btn">
		<div id="totop" class="float-btn"></div>
		<div id="tobottom" class="float-btn"></div>
        </div>

        {!! Form::close() !!}

    </div>


@endsection