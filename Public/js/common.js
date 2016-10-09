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

function myAlert(message,callback) {
    if(message!=null && message!='' && typeof message =='string'){
        bootbox.alert(message, function () {
            if(callback!=undefined){
                callback();
            }
        });
    }
}

/**操作确认
 * @para text string 提示语
 * @para yesCallback function
 * @para noCallback function
 */
function myConfirm(text, yesCallback, noCallback) {
    bootbox.confirm({
        message: text,
        buttons: {
            confirm: {
                label: js_langs.confirm,
                className: "btn-primary btn-sm"
            },
            cancel: {
                label: js_langs.cancel,
                className: "btn-sm"
            }
        },
        callback: function (result) {
            if (result) {
                if (yesCallback != undefined) {
                    yesCallback();
                }
            } else {
                if (noCallback != undefined) {
                    noCallback();
                }
            }
        }
    });
};

bzUtil.isChineseName = function (str) {
    var reg = /^[\u4e00-\u9fa5]{2,}$/i;
    return reg.test(str);
};


bzUtil.validateBankAccount = function (number) {
    return /^\d{16,19}$/.test(number);
}



