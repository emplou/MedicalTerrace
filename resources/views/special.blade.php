<!DOCTYPE html>
<html lang="en">
<head>
    <title>Medical Terrace</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        textarea{
            min-height: 100px;
        }
        .clear{
            clear: both;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>子どもの夏の感染症</h2>
        <form class="form-horizontal" action="#">

            <div class="form-group">
                <label class="control-label col-sm-2">URL自動生成名:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="url" placeholder="例）special_kids" name="url">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">掲載誌:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="magazine" placeholder="例）GL1907" name="magazine">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">病気カテゴリー:</label>
                <div class="col-sm-9">          
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

            <div class="form-group">
                <label class="control-label col-sm-2">特集カテゴリー:</label>
                <div class="col-sm-9">          
                    <select name="sp_cat" class="form-control">
                        <option value="">選択してください</option>
                        <option value="がん">がん</option>
                        <option value="生活習慣病">生活習慣病</option>
                        <option value="子どもの病気">子どもの病気</option>
                        <option value="女性の病気">女性の病気</option>
                        <option value="老年性の病気">老年性の病気</option>
                        <option value="アレルギー">アレルギー</option>
                        <option value="食中毒（食あたり）">食中毒（食あたり）</option>
                        <option value="春特有の病気">春特有の病気</option>
                        <option value="夏特有の病気">夏特有の病気</option>
                        <option value="秋特有の病気">秋特有の病気</option>
                        <option value="冬特有の病気">冬特有の病気</option>
                        <option value="内臓の病気">内臓の病気</option>
                        <option value="脳・神経の病気">脳・神経の病気</option>
                        <option value="免疫システム">免疫システム</option>
                        <option value="運動機能の病気">運動機能の病気</option>
                        <option value="こころの病気">こころの病気</option>
                        <option value="部位別の病気">部位別の病気</option>
                        <option value="怪我・応急処置">怪我・応急処置</option>
                        <option value="救急・救命・緊急">救急・救命・緊急</option>
                        <option value="スポーツ障害">スポーツ障害</option>
                        <option value="リハビリテーション">リハビリテーション</option>
                        <option value="歯と健康">歯と健康</option>
                        <option value="妊娠と出産">妊娠と出産</option>
                        <option value="美容と健康">美容と健康</option>
                    </select>
                </div>
            </div>
                
            <div class="form-group">
                <label class="control-label col-sm-2">特集ショルダー:</label>
                <div class="col-sm-8">          
                    <input type="text" class="form-control sts" id="sts" placeholder="例）いわゆる夏風邪は7月がピーク！" name="sts" maxlength="20">
                </div>
                <div class="col-sm-1">          
                    <span id="rchars">0</span>/20
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">特集タイトル:</label>
                <div class="col-sm-8">          
                    <input type="text" class="form-control st" id="st" placeholder="例）子どもの夏の感染症" name="st" maxlength="14">
                </div>
                <div class="col-sm-1">          
                    <span id="rchars2">0</span>/14
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">監修・協力医師:</label>
                <div class="col-sm-5">          
                    <select name="doctor" class="form-control">
                        <option value="">選択してください</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="radio" name="sprvsn" value="監修"> 監修&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="cc" value="取材協力"> 取材協力&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="scc" value="監修・取材協力"> 監修・取材協力
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">医師コメント:</label>
                <div class="col-sm-8">          
                    <textarea class="form-control cmt" name="doc_cmnt" maxlength="200">この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
                    </textarea>
                </div>
                <div class="col-sm-1">          
                    <span id="rchars3">0</span>/200
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">メイン画像:</label>
                <div class="col-sm-9">          
                    <input type="file" class="form-control" name="img">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">画像キャプション:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="img_cap" placeholder="先生からいただいたものなどには必ずつけてください" name="img_cap">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">画像alt:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="img_alt" placeholder="適切なキーワードを用い、適切な長さでわかりやすく簡潔な表現を" name="img_alt">
                </div>
            </div>

            <!-- Use CKcreditor -->
            <div class="form-group">
                <label class="control-label col-sm-2">リード:</label>
                <div class="col-sm-10">   
                    <!-- add new textarea here -->
                    <div class="field_wrap2"></div>
                    <div class="col-sm-10">        
                        <textarea class="form-control" name="lead1">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                        </textarea>
                    </div>
                    <div class="col-sm-1"><button type="button" class="btn btn-success add2">+</button></div> 
                </div>
            </div>
            <hr>

            <!-- add new form here -->
            <div class="field_wrap3"></div>

            <div class="form-group">
                <label class="control-label col-sm-2">小見出し:</label>
                <div class="col-sm-9">          
                    <select name="sub_head1a[]" class="form-control">
                        <option value="">選択してください</option>
                        <option value="基礎知識">基礎知識</option>
                        <option value="近年の動向">近年の動向</option>
                        <option value="注意した方がよい人">注意した方がよい人</option>
                        <option value="出やすい症状">出やすい症状</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">画像alt:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="sub_head1b" placeholder="選択項目にない場合に入力" name="sub_head1b[]">
                </div>
            </div>

            <!-- Use CKcreditor -->
            <div class="form-group">
                <label class="control-label col-sm-2">本文:</label>
                <div class="col-sm-9"> 
                     
                    <textarea class="form-control" name="txt1[]">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                    </textarea>
                </div>
                <div class="col-sm-1"><button type="button" class="btn btn-success add3">+</button></div> 
                
            </div>
            <hr>

            <!-- Insert Image with add field starts -->
            
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-3"><button type="button" class="btn btn-primary">Insert Image</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">Insert Graph</button></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">考えられる病気:</label>
                <div class="col-sm-2"><button type="button" class="btn btn-primary">Insert Image</button></div>
                <div class="col-sm-6"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>
                <div class="col-sm-1"></div>
            </div>

            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary">Insert Image</button></div>
                <div class="col-sm-6"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>
                <div class="col-sm-1"></div>
            </div>
            <!-- Add fields here -->
            <div class="field_wrap1"></div>
        
            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary">Insert Image</button></div>
                <div class="col-sm-6"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>
                <div class="col-sm-1"><button type="button" class="btn btn-success add1">+</button></div>
            </div>
            
            <!-- Insert Image with add field ends -->
            <hr>

            <!-- add new form here -->
            <div class="field_wrap4"></div>

            <div class="form-group">
                <label class="control-label col-sm-2">小見出し:</label>
                <div class="col-sm-9">          
                    <select name="sub_head2a[]" class="form-control">
                        <option value="">選択してください</option>
                        <option value="基礎知識">基礎知識</option>
                        <option value="近年の動向">近年の動向</option>
                        <option value="注意した方がよい人">注意した方がよい人</option>
                        <option value="出やすい症状">出やすい症状</option>
                    </select>
                </div>
            </div>

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
                    <textarea class="form-control" name="txt2[]">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                    </textarea>
                </div>
                <div class="col-sm-1"><button type="button" class="btn btn-success add4">+</button></div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-3"><button type="button" class="btn btn-primary">Insert Image</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">Insert Graph</button></div>
            </div>
            <hr>

            <div class="form-group">
                <label class="control-label col-sm-2">検索キーワード</label>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword1" placeholder="例）夏の感染症" name="kword1"></div>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword2" placeholder="例）子どもの病気" name="kword2"></div>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword3" placeholder="例）手足口病" name="kword3"></div>
            </div>

            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword4" placeholder="例）ヘルパンギーナ" name="kword4"></div>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword5" placeholder="例）水いぼ" name="kword5"></div>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword6" placeholder="" name="kword6"></div>
            </div>

            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword7" placeholder="" name="kword7"></div>
                <div class="col-sm-3"><input type="text" class="form-control" id="kword8" placeholder="" name="kword8"></div>
                <div class="col-sm-3">※裏設定。検索させたい関連ワードを表記</div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タイトルタグ</label>
                <div class="col-sm-8">   
                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                        <input type="checkbox" name="seo"> <span style="color: #F00;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</span>
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
                    <span id="rchars4">0</span>/35
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2">ディスクリプション</label>
                <div class="col-sm-8">   
                    <textarea class="form-control mt1" name="meta_txt1" maxlength="50">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る
時分学校の。</textarea>
                </div>
                <div class="col-sm-1">          
                    <span id="rchars5">0</span>/50
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">ディスクリプション</label>
                <div class="col-sm-8">   
                    <textarea class="form-control mt2" name="meta_txt2" maxlength="70">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。</textarea><br>
                     <div style="border: 1px solid #CCC; padding: 5px; color: #F00;">
                         ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原 稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ, や本文の原稿, との重複NG。 ページ内の, 頻出単語30語程度, を自動表記。 コピーライティング, をサポート。タイトルタグ
                     </div>
                </div>
                <div class="col-sm-1">          
                    <span id="rchars6">0</span>/70
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">h1</label>
                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    子どもの夏の感染症 いわゆる夏風邪は7月がピーク！
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2">h2</label>
                <div class="col-sm-10">
                    <!-- add h2 fields -->
                    <div class="field_wrap5"></div>

                    <div class="col-sm-3"><input type="text" class="form-control" placeholder="必要に応じて記載" name="h2a[]"></div>
                    <div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2b[]"></div>
                    <div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2c[]"></div>
                    <div class="col-sm-1"><button type="button" class="btn btn-success add5">+</button></div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（キーワード）</label>
                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag1"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag2"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag3"> 検索キーワド入力より
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag4"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag5"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag6"> 検索キーワド入力より
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag7"> 検索キーワド入力より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag8"> 検索キーワド入力より
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（病名）</label>
                <div class="col-sm-9" style="border: 1px solid #CCC; padding: 5px; color: #F00;">   
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag1b"> 考えられる病気より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag2b"> 考えられる病気より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag3b"> 考えられる病気より
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag4b"> 考えられる病気より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag5b"> 考えられる病気より
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="tag6b"> 考えられる病気より
                    </div>
                    
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（診療科・所属科）</label>
                <div class="col-sm-9">   
                    <div class="col-sm-4">
                        <select name="tag_dep1" class="form-control">
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
                    <div class="col-sm-4">
                        <select name="tag_dep2" class="form-control">
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
                    <div class="col-sm-4">
                        <select name="tag_dep3" class="form-control">
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
                    <div class="clear"></div>
                    <div class="col-sm-4">
                        <select name="tag_dep4" class="form-control">
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
                    <div class="col-sm-4">
                        <select name="tag_dep5" class="form-control">
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
                    <div class="col-sm-4">
                        <select name="tag_dep6" class="form-control">
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
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（症状）</label>
                <div class="col-sm-9">   
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_sy1" placeholder="擬音や検索されやすい症状">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_sy2" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_sy3" placeholder="">
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_sy4" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_sy5" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_sy6" placeholder="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（季節）</label>
                <div class="col-sm-10">   
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s1"> 春
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s2"> 夏
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s3"> 秋
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s4"> 冬
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s5"> 4月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s6"> 5月
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s7"> 6月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s8"> 7月
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s9"> 8月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s10"> 9月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s11"> 10月
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s12"> 11月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s13"> 12月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s14"> 1月
                    </div>  
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s15"> 2月
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="tag_s16"> 3月
                    </div>

                    <div class="clear"></div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="tag_txt1" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="tag_txt2" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="tag_txt3" placeholder="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">タグ（フリー入力）</label>
                <div class="col-sm-9">   
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_f1" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_f2" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tag_f3" placeholder="">
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
                <label class="control-label col-sm-2">取材日</label>
                <div class="col-sm-3">   
                    <select class="form-control" name="c1">
                        <option value="">－－－－年</option>
                    </select>
                </div>
                <div class="col-sm-1">   
                    <select class="form-control" name="c2">
                        <option value="">－－月</option>
                    </select>
                </div>
                <div class="col-sm-1">   
                    <select class="form-control" name="c2">
                        <option value="">－－日</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">謝礼</label>
                <div class="col-sm-7">   
                    <input type="text" name="hono" class="form-control" placeholder="例）10,000円">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">メモ</label>
                <div class="col-sm-7">   
                    <textarea class="form-control" name="note"></textarea>
                </div>
            </div>

        </form>
</div>
<!-- Count character starts -->
<script type="text/javascript">
    var cnt = 0;
    $('input.sts').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars').text(textlen);
    });
    $('input.st').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars2').text(textlen);
    });
    $('textarea.cmt').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars3').text(textlen);
    });
    $('textarea.seo').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars4').text(textlen);
    });
    $('textarea.mt1').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars5').text(textlen);
    });
    $('textarea.mt2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars6').text(textlen);
    });
