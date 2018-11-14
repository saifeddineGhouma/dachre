var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add_v').click(function(){  
           i++;  
           $('#dynamic_field_v').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="situation[]" placeholder="Enter your Name" class="form-control name_list" /></td>  <td><input type="file" name="file[]" placeholder="Enter prix  prime" class="form-control name_list" /></td>    <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     

      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });