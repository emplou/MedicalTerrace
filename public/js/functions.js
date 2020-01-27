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


    $('.overwrite').each(function(e){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        // e.preventDefault();
        $(this).on('click', function(){
            var id = $(this).attr('doc-id');
            // alert(docId);
            $.ajax({
                type : "GET",
                url  : '/modal_edit_doctor/'+id,
                // dataType : "JSON",
                data : { id : id },
                success: function(response){ // What to do if succeed
                    if(data == "success")
                  alert(response); 
                },
                    error: function(response){
                    alert('Error'+response);
              }
            });

            $.ajax({
                url: '/modal_edit_doctor/'+id,
                type: 'get',
                dataType: 'json',
                // data : { id : id },
                success: function(response){
       
                //   var len = 0;
                //   $('#userTable tbody').empty(); // Empty <tbody>
                //   if(response['data'] != null){
                //     len = response['data'].length;
                //   }
       
                //   if(len > 0){
                //     for(var i=0; i<len; i++){
                //       var id = response['data'][i].id;
                //       var username = response['data'][i].username;
                //       var name = response['data'][i].name;
                //       var email = response['data'][i].email;
       
                //       var tr_str = "<tr>" +
                //           "<td align='center'>" + (i+1) + "</td>" +
                //           "<td align='center'>" + username + "</td>" +
                //           "<td align='center'>" + name + "</td>" +
                //           "<td align='center'>" + email + "</td>" +
                //       "</tr>";
       
                //       $("#userTable tbody").append(tr_str);
                //     }
                //   }else if(response['data'] != null){
                //      var tr_str = "<tr>" +
                //          "<td align='center'>1</td>" +
                //          "<td align='center'>" + response['data'].username + "</td>" + 
                //          "<td align='center'>" + response['data'].name + "</td>" +
                //          "<td align='center'>" + response['data'].email + "</td>" +
                //      "</tr>";
       
                //      $("#userTable tbody").append(tr_str);
                //   }else{
                //      var tr_str = "<tr>" +
                //          "<td align='center' colspan='4'>No record found.</td>" +
                //      "</tr>";
       
                //      $("#userTable tbody").append(tr_str);
                //   }

                // alert(data);
                if(response == "success")
                  alert(data); 
                },
                    error: function(response){
                    alert('Error'+data);
       
                }
              });
            // location.reload();
        });
    });