</script>
<!-- Count character ends -->
<!-- Add field starts -->
<script type="text/javascript">
    $(document).ready(function() {
        var wrapper         = $(".field_wrap1"); //Fields wrapper
        var add_button      = $(".add1"); //Add button ID
        var wrapper2         = $(".field_wrap2"); //Fields wrapper
        var add_button2      = $(".add2"); //Add button ID
        var wrapper3         = $(".field_wrap3"); //Fields wrapper
        var add_button3      = $(".add3"); //Add button ID
        var wrapper4         = $(".field_wrap4"); //Fields wrapper
        var add_button4      = $(".add4"); //Add button ID
        var wrapper5         = $(".field_wrap5"); //Fields wrapper
        var add_button5      = $(".add5"); //Add button ID
        
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper).append('<div class="form-group"><div class="control-label col-sm-2"></div><div class="col-sm-2"><button type="button" class="btn btn-primary">Insert Image</button></div><div class="col-sm-6"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div><div class="col-sm-1"></div></div>'); //add input box
            
        });

        $(add_button2).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper2).append('<div class="col-sm-10"><textarea class="form-control" name="lead1[]"></textarea></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
        });

        $(add_button3).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper3).append('<div class="form-group"><label class="control-label col-sm-2">小見出し:</label><div class="col-sm-9"><select name="sub_head1a[]" class="form-control"><option value="">選択してください</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="注意した方がよい人">注意した方がよい人</option><option value="出やすい症状">出やすい症状</option></select></div></div><div class="form-group"><label class="control-label col-sm-2">画像alt:</label><div class="col-sm-9"><input type="text" class="form-control" id="sub_head1b" placeholder="選択項目にない場合に入力" name="sub_head1b[]"></div></div><div class="form-group"><label class="control-label col-sm-2">本文:</label><div class="col-sm-9"><textarea class="form-control" name="txt1[]"></textarea></div><div class="col-sm-1"></div> </div>'); //add input box
            
        });

        $(add_button4).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper4).append('<div class="form-group"><label class="control-label col-sm-2">小見出し:</label><div class="col-sm-9"><select name="sub_head2a[]" class="form-control"><option value="">選択してください</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="注意した方がよい人">注意した方がよい人</option><option value="出やすい症状">出やすい症状</option></select></div></div><div class="form-group"><label class="control-label col-sm-2">画像alt:</label><div class="col-sm-9"><input type="text" class="form-control" placeholder="選択項目にない場合に入力" name="sub_head1b[]"></div></div><div class="form-group"><label class="control-label col-sm-2">本文:</label><div class="col-sm-9"><textarea class="form-control" name="txt2[]"></textarea></div><div class="col-sm-1"></div></div>'); //add input box
            
        });

        $(add_button5).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper5).append('<div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2a[]"></div><div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2b[]"></div><div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2c[]"></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
        });
    });
    
</script>
<!-- Add field ends -->

</body>
</html>
