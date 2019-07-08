<?php include "header.php"; $getURLid = $_GET['id']; ?>
<?php if (empty($getURLid)) {
    echo '<script type="text/javascript">location="index.php"</script>';
} else { 
    if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {
      echo '<script type="text/javascript">location="index.php"</script>';
    } else {


    $sqlIdUser = "SELECT name,lastname,id,formStart FROM users WHERE id=:id";
    $stmtIdUser = $pdo->prepare($sqlIdUser);
    $stmtIdUser->execute([':id' => $getURLid]); 
    $itemIdUser = $stmtIdUser->fetchAll(PDO::FETCH_ASSOC);
    if (!$itemIdUser) {
       echo '<script type="text/javascript">location="index.php"</script>';
    } else {
        $itemsIdUser = $itemIdUser[0];
        if ( $itemsIdUser['id'] != $_SESSION['id'] ) {
          echo '<script type="text/javascript">location="index.php"</script>';
        } else {
            if ($itemsIdUser['formStart'] == 1) { ?>
                 <script type="text/javascript">location="user-<?php echo $LocationToId; ?>"</script>
        <?php } else {
$LocationToId = $itemsIdUser['id'];



$erDate = ""; $erCity = ""; $erLang = ""; $erCg = ""; $erStatus = "";
if (count($_POST) > 0) {
  if (iconv_strlen($_POST['date_user']) < 7 || iconv_strlen($_POST['date_user']) > 25) {
    $erDate = "Нужно указать нормальную дату";
  }
  if (iconv_strlen($_POST['city']) < 2 || iconv_strlen($_POST['city']) > 30 ) {
    $erCity = "Нужно указать нормальный город";
  }
  $checkLang = $_POST['lang'];
  if ( $checkLang[0] == false && $checkLang[1] == false && $checkLang[2] == false && $checkLang[3] == false && $checkLang[4] == false) {
    $erLang = "Укажите хотя бы 1 язык, например, русский :)";
  }
  if (empty($checkLang)) {
    $erLang = "Нужно указать хотя бы 1 язык, например, русский :)";
  }
  if ( $_POST['cg'] == false ) {
    $erCg = "Нужно указать хотя бы 1 пункт";
  }
  if ( $_POST['status'] == "status_not_found") {
    $erStatus = "Укажите статус";
  } 

  if ( $erDate == "" && $erCity == "" && $erLang == "" && $erCg == "" && $erStatus == "") {
    if ($_POST['status'] == "status_1") {
      $statusSql = "Свободен";
    } if ($_POST['status'] == "status_2") {
        $statusSql = "Частично свободен";
      } if ($_POST['status'] == "status_3") {
          $statusSql = "Частично занят";
        } if ($_POST['status'] == "status_4") {
            $statusSql = "Занят";
          }
          $sqlStatic = "INSERT INTO users_static_info(id,status,city,birthday) VALUES ( ?,?,?,? )";
          $stmtStatic = $pdo->prepare($sqlStatic);
          $stmtStatic->execute([ $LocationToId, $statusSql, htmlspecialchars($_POST['city']), htmlspecialchars($_POST['date_user']) ]);

          $sqluserMainq = "UPDATE users SET formStart=:formStart WHERE id=:id";
          $stmtuserMainq = $pdo->prepare($sqluserMainq);
          $itezMe = $_SESSION['id'];
          $stmtuserMainq->execute([ 'formStart' => 1, 'id' => $itezMe ]);

          $sqlLang = "INSERT INTO users_lang(id,lang) VALUES ( ?,? )";
          $stmtLang = $pdo->prepare($sqlLang);
    foreach ($_POST['lang'] as $Lang_key => $langs) {
      if (empty($langs)) {

      } else {
          $stmtLang->execute([ $LocationToId, mb_substr(htmlspecialchars($langs),0,25) ]);
      }
    }
    if ($_POST['cgComment'] == false) {
      $cgComment = "";
    } else {
      $cgComment = $_POST['cgComment'];
    }
    if ($_POST['commentCall'] == "") {
      $commentCall = "С любыми";
    } else {
      $commentCall = $_POST['commentCall'];
    }
    $sqlText = "INSERT INTO users_text(id,callback,about_cg) VALUES ( ?,?,? )";
    $stmtText = $pdo->prepare($sqlText );
    $stmtText->execute([ $LocationToId, mb_substr(htmlspecialchars($commentCall),0,1200), mb_substr(htmlspecialchars($cgComment),0,1200) ]);


    $sqlCg = "INSERT INTO users_want_cg(id,cg,parent_cg) VALUES ( ?,?,? )";
    $stmtCg = $pdo->prepare($sqlCg);
    foreach ($_POST['cg'] as $keyCg => $valueCg) {
      $ArrCg = explode("_", $keyCg);
      if ( $ArrCg[1] == 0 ) {
        $parentIdCg = 0;
        $mainCgTo = $ArrCg[0];
      } else {
        $parentIdCg = $ArrCg[0];
        $mainCgTo = $keyCg;
      }
      $stmtCg->execute([ $LocationToId, $mainCgTo, $parentIdCg ]); 
    }
    $sqlnetwork = "INSERT INTO users_network(id,network,url) VALUES ( ?,?,? )";
        $stmtnetwork = $pdo->prepare($sqlnetwork);
    foreach (array_combine($_POST['networkName'],$_POST['networkUrl']) as $networkNameSql => $networkUrlSql) {
      if (empty($networkNameSql) || empty($networkUrlSql)) {
        
      } else {
        $stmtnetwork->execute([ $LocationToId, mb_substr(htmlspecialchars($networkNameSql),0,30), mb_substr($networkUrlSql,0,100) ]); 
      }
    }
    $sqlCall = "INSERT INTO users_call(id,name,contact) VALUES ( ?,?,? )";
    $stmtCall = $pdo->prepare($sqlCall);
    foreach (array_combine($_POST['CallName'],$_POST['CallContact']) as $CallNameSql => $CallContactSql) {
      if (empty($CallNameSql) || empty($CallContactSql)) {
        
      } else {
        $stmtCall->execute([ $LocationToId, mb_substr(htmlspecialchars($CallNameSql),0,30), mb_substr(htmlspecialchars($CallContactSql),0,30) ]); 
      }
    }

  } ?>
  <script type="text/javascript">location="user-<?php echo $LocationToId; ?>"</script>
<?php } ?>

    <title>Информация о себе</title>
    <link rel="stylesheet" type="text/css" href="static/formStart/formStart.css">
<div class="wrap_with_Fo">
    <form id="wrapper_userStart" method="POST">
        <div id="wrapper_userStart_h1">
            <h1>Привет,<strong class="nameCSS namesHidden"><?php echo " ". $itemsIdUser['name'] . " "  .$itemsIdUser['lastname'];?></strong>!</h1>
            <span>Это не резюме и не портфолию - это желания и предпочтения.</span>
        </div>
        <div class="clearBottom"></div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Краткая информация:</h2>
            <div class="userStart_wrap_table">
                <div class="userStart_wrap_table_item">
                    <h3>Статус:</h3>
                    <div class="userStart_input_item">
                        <div class="custom-select">
                            <select name="status">
                                <option value="status_not_found">Выберете:</option>
                                <option value="status_1">Свободен</option>
                                <option value="status_2">Частично свободен</option>
                                <option value="status_3">Частично занят</option>
                                <option value="status_4">Занят</option>
                            </select>
                        </div>
                    </div>                   
                </div>
                <div class="formSt_er"><?php echo $erStatus; ?></div>
                <div class="userStart_wrap_table_item">
                    <h3>Дата рождения:</h3>
                    <div class="userStart_input_item">
                        <input type="date" name="date_user"
                                           min="1920-01-01" max="2018-12-31">
                    </div>
                </div>
                <div class="formSt_er"><?php echo $erDate; ?></div>
                <div class="userStart_wrap_table_item">
                    <h3>Город:</h3>
                    <div class="userStart_input_item">
                        <input type="text" name="city" maxlength="30">
                    </div>
                </div>
                <div class="formSt_er"><?php echo $erCity; ?></div>
                <div class="userStart_wrap_table_item">
                    <h3>Языки:</h3>
                    <div class="userStart_input_item">
                        <div class="userStart_input_item_wrap" id="lang_append_for_add">
                            <input type="text" name="lang[0]" id="userStart_input_lang_0" value="Русский" maxlength="25">
                        </div>
                        <div class="btn_add_inputs_wrap" id="lang_no_more">
                            <div class="btn_add_inputs" id="btn_add_lang">Добавить поле</div>
                            <span>Больше добавить нельзя</span>
                        </div>
                    </div>
                </div>
                <div class="formSt_er"><?php echo $erLang; ?></div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Желаемые сферы деятельности. Что хотелось бы делать?</h2>
            <div class="userStart_categoriesMains_wrap">
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[1_0]" id="categories_main1" class="CGMAIN">
                    <label for="categories_main1" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Программирование
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_1]" id="cg1_1">
                        <label for="cg1_1">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Лендинги (одностраничные сайты)</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_2]" id="cg1_2">
                        <label for="cg1_2">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Сайты</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_3]" id="cg1_3">
                        <label for="cg1_3">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Мобильные приложения</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_4]" id="cg1_4">
                        <label for="cg1_4">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Боты</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_5]" id="cg1_5">
                        <label for="cg1_5">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Прототипирование</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_6]" id="cg1_6">
                        <label for="cg1_6">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Парсинг сайтов</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_7]" id="cg1_7">
                        <label for="cg1_7">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Разработка игр </div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_8]" id="cg1_8">
                        <label for="cg1_8">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Десктопное ПО</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_9]" id="cg1_9">
                        <label for="cg1_9">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Плагины</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_10]" id="cg1_10">
                        <label for="cg1_10">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">1С программирование</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_11]" id="cg1_11">
                        <label for="cg1_11">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Другое</div>
                        </label>
                    </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[2_0]" id="categories_main2" class="CGMAIN">
                    <label for="categories_main2" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Дизайн
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_1]" id="cg2_1">
                        <label for="cg2_1">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Сайты (Веб дизайн)</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_2]" id="cg2_2">
                        <label for="cg2_2">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Логотипы</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_3]" id="cg2_3">
                        <label for="cg2_3">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Иконки</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_4]" id="cg2_4">
                        <label for="cg2_4">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Рисунки и иллюстрации</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_5]" id="cg2_5">
                        <label for="cg2_5">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Мобильные приложения</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_6]" id="cg2_6">
                        <label for="cg2_6">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Полиграфия (шрифты)</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_7]" id="cg2_7">
                        <label for="cg2_7">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Баннеры</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_8]" id="cg2_8">
                        <label for="cg2_8">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Векторная граффика</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_9]" id="cg2_9">
                        <label for="cg2_9">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">3D</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_10]" id="cg2_10">
                        <label for="cg2_10">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Анимации (включая игры)</div>
                        </label>
                    </div>
                   <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_11]" id="cg2_11">
                        <label for="cg2_11">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Другое</div>
                        </label>
                    </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[3_0]" id="categories_main3" class="CGMAIN">
                    <label for="categories_main3" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Тестирование
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[3_1]" id="cg3_1">
                        <label for="cg3_1">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Сайты</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[3_2]" id="cg3_2">
                        <label for="cg3_2">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Мобильные приложения</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[3_3]" id="cg3_3">
                        <label for="cg3_3">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Десктопное ПО</div>
                        </label>
                    </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[4_0]" id="categories_main4" class="CGMAIN">
                    <label for="categories_main4" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Тексты
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_1]" id="cg4_1">
                            <label for="cg4_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Копирайт (написание)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_2]" id="cg4_2">
                            <label for="cg4_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Рерайт (правки)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_3]" id="cg4_3">
                            <label for="cg4_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Статьи, новости, посты</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_4]" id="cg4_4">
                            <label for="cg4_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Рефераты, курсовые, дипломы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_5]" id="cg4_5">
                            <label for="cg4_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Сценарии</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_6]" id="cg4_6">
                            <label for="cg4_6">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Резюме</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_7]" id="cg4_7">
                            <label for="cg4_7">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Техническое задание</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_8]" id="cg4_8">
                            <label for="cg4_8">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Отзывы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_9]" id="cg4_9">
                            <label for="cg4_9">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Калиграфия</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_10]" id="cg4_10">
                            <label for="cg4_10">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[5_0]" id="categories_main5" class="CGMAIN">
                    <label for="categories_main5" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Переводы 
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_1]" id="cg5_1">
                            <label for="cg5_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Тексты общей тематики</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_2]" id="cg5_2">
                            <label for="cg5_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Тексты узкой специализации</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_3]" id="cg5_3">
                            <label for="cg5_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Устные переводы</div>
                            </label>
                        </div>
                         <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_4]" id="cg5_4">
                            <label for="cg5_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Выездные переводы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_5]" id="cg5_5">
                            <label for="cg5_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[6_0]" id="categories_main6" class="CGMAIN">
                    <label for="categories_main6" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Маркетинг
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_1]" id="cg6_1">
                            <label for="cg6_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">SMM (социальные сети)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_2]" id="cg6_2">
                            <label for="cg6_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">SEO (поисковая выдача)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_3]" id="cg6_3">
                            <label for="cg6_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Контекстная реклама</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_4]" id="cg6_4">
                            <label for="cg6_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Продажа и генерация лидов </div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_5]" id="cg6_5">
                            <label for="cg6_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Исследование рынка и опросы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_6]" id="cg6_6">
                            <label for="cg6_6">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name=cg[7_0] id="categories_main7" class="CGMAIN">
                    <label for="categories_main7" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Фотография
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_1]" id="cg7_1">
                            <label for="cg7_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Обработка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_2]" id="cg7_2">
                            <label for="cg7_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Выездная фотосъемка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_3]" id="cg7_3">
                            <label for="cg7_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Тематическое</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_4]" id="cg7_4">
                            <label for="cg7_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[8_0]" id="categories_main8" class="CGMAIN">
                    <label for="categories_main8" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Видео
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_1]" id="cg8_1">
                            <label for="cg8_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Монтаж и обработка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_2]" id="cg8_2">
                            <label for="cg8_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Написание субтитров</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_3]" id="cg8_3">
                            <label for="cg8_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Расскадровка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_4]" id="cg8_4">
                            <label for="cg8_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание видеоинфографики</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_5]" id="cg8_5">
                            <label for="cg8_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[9_0]" id="categories_main9" class="CGMAIN">
                    <label for="categories_main9" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Аудио и музыка
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_1]" id="cg9_1">
                            <label for="cg9_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Обработка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_2]" id="cg9_2">
                            <label for="cg9_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Запись</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_3]" id="cg9_3">
                            <label for="cg9_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание звуков</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_4]" id="cg9_4">
                            <label for="cg9_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание с нуля</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_5]" id="cg9_5">
                            <label for="cg9_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[10_0]" id="categories_main10" class="CGMAIN">
                    <label for="categories_main10" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Бухгалтерия
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_1]" id="cg10_1">
                            <label for="cg10_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Ведение бухгалтерии</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_2]" id="cg10_2">
                            <label for="cg10_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Формирование отчетности</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_3]" id="cg10_3">
                            <label for="cg10_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Оптимизация</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_4]" id="cg10_4">
                            <label for="cg10_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность </div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_5]" id="cg10_5">
                            <label for="cg10_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[11_0]" id="categories_main11" class="CGMAIN">
                    <label for="categories_main11" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Юриспруденция
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_1]" id="cg11_1">
                            <label for="cg11_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Составление документации</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_2]" id="cg11_2">
                            <label for="cg11_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Консультирование</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_3]" id="cg11_3">
                            <label for="cg11_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_4]" id="cg11_4">
                            <label for="cg11_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[12_0]" id="categories_main12" class="CGMAIN">
                    <label for="categories_main12" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Журналистика
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_1]" id="cg12_1">
                            <label for="cg12_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Интервью</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_2]" id="cg12_2">
                            <label for="cg12_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Новости, статьи, репортажи</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_3]" id="cg12_3">
                            <label for="cg12_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность </div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_4]" id="cg12_4">
                            <label for="cg12_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[13_0]" id="categories_main13" class="CGMAIN">
                    <label for="categories_main13" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Архитектура
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_1]" id="cg13_1">
                            <label for="cg13_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание плана</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_2]" id="cg13_2">
                            <label for="cg13_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">3D макет</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_3]" id="cg13_3">
                            <label for="cg13_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Макет</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_4]" id="cg13_4">
                            <label for="cg13_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Ландшафтный дизайн</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_5]" id="cg13_5">
                            <label for="cg13_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Интерьер</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_6]" id="cg13_6">
                            <label for="cg13_6">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_7]" id="cg13_7">
                            <label for="cg13_7">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[14_0]" id="categories_main14" class="CGMAIN">
                    <label for="categories_main14" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Инженерия 
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_1]" id="cg14_1">
                            <label for="cg14_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Чертежи, схемы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_2]" id="cg14_2">
                            <label for="cg14_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Проектирование</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_3]" id="cg14_3">
                            <label for="cg14_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Конструкции</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_4]" id="cg14_4">
                            <label for="cg14_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_5]" id="cg14_5">
                            <label for="cg14_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[15_0]" id="categories_main15" class="CGMAIN">
                    <label for="categories_main15" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Менеджмент 
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_1]" id="cg15_1">
                            <label for="cg15_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Администрирование</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_2]" id="cg15_2">
                            <label for="cg15_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Подбор людей</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_3]" id="cg15_3">
                            <label for="cg15_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Менеджер проекта</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_4]" id="cg15_4">
                            <label for="cg15_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Менеджер по продажам</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_5]" id="cg15_5">
                            <label for="cg15_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">PR-менеджер</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_6]" id="cg15_6">
                            <label for="cg15_6">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 15px;" class="formSt_er"><?php echo $erCg; ?></div>
                <div class="categories_comment_me_wrap">
                    <h3>Комментарий к сферам деятельности:</h3>
                    <textarea name="cgComment" class="userStart_textarea_comments" style="width: 530px;" maxlength="1200"></textarea>
                    <span class="userStart_for_comment">Необязательно</span>
                </div>
            </div>               
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>С какими предложениями обращаться?</h2>
            <textarea class="userStart_textarea_comments" style="width: 550px;" name="commentCall" maxlength="1200"></textarea>
            <span class="userStart_for_comment">По умолчанию: "С любыми"</span>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Средства связи:</h2>
            <div class="userStart_callback_inputs_wrapper">
                <div class="userStart_callback_inputs" id="userStart_callback_append">
                    <div class="userStart_callback_inputs_item2" id="userStart_callback_inputs_item2_0">
                        <input type="text" name="CallName[0]" placeholder="Название" maxlength="30">
                        <input type="text" name="CallContact[0]" placeholder="Контакт" maxlength="30">
                    </div>
                </div>
                <div class="btn_add_inputs_wrap" id="btn_add_inputs_callback_span">
                    <div class="btn_add_inputs" id="create_callback_inputs">Добавить поле</div>
                    <span>Больше добавить нельзя</span>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Ссылки на социальные сети:</h2>
            <div class="userStart_callback_inputs_wrapper">
                <div class="userStart_callback_inputs" id="create_netword_inputs_append">
                    <div class="userStart_callback_inputs_item2" id="userStart_callback_inputs_item2_first" style="margin-top: 0;">
                        <input type="text" name="networkName[0]" placeholder="Название соц сети" maxlength="30">
                        <input type="url" name="networkUrl[0]" placeholder="Прямая ссылка" maxlength="30">
                    </div>
                </div>
                <div class="btn_add_inputs_wrap" id="btn_add_inputs_network_span">
                    <div class="btn_add_inputs" id="create_netword_inputs">Добавить поле</div>
                    <span>Больше добавить нельзя</span>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_btn_submit">
            <input type="submit" value="Готово!" name="submit" class="btn_submitMain"> 
        </div>
        <script src="static/formStart/formStart.js"></script>
        <script type="text/javascript" src="static/main/autosize.js"></script>
        <script type="text/javascript">
            autosize(document.querySelectorAll('textarea'));
        </script>
    </form>

<?php include "footer.php"; ?>
<?php } } } } }  ?>
