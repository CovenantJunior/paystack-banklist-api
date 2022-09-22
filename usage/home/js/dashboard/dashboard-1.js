    //play quiz
    $("#play-quiz").on('click', function(e) {e.preventDefault(); swal({title:"Enter the seat with ₦2000, answer 15 questions correctly and get ₦30,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1}); });
    //play quiz about page
    $(".play-quiz").on('click', function(e) {e.preventDefault(); swal({title:"Enter the seat with ₦2000, answer 15 questions correctly and get ₦30,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1}); });
    //play 2048
    $("#play-2048").on('touchend click', function(e) {e.preventDefault(); swal({title:"Play 2048 with ₦500, stand a chance to earn ₦1,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1}); });
    //play 2048 main page
    $(".play-2048").on('touchend click', function(e) {e.preventDefault();swal({title:"Play 2048 with ₦500, stand a chance to earn ₦1,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1});$('.cancel').on('click', function(){window.location='reward://'})});
    //play tic tac toe
    //$("#play-tic-tac-toe").on('touchend click', function(e) {e.preventDefault(); swal({title:"Play Tic Tac Toe with ₦500, stand a chance to earn ₦1,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1}); });
    //play maze
    $("#play-maze").on('touchend click', function(e) {e.preventDefault(); swal({title:"Play Maze with ₦500. Under 100 seconds complete the Maze and stand a chance to earn ₦1,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1}); });
    $(".play-maze").on('touchend click', function(e) {e.preventDefault(); swal({title:"Play Maze with ₦500. Under 100 seconds complete the Maze and stand a chance to earn ₦1,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1}); });
    //play multiplication
    $("#play-multiplication").on('touchend click', function(e) {e.preventDefault(); swal({title:"Play Multiplication Game with ₦500.\r\nIn 25 seconds accumulate over 50 points and win ₦1,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1});$('.cancel').on('click', function(){window.location='reward://'});});
    $(".play-multiplication").on('touchend click', function(e) {e.preventDefault(); swal({title:"Play Multiplication Game with ₦500.\r\nIn 25 seconds accumulate over 50 points and win ₦1,000!",text:"Pay from wallet ",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Pay",closeOnConfirm:!1}); });