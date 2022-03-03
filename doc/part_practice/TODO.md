# 練習項目
---
## 90分鐘準備時間
* 請在base.php寫出分頁程式碼
* 請在base.php寫出總人數統計程式碼
* 請建立期末評量資料表並加入資料。
    * Que資料表記得加入sh欄位。
    * News資料表可以加到六筆資料好測試分頁。

## 開始測驗
* 改css檔案，#mm 5?0px改為540px，#lef 5?8px改為538px，#main 5?5px改為535px，#bottom padding加0。口訣5330
```
#mm
{
	min-height:540px;
}

#lef
{
	width:18.2%;
	padding:2px;
	background:url(../icon/02B04.png) repeat-y;
	/*background-size:100% auto;*/
	min-height:538px;
	display:inline-block;
	vertical-align:top;
	position:relative;
	top:-3px;
}
#mm
{
	padding-top:3px;
}
#main
{
	display:inline-block;
	width:78%;
	height:535px;
	padding:4px;
	border:solid 1px #000000;
	overflow:auto;
	position:relative;
	left:1%;
}
#lef a
{
	padding:20px 5px 20px 5px;
}
#bottom
{
	text-align:right;
	padding:0 24px;
}
```
* 後端文章管理為三筆顯示分頁，前端最新文章為五筆顯示分頁。
* 除了input:submit與input:reset外的按鈕，記得加上type="button"屬性，不然會做submit動作。
* 屬性data-sh="1"，在javascript函式收到的變數$('#ww').data('sh')之型態為數字。
* 請在front/result.php寫出進度條程式碼，注意灰色進度條的文字部分加空白`&nbsp;`才能顯示進度條，例如：`<div style="background:darkgray;width:80%">&nbsp;</div>`。
* 請在front/que.php寫出載入資料程式碼，記得要加顯示條件如`$Que->all(['parent'=>0,'sh'=>1]);`。
* 請在back/news.php加入分頁程式碼，記得為為三筆顯示分頁。
* 請在index.php修改為正確主選單，只有三個項目**回首頁、最新文章、問卷調查**。
* 請在back.php修改為正確主選單，只有三個項目**帳號管理、最新文章管理、問卷管理**。
* 請在front/reg.php修改正確的按鈕文字。
* 請在front/login.php修改正確的按鈕文字。
* 請在front/login.php，會員登入畫面 顯示「查無帳號」或「密碼錯誤」訊息，同時點選「確定」按鈕將返回，並**重置帳號及密碼資料** 。
