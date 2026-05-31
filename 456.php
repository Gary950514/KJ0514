<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">

	
	
	.center-img {
    display: block;    /* 關鍵：把圖片從行內元素改成區塊元素 */
    margin: 20px auto; /* 關鍵：上下留 20px 距離，左右 auto 就會自動置中 */
    
    max-width: 100%;   /* 額外好習慣：確保圖片太大時，會自動縮小配合螢幕，不會爆出去 */
    height: auto;      /* 讓圖片維持正確的比例不變形 */
		

}
	
	/* 限制全頁寬度的容器 */
	
        .container {
    color: #FFFFFF;
    width: 100%;
    max-width: 1200px;        /* 限制最大寬度 */
    margin: 0 auto;           /* 讓畫面置中 */
    padding: 0 20px;          /* 左右留安全邊距 */
    box-sizing: border-box;
    font-size: 27pt;
    font-weight: bold;
    text-align: center;
        }
.aaa {
    color: #FFFFFF;
    text-align: left;
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
    font-style: normal;
    font-size: 27pt;
    font-weight: bold;
	 display: block;    /* 關鍵：把圖片從行內元素改成區塊元素 */
    margin: 20px auto; /* 關鍵：上下留 20px 距離，左右 auto 就會自動置中 */
    
    max-width: 100%;   /* 額外好習慣：確保圖片太大時，會自動縮小配合螢幕，不會爆出去 */
    height: auto;      /* 讓圖片維持正確的比例不變形 */
		display: block;
    width: 100%;       /* 關鍵：讓圖片寬度永遠填滿外面的容器 (100%) */
    max-width: 100%;   /* 確保不會超出容器 */
    height: auto;      /* 高度自動依比例縮放，圖片才不會扁掉變形 */
    margin: 20px 0;    /* 上下留 20px 距離，左右改成 0（因為已經填滿了，不需要 auto 置中） */
		
	
	
}
/* 基礎樣式：先把超連結預設的底線拿掉，並設定顏色 */
  .bbb {
    text-decoration: none;
    color: #FFFFFF;
    padding-bottom: 5px; /* 留一點空間給底線，畫面比較不擁擠 */
	      font-size: 15pt;
    transition: all 0.3s ease; /* 讓底線出現時有平滑的過渡動畫 */
  }

  /* 當滑鼠游標「懸停」在首頁或關於我們時 */
  .bbb:hover {
	  
    color: red; /* 文字也可以順便變紅色，不想要的話可以刪掉這行 */
  }

  /* 當滑鼠「按下去」的那一刻（Active 狀態）呈現紅色底線 */
  .bbb:active {
	  
    border-bottom: 2px solid red; 
    color: red;
	  }
	.bbb.current {
    color: #FFFFFF;
	border-bottom: 3px solid red; /* 紅色底線，厚度 3px */

    font-weight: bold;            /* 文字加粗（可自由刪除） */
}
.text {
    width: 100%;
    max-width: 1200px;        /* 限制最大寬度 */
    margin: 0 auto;           /* 讓畫面置中 */
    padding: 0 110px;          /* 左右留安全邊距 */
    box-sizing: border-box;
    font-size: 14pt;
    text-align: center;
    display: block;
    width: 100%;       /* 關鍵：讓圖片寬度永遠填滿外面的容器 (100%) */
    max-width: 100%;   /* 確保不會超出容器 */
    height: auto;      /* 高度自動依比例縮放，圖片才不會扁掉變形 */
    margin: 20px 0;    /* 上下留 20px 距離，左右改成 0（因為已經填滿了，不需要 auto 置中） */
    color: #FFFFFF;
}
	.ggg
	{
    display: block;    /* 關鍵：把圖片從行內元素改成區塊元素 */
    margin: 20px auto; /* 關鍵：上下留 20px 距離，左右 auto 就會自動置中 */
    
    max-width: 100%;   /* 額外好習慣：確保圖片太大時，會自動縮小配合螢幕，不會爆出去 */
    height: auto;      /* 讓圖片維持正確的比例不變形 */
		display: block;
    width: 100%;       /* 關鍵：讓圖片寬度永遠填滿外面的容器 (100%) */
    max-width: 100%;   /* 確保不會超出容器 */
    height: auto;      /* 高度自動依比例縮放，圖片才不會扁掉變形 */
    margin: 20px 0;    /* 上下留 20px 距離，左右改成 0（因為已經填滿了，不需要 auto 置中） */
		

}
	.text-bg {
	color: #FFFFFF;
    background-color: #B1B1B1; /* 這裡設定背景顏色（黃色），可換成你喜歡的顏色 */
    max-height: 1000px;
    padding: 10px 8px;/* 上下留 4px，左右留 8px 的空間，背景才不會太擠 */
    border-radius: 4px;        /* 讓背景四個角帶有一點圓角（可選） */
    display: inline-block;     /* 讓背景範圍剛好包住文字就好 */
    width: 40%;        /* 置中的區塊一定要有寬度（可以是 px 或 %） */
    font-size: 20pt;
    display: block;            /* 1. 從 inline-block 改成 block (區塊) */
    margin: 20px auto;         /* 3. 關鍵：上下留 10px 距離，左右 auto 就會自動置中 */
    text-align: left;        /* 4. 確保多行文字時，文字本身也會在裡面置中 */
    font-weight: bold;
    border-left: 12px solid #b95d96; /* 12px是線的粗度，solid是實線，後面是粉紫色色碼 */
    height: auto;      /* 讓圖片維持正確的比例不變形 */
    width: 100%;
    max-width: 970px;        /* 限制最大寬度 */
    margin: 20px auto;           /* 讓畫面置中 */
		
	
		
}
    /* 頁尾的最外層：負責底色與填滿全螢幕寬度 */
