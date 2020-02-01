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
                                <input type="text" class="form-control" placeholder="例）Infection_kid" name="url">
                            </div>
                        </div>
                        
                        <!-- Illness Category -->
                        <div class="form-group">
                            <label class="control-label cols-15">病気カテゴリー<br><span>Illness Category</span></label>
                            <div class="cols-4">          
                                <select name="ill_cat" class="form-control">
                                    <option value="選択してください">選択してください</option>
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
                        <div class="form-group">
                            <label class="control-label cols-15"></label>
                            <div class="cols-5">          
                                <textarea class="form-control sm5" name="sm[]" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
                                </textarea>
                            </div>
                            <div class="cols-2 relative">          
                                <span id="rchars4">0</span>/46
                                <div class=" relative"><button type="button" class="btn btn-success addsum1"><span class="lnr lnr-plus-circle"></span></button></div>
                
                            </div>
                        </div>

                    </div>
                    <!-- Form Pads -->
                </div>
                <!-- Form Ends -->

        </div>
        <!-- Modal COntent Ends -->

    </div>
</div>
</div>