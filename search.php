<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<meta name="description" content="" >
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">
<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="" />
<?php
$loc_href = '.';
$inc_path = $_SERVER["DOCUMENT_ROOT"].'/assets';
$com_href = '/assets';

include $inc_path .'/inc/head.php';
?>
<body>
<div class="container">
  <?php include $inc_path .'/inc/side_left.php';?>
  <div class="content">
    <?php include $inc_path .'/inc/header.php';?>



<div class="tabs">
      <input id="all" type="radio" name="tab_item" checked>
      <label class="tab_item" for="all">店舗検索</label>
      <input id="programming" type="radio" name="tab_item">
      <label class="tab_item" for="programming">女性検索</label>

<div class="tab_content" id="all_content">

  <div class="search-container">
    <div class="search-wrapper">
      <input type="text" class="search-input" placeholder="店舗名">
      <button class="search-button">検索</button>
    </div>
  </div>



  <ul class="talk-list_search">
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">店舗名</a>
      </h3>
      <p class="talk-last-message">エリア名
      </p>
      <span class="talk-timestamp">最終更新時間:20:48 </span>
    </div>
  </li>
  <!-- 他のトークの項目も同様に追加する -->
  </ul>



</div>
<!-- tab -->
<div class="tab_content" id="programming_content">


    <div class="search-container">
      <div class="search-wrapper">
        <input type="text" class="search-input" placeholder="女性名">
        <button class="search-button">検索</button>
      </div>
    </div>


  <div class="container_photo">
    <div class="grid-item_photo">
      <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
      </a>
      <p class="at_name">名前 / 年齢</p>
    </div>
    <div class="grid-item_photo">
      <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
      </a>
      <p class="at_name">名前 / 年齢</p>
    </div>
    <div class="grid-item_photo">
      <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
      </a>
      <p class="at_name">名前 / 年齢</p>
    </div>
    <div class="grid-item_photo">
      <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
      </a>
      <p class="at_name">名前 / 年齢</p>
    </div>
    <div class="grid-item_photo">
      <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
      </a>
      <p class="at_name">名前 / 年齢</p>
    </div>
    <div class="grid-item_photo">
      <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
      </a>
      <p class="at_name">名前 / 年齢</p>
    </div>
    <div class="grid-item_photo">
      <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
      </a>
      <p class="at_name">名前 / 年齢</p>
    </div>
</div>



</div>
<!-- tab -->
</div>
<!-- tabs -->

  <?php include $inc_path .'/inc/footer_menu.php';?>
</div>
<!-- content -->
<?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
