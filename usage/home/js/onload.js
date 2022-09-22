var loaderPage=function(){$(".fh5co-loader").fadeOut(1000);$(".fh5co-loader2").fadeIn(100);};
var loaderPage2=function(){$(".fh5co-loader2").fadeOut(1000);};

$(document).ready(function(){$('html').find('a[title="Free Web Hosting with PHP5 or PHP7"]').html('');setTimeout(loaderPage, 1500);setTimeout(loaderPage2, 2000);});
