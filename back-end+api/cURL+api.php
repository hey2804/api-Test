<!-- 示範用PHP curl抓取opendata -->
<?php

// 建立cURL連線
$curl = curl_init();

// header("Access-Control-Allow-Origin: *");

// 識別發出請求的軟體類型或版本號、該軟體使用的作業系統、還有軟體開發者的字詞串。
// 參考 https://developer.mozilla.org/zh-TW/docs/Web/HTTP/Headers/User-Agent
// curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36");

//要驗證伺服器 SSL 憑證，當拜訪 https 網站時，若未做任何 SSL 相關設定，會出現錯誤。
// 設為 false 為可以接受任何伺服器憑證。
// 參考 https://www.plurk.com/p/e797gs
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// 將 curl_exec() 獲取結果以文字串方式返回，而不是直接印出。
// 如果你只是要轉給前端可以不寫此行（預設 false)，剛好省下最後的 echo 動作
// 反之為 true 可事後要做 echo 給前端（用 Ajax 來取）或透過 php 輸出 HTML
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// 設定 URL 位置
curl_setopt($curl, CURLOPT_URL, "https://opendata.cwb.gov.tw/api/v1/rest/datastore/W-C0033-001?Authorization=CWB-FD936122-D58A-4DE9-B2DE-B61469F2BD90");

// 執行 curl
$result = curl_exec($curl);

// 關閉 curl
curl_close($curl);

// echo $result;

?>
