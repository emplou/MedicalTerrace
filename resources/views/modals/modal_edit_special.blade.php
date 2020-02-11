<!-- Modal -->
<div id="editspecial" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog modal-lg">
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
<h4 class="modal-title"><b>Edit Special</b></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
    <div class="modal-body">
    {!! Form::open(['url' => '/overwrite_special', 'method' => 'post', 'files' => true]) !!}
    <input type="hidden" name="spID" id="spID">
        <div class="form-horizontal">
            <div class="form-pads">
                <div class="form-group">
                    <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
                    <div class="cols-4">
                        <input type="text" class="form-control" id="url" name="url">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">掲載誌<br><span>Magazine</span></label>
                    <div class="cols-4">          
                        <input type="text" class="form-control" id="magazine" name="magazine">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">病気カテゴリー<br><span>Illness Category</span></label>
                    <div class="cols-5">          
                        
                        <div id="input_ill"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">特集カテゴリー<br><span>Special Category</span></label>
                    <div class="cols-5">          
                        
                        <div id="input_cat"></div>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label cols-15">特集ショルダー<br><span>Special Title Shoulder</span></label>
                    <div class="cols-5">          
                        <input type="text" class="form-control sts" id="sts" name="sts" maxlength="20">
                    </div>
                    <div class="col-sm-2">          
                        <span id="rchars">0</span>/20
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">特集タイトル<br><span>Special Title</span></label>
                    <div class="cols-5">          
                        <input type="text" class="form-control st" id="st" name="st" maxlength="14">
                    </div>
                    <div class="col-sm-2">          
                        <span id="rchars2">0</span>/14
                    </div>
                </div>

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

                <div class="form-group full">
                    <label class="control-label cols-15">医師コメント<br><span>Doctor Comment</span></label>
                    <div class="cols-5">          
                        <textarea class="form-control cmt" name="cmt" id="cmt" rows="5" maxlength="200"></textarea>
                    </div>
                    <div class="cols-2">          
                        <span id="rchars3">0</span>/200
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">メイン画像<br><span>Image</span></label>
                    <div class="cols-5">          
                        <!-- <input type="file" class="form-control" name="img"> -->
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl" name="img" id="img">
                        <label class="custom-file-label" for="customFileLang">ドラッグ&ドロップ、または参照で画像を追加してください</label>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
                    <div class="cols-5">          
                        <input type="text" class="form-control" id="img_cap" placeholder="先生からいただいたものなどには必ずつけてください" name="img_cap">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">画像alt<br><span>Image Alt</span></label>
                    <div class="cols-5">          
                        <input type="text" class="form-control" id="img_alt" placeholder="適切なキーワードを用い、適切な長さでわかりやすく簡潔な表現を" name="img_alt">
                    </div>
                </div>

                <!-- Use CKcreditor -->
                <div class="form-group editor">
                    <label class="control-label cols-15">リード<br><span>Text of Subheading</span></label>
                        <div class="cols-7">   
                            <!-- add new textarea here -->
                            <div class="wrapper2"></div>
                            
                            <div id="input_lead"></div>
                            
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
                            <select name="sub_head1a[]" class="form-control">
                                <option value="">選択してください</option>
                                <option value="基礎知識">基礎知識</option>
                                <option value="近年の動向">近年の動向</option>
                                <option value="注意した方がよい人">注意した方がよい人</option>
                                <option value="出やすい症状">出やすい症状</option>
                            </select>
                        </div>
                        <label class="control-label cols-15"></label>
                        <div class="cols-5">          
                            <input type="text" class="form-control" id="sub_head1b" placeholder="選択項目にない場合に入力" name="sub_head1b[]">
                        </div>
                    </div>

                    <!-- Use CKcreditor -->
                    <div class="form-group editor">
                        <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                        <div class="cols-7"> 
                             
                            <textarea class="form-control" name="txt_ckeditor[]" id="txt_ckeditor">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                            </textarea>
                        </div>
                        <div class="cols-1 relative"><button type="button" class="btn btn-success add3"><span class="lnr lnr-plus-circle"></span></button></div> 
                        
                    </div>
                </div>

                
                <div class="form-group">
                    <div class="cols-15"></div>
                    <div class="cols-6"><button type="button" class="btn-prime image"></button><button type="button" class="btn-prime graph"></button></div>
                </div>

                <hr>

                <!-- <span>Insert image</span> with add field starts -->
                <div class="form-group">
                    <label class="control-label cols-15">考えられる病気<br><span>Illness</span></label>
                    <div class="cols-2"><button type="button" class="btn-prime image"></button></div>
                    <div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>
                    <div class="cols-1"></div>
                </div>

                <div class="form-group">
                    <div class="control-label cols-15"></div>
                    <div class="cols-2"><button type="button" class="btn-prime image"></button></div>
                    <div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>
                    <div class="cols-1"></div>
                </div>
                <!-- Add fields here -->
                <div class="field_wrap1"></div>
            
                <div class="form-group">
                    <div class="control-label cols-15"></div>
                    <div class="cols-2"><button type="button" class="btn-prime image"></button></div>
                    <div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>
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
                            <select name="sub_head2a[]" class="form-control">
                                <option value="">選択してください</option>
                                <option value="基礎知識">基礎知識</option>
                                <option value="近年の動向">近年の動向</option>
                                <option value="注意した方がよい人">注意した方がよい人</option>
                                <option value="出やすい症状">出やすい症状</option>
                            </select>
                        </div>
                        <div class="cols-5">          
                            <input type="text" class="form-control" placeholder="選択項目にない場合に入力" name="sub_head2b[]">
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="control-label cols-15">画像alt:</label>
                    </div> -->

                    <!-- Use CKcreditor -->
                    <div class="form-group editor">
                        <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
                        <div class="cols-7">          
                            <textarea class="form-control" name="txt2_ckeditor[]" id="txt2_ckeditor">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

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
                        <div id="input_seo"></div>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label cols-15">タイトルタグ<br><span>Title Tag for SEO</span></label>
                    <div class="cols-7">   
                        <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                            <div id="input_seo_title"></div>
                        </div>       
                        
                    </div>
                    <div class="cols-1">          
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="cols-15"></div>
                    <div class="cols-5">   
                        <textarea class="form-control seo" name="seo_txt" maxlength="35" id="seo_txt"></textarea>
                    </div>
                    <div class="cols-1">   
                        <br>
                        <span id="rchars4">0</span>/35
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label cols-15">ディスクリプション<br><span>Meta description for SEO</span></label>
                    <div class="cols-5">   
                        <textarea class="form-control mt1" name="meta_txt1" id="meta_txt1" maxlength="50">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る
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
                        <textarea class="form-control mt2" name="meta_txt2" id="meta_txt2" maxlength="70">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。</textarea><br>
                    </div>
                    <div class="cols-1">   
                        PC用補足文章 <br>       
                        <span id="rchars6">70</span>/70
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
                        <input type="hidden" name="h1" id="h1">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label cols-15">h2</label>
                    <div class="cols-7">
                        <!-- add h2 fields -->
                        <div class="field_wrap5"></div>
                        <div id="input_h2"></div>
                        
                        <div class="cols-1 relative"><button type="button" class="btn btn-success add5"><span class="lnr lnr-plus-circle"></span></button></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">タグ(キーワード) <br><span> Tag(key word)</span></label>
                    <div class="cols-7" style="border: 1px solid #CCC; border-radius: 5px; padding: 5px; color: #F00;">   
                        <div id="input_kw"></div>
                    </div>
                </div>

                <div class="form-group">
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
                    <label class="control-label cols-15">タグ<br>(診療科・所属科）<span>Tag(department)</span></label>
                    <div class="cols-7">   
                        
                        <div class="field_wrap6"></div>
                        <div id="input_dpt"></div>
                        <div class="cols-1 relative">
                            <button type="button" class="btn btn-success add6"><span class="lnr lnr-plus-circle"></span></button>
                        </div>
            
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">タグ(症状) <br> <span>Tag(Symptoms)</span></label>
                    <div class="cols-7">   

                        <div class="field_wrap7"></div>
                        <div id="input_sy"></div>
                        <div class="cols-1 relative">
                            <button type="button" class="btn btn-success add7"><span class="lnr lnr-plus-circle"></span></button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
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

                        <div id="input_tst"></div>

                        <div class="cols-1 relative"><button type="button" class="btn btn-success add8"><span class="lnr lnr-plus-circle"></span></button></div>
                
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label cols-15">タグ(フリー入力)<br><span>Tag(free)</span></label>
                    <div class="cols-7"> 

                        <div class="field_wrap9"></div>

                        <div id="input_free"></div>

                        <div class="cols-1 relative"><button type="button" class="btn btn-success add9"><span class="lnr lnr-plus-circle"></span></button></div>
                        
                    </div>
                </div>
            </div>
            
            <input type="submit" value="保存 | UPDATE" class="btn btn-danger">
        </div>
          
        </div>
    <!-- Modal -->
    {!! Form::close() !!}
</div>
  </div>
</div>
