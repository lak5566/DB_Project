function refresh_code(){ 
    document.getElementById("imgcode").src="../php/captcha.php"; 
    console.log("refresh_code()");
} 
var vcode_Boolean = false;
//偵測輸入
$('.reg_vcode').blur(function(){
  if ((/^[a-zA-Z0-9_-]{4,4}$/).test($(".reg_vcode").val())){//判定輸入值
    console.log("判定值輸入後");
    var acode=document.getElementById("reg_vcode").value;
    $.ajax({
	  type:"POST", 
	  url:"../php/checkcode.php", 
	  data:"data="+acode+"&action=chkvcode", 
	  cache:false,
	  success:function(data){ 
	  //回傳資料
	    if(data == 'OK'){
		  $('.vcode_hint').html(" ✔ ").css("color","green");
		  $('.reg_vcode').css("border","1px solid green");
		  vcode_Boolean = true;
		}else{
		  $('.vcode_hint').html(" × 驗證錯誤").css("color","red");
		  $('.reg_vcode').css("border","1px solid red");
		  vcode_Boolean = false;
		}
	  }
      }); 
  }else {
    $('.vcode_hint').html(" × 驗證錯誤").css("color","red");
	$('.reg_vcode').css("border","1px solid red");
    vcode_Boolean = false;
  }
});
// click
$('.red_button').click(function(){
  if(vcode_Boolean == true){
    document.getElementById("reg_form").submit();
  }else {
    alert("請確認資料輸入正確");
  }
});
