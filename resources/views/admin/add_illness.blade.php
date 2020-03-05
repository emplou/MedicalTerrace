@extends('layouts.app_il')
@section('content')
@include('modals.modal_add_illness')
    <div class="form-container add">
        <div class="form-progress">
            <ul>
                <li class="active">下書き<br><span>Draft</span></li>
                <li class="active">プレビュー<br><span>Preview</span></li>
                <li>承認依頼<br><span>Approval Request</span></li>
                <li>承認済<br><span>Approved</span></li>
                <li>公開予約<br><span>Release reservation</span></li>
                <li>公開中<br><span>Release</span></li>
            </ul>
        </div>
        {!! Form::open(array('url' => '/save_illness', 'method' => 'post', 'files' => true)) !!}

    <div class="form-horizontal">

        <div class="form-pads">
            <!-- URL Generator -->
            <div class="form-group">
                <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
                <div class="cols-4">
                    <input type="text" class="form-control" placeholder="例）Infection_kid" name="url" required>
                </div>
            </div>
            
            <!-- Illness Category -->
            <div class="form-group">
                <label class="control-label cols-15">病気カテゴリー<br><span>Illness Category</span></label>
                <div class="cols-4">          
                    <select name="ill_cat" id="ill_cat" class="form-control ill_cat">
                        <option value="">選択してください</option>
                        <option value="感染症・寄生虫症">感染症・寄生虫症</option>
                        <option value="女性特有のがん＊">女性特有のがん＊</option>
                        <option value="男性特有のがん">男性特有のがん</option>
                        <option value="消化管のがん">消化管のがん</option>
                        <option value="胸部のがん">胸部のがん</option>
                        <option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option>
                        <option value="泌尿器のがん">泌尿器のがん</option>
                        <option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option>
                        <option value="脳・神経・眼のがん">脳・神経・眼のがん</option>
                        <option value="その他の腹部のがん">その他の腹部のがん</option>
                        <option value="皮膚のがん">皮膚のがん</option>
                        <option value="骨・筋肉のがん">骨・筋肉のがん</option>
                        <option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option>
                        <option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option>
                        <option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option>
                        <option value="血液・リンパの病気">血液・リンパの病気</option>
                        <option value="内分泌や代謝の病気">内分泌や代謝の病気</option>
                        <option value="こころ・精神の病気">こころ・精神の病気</option>
                        <option value="脳・神経系の病気">脳・神経系の病気</option>
                        <option value="眼の病気">眼の病気</option>
                        <option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option>
                        <option value="循環器系の病気">循環器系の病気</option>
                        <option value="呼吸器系の病気">呼吸器系の病気</option>
                        <option value="消化器系の病気">消化器系の病気</option>
                        <option value="歯科・口腔疾患">歯科・口腔疾患</option>
                        <option value="皮膚の病気">皮膚の病気</option>
                        <option value="骨や関節の病気">骨や関節の病気</option>
                        <option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option>
                        <option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option>
                        <option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option>
                        <option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option>
                        <option value="そのほかの病気">そのほかの病気</option>
                        <option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option>
                    </select>
                </div>
            </div>
             <!-- Illness Shoulder -->
            <div class="form-group">
                <label class="control-label cols-15">特集ショルダー<br><span>Illness Shoulder</span></label>
                <div class="cols-5">          
                    <input type="text" class="form-control ill_shldr" id="ill_sh" placeholder="例)手・足・ 口に赤い発疹や水ぶくれが出ます" name="ill_shldr" maxlength="20" required>
                </div>
                <div class="cols-2">          
                    <span id="rchars">20</span>/20
                </div>
            </div>

            <!-- Magazine -->
            <div class="form-group">
                <label class="control-label cols-15">掲載誌<br><span>Magazine</span></label>
                <div class="cols-4">          
                    <input type="text" class="form-control" placeholder="例）GL1907" name="magazine">
                </div>
            </div>

             <!-- Illness -->
            <div class="form-group">
                <label class="control-label cols-15">特集タイトル<br><span>Illness</span></label>
                <div class="cols-5">          
                    <input type="text" class="form-control ill" id="ill" placeholder="例)手足口病" name="ill" maxlength="14" required>
                </div>
                <div class="cols-2">          
                    <span id="rchars2">0</span>/14
                </div>
            </div>
             <!-- Illness Phonetic -->
            <div class="form-group">
                <label class="control-label cols-15">病名ふりがな<br><span>Illness Phonetic</span></label>
                <div class="cols-5">          
                    <input type="text" class="form-control" placeholder="例)てあしくちびょう"  name="ill_ph" maxlength="14" required>
                </div>
            </div>
             <!-- Doctor -->
            <div class="form-group">
                <label class="control-label cols-15">監修・協力医師<br><span>Doctor</span></label>
                <div class="cols-5">          
                     <select name="doctor" class="form-control" required>
                        <option value="">選択してください</option>
                        @foreach($doctors as $doc)
                            <option value="{!! $doc->name !!}">{!! $doc->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-3 rad-buttons">
					<input type="radio" id="sprvsn" name="role" value="監修" required>
					<label for="sprvsn">監修</label>
					<input type="radio" id="cc" name="role" value="取材協力" required>
					<label for="cc">取材協力</label>
					<input type="radio" id="scc" name="role" value="監修・取材協力" required>
					<label for="scc">監修・取材協力</label>
		        </div>	
            </div>
             <!-- Doctor Comment -->
            <div class="form-group full">
                <label class="control-label cols-15">医師コメント<br><span>Doctor Comment</span></label>
                <div class="cols-5">          
                    <textarea class="form-control cmt" name="doc_cmt" rows="5" maxlength="200" placeholder="この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。" required>
					</textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars3">0</span>/200
				</div>
            </div>
             <!-- Summarize -->
            <div class="form-group">
                <label class="control-label cols-15">まとめ<br><span>Summarize</span></label>
                <div class="cols-5">          
                    <textarea class="form-control sm1" name="sm[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は" required></textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars4">0</span>/46
				</div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15"></label>
                <div class="cols-5">          
                    <textarea class="form-control sm2" name="sm[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は" required></textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars5">0</span>/46
				</div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15"></label>
                <div class="cols-5">          
                    <textarea class="form-control sm3" name="sm[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars6">0</span>/46
				</div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15"></label>
                <div class="cols-5">          
                    <textarea class="form-control sm4" name="sm[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars7">0</span>/46
				</div>
            </div>
            
            <div class="form-group">
                <label class="control-label cols-15"></label>
                <div class="cols-5">          
                    <textarea class="form-control sm5" name="sm[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
                </div>
                <div class="cols-2">          
                    <!-- <span id="rchars8">0</span>/46 -->
                    <div class=" relative"><button type="button" class="btn btn-success addsum1"><span class="lnr lnr-plus-circle"></span></button></div>
       
				</div>
            </div>

            <!-- Add new fiends in this wrapper -->
            <div class="wrapper"></div>
            
             <!-- Main Image -->
            <div class="form-group">
                <label class="control-label cols-15">メイン画像<br><span>Main image </span></label>
                <div class="cols-45">          
                    <div class="custom-file-upload ill">
                        <input type="file" id="file"  name="img" />
                    </div>
                </div>
            </div>
             <!-- Image Caption -->
            <div class="form-group">
                <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
                <div class="cols-4">
                    <input type="text" class="form-control" placeholder="例)院長 山田太(郎 やまだたろう)" name="img_cap" required>
                </div>
            </div>
             <!-- Image Alt -->
            <div class="form-group">
                <label class="control-label cols-15">画像alt<br><span>Image alt</span></label>
                <div class="cols-4">
                    <input type="text" class="form-control" placeholder="例)メディカルテラスクリニック院長山田太郎" name="img_alt" required>
                </div>
            </div>
            <br>
            
            <!-- Subheading -->
            <div class="txt_edtr">
                <div class="form-group">
                    <label class="control-label cols-15">病気カテゴリー<br><span>Subheading</span></label>
                    <div class="cols-4">          
                    <select id="head1" name="sub_head1a[]" class="form-control">
                        <option value="">選択してください</option>
                        <option value="基礎知識">基礎知識</option>
                        <option value="近年の動向">近年の動向</option>
                        <option value="症状">症状</option>
                        <option value="原因">原因</option>
                        <option value="検査方法">検査方法</option>
                        <option value="検診体験記">検診体験記</option>
                        <option value="検診から治療まで">検診から治療まで</option>
                        <option value="治療方法">治療方法</option>
                        <option value="療養と副作用">療養と副作用</option>
                        <option value="合併症<">合併症</option>
                        <option value="自宅療法（療養方法・再発防止など）">自宅療法（療養方法・再発防止など）</option>
                        <option value="体験記">体験記</option>
                        <option value="FAQ">FAQ</option>
                        <option value="予防・対策方法">予防・対策方法</option>
                    </select>
                    </div>
                </div>
                <!-- Subheading desc-->
                <div class="form-group">
                    <label class="control-label cols-15"></label>
                    <div class="cols-4">
                        <input type="text" id="s_head1" class="form-control" placeholder="選択項目にない場合に入力" name="sub_head1b[]" required>
                    </div>
                </div>

                <!-- Text of Subheading -->
                <div class="form-group editor">
                    <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                    <div class="cols-6">   
                       
                        <div class="cols-10">        
                            <textarea class="form-control ck" name="txt_ckeditor[]" id="txt_ck1" placeholder=""></textarea>
                        </div>
                         
                    </div>
                    <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck"><span class="lnr lnr-plus-circle"></span></button></div> 
                </div>
            </div>

            <!-- Add subheading form -->
            <div class="wrapper2"></div>

            <!-- Buttons -->
            <div class="form-group">
                <div class="cols-15"></div>
                <div class="cols-55"><button type="button" class="btn-prime image" id="show_img"></button><button type="button" class="btn-prime graph" id="show_graph"></button></div>
            </div>

            
             <!-- Subheading -->

            <div class="form-group check">
                <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                <div class="cols-5">   
                    <div style="border: 1px solid #CCC; padding: 0px 5px 5px; margin-bottom: 10px;">
                        <input type="checkbox" id="a1" name="subheading-chck" value="1" />
                        <label for="a1" style="color:red;" id="output_ill2"></label>
                        <div class="clear"></div>
					</div>    
                </div>
               
            </div>

            <!-- Text of the subheading -->
            <div class="form-group">
                <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                <div class="cols-8">  
                    <div class="cols-5">          
                        <textarea class="form-control sh" name="sh[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                    </div>
                    <div class="cols-2"> 
                        リスク度 
                        <select name="rl[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select><br>         
                        <span id="rchars9">0</span>/46
                    </div>
                    <div class="clear"></div>
                    <div class="cols-5">          
                        <textarea class="form-control sh2" name="sh[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                    </div>
                    <div class="cols-2"> 
                        リスク度
                        <select name="rl[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select><br>                
                        <span id="rchars10">0</span>/46
                    </div>
                    <div class="clear"></div>
                    <div class="cols-5">          
                        <textarea class="form-control sh3" name="sh[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                    </div>
                    <div class="cols-2"> 
                        リスク度
                        <select name="rl[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select><br>                
                        <span id="rchars11">0</span>/46
                    </div>
                    <div class="clear"></div>
                    <div class="cols-5">          
                        <textarea class="form-control sh4" name="sh[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                    </div>
                    <div class="cols-2"> 
                        リスク度
                        <select name="rl[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select><br>                
                        <span id="rchars12">0</span>/46
                    </div>
                    <div class="clear"></div>
                    <div class="cols-5">          
                        <textarea class="form-control sh5" name="sh[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                    </div>
                    <div class="cols-2"> 
                        リスク度
                        <select name="rl[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select><br>                
                        <span id="rchars13">0</span>/46
                        <div class="cols-1 relative"><button type="button" class="btn btn-success addsub sh-btn"><span class="lnr lnr-plus-circle"></span></button></div>
                    </div>
                </div>
                
                <!-- Check Result -->
                <div class="form-group">
                    <label class="control-label cols-15">チェック結果<br><span>Check result</span></label>
                    <div class="cols-6">
                        <div class="cols-5"><input type="text" class="form-control" placeholder="5〜10点=この文章はダミーです" name="cr[]"></div>
                        <div class="cols-5"><input type="text" class="form-control" placeholder="11〜15点=この文章はダミーです" name="cr[]"></div>
                    </div>
                    
                </div>

                <div class="form-group">
                    <div class="cols-15"></div>
                    <div class="cols-6">
                        <div class="cols-5"><input type="text" class="form-control" placeholder="16〜20点=この文章はダミーです" name="cr[]"></div>
                        <div class="cols-5"><input type="text" class="form-control" placeholder="21〜25点=この文章はダミーです" name="cr[]"></div>
                    </div>
                </div>

                <!-- Subheading -->

                <div class="form-group check2">
                    <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                    <div class="cols-5">   
                        <div style="border: 1px solid #CCC; padding: 0px 5px 5px; margin-bottom: 10px;">
                            <input type="checkbox" id="a2" name="subheading-chck2" value="1"/>
                            <label for="a2" style="color:red;" id="output_ill3"></label>
                            <div class="clear"></div>
                        </div>    
                    </div>
                </div>

                <!-- Text of the subheading -->
                <div class="form-group">
                    <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                    <div class="cols-8">  
                        <div class="cols-5">          
                            <textarea class="form-control sh_b" name="sh2[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                        </div>
                        <div class="cols-2"> 
                            リスク度 
                            <select name="rl2[]">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select><br>         
                            <span id="rchars14">0</span>/46
                        </div>
                        <div class="clear"></div>
                        <div class="cols-5">          
                            <textarea class="form-control sh2_b" name="sh2[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                        </div>
                        <div class="cols-2"> 
                            リスク度
                            <select name="rl2[]">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select><br>                
                            <span id="rchars15">0</span>/46
                        </div>
                        <div class="clear"></div>
                        <div class="cols-5">          
                            <textarea class="form-control sh3_b" name="sh2[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                        </div>
                        <div class="cols-2"> 
                            リスク度
                            <select name="rl2[]">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select><br>                
                            <span id="rchars16">0</span>/46
                        </div>
                        <div class="clear"></div>
                        <div class="cols-5">          
                            <textarea class="form-control sh4_b" name="sh2[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                        </div>
                        <div class="cols-2"> 
                            リスク度
                            <select name="rl2[]">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select><br>                
                            <span id="rchars17">0</span>/46
                        </div>
                        <div class="clear"></div>
                        <div class="cols-5">          
                            <textarea class="form-control sh5_b" name="sh2[]" maxlength="30" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確"></textarea>
                        </div>
                        <div class="cols-2"> 
                            リスク度
                            <select name="rl2[]">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select><br>                
                            <span id="rchars18">0</span>/46
                            <div class="cols-1 relative"><button type="button" class="btn btn-success addsub sh-btn"><span class="lnr lnr-plus-circle"></span></button></div>
                        </div>
                    </div>
                    
                    <!-- Check Result -->
                    <div class="form-group">
                        <label class="control-label cols-15">チェック結果<br><span>Check result</span></label>
                        <div class="cols-6">
                            <div class="cols-5"><input type="text" class="form-control" placeholder="5〜10点=この文章はダミーです" name="cr2[]"></div>
                            <div class="cols-5"><input type="text" class="form-control" placeholder="11〜15点=この文章はダミーです" name="cr2[]"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-15"></div>
                        <div class="cols-6">
                            <div class="cols-5"><input type="text" class="form-control" placeholder="16〜20点=この文章はダミーです" name="cr2[]"></div>
                            <div class="cols-5"><input type="text" class="form-control" placeholder="21〜25点=この文章はダミーです" name="cr2[]"></div>
                        </div>
                    </div>

                <hr>
            <!-- Search Keywords -->
            <div class="form-group">
                <label class="control-label cols-15">検索キーワード<br><span>Search Key word</span></label>
                <div class="cols-7">
                    <div class="cols-3"><input type="text" class="form-control" id="kword1" placeholder="例）夏の感染症" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" id="kword2" placeholder="例）子どもの病気" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" id="kword3" placeholder="例）手足口病" name="kword[]"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="control-label cols-15"></div>
                <div class="cols-7">
                    <div class="cols-3"><input type="text" class="form-control" id="kword4" placeholder="例）ヘルパンギーナ" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" id="kword5" placeholder="例）水いぼ" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" id="kword6" placeholder="" name="kword[]"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="control-label cols-15"></div>
                <div class="cols-7">
                    <div class="cols-3"><input type="text" class="form-control" id="kword7" placeholder="" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" id="kword8" placeholder="" name="kword[]"></div>
                    <div class="cols-3">※裏設定。検索させたい関連ワードを表記</div>
                </div>
            </div>

            <div class="form-group check">
                <label class="control-label cols-15">タイトルタグ<br><span>Title Tag for SEO</span></label>
                <div class="cols-45">   
                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" ><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
					</div>    
                </div>
            </div>

            <div class="form-group">
                <div class="cols-15"></div>
                <div class="cols-45">   
                    <textarea class="form-control seo" name="seo_txt" maxlength="35" placeholder="タイトルタグをカスタマイズする場合はこちらに入力ください"></textarea>
                </div>
                <div class="cols-1">         
                    <span id="rchars19">0</span>/35
                </div>
            </div>

            <!-- Meta Description of SEO -->
            <div class="form-group">
                <label class="control-label cols-15">ディスクリプション<br><span>Meta description for SEO</span></label>
                <div class="cols-45">   
                    <textarea class="form-control mt1" name="meta_txt1" maxlength="50" placeholder="親譲りの無鉄砲で小供の時から 損ばかりしている。小学校に居る時分学校の。"></textarea>
                </div>
                <div class="cols-3">  
                    スマホ・PC用 重要文章<br>        
                    <span id="rchars20">35</span>/50
                </div>
            </div>
            <div class="form-group">
                <div class="cols-15"></div>
                <div class="cols-45">   
                    <textarea class="form-control mt2" name="meta_txt2" maxlength="70" placeholder="親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。"></textarea><br>
                </div>
                <div class="cols-3">     
                    PC用補足文章<br>      
                    <span id="rchars21">0</span>/70
                </div>
            </div>
            <div class="form-group">
                <div class="cols-15"></div>
                <div class="cols-65" style="border: 1px solid #CCC; padding: 5px; color: #F00;">
                ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原 稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。 ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ
            </div>
            
             <!-- h1 -->
             <div class="form-group">
             <br>
                <label class="control-label cols-15">h1</label>
                <div class="cols-4" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    子どもの夏の感染症 いわゆる夏風邪は7月がピーク！
                    <input type="hidden" name="h1" value="Sample">
                </div>
            </div>
            
            <!-- h2 -->
            <div class="form-group">
                <label class="control-label cols-15">h2</label>
                <div class="cols-7">
                    <!-- add h2 fields -->
                    <div class="wrapper5"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="必要に応じて記載" name="h2[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div>
                    <div class="cols-1 relative"><button type="button" class="btn add5"><span class="lnr lnr-plus-circle"></span></button></div>
                </div>
            </div>

             <!-- Tag Keyword -->
             <div class="form-group check">
                <label class="control-label cols-15">タグ（キーワード<br><span>Tag(key word)</label>
                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 0px 5px 5px; color: #F00;">   
                    
                    <div id="output"></div>
                    <div id="output2"></div>
                    <div id="output3"></div>
                    <div id="output4"></div>
                    <div id="output5"></div>
                    <div id="output6"></div>
                    <div id="output7"></div>
                    <div id="output8"></div>
                    
                </div>
            </div>

             <!-- Tag(illness name) -->
             <div class="form-group check">
                <label class="control-label cols-15">タグ（病名）<br><span>Tag(illness name)</span></label>
                <div class="col-sm-4" style="border: 1px solid #CCC; padding: 0px 5px 5px; color: #F00;">   
                    <div id="output_ill"></div>
                </div>
                <div class="col-sm-4">
                    ※上記のキーワードに含まれていればチェック不要
                </div>
            </div>

            <!-- Tag(department) -->
            <div class="form-group">
                <label class="control-label cols-15">タグ<br>(診療科・所属科)<br><span>Tag(department)</span></label>
                <div class="cols-7"> 
                    <div id="addanother2">
                        <div class="cols-3">
                            <select name="tag_dep[]" class="form-control">
                                <option value="">選択してください</option>
                                @foreach($department as $dpt)
                                    <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="cols-3">
                            <select name="tag_dep[]" class="form-control">
                                <option value="">選択してください</option>
                                @foreach($department as $dpt)
                                    <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="cols-3">
                            <select name="tag_dep[]" class="form-control">
                                <option value="">選択してください</option>
                                @foreach($department as $dpt)
                                    <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>

                    <div class="clear"></div>

                    <div class="wrapper6"></div>

                    <div class="cols-3">
                        <select name="tag_dep[]" class="form-control">
                            <option value="">選択してください</option>
                            @foreach($department as $dpt)
                                <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="cols-3">
                        <select name="tag_dep[]" class="form-control">
                            <option value="">選択してください</option>
                            @foreach($department as $dpt)
                                <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="cols-3">
                        <select name="tag_dep[]" class="form-control">
                            <option value="">選択してください</option>
                            @foreach($department as $dpt)
                                <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-success add6"><span class="lnr lnr-plus-circle"></span></button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">タグ（症状）<br><span>Tag(Symptoms)</span></label>
                <div class="cols-7"> 
                    <div id="addanother3">
                        <div class="cols-3">
                            <input type="text" class="form-control" name="tag_sy[]" placeholder="擬音や検索されやすい症状">
                        </div>
                        <div class="cols-3">
                            <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                        </div>
                        <div class="cols-3">
                            <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="clear"></div>

                    <div class="wrapper7"></div>

                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-success add7"><span class="lnr lnr-plus-circle"></span></button>
                    </div>
                </div>
            </div>

            <div class="form-group check">
                <label class="control-label cols-15">タグ（季節)<br><span>Tag(season)</span></label>
                <div class="cols-6">   
                    <div class="cols-12">
                        <input type="checkbox" id="taga1" name="tag_s[]" value="春"> 
                        <label for="taga1">春</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga2" name="tag_s[]" value="夏"> 
                        <label for="taga2">夏</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga3" name="tag_s[]" value="秋"> 
                        <label for="taga3">秋</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga4" name="tag_s[]" value="冬">
                        <label for="taga4"> 冬</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga5" name="tag_s[]" value="4月">
                        <label for="taga5">4月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga6" name="tag_s[]" value="5月">
                        <label for="taga6">5月</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga7" name="tag_s[]" value="6月">
                        <label for="taga7">6月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga8" name="tag_s[]" value="7月"> 
                        <label for="taga8">7月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga9" name="tag_s[]" value="8月"> 
                        <label for="taga9">8月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga10" name="tag_s[]" value="9月"> 
                        <label for="taga10">9月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga11" name="tag_s[]" value="10月"> 
                        <label for="taga11">10月</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga12" name="tag_s[]" value="11月"> 
                        <label for="taga12">11月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga13" name="tag_s[]" value="12月"> 
                        <label for="taga13">12月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga14" name="tag_s[]" value="1月"> 
                        <label for="taga14">1月</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga15" name="tag_s[]" value="2月"> 
                        <label for="taga15">2月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga16" name="tag_s[]" value="3月"> 
                        <label for="taga16">3月</label>
                    </div>
                
            </div>
                
                <div class="form-group">
                <label class="control-label cols-15"></span></label>
                <div class="cols-7"> 
                <div class="wrapper8"></div>
                        <div id="addanother4">
                            
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
                </div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">タグ（フリー入力)<br><span>Tag(free)</span></label>
                <div class="cols-7"> 
                    <div class="wrapper9"></div>

                    <div id="addanother5">
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
                <div class="sidediv cols-3">
                        <div class="sidebots">
                            <!-- Full buttons -->
                            <!-- <a class="prevbutton btn-prime preview" type="button" href="#previewAddIllness" style="background-image: url(../../images/icon-preview.png);">Preview</a>
                            <button type="button" class="btn-prime release1" id="myBtn" style="background-image: url(../../images/icon-preview.png);">Release</button>
                            <button type="button" class="btn-prime release2" id="myBtn" style="background-image: url(../../images/icon-preview.png);">Release</button> -->

                            <!-- Red buttons -->
                            <!-- <a class="prevbutton btn-prime preview" type="button" href="#previewAddIllness" style="background-image: url(../../images/icon-half-preview.png);">Preview</a>
                            <button type="button" class="btn-prime relservhalf1" id="myBtn" style="background-image: url(../../images/icon-pink-relreserve.png);">Release</button>
                            <button type="button" class="btn-prime relservehalf2" id="myBtn" style="background-image: url(../../images/icon-pink-release.png);">Release</button> -->

                            <!-- Half buttons -->
                            <a class="prevbutton btn-prime preview" type="button" href="#previewAddIllness" style="background-image: url(../../images/icon-half-preview.png);">Preview</a>
                            <button type="button" class="btn-prime relservhalf1" id="myBtn" style="background-image: url(../../images/icon-half-relreserve.png);" disabled>Release</button>
                            <button type="button" class="btn-prime relservehalf2" id="myBtn" style="background-image: url(../../images/icon-half-release.png);" disabled>Release</button>
                        
                        </div>
                    </div>
            </div>

    </div>
