<!-- modal_edit_illness -->
<div id="editillness" class="modal fade" role="dialog" data-keyboard="true">
    <div class="modal-dialog edit">
        <meta name="csrf-token" content="{{ csrf_token() }}">
				
        <!-- Modal content Starts-->
        <div class="modal-content">
            <div class="modal-header" style="color: black; background-color: #7CD5FF">
                <h4 class="modal-title"><b>Edit Illness</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <div class="header-wrapper">
                    <div class="left">
                        <!-- <div id="authorID"></div> -->
                        <h2>子どもの夏の感染症<span>ID番号:S00000</span></h2>
                        
                    </div>
                    <div class="right">
                        <div>作成日<span>Date</span></div>
                        <div class="select mod" id="input_arch">
                            <!-- <select>
                                <option>0000/00/00</option>
                                <option>0000/00/00</option>
                                <option>0000/00/00</option>
                                <option>0000/00/00</option>
                                <option>0000/00/00</option>
                            </select> -->
                        </div>
                        <div>最終更新日<span>Update</span></div>
                        <div class="select">0000/00/00</div>
                    </div>
                </div>
                <hr />
                <div class="form-container add">
                    <div class="form-progress">
                        <ul>
                            <li class="active">下書き<br><span>Draft</span></li>
                            <li class="active">プレビュー<br><span>Preview</span></li>
                            <li id="appreq">承認依頼<br><span>Approval Request</span></li>
                            <li id="approve">承認済<br><span>Approved</span></li>
                            <li id="relres">公開予約<br><span>Release reservation</span></li>
                            <li id="release">公開中<br><span>Release</span></li>
                        </ul>
                    </div>

                    {!! Form::open(['url' => '/overwrite_illness', 'method' => 'post', 'files' => true]) !!}
                    <input type="hidden" name="illID" id="illID">
                    <input type="hidden" name="iD" id="iD">
                    <input type="hidden" name="track_stat" id="track_stat">
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
                                    <div  class="mod" id="input_ill"></div>
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

                            <!-- Magazine -->
                            <div class="form-group">
                                <label class="control-label cols-15">掲載誌<br><span>Magazine</span></label>
                                <div class="cols-4">          
                                    <input type="text" class="form-control" placeholder="例）GL1907" id="ill_mag" name="magazine">
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
                                    <div id="input_doc"></div>
                                </div>
                                <div class="cols-3 rad-buttons">
                                    <div class="mod" id="input_rad"></div>
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
                                <!-- <div class="cols-7">         
                                    <div class="mod" id="input_sum"></div>
                                </div> -->
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

                            <!-- Add new fiends in this wrapper -->
                            <div class="wrapper"></div>
                            
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
                            <div id="addanother">
                                
                                <div class="input_content"></div>
                                
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
                                    <div class="mod" id="input_ra_txt"></div>
                                    
                                </div>
                            </div>

                            <!-- Check Result -->
                            <div class="form-group">
                                <label class="control-label cols-15">チェック結果<br><span>Check result</span></label>
                                <div class="cols-6">
                                    <div class="mod" id="input_cr"></div>
                                </div>
                                
                            </div>

                            <!-- Subheading 2 -->
                            <div class="form-group check">
                                <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                                <div class="cols-5">   
                                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                                        <input type="checkbox" id="b1" name="subheading-chck2" value="1" />
                                        <label for="b1" style="color:red;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
                                    </div>    
                                </div>
                            
                            </div>

                            <!-- Text of the subheading 2 -->
                            <div class="form-group">
                                <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                                <div class="cols-8">  
                                    <div class="mod" id="input_ra_txt2"></div>
                                    
                                </div>
                            </div>

                            <!-- Check Result 2 -->
                            <div class="form-group">
                                <label class="control-label cols-15">チェック結果<br><span>Check result</span></label>
                                <div class="cols-6">
                                    <div class="mod" id="input_cr2"></div>
                                </div>
                                
                            </div>

                            <hr>
                            <!-- Search Keywords -->
                            <div class="form-group">
                                <label class="control-label cols-15">検索キーワード<br><span>Search Key word</span></label>
                                <div class="cols-7">
                                    <div class="mod" id="input_kwords"></div>
                                </div>
                            </div>

                            <div class="form-group check">
                                <label class="control-label cols-15">タイトルタグ<br><span>Title Tag for SEO</span></label>
                                <div class="cols-45">   
                                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                                        <input class="styled-checkbox" id="tts" type="checkbox" name="seo" value="1"><label for="tts" style="color: #F00;font-weight:500;" id="input_seo_title"></label>
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
                                    <div class="mod" id="input_h1"></div>
                                </div>
                            </div>
                            
                            <!-- h2 -->
                            <div class="form-group">
                                <label class="control-label cols-15">h2</label>
                                <div class="cols-7">
                                    <div class="mod" id="input_h2"></div>
                                    
                                </div>
                            </div>

                            <!-- Tag Keyword -->
                            <div class="form-group check">
                                <label class="control-label cols-15">タグ（キーワード<br><span>Tag(key word)</label>
                                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                                    <div class="mod" id="input_kw"></div>
                                    
                                </div>
                            </div>

                            <!-- Tag(illness name) -->
                            <div class="form-group check">
                                <label class="control-label cols-15">タグ（病名）<br><span>Tag(illness name)</span></label>
                                <div class="col-sm-4" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                                    <input type="checkbox" id="tag9" name="tag_b"> 
                                    <label for="tag9" class="tag9_name"></label>
                                </div>
                                <div class="col-sm-4">
                                    ※上記のキーワードに含まれていればチェック不要
                                </div>
                            </div>
                            
                            <!-- Tag(department) -->
                            <div class="form-group">
                                <label class="control-label cols-15">タグ<br>(診療科・所属科)<br><span>Tag(department)</span></label>
                                <div class="cols-7"> 
                                    <div class="mod" id="input_dpt"></div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label cols-15">タグ（症状）<br><span>Tag(Symptoms)</span></label>
                                <div class="cols-7"> 
                                    <div class="mod" id="input_sy"></div>
                                </div>
                                <div class="sidediv cols-3">
                                    <div class="sidebots">
                                        <a class="prevbutton btn-prime preview" type="button" href="#previewAddIllness">Preview</a>
                                        <button type="button" class="btn-prime relservhalf1 release1" id="myBtn">Reserve</button>
                                        <button type="button" class="btn-prime relservehalf2 release2" id="myBtn">Release</button>
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
                            </div>

                            <div class="form-group">
                                <label class="control-label cols-15"></span></label>
                                <div class="cols-7"> 
                                    
                                    <div class="mod" id="input_tst"></div>
                                    
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label class="control-label cols-15">タグ（フリー入力)<br><span>Tag(free)</span></label>
                                <div class="cols-7"> 
                                    <div class="mod" id="input_free"></div>
                                    
                                </div>
                            </div>

                        </div>
                        <!-- Form Pads -->
                    </div>
                    <!-- Form Ends -->

                    <input type="submit" name="save" value="" class="save-btn">

                    {!! Form::close() !!}
                </div>
                <!-- Modal COntent Ends -->
            </div>
        </div>
    </div>
</div>