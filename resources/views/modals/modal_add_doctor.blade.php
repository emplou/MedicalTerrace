<!-- modal_add_doctor -->
<div id="previewAddDoctor" class="modalDialog">
<div>	
        <a href="#close" title="Close" class="close">X</a>
        <div class="modal-panel">
        {!! Form::open(['url' => '/doc_approve_request', 'method' => 'post', 'files' => true]) !!}
            <input type="hidden" name="docIDappreq" id="docIDappreq" value="">
            <div class="panel-head">医師・医療従事者</div>
            <div class="panel-subhead">|岐阜|岐阜市|小児科|アレルギー科|新生児内科|</div>
            <div class="div-bg">
                <div class="heading1">日本小児科学会認定小児科専門医・日本アレルギー学会<br>認定専門医 医学博士
                <strong>浅野 勉</strong><span>-Tsutomu Asano-</span></div>
            </div>
            <div class="panel-pads">
                <div class="date">2019.06.21</div>
                <img src="images/avatar.jpg" alt="">
                
                
                <ul class="blk-bullet">
                    <li><img src="images/bullet-blk.jpg" alt="">所属学会<br>日本小児科学会・日本アレルギー学会・日本小児アレル ギー学会・日本新生児成育医学会
                    </li>
                    <li><img src="images/bullet-blk.jpg" alt="">経歴<br>1999年3月 岐阜大学医学部卒業岐阜大学医学部附属病院小児科県立岐阜病院(現岐阜県総合医療センター)新生児科表示出生地可 出身地可 否出身地Birthplace(NICU)<br>市立長浜病院小児科・NICU 部長 岐阜大学医学部附属病院新生児集中治療部 臨床講師 2015年9月「のりたけキッズベビークリニック」開院 現在に至る</li>
                        <li><img src="images/bullet-blk.jpg" alt="">コメント<br>医師プロフィールページに掲載されるコメントをお願 いします。この文章はダミーです。文字の大きさ、量、字 間、行間等を確認するために入れています。この文章は ダミーです。文字の大きさ、量、字間、行間等を確認する ために入れています。この文章はダミーです。文字の大 きさ、量、字間、行間等を確認するために入れています。</li>
                </u>
            @if (Request::is('doctor_list'))  
            <!-- Buttons -->
            <div class="modal-buts one">
                <button type="button" class="btn-prime approval" id="show_img"></button>
            </div>
            <div class="modal-buts two">
                <button type="button" class="btn-prime approved" id="show_img"></button>
            </div>
            <div class="modal-buts three">
                <button type="button" class="btn-prime release-reserve" id="show_img"></button>
            </div>
            <div class="modal-buts four">
                <button type="button" class="btn-prime released" id="show_img"></button>
            </div>
            @endif
        {!! Form::close() !!}
        </div>
    </div>
</div>
</div>