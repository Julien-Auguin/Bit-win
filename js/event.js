$(function(){

  $('#select').change(function(){
    $('#files').html("");
    $.each(this.files, function (i, file) {
        $('#files').append(file.name + "<br>");
    });
  });

  $('#reset-files').click(function(){
    $("#select").val("");
    $('#files').html("");
  });

});
