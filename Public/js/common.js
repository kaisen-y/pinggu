/**
 * Created by benjamin on 2015/12/5.
 */
var bzUtil = {};
/*检查是否为手机号码*/
bzUtil.isMobile = function (mobile) {
    return /^1[3456789][0-9]{9}$/.test(mobile);
};

bzUtil.isNumber = function (num) {
    return /^[0-9]*[1-9][0-9]*$/.test(num);
}

bzUtil.isFloat2 = function(num){
    return /^(([0-9]\d*))(\.\d{1,2})?$/.test(num);
}

bzUtil.isFloat = function(num){
    return /^[1-9]\d*\.\d*|0\.\d*[1-9]\d*$/.test(num);
}

bzUtil.numFormat = function(num){
    var re = /([0-9]+\.[0-9]{2})[0-9]*/;
    return (num+"").replace(re,"$1");
}

bzUtil.alert = function (msg) {
    var title = arguments[1] ? arguments[1] : '温馨提示';
    var bText = arguments[2] ? arguments[2] : '确 定';

    msDialog.dialogTips(msg,title,bText);
};

bzUtil.setTimeAlert = function(msg) {
    var callback = arguments[1] ? arguments[1] : false;
    var timer = arguments[2] ? arguments[2] : 2000;
    var title = arguments[3] ? arguments[3] : '温馨提示';
    var bText = arguments[4] ? arguments[4] : false;
    var sign = arguments[5] ? arguments[5] : 'dialog_auto';
    var isLeft = arguments[6] ? arguments[6] : false;

    msDialog.dialogTips(msg,title,bText,timer,callback,sign,isLeft);
}

bzUtil.confirm = function (msg,callback) {
    var title = arguments[2] ? arguments[2] : '温馨提示';
    msDialog.dialogTips(msg,title,false,false,callback,'confirm',false);
};

bzUtil.loading = function(msg) {
    var timer = arguments[1] ? arguments[1] : 3000;
    msDialog.dialogTips(msg,false,false,timer,false,'dialog_auto');
}

bzUtil.validateIdCard = function (number) {
    var Wi = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1];    // 加权因子
    var ValideCode = [1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2];            // 身份证验证位值.10代表X
    function IdCardValidate(idCard) {
        idCard = idCard.replace(/ /g, "");               //去掉字符串头尾空格
        if (idCard.length == 18) {
            var a_idCard = idCard.split("");                // 得到身份证数组
            if (isValidityBrithBy18IdCard(idCard) && isTrueValidateCodeBy18IdCard(a_idCard)) {   //进行18位身份证的基本验证和第18位的验证
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * 判断身份证号码为18位时最后的验证位是否正确
     * @param a_idCard 身份证号码数组
     * @return
     */
    function isTrueValidateCodeBy18IdCard(a_idCard) {
        var sum = 0;                             // 声明加权求和变量
        if (a_idCard[17].toLowerCase() == 'x') {
            a_idCard[17] = 10;                    // 将最后位为x的验证码替换为10方便后续操作
        }
        for (var i = 0; i < 17; i++) {
            sum += Wi[i] * a_idCard[i];            // 加权求和
        }
        valCodePosition = sum % 11;                // 得到验证码所位置
        if (a_idCard[17] == ValideCode[valCodePosition]) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 验证18位数身份证号码中的生日是否是有效生日
     * @param idCard 18位书身份证字符串
     * @return
     */
    function isValidityBrithBy18IdCard(idCard18) {
        var year = idCard18.substring(6, 10);
        var month = idCard18.substring(10, 12);
        var day = idCard18.substring(12, 14);
        var temp_date = new Date(year, parseFloat(month) - 1, parseFloat(day));
        // 这里用getFullYear()获取年份，避免千年虫问题
        if (temp_date.getFullYear() != parseFloat(year)
            || temp_date.getMonth() != parseFloat(month) - 1
            || temp_date.getDate() != parseFloat(day)) {
            return false;
        } else {
            return true;
        }
    }

    return IdCardValidate(number);
};

bzUtil.isChineseName = function (str) {
    var reg = /^[\u4e00-\u9fa5]{2,}$/i;
    return reg.test(str);
};


bzUtil.validateBankAccount = function (number) {
    return /^\d{16,19}$/.test(number);
}

//点击弹出键盘隐藏底部下载
$(document).ready(function() {
	$("input[type=text],input[type=password],input[type=number]").focus(function(){
		$(".bottom_nav2,.app_download").css("display","none");
		 
		});
	$("input[type=text],input[type=password],input[type=number]").blur(function(){
		$(".bottom_nav2,.app_download").css("display","block");
		})	
});