</div>

 <!-- OLD codes-->
   
           
            <div id="img-wrapper">
                <hr>
                <!-- Main Image -->
                <div class="form-group">
                    <label class="control-label cols-15">メイン画像:</label>
                    <div class="col-sm-9">          
                        <input type="file" class="form-control" name="img2">
                    </div>
                </div>

                <!-- Image Caption -->
                <div class="form-group">
                    <label class="control-label cols-15">画像キャプション:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="院長 山田太郎" name="img_cap2">
                    </div>
                </div>

                <!-- Image Alt -->
                <div class="form-group">
                    <label class="control-label cols-15">画像alt:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="院長 山田太郎" name="img_alt2">
                    </div>
                </div>
            </div>

            <!-- Insert Graph Wrapper -->
            <div id="graph-wrapper">
                <hr>
                <!-- Graph Title -->
                <div class="form-group">
                    <label class="control-label cols-15">グラフタイトル:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="例）手足口病の2013年〜2018年の定点当たり報告数の平均" name="g_title">
                    </div>
                </div>

                <!-- Graph Image -->
                <div class="form-group">
                    <label class="control-label cols-15">グラフ画像:</label>
                    <div class="col-sm-9">          
                        <input type="file" class="form-control" name="g_img">
                    </div>
                </div>

                <!-- Graph Caption -->
                <div class="form-group">
                    <label class="control-label cols-15">グラフキャプション:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="例）※1グラフの説明...などもここで記載出来ます" name="g_cap">
                    </div>
                </div>

                <!-- Graph Details -->
                <div class="form-group">
                    <label class="control-label cols-15">グラフ詳細:</label>
                    <div class="cols-15">          
                        <input type="checkbox" name="gd[]" value="参考">参考
                    </div>
                    <div class="cols-15">          
                        <input type="checkbox" name="gd[]" value="引用">引用
                    </div>
                    <div class="cols-15">          
                        <input type="checkbox" name="gd[]" value="出典">出典
                    </div>
                    <div class="cols-15">          
                        <input type="checkbox" name="gd[]" value="著作権">著作権
                    </div>
                    <div class="cols-1">          
                        <a href="#">詳しく見る</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="cols-15"></div>
                    <div class="col-sm-7">          
                        <input type="text" class="form-control" placeholder="例）国際感染症研究所" name="g_txt">
                    </div>
                    <div class="cols-15"></div>
                </div>
                <!-- Graph Alt -->
                <div class="form-group">
                    <label class="control-label cols-15">グラフalt:</label>
                    <div class="col-sm-7">          
                        <input type="text" class="form-control" placeholder="例）手足口病の報告数の平均" name="g_alt">
                    </div>
                    <div class="cols-15"><!-- <button type="button" class="btn btn-success">Save</button> --></div>
                </div>
                
            </div>
    </div>
</div>
    
    <div class="form-nopads">
        <!-- Editor Page -->
        <div class="editor-page">
            <div class="form-group">
                <label class="control-label cols-15">エディター担当者<br><span>Editor</span></label>
                <div class="cols-5">   
                    <input type="text" name="editor" class="form-control green" placeholder="Medical T. 編集部 A.Ito">&nbsp;&nbsp;&nbsp;
                </div>
                <div class="cols-2"><button type="button" class="btn-prime editor"></button></div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">メモ<br><span>Note</span></label>
                <div class="cols-5">   
                    <textarea class="form-control" rows="10" name="note"></textarea>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" name="save" value="" class="save-btn">
    <div id="totop" class="float-btn"></div>
    <div id="tobottom" class="float-btn"></div>

{!! Form::close() !!}

@endsection