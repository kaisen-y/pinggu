//图片加载完的handle
window.addEventListener("load",function(){
	var $ul = $("#banner ul"),
		ulW = $("#banner ul").width(),
		lis = $ul.find("li").length,
		liW = $ul.find("li").width(),
		tempW = 0,
		i = 0,
		html = '';
	var timer=null;

	//首页banner自动宽度
	if(!!$("#banner").length){
		var bannerW = $("#banner").width();
			$("#banner ul li").width(bannerW);
			var liNum = $("#banner ul li").length;
			$("#banner ul").width(bannerW * liNum);
	}

	//幻灯片
	initBanner();	
	$('#banner ul').on('touchstart',fnStart);
	$('#banner ul').on('touchmove',fnMove);
	$('#banner ul').on('touchend',fnEnd);

	//滑动开始
	function fnStart(ev){
		console.log('start');
		clearInterval(timer);
	}

	//滑动
	function fnMove(ev){

	}

	//滑动结束
	function fnEnd(ev){
		console.log('end');
		autoplay();
	}

	
	function initBanner(){
		//动态添加指示灯
		for(var k=0; k<lis ; k++){
			if(k==0){
				html += "<em class='current'></em>";
			}else{
				html += "<em></em>";
			}	
		}

		$("#wb_position").html(html);
		autoplay();
	}

	function autoplay(){
		timer=setInterval(function(){
			var ml = Math.abs( parseInt($ul.css('marginLeft')) );
			if( ml < (lis-1)*liW ){
				i++;
				tempW -= liW;
			}else{
				tempW = 0;
				i = 0;
			}
			
			//移动幻灯片
			$ul.animate({'marginLeft': tempW + "px"},500,function(){
				//修改指示灯
				$("#wb_position em").removeClass().eq(i).addClass('current');
			});
			
		},3000);
	}
});

