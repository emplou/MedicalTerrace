@extends('layouts.app_il')
@section('content')
@include('modals.modal_add_illness')
<!-- <h2>Add Illness</h2> -->
<div class="header-wrapper">
    <div class="left">
        <h2>手足口病<span>ID番号:I00000</span></h2>
        
    </div>
    <div class="right">
        <div>作成日<span>Date</span></div>
        <div class="select">
            <select>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
            </select>
        </div>
        <div>最終更新日<span>Update</span></div>
        <div class="select">0000/00/00</div>
    </div>
    
</div>
<hr />
    <div class="form-container">
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
        {!! Form::open(array('url' => '/save_illness', 'method' => 'post', 'files' => true)) !!}

    <div class="form-horizontal">

        <div class="form-pads">
            <!-- URL Generator -->
            <div class="form-group">
                <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
                <div class="cols-4">
                    <input type="text" class="form-control" placeholder="例）Infection_kid" name="url">
                </div>
            </div>
            
           
             <!-- Illness Shoulder -->
            <div class="form-group">
                <label class="control-label cols-15">特集ショルダー<br><span>Illness Shoulder</span></label>
                <div class="cols-5">          
                    <input type="text" class="form-control ill_shldr"  placeholder="例)手・足・ 口に赤い発疹や水ぶくれが出ます" name="ill_shldr" maxlength="20">
                </div>
                <div class="cols-2">          
                    <span id="rchars">20</span>/20
                </div>
            </div>
             <!-- Illness -->
            <div class="form-group">
                <label class="control-label cols-15">特集タイトル<br><span>Illness</span></label>
                <div class="cols-5">          
                    <input type="text" class="form-control ill"  placeholder="例)手足口病" name="ill" maxlength="14">
                </div>
                <div class="cols-2">          
                    <span id="rchars2">0</span>/14
                </div>
            </div>
             <!-- Illness Phonetic -->
            <div class="form-group">
                <label class="control-label cols-15">病名ふりがな<br><span>Illness Phonetic</span></label>
                <div class="cols-5">          
                    <input type="text" class="form-control" placeholder="例)てあしくちびょう"  name="ill_ph" maxlength="14">
                </div>
            </div>
             <!-- Doctor -->
            <div class="form-group">
                <label class="control-label cols-15">監修・協力医師<br><span>Doctor</span></label>
                <div class="cols-5">          
                     <select name="doctor" class="form-control">
                        <option value="">選択してください</option>
                        @foreach($doctors as $doc)
                            <option value="{!! $doc->id !!}">{!! $doc->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-3 rad-buttons">
					<input type="radio" id="sprvsn" name="role" value="監修">
					<label for="sprvsn">監修</label>
					<input type="radio" id="cc" name="role" value="取材協力">
					<label for="cc">取材協力</label>
					<input type="radio" id="scc" name="role" value="監修・取材協力">
					<label for="scc">監修・取材協力</label>
		        </div>	
            </div>
             <!-- Doctor Comment -->
            <div class="form-group full">
                <label class="control-label cols-15">医師コメント<br><span>Doctor Comment</span></label>
                <div class="cols-5">          
                    <textarea class="form-control cmt" name="doc_cmt" rows="5" maxlength="200">この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
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
                    <textarea class="form-control sm" name="sm[]" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
					</textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars4">0</span>/46
				</div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15"></label>
                <div class="cols-5">          
                    <textarea class="form-control sm2" name="sm[]" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
					</textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars4">0</span>/46
				</div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15"></label>
                <div class="cols-5">          
                    <textarea class="form-control sm3" name="sm[]" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
					</textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars4">0</span>/46
				</div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15"></label>
                <div class="cols-5">          
                    <textarea class="form-control sm4" name="sm[]" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
					</textarea>
                </div>
                <div class="cols-2">          
					<span id="rchars4">0</span>/46
				</div>
            </div>
           
             <!-- Main Image -->
            <div class="form-group">
                <label class="control-label cols-15">メイン画像<br><span>Main image </span></label>
                <div class="cols-45">          
                    <div class="custom-file-upload ill">
                        <input type="file" id="file"  name="img"/>
                    </div>
                </div>
            </div>
             <!-- Image Caption -->
            <div class="form-group">
                <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
                <div class="cols-4">
                    <input type="text" class="form-control" placeholder="例)院長 山田太(郎 やまだたろう)" name="img_cap">
                </div>
            </div>
             <!-- Image Alt -->
            <div class="form-group">
                <label class="control-label cols-15">画像alt<br><span>Image alt</span></label>
                <div class="cols-4">
                    <input type="text" class="form-control" placeholder="例)メディカルテラスクリニック院長山田太郎" name="img_alt">
                </div>
            </div>
            <br>
            <!-- Subheading -->
            <div class="form-group">
                <label class="control-label cols-15">病気カテゴリー<br><span>Subheading</span></label>
                <div class="cols-4">          
                <select name="sub_head1a[]" class="form-control">
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
                    <input type="text" class="form-control" placeholder="選択項目にない場合に入力" name="sub_head1b[]">
                </div>
            </div>


             <!-- Subheading -->

            <div class="form-group check">
                <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                <div class="cols-5">   
                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                        <input type="checkbox" id="a1" name="subheading-chck" value="1" />
                        <label for="a1" style="color:red;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
					</div>    
                </div>
               
            </div>
             
            <div class="form-group">
                <label class="control-label cols-15">h1</label>
                <div class="cols-5" style="border: 1px solid #CCC; padding: 5px; color: #ff335a;">   
                    子どもの夏の感染症 いわゆる夏風邪は7月がピーク！
                    <input type="hidden" name="h1" value="sample">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label cols-15">h2</label>
                <div class="cols-7">
                    <!-- add h2 fields -->
                    <div class="field_wrap5"></div>

                    <div class="cols-3"><input type="text" class="form-control" placeholder="必要に応じて記載" name="h2[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div>
                    <div class="cols-1 relative"><button type="button" class="btn btn-success add5"><span class="lnr lnr-plus-circle"></span></button></div>
                </div>
            </div>

            <div class="form-group check">
                <label class="control-label cols-15">タグ(キーワード) <br><span> Tag(key word)</span></label>
                <div class="cols-7" style="border: 1px solid #CCC; border-radius: 5px; padding: 5px; color: #F00;">   
                    <div class="cols-4">
						<input type="checkbox" id="tag1" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag1">検索キーワド入力より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag2" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag2">検索キーワド入力より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag3" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag3">検索キーワド入力より</label>
                    </div>
                    <div class="clear"></div>
                    <div class="cols-4">
						<input type="checkbox" id="tag4" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag4">検索キーワド入力より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag5" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag5">検索キーワド入力より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag6" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag6">検索キーワド入力より</label>
                    </div>
                    <div class="clear"></div>
                    <div class="cols-4">
						<input type="checkbox" id="tag7" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag7">検索キーワド入力より</label>
                    </div>
                    <div class="cols-4">
						<input type="checkbox" id="tag8" name="tag_ch[]" value="考えられる病気より"> 
						<label for="tag8">検索キーワド入力より</label>
                    </div>
                </div>
            </div>
           
                
                <!-- Check Result -->
                <div class="form-group">
                    <label class="control-label cols-15">チェック結果<br><span>Check result</span></label>
                    <div class="cols-6">
                        <div class="cols-5"><input type="text" class="form-control" placeholder="5〜10点=この文章はダミーです" name="cr[]"></div>
                        <div class="cols-5"><input type="text" class="form-control" placeholder="11〜15点=この文章はダミーです" name="cr[]"></div>
                    </div>
                    <div class="sidediv cols-3">
                        <div class="sidebots">
                            <a class="prevbutton" type="button" class="btn-prime preview" href="#previewAddIllness">Preview</a>
                            <button type="button" class="btn-prime release1" id="myBtn">Release</button>
                            <button type="button" class="btn-prime release2" id="myBtn">Release</button>
                        </div>
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

           <!--  <div class="form-group check">
                <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                <div class="cols-5">   
                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                        <input type="checkbox" id="a1" name="subheading-chck"/>
                        <label for="a1" style="color:red;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
					</div>    
                </div>
            </div> -->

            <!-- Text of the subheading -->
            <!-- <div class="form-group">
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
                        <span id="rchars8">0</span>/46
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
                        <span id="rchars9">0</span>/46
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
                        <span id="rchars9">0</span>/46
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
                        <span id="rchars9">0</span>/46
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
                        <span id="rchars9">0</span>/46
                        <div class="cols-1 relative"><button type="button" class="btn btn-success addsub sh-btn"><span class="lnr lnr-plus-circle"></span></button></div>
                    </div>
                </div> -->
                
                <!-- Check Result -->
                <!-- <div class="form-group">
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
                </div> -->

                <hr>
            <!-- Search Keywords -->
            <div class="form-group">
                <label class="control-label cols-15">検索キーワード<br><span>Search Key word</span></label>
                <div class="cols-7">
                    <div class="cols-3"><input type="text" class="form-control" placeholder="例）夏の感染症" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="例）子どもの病気" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="例）手足口病" name="kword[]"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="control-label cols-15"></div>
                <div class="cols-7">
                    <div class="cols-3"><input type="text" class="form-control" placeholder="例）ヘルパンギーナ" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="例）水いぼ" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="" name="kword[]"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="control-label cols-15"></div>
                <div class="cols-7">
                    <div class="cols-3"><input type="text" class="form-control" placeholder="" name="kword[]"></div>
                    <div class="cols-3"><input type="text" class="form-control" placeholder="" name="kword[]"></div>
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
                    <textarea class="form-control seo" name="seo_txt" maxlength="35">タイトルタグをカスタマイズする場合はこちらに入力ください</textarea>
                </div>
                <div class="cols-1">         
                    <span id="rchars16">0</span>/35
                </div>
            </div>

            <!-- Meta Description of SEO -->
            <div class="form-group">
                <label class="control-label cols-15">ディスクリプション<br><span>Meta description for SEO</span></label>
                <div class="cols-45">   
                    <textarea class="form-control mt1" name="meta_txt1" maxlength="50">親譲りの無鉄砲で小供の時から 損ばかりしている。小学校に居る時分学校の。</textarea>
                </div>
                <div class="cols-3">  
                    スマホ・PC用 重要文章<br>        
                    <span id="rchars17">35</span>/50
                </div>
            </div>
            <div class="form-group">
                <div class="cols-15"></div>
                <div class="cols-45">   
                    <textarea class="form-control mt2" name="meta_txt2" maxlength="70">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。</textarea><br>
                </div>
                <div class="cols-3">     
                    PC用補足文章<br>      
                    <span id="rchars18">0</span>/70
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
                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    <div class="cols-3">
                        <input type="checkbox" id="tag" name="tag[]" value="1"/>
                        <label for="tag">検索キーワド入力より</label>
                    </div>
                    <div class="cols-3">
                        <input type="checkbox" id="tag2"  name="tag[]" value="1"/>
                        <label for="tag2">検索キーワド入力より</label>
                    </div>
                    <div class="cols-3">
                        <input type="checkbox" id="tag3"  name="tag[]" value="1"/>
                        <label for="tag3">検索キーワド入力より</label>
                    </div>
                    <div class="cols-3">
                        <input type="checkbox" id="tag8"  name="tag[]" value="1"/>
                        <label for="tag8">検索キーワド入力より</label>
                    </div>
                    <div class="cols-3">
                        <input type="checkbox" id="tag4"  name="tag[]" value="1"/>
                        <label for="tag4">検索キーワド入力より</label>
                    </div>
                    <div class="cols-3">
                        <input type="checkbox" id="tag5"  name="tag[]" value="1"/>
                        <label for="tag5">検索キーワド入力より</label>
                    </div>
                    <div class="cols-3">
                        <input type="checkbox" id="tag6"  name="tag[]" value="1"/>
                        <label for="tag6">検索キーワド入力より</label>
                    </div>
                    <div class="cols-3">
                        <input type="checkbox" id="tag7"  name="tag[]" value="1"/>
                        <label for="tag7">検索キーワド入力より</label>
                    </div>
                    
                </div>
            </div>

             <!-- Tag(illness name) -->
             <div class="form-group check">
                <label class="control-label cols-15">タグ（病名）<br><span>Tag(illness name)</span></label>
                <div class="col-sm-4" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    <input type="checkbox" id="tag9" name="tag_b[]" value="1"> 
                    <label for="tag9">考えられる病気より</label>
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
                                <option value="内科">内科</option>
                                <option value="呼吸器内科">呼吸器内科</option>
                                <option value="循環器内科">循環器内科</option>
                                <option value="消化器内科">消化器内科</option>
                                <option value="心臓内科">心臓内科</option>
                                <option value="血液内科">血液内科</option>
                                <option value="気管食道内科">気管食道内科</option>
                                <option value="胃腸内科">胃腸内科</option>
                                <option value="腫瘍内科">腫瘍内科</option>
                                <option value="糖　尿病内科">糖　尿病内科</option>
                                <option value="代謝内科">代謝内科</option>
                                <option value="内分泌内科">内分泌内科</option>
                                <option value="脂質代謝内科">脂質代謝内科</option>
                                <option value="腎臓内科">腎臓内科</option>
                                <option value="神経内科">神経内科</option>
                                <option value="心療内科">心療内科</option>
                                <option value="感染症内科">感染症内科</option>
                                <option value="漢方内科">漢方内科</option>
                                <option value="老年内科">老年内科</option>
                                <option value="女性内科">女性内科</option>
                                <option value="新生児内科">新生児内科</option>
                                <option value="性感染症内科">性感染症内科</option>
                                <option value="内視鏡内科">内視鏡内科</option>
                                <option value="人工透析内科">人工透析内科</option>
                                <option value="疼痛緩和内科">疼痛緩和内科</option>
                                <option value="ペインクリニック内科">ペインクリニック内科</option>
                                <option value="アレルギー疾患内科">アレルギー疾患内科</option>
                                <option value="内科（ペインクリニック）">内科（ペインクリニック）</option>
                                <option value="内科（循環器）">内科（循環器）</option>
                                <option value="内科（薬物療法）">内科（薬物療法）</option>
                                <option value="内科（感染症）">内科（感染症）</option>
                                <option value="内科（骨髄移植）">内科（骨髄移植）</option>
                                <option value="外科">外科</option>
                                <option value="呼吸器外科">呼吸器外科</option>
                                <option value="心臓血管外科">心臓血管外科</option>
                                <option value="心臓外科">心臓外科</option>
                                <option value="消化器外科">消化器外科</option>
                                <option value="乳腺外科">乳腺外科</option>
                                <option value="小児外科">小児外科</option>
                                <option value="気管食道外科">気管食道外科</option>
                                <option value="肛門外科">肛門外科</option>
                                <option value="整形外科">整形外科</option>
                                <option value="脳神経外科">脳神経外科</option>
                                <option value="形成外科">形成外科</option>
                                <option value="美容外科">美容外科</option>
                                <option value="腫瘍外科">腫瘍外科</option>
                                <option value="移植外科">移植外科</option>
                                <option value="頭頸部外科">頭頸部外科</option>
                                <option value="胸部外科">胸部外科</option>
                                <option value="腹部外科">腹部外科</option>
                                <option value="肝臓外科">肝臓外科</option>
                                <option value="膵臓外科">膵臓外科</option>
                                <option value="胆のう外科">胆のう外科</option>
                                <option value="食道外科">食道外科</option>
                                <option value="大腸外科">大腸外科</option>
                                <option value="内視鏡外科">内視鏡外科</option>
                                <option value="ペインクリニック外科">ペインクリニック外科</option>
                                <option value="外科（内視鏡）">外科（内視鏡）</option>
                                <option value="外科（がん）">外科（がん）</option>
                                <option value="精神科">精神科</option>
                                <option value="アレルギー科">アレルギー科</option>
                                <option value="リウマチ科">リウマチ科</option>
                                <option value="小児科">小児科</option>
                                <option value="皮膚科">皮膚科</option>
                                <option value="泌尿器科">泌尿器科</option>
                                <option value="産婦人科">産婦人科</option>
                                <option value="産科">産科</option>
                                <option value="婦人科">婦人科</option>
                                <option value="眼科">眼科</option>
                                <option value="耳鼻いんこう科">耳鼻いんこう科</option>
                                <option value="リハビリテーション科">リハビリテーション科</option>
                                <option value="放射線科">放射線科</option>
                                <option value="放射線診断科">放射線診断科</option>
                                <option value="放射線治療科">放射線治療科</option>
                                <option value="病理診断科">病理診断科</option>
                                <option value="臨床検査科">臨床検査科</option>
                                <option value="救急科">救急科</option>
                                <option value="児童精神科">児童精神科</option>
                                <option value="老年精神科">老年精神科</option>
                                <option value="小児眼科">小児眼科</option>
                                <option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option>
                                <option value="小児皮膚科">小児皮膚科</option>
                                <option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option>
                                <option value="腫瘍放射線科">腫瘍放射線科</option>
                                <option value="男性泌尿器科">男性泌尿器科</option>
                                <option value="神経泌尿器科">神経泌尿器科</option>
                                <option value="小児泌尿器科">小児泌尿器科</option>
                                <option value="小児科（新生児）">小児科（新生児）</option>
                                <option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option>
                                <option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option>
                                <option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>
                                <option value="美容皮膚科">美容皮膚科</option>
                            </select>
                        </div>
                        <div class="cols-3">
                            <select name="tag_dep[]" class="form-control">
                                <option value="">選択してください</option>
                                <option value="内科">内科</option>
                                <option value="呼吸器内科">呼吸器内科</option>
                                <option value="循環器内科">循環器内科</option>
                                <option value="消化器内科">消化器内科</option>
                                <option value="心臓内科">心臓内科</option>
                                <option value="血液内科">血液内科</option>
                                <option value="気管食道内科">気管食道内科</option>
                                <option value="胃腸内科">胃腸内科</option>
                                <option value="腫瘍内科">腫瘍内科</option>
                                <option value="糖　尿病内科">糖　尿病内科</option>
                                <option value="代謝内科">代謝内科</option>
                                <option value="内分泌内科">内分泌内科</option>
                                <option value="脂質代謝内科">脂質代謝内科</option>
                                <option value="腎臓内科">腎臓内科</option>
                                <option value="神経内科">神経内科</option>
                                <option value="心療内科">心療内科</option>
                                <option value="感染症内科">感染症内科</option>
                                <option value="漢方内科">漢方内科</option>
                                <option value="老年内科">老年内科</option>
                                <option value="女性内科">女性内科</option>
                                <option value="新生児内科">新生児内科</option>
                                <option value="性感染症内科">性感染症内科</option>
                                <option value="内視鏡内科">内視鏡内科</option>
                                <option value="人工透析内科">人工透析内科</option>
                                <option value="疼痛緩和内科">疼痛緩和内科</option>
                                <option value="ペインクリニック内科">ペインクリニック内科</option>
                                <option value="アレルギー疾患内科">アレルギー疾患内科</option>
                                <option value="内科（ペインクリニック）">内科（ペインクリニック）</option>
                                <option value="内科（循環器）">内科（循環器）</option>
                                <option value="内科（薬物療法）">内科（薬物療法）</option>
                                <option value="内科（感染症）">内科（感染症）</option>
                                <option value="内科（骨髄移植）">内科（骨髄移植）</option>
                                <option value="外科">外科</option>
                                <option value="呼吸器外科">呼吸器外科</option>
                                <option value="心臓血管外科">心臓血管外科</option>
                                <option value="心臓外科">心臓外科</option>
                                <option value="消化器外科">消化器外科</option>
                                <option value="乳腺外科">乳腺外科</option>
                                <option value="小児外科">小児外科</option>
                                <option value="気管食道外科">気管食道外科</option>
                                <option value="肛門外科">肛門外科</option>
                                <option value="整形外科">整形外科</option>
                                <option value="脳神経外科">脳神経外科</option>
                                <option value="形成外科">形成外科</option>
                                <option value="美容外科">美容外科</option>
                                <option value="腫瘍外科">腫瘍外科</option>
                                <option value="移植外科">移植外科</option>
                                <option value="頭頸部外科">頭頸部外科</option>
                                <option value="胸部外科">胸部外科</option>
                                <option value="腹部外科">腹部外科</option>
                                <option value="肝臓外科">肝臓外科</option>
                                <option value="膵臓外科">膵臓外科</option>
                                <option value="胆のう外科">胆のう外科</option>
                                <option value="食道外科">食道外科</option>
                                <option value="大腸外科">大腸外科</option>
                                <option value="内視鏡外科">内視鏡外科</option>
                                <option value="ペインクリニック外科">ペインクリニック外科</option>
                                <option value="外科（内視鏡）">外科（内視鏡）</option>
                                <option value="外科（がん）">外科（がん）</option>
                                <option value="精神科">精神科</option>
                                <option value="アレルギー科">アレルギー科</option>
                                <option value="リウマチ科">リウマチ科</option>
                                <option value="小児科">小児科</option>
                                <option value="皮膚科">皮膚科</option>
                                <option value="泌尿器科">泌尿器科</option>
                                <option value="産婦人科">産婦人科</option>
                                <option value="産科">産科</option>
                                <option value="婦人科">婦人科</option>
                                <option value="眼科">眼科</option>
                                <option value="耳鼻いんこう科">耳鼻いんこう科</option>
                                <option value="リハビリテーション科">リハビリテーション科</option>
                                <option value="放射線科">放射線科</option>
                                <option value="放射線診断科">放射線診断科</option>
                                <option value="放射線治療科">放射線治療科</option>
                                <option value="病理診断科">病理診断科</option>
                                <option value="臨床検査科">臨床検査科</option>
                                <option value="救急科">救急科</option>
                                <option value="児童精神科">児童精神科</option>
                                <option value="老年精神科">老年精神科</option>
                                <option value="小児眼科">小児眼科</option>
                                <option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option>
                                <option value="小児皮膚科">小児皮膚科</option>
                                <option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option>
                                <option value="腫瘍放射線科">腫瘍放射線科</option>
                                <option value="男性泌尿器科">男性泌尿器科</option>
                                <option value="神経泌尿器科">神経泌尿器科</option>
                                <option value="小児泌尿器科">小児泌尿器科</option>
                                <option value="小児科（新生児）">小児科（新生児）</option>
                                <option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option>
                                <option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option>
                                <option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>
                                <option value="美容皮膚科">美容皮膚科</option>
                            </select>
                        </div>
                        <div class="cols-3">
                            <select name="tag_dep[]" class="form-control">
                                <option value="">選択してください</option>
                                <option value="内科">内科</option>
                                <option value="呼吸器内科">呼吸器内科</option>
                                <option value="循環器内科">循環器内科</option>
                                <option value="消化器内科">消化器内科</option>
                                <option value="心臓内科">心臓内科</option>
                                <option value="血液内科">血液内科</option>
                                <option value="気管食道内科">気管食道内科</option>
                                <option value="胃腸内科">胃腸内科</option>
                                <option value="腫瘍内科">腫瘍内科</option>
                                <option value="糖　尿病内科">糖　尿病内科</option>
                                <option value="代謝内科">代謝内科</option>
                                <option value="内分泌内科">内分泌内科</option>
                                <option value="脂質代謝内科">脂質代謝内科</option>
                                <option value="腎臓内科">腎臓内科</option>
                                <option value="神経内科">神経内科</option>
                                <option value="心療内科">心療内科</option>
                                <option value="感染症内科">感染症内科</option>
                                <option value="漢方内科">漢方内科</option>
                                <option value="老年内科">老年内科</option>
                                <option value="女性内科">女性内科</option>
                                <option value="新生児内科">新生児内科</option>
                                <option value="性感染症内科">性感染症内科</option>
                                <option value="内視鏡内科">内視鏡内科</option>
                                <option value="人工透析内科">人工透析内科</option>
                                <option value="疼痛緩和内科">疼痛緩和内科</option>
                                <option value="ペインクリニック内科">ペインクリニック内科</option>
                                <option value="アレルギー疾患内科">アレルギー疾患内科</option>
                                <option value="内科（ペインクリニック）">内科（ペインクリニック）</option>
                                <option value="内科（循環器）">内科（循環器）</option>
                                <option value="内科（薬物療法）">内科（薬物療法）</option>
                                <option value="内科（感染症）">内科（感染症）</option>
                                <option value="内科（骨髄移植）">内科（骨髄移植）</option>
                                <option value="外科">外科</option>
                                <option value="呼吸器外科">呼吸器外科</option>
                                <option value="心臓血管外科">心臓血管外科</option>
                                <option value="心臓外科">心臓外科</option>
                                <option value="消化器外科">消化器外科</option>
                                <option value="乳腺外科">乳腺外科</option>
                                <option value="小児外科">小児外科</option>
                                <option value="気管食道外科">気管食道外科</option>
                                <option value="肛門外科">肛門外科</option>
                                <option value="整形外科">整形外科</option>
                                <option value="脳神経外科">脳神経外科</option>
                                <option value="形成外科">形成外科</option>
                                <option value="美容外科">美容外科</option>
                                <option value="腫瘍外科">腫瘍外科</option>
                                <option value="移植外科">移植外科</option>
                                <option value="頭頸部外科">頭頸部外科</option>
                                <option value="胸部外科">胸部外科</option>
                                <option value="腹部外科">腹部外科</option>
                                <option value="肝臓外科">肝臓外科</option>
                                <option value="膵臓外科">膵臓外科</option>
                                <option value="胆のう外科">胆のう外科</option>
                                <option value="食道外科">食道外科</option>
                                <option value="大腸外科">大腸外科</option>
                                <option value="内視鏡外科">内視鏡外科</option>
                                <option value="ペインクリニック外科">ペインクリニック外科</option>
                                <option value="外科（内視鏡）">外科（内視鏡）</option>
                                <option value="外科（がん）">外科（がん）</option>
                                <option value="精神科">精神科</option>
                                <option value="アレルギー科">アレルギー科</option>
                                <option value="リウマチ科">リウマチ科</option>
                                <option value="小児科">小児科</option>
                                <option value="皮膚科">皮膚科</option>
                                <option value="泌尿器科">泌尿器科</option>
                                <option value="産婦人科">産婦人科</option>
                                <option value="産科">産科</option>
                                <option value="婦人科">婦人科</option>
                                <option value="眼科">眼科</option>
                                <option value="耳鼻いんこう科">耳鼻いんこう科</option>
                                <option value="リハビリテーション科">リハビリテーション科</option>
                                <option value="放射線科">放射線科</option>
                                <option value="放射線診断科">放射線診断科</option>
                                <option value="放射線治療科">放射線治療科</option>
                                <option value="病理診断科">病理診断科</option>
                                <option value="臨床検査科">臨床検査科</option>
                                <option value="救急科">救急科</option>
                                <option value="児童精神科">児童精神科</option>
                                <option value="老年精神科">老年精神科</option>
                                <option value="小児眼科">小児眼科</option>
                                <option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option>
                                <option value="小児皮膚科">小児皮膚科</option>
                                <option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option>
                                <option value="腫瘍放射線科">腫瘍放射線科</option>
                                <option value="男性泌尿器科">男性泌尿器科</option>
                                <option value="神経泌尿器科">神経泌尿器科</option>
                                <option value="小児泌尿器科">小児泌尿器科</option>
                                <option value="小児科（新生児）">小児科（新生児）</option>
                                <option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option>
                                <option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option>
                                <option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>
                                <option value="美容皮膚科">美容皮膚科</option>
                            </select>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>

                    <div class="clear"></div>

                    <div class="wrapper6"></div>

                    <div class="cols-3">
                        <select name="tag_dep[]" class="form-control">
                            <option value="">選択してください</option>
                            <option value="内科">内科</option>
                            <option value="呼吸器内科">呼吸器内科</option>
                            <option value="循環器内科">循環器内科</option>
                            <option value="消化器内科">消化器内科</option>
                            <option value="心臓内科">心臓内科</option>
                            <option value="血液内科">血液内科</option>
                            <option value="気管食道内科">気管食道内科</option>
                            <option value="胃腸内科">胃腸内科</option>
                            <option value="腫瘍内科">腫瘍内科</option>
                            <option value="糖　尿病内科">糖　尿病内科</option>
                            <option value="代謝内科">代謝内科</option>
                            <option value="内分泌内科">内分泌内科</option>
                            <option value="脂質代謝内科">脂質代謝内科</option>
                            <option value="腎臓内科">腎臓内科</option>
                            <option value="神経内科">神経内科</option>
                            <option value="心療内科">心療内科</option>
                            <option value="感染症内科">感染症内科</option>
                            <option value="漢方内科">漢方内科</option>
                            <option value="老年内科">老年内科</option>
                            <option value="女性内科">女性内科</option>
                            <option value="新生児内科">新生児内科</option>
                            <option value="性感染症内科">性感染症内科</option>
                            <option value="内視鏡内科">内視鏡内科</option>
                            <option value="人工透析内科">人工透析内科</option>
                            <option value="疼痛緩和内科">疼痛緩和内科</option>
                            <option value="ペインクリニック内科">ペインクリニック内科</option>
                            <option value="アレルギー疾患内科">アレルギー疾患内科</option>
                            <option value="内科（ペインクリニック）">内科（ペインクリニック）</option>
                            <option value="内科（循環器）">内科（循環器）</option>
                            <option value="内科（薬物療法）">内科（薬物療法）</option>
                            <option value="内科（感染症）">内科（感染症）</option>
                            <option value="内科（骨髄移植）">内科（骨髄移植）</option>
                            <option value="外科">外科</option>
                            <option value="呼吸器外科">呼吸器外科</option>
                            <option value="心臓血管外科">心臓血管外科</option>
                            <option value="心臓外科">心臓外科</option>
                            <option value="消化器外科">消化器外科</option>
                            <option value="乳腺外科">乳腺外科</option>
                            <option value="小児外科">小児外科</option>
                            <option value="気管食道外科">気管食道外科</option>
                            <option value="肛門外科">肛門外科</option>
                            <option value="整形外科">整形外科</option>
                            <option value="脳神経外科">脳神経外科</option>
                            <option value="形成外科">形成外科</option>
                            <option value="美容外科">美容外科</option>
                            <option value="腫瘍外科">腫瘍外科</option>
                            <option value="移植外科">移植外科</option>
                            <option value="頭頸部外科">頭頸部外科</option>
                            <option value="胸部外科">胸部外科</option>
                            <option value="腹部外科">腹部外科</option>
                            <option value="肝臓外科">肝臓外科</option>
                            <option value="膵臓外科">膵臓外科</option>
                            <option value="胆のう外科">胆のう外科</option>
                            <option value="食道外科">食道外科</option>
                            <option value="大腸外科">大腸外科</option>
                            <option value="内視鏡外科">内視鏡外科</option>
                            <option value="ペインクリニック外科">ペインクリニック外科</option>
                            <option value="外科（内視鏡）">外科（内視鏡）</option>
                            <option value="外科（がん）">外科（がん）</option>
                            <option value="精神科">精神科</option>
                            <option value="アレルギー科">アレルギー科</option>
                            <option value="リウマチ科">リウマチ科</option>
                            <option value="小児科">小児科</option>
                            <option value="皮膚科">皮膚科</option>
                            <option value="泌尿器科">泌尿器科</option>
                            <option value="産婦人科">産婦人科</option>
                            <option value="産科">産科</option>
                            <option value="婦人科">婦人科</option>
                            <option value="眼科">眼科</option>
                            <option value="耳鼻いんこう科">耳鼻いんこう科</option>
                            <option value="リハビリテーション科">リハビリテーション科</option>
                            <option value="放射線科">放射線科</option>
                            <option value="放射線診断科">放射線診断科</option>
                            <option value="放射線治療科">放射線治療科</option>
                            <option value="病理診断科">病理診断科</option>
                            <option value="臨床検査科">臨床検査科</option>
                            <option value="救急科">救急科</option>
                            <option value="児童精神科">児童精神科</option>
                            <option value="老年精神科">老年精神科</option>
                            <option value="小児眼科">小児眼科</option>
                            <option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option>
                            <option value="小児皮膚科">小児皮膚科</option>
                            <option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option>
                            <option value="腫瘍放射線科">腫瘍放射線科</option>
                            <option value="男性泌尿器科">男性泌尿器科</option>
                            <option value="神経泌尿器科">神経泌尿器科</option>
                            <option value="小児泌尿器科">小児泌尿器科</option>
                            <option value="小児科（新生児）">小児科（新生児）</option>
                            <option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option>
                            <option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option>
                            <option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>
                            <option value="美容皮膚科">美容皮膚科</option>
                        </select>
                    </div>
                    <div class="cols-3">
                        <select name="tag_dep[]" class="form-control">
                            <option value="">選択してください</option>
                            <option value="内科">内科</option>
                            <option value="呼吸器内科">呼吸器内科</option>
                            <option value="循環器内科">循環器内科</option>
                            <option value="消化器内科">消化器内科</option>
                            <option value="心臓内科">心臓内科</option>
                            <option value="血液内科">血液内科</option>
                            <option value="気管食道内科">気管食道内科</option>
                            <option value="胃腸内科">胃腸内科</option>
                            <option value="腫瘍内科">腫瘍内科</option>
                            <option value="糖　尿病内科">糖　尿病内科</option>
                            <option value="代謝内科">代謝内科</option>
                            <option value="内分泌内科">内分泌内科</option>
                            <option value="脂質代謝内科">脂質代謝内科</option>
                            <option value="腎臓内科">腎臓内科</option>
                            <option value="神経内科">神経内科</option>
                            <option value="心療内科">心療内科</option>
                            <option value="感染症内科">感染症内科</option>
                            <option value="漢方内科">漢方内科</option>
                            <option value="老年内科">老年内科</option>
                            <option value="女性内科">女性内科</option>
                            <option value="新生児内科">新生児内科</option>
                            <option value="性感染症内科">性感染症内科</option>
                            <option value="内視鏡内科">内視鏡内科</option>
                            <option value="人工透析内科">人工透析内科</option>
                            <option value="疼痛緩和内科">疼痛緩和内科</option>
                            <option value="ペインクリニック内科">ペインクリニック内科</option>
                            <option value="アレルギー疾患内科">アレルギー疾患内科</option>
                            <option value="内科（ペインクリニック）">内科（ペインクリニック）</option>
                            <option value="内科（循環器）">内科（循環器）</option>
                            <option value="内科（薬物療法）">内科（薬物療法）</option>
                            <option value="内科（感染症）">内科（感染症）</option>
                            <option value="内科（骨髄移植）">内科（骨髄移植）</option>
                            <option value="外科">外科</option>
                            <option value="呼吸器外科">呼吸器外科</option>
                            <option value="心臓血管外科">心臓血管外科</option>
                            <option value="心臓外科">心臓外科</option>
                            <option value="消化器外科">消化器外科</option>
                            <option value="乳腺外科">乳腺外科</option>
                            <option value="小児外科">小児外科</option>
                            <option value="気管食道外科">気管食道外科</option>
                            <option value="肛門外科">肛門外科</option>
                            <option value="整形外科">整形外科</option>
                            <option value="脳神経外科">脳神経外科</option>
                            <option value="形成外科">形成外科</option>
                            <option value="美容外科">美容外科</option>
                            <option value="腫瘍外科">腫瘍外科</option>
                            <option value="移植外科">移植外科</option>
                            <option value="頭頸部外科">頭頸部外科</option>
                            <option value="胸部外科">胸部外科</option>
                            <option value="腹部外科">腹部外科</option>
                            <option value="肝臓外科">肝臓外科</option>
                            <option value="膵臓外科">膵臓外科</option>
                            <option value="胆のう外科">胆のう外科</option>
                            <option value="食道外科">食道外科</option>
                            <option value="大腸外科">大腸外科</option>
                            <option value="内視鏡外科">内視鏡外科</option>
                            <option value="ペインクリニック外科">ペインクリニック外科</option>
                            <option value="外科（内視鏡）">外科（内視鏡）</option>
                            <option value="外科（がん）">外科（がん）</option>
                            <option value="精神科">精神科</option>
                            <option value="アレルギー科">アレルギー科</option>
                            <option value="リウマチ科">リウマチ科</option>
                            <option value="小児科">小児科</option>
                            <option value="皮膚科">皮膚科</option>
                            <option value="泌尿器科">泌尿器科</option>
                            <option value="産婦人科">産婦人科</option>
                            <option value="産科">産科</option>
                            <option value="婦人科">婦人科</option>
                            <option value="眼科">眼科</option>
                            <option value="耳鼻いんこう科">耳鼻いんこう科</option>
                            <option value="リハビリテーション科">リハビリテーション科</option>
                            <option value="放射線科">放射線科</option>
                            <option value="放射線診断科">放射線診断科</option>
                            <option value="放射線治療科">放射線治療科</option>
                            <option value="病理診断科">病理診断科</option>
                            <option value="臨床検査科">臨床検査科</option>
                            <option value="救急科">救急科</option>
                            <option value="児童精神科">児童精神科</option>
                            <option value="老年精神科">老年精神科</option>
                            <option value="小児眼科">小児眼科</option>
                            <option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option>
                            <option value="小児皮膚科">小児皮膚科</option>
                            <option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option>
                            <option value="腫瘍放射線科">腫瘍放射線科</option>
                            <option value="男性泌尿器科">男性泌尿器科</option>
                            <option value="神経泌尿器科">神経泌尿器科</option>
                            <option value="小児泌尿器科">小児泌尿器科</option>
                            <option value="小児科（新生児）">小児科（新生児）</option>
                            <option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option>
                            <option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option>
                            <option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>
                            <option value="美容皮膚科">美容皮膚科</option>
                        </select>
                    </div>
                    <div class="cols-3">
                        <select name="tag_dep[]" class="form-control">
                            <option value="">選択してください</option>
                            <option value="内科">内科</option>
                            <option value="呼吸器内科">呼吸器内科</option>
                            <option value="循環器内科">循環器内科</option>
                            <option value="消化器内科">消化器内科</option>
                            <option value="心臓内科">心臓内科</option>
                            <option value="血液内科">血液内科</option>
                            <option value="気管食道内科">気管食道内科</option>
                            <option value="胃腸内科">胃腸内科</option>
                            <option value="腫瘍内科">腫瘍内科</option>
                            <option value="糖　尿病内科">糖　尿病内科</option>
                            <option value="代謝内科">代謝内科</option>
                            <option value="内分泌内科">内分泌内科</option>
                            <option value="脂質代謝内科">脂質代謝内科</option>
                            <option value="腎臓内科">腎臓内科</option>
                            <option value="神経内科">神経内科</option>
                            <option value="心療内科">心療内科</option>
                            <option value="感染症内科">感染症内科</option>
                            <option value="漢方内科">漢方内科</option>
                            <option value="老年内科">老年内科</option>
                            <option value="女性内科">女性内科</option>
                            <option value="新生児内科">新生児内科</option>
                            <option value="性感染症内科">性感染症内科</option>
                            <option value="内視鏡内科">内視鏡内科</option>
                            <option value="人工透析内科">人工透析内科</option>
                            <option value="疼痛緩和内科">疼痛緩和内科</option>
                            <option value="ペインクリニック内科">ペインクリニック内科</option>
                            <option value="アレルギー疾患内科">アレルギー疾患内科</option>
                            <option value="内科（ペインクリニック）">内科（ペインクリニック）</option>
                            <option value="内科（循環器）">内科（循環器）</option>
                            <option value="内科（薬物療法）">内科（薬物療法）</option>
                            <option value="内科（感染症）">内科（感染症）</option>
                            <option value="内科（骨髄移植）">内科（骨髄移植）</option>
                            <option value="外科">外科</option>
                            <option value="呼吸器外科">呼吸器外科</option>
                            <option value="心臓血管外科">心臓血管外科</option>
                            <option value="心臓外科">心臓外科</option>
                            <option value="消化器外科">消化器外科</option>
                            <option value="乳腺外科">乳腺外科</option>
                            <option value="小児外科">小児外科</option>
                            <option value="気管食道外科">気管食道外科</option>
                            <option value="肛門外科">肛門外科</option>
                            <option value="整形外科">整形外科</option>
                            <option value="脳神経外科">脳神経外科</option>
                            <option value="形成外科">形成外科</option>
                            <option value="美容外科">美容外科</option>
                            <option value="腫瘍外科">腫瘍外科</option>
                            <option value="移植外科">移植外科</option>
                            <option value="頭頸部外科">頭頸部外科</option>
                            <option value="胸部外科">胸部外科</option>
                            <option value="腹部外科">腹部外科</option>
                            <option value="肝臓外科">肝臓外科</option>
                            <option value="膵臓外科">膵臓外科</option>
                            <option value="胆のう外科">胆のう外科</option>
                            <option value="食道外科">食道外科</option>
                            <option value="大腸外科">大腸外科</option>
                            <option value="内視鏡外科">内視鏡外科</option>
                            <option value="ペインクリニック外科">ペインクリニック外科</option>
                            <option value="外科（内視鏡）">外科（内視鏡）</option>
                            <option value="外科（がん）">外科（がん）</option>
                            <option value="精神科">精神科</option>
                            <option value="アレルギー科">アレルギー科</option>
                            <option value="リウマチ科">リウマチ科</option>
                            <option value="小児科">小児科</option>
                            <option value="皮膚科">皮膚科</option>
                            <option value="泌尿器科">泌尿器科</option>
                            <option value="産婦人科">産婦人科</option>
                            <option value="産科">産科</option>
                            <option value="婦人科">婦人科</option>
                            <option value="眼科">眼科</option>
                            <option value="耳鼻いんこう科">耳鼻いんこう科</option>
                            <option value="リハビリテーション科">リハビリテーション科</option>
                            <option value="放射線科">放射線科</option>
                            <option value="放射線診断科">放射線診断科</option>
                            <option value="放射線治療科">放射線治療科</option>
                            <option value="病理診断科">病理診断科</option>
                            <option value="臨床検査科">臨床検査科</option>
                            <option value="救急科">救急科</option>
                            <option value="児童精神科">児童精神科</option>
                            <option value="老年精神科">老年精神科</option>
                            <option value="小児眼科">小児眼科</option>
                            <option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option>
                            <option value="小児皮膚科">小児皮膚科</option>
                            <option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option>
                            <option value="腫瘍放射線科">腫瘍放射線科</option>
                            <option value="男性泌尿器科">男性泌尿器科</option>
                            <option value="神経泌尿器科">神経泌尿器科</option>
                            <option value="小児泌尿器科">小児泌尿器科</option>
                            <option value="小児科（新生児）">小児科（新生児）</option>
                            <option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option>
                            <option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option>
                            <option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>
                            <option value="美容皮膚科">美容皮膚科</option>
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
                        <input type="checkbox" id="taga1" name="tag_s[]" value="1"> 
                        <label for="taga1">春</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga2" name="tag_s[]" value="1"> 
                        <label for="taga2">夏</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga3" name="tag_s[]" value="1"> 
                        <label for="taga3">秋</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga4" name="tag_s[]" value="1">
                        <label for="taga4"> 冬</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga5" name="tag_s[]" value="1">
                        <label for="taga5">4月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga6" name="tag_s[]" value="1">
                        <label for="taga6">5月</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga7" name="tag_s[]" value="1">
                        <label for="taga7">6月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga8" name="tag_s[]" value="1"> 
                        <label for="taga8">7月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga9" name="tag_s[]" value="1"> 
                        <label for="taga9">8月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga10" name="tag_s[]" value="1"> 
                        <label for="taga10">9月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga11" name="tag_s[]" value="1"> 
                        <label for="taga11">10月</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga12" name="tag_s[]" value="1"> 
                        <label for="taga12">11月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga13" name="tag_s[]" value="1"> 
                        <label for="taga13">12月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga14" name="tag_s[]" value="1"> 
                        <label for="taga14">1月</label>
                    </div>  
                    <div class="cols-12">
                        <input type="checkbox" id="taga15" name="tag_s[]" value="1"> 
                        <label for="taga15">2月</label>
                    </div>
                    <div class="cols-12">
                        <input type="checkbox" id="taga16" name="tag_s[]" value="1"> 
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