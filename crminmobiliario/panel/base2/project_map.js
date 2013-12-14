
// $(function() {

//     var hoverUserDetails = '<div class="hover-details"></div>';

//     $(".hover-me").hovercard({
//         detailsHTML: hoverUserDetails,
//         width: 480,
//         onHoverIn: function () {

//             $.ajax({
//                 // url: $(this).children('a').attr('data-hovercard'),
//                 url: $(this).attr('data-hovercard'),
//                 type: 'GET',
//                 beforeSend: function () {
//                     $(".hover-details").prepend('<p class="loading-text">Loading details...</p>');
//                 },
//                 success: function (data) {
//                     $(".hover-details").empty();
//                     $(data).appendTo(".hover-details");
//                 },
//                 complete: function () {
//                     $('.loading-text').remove();
//                 }
//             });
//         }
//     }); 

// });

