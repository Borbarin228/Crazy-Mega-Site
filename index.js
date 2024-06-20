$(function () {
    $('#reg').click(function () {
      $('.modal').addClass('modal_active');
    });
   
    $('.formClose').click(function () {
      $('.modal').removeClass('modal_active');
    });
  });


  $('.modal').mouseup(function (e) {
    let modalContent = $(".content");
    if (!modalContent.is(e.target) && modalContent.has(e.target).length === 0) {
      $(this).removeClass('modal_active');
    }
  });

