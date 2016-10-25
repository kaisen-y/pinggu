$(document).ready(function() {
    $.validator.setDefaults({
        errorElement:'span'
    });
    //邮箱
    jQuery.validator.addMethod("mail", function (value, element) {
        var mail = /^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
        return this.optional(element) || (mail.test(value));
    }, "请输入邮箱号码");

    //电话号码
    jQuery.validator.addMethod("noactel", function (value, element) {
        var noactel = /^\d{7,8}$/;
        return this.optional(element) || (noactel.test(value));
    }, "请输入电话号码");

    //手机号码
    jQuery.validator.addMethod("mobile", function (value, element) {
        var mobile = /^1[3|4|5|7|8]\d{9}$/;
        return this.optional(element) || (mobile.test(value));
    }, "请输入手机号码");


    //中文字符
    jQuery.validator.addMethod("chinese", function (value, element) {
        var chinese = /^[\u4E00-\u9FFF]+$/;
        return this.optional(element) || (chinese.test(value));
    }, "请输入中文字符");

    //身份证֤
    jQuery.validator.addMethod("idCard", function (value, element) {
        var isIDCard1=/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$/;//(15λ)
        var isIDCard2=/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/;//(18λ)

        return this.optional(element) || (isIDCard1.test(value)) || (isIDCard2.test(value));
    }, "请输入身份证号");


    //数字֤
    jQuery.validator.addMethod("number", function (value, element) {
        var number=/^([1-9]\d*|0)(\.\d*[1-9])?$/;//(非负数)
        return this.optional(element) || (number.test(value));
    }, "请输入0以上的字符");
});