$('#customRangeInput').on('change', function() {
  
  $(this).css('background','linear-gradient(to right, #5999e5, 0%, #5999e5, '+this.value +'%, #fff ' + this.value + '%, white 100%)');
  
  $('.output__number-list').removeClass('active');

  switch(this.value) {

    case '0' : $('#output1').addClass('active');
    break;

    case '14.28' : $('#output2').addClass('active');;
    break;

    case '28.56' : $('#output3').addClass('active');;
    break;

    case '42.84' : $('#output4').addClass('active');;
    break;

    case '57.12' : $('#output5').addClass('active');;
    break;

    case '71.4' : $('#output6').addClass('active');;
    break;

    case '85.68' : $('#output7').addClass('active');;
    break;

    case '99.96' : $('#output8').addClass('active');;
    break;

  }

});