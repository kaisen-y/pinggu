var msDialog = {};
msDialog.position = function(elem,l,t){
	var isIE6 = !-[1,] && !window.XMLHttpRequest;
	if(isIE6){
		var style = elem.style,
		dom  = '(document.documentElement)',
        left = l - document.documentElement.scrollLeft,
        top  = t - document.documentElement.scrollTop;
		style.position = 'absolute';
		style.removeExpression('left');
		style.removeExpression('top');
		style.setExpression('left', 'eval(' + dom + '.scrollLeft + ' + left + ') + "px"');
		style.setExpression('top', 'eval(' + dom + '.scrollTop + ' + top + ') + "px"');
	}else{
		elem.style.position = 'fixed';
	}
}
/** sign: dialog提示窗口, dialog_auto自动关闭提示, confirm确认窗口 */
msDialog.dialogTips = function(msg,title,bText,timer,callback,sign,isLeft){
    _title = arguments[1] ? arguments[1] : '温馨提示';
    _bText = arguments[2] ? arguments[2] : '确 定';
	_timer = arguments[3] ? arguments[3] : false;
	_callback = arguments[4] ? arguments[4] : false;
    _sign = arguments[5] ? arguments[5] : 'dialog';
    _isLeft = arguments[6] ? arguments[6] : false;

	var c_=false;//是否已经关闭窗口，解决自动关闭与手动关闭冲突
	var s="<div id='mask_layer' class='mask_layer'></div><div class=''><div id='scs_alert'><div id='alert_top'></div><div id='alert_bg'>";
	if(_sign == 'dialog_auto' ){ //自动关闭
        _minOffsetWidth = 60;
        _width = 200;
        _margin_left = 100;
        if(msg.length > 10){
            _width +=(msg.length - 10)*10;
            _margin_left += (msg.length - 10)*5;
        }
        if(msg.length > 20){
            _width = 300;
            _margin_left = 150;
        }
        if(document.body.offsetWidth - _width < _minOffsetWidth) {
            _width = _width - _minOffsetWidth;
            _margin_left = _margin_left - _minOffsetWidth/2;
        }

        s="<div id='mask_layer'></div><div class='message_dialog_auto'><div id='scs_alert' style='width:"+_width+"px;margin-left:-"+_margin_left+"px;'><div id='alert_top'></div><div id='alert_bg'>";
	}
    if(_title){ // 标题
        s+="<h4>"+_title+"</h4>";
    }

    if(_isLeft) {
        s += "<p id='alert_txt' class='alert_txt_left'>" + msg + "</p>";
    }
    else{
        s += "<p id='alert_txt'>" + msg + "</p>";
    }

	if (_sign ==  'confirm'){
		s+="<div class='bnt_cancel'><a href='javascript:void(0)' id='confirm_ok'>"+_bText+"</a><a href='javascript:void(0)' id='confirm_cancel'>取 消</a></div>";
	}else if(_sign ==  'dialog'){
		s+="<a href='javascript:void(0)' id='alert_ok'>"+_bText+"</a>";
	}
	
	s+="</div><div id='alert_foot'></div></div> </div>";
	$("body").append(s);
	$("#scs_alert").css("margin-top",-($("#scs_alert").height()/2)+"px"); //使其垂直居中
	$("#scs_alert").focus(); //获取焦点，以防回车后无法触发函数
	if(!_timer){
        msDialog.position(document.getElementById('mask_layer'),0,0);
	}
    msDialog.position(document.getElementById('scs_alert'),$(window).width()/2,$(window).height()/2);

	if (_timer){
		//定时关闭提示
		setTimeout(function(){
			close_info();

			if(_callback)_callback();
		},_timer);
	}

	function close_info(){
	//关闭提示窗口
		if(!c_){
			$("#mask_layer").fadeOut("fast",function(){
				$("#scs_alert").remove();
				$(this).remove();
			});
			c_=true;
		}
	}

	$("#alert_ok").click(function(){
		close_info();
		if(typeof(_callback)=="function")_callback();
	});
	$("#confirm_ok").click(function(){
		close_info();
		if(typeof(_callback)=="function")_callback();
	});
	$("#confirm_cancel").click(function(){
		close_info();
	});
}