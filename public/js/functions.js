
$(document).ready(function() {
    $('#list').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  

  function setObject(name, score) {
    this.name = name;
  }


    $('.overwrite').each(function(e){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        // e.preventDefault();
        $(this).on('click', function(){
            var id = $(this).attr('doc-id');
            // alert(id);

            $.ajax({
                url: '/modal_edit_doctor/'+id,
                type: 'get',
                dataType: 'json',
                // data : { id : id },
                success: function(response){
                    console.log(response['data']);
                if(response == "success")

                  console.log(response['data']); 
                //   console.log(response['dpt']); 

                  $("#editdoctor").modal('show');
                  $("#url_generation").val(response['data'][0].url_generation);
                  $("#status").val(response['data'][0].status);

                //  $.each(objJSON, function (i, v) {
                //     $('#certificate0'+ i).val(v.med_sbj_list); 
                //     console.log('yes' + v.med_sbj_list);
                // });

                var objJSON = JSON.parse(response['data'][0].certificate);
                var inputs = "";
                $.each(objJSON, function (i, v) {
                    inputs += '<input type="text" class="form- " name="certificate[]" id="certificate" style="width:300px" value="'+v.med_sbj_list+'">';
                });
                $("#input_container").html(inputs);
                    
                    $("#docID").val(response['data'][0].id);
                    $("#name").val(response['data'][0].name);
                    $("#alpha_name").val(response['data'][0].alphabet_name);
                    //image not included yet
                    $("#img_caption").val(response['data'][0].image_caption);
                    $("#img_alt").val(response['data'][0].image_alt);

                    inputsoffice = '<select class="form-control" name="hospital_office" style="width:500px"><option value="'+ response['data'][0].hospital_office +'">'+ response['data'][0].hospital_office +'</option><option value="Hospital one">Hospital one</option><option value="Hospital two">Hospital two</option><option value="Hospital three">Hospital three</option><option value="Hospital four">Hospital four</option></select>';
                    $("#hospital_off_field").html(inputsoffice);

                    // $("#hospital_office").val(response['data'][0].image_alt);


                    /* ********** INDUSTRY ************ */
                    input_ins = '<select class="form-control" name="industry" style="width:500px"><option value="'+ response['data'][0].industry +'">'+ response['data'][0].industry +'</option><option value="industry one">industry one</option><option value="industry two">industry two</option><option value="industry three">industry three</option><option value="industry four">industry four</option></select>';
                    $("#input_industry").html(input_ins);
                    

                    // var objJSON = JSON.parse(response['data'][0].certificate);
                    // var inputs = "";
                    // $.each(objJSON, function (i, v) {
                    //     inputs += '<input type="text" class="form- " name="certificate[]" id="certificate" style="width:300px" value="'+v.med_sbj_list+'">';
                    // });
                    // $("#input_container").html(inputs);

                    var objJSONconf = JSON.parse(response['data'][0].conference);
                    var input_conf = "";
                    $.each(objJSONconf, function (i, v) {
                        input_conf += '<input type="text" class="form- " name="conference[]" id="conference" style="width:300px" value="'+v.med_sbj_list+'">';
                    });
                    $("#input_conference").html(input_conf);

                    //birthday
                    var foo = response['data'][0].birthday;
                    var arr = foo.split("-");
                    // alert(arr[2]);

                    var optionss='';
                        for(i=1990; i <= 2020; i++){
                            optionss +='<option value="'+i+'">'+i+'</option>';
                        }
                        var optionsss='';
                        for(i=1; i <= 31; i++){
                            optionsss +='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_bday = '<select id="" class="form- " name="b_year" style="width:100px"><option value="'+ arr[2] +'">'+ arr[2] +'</option>'+ optionss +'</select><select id="" class="form- " name="b_month" style="width:100px"><option value="'+ arr[0] +'">'+ arr[0] +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select><select id="" class="form- " name="b_day" style="width:100px"><option value="'+ arr[1] +'">'+ arr[1] +'</option>'+optionsss+'</select>';

                        $("#bday_input").html(input_bday);


                    $("#place_birth").val(response['data'][0].place_of_birth);
                    //the 3 careers not included yet
                    

                    //start for careers side

                    // ********** CAREER ONE ************
                    var objJSONcareerOne = JSON.parse(response['data'][0].career_academic_back);
                    var input_careerOne = "";
                    $.each(objJSONcareerOne, function (i, v) {

                        var options='';
                        for(i=1990; i <= 2020; i++){
                            options+='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_careerOne += '<select id="aca_year_from" class="form- " name="c_ac_year[]" style="width:100px"><option value="'+ v.from_year +'">'+ v.from_year +'</option>';
                        input_careerOne += options;
                        input_careerOne += '</select>';
                        //from month
                        input_careerOne += '<select id="aca_year_to" class="form- " name="c_ac_month[]" style="width:100px"><option value="'+ v.from_month +'">'+ v.from_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //from description
                        input_careerOne += '<input type="text" class="form- " name="c_ac_desc[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br>';

                        //to day
                        input_careerOne += '<select id="aca_year_from" class="form- " name="c_ac_year_to[]" style="width:100px"><option value="'+ v.to_year +'">'+ v.to_year +'</option>';
                        input_careerOne += options;
                        input_careerOne += '</select>';
                        //to month
                        input_careerOne += '<select id="aca_year_to" class="form- " name="c_ac_month_to[]" style="width:100px"><option value="'+ v.to_month +'">'+ v.to_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //to description
                        input_careerOne += '<input type="text" class="form- " name="c_ac_desc_to[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';
                    });
                    $("#input_career_one").html(input_careerOne);

                    // ********** CAREER TWO ************
                    var objJSONcareertwo = JSON.parse(response['data'][0].career_work_exp);
                    var input_careertwo = "";
                    $.each(objJSONcareertwo, function (i, v) {
                        // input_careerOne += '<input type="text" class="form- " name="conference[]" id="conference" style="width:300px" value="'+v.med_sbj_list+'">';

                        var options='';
                        for(i=1990; i <= 2020; i++){
                            options+='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_careertwo += '<select id="aca_year_from" class="form- " name="c_we_year[]" style="width:100px"><option value="'+ v.we_from_year +'">'+ v.we_from_year +'</option>';
                        input_careertwo += options;
                        input_careertwo += '</select>';
                        //from month
                        input_careertwo += '<select id="aca_year_to" class="form- " name="c_we_month[]" style="width:100px"><option value="'+ v.we_from_month +'">'+ v.we_from_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //from description
                        input_careertwo += '<input type="text" class="form- " name="c_we_desc[]" id="sample_one" style="width:100px" value="'+v.we_from_desc+'"><br>'

                        //to day
                        input_careertwo += '<select id="aca_year_from" class="form- " name="c_we_year_to[]" style="width:100px"><option value="'+ v.we_to_year +'">'+ v.we_to_year +'</option>';
                        input_careertwo += options;
                        input_careertwo += '</select>';
                        //to month
                        input_careertwo += '<select id="aca_year_to" class="form- " name="c_we_month_to[]" style="width:100px"><option value="'+ v.we_to_month +'">'+ v.we_to_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //to description
                        input_careertwo += '<input type="text" class="form- " name="c_we_desc_to[]" id="sample_one" style="width:100px" value="'+v.we_to_desc+'"><br>';
                    });
                    $("#input_career_two").html(input_careertwo);

                    // ********** CAREER THREE ************
                    var objJSONcareerthree = JSON.parse(response['data'][0].career_awards);
                    var input_careerthree = "";
                    $.each(objJSONcareerthree, function (i, v) {

                        // input_careerthree += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';
                        var options='';
                        for(i=1990; i <= 2020; i++){
                            options+='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_careerthree += '<select id="aca_year_from" class="form- " name="c_aw_year[]" style="width:100px"><option value="'+ v.from_year +'">'+ v.from_year +'</option>';
                        input_careerthree += options;
                        input_careerthree += '</select>';
                        //from month
                        input_careerthree += '<select id="aca_year_to" class="form- " name="c_aw_month[]" style="width:100px"><option value="'+ v.from_month +'">'+ v.from_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //from description
                        input_careerthree += '<input type="text" class="form- " name="c_aw_desc[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br>'

                        //to day
                        input_careerthree += '<select id="aca_year_from" class="form- " name="c_aw_year_to[]" style="width:100px"><option value="'+ v.to_year +'">'+ v.to_year +'</option>';
                        input_careerthree += options;
                        input_careerthree += '</select>';
                        //to month
                        input_careerthree += '<select id="aca_year_to" class="form- " name="c_aw_month_to[]" style="width:100px"><option value="'+ v.to_month +'">'+ v.to_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //to description
                        input_careerthree += '<input type="text" class="form- " name="c_aw_desc_to[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';

                        

                        $('#sample_one').click(function() {
                            alert('clicked');
                        })
                    });
                    $("#input_career_three").html(input_careerthree);

                    //end for careers


                    //checkbox not included yet
                    //hospital dropdown not included yet

                    /* ********** DEPARTMENT ************ */
                    var objJSONdpt = JSON.parse(response['data'][0].department);
                    var input_dpt = "";
                    var input_dpt_list = "";
                    $.each(objJSONdpt, function (i, v) {
                        console.log(objJSONdpt);

                        // input_dpt += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.med_sbj_list+'">';


                            input_dpt += '<select class="form-" name="department[]" style="width:150px"><option value="'+ v.med_sbj_list +'">'+ v.med_sbj_list +'</option>';

    
                                $.each(response['dpt'], function (i, b) {
                                    console.log('dpt '+ b.dpt_name)
                                    input_dpt += '<option value="'+ b.dpt_name +'">'+ b.dpt_name +'</option>';
    
                                });
                                  
                            input_dpt += '</select>';
                            
                        

                    }); //end of department json
                    $("#input_department").html(input_dpt);


                    //department json not included yet
                    $("#doc_comment").val(response['data'][0].doctor_comment);

                    var check = response['data'][0].sort_career;

                    if(check == 1){
                        $( "#n_order_one" ).attr( "checked", true );
                    }else{
                        $( "#n_order" ).attr( "checked", true );
                    }
                    

                },
                    error: function(response){
                    alert('Error'+response);
       
                }

              });
            // location.reload();
        });
    });


    //copy and add another data to database
    $('.overwrite_add').each(function(e){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        // e.preventDefault();
        $(this).on('click', function(){
            var id = $(this).attr('doc-id');
            // alert(id);

            $.ajax({
                url: '/modal_edit_doctor/'+id,
                type: 'get',
                dataType: 'json',
                // data : { id : id },
                success: function(response){
                    console.log(response['data']);
                if(response == "success")

                  console.log(response['data']); 

                  $("#copyAdddoctor").modal('show');
                  $("#twourl_generation").val(response['data'][0].url_generation);
                  $("#twostatus").val(response['data'][0].status);

                //  $.each(objJSON, function (i, v) {
                //     $('#certificate0'+ i).val(v.med_sbj_list); 
                //     console.log('yes' + v.med_sbj_list);
                // });

                var objJSON = JSON.parse(response['data'][0].certificate);
                var inputs = "";
                $.each(objJSON, function (i, v) {
                    inputs += '<input type="text" class="form- " name="certificate[]" id="certificate" style="width:300px" value="'+v.med_sbj_list+'">';
                });
                $("#twoinput_container").html(inputs);
                    
                    $("#twodocID").val(response['data'][0].id);
                    $("#twoname").val(response['data'][0].name);
                    $("#twoalpha_name").val(response['data'][0].alphabet_name);
                    //image not included yet
                    $("#twoimg_caption").val(response['data'][0].image_caption);
                    $("#twoimg_alt").val(response['data'][0].image_alt);

                    inputsoffice = '<select class="form-control" name="hospital_office" style="width:500px"><option value="'+ response['data'][0].hospital_office +'">'+ response['data'][0].hospital_office +'</option><option value="Hospital one">Hospital one</option><option value="Hospital two">Hospital two</option><option value="Hospital three">Hospital three</option><option value="Hospital four">Hospital four</option></select>';
                    $("#hospital_off_field_two").html(inputsoffice);

                    // $("#hospital_office").val(response['data'][0].image_alt);


                    /* ********** INDUSTRY ************ */
                    input_ins = '<select class="form-control" name="industry" style="width:500px"><option value="'+ response['data'][0].industry +'">'+ response['data'][0].industry +'</option><option value="industry one">industry one</option><option value="industry two">industry two</option><option value="industry three">industry three</option><option value="industry four">industry four</option></select>';
                    $("#twoinput_industry").html(input_ins);
                    

                    // var objJSON = JSON.parse(response['data'][0].certificate);
                    // var inputs = "";
                    // $.each(objJSON, function (i, v) {
                    //     inputs += '<input type="text" class="form- " name="certificate[]" id="certificate" style="width:300px" value="'+v.med_sbj_list+'">';
                    // });
                    // $("#input_container").html(inputs);

                    var objJSONconf = JSON.parse(response['data'][0].conference);
                    var input_conf = "";
                    $.each(objJSONconf, function (i, v) {
                        input_conf += '<input type="text" class="form- " name="conference[]" id="conference" style="width:300px" value="'+v.med_sbj_list+'">';
                    });
                    $("#twoinput_conference").html(input_conf);

                    //birthday
                    var foo = response['data'][0].birthday;
                    var arr = foo.split("-");
                    // alert(arr[2]);

                    var optionss='';
                        for(i=1990; i <= 2020; i++){
                            optionss +='<option value="'+i+'">'+i+'</option>';
                        }
                        var optionsss='';
                        for(i=1; i <= 31; i++){
                            optionsss +='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_bday = '<select id="" class="form- " name="b_year" style="width:100px"><option value="'+ arr[2] +'">'+ arr[2] +'</option>'+ optionss +'</select><select id="" class="form- " name="b_month" style="width:100px"><option value="'+ arr[0] +'">'+ arr[0] +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select><select id="" class="form- " name="b_day" style="width:100px"><option value="'+ arr[1] +'">'+ arr[1] +'</option>'+optionsss+'</select>';

                        $("#twobday_input").html(input_bday);


                    $("#twoplace_birth").val(response['data'][0].place_of_birth);
                    //the 3 careers not included yet
                    

                    //start for careers side

                    // ********** CAREER ONE ************
                    var objJSONcareerOne = JSON.parse(response['data'][0].career_academic_back);
                    var input_careerOne = "";
                    $.each(objJSONcareerOne, function (i, v) {

                        var options='';
                        for(i=1990; i <= 2020; i++){
                            options+='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_careerOne += '<select id="aca_year_from" class="form- " name="c_ac_year[]" style="width:100px"><option value="'+ v.from_year +'">'+ v.from_year +'</option>';
                        input_careerOne += options;
                        input_careerOne += '</select>';
                        //from month
                        input_careerOne += '<select id="aca_year_to" class="form- " name="c_ac_month[]" style="width:100px"><option value="'+ v.from_month +'">'+ v.from_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //from description
                        input_careerOne += '<input type="text" class="form- " name="c_ac_desc[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br>';

                        //to day
                        input_careerOne += '<select id="aca_year_from" class="form- " name="c_ac_year_to[]" style="width:100px"><option value="'+ v.to_year +'">'+ v.to_year +'</option>';
                        input_careerOne += options;
                        input_careerOne += '</select>';
                        //to month
                        input_careerOne += '<select id="aca_year_to" class="form- " name="c_ac_month_to[]" style="width:100px"><option value="'+ v.to_month +'">'+ v.to_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //to description
                        input_careerOne += '<input type="text" class="form- " name="c_ac_desc_to[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';
                    });
                    $("#twoinput_career_one").html(input_careerOne);

                    // ********** CAREER TWO ************
                    var objJSONcareertwo = JSON.parse(response['data'][0].career_work_exp);
                    var input_careertwo = "";
                    $.each(objJSONcareertwo, function (i, v) {
                        // input_careerOne += '<input type="text" class="form- " name="conference[]" id="conference" style="width:300px" value="'+v.med_sbj_list+'">';

                        var options='';
                        for(i=1990; i <= 2020; i++){
                            options+='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_careertwo += '<select id="aca_year_from" class="form- " name="c_we_year[]" style="width:100px"><option value="'+ v.we_from_year +'">'+ v.we_from_year +'</option>';
                        input_careertwo += options;
                        input_careertwo += '</select>';
                        //from month
                        input_careertwo += '<select id="aca_year_to" class="form- " name="c_we_month[]" style="width:100px"><option value="'+ v.we_from_month +'">'+ v.we_from_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //from description
                        input_careertwo += '<input type="text" class="form- " name="c_we_desc[]" id="sample_one" style="width:100px" value="'+v.we_from_desc+'"><br>'

                        //to day
                        input_careertwo += '<select id="aca_year_from" class="form- " name="c_we_year_to[]" style="width:100px"><option value="'+ v.we_to_year +'">'+ v.we_to_year +'</option>';
                        input_careertwo += options;
                        input_careertwo += '</select>';
                        //to month
                        input_careertwo += '<select id="aca_year_to" class="form- " name="c_we_month_to[]" style="width:100px"><option value="'+ v.we_to_month +'">'+ v.we_to_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //to description
                        input_careertwo += '<input type="text" class="form- " name="c_we_desc_to[]" id="sample_one" style="width:100px" value="'+v.we_to_desc+'"><br>';
                    });
                    $("#twoinput_career_two").html(input_careertwo);

                    // ********** CAREER THREE ************
                    var objJSONcareerthree = JSON.parse(response['data'][0].career_awards);
                    var input_careerthree = "";
                    $.each(objJSONcareerthree, function (i, v) {

                        // input_careerthree += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';
                        var options='';
                        for(i=1990; i <= 2020; i++){
                            options+='<option value="'+i+'">'+i+'</option>';
                        }
                        // $(yourSelect).append(options);

                        //from day
                        input_careerthree += '<select id="aca_year_from" class="form- " name="c_aw_year[]" style="width:100px"><option value="'+ v.from_year +'">'+ v.from_year +'</option>';
                        input_careerthree += options;
                        input_careerthree += '</select>';
                        //from month
                        input_careerthree += '<select id="aca_year_to" class="form- " name="c_aw_month[]" style="width:100px"><option value="'+ v.from_month +'">'+ v.from_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //from description
                        input_careerthree += '<input type="text" class="form- " name="c_aw_desc[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br>'

                        //to day
                        input_careerthree += '<select id="aca_year_from" class="form- " name="c_aw_year_to[]" style="width:100px"><option value="'+ v.to_year +'">'+ v.to_year +'</option>';
                        input_careerthree += options;
                        input_careerthree += '</select>';
                        //to month
                        input_careerthree += '<select id="aca_year_to" class="form- " name="c_aw_month_to[]" style="width:100px"><option value="'+ v.to_month +'">'+ v.to_month +'</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="0September9">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>';
                        //to description
                        input_careerthree += '<input type="text" class="form- " name="c_aw_desc_to[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';

                        

                        $('#sample_one').click(function() {
                            alert('clicked');
                        })
                    });
                    $("#twoinput_career_three").html(input_careerthree);

                    //end for careers


                    //checkbox not included yet
                    //hospital dropdown not included yet

                    /* ********** DEPARTMENT ************ */
                    var objJSONdpt = JSON.parse(response['data'][0].department);
                    var input_dpt = "";
                    var input_dpt_list = "";
                    $.each(objJSONdpt, function (i, v) {
                        console.log(objJSONdpt);

                        // input_dpt += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.med_sbj_list+'">';


                            input_dpt += '<select class="form- " name="department[]" style="width:150px;"><option value="'+ v.med_sbj_list +'">'+ v.med_sbj_list +'</option>';

                            $.each(response['dpt'], function (i, b) {
                                console.log('dpt '+ b.dpt_name)
                                input_dpt += '<option value="'+ b.dpt_name +'">'+ b.dpt_name +'</option>';

                            });
                                // if(resp == "success")
                                // console.log('department '+resp['data'][0].dpt_name);
                            
                            input_dpt += '</select>';
                            
                        

                    }); //end of department json
                    $("#twoinput_department").html(input_dpt);
                    // $("#input_department").html(input_dpt_list);


                    //department json not included yet
                    $("#twodoc_comment").val(response['data'][0].doctor_comment);

                    var check = response['data'][0].sort_career;

                    if(check == 1){
                        $( "#twon_order_one" ).attr( "checked", true );
                    }else{
                        $( "#twon_order" ).attr( "checked", true );
                    }
                    

                },
                    error: function(response){
                    alert('Error'+response);
       
                }

              });
            // location.reload();
        });
    });



    $('.overwrite_hospital').each(function(e){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        // e.preventDefault();
        $(this).on('click', function(){
            var id = $(this).attr('hosp-id');
            alert(id);

            $.ajax({
                url: '/modal_edit_hospital/'+id,
                type: 'get',
                dataType: 'json',
                // data : { id : id },
                success: function(response){
                    console.log(response['data']);
                if(response == "success")

                  console.log(response['data']); 

                  $("#edithospital").modal('show');
                  $("#url_gen").val(response['data'][0].url_generation);
                  $("#status").val(response['data'][0].status);

                //  $.each(objJSON, function (i, v) {
                //     $('#certificate0'+ i).val(v.med_sbj_list); 
                //     console.log('yes' + v.med_sbj_list);
                // });

                var objJSON = JSON.parse(response['data'][0].certificate);
                var inputs = "";
                $.each(objJSON, function (i, v) {
                    inputs += '<input type="text" class="form- " name="certificate[]" id="certificate" style="width:300px" value="'+v.med_sbj_list+'">';
                });
                $("#input_container").html(inputs);
                    
                    $("#name").val(response['data'][0].name);
                    $("#alpha_name").val(response['data'][0].alphabet_name);
                    //image not included yet
                    $("#img_caption").val(response['data'][0].image_caption);
                    $("#img_alt").val(response['data'][0].image_alt);
                    //industry dropdown not included yet
                    var objJSON = JSON.parse(response['data'][0].certificate);
                    var inputs = "";
                    $.each(objJSON, function (i, v) {
                        inputs += '<input type="text" class="form- " name="certificate[]" id="certificate" style="width:300px" value="'+v.med_sbj_list+'">';
                    });
                    $("#input_container").html(inputs);

                    var objJSONconf = JSON.parse(response['data'][0].conference);
                    var input_conf = "";
                    $.each(objJSONconf, function (i, v) {
                        input_conf += '<input type="text" class="form- " name="conference[]" id="conference" style="width:300px" value="'+v.med_sbj_list+'">';
                    });
                    $("#input_conference").html(input_conf);

                    $("#place_birth").val(response['data'][0].place_of_birth);
                    //the 3 careers not included yet
                    

                    //start for careers side

                    // ********** CAREER ONE ************
                    var objJSONcareerOne = JSON.parse(response['data'][0].career_academic_back);
                    var input_careerOne = "";
                    $.each(objJSONcareerOne, function (i, v) {
                        // input_careerOne += '<input type="text" class="form- " name="conference[]" id="conference" style="width:300px" value="'+v.med_sbj_list+'">';

                        input_careerOne += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';

                        $('#sample_one').click(function() {
                            alert('clicked');
                        })
                    });
                    $("#input_career_one").html(input_careerOne);

                    // ********** CAREER TWO ************
                    var objJSONcareertwo = JSON.parse(response['data'][0].career_work_exp);
                    var input_careertwo = "";
                    $.each(objJSONcareertwo, function (i, v) {
                        // input_careerOne += '<input type="text" class="form- " name="conference[]" id="conference" style="width:300px" value="'+v.med_sbj_list+'">';

                        input_careertwo += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.we_from_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.we_from_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.we_from_desc+'"><br><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.we_to_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.we_to_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.we_to_desc+'"><br>';

                        $('#sample_one').click(function() {
                            alert('clicked');
                        })
                    });
                    $("#input_career_two").html(input_careertwo);

                    // ********** CAREER THREE ************
                    var objJSONcareerthree = JSON.parse(response['data'][0].career_awards);
                    var input_careerthree = "";
                    $.each(objJSONcareerthree, function (i, v) {

                        input_careerthree += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.from_desc+'"><br><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_year+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_month+'"><input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.to_desc+'"><br>';

                        $('#sample_one').click(function() {
                            alert('clicked');
                        })
                    });
                    $("#input_career_three").html(input_careerthree);

                    //end for careers


                    //checkbox not included yet
                    //hospital dropdown not included yet

                    // ********** CAREER DEPARTMENT ************
                    var objJSONdpt = JSON.parse(response['data'][0].department);
                    var input_dpt = "";
                    $.each(objJSONdpt, function (i, v) {

                        input_dpt += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.med_sbj_list+'">';

                        $('#sample_one').click(function() {
                            alert('clicked');
                        })
                    });
                    $("#input_department").html(input_dpt);


                    //department json not included yet
                    $("#doc_comment").val(response['data'][0].doctor_comment);
                    

                },
                    error: function(response){
                    alert('Error'+response);
       
                }

              });

            // location.reload();
        });
    });
    
    $('.overwrite_special').each(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // e.preventDefault();
        $(this).on('click', function(){
            var id = $(this).attr('sp-id');
            // alert(id);

            $.ajax({
                url: '/modal_edit_special/'+id,
                type: 'get',
                dataType: 'json',
                // data : { id : id },
                success: function(response){
                    console.log(response['data']);
                
                    if(response == "success")

                        console.log(response['data']); 

                        $("#editspecial").modal('show');
                        $("#url").val(response['data'][0].sp_url);
                        $("#magazine").val(response['data'][0].sp_mag);
                        // illness category dropdown not included
                        // special category dropdown not included
                        $("#sts").val(response['data'][0].sp_title_shldr);
                        $("#st").val(response['data'][0].sp_title);
                        // doctor dropdown not included            
                        $("#cmt").val(response['data'][0].sp_doc_cmt);  

                        // Illness Category
                        input_ill = '<select class="form-control" name="ill_cat[]"><option value="'+ response['data'][0].sp_ill_cat +'">'+ response['data'][0].sp_ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                        $("#input_ill").html(input_ill);

                        // special Category
                        input_cat = '<select class="form-control" name="sp_cat[]"><option value="'+ response['data'][0].sp_cat +'">'+ response['data'][0].sp_cat +'</option><option value="がん">がん</option><option value="生活習慣病">生活習慣病</option><option value="子どもの病気">子どもの病気</option><option value="女性の病気">女性の病気</option><option value="老年性の病気">老年性の病気</option><option value="アレルギー">アレルギー</option><option value="食中毒（食あたり）">食中毒（食あたり）</option><option value="春特有の病気">春特有の病気</option><option value="夏特有の病気">夏特有の病気</option><option value="秋特有の病気">秋特有の病気</option><option value="冬特有の病気">冬特有の病気</option><option value="内臓の病気">内臓の病気</option><option value="脳・神経の病気">脳・神経の病気</option><option value="免疫システム">免疫システム</option><option value="運動機能の病気">運動機能の病気</option><option value="こころの病気">こころの病気</option><option value="部位別の病気">部位別の病気</option><option value="怪我・応急処置">怪我・応急処置</option><option value="救急・救命・緊急">救急・救命・緊急</option><option value="スポーツ障害">スポーツ障害</option><option value="リハビリテーション">リハビリテーション</option><option value="歯と健康">歯と健康</option><option value="妊娠と出産">妊娠と出産</option><option value="美容と健康">美容と健康</option></select>';
                        $("#input_cat").html(input_cat);

                        // Doctor Role
                        var role = response['data'][0].sp_doc_tsk;
                        if(role == "監修"){
                            input_rad = '<input type="radio" id="sprvsn" name="role" value="監修" checked><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                            $("#input_rad").html(input_rad);
                        }
                        if(role == "取材協力"){
                            input_rad = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力" checked><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                            $("#input_rad").html(input_rad);
                        }
                        if(role == "監修・取材協力"){
                            input_rad = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力" checked><label for="scc">監修・取材協力</label>';
                            $("#input_rad").html(input_rad);
                        }   

                        // SEO Title
                        var seo_title = response['data'][0].seo_title;
                        //var ill_title = response['data'][0].sp_ill_cat;
                        if(seo_title == response['data'][0].sp_ill_cat){
                            input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value="'+ response['data'][0].sp_ill_cat +'" checked><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                            $("#input_seo_title").html(input_seo_title);
                        } else{
                            input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value=""><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                            $("#input_seo_title").html(input_seo_title);
                        }

                        // SEO Keywords
                        var objJSON = JSON.parse(response['data'][0].sp_seo_kwords);
                        var input_seo = "";
                        $.each(objJSON, function (i, v) {
                            input_seo += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" id="kword" value="'+v.kword+'"></div>';
                        });
                        $("#input_seo").html(input_seo);
                    
                        $("#img").val(response['data'][0].sp_img);
                        $("#img_cap").val(response['data'][0].sp_img_cap);
                        $("#img_alt").val(response['data'][0].sp_img_alt);
                        //industry dropdown not included yet

                        $("#seo_txt").val(response['data'][0].sp_seo_txt);
                        $("#meta_txt1").val(response['data'][0].sp_seo_desc);
                        $("#meta_txt2").val(response['data'][0].sp_seo_desc2);

                        // Lead Ceditor
                        var objJSON = JSON.parse(response['data'][0].sp_txt);
                        var input_lead = "";
                        $.each(objJSON, function (i, v) {
                            input_lead += '<div class="cols-10"><textarea class="form-control" name="lead_ckeditor[]" id="lead_ckeditor">'+v.lead_ckeditor+'</textarea></div>';
                        });
                        $("#input_lead").html(input_lead);

                        /******** Illness Image ********/
                        var objJSON = JSON.parse(response['data'][0].sp_ill_img);
                        var input_ill_img = "";
                        $.each(objJSON, function (i, v) {
                            input_ill_img += '<div class="cols-2"><button type="button" class="btn-prime image"></button></div><div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>';
                        });
                        $("#input_ill_img").html(input_ill_img);
                        
                        // H2 Retrieval
                        var objJSON = JSON.parse(response['data'][0].sp_h2);
                        var inputs = "";
                        $.each(objJSON, function (i, v) {
                            inputs += '<div class="cols-3"><input type="text" class="form-control" placeholder="" value="'+v.h2+'" name="h2[]"></div>';
                        });
                        $("#input_h2").html(inputs);

                        // Tag Keyword
                        var objJSONsk = JSON.parse(response['data'][0].sp_seo_kwords);
                        var objJSONtk = JSON.parse(response['data'][0].sp_tag_kw);
                        var input_kws = "";
                        $.each(objJSONsk, function (i, v) {
                            input_kws += '<div class="cols-3"><input type="checkbox" id="tag" value="'+v.kword+'" name="tag[]"/><label for="tag">'+v.kword+'</label></div>';
                        });
                        $("#input_kws").html(input_kws);

                        // Tag Department Retrieval
                        var objJSONdep = JSON.parse(response['data'][0].sp_tag_dep);
                        var input_dep = "";
                        $.each(objJSONdep, function (i, v) {
                            input_dep += '<div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="'+ response['data'][0].tag_dep +'">'+ response['data'][0].tag_dep +'</option> <option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option><option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>option value="美容皮膚科">美容皮膚科</option></select></div>';
                        });
                        $("#input_dep").html(input_dep);

                        // Tag Symptoms Retrieval
                        var objJSONconf = JSON.parse(response['data'][0].sp_tag_symp);
                        var input_sy = "";
                        $.each(objJSONconf, function (i, v) {
                            input_sy += '<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" id="tag_sy" value="'+v.tag_sy+'"></div>';
                        });
                        $("#input_sy").html(input_sy);

                        /******* Tag Season *******/
                        var objJSONconf = JSON.parse(response['data'][0].sp_tag_season);
                        var input_s = "";
                        $.each(objJSONconf, function (i, v) {
                            input_s += '<div class="cols-3"><input type="checkbox" name="tag_s[]" value="秋"> </div>';
                        });
                        $("#input_s").html(input_s);

                        // Tag Season Text Retrieval
                        var objJSONconf = JSON.parse(response['data'][0].sp_ta_season_txt);
                        var input_tst = "";
                        $.each(objJSONconf, function (i, v) {
                            input_tst += '<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" id="tag_txt" value="'+v.tag_txt+'"></div>';
                        });
                        $("#input_tst").html(input_tst);

                        // Tag Free
                        var objJSONconf = JSON.parse(response['data'][0].sp_tag_free);
                        var input_free = "";
                        $.each(objJSONconf, function (i, v) {
                            input_free += '<div class="cols-3"><input type="text" class="form-control" name="tag_f[]" id="tag_f" value="'+v.tag_f+'"></div>';
                        });
                        $("#input_free").html(input_free);
                    

                },
                    error: function(response){
                    alert('Error'+response);
       
                }

            });
            // location.reload();
        });
    });

    $('.overwrite_illness').each(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // e.preventDefault();
        $(this).on('click', function(){
            var id = $(this).attr('il-id');
            // alert(id);

            $.ajax({
                url: '/modal_edit_illness/'+id,
                type: 'get',
                dataType: 'json',
                // data : { id : id },
                success: function(response){
                    console.log(response['data']);
                
                    if(response == "success")

                        console.log(response['data']); 
                        $("#editillness").modal('show');
                        
                        
                        $("#url").val(response['data'][0].ill_url); // url

                        // Illness Category
                        input_ill = '<select class="form-control" name="ill_cat[]"><option value="'+ response['data'][0].ill_cat +'">'+ response['data'][0].ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                        $("#input_ill").html(input_ill);

                        $("#ill_shldr").val(response['data'][0].ill_shoulder); // Illness Shoulder

                        $("#ill").val(response['data'][0].ill_name); // Illness

                        $("#ill_ph").val(response['data'][0].ill_ph); //Illness Phonetics
                        
                        // Doctor      

                        // Doctor Role
                        var role = response['data'][0].ill_doc_role;
                        if(role == "監修"){
                            input_rad = '<input type="radio" id="sprvsn" name="role" value="監修" checked><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                            $("#input_rad").html(input_rad);
                        }
                        if(role == "取材協力"){
                            input_rad = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力" checked><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                            $("#input_rad").html(input_rad);
                        }
                        if(role == "監修・取材協力"){
                            input_rad = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力" checked><label for="scc">監修・取材協力</label>';
                            $("#input_rad").html(input_rad);
                        }   

                        $("#cmt").val(response['data'][0].ill_doc_cmt);  // Doctor's Comment 

                        // Summarize
                        var objJSON = JSON.parse(response['data'][0].ill_summary);
                        var inputs = "";
                        $.each(objJSON, function (i, v) {
                            inputs += '<textarea class="form-control sm" name="sm[]" rows="3" id="sm" maxlength="200">'+v.sm+'</textarea><br>';
                        });
                        $("#input_sum").html(inputs);

                        // image
                        $("#img_cap").val(response['data'][0].ill_img_cap); // image caption
                        $("#img_alt").val(response['data'][0].ill_img_alt); // image alt

                        // Search Keywords
                        var objJSON = JSON.parse(response['data'][0].ill_kwords);
                        var input_kwords = "";
                        $.each(objJSON, function (i, v) {
                            input_kwords += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" value="'+v.kword+'"></div>';
                        });
                        $("#input_kwords").html(input_kwords);

                        // SEO Title
                        var seo_title = response['data'][0].ill_seo;
                        if(seo_title == response['data'][0].ill_name){
                            input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value="'+ response['data'][0].ill_name +'" checked><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].ill_name +'"</label>';
                            $("#input_seo_title").html(input_seo_title);
                        } else{
                            input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value=""><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].ill_name +'"</label>';
                            $("#input_seo_title").html(input_seo_title);
                        }

                        $("#seo_txt").val(response['data'][0].ill_seo_txt); // seo text
                        $("#meta_txt1").val(response['data'][0].ill_meta_a);
                        $("#meta_txt2").val(response['data'][0].ill_meta_b);

                        // Illness h1
                        input_h1 = ''+ response['data'][0].ill_shoulder +'<input type="hidden" name="h1" value="'+ response['data'][0].ill_name +'">';
                        $("#input_h1").html(input_h1);
                        
                        // H2 Retrieval
                        var objJSON = JSON.parse(response['data'][0].ill_h2);
                        var input_h2 = "";
                        $.each(objJSON, function (i, v) {
                            input_h2 += '<div class="cols-3"><input type="text" class="form-control" placeholder="" value="'+v.h2+'" name="h2[]"></div>';
                        });
                        $("#input_h2").html(input_h2);

                        // Tag Keyword
                        var objJSONkws = JSON.parse(response['data'][0].ill_kwords);
                        var input_kw = "";
                        $.each(objJSONkws, function (i, v) {

                            var check = JSON.parse(response['data'][0].ill_tag_kw);
                            //$.each(objJSONkws, function (i, v) {
                            if(check == 1){
                                input_kw += '<div class="cols-3"><input type="checkbox" id="tag" value="'+v.kword+'" name="tag[]" checked/><label for="tag">'+v.kword+'</label></div>';
                            } else{
                                input_kw += '<div class="cols-3"><input type="checkbox" id="tag" value="'+v.kword+'" name="tag[]"/><label for="tag">'+v.kword+'</label></div>';
                            }
                        });
                        $("#input_kw").html(input_kw);

                        // Tag Department Retrieval
                        var objJSONdep = JSON.parse(response['data'][0].ill_tag_dep);
                        var input_dep = "";
                        $.each(objJSONdep, function (i, v) {
                            input_dep += '<div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="'+ response['data'][0].tag_dep +'">'+ response['data'][0].tag_dep +'</option> <option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option><option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option>option value="美容皮膚科">美容皮膚科</option></select></div>';
                        });
                        $("#input_dep").html(input_dep);

                        // Tag Symptoms Retrieval
                        var objJSONsy = JSON.parse(response['data'][0].ill_tag_symp);
                        var input_sy = "";
                        $.each(objJSONsy, function (i, v) {
                            input_sy += '<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" id="tag_sy" value="'+v.tag_sy+'"></div>';
                        });
                        $("#input_sy").html(input_sy);

                        // Tag Season 
                        var objJSONts = JSON.parse(response['data'][0].ill_tag_season);
                        var input_ts = "";
                        $.each(objJSONts, function (i, v) {
                            if(objJSONts == 1){
                                input_ts += '<div class="cols-3"><input type="checkbox" id="taga1" name="tag_s[]" checked><label for="taga1">春</label></div>';
                            } else{
                                input_ts += '<div class="cols-3"><input type="checkbox" id="taga1" name="tag_s[]"><label for="taga1">春</label></div>';  
                            }
                        });
                        $("#input_ts").html(input_ts);

                        // Tag Season Text Retrieval
                        var objJSONtst = JSON.parse(response['data'][0].ill_tag_season_txt);
                        var input_tst = "";
                        $.each(objJSONtst, function (i, v) {
                            input_tst += '<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" id="tag_txt" value="'+v.tag_txt+'"></div>';
                        });
                        $("#input_tst").html(input_tst);

                        // Tag Free
                        var objJSONfree = JSON.parse(response['data'][0].ill_tag_free);
                        var input_free = "";
                        $.each(objJSONfree, function (i, v) {
                            input_free += '<div class="cols-3"><input type="text" class="form-control" name="tag_f[]" id="tag_f" value="'+v.tag_f+'"></div>';
                        });
                        $("#input_free").html(input_free);
                    

                    },
                    error: function(response){
                    alert('Error'+response);
       
                }

            });
            // location.reload();
        });
    });

    $(document).ready(function(){ 
    var min = 1990,
    max = 2021,
    select = document.getElementById('aca_year_from');

    for (var i = min; i<=max; i++){
        var opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    } 
  });


  $('.addcert1').on('click', addfields);
    var i=0;
    function addfields(e) {
      e.preventDefault();
      var copy = $('#addanother').clone();

      var oneplus=i+1;

      $(copy).find('div#cke_textheading_lead\\[0\\]').remove();
      $(copy).find('script').remove();
      $(copy).find('textarea[name=textheading_lead\\[0\\]]').attr('name', 'textheading_lead['+oneplus+']');

      $('#addnewdiv').append($(copy).html()+ '<br>');
      CKEDITOR.replace('textheading_lead['+oneplus+']');
      i++;  

    }

    $('.addcert2').on('click', addfields);
    var i=0;
    function addfields(e) {
      e.preventDefault();
      var copy = $('#addanother').clone();

      var oneplus=i+1;

      $(copy).find('div#cke_textheading_lead\\[0\\]').remove();
      $(copy).find('script').remove();
      $(copy).find('textarea[name=textheading_lead\\[0\\]]').attr('name', 'textheading_lead['+oneplus+']');

      $('#addnewdiv').append($(copy).html()+ '<br>');
      CKEDITOR.replace('textheading_lead['+oneplus+']');
      i++;  

    }

    $('.addcert3').on('click', addfields);
    var i=0;
    function addfields(e) {
      e.preventDefault();
      var copy = $('#addanother').clone();

      var oneplus=i+1;

      $(copy).find('div#cke_textheading_lead\\[0\\]').remove();
      $(copy).find('script').remove();
      $(copy).find('textarea[name=textheading_lead\\[0\\]]').attr('name', 'textheading_lead['+oneplus+']');

      $('#addnewdiv').append($(copy).html()+ '<br>');
      CKEDITOR.replace('textheading_lead['+oneplus+']');
      i++;  

    }

    $('.addcert4').on('click', addfields);
    var i=0;
    function addfields(e) {
      e.preventDefault();
      var copy = $('#addanother').clone();

      var oneplus=i+1;

      $(copy).find('div#cke_textheading_lead\\[0\\]').remove();
      $(copy).find('script').remove();
      $(copy).find('textarea[name=textheading_lead\\[0\\]]').attr('name', 'textheading_lead['+oneplus+']');

      $('#addnewdiv').append($(copy).html()+ '<br>');
      CKEDITOR.replace('textheading_lead['+oneplus+']');
      i++;  

    }