$(function(){

  // $( window ).scroll(function() {
  //   $( "#description" ).css( "color", "red" );
  //   $( "#inputs" ).css( "top", "-50em" );
  // });
  $('#select').change(function(){
    $.each(this.files, function (i, file) {
        $('#files').append(file.name + "<br>");
    });
  });

  $('#reset-files').click(function(){
    $("#select").val("");
    $('#files').html("");
  });

  // $('#inputs').on('mousewheel', function(e){
  //     $( "#inputs" ).css( "top", "-50em" );
  // });
});
