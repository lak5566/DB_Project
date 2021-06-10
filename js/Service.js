var initSubject='',initBody='';

function sendout()
{
    var toText = "40743254@gm.nfu.edu.tw";//要傳送的對象
    var nameText = nickname.value;//讀取ID為 nameTextuser 物件中的值
    var emailText = email.value;
    var subText = subject.value;
    
    var bodyText = ""+content.value+'%0A%0A%0A';//%0A是換行 換了三行
        bodyText += "From："+nameText+'%0A';
        bodyText += "Email："+emailText;

        mailTo.href="mailto:"+toText+"?subject="+subText+"&body="+bodyText;
        mailTo.click();
}

function init()
{
    subText.value=initSubject;
    toText.value=initTo;
    bodyText.value=initBody;
}