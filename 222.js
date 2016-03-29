/**
 * Created by Administrator on 2016/3/29.
 */
$(function(){



  $('#check').click(function(){

      if(validatemobile($('input[name=tel]').val())){

          alert('手机号码输入正确!');
      }


    });


    $('#showHide').click(function(){


        $('#sh').toggle(500,function(){
            alert('切换完成');
        })


    })


});


function validatemobile(tel)
{
    if(tel.length==0)
    {
        alert('请输入手机号码！');
        $('input[name=tel]').focus();
        return false;
    }
    if(tel.length!=11)
    {
        alert('请输入有效的手机号码！');
        $('input[name=tel]').focus();
        return false;
    }

    var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if(!myreg.test(tel))
    {
        alert('请输入有效的手机号码！');
        $('input[name=tel]').focus();
        return false;
    }
    return true;
}