<!-- Modal -->
<div id="copyAddspecial" class="modal fade" role="dialog" data-keyboard="true">
    <div class="modal-dialog modal-lg">
    <meta name="csrf-token" content="{{ csrf_token() }}">
				
    <!-- Modal content-->
    <div class="modal-content">
    
        <div class="modal-header" style="color: white; background-color: #046C9D">
            <h4 class="modal-title"><b>Copy Add Special</b></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      
        <div class="modal-body">
            {!! Form::open(['url' => '/save_copy_doctor', 'method' => 'post', 'files' => true]) !!}
            <input type="hidden" name="spID" id="twospID" value=" ">

            <div class="form-horizontal">
		        <div class="form-pads">

                    <div class="form-group">
                        <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
                        <div class="cols-4">
                            <input type="text" class="form-control" id="twourl" name="url">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">掲載誌<br><span>Magazine</span></label>
                        <div class="cols-4">          
                            <input type="text" class="form-control" id="twomagazine" name="magazine">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">病気カテゴリー<br><span>Illness Category</span></label>
                        <div class="cols-5">          
                            <div id="input_ill_two"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">特集カテゴリー<br><span>Special Category</span></label>
                        <div class="cols-5">          
                        <div id="input_cat_two"></div>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label cols-15">特集ショルダー<br><span>Special Title Shoulder</span></label>
                        <div class="cols-5">          
                            <input type="text" class="form-control sts" id="twosts" name="sts" maxlength="20">
                        </div>
                        <div class="col-sm-2">          
                            <span id="rchars">0</span>/20
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">特集タイトル<br><span>Special Title</span></label>
                        <div class="cols-5">          
                            <input type="text" class="form-control st" id="twost" name="st" maxlength="14">
                        </div>
                        <div class="col-sm-2">          
                            <span id="rchars2">0</span>/14
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">監修・協力医師<br><span>Doctor</span></label>
                        <div class="cols-5">          
                            <div id="input_doc_two"></div>
                        </div>
                        <div class="cols-3 rad-buttons">
                            <div id="input_rad_two"></div>
                        </div>	
                    </div>

                    <div class="form-group full">
                        <label class="control-label cols-15">医師コメント<br><span>Doctor Comment</span></label>
                        <div class="cols-5">          
                            <textarea class="form-control cmt" name="cmt" id="twocmt" rows="5" maxlength="200">この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
                            </textarea>
                        </div>
                        <div class="cols-2">          
                            <span id="rchars3">0</span>/200
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">メイン画像<br><span>Image</span></label>
                        <div class="cols-5">          
                            <!-- <input type="file" class="form-control" name="img"> -->
                            <div class="custom-file-upload">
                            <!--<label for="file">File: </label>--> 
                                <input type="file" id="twoimg" name="myfiles[]" name="img" multiple />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
                        <div class="cols-5">          
                            <input type="text" class="form-control" id="twoimg_cap" name="img_cap">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">画像alt<br><span>Image Alt</span></label>
                        <div class="cols-5">          
                            <input type="text" class="form-control" id="twoimg_alt" name="img_alt">
                        </div>
                    </div>

                    <!-- Use CKcreditor -->
                    <div class="form-group editor">
                        <label class="control-label cols-15">リード<br><span>Text of Subheading</span></label>
                        <div class="cols-7">   
                            <!-- add new textarea here -->
                            <div class="field_wrap2"></div>
                            <div id="addanother1">
                                <div id="input_lead_two"></div>
                            </div>
                        </div>
                        <div class="cols-1"><button type="button" class="btn btn-success add2"><span class="lnr lnr-plus-circle"></span></button></div> 
                    </div>
                    <hr>

                    <!-- add new form here -->
                    <div class="field_wrap3"></div>

                    <div id="addanother2">
                        <div class="form-group">
                            <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                            <div class="cols-5">          
                                <select name="twosub_head1a[]" class="form-control">
                                    <option value="">選択してください</option>
                                    <option value="基礎知識">基礎知識</option>
                                    <option value="近年の動向">近年の動向</option>
                                    <option value="注意した方がよい人">注意した方がよい人</option>
                                    <option value="出やすい症状">出やすい症状</option>
                                </select>
                            </div>
                            <label class="control-label cols-15"></label>
                            <div class="cols-5">          
                                <input type="text" class="form-control" id="sub_head1b" name="twosub_head1b[]">
                            </div>
                        </div>

                        <!-- Use CKcreditor -->
                        <div class="form-group editor">
                            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                            <div class="cols-7"> 
                                
                                <textarea class="form-control" name="twotxt_ckeditor[]" id="txt_ckeditor">
                                </textarea>
                            </div>
                            <div class="cols-1 relative"><button type="button" class="btn btn-success add3"><span class="lnr lnr-plus-circle"></span></button></div> 
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-15"></div>
                        <div class="cols-55"><button type="button" class="btn-prime image"></button><button type="button" class="btn-prime graph"></button></div>
                    </div>

                    <hr>

                    <!-- <span>Insert image</span> with add field starts -->
                    <div class="form-group">
                        <label class="control-label cols-15">考えられる病気<br><span>Illness</span></label>
                        <div class="cols-15"><button type="button" class="btn-prime image"></button></div>
                        <div class="cols-4"><input type="text" class="form-control" name="twopos_ill[]"></div>
                        <div class="cols-1"></div>
                    </div>

                    <div class="form-group">
                        <div class="control-label cols-15"></div>
                        <div class="cols-15"><button type="button" class="btn-prime image"></button></div>
                        <div class="cols-4"><input type="text" class="form-control" name="twopos_ill[]"></div>
                        <div class="cols-1"></div>
                    </div>
                    <!-- Add fields here -->
                    <div class="field_wrap1"></div>
                
                    <div class="form-group">
                        <div class="control-label cols-15"></div>
                        <div class="cols-15"><button type="button" class="btn-prime image"></button></div>
                        <div class="cols-4"><input type="text" class="form-control" name="twopos_ill[]"></div>
                        <div class="cols-1 relative"><button type="button" class="btn btn-success add1"><span class="lnr lnr-plus-circle"></span></button></div>
                    </div>
                    
                    <!-- <span>Insert image</span> with add field ends -->
                    <hr>

                    <!-- add new form here -->
                    <div class="field_wrap4"></div>

                    <div id="addanother3">
                        <div class="form-group">
                            <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                            <div class="cols-5">          
                                <select name="twosub_head2a[]" class="form-control">
                                    <option value="">選択してください</option>
                                    <option value="基礎知識">基礎知識</option>
                                    <option value="近年の動向">近年の動向</option>
                                    <option value="注意した方がよい人">注意した方がよい人</option>
                                    <option value="出やすい症状">出やすい症状</option>
                                </select>
                            </div>
                            <div class="cols-5">          
                                <input type="text" class="form-control" name="twosub_head2b[]">
                            </div>
                        </div>

                        <!-- Use CKcreditor -->
                        <div class="form-group editor">
                            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                            <div class="cols-7">          
                                <textarea class="form-control" name="twotxt2_ckeditor[]" id="txt2_ckeditor">
                                </textarea>
                            </div>
                            <div class="cols-1 relative"><button type="button" class="btn btn-success add4"><span class="lnr lnr-plus-circle"></span></button></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-15"></div>
                        <div class="cols-5"><button type="button" class="btn-prime image"></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn-prime graph"></button></div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label class="control-label cols-15">検索キーワード<br><span>Search Key word</span></label>
                        <div class="cols-8">
                            <div id="input_seo_two"></div>
                        </div>
                    </div>
                    
                    <div class="form-group check">
                        <label class="control-label cols-15">タイトルタグ<br><span>Title Tag for SEO</span></label>
                        <div class="cols-5">   
                            <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                                <div id="input_seo_title_two"></div>
                            </div>    
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-15"></div>
                        <div class="cols-5">   
                            <textarea class="form-control seo" name="seo_txt" id="twoseo_txt" maxlength="35">タイトルタグをカスタマイズする場合はこちらに入力ください<br><span>Meta description for SEO</span></textarea>
                        </div>
                        <div class="cols-1">   
                            <br>
                            <span id="rchars4">0</span>/35
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">ディスクリプション<br><span>Meta description for SEO</span></label>
                        <div class="cols-5">   
                            <textarea class="form-control mt1" name="meta_txt1" id="twometa_txt1" maxlength="50">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る
        時分学校の。</textarea>
                        </div>
                        <div class="cols-2">   
                        スマホ・PC用 重要文章 <br>       
                            <span id="rchars5">0</span>/50
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label cols-15"></label>
                        <div class="cols-5">   
                            <textarea class="form-control mt2" name="meta_txt2" id="twometa_txt2" maxlength="70">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。</textarea><br>
                        </div>
                        <div class="cols-1">   
                            PC用補足文章 <br>       
                            <span id="rchars5">70</span>/70
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label cols-15"></label>
                        <div class="cols-7"> 
                            <div style="border: 1px solid #CCC; padding: 5px; color: #ff335a;">
                                ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原 稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。 ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ
                            </div>
                        </div>
                        <div class="cols-1">          
                            <span id="rchars6">0</span>/70
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">h1</label>
                        <div class="cols-5" style="border: 1px solid #CCC; padding: 5px; color: #ff335a;">   
                            子どもの夏の感染症 いわゆる夏風邪は7月がピーク！
                            <input type="hidden" name="h1" id="twoh1" value="sample">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label cols-15">h2</label>
                        <div class="cols-7">
                            <!-- add h2 fields -->
                            <div class="field_wrap5"></div>

                            <div id="input_h2_two"></div>
                            <div class="cols-1 relative"><button type="button" class="btn btn-success add5"><span class="lnr lnr-plus-circle"></span></button></div>
                        </div>
                    </div>

                    <div class="form-group check">
                        <label class="control-label cols-15">タグ(キーワード) <br><span> Tag(key word)</span></label>
                        <div class="cols-7" style="border: 1px solid #CCC; border-radius: 5px; padding: 5px; color: #F00;">   
                            <div class="cols-4">
                                <input type="checkbox" id="tag1" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag1">検索キーワド入力より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag2" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag2">検索キーワド入力より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag3" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag3">検索キーワド入力より</label>
                            </div>
                            <div class="clear"></div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag4" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag4">検索キーワド入力より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag5" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag5">検索キーワド入力より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag6" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag6">検索キーワド入力より</label>
                            </div>
                            <div class="clear"></div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag7" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag7">検索キーワド入力より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag8" name="twotag_ch[]" value="考えられる病気より"> 
                                <label for="tag8">検索キーワド入力より</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group check">
                        <label class="control-label cols-15">タグ(病名) <br><span>Tag(illness name)</span></label>
                        <div class="cols-7" style="border: 1px solid #CCC; border-radius: 5px; padding: 5px; color: #F00;">   
                            <div class="cols-4">
                                <input type="checkbox" id="tag1b" name="twotag_ill[]" value="考えられる病気より"> 
                                <label for="tag1b">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag2b" name="twotag_ill[]" value="考えられる病気より"> 
                                <label for="tag2b">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag3b" name="twotag_ill[]" value="考えられる病気より"> 
                                <label for="tag3b">考えられる病気より</label>
                            </div>
                            <div class="clear"></div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag4b" name="twotag_ill[]" value="考えられる病気より"> 
                                <label for="tag4b">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag5b" name="twotag_ill[]" value="考えられる病気より"> 
                                <label for="tag5b">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag6b" name="twotag_ill[]" value="考えられる病気より"> 
                                <label for="tag6b">考えられる病気より</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">タグ<br>(診療科・所属科）<span>Tag(department)</span></label>
                        <div class="cols-7">   
                            <div class="cols-3">
                                <select name="twotag_dep[]" class="form-control">
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
                                <select name="twotag_dep[]" class="form-control">
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
                                <select name="twotag_dep[]" class="form-control">
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
                            <div class="cols-1"></div>
                            <div class="clear"></div>

                            <div class="field_wrap6"></div>

                            <div class="cols-3">
                                <select name="twotag_dep[]" class="form-control">
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
                                <select name="twotag_dep[]" class="form-control">
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
                                <select name="twotag_dep[]" class="form-control">
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
                            <div class="cols-1 relative">
                                <button type="button" class="btn btn-success add6"><span class="lnr lnr-plus-circle"></span></button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">タグ(症状) <br> <span>Tag(Symptoms)</span></label>
                        <div class="cols-7">   
                            

                            <div class="field_wrap7"></div>

                            <div id="input_sy_two"></div>
                            <div class="cols-1 relative">
                                <button type="button" class="btn btn-success add7"><span class="lnr lnr-plus-circle"></span></button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group check">
                        <label class="control-label cols-15">タグ(季節)<br><span>Tag(season)</span></label>
                        <div class="cols-7">   
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s1" name="twotag_s[]" value="1"> 
                                <label for="tag_s1">春</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s2" name="twotag_s[]" value="1"> 
                                <label for="tag_s2">夏</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s3" name="twotag_s[]" value="1"> 
                                <label for="tag_s3">秋</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s4" name="twotag_s[]" value="1"> 
                                <label for="tag_s4">冬</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s5" name="twotag_s[]" value="1"> 
                                <label for="tag_s5">4月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s6" name="twotag_s[]" value="1"> 
                                <label for="tag_s6">5月</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s7" name="twotag_s[]" value="1"> 
                                <label for="tag_s7">6月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s8" name="twotag_s[]" value="1">
                                <label for="tag_s8">7月</label>
                            </div>
                            <div class="clear"></div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s9" name="twotag_s[]" value="1">
                                <label for="tag_s9">8月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s10" name="twotag_s[]" value="1">
                                <label for="tag_s10">9月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s11" name="twotag_s[]" value="1">
                                <label for="tag_s11">10月</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s12" name="twotag_s[]" value="1"> 
                                <label for="tag_s12">11月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s13" name="twotag_s[]" value="1"> 
                                <label for="tag_s14">12月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s14" name="twotag_s[]" value="1"> 
                                <label for="tag_s14">1月</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s15" name="twotag_s[]" value="1"> 
                                <label for="tag_s15">2月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s16" name="twotag_s[]" value="1"> 
                                <label for="tag_s16">3月</label>
                            </div>

                            <div class="clear"></div>

                            <div class="field_wrap8"></div>

                            <div id="input_tst_two"></div>
                            
                            <div class="cols-1 relative"><button type="button" class="btn btn-success add8"><span class="lnr lnr-plus-circle"></span></button></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">タグ(フリー入力)<br><span>Tag(free)</span></label>
                        <div class="cols-7"> 

                            <div class="field_wrap9"></div>

                            <div id="input_free_two"></div>
                            <div class="cols-1 relative"><button type="button" class="btn btn-success add9"><span class="lnr lnr-plus-circle"></span></button></div>
                            
                        </div>
                    </div>

                    <input type="submit" name="save" value="" class="save-btn">
                
                </div>
            </div>

        {!! Form::close() !!}
        </div>
        <!-- Modal -->
    </div>
    </div>
</div>
