@extends('layouts.app_il')
@section('content')

<!-- <h2>Add Illness</h2> -->
<br>
{!! Form::open(array('url' => '/save_illness', 'method' => 'post', 'files' => true)) !!}

    <div class="form-horizontal">

            <!-- URL Generator -->
            <div class="form-group">
                <label class="control-label col-sm-2">URL自動生成名:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="例）Infection_kids" name="url">
                </div>
            </div>

            <!-- Illness Category -->
            <div class="form-group">
                <label class="control-label col-sm-2">病気カテゴリー:</label>
                <div class="col-sm-9">          
                    <select name="ill_cat" class="form-control">
                        <option value="選択してください">選択してください</option>
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
                <label class="control-label col-sm-2">病名ショルダー:</label>
                <div class="col-sm-8">          
                    <input type="text" class="form-control ill_shldr" placeholder="例）手・足・口に赤い発疹や水ぶくれが出ます" name="ill_shldr" maxlength="20">
                </div>
                <div class="col-sm-1">          
                    <span id="rchars">0</span>/20
                </div>
            </div>

            <!-- Illness -->
            <div class="form-group">
                <label class="control-label col-sm-2">病名:</label>
                <div class="col-sm-8">          
                    <input type="text" class="form-control ill" placeholder="例）手足口病" name="ill" maxlength="14">
                </div>
                <div class="col-sm-1">          
                    <span id="rchars2">0</span>/14
                </div>
            </div>

            <!-- Illness Phonetics -->
            <div class="form-group">
                <label class="control-label col-sm-2">病名ふりがな:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="例）てあしくちびょう" name="ill_ph">
                </div>
            </div>

            <!-- Doctor  -->
            <div class="form-group">
                <label class="control-label col-sm-2">監修・協力医師:</label>
                <div class="col-sm-5">          
                    <select name="doctor" class="form-control">
                        <option value="">選択してください</option>

                        @foreach($doctors as $doc)
                            <option value="{!! $doc->id !!}">{!! $doc->name !!}</option>
                        @endforeach

                    </select>
                </div>
                <div class="cols-3 rad-buttons">
                    <input type="radio" id="sprvsn" value="監修" name="role">
                    <label for="sprvsn">監修</label>
                    <input type="radio" id="cc" value="取材協力" name="role">
                    <label for="cc">取材協力</label>
                    <input type="radio" id="scc" value="監修・取材協力" name="role">
                    <label for="scc">監修・取材協力</label>
                </div>  
                
            </div>

            <!-- Doctor Comment -->
            <div class="form-group">
                <label class="control-label col-sm-2">まとめ:</label>
                <div class="col-sm-8">          
                    <textarea class="form-control cmt" name="doc_cmt" maxlength="200">この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
                    </textarea>
                </div>
                <div class="col-sm-1">          
                    <span id="rchars3">0</span>/200
                </div>
            </div>

            <!-- Summarize -->
            <div class="form-group">
                <label class="control-label col-sm-2">医師コメント:</label>
                <div class="col-sm-10">  
                    <div class="col-sm-10">          
                        <textarea class="form-control sm" name="sm[]" maxlength="46"></textarea>
                    </div>
                    <div class="col-sm-1">          
                        <span id="rchars4">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="col-sm-10">          
                        <textarea class="form-control sm2" name="sm[]" maxlength="46"></textarea>
                    </div>
                    <div class="col-sm-1">          
                        <span id="rchars5">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="col-sm-10">          
                        <textarea class="form-control sm3" name="sm[]" maxlength="46"></textarea>
                    </div>
                    <div class="col-sm-1">          
                        <span id="rchars6">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="col-sm-10">          
                        <textarea class="form-control sm4" name="sm[]" maxlength="46"></textarea>
                    </div>
                    <div class="col-sm-1">          
                        <span id="rchars7">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="wrapper"></div>

                    <div class="col-sm-10">          
                        <textarea class="form-control sm" name="sm[]" maxlength="46"></textarea>
                    </div>
                    <div class="col-sm-1">          
                        <button type="button" class="btn btn-success sm-btn">+</button>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- Main Image -->
            <div class="form-group">
                <label class="control-label col-sm-2">メイン画像:</label>
                <div class="col-sm-9">          
                    <input type="file" class="form-control" name="img">
                </div>
            </div>

            <!-- Image Caption -->
            <div class="form-group">
                <label class="control-label col-sm-2">画像キャプション:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" placeholder="先生からいただいたものなどには必ずつけてください" name="img_cap">
                </div>
            </div>

            <!-- Image Alt -->
            <div class="form-group">
                <label class="control-label col-sm-2">画像alt:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="img_alt" placeholder="適切なキーワードを用い、適切な長さでわかりやすく簡潔な表現を" name="img_alt">
                </div>
            </div>

            <!-- add new form here -->
            <div class="wrapper2"></div>

            <div id="addanother">
                <!-- Subheading -->
                <div class="form-group">
                    <label class="control-label col-sm-2">小見出し:</label>
                    <div class="col-sm-9">          
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
                <!-- Text of the Subheading -->
                <div class="form-group">
                    <label class="control-label col-sm-2">画像alt:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="選択項目にない場合に入力" name="sub_head1b[]">
                    </div>
                </div>
                <!-- Use CKcreditor -->
                <div class="form-group">
                    <label class="control-label col-sm-2">本文:</label>
                    <div class="col-sm-9"> 
                         
                        <textarea class="form-control" name="txt_ckeditor[]" id="txt_ckeditor">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                        </textarea>
                    </div>
                    <div class="col-sm-1"><button type="button" class="btn btn-success add-ck">+</button></div> 
                    
                </div>
            
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3"><button type="button" class="btn btn-primary" id="show_img">Insert Image</button></div>
                    <div class="col-sm-3"><button type="button" class="btn btn-primary" id="show_graph">Insert Graph</button></div>
                </div>   

            </div>         

            <!-- Insert Image Wrapper -->
            <div id="img-wrapper">
                <hr>
                <!-- Main Image -->
                <div class="form-group">
                    <label class="control-label col-sm-2">メイン画像:</label>
                    <div class="col-sm-9">          
                        <input type="file" class="form-control" name="img2">
                    </div>
                </div>

                <!-- Image Caption -->
                <div class="form-group">
                    <label class="control-label col-sm-2">画像キャプション:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="院長 山田太郎" name="img_cap2">
                    </div>
                </div>

                <!-- Image Alt -->
                <div class="form-group">
                    <label class="control-label col-sm-2">画像alt:</label>
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
                    <label class="control-label col-sm-2">グラフタイトル:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="例）手足口病の2013年〜2018年の定点当たり報告数の平均" name="g_title">
                    </div>
                </div>

                <!-- Graph Image -->
                <div class="form-group">
                    <label class="control-label col-sm-2">グラフ画像:</label>
                    <div class="col-sm-9">          
                        <input type="file" class="form-control" name="g_img">
                    </div>
                </div>

                <!-- Graph Caption -->
                <div class="form-group">
                    <label class="control-label col-sm-2">グラフキャプション:</label>
                    <div class="col-sm-9">          
                        <input type="text" class="form-control" placeholder="例）※1グラフの説明...などもここで記載出来ます" name="g_cap">
                    </div>
                </div>

                <!-- Graph Details -->
                <div class="form-group">
                    <label class="control-label col-sm-2">グラフ詳細:</label>
                    <div class="col-sm-2">          
                        <input type="checkbox" name="gd[]" value="参考">参考
                    </div>
                    <div class="col-sm-2">          
                        <input type="checkbox" name="gd[]" value="引用">引用
                    </div>
                    <div class="col-sm-2">          
                        <input type="checkbox" name="gd[]" value="出典">出典
                    </div>
                    <div class="col-sm-2">          
                        <input type="checkbox" name="gd[]" value="著作権">著作権
                    </div>
                    <div class="col-sm-1">          
                        <a href="#">詳しく見る</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-7">          
                        <input type="text" class="form-control" placeholder="例）国際感染症研究所" name="g_txt">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <!-- Graph Alt -->
                <div class="form-group">
                    <label class="control-label col-sm-2">グラフalt:</label>
                    <div class="col-sm-7">          
                        <input type="text" class="form-control" placeholder="例）手足口病の報告数の平均" name="g_alt">
                    </div>
                    <div class="col-sm-2"><!-- <button type="button" class="btn btn-success">Save</button> --></div>
                </div>
            </div>

            <hr>
            <!-- Subheading -->
            <div class="form-group">
                <label class="control-label col-sm-2">小見出し</label>
                <div class="col-sm-8">   
                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                        <input type="hidden" name="ra_title" value="sample">
                        <span style="color: #F00;">手足口病のリスク度チェック</span>
                    </div>       
                    
                </div>
                <div class="col-sm-1">          
                    <input type="checkbox" name="shcb" class="form-control" value="1">
                </div>
            </div>

            <!-- Text of the subheading -->
            <div class="form-group">
                <label class="control-label col-sm-2">本文:</label>
                <div class="col-sm-10">  
                    <div class="col-sm-8">          
                        <textarea class="form-control sh" name="sh[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2"> 
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

                    <div class="col-sm-8">          
                        <textarea class="form-control sh2" name="sh[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2"> 
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

                    <div class="col-sm-8">          
                        <textarea class="form-control sh3" name="sh[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2">  
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

                    <div class="col-sm-8">          
                        <textarea class="form-control sh4" name="sh[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2">    
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

                    <div class="wrapper3"></div>

                    <div class="col-sm-8">          
                        <textarea class="form-control sh" name="sh[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2">   
                        リスク度
                        <select name="rl[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select><br>       
                        <button type="button" class="btn btn-success sh-btn">+</button>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- Check Result -->
            <div class="form-group">
                <label class="control-label col-sm-2">チェック結果</label>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="5〜10点=この文章はダミーです" name="cr[]"></div>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="11〜15点=この文章はダミーです" name="cr[]"></div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="16〜20点=この文章はダミーです" name="cr[]"></div>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="21〜25点=この文章はダミーです" name="cr[]"></div>
            </div>

            <!-- Subheading2 -->
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">小見出し</label>
                <div class="col-sm-8">   
                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                        <span style="color: #F00;">手足口病のリスク度チェック</span>
                    </div>       
                    
                </div>
                <div class="col-sm-1">       
                    <input type="checkbox" name="shcb" class="form-control">
                </div>
            </div> -->

            <!-- Text of the subheading2 -->
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">本文:</label>
                <div class="col-sm-10">  
                    <div class="col-sm-8">          
                        <textarea class="form-control sh_b" name="sh_b[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2"> 
                        リスク度 
                        <select name="rl2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                        </select><br>         
                        <span id="rchars12">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="col-sm-8">          
                        <textarea class="form-control sh2_b" name="sh_b[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2"> 
                        リスク度
                        <select name="rl2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                        </select><br>                
                        <span id="rchars13">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="col-sm-8">          
                        <textarea class="form-control sh3_b" name="sh_b[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2">  
                        リスク度
                        <select name="rl2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                        </select><br>              
                        <span id="rchars14">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="col-sm-8">          
                        <textarea class="form-control sh4_b" name="sh_b[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2">    
                        リスク度
                        <select name="rl2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                        </select><br>             
                        <span id="rchars15">0</span>/46
                    </div>
                    <div class="clear"></div>

                    <div class="wrapper4"></div>

                    <div class="col-sm-8">          
                        <textarea class="form-control sh_b" name="sh_b[]" maxlength="30"></textarea>
                    </div>
                    <div class="col-sm-2">   
                        リスク度
                        <select name="rl2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                        </select><br>       
                        <button type="button" class="btn btn-success sh-btn2">+</button>
                    </div>
                    <div class="clear"></div>
                </div>
            </div> -->

            <!-- Check Result -->
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">チェック結果</label>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="5〜10点=この文章はダミーです" name="cr_b[]"></div>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="11〜15点=この文章はダミーです" name="cr_b[]"></div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="16〜20点=この文章はダミーです" name="cr_b[]"></div>
                <div class="col-sm-4"><input type="text" class="form-control" placeholder="21〜25点=この文章はダミーです" name="cr_b[]"></div>
            </div> -->

            <hr>
            <!-- Search Keywords -->
            <div class="form-group">
                <label class="control-label col-sm-2">検索キーワード</label>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="例）夏の感染症" name="kword[]"></div>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="例）子どもの病気" name="kword[]"></div>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="例）手足口病" name="kword[]"></div>
            </div>

            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="例）ヘルパンギーナ" name="kword[]"></div>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="例）水いぼ" name="kword[]"></div>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="kword[]"></div>
            </div>

            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="kword[]"></div>
                <div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="kword[]"></div>
                <div class="col-sm-3">※裏設定。検索させたい関連ワードを表記</div>
            </div>

            <!-- Title for SEO -->
            <div class="form-group">
                <label class="control-label col-sm-2">タイトルタグ</label>
                <div class="col-sm-8">   
                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                        <input type="checkbox" name="seo" value="1"> <span style="color: #F00;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</span>
                    </div>       
                    
                </div>
                <div class="col-sm-1">          
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">   
                    <textarea class="form-control seo" name="seo_txt" maxlength="35">タイトルタグをカスタマイズする場合はこちらに入力ください</textarea>
                </div>
                <div class="col-sm-1">         
                    <span id="rchars16">0</span>/35
                </div>
            </div>

            <!-- Meta Description of SEO -->
            <div class="form-group">
                <label class="control-label col-sm-2">ディスクリプション</label>
                <div class="col-sm-8">   
                    <textarea class="form-control mt1" name="meta_txt1" maxlength="50">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。
                    </textarea>
                </div>
                <div class="col-sm-1">  
                    スマホ・PC用 重要文章<br>        
                    <span id="rchars17">0</span>/50
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">   
                    <textarea class="form-control mt2" name="meta_txt2" maxlength="70">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。</textarea><br>
                     <div style="border: 1px solid #CCC; padding: 5px; color: #F00;">
                         ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原 稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。 ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ
                     </div>
                </div>
                <div class="col-sm-1">     
                    PC用補足文章<br>      
                    <span id="rchars18">0</span>/70
                </div>
            </div>

            <!-- h1 -->
            <div class="form-group">
                <label class="control-label col-sm-2">h1</label>
                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    子どもの夏の感染症 いわゆる夏風邪は7月がピーク！
                    <input type="hidden" name="h1" value="Sample">
                </div>
            </div>
            
            <!-- h2 -->
            <div class="form-group">
                <label class="control-label col-sm-2">h2</label>
                <div class="col-sm-10">
                    <!-- add h2 fields -->
                    <div class="wrapper5"></div>

                    <div class="col-sm-3"><input type="text" class="form-control" placeholder="必要に応じて記載" name="h2[]"></div>
                    <div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div>
                    <div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div>
                    <div class="col-sm-1"><button type="button" class="btn btn-success add5">+</button></div>
                </div>
            </div>

            <!-- Tag Keyword -->
            <div class="form-group">
                <label class="control-label col-sm-2">タグ（キーワード）</label>
                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag[]" value="Sample"> 検索キーワド入力より
                    </div>
                </div>
            </div>

            <!-- Tag(illness name) -->
            <div class="form-group">
                <label class="control-label col-sm-2">タグ（病名）</label>
                <div class="col-sm-4" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    <input type="checkbox" name="tag_b[]"> 考えられる病気より
                </div>
                <div class="col-sm-4">
                    ※上記のキーワードに含まれていればチェック不要
                </div>
            </div>

            <!-- Tag(department) -->
            <div class="form-group">
                <label class="control-label col-sm-2">タグ（診療科・所属科）</label>
                <div class="col-sm-10"> 

                    <div id="addanother2">

                        <div class="col-sm-3">
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
                        <div class="col-sm-3">
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
                        <div class="col-sm-3">
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

                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                        <button type="button" class="btn btn-success add6">+</button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（症状）</label>
                <div class="col-sm-10"> 
                    <div id="addanother3">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_sy[]" placeholder="擬音や検索されやすい症状">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="clear"></div>

                    <div class="wrapper7"></div>

                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="tag_sy[]" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-success add7">+</button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（季節）</label>
                <div class="col-sm-10">   
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 春
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 夏
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 秋
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 冬
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 4月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 5月
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 6月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 7月
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 8月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 9月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 10月
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 11月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 12月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 1月
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 2月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s[]"> 3月
                    </div>

                    <div class="clear"></div>

                    <div class="wrapper8"></div>
                    <div id="addanother4">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_txt[]" placeholder="">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_txt[]" placeholder="">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_txt[]" placeholder="">
                        </div>
                        <div class="col-sm-1"><button type="button" class="btn btn-success add8">+</button></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（フリー入力）</label>
                <div class="col-sm-10"> 

                    <div class="wrapper9"></div>

                    <div id="addanother5">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_f[]" placeholder="">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_f[]" placeholder="">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tag_f[]" placeholder="">
                        </div>
                        <div class="col-sm-1"><button type="button" class="btn btn-success add9">+</button></div>
                    </div>
                    
                </div>
            </div>

            <hr>
            <!-- Editor Page -->
            <div class="form-group">
                <label class="control-label col-sm-2">エディター担当者</label>
                <div class="col-sm-7">   
                    <input type="text" name="editor" class="form-control" placeholder="Medical T. 編集部 A.Ito">
                </div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary">エディター変更申請</button></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">メモ</label>
                <div class="col-sm-7">   
                    <textarea class="form-control" name="note"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">   
                    <input type="submit" value="Save Illness">
                </div>
            </div>
                

    </div>

{!! Form::close() !!}

@endsection