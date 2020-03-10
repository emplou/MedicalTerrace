<!-- modal_add_special -->
<div id="previewSpecial" class="modalDialog">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div>	

        <a href="#close" title="Close" class="close">X</a>
        <div class="modal-panel previewSpecial">
        {!! Form::open(['url' => '/approve_special', 'method' => 'post', 'files' => true]) !!}
            <ul class="breadcrumb">
                <li><a href="#"><img src="images/icon-home-green.png"></a></li>
                <li class="sp_cat"><a href="#"><!-- 感染症・寄生虫 --></a></li>
                <li class="sp_name"><!-- 手足口病 --></li>
            </ul>
            <div class="panel-head">Special</div>
            <div class="div-bg">
                <div class="heading1 sp_sh"><!-- いわゆる夏風邪は7月がピーク！<br> 子どもの夏の感染症<br> --></div>
                
            </div>
            
            <div class="panel-pads">
                <p>監修･取材協力:日本小児科学会認定小児科 専門医･日本アレルギー学会認定専門医 医学博士 浅野 勉 <a href="">医師プロフィールへ</a></p>
                    <div class="date"><span class="lnr lnr-clock"></span> 2019.04.17　Medical T. 編集部 A.Ito</div>

                    <div class="tags">
                        <!-- <span>子ども</span>
                        <span>夏</span>
                        <span>感染症</span>
                        <span>夏風邪</span>
                        <span>手足口病</span>
                        <span>ヘルパンギーナ</span>
                        <span>咽頭結膜熱</span>
                        <span>プール熱</span>
                        <span>水いぼ</span> -->
                    </div>

                    <div class="img-sp"><img src="images/img-special.jpg" alt="alt"></div>
                    <div class="img-caption"><!-- 5歳以下の小さな子どもがかかりやすい夏風邪。6月上旬に、西日本で流行の兆しを見せているとの報告もありました。まずは保護者が予防を心がけて、気になる症状が現れたら病院で診断を仰ぎ、対症療法で症状を和らげましょう。--></div>
                    <!-- <div class="tooltips">この記事をまとめると</div> -->

                    
                    <fieldset>
                        <legend>[子どもの夏の感染症]CONTENTS</legend>
                        <ol>
                            <li><a href="">子どもの夏の感染症-基礎知識</a></li>
                            <li><a href="">子どもの夏の感染症-近年の動向</a></li>
                            <li><a href="">子どもの夏の感染症-注意した方がよい人</a></li>
                            <li><a href="">子どもの夏の感染症-出やすい症状</a></li>
                            <li><a href="">子どもの夏の感染症-考えられる病気
                                <ol>
                                    <li><a href="">手･足･口に赤い発疹やみずぶくれが出ます 手足口病</a></li>
                                    <li><a href="">突然の高熱と喉の痛みに注意 ヘルパンギーナ</a></li>
                                    <li><a href="">目の充血が特徴。喉の痛みや発熱も 咽頭結膜熱</a></li>
                                    <li><a href="">肌を露出することが多い夏は接触に注意 水いぼ</a></li>
                                </ol>
                            </li>
                            <li><a href="">子どもの夏の感染症-治療方法</a></li>
                            <li><a href="">子どもの夏の感染症-今すぐはじめる予防と対策</a></li>
                        </ol>
                    </fieldset>

                    <div class="input_content_ck"></div>

                    <!-- <h3>子どもの夏の感染症-基礎知識</h3>
                    <p>夏に日常的に多くみられる感染症として、手足口病、ヘルパンギーナ、咽頭結膜熱があげられ、5月頃から発症が始まり、7月に流行のピークを迎えます。かかる方の90%以上が5歳以下の乳幼児です。冬の風邪と違い、鼻水、咳の症状はあまり出ません。<br><br>ウイルスに直接効く薬がないので、熱やのどの痛みなどの症状を和らげる対症療法をして病気が治るのを待ちます。食欲がおちている場合はこまめに水分補給をしてください。<br><br>病院では、解熱剤やのどの痛みをとる薬などを必要に応じて処方します。ぐったりしたり、脱水がみられる場合は点滴が必要になる場合もあります。<br>また、予防接種がないので、これらの感染症を予防するためには、手洗いやうがいなどの一般的な予防をするほかありません。回復してもウイルスは2〜4週ほど便中に排泄されることもあるので、適正な処理を行いましょう。<br>夏は水いぼなどの皮膚感染症も流行しやすくなります。</p>

                    <h3>子どもの夏の感染症-近年の動向</h3>
                    <p>国立感染症研究所の患者報告によると、2019年6月は、手足口病の定点医療機関当たりの患者報告数が過去10年の同期と比べて最多となりました。全国をみると、西日本に多くみられました。</p>

                    <h3>子どもの夏の感染症-注意した方がよい人</h3>
                    <p>
                        <input type="checkbox" value="" id="a"><label for="a">5歳以下の乳幼児</label><br>
                        <input type="checkbox" value="" id="b"><label for="b">乳幼児施設などで集団生活をしている子ども</label><br>
                    </p>

                    <h3>子どもの夏の感染症-出やすい症状</h3>
                    <p>感染するウイルスによって異なりますが、手足や口に赤い発疹や水ぶくれが出ます。喉の痛み、目の充血、高熱が出ることもあります。冬の風邪とは異なり、鼻水、咳の症状はあまり出ません。</p> -->

                    <h3>子どもの夏の感染症-考えられる病気</h3>
                    <div class="stripe-bg">
                        手･足･口に赤い発疹やみずぶくれが出ます<br>
                        てあしくちびょう<br>
                        手足口病
                    </div>
                    <p>主に夏に流行する感染症で、３〜６日の潜伏期の後、手足などに赤い発疹や水ぶくれ、口内炎ができます。高熱が出ることは少なく、1週間ほどで自然に治ります。かかりやすい年齢は5歳以下。毎年、5月頃から患者数が増え、7月に流行のピークを迎えます。一般的には夏風邪と呼ばれることもあります。全身状態が改善すれば、登園・登校が可能になります。</p>
                    <a class="stripe-btn" href="">症状･原因･治療と予防法など詳しく読む</a>

                    <div class="stripe-bg">
                        突然の高熱と喉の痛みに注意<br>
                        てあしくちびょう
                    </div>
                    <p>5歳以下の乳幼児にかかりやすく、主に夏に流行する感染症で、一般的には夏風邪と呼ばれています。２〜４日の潜伏期の後、突然、39度前後の発熱がみられます。喉が痛くなり、つばを飲み込めなくなってよだれが出たり、機嫌が悪くなって哺乳しなくなったり、食欲が低下します。喉にできる水疱（口内炎）も特徴です。3日程度で熱は下がり、喉の症状も1週間ほどで治ります。</p>
                    <a class="stripe-btn" href="">症状･原因･治療と予防法など詳しく読む</a>

                    <div class="stripe-bg">
                        目の充血が特徴。喉の痛みや発熱も<br>
                        いんとうけつまくねつ<br>
                        咽頭結膜熱
                    </div>
                    <p>5歳以下の乳幼児にかかりやすく、主に夏に流行する感染症で、夏風邪の一つです。プールでの接触やタオルの共用によって感染することがあるため、プール熱とも呼ばれています。５〜７日の潜伏期の後、急激に喉の痛み、目の充血、発熱がみられます。高熱が４〜５日ほど続き、自然に１週間ほどで治ります。小規模ですが、冬期に流行することもあります。学校感染症と出席停止の第2種に分類されているため、主な症状が消えてから2日を経過するまでは出席停止になります。また、免疫がない成人にもかかることがあります。</p>
                    <a class="stripe-btn" href="">症状･原因･治療と予防法など詳しく読む</a>

                    <div class="stripe-bg">
                        肌を露出することが多い夏は接触に注意<br>
                        水いぼ
                    </div>
                    <p>小児に多くみられ、プールに入っただけではうつりませんが、水いぼができている人と直接、肌が触れ合ったり、タオルなどを共用したりすると感染しやすくなります。特に肌を露出することが多い夏は肌を掻きやすく、子どもたち同士がふれあう機会が多いため、感染しやすくなります。</p>
                    <a class="stripe-btn" href="">症状･原因･治療と予防法など詳しく読む</a>

                    <div class="img-caption">
                        <h3>子どもの夏の感染症-治療方法</h3>
                        <p>ウイルスに直接効く薬がないため、熱やのどの痛みなどの症状を和らげる対症療法をして病気が治るのを待ちます。病院では、解熱剤やのどの痛みをとる薬などを必要に応じて処方します。ぐったりしたり、脱水がみられる場合は点滴が必要となることもあります。家庭では、安静にするほか、喉が痛くて物が食べられない場合はやわらかく、味の薄い、冷たい食事にします。また、食欲がおちているときはこまめに水分補給をしてください。</p>
                    </div>


                    <div class="stripe-bg pink">
                        <span>子どもの夏の感染症</span><br>
                        <big>今すぐはじめる 予防と対策</big>
                    </div>

                    <div class="pink-list">
                        <span>1. 手洗いやうがいをする</span>
                        <p>予防接種がないため、手洗いやうがいなどの一般的な予防法を守るほかありません。</p>
                        <span>2. 回復しても排泄物の適正な処理をする</span>
                        <p>夏風邪のウイルスは回復後も２〜４週ほど便の中に排泄されることもあるので、保育園や幼稚園などの乳幼児施設では、排泄物の適性な処理が基本になります。</p>
                        <span>3. プールに入る時はタオルを共有しない</span>
                        <p>感染を防ぐために、仲間同士、家族同士のタオルの共用は避けましょう。</p>
                        <span>4. 清潔を保ち、スキンケアも</span>
                        <p>プール後に全身をシャワーで洗い流して清潔を保ちます。水いぼを予防するために、普段から保湿、スキンケアをしておきましょう。</p>
                    </div>
                </div>  
            </div>
            <div class="tags special">
                <div>
                    <span>子ども</span>
                    <span>夏</span>
                    <span>感染症</span>
                    <span>夏風邪</span>
                    <span>手足口病</span>
                    <span>ヘルパンギーナ</span>
                    <span>咽頭結膜熱</span>
                    <span>プール熱</span>
                    <span>水いぼ</span>
                </div>
            </div>
           <input type="hidden" id="id_sp" name="id_sp" />
           
            <!-- Buttons -->
            @if (Request::is('special_list'))  
                <div class="modal-buts"><br>
                    <input type="submit" class="btn btn-primary approval" id="show_img" value="Approve">
                    <!-- <input type="button" class="btn-prime backedit" id="show_img"> -->
                </div>
            @endif
        </div>
        {!! Form::close() !!}
    </div>
</div>