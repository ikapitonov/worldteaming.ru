<?php include "header.php"; $getURLid = $_GET['id']; ?>
<?php if (empty($getURLid)) {
    echo '<script type="text/javascript">location="index.php"</script>';
} else { 
    if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {
      echo '<script type="text/javascript">location="index.php"</script>';
    } else {
        $sqlCheck = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
        $stmtCheck = $pdo->prepare($sqlCheck);
        $stmtCheck->execute([':parent_id' => $getURLid, ':user_id' => $_SESSION['id'] ]);
        $itemCheck = $stmtCheck->fetchAll(PDO::FETCH_ASSOC); 
        if (!$itemCheck) {
           echo '<script type="text/javascript">location="index.php"</script>';
       }  else { 
            $itemsCheck = $itemCheck[0];
            if ($itemsCheck['verify'] < 2) {
                echo '<script type="text/javascript">location="index.php"</script>'; 
            } else { ?>

 
<?php 

if (empty($_POST['tittle'])) {
    $tittleTEXT = "";
} else {
     $tittleTEXT = $_POST['tittle'];
}
if (empty($_POST['cgComment'])) {
    $cgCommentTEXT = "";
} else {
    $cgCommentTEXT = $_POST['cgComment'];
}
if (empty($_POST['taskText'])) {
    $taskTextTEXT = "";
} else {
    $taskTextTEXT = $_POST['taskText'];
}

$erTittle = ""; $erCg = ""; $erText = "";
if (count($_POST) > 0) {
  if (iconv_strlen($_POST['tittle']) == "") {
    $erTittle = "У задания должно быть название";
  } 
  if (iconv_strlen($_POST['tittle']) < 5) {
    $erTittle = "У задания должно быть нормальное название";
  }
  if ($_POST['cg'] == false && strlen($_POST['tittle']) == "cgComment" ) {
    $erCg = "Если вы не выбрали категорию, то напишите комментарий";
  }
  if ( iconv_strlen($_POST['cg']) > 10 ) {
    $erCg = "Не более 10 пунктов (включая заглавные)";
  }
  if (iconv_strlen($_POST['taskText']) == "") {
    $erText = "Задание необходимо описать";
  }
  if (iconv_strlen($_POST['taskText']) < 30) {
    $erText = "Задание не может быть таким коротким (минимум 30 символов)";
  }
  if ( $erTittle == "" && $erCg == "" && $erText == "" ) {
    
    if ($_POST['cgComment'] == "") {
      $cgComment = "";
    } else { $cgComment = mb_substr(strip_tags($_POST['cgComment']),0,1200); }

    if ($_POST['how'] == "") {
      $sqlCompany = "По договоренности";
    }  else {
        $sqlCompanyPerem = $_POST['how'];
        $sqlCompanyPer = explode("-",(int)$sqlCompanyPerem);
        if ($sqlCompanyPer[0] == "") {
          $sqlCompany = mb_substr($sqlCompanyPer[1],0,2);
        } else {
            $sqlCompany = mb_substr($sqlCompanyPer[0],0,2);
        }
    }

    $sqlTasc = "INSERT INTO startup_forums_task(parent_id,user_id,
                                                count_views,count_comments,count_likes,
                                                tittle,`text`,company,comment,
                                                my_like,status  ) VALUES ( ?,?,?,?,?,?,?,?,?,?,? )";
    $stmtTasc = $pdo->prepare($sqlTasc);
    $stmtTasc->execute([  $getURLid, $_SESSION['id'],0,0,0,
                          mb_substr(htmlspecialchars($_POST['tittle']),0,80), mb_substr(htmlspecialchars($_POST['taskText']),0,3000), 
                          $sqlCompany, $cgComment, 0,0 ]);

    $idOfTask = $pdo->lastInsertId();
    
    if ($_POST['cg']) {
        foreach ($_POST['cg'] as $keyCg => $valueCg) {
          $ArrCg = explode("_", $keyCg);
          if ( $ArrCg[1] == 0 ) {
            $parentIdCg = 0;
            $mainCgTo = $ArrCg[0];
          } else {
            $parentIdCg = $ArrCg[0];
            $mainCgTo = $keyCg;
          }
          $sqlCg = "INSERT INTO startup_task_cg(id,cg,parent_cg) VALUES ( ?,?,? )";
          $stmtCg = $pdo->prepare($sqlCg);
          $stmtCg->execute([ $idOfTask, $mainCgTo, $parentIdCg ]); 
        }
    } ?>
    <script type="text/javascript">location="forum_task_<?php echo $idOfTask; ?>-<?php echo $getURLid; ?>"</script>
<?php  }
}


$sqlStartup = "SELECT id,name FROM startups WHERE id = :id";
$stmtStartup = $pdo->prepare($sqlStartup);
$stmtStartup->execute([':id' => $getURLid]);
$itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
$itemsStartup = $itemStartup[0];

?>             
<title>Новая задача <?php echo " ". $itemsStartup['name']; ?></title>
<link rel="stylesheet" type="text/css" href="static/writeTask/taskWrite.css">
<div class="wrap_with_Fo">

    <form id="wrapper_userStart" method="POST">
        <div id="navbar_startups_forum">
            <div id="navbar_startups_wrap_items">
              <a href="startup-<?php echo $itemsStartup['id']; ?>" id="startups_main_NAME"><?php echo $itemsStartup['name']; ?></a>
              <i class="material-icons">chevron_right</i>
              <a href="" id="startups_main_UNDERNAME">Новая задача</a>
            </div>
        </div>
        <div class="wrapper_userStart_content">
            <h2>Название задачи:</h2>
            <input type="text" name="tittle" placeholder="Заголовок" id="task_tittle" maxlength="80" value="<?php echo $tittleTEXT; ?>">
            <?php if ($erTittle == "") {} else { echo " <div class='formStartupTittle_er'>$erTittle</div>"; } ?>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Краткая информация:</h2>
            <div class="userStart_wrap_table">
                <div class="userStart_wrap_table_item">
                    <h3>Доля от проекта:</h3>
                    <div class="userStart_input_item">
                        <div class="userStart_input_item_wrap">
                            <div class="wrapper_input_how">
                                <input type="number" name="how" id="input_how_wight">
                                <div>%</div>
                            </div>
                            <div class="about_how">По умолчанию: "По договоренности"</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Выберите сферы деятельности к заданию:</h2>
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
                <div style="margin-top: 15px;" class="formSt_er <?php if ($erCg == "") { echo " "."noRedColor"; } else {} ?>">
                  <?php if ($erCg == "") { echo "Не более 10 пунктов (включая заглавные)"; } else { echo $erCg; } ?></div>
                <div class="categories_comment_me_wrap">
                    <h3></h3>
                    <textarea maxlength="1200" name="cgComment" class="userStart_textarea_comments" style="width: 530px; margin-top: 15px; "><?php echo $cgCommentTEXT; ?></textarea>
                    <div class="wrapper_about_this_textarea" style="width: 570px;">
                        <span class="userStart_for_comment">Не более 1200 символов</span>
                        <span class="userStart_for_comment">Необязательно</span>
                    </div>
                </div>
            </div>               
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Опишите суть задания, расскажите как можно подробнее:</h2>
            <textarea maxlength="3000" class="userStart_textarea_comments" style="width: 550px;" name="taskText"><?php echo $taskTextTEXT; ?></textarea>
            <div class="wrapper_about_this_textarea" style="width: 590px;">
                <span class="userStart_for_comment">Не более 3000 символов</span>
                <?php if ($erText == "") { echo "<span class='userStart_for_comment'>Обязательное поле</span>"; }
                                else { echo "<span class='formStartupText_er'>$erText</span>"; }   ?>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_btn_submit">
            <input type="submit" value="Готово!" name="submit">
        </div>
        <script src="static/writeTask/taskWrite.js"></script>
    </form>
    <script type="text/javascript" src="static/main/autosize.js"></script>
    <script type="text/javascript">
        autosize(document.querySelectorAll('textarea'));
    </script>

<?php include "footer.php"; ?>
<?php } } } } ?>
