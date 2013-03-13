// JavaScript Document


  $(document).ready(function(){
      $("#top-nav li").hover(function(){
		  $('ul', this).show();
		  $('a.top-nav-link', this).addClass('selected');
		  },function(){
			  $('ul', this).hide();
			  $('a.top-nav-link', this).removeClass('selected');
		  });
       });

