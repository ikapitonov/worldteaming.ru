<?php include "header.php";
if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) { 
  echo '<script type="text/javascript">location="signup"</script>'; 
} else { 

    $sqlCountStart = "SELECT verify FROM startup_verify_users 
                              WHERE user_id=:user_id AND verify=:verify AND creater=:creater";
    $stmtCountStart = $pdo->prepare($sqlCountStart);
    $stmtCountStart->execute([':user_id' => $_SESSION['id'], ':verify' => 3, ':creater' => 1 ]);
    $itemCountStart = $stmtCountStart->fetchAll(PDO::FETCH_ASSOC); 

    if ($itemCountStart) {
      $CountStart = count($itemCountStart);
    } else {
        $CountStart = 0;
    }
    if ($CountStart > 5) {
        echo '<script type="text/javascript">location="index.php"</script>';
    } else {
?>



<?php 

$nameEr = ""; $statusEr = ""; $typeEr = ""; $ideaEr = ""; $purposeEr = ""; $problemsEr = ""; $philosophyEr = "";$area_st="";
if (count($_POST) > 0) {
  
  if (empty($_POST['startup'])) {
    $nameEr = "Придумайте название стартапа";
  } 
  if ($_POST['status'] == "not_found_0") {
    $statusEr = "Укажите статус стартапа";
  }
  if ($_POST['Main_categ'] == "not_found_1" ) {
    $typeEr = "Укажите вид деятельности";
  }
  if (empty($_POST['textarea_idea'])) {
    $ideaEr = "Опишите идею стартапа";
  }
  if (empty($_POST['textarea_purpose'])) {
    $purposeEr = "Опишите цель стартапа";
  }
  if (empty($_POST['textarea_problems'])) {
    $problemsEr = "Опишите проблемы, которые решает стартап";
  }
  if (empty($_POST['textarea_philosophy'])) {
    $philosophyEr = "Опишите философию стартапа";
  }
  if ($_POST['area_st'] == "not_found_2") {
    $areaEr = "Выберете отрасль деятельности";
  }


  if ($nameEr==""&&$statusEr==""&&$typeEr==""&&$ideaEr==""&&$purposeEr==""&&$problemsEr==""&&$philosophyEr==""&&$area_st=="") {
    if ($_POST['status'] == "status_1") {
      $statusSql = "Новый проект";
    } if ($_POST['status'] == "status_2") {
        $statusSql = "Развивающийся проект";
      } if ($_POST['status'] == "status_3") {
          $statusSql = "Действующий стартап";
        } if ($_POST['status'] == "status_4") {
            $statusSql = "Компания";
          }
  if ($_POST['Main_categ'] == "categ_1") {
      $categSql = "Производство";
    } if ($_POST['Main_categ'] == "categ_2") {
        $categSql = "Торговля";
      } if ($_POST['Main_categ'] == "categ_3") {
          $categSql = "Финансы/страхование";
        } if ($_POST['Main_categ'] == "categ_4") {
            $categSql = "Агенство";
          }


  if ($_POST['area_st'] == "area_1") {
    $areaSql = "Автомобильный бизнес";
  } elseif ($_POST['area_st'] == "area_2") {
    $areaSql = "Гостиницы, рестораны";
  } elseif ($_POST['area_st'] == "area_3") {
    $areaSql = "Государственная деятельность";
  } elseif ($_POST['area_st'] == "area_4") {
    $areaSql = "Дизайн, проектирование";
  } elseif ($_POST['area_st'] == "area_5") {
    $areaSql = "Добывающая отрасль";
  } elseif ($_POST['area_st'] == "area_6") {
    $areaSql = "Исскуство, культура";
  } elseif ($_POST['area_st'] == "area_7") {
    $areaSql = "ИТ, интернет";
  } elseif ($_POST['area_st'] == "area_8") {
    $areaSql = "Кино, СМИ,Продюсирование";
  } elseif ($_POST['area_st'] == "area_9") {
    $areaSql = "Лесная промышленность";
  } elseif ($_POST['area_st'] == "area_10") {
    $areaSql = "Маркетинг, реклама, PR";
  } elseif ($_POST['area_st'] == "area_11") {
    $areaSql = "Медицина";
  } elseif ($_POST['area_st'] == "area_12") {
    $areaSql = "Недвижимость, аренда";
  } elseif ($_POST['area_st'] == "area_13") {
    $areaSql = "Оптовая торговля";
  } elseif ($_POST['area_st'] == "area_14") {
    $areaSql = "Образование";
  } elseif ($_POST['area_st'] == "area_15") {
    $areaSql = "Перевозки, логистика";
  } elseif ($_POST['area_st'] == "area_16") {
    $areaSql = "Продукты питания";
  } elseif ($_POST['area_st'] == "area_17") {
    $areaSql = "Розничная торговля";
  } elseif ($_POST['area_st'] == "area_18") {
    $areaSql = "Сельское хозяйство";
  } elseif ($_POST['area_st'] == "area_19") {
    $areaSql = "Строительство, проектирование";
  } elseif ($_POST['area_st'] == "area_20") {
    $areaSql = "Товары потребления (непищевые)";
  } elseif ($_POST['area_st'] == "area_21") {
    $areaSql = "Услуги для бизнеса, B2B";
  } elseif ($_POST['area_st'] == "area_22") {
    $areaSql = "Услуги для населения";
  } elseif ($_POST['area_st'] == "area_23") {
    $areaSql = "Финансовый сектор";
  } elseif ($_POST['area_st'] == "area_24") {
    $areaSql = "Химическое производство";
  } elseif ($_POST['area_st'] == "area_25") {
    $areaSql = "Электроника, техника";
  } elseif ($_POST['area_st'] == "area_26") {
    $areaSql = "Энергетика";
  }
 

          $sqlStartups = "INSERT INTO startups(name,status,type,area,people,views) VALUES ( ?,?,?,?,?,? )";
          $stmtStartups = $pdo->prepare($sqlStartups);
          $stmtStartups->execute([ ucfirst(mb_substr(strip_tags($_POST['startup']),0,40)), $statusSql, $categSql, $areaSql, 1, 0 ]);

    $idStartup = $pdo->lastInsertId();
    

    $sqlStartups_txt = "INSERT INTO startups_text(parent_id,
                                                  idea,
                                                  purpose,
                                                  problems,
                                                  philosophy,
                                                  comment) 
                                                  VALUES ( ?,?,?,?,?,? )";
    $stmtStartups_txt = $pdo->prepare($sqlStartups_txt);
    $stmtStartups_txt->execute([  $idStartup, 
                                  mb_substr(htmlspecialchars($_POST['textarea_idea']),0,1200),
                                  mb_substr(htmlspecialchars($_POST['textarea_purpose']),0,1200), 
                                  mb_substr(htmlspecialchars($_POST['textarea_problems']),0,1200),
                                  mb_substr(htmlspecialchars($_POST['textarea_philosophy']),0,1200),
                                  mb_substr(htmlspecialchars($_POST['textarea_comment']),0,1200) ]);


    $sqlStartups = "INSERT INTO startup_verify_users(parent_id,user_id,verify,creater) VALUES ( ?,?,?,? )";
    $stmtStartups = $pdo->prepare($sqlStartups);
    $stmtStartups->execute([ $idStartup, $_SESSION['id'], 3, 1 ]); ?>
    
    <script type="text/javascript">location="startup-<?php echo $idStartup; ?>"</script>
 <?php  }
}
?>
    <title>Создание стартапа</title>
    <link rel="stylesheet" type="text/css" href="static/createStartup/createStartup.css">
<div class="wrap_with_Fo">
    <form id="wrapper_userStart" method="POST">
        <div id="wrapper_userStart_h1">
            <h1>Создание <strong class="nameCSS">стартапа!</strong></h1>
        </div>
        <div class="setting_groupWrap">Возможно, именно твоя идея изменит мир!</div>
        <div class="wrapper_userStart_content">
            <h2>Краткая информация:</h2>
            <div class="userStart_wrap_table">
                <div class="userStart_wrap_table_item">
                    <h3>Название:</h3>
                    <div class="userStart_input_item">
                        <input type="text" name="startup" maxlength="40">
                        <span class="userStart_for_comment">
                          <?php if ($nameEr == "") { echo "Придумайте короткое название";}
                                else { echo "<span class='pageCrSt_er'>$nameEr</span>"; }   ?>                          
                        </span>
                    </div>
                </div>
                <div class="userStart_wrap_table_item">
                    <h3>Статус стартапа:</h3>
                    <div class="userStart_input_item">
                        <div class="custom-select">
                            <select name="status">
                                <option value="not_found_0">Выберете:</option>
                                <option value="status_1">Новый проект (на уровне идеи)</option>
                                <option value="status_2">Развивающийся проект (на уровне развития)</option>
                                <option value="status_3">Действующий стартап</option>
                                <option value="status_4">Компания</option>
                            </select>
                        </div>
                        <?php if ($statusEr == "") {}
                                else { echo "<div class='pageCrSt_er pageCrSt_erMargin'>$statusEr</div>"; }   ?> 
                    </div>
                </div>
                <div class="userStart_wrap_table_item">
                    <h3>Вид деятельности:</h3>
                    <div class="userStart_input_item">
                        <div class="custom-select">
                            <select name="Main_categ">
                                <option value="not_found_1">Выберете:</option>
                                <option value="categ_1">Производство</option>
                                <option value="categ_2">Торговля</option>
                                <option value="categ_3">Финансы/страхование</option>>
                                <option value="categ_4">Агенство</option>
                            </select>
                        </div>
                        <?php if ($typeEr == "") {}
                                else { echo "<div class='pageCrSt_er pageCrSt_erMargin';'>$typeEr</div>"; }   ?> 
                    </div>
                </div>
                <div class="userStart_wrap_table_item">
                    <h3>Отрасль стартапа:</h3>
                    <div class="userStart_input_item">
                        <div class="custom-select">
                            <select name="area_st">
                                <option value="not_found_2">Выберете:</option>
                                <option value="area_1">Автомобильный бизнес</option>
                                <option value="area_2">Гостиницы, рестораны</option>
                                <option value="area_3">Государственная деятельность</option>>
                                <option value="area_4">Дизайн, проектирование</option>
                                <option value="area_5">Добывающая отрасль</option>
                                <option value="area_6">Исскуство, культура</option>
                                <option value="area_7">ИТ, интернет</option>>
                                <option value="area_8">Кино, СМИ, Продюсирование</option>
                                <option value="area_9">Лесная промышленность</option>
                                <option value="area_10">Маркетинг, реклама, PR</option>
                                <option value="area_11">Медицина</option>>
                                <option value="area_12">Недвижимость, аренда</option>
                                <option value="area_13">Оптовая торговля</option>
                                <option value="area_14">Образование</option>
                                <option value="area_15">Перевозки, логистика</option>>
                                <option value="area_16">Продукты питания</option>
                                <option value="area_17">Розничная торговля</option>
                                <option value="area_18">Сельское хозяйство</option>>
                                <option value="area_19">Строительство, проектирование</option>
                                <option value="area_20">Товары потребления (непищевые)</option>
                                <option value="area_21">Услуги для бизнеса, B2B</option>
                                <option value="area_22">Услуги для населения</option>>
                                <option value="area_23">Финансовый сектор</option>
                                <option value="area_24">Химическое производство</option>
                                <option value="area_25">Электроника, техника</option>>
                                <option value="area_26">Энергетика</option>
                            </select>
                        </div>
                        <?php if ($typeEr == "") {}
                                else { echo "<div class='pageCrSt_er pageCrSt_erMargin';'>$areaEr</div>"; }   ?> 
                    </div>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Идея проекта:</h2>
            <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_idea" maxlength="1200"></textarea>
            <div class="wrapper_about_this_textarea">
                <span class="userStart_for_comment">Не более 1200 символов</span>
                <span class="userStart_for_comment">
                <?php if ($ideaEr == "") { echo "Обятельное поле";}
                                else { echo "<span class='pageCrSt_er'>$ideaEr</span>"; }   ?>  
                </span>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Цель проекта:</h2>
            <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_purpose" maxlength="1200"></textarea>
            <div class="wrapper_about_this_textarea">
                <span class="userStart_for_comment">Не более 1200 символов</span>
                <span class="userStart_for_comment">
                <?php if ($purposeEr == "") { echo "Обятельное поле";}
                                else { echo "<span class='pageCrSt_er'>$purposeEr</span>"; }   ?>
                </span>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Какие проблемы решает данный проект?</h2>
            <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_problems" maxlength="1200"></textarea>
            <div class="wrapper_about_this_textarea">
                <span class="userStart_for_comment">Не более 1200 символов</span>
                <span class="userStart_for_comment">
                <?php if ($problemsEr == "") { echo "Обятельное поле";}
                                else { echo "<span class='pageCrSt_er'>$problemsEr</span>"; }   ?>  
                </span>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Философия проекта:</h2>
            <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_philosophy" maxlength="1200"></textarea>
            <div class="wrapper_about_this_textarea">
                <span class="userStart_for_comment">Не более 1200 символов</span>
                <span class="userStart_for_comment">
                <?php if ($philosophyEr == "") { echo "Обятельное поле";}
                                else { echo "<span class='pageCrSt_er'>$philosophyEr</span>"; }   ?>
                </span>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Дополнительная информация</h2>
            <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_comment" maxlength="1200"></textarea>
            <div class="wrapper_about_this_textarea">
                <span class="userStart_for_comment">Не более 1200 символов</span>
                <span class="userStart_for_comment">Необязательно</span>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_btn_submit">
            <input type="submit" value="Готово!" name="submit">
        </div>
    </form>
    <script src="static/createStartup/createStartup.js"></script>
    <script type="text/javascript" src="static/main/autosize.js"></script>
    <script type="text/javascript">
        autosize(document.querySelectorAll('textarea'));
    </script>
<?php include "footer.php"; ?>
<?php } } ?>