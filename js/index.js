// function search() {
//     var site_search = document.getElementById("site-search");
//     console.log(site_search);
// }

function showSite(str) {
    if (str == "") {
        //收集輸入字段的值，其id為“txtHint”。
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // IE7+, Firefox, Chrome, Opera, Safari 瀏覽器執行碼(建立物件)
        xmlhttp = new XMLHttpRequest();
    } else {
        // IE6, IE5 瀏覽器執行碼(建立物件)
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    //'onreadystatechange'是XMLHttpRequest物件的屬性，只要'readyState'屬性發生更改，就會調用該屬性。 我們將其分配給下一個要宣告的函數。
    xmlhttp.onreadystatechange = function() {
            //檢查'readyState'屬性的值是否為4，以及結果代碼200表明對請求的響應是成功的。。
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //設置要在div中顯示的字符串的值，其id為'txtHint'，作為XMLHttpRequest物件的'responseText'屬性。 'responseText'是對文本請求的響應。
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        //此方法傳遞了三個參數。 'GET'確定httprequest的類型。 'Record.php'設置後端文件，並設置第三個參數'true'表示異步處理請求。
    xmlhttp.open("GET", "../php/index.php?name=" + str, true);
    xmlhttp.send();
}