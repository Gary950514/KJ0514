<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>味遊台南 - 神農街導覽</title>
<style type="text/css">
    /* ==========================================
       【僅修改最上面的按鈕列】精準套用上一頁風格
       ========================================== */
.aaa {
    /* rgb(74, 59, 50) 是深棕色，最後的 0.85 代表 85% 的透明度 */
    background-color: rgba(74, 59, 50, 0.85); 
    padding: 1.5rem 2rem;  
    display: flex !important;                  
    justify-content: space-between; 
    align-items: center;            
    color: #FFFFFF;                /* 【注意】字體改成白色 */
    font-family: Cambria, "Times New Roman", serif;
    font-size: 24pt;                
    font-weight: bold;
    margin: 0;
    width: 100%;
	box-sizing: border-box;
}

    /* 新增：包裹右邊按鈕的橫向容器（必備，否則按鈕會散開） */
    .nav-links {
        display: flex;
        align-items: center;
        gap: 25px;                      /* 自動生成 25px 完美按鈕間距，拋棄 nbsp */
    }

.bbb {
    text-decoration: none;
    color: #FFFFFF;                /* 改回白色 */
    padding-bottom: 5px; 
    font-size: 13pt;
    font-weight: 500;
    transition: all 0.3s ease; 
    border-bottom: 2px solid transparent;
}
.bbb:hover {
    color: #FF8D85;                /* 懸停時改成較亮的紅 */
    border-bottom: 2px solid #FF8D85; 
}
.bbb.current {
    color: #FF8D85;
    border-bottom: 3px solid #FF8D85;
    font-weight: bold;
}

    .bbb:active {
        border-bottom: 2px solid #A64438; 
        color: #A64438;
    }

    /* 評論膠囊按鈕 */
    .fff.red-btn {
        background-color: #A64438;     /* 改為與上一頁相同的古典硃砂紅 */
        font-size: 11pt;
        color: #ffffff !important;     
        padding: 8px 20px;          
        border-radius: 30px;            /* 修改：變更為精緻的全圓角膠囊型 */
        font-weight: bold;           
        text-decoration: none;       
        display: inline-block;       
        box-shadow: 0 4px 10px rgba(166, 68, 56, 0.2);
        transition: all 0.2s ease;
    }

    .fff.red-btn:hover {
        background-color: #8C352B;     /* 懸停時變深紅 */
        transform: translateY(-1px);
    }


    /* ==========================================
       【其餘原本網頁的樣式】100% 完整保留，完全不動
       ========================================== */
	.center-img {
        display: block;    
        margin: 20px auto; 
        max-width: 100%;   
        height: auto;      
    }
	
    .container {
        color: #FFFFFF;
        width: 100%;
        max-width: 1200px;        
        margin: 0 auto;           
        padding: 0 20px;          
        box-sizing: border-box;
        font-size: 27pt;
        font-weight: bold;
        text-align: center;
    }

