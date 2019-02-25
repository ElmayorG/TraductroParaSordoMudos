/* Codígo escrito por Leslie Itzel Cedillo Labrada y Edgar Andrei Olvera Velasco para
	el proyecto de titulación para la carrera de Técnico en Sistemas Digitales del
	CECyT 1 "Gonzalo Vazquez Vela" 
*/
var a = 0;
function abre_men(){
	if(a == 0){
		$("#menu").removeClass('off');
		$("#menu").addClass('on');
		$("#menu").animate({'width':'500px'});
			$(".prn").fadeIn(2000);
			$(".sec").fadeIn(3000);
			$(".idm").fadeIn(4000);
			$(".tra").fadeIn(5000);
		a = a + 1;
	}else if(a == 1){
		$("#menu").animate({'width':'0px'},"SLOW");
		$("#menu").removeClass('on');
		$("#menu").addClass('off');
			$(".prn").fadeOut();
			$(".sec").fadeOut();
			$(".idm").fadeOut();
			$(".tra").fadeOut();
		a = a - 1;
	}else{
		a = 0;
	}
}
var _men = 0;
var abireto = 'no';
var saber_men = 'n';
function despliega(menu,quien,id){
	if(_men == 0 && abireto == 'no'){
		 saber_men = id;
		_men = quien;
		abireto = 'si';
		menu.fadeIn();
	}else if(_men == quien && abireto == 'si'){
		menu.fadeOut();
		_men = 0;
		abireto = 'no';
	}else if(_men != quien && abireto == 'si'){
		$(saber_men).fadeOut();
		menu.fadeIn();
		saber_men = id;
		_men = quien;
		abireto = 'si';
	}else{
		alert('Ocurrio un error');
	}
}