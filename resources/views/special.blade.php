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
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="sts" placeholder="例）いわゆる夏風邪は7月がピーク！" name="sts">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">特集タイトル:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="st" placeholder="例）子どもの夏の感染症" name="st">
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
                <div class="col-sm-9">          
                    <textarea class="form-control" name="doc_cmnt">この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
                    </textarea>
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
                <div class="col-sm-9">          
                    <textarea class="form-control" name="lead1">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">小見出し:</label>
                <div class="col-sm-9">          
                    <select name="sub_head1a" class="form-control">
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
                    <input type="text" class="form-control" id="sub_head1b" placeholder="選択項目にない場合に入力" name="sub_head1b">
                </div>
            </div>

            <!-- Use CKcreditor -->
            <div class="form-group">
                <label class="control-label col-sm-2">本文:</label>
                <div class="col-sm-9">          
                    <textarea class="form-control" name="txt1">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-3"><button type="button" class="btn btn-primary">Insert Image</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">Insert Graph</button></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">考えられる病気:</label>
                <div class="col-sm-2"><button type="button" class="btn btn-primary">Insert Image</button></div>
                <div class="col-sm-7"><input type="text" class="form-control" id="pos_ill1" placeholder="選ばれた記事の病名が入る" name="pos_ill1"></div>
            </div>

            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary">Insert Image</button></div>
                <div class="col-sm-7"><input type="text" class="form-control" id="pos_ill1" placeholder="選ばれた記事の病名が入る" name="pos_ill2"></div>
            </div>

            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary">Insert Image</button></div>
                <div class="col-sm-7"><input type="text" class="form-control" id="pos_ill1" placeholder="選ばれた記事の病名が入る" name="pos_ill3"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">小見出し:</label>
                <div class="col-sm-9">          
                    <select name="sub_head2a" class="form-control">
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
                    <input type="text" class="form-control" id="sub_head2b" placeholder="選択項目にない場合に入力" name="sub_head1b">
                </div>
            </div>

            <!-- Use CKcreditor -->
            <div class="form-group">
                <label class="control-label col-sm-2">本文:</label>
                <div class="col-sm-9">          
                    <textarea class="form-control" name="txt2">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。

                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-3"><button type="button" class="btn btn-primary">Insert Image</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">Insert Graph</button></div>
            </div>
            <hr>

        </form>
</div>

</body>
</html>