.site-footer {
    background-color: #333333; /* 暗灰色背景，頁尾常用的高質感顏色 */
    color: #ffffff;            /* 文字改成白色 */
    width: 100%;
    margin-top: 50px;          /* 與上方內容保持 50px 的舒適距離 */
	
}

/* 頁尾的內層：負責限制文字寬度與置中 */
.footer-content {
    max-width: 1200px;         /* 寬度設定跟你的 .container 一樣 */
    margin: 0 auto;            /* 左右置中 */
    padding: 30px 20px;        /* 上下留 30px 撐開高度，左右留 20px 安全邊距 */
    text-align: center;        /* 讓裡面的版權文字置中 */
    font-size: 14px;           /* 頁尾文字通常比主文字小一點 */
}
	
.fff.red-btn {
    background-color: #ff3b30;   /* 紅色背景 */

	font-size: 14pt;
    color: #ffffff !important;   /* 白色文字（!important 確保文字不會被原本的設定蓋掉） */
    padding: 10px 20px;          /* 上下留 10px，左右留 20px，撐開按鈕 */
    border-radius: 6px;          /* 圓角效果 */
    font-weight: bold;           /* 字體加粗 */
    text-decoration: none;       /* 拿掉原本可能有的底線 */
    display: inline-block;       /* 讓 padding 正常發揮作用 */
    
    /* 陰影與流暢動畫設定 */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    transition: all 0.1s ease;
}

/* 滑鼠移過去的特效 */
.fff.red-btn:hover {
    background-color: #e03228;   /* 紅色稍微變深 */
    color: #ffffff !important;
}

/* 按下去那一刻的特效（下沉 2px） */
.fff.red-btn:active {
    background-color: #c72c22;   /* 紅色變得更深 */
    transform: translateY(2px);  /* 按鈕往下沉 */
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.15); /* 陰影縮小 */
}
	body {
    /* 1. 引入你的背景圖片（請把 url 裡面換成你的圖片檔名或路徑） */
    background-image: url("12.jpg");

    /* 2. 關鍵：讓圖片自動縮放，完美填滿整個螢幕，且不變形 */
    background-size: cover;

    /* 3. 關鍵：讓圖片在螢幕正中央置中 */
    background-position: center center;

    /* 4. 關鍵：固定背景。當滑鼠往下滾動網頁時，背景圖會固定不動，視覺效果非常好 */
    background-attachment: fixed;

    /* 5. 防止圖片因為不夠大而像磁磚一樣重複拼貼 */
    background-repeat: no-repeat;

    /* 6. 安全防護：在圖片還沒載入出來前，先用一個淡淡的底色墊著 */
    background-color: #f5f5f5;

    /* 這是你前面步驟加的，記得保留 */
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
}
</style>
</head>

<body>
<p class=aaa>　味遊台南　&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <a href="001.php" class="bbb">首頁</a>　
	<a href="456.php" class="bbb current">關於我們</a>　
	<a href="456.php" class=bbb>新聞</a>　
	<a href="456.php" class=bbb>新增按鈕</a>  　　　　　　　　      
	<a href="addd.html" class="fff red-btn">評論</a></p>
		
		
   
		
	

</body>
</html>