$(document).ready(function() {
    $(function(){
        //jquery.validate
        $("#commentForm").validate({
            submitHandler: function() {
                //验证通过后 的js代码写在这里
            }
        })

    })


    //下面是一些常用的验证规则扩展
    //配置错误提示的节点，默认为label，这里配置成 span （errorElement:'span'）
    $.validator.setDefaults({
        errorElement:'span'
    });
    /*-------------扩展验证规则-------------*/
    //邮箱
    jQuery.validator.addMethod("mail", function (value, element) {
        var mail = /^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
        return this.optional(element) || (mail.test(value));
    }, "邮箱格式不对");

    //无区号电话验证规则
    jQuery.validator.addMethod("noactel", function (value, element) {
        var noactel = /^\d{7,8}$/;
        return this.optional(element) || (noactel.test(value));
    }, "电话格式如：68787027");

    //手机验证规则
    jQuery.validator.addMethod("mobile", function (value, element) {
        var mobile = /^1[3|4|5|7|8]\d{9}$/;
        return this.optional(element) || (mobile.test(value));
    }, "手机格式不对");


    //汉字
    jQuery.validator.addMethod("chinese", function (value, element) {
        var chinese = /^[\u4E00-\u9FFF]+$/;
        return this.optional(element) || (chinese.test(value));
    }, "格式不对");

    //身份证
    jQuery.validator.addMethod("idCard", function (value, element) {
        var isIDCard1=/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$/;//(15位)
        var isIDCard2=/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/;//(18位)

        return this.optional(element) || (isIDCard1.test(value)) || (isIDCard2.test(value));
    }, "格式不对");
});