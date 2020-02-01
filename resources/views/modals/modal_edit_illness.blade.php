<!-- Modal -->
<div id="editillness" class="modal fade" role="dialog" data-keyboard="true">
    <div class="modal-dialog modal-lg">
        <meta name="csrf-token" content="{{ csrf_token() }}">
				
        <!-- Modal content Starts-->
        <div class="modal-content">
            
            <div class="modal-header" style="color: black; background-color: #7CD5FF">
                <h4 class="modal-title"><b>Edit Illness</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <!-- Form Starts -->
                <div class="form-horizontal">

                    <div class="form-pads">

                        <!-- URL Generator -->
                        <div class="form-group">
                            <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
                            <div class="cols-4">
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                        </div>
                        
                        <!-- Illness Category -->
                        <div class="form-group">
                            <label class="control-label cols-15">病気カテゴリー<br><span>Illness Category</span></label>
                            <div class="cols-4">          
                                <div id="input_ill"></div>
                            </div>
                        </div>
                        <!-- Illness Shoulder -->
                        <div class="form-group">
                            <label class="control-label cols-15">特集ショルダー<br><span>Illness Shoulder</span></label>
                            <div class="cols-5">          
                                <input type="text" class="form-control ill_shldr" id="ill_shldr" name="ill_shldr" maxlength="20">
                            </div>
                            <div class="cols-2">          
                                <span id="rchars">20</span>/20
                            </div>
                        </div>
                        <!-- Illness -->
                        <div class="form-group">
                            <label class="control-label cols-15">特集タイトル<br><span>Illness</span></label>
                            <div class="cols-5">          
                                <input type="text" class="form-control ill" id="ill" name="ill" maxlength="14">
                            </div>
                            <div class="cols-2">          
                                <span id="rchars2">0</span>/14
                            </div>
                        </div>

                         <!-- Illness Phonetic -->
                        <div class="form-group">
                            <label class="control-label cols-15">病名ふりがな<br><span>Illness Phonetic</span></label>
                            <div class="cols-5">          
                                <input type="text" class="form-control" id="ill_ph"  name="ill_ph" maxlength="14">
                            </div>
                        </div>
                        <!-- Doctor -->
                        <div class="form-group">
                            <label class="control-label cols-15">監修・協力医師<br><span>Doctor</span></label>
                            <div class="cols-5">          
                                <select name="doctor" class="form-control">
                                    <option value="">選択してください</option>
                                    
                                </select>
                            </div>
                            <div class="cols-3 rad-buttons">
                                <div id="input_rad"></div>
                            </div>	
                        </div>
                        <!-- Doctor Comment -->
                        <div class="form-group full">
                            <label class="control-label cols-15">医師コメント<br><span>Doctor Comment</span></label>
                            <div class="cols-5">          
                                <textarea class="form-control cmt" id="cmt" name="doc_cmt" rows="5" maxlength="200">この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
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
                                <div id="input_sum"></div>
                            </div>
                            <div class="cols-2">          
                                
                            </div>
                        </div>

                        <!-- Main Image -->
                        <div class="form-group">
                            <label class="control-label cols-15">メイン画像<br><span>Main image </span></label>
                            <div class="cols-45">          
                                <div class="custom-file-upload ill">
                                    <input type="file" id="img"  name="img"/>
                                </div>
                            </div>
                        </div>
                        <!-- Image Caption -->
                        <div class="form-group">
                            <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
                            <div class="cols-4">
                                <input type="text" class="form-control" id="img_cap" name="img_cap">
                            </div>
                        </div>
                        <!-- Image Alt -->
                        <div class="form-group">
                            <label class="control-label cols-15">画像alt<br><span>Image alt</span></label>
                            <div class="cols-4">
                                <input type="text" class="form-control" id="img_alt" name="img_alt">
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

                        <!-- Text of Subheading -->
                        <div class="form-group editor">
                            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                            <div class="cols-6">   
                                <!-- add new textarea here -->
                                <div class="field_wrap2"></div>
                                <div id="addanother1">
                                    <div class="cols-10">        
                                        <textarea class="form-control" name="txt_ckeditor[]" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck"><span class="lnr lnr-plus-circle"></span></button></div> 
                        </div>
                        <!-- Buttons -->
                        <div class="form-group">
                            <div class="cols-15"></div>
                            <div class="cols-55"><button type="button" class="btn-prime image" id="show_img"></button><button type="button" class="btn-prime graph" id="show_graph"></button></div>
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

                        <hr>
                        <!-- Search Keywords -->
                        <div class="form-group">
                            <label class="control-label cols-15">検索キーワード<br><span>Search Key word</span></label>
                            <div class="cols-7">
                                <div id="input_kwords"></div>
                            </div>
                        </div>

                        <div class="form-group check">
                            <label class="control-label cols-15">タイトルタグ<br><span>Title Tag for SEO</span></label>
                            <div class="cols-45">   
                                <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                                <div id="input_seo_title"></div>
                                </div>    
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="cols-15"></div>
                            <div class="cols-45">   
                                <textarea class="form-control seo" id="seo_txt" name="seo_txt" maxlength="35"></textarea>
                            </div>
                            <div class="cols-1">         
                                <span id="rchars16">0</span>/35
                            </div>
                        </div>

                        <!-- Meta Description of SEO -->
                        <div class="form-group">
                            <label class="control-label cols-15">ディスクリプション<br><span>Meta description for SEO</span></label>
                            <div class="cols-45">   
                                <textarea class="form-control mt1" id="meta_txt1" name="meta_txt1" maxlength="50"></textarea>
                            </div>
                            <div class="cols-3">  
                                スマホ・PC用 重要文章<br>        
                                <span id="rchars17">35</span>/50
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="cols-15"></div>
                            <div class="cols-45">   
                                <textarea class="form-control mt2" id="meta_txt2" name="meta_txt2" maxlength="70"></textarea><br>
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
                        </div>
                        
                        <!-- h1 -->
                        <div class="form-group">
                        <br>
                            <label class="control-label cols-15">h1</label>
                            <div class="cols-4" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                                <div id="input_h1"></div>
                            </div>
                        </div>
                        
                        <!-- h2 -->
                        <div class="form-group">
                            <label class="control-label cols-15">h2</label>
                            <div class="cols-7">
                                <div id="input_h2"></div>
                                
                            </div>
                        </div>

                        <!-- Tag Keyword -->
                        <div class="form-group check">
                            <label class="control-label cols-15">タグ（キーワード<br><span>Tag(key word)</label>
                            <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                                <div class="cols-3">
                                    <input type="checkbox" id="tag" name="tag[]"/>
                                    <label for="tag">検索キーワド入力より</label>
                                </div>
                                <div class="cols-3">
                                    <input type="checkbox" id="tag2"  name="tag[]"/>
                                    <label for="tag2">検索キーワド入力より</label>
                                </div>
                                <div class="cols-3">
                                    <input type="checkbox" id="tag3"  name="tag[]"/>
                                    <label for="tag3">検索キーワド入力より</label>
                                </div>
                                <div class="cols-3">
                                    <input type="checkbox" id="tag8"  name="tag[]"/>
                                    <label for="tag8">検索キーワド入力より</label>
                                </div>
                                <div class="cols-3">
                                    <input type="checkbox" id="tag4"  name="tag[]"/>
                                    <label for="tag4">検索キーワド入力より</label>
                                </div>
                                <div class="cols-3">
                                    <input type="checkbox" id="tag5"  name="tag[]"/>
                                    <label for="tag5">検索キーワド入力より</label>
                                </div>
                                <div class="cols-3">
                                    <input type="checkbox" id="tag6"  name="tag[]"/>
                                    <label for="tag6">検索キーワド入力より</label>
                                </div>
                                <div class="cols-3">
                                    <input type="checkbox" id="tag7"  name="tag[]"/>
                                    <label for="tag7">検索キーワド入力より</label>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Tag(illness name) -->
                        <div class="form-group check">
                            <label class="control-label cols-15">タグ（病名）<br><span>Tag(illness name)</span></label>
                            <div class="col-sm-4" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                                <input type="checkbox" id="tag9" name="tag_b[]"> 
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
                                <div id="input_sy"></div>
                            </div>
                        </div>

                        <div class="form-group check">
                            <label class="control-label cols-15">タグ（季節)<br><span>Tag(season)</span></label>
                            <div class="cols-6">   
                                <div class="cols-12">
                                    <input type="checkbox" id="taga1" name="tag_s[]"> 
                                    <label for="taga1">春</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga2" name="tag_s[]"> 
                                    <label for="taga2">夏</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga3" name="tag_s[]"> 
                                    <label for="taga3">秋</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="taga4" name="tag_s[]">
                                    <label for="taga4"> 冬</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga5" name="tag_s[]">
                                    <label for="taga5">4月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga6" name="tag_s[]">
                                    <label for="taga6">5月</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="taga7" name="tag_s[]">
                                    <label for="taga7">6月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga8" name="tag_s[]"> 
                                    <label for="taga8">7月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga9" name="tag_s[]"> 
                                    <label for="taga9">8月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga10" name="tag_s[]"> 
                                    <label for="taga10">9月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga11" name="tag_s[]"> 
                                    <label for="taga11">10月</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="taga12" name="tag_s[]"> 
                                    <label for="taga12">11月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga13" name="tag_s[]"> 
                                    <label for="taga13">12月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga14" name="tag_s[]"> 
                                    <label for="taga14">1月</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="taga15" name="tag_s[]"> 
                                    <label for="taga15">2月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="taga16" name="tag_s[]"> 
                                    <label for="taga16">3月</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label cols-15"></span></label>
                            <div class="cols-7"> 
                                
                                <div id="input_tst"></div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label cols-15">タグ（フリー入力)<br><span>Tag(free)</span></label>
                            <div class="cols-7"> 
                                <div id="input_free"></div>
                                
                            </div>
                        </div>

                    </div>
                    <!-- Form Pads -->
                </div>
                <!-- Form Ends -->

                <input type="submit" name="save" value="" class="save-btn">

        </div>
        <!-- Modal COntent Ends -->

    </div>
</div>
</div>