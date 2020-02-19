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
            {!! Form::open(['url' => '/save_special', 'method' => 'post', 'files' => true]) !!}
            <!-- <input type="hidden" name="spID" id="twospID" value=" "> -->

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
                            <span id="rchars_b">0</span>/20
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">特集タイトル<br><span>Special Title</span></label>
                        <div class="cols-5">          
                            <input type="text" class="form-control st" id="twost" name="st" maxlength="14">
                        </div>
                        <div class="col-sm-2">          
                            <span id="rchars2_b">0</span>/14
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
                            <span id="rchars3_b">0</span>/200
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">メイン画像<br><span>Image</span></label>
                        <div class="cols-5">          
                            <!-- <input type="file" class="form-control" name="img"> -->
                            <div class="custom-file-upload">
                            <!--<label for="file">File: </label>--> 
                                <input type="file" id="twoimg" name="img" />
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
                            <!-- <div id="addanother1"> </div>-->
                            <div class="cols-10">
                                <div id="input_lead_two"></div>
                            </div>
                        </div>
                        <div class="cols-1"><button type="button" class="btn btn-success add2"><span class="lnr lnr-plus-circle"></span></button></div> 
                    </div>
                    <hr>

                    <!-- Subheading -->
                    <div id="addanother2">
                        <div class="input_content_two"></div>
                    </div>

                    <!-- add new form here -->
                    <div class="field_wrap3"></div>

                    <div class="form-group">
                        <div class="cols-15"></div>
                        <div class="cols-55"><button type="button" class="btn-prime image"></button><button type="button" class="btn-prime graph"></button></div>
                    </div>

                    <hr>

                    <!-- <span>Insert image</span> with add field starts -->
                    <div class="form-group">
                        <label class="control-label cols-15">考えられる病気<br><span>Illness</span></label>
                        <div class="cols-6">
                            <div id="input_ill_img_two"></div>

                            <!-- Add fields here -->
                            <div class="field_wrap1"></div>
                        </div>
                        <div class="cols-1 relative"><button type="button" class="btn btn-success add1"><span class="lnr lnr-plus-circle"></span></button></div>
                    </div>
                    
                    <hr>

                    <!-- Subheading -->
                    <div id="addanother3">
                            
                        <div class="input_content2_two"></div>
                            
                    </div>
        
                    <!-- add new form here -->
                    <div class="field_wrap4"></div>

                    <div class="form-group">
                    <div class="cols-15"></div>
                        <div class="cols-6"><button type="button" class="btn-prime image"></button><button type="button" class="btn-prime graph"></button></div>
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
                                <input class="styled-checkbox" id="tts_two" type="checkbox" name="seo" value="1"><label for="tts_two" id="input_seo_title_two" style="color: #F00;font-weight:500;"></label>
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
                            <span id="rchars4_b">0</span>/35
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
                            <span id="rchars5_b">0</span>/50
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label cols-15"></label>
                        <div class="cols-5">   
                            <textarea class="form-control mt2" name="meta_txt2" id="twometa_txt2" maxlength="70">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。</textarea><br>
                        </div>
                        <div class="cols-1">   
                            PC用補足文章 <br>       
                            <span id="rchars6_b">70</span>/70
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label cols-15"></label>
                        <div class="cols-7"> 
                            <div style="border: 1px solid #CCC; padding: 5px; color: #ff335a;">
                                ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原 稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。 ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ
                            </div>
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
                        <div id="input_kw_two"></div>
                        </div>
                    </div>

                    <div class="form-group check">
                        <label class="control-label cols-15">タグ(病名) <br><span>Tag(illness name)</span></label>
                        <div class="cols-7" style="border: 1px solid #CCC; border-radius: 5px; padding: 5px; color: #F00;">   
                            <div class="cols-4">
                                <input type="checkbox" id="tag1b_two" name="tag_ill[]" value="1"> 
                                <label for="tag1b_two">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag2b_two" name="tag_ill[]" value="1"> 
                                <label for="tag2b_two">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag3b_two" name="tag_ill[]" value="1"> 
                                <label for="tag3b_two">考えられる病気より</label>
                            </div>
                            <div class="clear"></div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag4b_two" name="tag_ill[]" value="1"> 
                                <label for="tag4b_two">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag5b_two" name="tag_ill[]" value="1"> 
                                <label for="tag5b_two">考えられる病気より</label>
                            </div>
                            <div class="cols-4">
                                <input type="checkbox" id="tag6b_two" name="tag_ill[]" value="1"> 
                                <label for="tag6b_two">考えられる病気より</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label cols-15">タグ<br>(診療科・所属科）<span>Tag(department)</span></label>
                        <div class="cols-7">   
                            
                            <div class="field_wrap6"></div>

                            <div id="input_dpt_two"></div>
                            
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
                                <input type="checkbox" id="tag_s_two1" name="tag_s[]" value="1"> 
                                <label for="tag_s_two1">春</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two2" name="tag_s[]" value="1"> 
                                <label for="tag_s_two2">夏</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two3" name="tag_s[]" value="1"> 
                                <label for="tag_s_two3">秋</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two4" name="tag_s[]" value="1"> 
                                <label for="tag_s_two4">冬</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two5" name="tag_s[]" value="1"> 
                                <label for="tag_s_two5">4月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two6" name="tag_s[]" value="1"> 
                                <label for="tag_s_two6">5月</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two7" name="tag_s[]" value="1"> 
                                <label for="tag_s_two7">6月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two8" name="tag_s[]" value="1">
                                <label for="tag_s_two8">7月</label>
                            </div>
                            <div class="clear"></div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two9" name="tag_s[]" value="1">
                                <label for="tag_s_two9">8月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two10" name="tag_s[]" value="1">
                                <label for="tag_s_two10">9月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two11" name="tag_s[]" value="1">
                                <label for="tag_s_two11">10月</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two12" name="tag_s[]" value="1"> 
                                <label for="tag_s_two12">11月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two13" name="tag_s[]" value="1"> 
                                <label for="tag_s_two14">12月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two14" name="tag_s[]" value="1"> 
                                <label for="tag_s_two14">1月</label>
                            </div>  
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two15" name="tag_s[]" value="1"> 
                                <label for="tag_s_two15">2月</label>
                            </div>
                            <div class="cols-11">
                                <input type="checkbox" id="tag_s_two16" name="tag_s[]" value="1"> 
                                <label for="tag_s_two16">3月</label>
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
