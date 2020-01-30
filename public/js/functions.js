
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

                    //birthday not included yet
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
                        console.log(objJSONdpt);

                        input_dpt += '<input type="text" class="form- " name="conference[]" id="sample_one" style="width:100px" value="'+v.med_sbj_list+'">';

                        input_dpt += '<option value="'+ v.med_sbj_list +'">'+ v.med_sbj_list +'</option>';

                        $('#sample_one').click(function() {
                            alert('clicked');
                        })

                        $('#DepartmentsDropDownList').empty();
                    for(var i in objJSONdpt) {
                            $('#DepartmentsDropDownList').append('<option value="'+ v.med_sbj_list +'">'+ v.med_sbj_list +'</option>');
                        }
                        for(var a in v.med_sbj_list) {
                            $('#DepartmentsDropDownList').append('<div> <select><option value="'+ v.med_sbj_list[a] +'">'+ v.med_sbj_list[a] +'</option></select> </div>');
                        }

                    });
                    $("#input_department").html(input_dpt);
                    $("#DepartmentsDropDownList").html(input_dpt);

                    


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

                    //birthday not included yet
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

                        var objJSON = JSON.parse(response['data'][0].sp_seo_kwords);
                        var inputs = "";
                        $.each(objJSON, function (i, v) {
                            inputs += '<input type="text" class="form- " name="kword[]" id="kword" style="width:300px" value="'+v.med_sbj_list+'">';
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

                        //birthday not included yet
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