.text {
    width: 100%;
    max-width: 1200px;        /* 限制最大寬度 */
    margin: 20px auto;        /* 讓畫面區塊置中 */
    padding: 0 110px;         /* 左右留安全邊距 */
    box-sizing: border-box;
    font-size: 14pt;
    text-align: center;       /* 關鍵：文字全部居中對齊 */
    display: block;
    height: auto;      
    color: #FFFFFF;           /* 白色文字 */
}
	.ggg {
        display: block;    
        margin: 20px auto; 
        max-width: 100%;   
        height: auto;      
        width: 100%;       
    }

	.text-bg {
        color: #FFFFFF;
        background-color: #B1B1B1; 
        max-height: 1000px;
        padding: 10px 8px;
        border-radius: 4px;        
        font-size: 20pt;
        display: block;            
        text-align: left;        
        font-weight: bold;
        border-left: 12px solid #b95d96; 
        height: auto;      
        width: 100%;
        max-width: 970px;        
        margin: 20px auto;           
    }

    .site-footer {
        background-color: #333333; 
        color: #ffffff;            
        width: 100%;
        margin-top: 50px;          
    }

    .footer-content {
        max-width: 1200px;         
        margin: 0 auto;            
        padding: 30px 20px;        
        text-align: center;        
        font-size: 14px;           
    }
	
    body {
        background-image: url("001/12.jpg");
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-color: #f5f5f5;
        margin: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
</style>
</head>

<body>
	
    <header class="aaa">
        <div>味遊台南</div>
        <nav class="nav-links">
            <a href="home.php" class="bbb">首頁</a>
            <a href="002.php" class="bbb">關於我們</a>
            <a href="456.php" class="bbb">新聞</a>
            <a href="456.php" class="bbb">新增按鈕</a>
            <a href="addd.html" class="fff red-btn">評論</a>
        </nav>
    </header>

<br>
<br>
<br>
<br>

	<p class="container">台南旅遊景點推薦｜【神農街】超夯文創老街！到訪台南旅遊不可錯過的必逛景點，值得細細品味的特色文創，每個小店都藏著滿滿的驚喜！</p>
	<img class="center-img" src="001/01.jpg" width="1000" height="1200" alt="" />
	
    <p class="text">今天要帶大家走訪的是台南保留老宅風格的「神農老街」<br>
    到了台南除了品嚐小吃美食，不可錯過的還有熱門的文青打卡景點，以及超夯的文創老街<br>
    像是充斥濃厚懷舊復古氛圍的「神農街」，也是到訪台南旅遊不可錯過的必逛景點<br>
    結合了古蹟歷史的建築和在地傳統文化，古都特色鮮明，吃喝玩樂選擇多元，還充滿著台南人獨有的濃厚人情味<br>
    每個小店都能發掘特色文創，有些是傳承下來的工藝技術，也有些是新舊文化激盪出的創意結合<br>
    每個角落都值得路過的旅人放慢腳步，細細品味，感受台南特有的風格特色，一起來場文青旅行吧</p>
    <br><br><br>

	<p class="text-bg">❝ 老街古宅融合特色文創—神農街 ❞</p><br>

	<img class="center-img" src="001/02.jpg" width="1000" height="1200" alt="" />
	<p class="text">
		古色古香的老宅街道裡，有住家、文創小店、民宿...等，保留了傳統歷史與創新的結合<br>
		復古懷舊與現代的交錯感，別有一番風味，更是近幾年超夯的必逛文創聖地<br>
		許多文創小店都自有不同的特色，很值得放下腳步，慢慢悠晃，去享受這樣獨特的氛圍</p>
	<img class="center-img" src="001/03.jpg" width="1000" height="1200" alt="" />
	<img class="center-img" src="001/04.jpg" width="1000" height="1200" alt="" />	
	<p class="text">「神農文創市集」內展售了各式文創小物，很值得來挖寶<br>
    雖然市集佔地不大，卻很溫暖，每個攤位的老闆都很親切，能感受到台南人的熱情與濃厚的人情味<br>
    就算只是短暫的佇足閒晃，也讓人倍感放鬆，很舒服的氛圍感～～觀</p>
	<img class="center-img" src="001/05.jpg" width="1000" height="1200" alt="" />	
	<p class="text">市集走到底，還能欣賞懷舊感的文創古物，各式擺件看起來都充滿濃厚的懷舊氛圍</p>
	<img class="center-img" src="001/06.jpg" width="1000" height="1200" alt="" />	
	<img class="center-img" src="001/07.jpg" width="1000" height="1200" alt="" />	
	<img class="center-img" src="001/08.jpg" width="1000" height="1200" alt="" />	
	<p class="text">每間小店都各有特色，同時也帶出了新的氣息，讓老宅街道有了新的年輕的生命力<br>
    新舊並存激盪出的特色，也是台南最美最具文化特色的風景，讓人忍不住想多看多感受這迷人的魅力</p>
	<img class="center-img" src="001/09.jpg" width="1000" height="1200" alt="" />	
	<img class="center-img" src="001/10.jpg" width="1000" height="1200" alt="" />	
	<img class="center-img" src="001/11.jpg" width="1000" height="1200" alt="" />	
    <p class="text">夜晚神農街更會擺退白天的文青氣息，搖身變成不夜城，小巷內滿滿都是特色酒吧<br>
    到訪台南旅遊不可錯過的必逛景點，每次到訪光臨都能有不一樣的感受與驚喜，絕對滿足相機也滿足心靈的享受<br>
    藏著滿滿的驚喜！很值得細細品味的特色文創與文化激盪</p>
	
    <footer class="site-footer">
        <div class="footer-content">
            <p>© 2026 味遊台南 版權所有 | 聯絡我們：service@stust.edu.tw <br>
			作者：4B3F0001 王凱均　4B3F0056張馨</p>
        </div>
    </footer>
</body>
</html>