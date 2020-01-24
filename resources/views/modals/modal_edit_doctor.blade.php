<!-- Modal -->
<div class="modal-header" style="color: black; background-color: #7CD5FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Edit Doctor</b></h4>
</div>
      <div class="modal-body">
        
      <div class="row">
            <div class="col-2">
            URL自動生成名<br>URL generation
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="url_generation" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            職位<br>Status
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="status" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            専門医・認定医<br>（取得資格）<br>Certificate
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="certificate[]" style="width:300px">
                <input type="text" class="form- " name="certificate[]" style="width:300px"><br>
                <input type="text" class="form- " name="certificate[]" style="width:300px">
                <input type="text" class="form- " name="certificate[]" style="width:300px"><br>
                <input type="text" class="form- " name="certificate[]" style="width:300px">
                <input type="text" class="form- " name="certificate[]" style="width:300px"><br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            氏名<br>Name
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            ローマ字（名・氏）<br>Alphabet Name 
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="alpha_name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            プロフィール画像<br>Profile image 
            </div>
            <div class="col-10">
                <div class="input-group">
                    <input type="text" class="form-control" name="profile_image_field">
                    <span class="input-group-btn">
                        <!-- <button class="btn btn-search" type="button"> 参照... </button> -->
                        <input type="file" value="参照... " class="btn btn-search" name="profile_image">
                    </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            画像キャプション<br>Image Caption 
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="img_caption" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            画像alt<br>Image alt
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="img_alt" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            業種<br>Industry
            </div>
            <div class="col-10">
                <select class="form-control" name="industry" style="width:500px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            所属学会<br>Conference
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="conference[]" style="width:300px">
                <input type="text" class="form- " name="conference[]" style="width:300px"><br>
                <input type="text" class="form- " name="conference[]" style="width:300px">
                <input type="text" class="form- " name="conference[]" style="width:300px"><br>
                <input type="text" class="form- " name="conference[]" style="width:300px">
                <input type="text" class="form- " name="conference[]" style="width:300px"><br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            生年月日<br>Birthday
            </div>
            <div class="col-10">
                <select id="b_year" name="b_year" class="form- " style="width:100px"></select>
                <select id="" name="b_month" class="form- " style="width:100px">
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select id="length" name="b_day" class="form- " style="width:100px"></select>
            </div>
        </div>
        


