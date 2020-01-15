// JavaScript Document
  $(function() {

                

                setTimeout(function() {

                    $('.fly-in-text').removeClass('hidden');

                }, 1000);

                

            })();
			
			
			$(function() {

                

                setTimeout(function() {

                    $('body').removeClass('fly-in-text hidden');

                }, 4000);

                

            })();

$( "a" ).click(function() {
  $( this ).slideUp();
});
