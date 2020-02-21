<!-- Modal -->
<div id="copyAddillness" class="modal fade" role="dialog" data-keyboard="true">
    <div class="modal-dialog edit">
        <meta name="csrf-token" content="{{ csrf_token() }}">
				
        <!-- Modal content Starts-->
        <div class="modal-content">
            
            <div class="modal-header" style="color: black; background-color: #7CD5FF">
                <h4 class="modal-title"><b>Copy Add Illness</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div class="header-wrapper">
                <div class="left">
                    <h2>子どもの夏の感染症<span>ID番号:S00000</span></h2>
                    
                </div>
                <div class="right">
                    <div>作成日<span>Date</span></div>
                    <div class="select" id="input_arch_two">
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
                        <li id="appreq_two">承認依頼<br><span>Approval Request</span></li>
                        <li id="approve_two">承認済<br><span>Approved</span></li>
                        <li id="relres_two">公開予約<br><span>Release reservation</span></li>
                        <li id="release_two">公開中<br><span>Release</span></li>
                    </ul>
                </div>
                {!! Form::open(['url' => '/save_illness', 'method' => 'post', 'files' => true]) !!}

                <input type="hidden" name="twoiD" id="ill_iD_two">
                <input type="hidden" name="iD" id="iD_two">
                <input type="hidden" name="track_stat" id="track_stat_two">
                <!-- Form Starts -->
                <div class="form-horizontal">

                    <div class="form-pads">

                        <!-- URL Generator -->
                        <div class="form-group">
                            <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
                            <div class="cols-4">
                                <input type="text" class="form-control" id="twourl" name="url">
                            </div>
                        </div>
                        
                        <!-- Illness Category -->
                        <div class="form-group">
                            <label class="control-label cols-15">病気カテゴリー<br><span>Illness Category</span></label>
                            <div class="cols-4">          
                                <div id="input_ill_two"></div>
                            </div>
                        </div>
                        <!-- Illness Shoulder -->
                        <div class="form-group">
                            <label class="control-label cols-15">特集ショルダー<br><span>Illness Shoulder</span></label>
                            <div class="cols-5">          
                                <input type="text" class="form-control ill_shldr" id="ill_shldr_two" name="ill_shldr" maxlength="20">
                            </div>
                            <div class="cols-2">          
                                <span id="rchars">20</span>/20
                            </div>
                        </div>
                        <!-- Illness -->
                        <div class="form-group">
                            <label class="control-label cols-15">特集タイトル<br><span>Illness</span></label>
                            <div class="cols-5">          
                                <input type="text" class="form-control ill" id="ill_two" name="ill" maxlength="14">
                            </div>
                            <div class="cols-2">          
                                <span id="rchars2">0</span>/14
                            </div>
                        </div>

                         <!-- Illness Phonetic -->
                        <div class="form-group">
                            <label class="control-label cols-15">病名ふりがな<br><span>Illness Phonetic</span></label>
                            <div class="cols-5">          
                                <input type="text" class="form-control" id="ill_ph_two"  name="ill_ph" maxlength="14">
                            </div>
                        </div>
                        <!-- Doctor -->
                        <div class="form-group">
                            <label class="control-label cols-15">監修・協力医師<br><span>Doctor</span></label>
                            <div class="cols-5">          
                                <div id="input_doc_two"></div>
                            </div>
                            <div class="cols-3 rad-buttons">
                                <div id="input_rad_two"></div>
                            </div>	
                        </div>
                        <!-- Doctor Comment -->
                        <div class="form-group full">
                            <label class="control-label cols-15">医師コメント<br><span>Doctor Comment</span></label>
                            <div class="cols-5">          
                                <textarea class="form-control cmt" id="twocmt" name="doc_cmt" rows="5" maxlength="200">この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
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
                                <div id="input_sum_two"></div>
                            </div>
                            <div class="cols-2">          
                                
                            </div>
                        </div>

                        <!-- Main Image -->
                        <div class="form-group">
                            <label class="control-label cols-15">メイン画像<br><span>Main image </span></label>
                            <div class="cols-45">          
                                <div class="custom-file-upload">
                                    <input type="file" id="twoimg" name="img" />
                                </div>
                            </div>
                        </div>
                        <!-- Image Caption -->
                        <div class="form-group">
                            <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
                            <div class="cols-4">
                                <input type="text" class="form-control" id="twoimg_cap" name="img_cap">
                            </div>
                        </div>
                        <!-- Image Alt -->
                        <div class="form-group">
                            <label class="control-label cols-15">画像alt<br><span>Image alt</span></label>
                            <div class="cols-4">
                                <input type="text" class="form-control" id="twoimg_alt" name="img_alt">
                            </div>
                        </div>
                        <br>
                        <!-- Subheading -->
                        <div id="addanother">
                            
                            <div class="input_content_two"></div>
                            
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
                                    <input type="checkbox" id="a1_two" name="subheading-chck" value="1" />
                                    <label for="a1_two" style="color:red;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
                                </div>    
                            </div>
                        
                        </div>

                        <!-- Text of the subheading -->
                        <div class="form-group">
                            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                            <div class="cols-8">  
                                <div id="input_ra_txt_two"></div>
                                
                            </div>
                        </div>

                        <!-- Check Result -->
                        <div class="form-group">
                            <label class="control-label cols-15">チェック結果<br><span>Check result</span></label>
                            <div class="cols-6">
                                <div id="input_cr_two"></div>
                            </div>
                            <div class="sidediv cols-3">
                                <div class="sidebots">
                                    <a class="prevbutton btn-prime preview_copy" type="button" href="#previewCopyIllness">Preview</a>
                                    <button type="button" class="btn-prime relservhalf1 release1" id="myBtn">Reserve</button>
                                    <button type="button" class="btn-prime relservehalf2 release2" id="myBtn">Release</button>
                                </div>
                            </div>
                        </div>

                        <!-- Subheading 2 -->
                        <div class="form-group check">
                            <label class="control-label cols-15">小見出し<br><span>Subheading</span></label>
                            <div class="cols-5">   
                                <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                                    <input type="checkbox" id="b1_two" name="subheading-chck2" value="1" />
                                    <label for="b1_two" style="color:red;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
                                </div>    
                            </div>
                        
                        </div>

                        <!-- Text of the subheading 2 -->
                        <div class="form-group">
                            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                            <div class="cols-8">  
                                <div id="input_ra_txt2_two"></div>
                                
                            </div>
                        </div>

                        <!-- Check Result 2 -->
                        <div class="form-group">
                            <label class="control-label cols-15">チェック結果<br><span>Check result</span></label>
                            <div class="cols-6">
                                <div id="input_cr2_two"></div>
                            </div>
                        </div>

                        <hr>
                        <!-- Search Keywords -->
                        <div class="form-group">
                            <label class="control-label cols-15">検索キーワード<br><span>Search Key word</span></label>
                            <div class="cols-7">
                                <div id="input_kwords_two"></div>
                            </div>
                        </div>

                        <div class="form-group check">
                            <label class="control-label cols-15">タイトルタグ<br><span>Title Tag for SEO</span></label>
                            <div class="cols-45">   
                                <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                                    <input class="styled-checkbox" id="tts_two" type="checkbox" name="seo" value="1"><label for="tts_two" style="color: #F00;font-weight:500;" id="input_seo_title_two"></label>
                                </div>     
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="cols-15"></div>
                            <div class="cols-45">   
                                <textarea class="form-control seo" id="seo_txt_two" name="seo_txt" maxlength="35"></textarea>
                            </div>
                            <div class="cols-1">         
                                <span id="rchars16">0</span>/35
                            </div>
                        </div>

                        <!-- Meta Description of SEO -->
                        <div class="form-group">
                            <label class="control-label cols-15">ディスクリプション<br><span>Meta description for SEO</span></label>
                            <div class="cols-45">   
                                <textarea class="form-control mt1" id="meta_txt1_two" name="meta_txt1" maxlength="50"></textarea>
                            </div>
                            <div class="cols-3">  
                                スマホ・PC用 重要文章<br>        
                                <span id="rchars17">35</span>/50
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="cols-15"></div>
                            <div class="cols-45">   
                                <textarea class="form-control mt2" id="meta_txt2_two" name="meta_txt2" maxlength="70"></textarea><br>
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
                                <div id="input_h1_two"></div>
                            </div>
                        </div>
                        
                        <!-- h2 -->
                        <div class="form-group">
                            <label class="control-label cols-15">h2</label>
                            <div class="cols-7">
                                <div id="input_h2_two"></div>
                                
                            </div>
                        </div>

                        <!-- Tag Keyword -->
                        <div class="form-group check">
                            <label class="control-label cols-15">タグ（キーワード<br><span>Tag(key word)</label>
                            <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                                <div id="input_kw_two"></div>
                                
                            </div>
                        </div>

                        <!-- Tag(illness name) -->
                        <div class="form-group check">
                            <label class="control-label cols-15">タグ（病名）<br><span>Tag(illness name)</span></label>
                            <div class="col-sm-4" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                                <input type="checkbox" id="tag9_two" name="tag_b[]"> 
                                <label for="tag9_two">考えられる病気より</label>
                            </div>
                            <div class="col-sm-4">
                                ※上記のキーワードに含まれていればチェック不要
                            </div>
                        </div>
                        
                        <!-- Tag(department) -->
                        <div class="form-group">
                            <label class="control-label cols-15">タグ<br>(診療科・所属科)<br><span>Tag(department)</span></label>
                            <div class="cols-7"> 
                                <div id="input_dpt_two"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label cols-15">タグ（症状）<br><span>Tag(Symptoms)</span></label>
                            <div class="cols-7"> 
                                <div id="input_sy_two"></div>
                            </div>
                        </div>

                        <div class="form-group check">
                            <label class="control-label cols-15">タグ（季節)<br><span>Tag(season)</span></label>
                            <div class="cols-6">   
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga1" name="tag_s[]" value="1"> 
                                    <label for="twotaga1">春</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga2" name="tag_s[]" value="1"> 
                                    <label for="twotaga2">夏</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga3" name="tag_s[]" value="1"> 
                                    <label for="twotaga3">秋</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga4" name="tag_s[]" value="1">
                                    <label for="twotaga4"> 冬</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga5" name="tag_s[]" value="1">
                                    <label for="twotaga5">4月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga6" name="tag_s[]" value="1">
                                    <label for="twotaga6">5月</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga7" name="tag_s[]" value="1">
                                    <label for="twotaga7">6月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga8" name="tag_s[]" value="1"> 
                                    <label for="twotaga8">7月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga9" name="tag_s[]" value="1"> 
                                    <label for="twotaga9">8月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga10" name="tag_s[]" value="1"> 
                                    <label for="twotaga10">9月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga11" name="tag_s[]" value="1"> 
                                    <label for="taga11">10月</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga12" name="tag_s[]" value="1"> 
                                    <label for="twotaga12">11月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga13" name="tag_s[]" value="1"> 
                                    <label for="twotaga13">12月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga14" name="tag_s[]" value="1"> 
                                    <label for="twotaga14">1月</label>
                                </div>  
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga15" name="tag_s[]" value="1"> 
                                    <label for="twotaga15">2月</label>
                                </div>
                                <div class="cols-12">
                                    <input type="checkbox" id="twotaga16" name="tag_s[]" value="1"> 
                                    <label for="twotaga16">3月</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label cols-15"></span></label>
                            <div class="cols-7"> 
                                
                                <div id="input_tst_two"></div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label cols-15">タグ（フリー入力)<br><span>Tag(free)</span></label>
                            <div class="cols-7"> 
                                <div id="input_free_two"></div>
                                
                            </div>
                        </div>

                    </div>
                    <!-- Form Pads -->
                <!-- </div> -->
                <!-- Form Ends -->

                <input type="submit" name="save" value="" class="save-btn">

                {!! Form::close() !!}
            </div>
        </div>
        <!-- Modal COntent Ends -->

    </div>
</div>
</div>