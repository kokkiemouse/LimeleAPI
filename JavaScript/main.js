//LimeleAPI v2

var pop = promt("短縮したいURLを入力してください","https://"); //ポップアップ
/*if(pop === null){ exit; }

var api_url = "https://riyblog.shop/limele/api/v2/?url=" + pop; //XHR
var xhr = new XMLHttpRequest();
xhr.open("GET", api_url);
xhr.responseType = "json";
xhr.send();
xhr.onload = function() {
    dom(xhr.response);
}

function dom(res){ //dom
    document.write(res.ver + "<br/>");
    document.write(res.msg + "<br/>");
    document.write(res.url + "<br/>");
}

/**
 * LimeleAPI v2
 * JavaScriptサンプルコード
 * 2020/9/19
 */
