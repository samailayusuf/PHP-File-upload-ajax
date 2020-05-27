$(document).ready(function(){
  $('#btn_upload').click(function(){

    var formData = new FormData();
    var files = $('#file')[0].files[0];
    formData.append('file',files);

    // JQuery ajax request
    $.ajax({
      url: 'upload_file.php',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,

      success: function(data){
        if(data !== 0){
          // Show image preview
          $('.response-data').append("<img src="+data+" width='100%'>");
          $(".close").trigger('click');
          //alert(data);
        }else{
          alert('<b>Sorry</b> the file could not upload!');
        }
        
      }
    });
  });
});