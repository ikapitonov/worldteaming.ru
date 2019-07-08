<?php include "header.php"; $getURLid = $_GET['id']; ?>
<?php if (count($_GET) > 1 ) { echo '<script type="text/javascript">location="index.php"</script>'; }  else {
if (empty($_GET['id']) || $_GET['id'] == 0 )  { echo '<script type="text/javascript">location="index.php"</script>'; } else {

if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) { echo '<script type="text/javascript">location="index.php"</script>';  } else {
    $sqlCheck = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
    $stmtCheck = $pdo->prepare($sqlCheck);
    $stmtCheck->execute([':parent_id' => $getURLid, ':user_id' => $_SESSION['id'] ]);
    $itemCheck = $stmtCheck->fetchAll(PDO::FETCH_ASSOC); 
        if (!$itemCheck) {
           echo '<script type="text/javascript">location="index.php"</script>'; 
         }  else { 
            $itemsCheck = $itemCheck[0];
            if ($itemsCheck['verify'] !== 3) {
                echo '<script type="text/javascript">location="index.php"</script>'; }



$sqlStartup = "SELECT id ,name,status,type,area FROM startups WHERE id = :id";
$stmtStartup = $pdo->prepare($sqlStartup);
$stmtStartup->execute([':id' => $getURLid]);
$itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
$itemsStartup = $itemStartup[0];

$sqlStText = "SELECT * FROM startups_text WHERE parent_id = :parent_id";
$stmtStText = $pdo->prepare($sqlStText);
$stmtStText->execute([':parent_id' => $getURLid]);
$itemStText = $stmtStText->fetchAll(PDO::FETCH_ASSOC); 
$itemsStText = $itemStText[0];

$sqlWants = "SELECT id FROM startup_want_do WHERE parent_id=:parent_id";
$stmtWants = $pdo->prepare($sqlWants);
$stmtWants->execute([':parent_id' => $getURLid]);
$itemWants = $stmtWants->fetchAll(PDO::FETCH_ASSOC);   

?> 





<?php 

if ($itemsStartup['status'] == "Новый проект") {
  $ST1 = " "."selected"; $ST2=""; $ST3=""; $ST4="";
} if ($itemsStartup['status'] == "Развивающийся проект") {
    $ST1=""; $ST2 = " "."selected"; $ST3=""; $ST4="";
  } if ($itemsStartup['status'] == "Действующий стартап") {
      $ST1=""; $ST2=""; $ST3 = " "."selected"; $ST4="";
    } if ($itemsStartup['status'] == "Компания") {
        $ST1=""; $ST2=""; $ST3=""; $ST4 = " "."selected";
      }


$caterPrev1="";$caterPrev2="";$caterPrev3="";$caterPrev4="";
// настройка остальный select -> option
if ($itemsStartup['type'] == "Производство") {
  $caterPrev1 = " "."selected";
} if ($itemsStartup['type'] == "Торговля") {
    $caterPrev2 = " "."selected";
  } if ($itemsStartup['type'] == "Финансы/страхование") {
      $caterPrev3 = " "."selected";
    } if ($itemsStartup['type'] == "Агенство") {
        $caterPrev4 = " "."selected";
      }



$areaS1="";$areaS2="";$areaS3="";$areaS4="";$areaS5="";$areaS6="";$areaS7="";$areaS8="";$areaS9="";$areaS10="";
$areaS11="";$areaS12="";$areaS13="";$areaS14="";$areaS15="";$areaS16="";$areaS17="";$areaS18="";$areaS19="";$areaS20="";
$areaS21="";$areaS22="";$areaS23="";$areaS24="";$areaS25="";$areaS26="";

if ($itemsStartup['area'] == "Автомобильный бизнес"){
  $areaS1 = " "."selected";
} elseif ($itemsStartup['area'] == "Гостиницы, рестораны") {
  $areaS2 = " "."selected";
} elseif ($itemsStartup['area'] == "Государственная деятельность") {
  $areaS3 = " "."selected";
} elseif ($itemsStartup['area'] == "Дизайн, проектирование") {
  $areaS4 = " "."selected";
} elseif ($itemsStartup['area'] == "Добывающая отрасль") {
  $areaS5 = " "."selected";
} elseif ($itemsStartup['area'] == "Исскуство, культура") {
  $areaS6 = " "."selected";
} elseif ($itemsStartup['area'] == "ИТ, интернет") {
  $areaS7 = " "."selected";
} elseif ($itemsStartup['area'] == "Кино, СМИ,Продюсирование") {
  $areaS8 = " "."selected";
} elseif ($itemsStartup['area'] == "Лесная промышленность") {
  $areaS9 = " "."selected";
} elseif ($itemsStartup['area'] == "Маркетинг, реклама, PR") {
  $areaS10 = " "."selected";
} elseif ($itemsStartup['area'] == "Медицина") {
  $areaS11 = " "."selected";
} elseif ($itemsStartup['area'] == "Недвижимость, аренда") {
  $areaS12 = " "."selected";
} elseif ($itemsStartup['area'] == "Оптовая торговля") {
  $areaS13 = " "."selected";
} elseif ($itemsStartup['area'] == "Образование") {
  $areaS14 = " "."selected";
} elseif ($itemsStartup['area'] == "Перевозки, логистика") {
  $areaS15 = " "."selected";
} elseif ($itemsStartup['area'] == "Продукты питания") {
  $areaS16 = " "."selected";
} elseif ($itemsStartup['area'] == "Розничная торговля") {
  $areaS17 = " "."selected";
} elseif ($itemsStartup['area'] == "Сельское хозяйство") {
  $areaS18 = " "."selected";
} elseif ($itemsStartup['area'] == "Строительство, проектирование") {
  $areaS19 = " "."selected";
} elseif ($itemsStartup['area'] == "Товары потребления (непищевые)") {
  $areaS20 = " "."selected";
} elseif ($itemsStartup['area'] == "Услуги для бизнеса, B2B") {
  $areaS21 = " "."selected";
} elseif ($itemsStartup['area'] == "Услуги для населения") {
  $areaS22 = " "."selected";
} elseif ($itemsStartup['area'] == "Финансовый сектор") {
  $areaS23 = " "."selected";
} elseif ($itemsStartup['area'] == "Химическое производство") {
  $areaS24 = " "."selected";
} elseif ($itemsStartup['area'] == "Электроника, техника") {
  $areaS25 = " "."selected";
} elseif ($itemsStartup['area'] == "Энергетика") {
  $areaS26 = " "."selected";
}



?>




<?php 
   
if (count($_POST) > 0 && isset($_POST['submit'])) {

  if (empty($_POST['textarea_idea']))  {
    $setIdea = $itemsStText['idea'];
  } else {
      $setIdea = $_POST['textarea_idea'];
  }

  if (empty($_POST['textarea_purpose']))  {
    $setpurpose = $itemsStText['purpose'];
  } else {
      $setpurpose = $_POST['textarea_purpose'];
  }

  if (empty($_POST['textarea_problems']))  {
    $setproblems = $itemsStText['problems'];
  } else {
      $setproblems = $_POST['textarea_problems'];
  }

  if (empty($_POST['textarea_philosophy']))  {
    $setphilosophy = $itemsStText['philosophy'];
  } else {
      $setphilosophy = $_POST['textarea_philosophy'];
  }

  if (empty($_POST['textarea_comment']))  {
    $setcomment = "";
  } else {
      $setcomment = $_POST['textarea_comment'];
  }


  $sqlUpdateTxt = "UPDATE startups_text SET idea=:idea,
                                            purpose=:purpose,
                                            problems=:problems,
                                            philosophy=:philosophy,
                                            comment=:comment WHERE parent_id=$getURLid";
  $stmtUpdateTxt = $pdo->prepare($sqlUpdateTxt);
  $stmtUpdateTxt->execute([   ':idea' =>       mb_substr(htmlspecialchars($setIdea),0,1200),
                              ':purpose' =>    mb_substr(htmlspecialchars($setpurpose),0,1200), 
                              ':problems' =>   mb_substr(htmlspecialchars($setproblems),0,1200),
                              ':philosophy' => mb_substr(htmlspecialchars($setphilosophy),0,1200),
                              ':comment' =>    mb_substr(htmlspecialchars($setcomment),0,1200) ]);



  if ($_POST['status'] == "not_found_0") {
      $statusSql = $itemsStartup['status'];
    } else {
       if ($_POST['status'] == "status_1") {
          $statusSql = "Новый проект";
        } if ($_POST['status'] == "status_2") {
            $statusSql = "Развивающийся проект";
          } if ($_POST['status'] == "status_3") {
              $statusSql = "Действующий стартап";
            } if ($_POST['status'] == "status_4") {
                $statusSql = "Компания";
              }
  }


  if ($_POST['Main_categ'] == "not_found_1") {
      $categSql = $itemsStartup['type'];
    } else {
      if ($_POST['Main_categ'] == "categ_1") {
        $categSql = "Производство";
      } if ($_POST['Main_categ'] == "categ_2") {
          $categSql = "Торговля";
        } if ($_POST['Main_categ'] == "categ_3") {
            $categSql = "Финансы/страхование";
          } if ($_POST['Main_categ'] == "categ_4") {
              $categSql = "Агенство";
            }
  }

  if (empty($_POST['startup'])) {
    $stNameUp = $itemsStartup['name'];
  } else {
      $stNameUp = $_POST['startup'];
  }


  if ($_POST['area_st'] == $itemsStartup['area']) {
    $areaSql = $itemsStartup['area'];
  } elseif ($_POST['area_st'] == "not_found_2") {
    $areaSql = $itemsStartup['area'];
  }
    else {
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
    }

  $sqlUpdateMain = "UPDATE startups SET name=:name, status=:status, type=:type, area=:area WHERE id=$getURLid";
  $stmtUpdateMain = $pdo->prepare($sqlUpdateMain);
  $stmtUpdateMain->execute([':name' => ucfirst(mb_substr(strip_tags($stNameUp),0,40)), ':status' => $statusSql, ':type' => $categSql,':area' => $areaSql ]);

  if ($stmtUpdateMain) { ?>
    <script type="text/javascript">location="user-<?php echo $getURLid; ?>"</script>
  <?php }
  
}

?>


<title>Редактирование <?php echo " ". $itemsStartup['name']; ?></title>
<link rel="stylesheet" type="text/css" href="static/settingStartup/settingMain.css">
<link rel="stylesheet" type="text/css" href="static/settingStartup/update.css">
<div class="wrap_with_Fo">

   <div id="startup_wrapper_2divs">
        <div id="startup_wrapper_left">
            <div id="navbar_startups_forum">
                <div id="navbar_startups_wrap_items">
                  <a href="startup-<?php echo $itemsStartup['id']; ?>" id="startups_main_NAME"><?php echo $itemsStartup['name']; ?></a>
                  <i class="material-icons">chevron_right</i>
                  <a href="" id="startups_main_UNDERNAME">Редактирование информации</a>
                </div>
            </div>
              <form id="wrapper_userStart" method="POST">
                  <div class="wrapper_userStart_content">
                      <h2>Краткая информация:</h2>
                      <div class="userStart_wrap_table">
                          <div class="userStart_wrap_table_item">
                              <h3>Название:</h3>
                              <div class="userStart_input_item">
                                  <input type="text" name="startup" maxlength="40" value="<?php echo $itemsStartup['name']; ?>">
                              </div>
                          </div>
                          <div class="userStart_wrap_table_item">
                              <h3>Статус стартапа:</h3>
                              <div class="userStart_input_item">
                                  <div class="custom-select">
                                      <select name="status">
                                          <option value="not_found_0">Выберете:</option>
                                          <option value="status_1" <?php echo $ST1; ?>>Новый проект (на уровне идеи)</option>
                                          <option value="status_2" <?php echo $ST2; ?>>Развивающийся проект (на уровне развития)</option>
                                          <option value="status_3" <?php echo $ST3; ?>>Действующий стартап</option>
                                          <option value="status_4" <?php echo $ST4; ?>>Компания</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="userStart_wrap_table_item">
                              <h3>Вид деятельности:</h3>
                              <div class="userStart_input_item">
                                  <div class="custom-select">
                                      <select name="Main_categ">
                                          <option value="not_found_1">Выберете:</option>
                                          <option value="categ_1" <?php echo $caterPrev1; ?>>Производство</option>
                                          <option value="categ_2" <?php echo $caterPrev2; ?>>Торговля</option>
                                          <option value="categ_3" <?php echo $caterPrev3; ?>>Финансы/страхование</option>>
                                          <option value="categ_4" <?php echo $caterPrev4; ?>>Агенство</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="userStart_wrap_table_item">
                    <h3>Отрасль стартапа:</h3>
                    <div class="userStart_input_item">
                        <div class="custom-select">
                            <select name="area_st">
                                <option value="not_found_2">Выберете:</option>
                                <option value="area_1" <?php echo $areaS1; ?>>Автомобильный бизнес</option>
                                <option value="area_2" <?php echo $areaS2; ?>>Гостиницы, рестораны</option>
                                <option value="area_3" <?php echo $areaS3; ?>>Государственная деятельность</option>>
                                <option value="area_4" <?php echo $areaS4; ?>>Дизайн, проектирование</option>
                                <option value="area_5" <?php echo $areaS5; ?>>Добывающая отрасль</option>
                                <option value="area_6" <?php echo $areaS6; ?>>Исскуство, культура</option>
                                <option value="area_7" <?php echo $areaS7; ?>>ИТ, интернет</option>>
                                <option value="area_8" <?php echo $areaS8; ?>>Кино, СМИ, Продюсирование</option>
                                <option value="area_9" <?php echo $areaS9; ?>>Лесная промышленность</option>
                                <option value="area_10" <?php echo $areaS10; ?>>Маркетинг, реклама, PR</option>
                                <option value="area_11" <?php echo $areaS11; ?>>Медицина</option>>
                                <option value="area_12" <?php echo $areaS12; ?>>Недвижимость, аренда</option>
                                <option value="area_13" <?php echo $areaS13; ?>>Оптовая торговля</option>
                                <option value="area_14" <?php echo $areaS14; ?>>Образование</option>
                                <option value="area_15" <?php echo $areaS15; ?>>Перевозки, логистика</option>>
                                <option value="area_16" <?php echo $areaS16; ?>>Продукты питания</option>
                                <option value="area_17" <?php echo $areaS17; ?>>Розничная торговля</option>
                                <option value="area_18" <?php echo $areaS18; ?>>Сельское хозяйство</option>>
                                <option value="area_19" <?php echo $areaS19; ?>>Строительство, проектирование</option>
                                <option value="area_20" <?php echo $areaS20; ?>>Товары потребления (непищевые)</option>
                                <option value="area_21" <?php echo $areaS21; ?>>Услуги для бизнеса, B2B</option>
                                <option value="area_22" <?php echo $areaS22; ?>>Услуги для населения</option>>
                                <option value="area_23" <?php echo $areaS23; ?>>Финансовый сектор</option>
                                <option value="area_24" <?php echo $areaS24; ?>>Химическое производство</option>
                                <option value="area_25" <?php echo $areaS25; ?>>Электроника, техника</option>>
                                <option value="area_26" <?php echo $areaS26; ?>>Энергетика</option>
                            </select>
                        </div>
                     </div>
                </div>
                      </div>
                  </div>
                  <hr class="fancy-line">
                  <div class="wrapper_userStart_content">
                      <h2>Идея проекта:</h2>
                      <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_idea" maxlength="1200"><?php echo $itemsStText['idea']; ?></textarea>
                      <div class="wrapper_about_this_textarea">
                          <span class="userStart_for_comment">Не более 1200 символов</span>
                      </div>
                  </div>
                  <hr class="fancy-line">
                  <div class="wrapper_userStart_content">
                      <h2>Цель проекта:</h2>
                      <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_purpose" maxlength="1200"><?php echo $itemsStText['purpose']; ?></textarea>
                      <div class="wrapper_about_this_textarea">
                          <span class="userStart_for_comment">Не более 1200 символов</span>
                      </div>
                  </div>
                  <hr class="fancy-line">
                  <div class="wrapper_userStart_content">
                      <h2>Какие проблемы решает данный проект?</h2>
                      <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_problems" maxlength="1200"><?php echo $itemsStText['problems']; ?></textarea>
                      <div class="wrapper_about_this_textarea">
                          <span class="userStart_for_comment">Не более 1200 символов</span>
                      </div>
                  </div>
                  <hr class="fancy-line">
                  <div class="wrapper_userStart_content">
                      <h2>Философия проекта:</h2>
                      <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_philosophy" maxlength="1200"><?php echo $itemsStText['philosophy']; ?></textarea>
                      <div class="wrapper_about_this_textarea">
                          <span class="userStart_for_comment">Не более 1200 символов</span>
                      </div>
                  </div>
                  <hr class="fancy-line">
                  <div class="wrapper_userStart_content">
                      <h2>Дополнительная информация</h2>
                      <textarea class="userStart_textarea_comments" style="width: 550px;" name="textarea_comment" maxlength="1200"><?php echo $itemsStText['comment']; ?></textarea>
                      <div class="wrapper_about_this_textarea">
                          <span class="userStart_for_comment">Не более 1200 символов</span>
                      </div>
                  </div>
                  <hr class="fancy-line">
                  <div class="wrapper_btn_submit">
                      <input type="submit" value="Обновить!" name="submit" id="submitBTN">
                      <input type="reset" value="Вернуть как было" class="btnSettingForm">
                      <i class="material-icons">check</i>
                  </div>
              </form>
              <script src="static/createStartup/createStartup.js"></script>
        </div>

        <div id="startup_wrapper_right">
            <div class="profile_left_header_info">Меню</div>
            <div class="startup_menuSetting">
                <a href="update-<?php echo $getURLid; ?>" class="startup_menu_ITEM startup_menu_ITEM_border">Редактирование информации</a>
                <a href="insert-<?php echo $getURLid; ?>" class="startup_menu_ITEM">Обработка заявок<?php if ($itemWants) { ?><span id="how_manyWantsdo"><?php echo count($itemWants); ?></span><?php } else {} ?></a>
                <a href="teaming-<?php echo $getURLid; ?>" class="startup_menu_ITEM">Команда</a>
            </div>
        </div>
    </div>
    <script src="static/settingStartup/update.js"></script>
    <script type="text/javascript" src="static/main/autosize.js"></script>
    <script type="text/javascript">
      autosize(document.querySelectorAll('textarea'));
    </script>


<?php include "footer.php"; ?>
<?php } } } } ?>
