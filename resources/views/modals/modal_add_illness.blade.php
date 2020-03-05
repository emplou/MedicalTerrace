<!-- modal_add_illness -->
<div id="previewAddIllness" class="modalDialog">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div>	

        <a href="#close" title="Close" class="close">X</a>
        <div class="modal-panel">
        {!! Form::open(['url' => '/approve_illness', 'method' => 'post', 'files' => true]) !!}
            <ul class="breadcrumb">
                <li><a href="#"><img src="images/icon-home-green.png"></a></li>
                <li><a href="#" class="ill_cat"><!-- 感染症・寄生虫 --></a></li>
                <li class="ill_name">手足口病</a></li>
            </ul>
            <div class="panel-head ill_cat"><!-- 感染症・寄生虫 --></div>
            <div class="div-bg">
                <div class="heading1 ill_sh"><!-- 手・足・口に赤い発疹やみずぶくれが出ます --></div>
                <div class="heading1"><span>てあしくちびょう</span></div>
                <div class="heading1 ill_name"><!-- 手足口病 --></div>
            </div>
            <div class="panel-pads">
                    <div class="date">2019.06.21　Medical T. 編集部 A.Ito</div>

                    <div class="tags" id="tag_value">
                        
                    </div>

                    <div class="tooltips">この記事をまとめると</div>
                    <ul class="checks" id="summary">
                        
                    </ul>
                    <ol class="link">
                        <li><a href="">手足口病の基礎知識</a></li>
                        <li><a href="">手足口病の近年の動向</a></li>
                        <li><a href="">手足口病の症状</a></li>
                        <li><a href="">手足口病の原因</a></li>
                        <li><a href="">手足口病の治療方法</a></li>
                        <li><a href="">手足口病の合併症</a></li>
                        <li><a href="">手足口病の自宅療法（療養方法、再発防止など)</a></li>
                        <li><a href="">手足口病の予防・対策方法</a></li>
                        <li><a href="">手足口病のリスク度チェック</a></li>
                        <li><a href="">手足口病のセルフチェック</a></li>
                    </ol>

                    <div class="input_content"></div>
                    
                </div>  
                
                <div id="input_risk_one"></div>
                <!-- <div class="panel-pink">
                    <h3>手足口病のリスク度チェック</h3>
                
                    <div class="form-group check">
                        <ul>    
                            <li>
                                <input class="styled-checkbox" id="1a" type="checkbox" name="1a" >
                                <label for="1a" style="font-weight:500;">5歳以下の乳幼児</label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="2a" type="checkbox" name="2a" >
                                <label for="2a" style="font-weight:500;">乳幼児の保育施設などで、普段から集団生活をしている</label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="3a" type="checkbox" name="3a" >
                                <label for="3a" style="font-weight:500;">手洗いやうがいはあまりしない</label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="4a" type="checkbox" name="4a" >
                                <label for="4a" style="font-weight:500;">周囲で手足口病やヘルパンギーナにかかった子ども、人がいる</label>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div id="input_risk_two"></div>
                <!-- <div class="panel-pink">
                    <h3>手足口病のセルフチェック</h3>
                    <strong>予防・対策はしっかりできていますか？</strong>
                    <div class="form-group check">
                        <ul>    
                            <li>
                                <input class="styled-checkbox" id="1b" type="checkbox" name="1b" >
                                <label for="1b" style="font-weight:500;">手洗いうがいをしっかり行う</label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="2b" type="checkbox" name="2b" >
                                <label for="2b" style="font-weight:500;">子どもの排便、おむつ替えなどの処理を適正に行っている</label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="3b" type="checkbox" name="3b" >
                                <label for="3b" style="font-weight:500;">タオルは共用していない</label>
                            </li>
                        </ul>
                        <strong>下記のような症状はありますか？</strong>
                        <ul>
                            <li>
                                <input class="styled-checkbox" id="4b" type="checkbox" name="4b" >
                                <label for="4b" style="font-weight:500;">手のひらや足の裏に赤い湿疹、または水ぶくれができている</label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="5b" type="checkbox" name="5b" >
                                <label for="5b" style="font-weight:500;">口内炎がある</label>
                            </li>
                            <li>
                                <input class="styled-checkbox" id="6b" type="checkbox" name="6b" >
                                <label for="6b" style="font-weight:500;">全身がだるい</label>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div class="panel-blue">
                    <div class="id-tag">
                        監修・取材協力<br>
                        日本小児科学会認定小児科専門医・日本ア<br>
                        レルギー学会認定専門医<br>
                        医学博士 浅野 勉<br>
                        <a href="">詳しくはこちら</a>
                    </div>

                    
                    <p></p>
                </div>
            </div>
            <div class="tags">
                <div>
                    <span>子ども</span>
                    <span>夏</span>
                    <span>感染症</span>
                    <span>夏風邪</span>
                    <span>手足口病</span>
                </div>
            </div>
           <input type="hidden" id="id_ill" name="id_ill" />
           @if (Request::is('illness_list'))  
            <div class="modal-buts"><br>
                <input type="submit" class="btn btn-primary approval" id="show_img" value="Approve">
                <!-- <button type="button" class="btn-prime backedit" id="show_img"></button> -->
            </div>
            @endif
            

        {!! Form::close() !!}
        </div>
    </div>
</div>