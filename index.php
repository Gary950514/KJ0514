<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>娛樂討論區</title>
    
  <style type="text/css">
  div {
	height: 600px;
	padding-right: 0pt;
	border-radius: 78px;
	border-style: dotted;
	padding-bottom: auto;
	padding-top: auto;
	margin-bottom: 56px;
	margin-left: auto;
	margin-right: auto;
}
	  .container {
  width: 90%;
  max-width: 420px;
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.35);
}

/* ===== 標題 ===== */
.container h1 {
  text-align: center;
  margin-bottom: 24px;
  font-size: 2rem;
  letter-spacing: 1px;
}

/* ===== 輸入框 ===== */
.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  margin-bottom: 8px;
  color: #cbd5e1;
  font-size: 0.95rem;
}

.input-group input {
  width: 100%;
  padding: 14px;
  border: none;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.12);
  color: white;
  font-size: 1rem;
  outline: none;
  transition: 0.3s ease;
}

.input-group input:focus {
  background: rgba(255, 255, 255, 0.18);
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.4);
}
  </style>
  </head>
  <body>
<p align="center"><img src="fig.png" style="width: 400px; height: auto;"></p>
	  
    <?php
      require_once("dbtools.inc.php");
			
      //指定每頁顯示幾筆記錄
      $records_per_page = 5;
			
      //取得要顯示第幾頁的記錄
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
				
      //建立資料連接
      $link = create_connection();
					
      //執行SQL查詢
      $sql = "SELECT id, author, subject, date FROM message ORDER BY date DESC";
      $result = execute_sql($link, "news", $sql);
				
      //取得記錄數
      $total_records = mysqli_num_rows($result);
			
      //計算總頁數
      $total_pages = ceil($total_records / $records_per_page);
			
      //計算本頁第一筆記錄的序號
      $started_record = $records_per_page * ($page - 1);
			
      //將記錄指標移至本頁第一筆記錄的序號
      mysqli_data_seek($result, $started_record);

      
			
      //使用 $bg 陣列來儲存表格背景色彩
      $bg[0] = "#D9D9FF";
      $bg[1] = "#FFCAEE";
      $bg[2] = "#FFFFCC";
      $bg[3] = "#B9EEB9";
      $bg[4] = "#B9E9FF";					
	  
      //顯示記錄
      $j = 1;
      while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page)
      {
        echo "<div class=container>";
        echo "<p><img src='" . mt_rand(0, 9) . ".gif'></p>";
        echo "<p><h2>作者：" . $row["author"] . "</h2></p>";
        echo "<p>主題：" . $row["subject"] . "</p>";
        echo "<p>時間：" . $row["date"] . "</p><hr>";
        echo "<p><a href='show_news.php?id=";
        echo $row["id"] . "'>閱讀與加入討論</a></p>";
		echo "</div>";				
        $j++;
      }
      
			
      //產生導覽列
      echo "<p align='center'>";
			
      if ($page > 1)
        echo "<a href='index.php?page=". ($page - 1) . "'>上一頁</a> ";
				
      for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='index.php?page=$i'>$i</a> ";		
      }
			
      if ($page < $total_pages)
        echo "<a href='index.php?page=". ($page + 1) . "'>下一頁</a> ";			
				
      echo "</p>";
			
      //釋放記憶體空間
      mysqli_free_result($result);
      mysqli_close($link);
    ?> 		
    <hr>
    <!- 顯示輸入新留言表單 -->
   
  </body>
</html>