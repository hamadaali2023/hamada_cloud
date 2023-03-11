jQuery(document).ready(function($) {
	'use strict';
	
	function onScrollInit( items, trigger ) {
	  items.each( function() {
		//Fonksiyon içerisine gönderilen parametre geçen classların tüm classları çekild.
		var classElement = $(this).attr("class");
		//Animasyon burada çekiliyor.
		var animate = classElement.replace("anim-",'');

		var animateElement = $(this),
			animateAnimationClass = animate[1];

			var animateTrigger = ( trigger ) ? trigger : animateElement;
			
			animateTrigger.waypoint(function() {
			  animateElement.addClass('animated').addClass(animate);
			  },{
				  triggerOnce: true,
				  offset: '90%'
			});
	  });
	}
	//Sayfa yüklendiğinde bu fonskyona animasyon eklenen classları belirtmek amaçlı animasyon classı gönderiliyor.
	 onScrollInit( $('.animate') );
	 
});