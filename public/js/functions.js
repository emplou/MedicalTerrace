$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

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
            alert(id);

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
                  var objJSON = JSON.parse(response['data'][0].certificate);
                  console.log(objJSON);

                  $.each(objJSON, function(key,value){
                    console.log('yes '+ value.med_sbj_list);
                    
                    var inputs = document.getElementById()('certificate');
                    var obj = {};
                    for(var x=0; x < inputs.length; x++){   
                        var input = inputs[x];
                        obj[input.name] = input.value;
                    }
                 });
                
                  //json inside json
                  var els = document.querySelectorAll('input[name="certificate[]"],input[name="conference[]"]');

                    var arr = [];
                    for (var i = 0; i < els.length; i++) {
                        var setObj = new setObject(els[i].name.slice(0, -2) + i, els[i].value);
                        arr.push(setObj);
                    }

                    result1.innerHTML = JSON.stringify(arr, null, 2);


                    var arr = [].map.call(els, function(el) {
                        return new setObject(el.name.slice(0, -2) + i, el.value);
                    });
                    result2.innerHTML = JSON.stringify(arr, null, 2);
                    //end of json inside json
                    
                    $("#name").val(response['data'][0].name);
                    $("#alpha_name").val(response['data'][0].alphabet_name);
                    //image not included yet
                    $("#img_caption").val(response['data'][0].image_caption);
                    $("#img_alt").val(response['data'][0].image_alt);
                    //industry dropdown not included yet
                    //conference json not included yet
                    //birthday not included yet
                    $("#place_birth").val(response['data'][0].place_of_birth);
                    //the 3 careers not included yet
                    //checkbox not included yet
                    //hospital dropdown not included yet
                    //department json not included yet
                    $("#doc_comment").val(response['data'][0].doctor_comment);
                    
                    // $.each(object.certificate, function( index, value ) { console.log(value.med_sbj_list); }); 

                },
                    error: function(response){
                    alert('Error'+response);
       
                }

              });
              //setCookie();
            // location.reload();
        });
    });