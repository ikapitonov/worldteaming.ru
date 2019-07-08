<?php include "header.php"; $getURLid = $_GET['id']; ?>
<?php if (count($_GET) > 1 ) {
        echo '<script type="text/javascript">location="index.php"</script>';
}  else {
if (empty($_GET['id']) || $_GET['id'] == 0 )  {
    echo '<script type="text/javascript">location="index.php"</script>';
} else {

if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {
    echo '<script type="text/javascript">location="index.php"</script>';
} else {
    $sqlSelUser = "SELECT id ,name, lastname,password,salt FROM users WHERE id = :id";
    $stmtSelUser = $pdo->prepare($sqlSelUser);
    $stmtSelUser->execute([':id' => $getURLid]);
    $itemSelUser = $stmtSelUser->fetchAll(PDO::FETCH_ASSOC); 
        if (!$itemSelUser) {
           echo '<script type="text/javascript">location="index.php"</script>'; 
         }  else { 
            $itemsSelUser = $itemSelUser[0];
            if ($itemsSelUser['id'] != $_SESSION['id']) {
                echo '<script type="text/javascript">location="index.php"</script>';
            } else {  ?> 


<?php 

$sqlSeText = "SELECT callback,about_cg FROM users_text WHERE id = :id";
$stmtSeText = $pdo->prepare($sqlSeText);
$stmtSeText->execute([':id' => $getURLid]);
$itemSeText = $stmtSeText->fetchAll(PDO::FETCH_ASSOC); 
$itemsSeText = $itemSeText[0];


$sqlSeLStatic = "SELECT status,city,birthday FROM users_static_info WHERE id = :id";
$stmtSeLStatic = $pdo->prepare($sqlSeLStatic);
$stmtSeLStatic->execute([':id' => $getURLid]);
$itemSeLStatic = $stmtSeLStatic->fetchAll(PDO::FETCH_ASSOC); 
$itemsSeLStatic = $itemSeLStatic[0];


$sqlSeLangs = "SELECT lang,id_auto FROM users_lang WHERE id = :id ORDER BY id_auto DESC";
$stmtSeLangs = $pdo->prepare($sqlSeLangs);
$stmtSeLangs->execute([':id' => $getURLid]);
$itemSeLangs = $stmtSeLangs->fetchAll(PDO::FETCH_ASSOC); 


$sqlSelCall = "SELECT name,contact,id_auto FROM users_call WHERE id = :id ORDER BY id_auto DESC";
$stmtSelCall = $pdo->prepare($sqlSelCall);
$stmtSelCall->execute([':id' => $getURLid]);
$itemSelCall = $stmtSelCall->fetchAll(PDO::FETCH_ASSOC);


$sqlSelNet = "SELECT network,url,id_auto FROM users_network WHERE id = :id ORDER BY id_auto DESC";
$stmtSelNet = $pdo->prepare($sqlSelNet);
$stmtSelNet->execute([':id' => $getURLid]);
$itemSelNet = $stmtSelNet->fetchAll(PDO::FETCH_ASSOC);


$sqlSelCg = "SELECT cg,parent_cg,id_auto FROM users_want_cg WHERE id = :id ORDER BY id_auto DESC";
$stmtSelCg = $pdo->prepare($sqlSelCg);
$stmtSelCg->execute([':id' => $getURLid]);
$itemSelCg = $stmtSelCg->fetchAll(PDO::FETCH_ASSOC);


if ($itemsSeLStatic['status'] == "Свободен") {
  $ST1 = " "."selected"; $ST2=""; $ST3=""; $ST4="";
} if ($itemsSeLStatic['status'] == "Частично свободен") {
    $ST1=""; $ST2 = " "."selected"; $ST3=""; $ST4="";
  } if ($itemsSeLStatic['status'] == "Частично занят") {
      $ST1=""; $ST2=""; $ST3 = " "."selected"; $ST4="";
    } if ($itemsSeLStatic['status'] == "Занят") {
        $ST1=""; $ST2=""; $ST3=""; $ST4 = " "."selected";
      }


$cg1_0="";$cg1_1="";$cg1_2="";$cg1_3="";$cg1_4="";$cg1_5="";$cg1_6="";$cg1_7="";$cg1_8="";$cg1_9="";$cg1_10="";
$cg1_11="";$cg1_12="";$cg1_13="";$cg1_14="";$cg1_15="";
$cg2_0="";$cg2_1="";$cg2_2="";$cg2_3="";$cg2_4="";$cg2_5="";$cg2_6="";$cg2_7="";$cg2_8="";$cg2_9="";$cg2_10="";
$cg2_11="";$cg2_12="";$cg2_13="";$cg2_14="";$cg2_15="";
$cg3_0="";$cg3_1="";$cg3_2="";$cg3_3="";$cg3_4="";$cg3_5="";$cg3_6="";$cg3_7="";$cg3_8="";$cg3_9="";$cg3_10="";
$cg3_11="";$cg3_12="";$cg3_13="";$cg3_14="";$cg3_15="";
$cg4_0="";$cg4_1="";$cg4_2="";$cg4_3="";$cg4_4="";$cg4_5="";$cg4_6="";$cg4_7="";$cg4_8="";$cg4_9="";$cg4_10="";
$cg4_11="";$cg4_12="";$cg4_13="";$cg4_14="";$cg4_15="";
$cg5_0="";$cg5_1="";$cg5_2="";$cg5_3="";$cg5_4="";$cg5_5="";$cg5_6="";$cg5_7="";$cg5_8="";$cg5_9="";$cg5_10="";
$cg5_11="";$cg5_12="";$cg5_13="";$cg5_14="";$cg5_15="";
$cg6_0="";$cg6_1="";$cg6_2="";$cg6_3="";$cg6_4="";$cg6_5="";$cg6_6="";$cg6_7="";$cg6_8="";$cg6_9="";$cg6_10="";
$cg6_11="";$cg6_12="";$cg6_13="";$cg6_14="";$cg6_15="";
$cg7_0="";$cg7_1="";$cg7_2="";$cg7_3="";$cg7_4="";$cg7_5="";$cg7_6="";$cg7_7="";$cg7_8="";$cg7_9="";$cg7_10="";
$cg7_11="";$cg7_12="";$cg7_13="";$cg7_14="";$cg7_15="";
$cg8_0="";$cg8_1="";$cg8_2="";$cg8_3="";$cg8_4="";$cg8_5="";$cg8_6="";$cg8_7="";$cg8_8="";$cg8_9="";$cg8_10="";
$cg8_11="";$cg8_12="";$cg8_13="";$cg8_14="";$cg8_15="";
$cg9_0="";$cg9_1="";$cg9_2="";$cg9_3="";$cg9_4="";$cg9_5="";$cg9_6="";$cg9_7="";$cg9_8="";$cg9_9="";$cg9_10="";
$cg9_11="";$cg9_12="";$cg9_13="";$cg9_14="";$cg9_15="";
$cg10_0="";$cg10_1="";$cg10_2="";$cg10_3="";$cg10_4="";$cg10_5="";$cg10_6="";$cg10_7="";$cg10_8="";$cg10_9="";$cg10_10="";
$cg10_11="";$cg10_12="";$cg10_13="";$cg10_14="";$cg10_15="";
$cg11_0="";$cg11_1="";$cg11_2="";$cg11_3="";$cg11_4="";$cg11_5="";$cg11_6="";$cg11_7="";$cg11_8="";$cg11_9="";$cg11_10="";
$cg11_11="";$cg11_12="";$cg11_13="";$cg11_14="";$cg11_15="";
$cg12_0="";$cg12_1="";$cg12_2="";$cg12_3="";$cg12_4="";$cg12_5="";$cg12_6="";$cg12_7="";$cg12_8="";$cg12_9="";$cg12_10="";
$cg12_11="";$cg12_12="";$cg12_13="";$cg12_14="";$cg12_15="";
$cg13_0="";$cg13_1="";$cg13_2="";$cg13_3="";$cg13_4="";$cg13_5="";$cg13_6="";$cg13_7="";$cg13_8="";$cg13_9="";$cg13_10="";
$cg13_11="";$cg13_12="";$cg13_13="";$cg13_14="";$cg13_15="";
$cg14_0="";$cg14_1="";$cg14_2="";$cg14_3="";$cg14_4="";$cg14_5="";$cg14_6="";$cg14_7="";$cg14_8="";$cg14_9="";$cg14_10="";
$cg14_11="";$cg14_12="";$cg14_13="";$cg14_14="";$cg14_15="";
$cg15_0="";$cg15_1="";$cg15_2="";$cg15_3="";$cg15_4="";$cg15_5="";$cg15_6="";$cg15_7="";$cg15_8="";$cg15_9="";$cg15_10="";
$cg15_11="";$cg15_12="";$cg15_13="";$cg15_14="";$cg15_15="";


foreach ($itemSelCg as $itemsSelCg) {
  
  $ArrSCg = explode("_", $itemsSelCg['cg']);
  if ($itemsSelCg['parent_cg'] == 0){
    ${'cg'.$itemsSelCg['cg']."_". 0} = " "."checked";
  } else {
    ${'cg'.$itemsSelCg['cg']} = " "."checked";
  }

}
?>



<?php  if (count($_POST) > 0 && isset($_POST['submit'])) {

 

if ($_POST['nameU'] != $itemsSelUser['name'] && iconv_strlen($_POST['nameU']) > 1 ) {
   
    $name = ucfirst(strtolower(preg_replace('/\s+/', '', strip_tags(trim($_POST['nameU'])))));

    $sqlUpnameU = "UPDATE users SET name=:name WHERE id=:id";
    $stmtUpnameU = $pdo->prepare($sqlUpnameU);
    $stmtUpnameU->execute([':name' => mb_substr($name,0,24), ':id' => $getURLid ]); 

}
if ($_POST['lastnameU'] != $itemsSelUser['lastname'] && iconv_strlen($_POST['lastnameU']) > 1 ) {
   
    $lastname = ucfirst(strtolower(preg_replace('/\s+/', '', strip_tags(trim($_POST['lastnameU'])))));

    $sqlUpLastNameU = "UPDATE users SET lastname=:lastname WHERE id=:id";
    $stmtUpLastNameU = $pdo->prepare($sqlUpLastNameU);
    $stmtUpLastNameU->execute([':lastname' => mb_substr($lastname,0,24), ':id' => $getURLid ]); 
}


if ($_POST['date_user'] != $itemsSeLStatic['birthday'] && iconv_strlen($_POST['date_user']) > 6 ) {
    $sqlUpdatebirthday = "UPDATE users_static_info SET birthday=:birthday WHERE id=$getURLid";
    $stmtUpdatebirthday = $pdo->prepare($sqlUpdatebirthday);
    $stmtUpdatebirthday ->execute([':birthday' => mb_substr(htmlspecialchars($_POST['date_user']),0,25) ]); 
}

if ($_POST['city'] != $itemsSeLStatic['city'] && iconv_strlen($_POST['city']) > 1 ) {
    $sqlUpdatecity = "UPDATE users_static_info SET city=:city WHERE id=$getURLid";
    $stmtUpdatecity = $pdo->prepare($sqlUpdatecity);
    $stmtUpdatecity ->execute([':city' => mb_substr(htmlspecialchars($_POST['city']),0,25) ]); 
}


if ($_POST['status'] == "status_1") {
      $statusSql = "Свободен";
    } if ($_POST['status'] == "status_2") {
        $statusSql = "Частично свободен";
      } if ($_POST['status'] == "status_3") {
          $statusSql = "Частично занят";
        } if ($_POST['status'] == "status_4") {
            $statusSql = "Занят";
          } else {}

if ($statusSql != $itemsSeLStatic['status'] && $_POST['status'] != "status_not_found") {
    $sqlUpdatecity = "UPDATE users_static_info SET status=:status WHERE id=$getURLid";
    $stmtUpdatecity = $pdo->prepare($sqlUpdatecity);
    $stmtUpdatecity ->execute([':status' => $statusSql ]); 
}

$checkLang = $_POST['lang']; 
if ( $checkLang[0] == false && $checkLang[1] == false && $checkLang[2] == false && $checkLang[3] == false && $checkLang[4] == false) {
  
} else {
    $sqlDelLangs = "DELETE FROM users_lang WHERE id=:id";
    $stmtDelLangs = $pdo->prepare($sqlDelLangs);
    $stmtDelLangs->execute([':id' => $getURLid ]);

    $sqlInLang = "INSERT INTO users_lang(id,lang) VALUES ( ?,? )";
    $stmtInLang = $pdo->prepare($sqlInLang);
    foreach ($_POST['lang'] as $Lang_key => $langss) {
      if (empty($langss)) {}  else {
          $stmtInLang->execute([ $getURLid, mb_substr(htmlspecialchars($langss),0,25) ]);
      }
    }
}



if ($_POST['cgComment'] != $itemsSeText['about_cg']) {
    $sqlUpdateCgCom = "UPDATE users_text SET about_cg=:about_cg WHERE id=$getURLid";
    $stmtUpdateCgCom = $pdo->prepare($sqlUpdateCgCom);
    $stmtUpdateCgCom ->execute([':about_cg' => mb_substr(htmlspecialchars($_POST['cgComment']),0,1200) ]);
}

if ($_POST['commentCall'] != $itemsSeText['callback']) {
    if (iconv_strlen($_POST['commentCall']) == 0 ) {
      $commentCallIn = "С любыми";
    } else {
        $commentCallIn = $_POST['commentCall'];
    }
    $sqlUpdatecommentCall = "UPDATE users_text SET callback=:callback WHERE id=$getURLid";
    $stmtUpdatecommentCall = $pdo->prepare($sqlUpdatecommentCall);
    $stmtUpdatecommentCall ->execute([':callback' => mb_substr(htmlspecialchars($commentCallIn),0,1200) ]);
}


$checkNet = $_POST['networkName']; 
if ( $checkNet[0] == false && $checkNet[1] == false && $checkNet[2] == false && $checkNet[3] == false && $checkNet[4] == false) {  
} else {
    $sqlDelNet = "DELETE FROM users_network WHERE id=:id";
    $stmtDelNet = $pdo->prepare($sqlDelNet);
    $stmtDelNet->execute([':id' => $getURLid ]);

    $sqlInnetwork = "INSERT INTO users_network(id,network,url) VALUES ( ?,?,? )";
    $stmtInnetwork = $pdo->prepare($sqlInnetwork);

     foreach (array_combine($_POST['networkName'],$_POST['networkUrl']) as $networkNameSql => $networkUrlSql) {
      if (empty($networkNameSql) || empty($networkUrlSql)) {       
      } else {
        $stmtInnetwork->execute([ $getURLid, mb_substr(htmlspecialchars($networkNameSql),0,30), mb_substr($networkUrlSql,0,100) ]); 
      }
    }
}



$chCalls = $_POST['CallName']; 
if ( $chCalls[0] == false && $chCalls[1] == false && $chCalls[2] == false && $chCalls[3] == false && $chCalls[4] == false) {  
} else {
    $sqlDelCalls = "DELETE FROM users_call WHERE id=:id";
    $stmtDelCalls = $pdo->prepare($sqlDelCalls);
    $stmtDelCalls->execute([':id' => $getURLid ]);

    $sqlInCall = "INSERT INTO users_call(id,name,contact) VALUES ( ?,?,? )";
    $stmtInCall = $pdo->prepare($sqlInCall);

     foreach (array_combine($_POST['CallName'],$_POST['CallContact']) as $CallNameSql => $CallContactSql) {
      if (empty($CallNameSql) || empty($CallContactSql)) {      
      } else {
        $stmtInCall->execute([ $getURLid, mb_substr(htmlspecialchars($CallNameSql),0,30), mb_substr(htmlspecialchars($CallContactSql),0,30) ]);
      }
    }
}


if ($_POST['cg']) {
    $sqlDelCgs = "DELETE FROM users_want_cg WHERE id=:id";
    $stmtDelCgs = $pdo->prepare($sqlDelCgs);
    $stmtDelCgs->execute([':id' => $getURLid ]);

    $sqlInCg = "INSERT INTO users_want_cg(id,cg,parent_cg) VALUES ( ?,?,? )";
    $stmtInCg = $pdo->prepare($sqlInCg);
    foreach ($_POST['cg'] as $keyCg => $valueCg) {
      $ArrCg = explode("_", $keyCg);
      if ( $ArrCg[1] == 0 ) {
        $parentIdCg = 0;
        $mainCgTo = $ArrCg[0];
      } else {
        $parentIdCg = $ArrCg[0];
        $mainCgTo = $keyCg;
      }
      $stmtInCg->execute([ $getURLid, $mainCgTo, $parentIdCg ]); 
    }
} 

$LocationTo = "";

if (!empty($_POST['passwordOld'])) {
    if ( iconv_strlen($_POST['passwordOld']) > 5) {
      if ( $itemsSelUser['password'] == md5($_POST['passwordOld'].$itemsSelUser['salt'])) {
        if (!empty($_POST['passwordNew']) && !empty($_POST['passwordNewTwo'])) {
          if ( iconv_strlen($_POST['passwordNew']) > 5 && iconv_strlen($_POST['passwordNewTwo']) > 5) {
            if ($_POST['passwordNew'] == $_POST['passwordNewTwo']) {
              require_once 'phpScripts/salt.php';

              $salt = generateSalt();
              $saltedPassword = md5($_POST['passwordNew'].$salt);

              $sqlUpPass = "UPDATE users SET password=:password,salt=:salt WHERE id=:id";
              $stmtUpPass = $pdo->prepare($sqlUpPass);
              $stmtUpPass->execute([':password' => $saltedPassword, ':salt' => $salt, ':id' => $_SESSION['id'] ]); 

              $LocationTo = 1;
            }
          }
        } 
      }
    }
}



if ($LocationTo == "") { ?>
  <script type="text/javascript">location="user-<?php echo $getURLid; ?>"</script>
<?php } else {
    echo '<script type="text/javascript">location="phpScripts/logout.php"</script>';
}


} ?>

    <title>Редактирование информации</title>
    <link rel="stylesheet" type="text/css" href="static/formStart/formStart.css">
    <link rel="stylesheet" type="text/css" href="static/edit/edit.css">
    <div class="wrap_with_Fo">
    <form id="wrapper_userStart" method="POST">
        <div id="navbar_startups_forum">
            <div id="navbar_startups_wrap_items">
              <a href="user-<?php echo $itemsSelUser['id']; ?>" id="startups_main_NAME" style="max-width: 330px;"><?php echo $itemsSelUser['name']." ".$itemsSelUser['lastname']; ?></a>
              <i class="material-icons">chevron_right</i>
              <a href="" id="startups_main_UNDERNAME">Редактирование информации</a>
            </div>
        </div>
        <div class="wrapper_userStart_content" style="margin-top: 0;">
            <h2>Краткая информация:</h2>
            <div class="userStart_wrap_table">
                <div class="userStart_wrap_table_item">
                    <h3>Имя:</h3>
                    <div class="userStart_input_item">
                        <input type="text" name="nameU" maxlength="25" value="<?php echo $itemsSelUser['name']; ?>">
                    </div>
                </div>
                <div class="userStart_wrap_table_item">
                    <h3>Фамилия:</h3>
                    <div class="userStart_input_item">
                        <input type="text" name="lastnameU" maxlength="25" value="<?php echo $itemsSelUser['lastname']; ?>">
                    </div>
                </div>
                <hr class="fancy-line">
                <div class="userStart_wrap_table_item" style="margin-top: 10px;">
                    <h3>Статус:</h3>
                    <div class="userStart_input_item">
                        <div class="custom-select">
                            <select name="status">
                                <option value="status_not_found">Выберете:</option>
                                <option value="status_1" <?php echo $ST1; ?>>Свободен</option>
                                <option value="status_2" <?php echo $ST2; ?>>Частично свободен</option>
                                <option value="status_3" <?php echo $ST3; ?>>Частично занят</option>
                                <option value="status_4" <?php echo $ST4; ?>>Занят</option>
                            </select>
                        </div>
                    </div>                   
                </div>
                <div class="userStart_wrap_table_item">
                    <h3>Дата рождения:</h3>
                    <div class="userStart_input_item">
                        <input type="date" name="date_user"
                                           min="1920-01-01" max="2018-12-31" value="<?php echo $itemsSeLStatic['birthday']; ?>">
                    </div>
                </div>
                <div class="userStart_wrap_table_item">
                    <h3>Город:</h3>
                    <div class="userStart_input_item">
                        <input type="text" name="city" value="<?php echo $itemsSeLStatic['city']; ?>" maxlength="30">
                    </div>
                </div>
                <div class="userStart_wrap_table_item">
                    <h3>Языки:</h3>
                    <div class="userStart_input_item">
                        <div class="userStart_input_item_wrap" id="lang_append_for_add">
                            <?php foreach ($itemSeLangs as $numLang => $itemsSeLangs) {  ?>
                            <input type="text" name="lang[<?php echo $numLang; ?>]" id="userStart_input_lang_<?php echo $numLang; ?>" value="<?php echo $itemsSeLangs['lang']; ?>" maxlength="25">
                            <?php   } ?>
                        </div>
                        <div class="btn_add_inputs_wrap" id="lang_no_more">
                            <div class="btn_add_inputs" id="btn_add_lang">Добавить поле</div>
                            <span>Больше добавить нельзя</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Желаемые сферы деятельности. Что хотелось бы делать?</h2>
            <div class="userStart_categoriesMains_wrap">
                <div class="userStart_categoriesMains_wth_btn">
                    <div class="categories_mains_wrapper">
                    <input type="checkbox" name="cg[1_0]" id="categories_main1" class="CGMAIN" <?php echo $cg1_0; ?>>
                    <label for="categories_main1" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Программирование
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_1]" id="cg1_1" <?php echo $cg1_1; ?>>
                        <label for="cg1_1">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Лендинги (одностраничные сайты)</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_2]" id="cg1_2" <?php echo $cg1_2; ?>>
                        <label for="cg1_2">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Сайты</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_3]" id="cg1_3" <?php echo $cg1_3; ?>>
                        <label for="cg1_3">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Мобильные приложения</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_4]" id="cg1_4" <?php echo $cg1_4; ?>>
                        <label for="cg1_4">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Боты</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_5]" id="cg1_5" <?php echo $cg1_5; ?>>
                        <label for="cg1_5">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Прототипирование</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_6]" id="cg1_6" <?php echo $cg1_6; ?>>
                        <label for="cg1_6">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Парсинг сайтов</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_7]" id="cg1_7" <?php echo $cg1_7; ?>>
                        <label for="cg1_7">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Разработка игр </div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_8]" id="cg1_8" <?php echo $cg1_8; ?>>
                        <label for="cg1_8">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Десктопное ПО</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_9]" id="cg1_9" <?php echo $cg1_9; ?>>
                        <label for="cg1_9">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Плагины</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_10]" id="cg1_10" <?php echo $cg1_10; ?>>
                        <label for="cg1_10">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">1С программирование</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[1_11]" id="cg1_11" <?php echo $cg1_11; ?>>
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
                    <input type="checkbox" name="cg[2_0]" id="categories_main2" class="CGMAIN" <?php echo $cg2_0; ?>>
                    <label for="categories_main2" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Дизайн
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_1]" id="cg2_1" <?php echo $cg2_1; ?>>
                        <label for="cg2_1">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Сайты (Веб дизайн)</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_2]" id="cg2_2" <?php echo $cg2_2; ?>>
                        <label for="cg2_2">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Логотипы</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_3]" id="cg2_3" <?php echo $cg2_3; ?>>
                        <label for="cg2_3">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Иконки</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_4]" id="cg2_4" <?php echo $cg2_4; ?>>
                        <label for="cg2_4">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Рисунки и иллюстрации</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_5]" id="cg2_5" <?php echo $cg2_5; ?>>
                        <label for="cg2_5">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Мобильные приложения</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_6]" id="cg2_6" <?php echo $cg2_6; ?>>
                        <label for="cg2_6">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Полиграфия (шрифты)</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_7]" id="cg2_7" <?php echo $cg2_7; ?>>
                        <label for="cg2_7">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Баннеры</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_8]" id="cg2_8" <?php echo $cg2_8; ?>>
                        <label for="cg2_8">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Векторная граффика</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_9]" id="cg2_9" <?php echo $cg2_9; ?>>
                        <label for="cg2_9">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">3D</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_10]" id="cg2_10" <?php echo $cg2_10; ?>>
                        <label for="cg2_10">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Анимации (включая игры)</div>
                        </label>
                    </div>
                   <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[2_11]" id="cg2_11" <?php echo $cg2_11; ?>>
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
                    <input type="checkbox" name="cg[3_0]" id="categories_main3" class="CGMAIN" <?php echo $cg3_0; ?>>
                    <label for="categories_main3" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Тестирование
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[3_1]" id="cg3_1" <?php echo $cg3_1; ?>>
                        <label for="cg3_1">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Сайты</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[3_2]" id="cg3_2" <?php echo $cg3_2; ?>>
                        <label for="cg3_2">
                            <div class="categories_mini_box">
                                <i class="material-icons">done</i>
                            </div>
                            <div class="categories_mini_text">Мобильные приложения</div>
                        </label>
                    </div>
                    <div class="categories_mini_wrapper">
                        <input type="checkbox" name="cg[3_3]" id="cg3_3" <?php echo $cg3_3; ?>>
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
                    <input type="checkbox" name="cg[4_0]" id="categories_main4" class="CGMAIN" <?php echo $cg4_0; ?>>
                    <label for="categories_main4" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Тексты
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_1]" id="cg4_1" <?php echo $cg4_1; ?>>
                            <label for="cg4_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Копирайт (написание)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_2]" id="cg4_2" <?php echo $cg4_2; ?>>
                            <label for="cg4_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Рерайт (правки)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_3]" id="cg4_3" <?php echo $cg4_3; ?>>
                            <label for="cg4_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Статьи, новости, посты</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_4]" id="cg4_4" <?php echo $cg4_4; ?>>
                            <label for="cg4_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Рефераты, курсовые, дипломы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_5]" id="cg4_5" <?php echo $cg4_5; ?>>
                            <label for="cg4_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Сценарии</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_6]" id="cg4_6" <?php echo $cg4_6; ?>>
                            <label for="cg4_6">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Резюме</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_7]" id="cg4_7" <?php echo $cg4_7; ?>>
                            <label for="cg4_7">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Техническое задание</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_8]" id="cg4_8" <?php echo $cg4_8; ?>>
                            <label for="cg4_8">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Отзывы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_9]" id="cg4_9" <?php echo $cg4_9; ?>>
                            <label for="cg4_9">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Калиграфия</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[4_10]" id="cg4_10" <?php echo $cg4_10; ?>>
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
                    <input type="checkbox" name="cg[5_0]" id="categories_main5" class="CGMAIN" <?php echo $cg5_0; ?>>
                    <label for="categories_main5" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Переводы 
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_1]" id="cg5_1" <?php echo $cg5_1; ?>>
                            <label for="cg5_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Тексты общей тематики</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_2]" id="cg5_2" <?php echo $cg5_2; ?>>
                            <label for="cg5_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Тексты узкой специализации</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_3]" id="cg5_3" <?php echo $cg5_3; ?>>
                            <label for="cg5_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Устные переводы</div>
                            </label>
                        </div>
                         <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_4]" id="cg5_4" <?php echo $cg5_4; ?>>
                            <label for="cg5_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Выездные переводы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[5_5]" id="cg5_5" <?php echo $cg5_5; ?>>
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
                    <input type="checkbox" name="cg[6_0]" id="categories_main6" class="CGMAIN" <?php echo $cg6_0; ?>>
                    <label for="categories_main6" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Маркетинг
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_1]" id="cg6_1" <?php echo $cg6_1; ?>>
                            <label for="cg6_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">SMM (социальные сети)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_2]" id="cg6_2" <?php echo $cg6_2; ?>>
                            <label for="cg6_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">SEO (поисковая выдача)</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_3]" id="cg6_3" <?php echo $cg6_3; ?>>
                            <label for="cg6_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Контекстная реклама</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_4]" id="cg6_4" <?php echo $cg6_4; ?>>
                            <label for="cg6_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Продажа и генерация лидов </div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_5]" id="cg6_5" <?php echo $cg6_5; ?>>
                            <label for="cg6_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Исследование рынка и опросы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[6_6]" id="cg6_6" <?php echo $cg6_6; ?>>
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
                    <input type="checkbox" name=cg[7_0] id="categories_main7" class="CGMAIN" <?php echo $cg7_0; ?>>
                    <label for="categories_main7" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Фотография
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_1]" id="cg7_1" <?php echo $cg7_1; ?>>
                            <label for="cg7_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Обработка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_2]" id="cg7_2" <?php echo $cg7_2; ?>>
                            <label for="cg7_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Выездная фотосъемка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_3]" id="cg7_3" <?php echo $cg7_3; ?>>
                            <label for="cg7_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Тематическое</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[7_4]" id="cg7_4" <?php echo $cg7_4; ?>>
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
                    <input type="checkbox" name="cg[8_0]" id="categories_main8" class="CGMAIN" <?php echo $cg8_0; ?>>
                    <label for="categories_main8" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Видео
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_1]" id="cg8_1" <?php echo $cg8_1; ?>>
                            <label for="cg8_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Монтаж и обработка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_2]" id="cg8_2" <?php echo $cg8_2; ?>>
                            <label for="cg8_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Написание субтитров</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_3]" id="cg8_3" <?php echo $cg8_3; ?>>
                            <label for="cg8_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Расскадровка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_4]" id="cg8_4" <?php echo $cg8_4; ?>>
                            <label for="cg8_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание видеоинфографики</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[8_5]" id="cg8_5" <?php echo $cg8_5; ?>>
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
                    <input type="checkbox" name="cg[9_0]" id="categories_main9" class="CGMAIN" <?php echo $cg9_0; ?>>
                    <label for="categories_main9" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Аудио и музыка
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_1]" id="cg9_1" <?php echo $cg9_1; ?>>
                            <label for="cg9_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Обработка</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_2]" id="cg9_2" <?php echo $cg9_2; ?>>
                            <label for="cg9_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Запись</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_3]" id="cg9_3" <?php echo $cg9_3; ?>>
                            <label for="cg9_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание звуков</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_4]" id="cg9_4" <?php echo $cg9_4; ?>>
                            <label for="cg9_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание с нуля</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[9_5]" id="cg9_5" <?php echo $cg9_5; ?>>
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
                    <input type="checkbox" name="cg[10_0]" id="categories_main10" class="CGMAIN" <?php echo $cg10_0; ?>>
                    <label for="categories_main10" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Бухгалтерия
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_1]" id="cg10_1" <?php echo $cg10_1; ?>>
                            <label for="cg10_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Ведение бухгалтерии</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_2]" id="cg10_2" <?php echo $cg10_2; ?>>
                            <label for="cg10_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Формирование отчетности</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_3]" id="cg10_3" <?php echo $cg10_3; ?>>
                            <label for="cg10_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Оптимизация</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_4]" id="cg10_4" <?php echo $cg10_4; ?>>
                            <label for="cg10_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность </div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[10_5]" id="cg10_5" <?php echo $cg10_5; ?>>
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
                    <input type="checkbox" name="cg[11_0]" id="categories_main11" class="CGMAIN" <?php echo $cg11_0; ?>>
                    <label for="categories_main11" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Юриспруденция
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_1]" id="cg11_1" <?php echo $cg11_1; ?>>
                            <label for="cg11_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Составление документации</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_2]" id="cg11_2" <?php echo $cg11_2; ?>>
                            <label for="cg11_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Консультирование</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_3]" id="cg11_3" <?php echo $cg11_3; ?>>
                            <label for="cg11_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[11_4]" id="cg11_4" <?php echo $cg11_4; ?>>
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
                    <input type="checkbox" name="cg[12_0]" id="categories_main12" class="CGMAIN" <?php echo $cg12_0; ?>>
                    <label for="categories_main12" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Журналистика
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_1]" id="cg12_1" <?php echo $cg12_1; ?>>
                            <label for="cg12_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Интервью</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_2]" id="cg12_2" <?php echo $cg12_2; ?>>
                            <label for="cg12_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Новости, статьи, репортажи</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_3]" id="cg12_3" <?php echo $cg12_3; ?>>
                            <label for="cg12_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность </div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[12_4]" id="cg12_4" <?php echo $cg12_4; ?>>
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
                    <input type="checkbox" name="cg[13_0]" id="categories_main13" class="CGMAIN" <?php echo $cg13_0; ?>>
                    <label for="categories_main13" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Архитектура
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_1]" id="cg13_1" <?php echo $cg13_1; ?>>
                            <label for="cg13_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Создание плана</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_2]" id="cg13_2" <?php echo $cg13_2; ?>>
                            <label for="cg13_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">3D макет</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_3]" id="cg13_3" <?php echo $cg13_3; ?>>
                            <label for="cg13_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Макет</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_4]" id="cg13_4" <?php echo $cg13_4; ?>>
                            <label for="cg13_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Ландшафтный дизайн</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_5]" id="cg13_5" <?php echo $cg13_5; ?>>
                            <label for="cg13_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Интерьер</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_6]" id="cg13_6" <?php echo $cg13_6; ?>>
                            <label for="cg13_6">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[13_7]" id="cg13_7" <?php echo $cg13_7; ?>>
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
                    <input type="checkbox" name="cg[14_0]" id="categories_main14" class="CGMAIN" <?php echo $cg14_0; ?>>
                    <label for="categories_main14" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Инженерия 
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_1]" id="cg14_1" <?php echo $cg14_1; ?>>
                            <label for="cg14_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Чертежи, схемы</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_2]" id="cg14_2" <?php echo $cg14_2; ?>>
                            <label for="cg14_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Проектирование</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_3]" id="cg14_3" <?php echo $cg14_3; ?>>
                            <label for="cg14_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Конструкции</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_4]" id="cg14_4" <?php echo $cg14_4; ?>>
                            <label for="cg14_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Узкоспециализированная деятельность</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[14_5]" id="cg14_5" <?php echo $cg14_5; ?>>
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
                    <input type="checkbox" name="cg[15_0]" id="categories_main15" class="CGMAIN" <?php echo $cg15_0; ?>>
                    <label for="categories_main15" class="categories_checkbox_main">
                        <i class="material-icons">done</i>
                    </label>
                    <div class="btn_open_mini_categories">Менеджмент 
                        <i class="material-icons">expand_more</i>
                    </div>
                    </div>
                    <div class="categories_mini_close">
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_1]" id="cg15_1" <?php echo $cg15_1; ?>>
                            <label for="cg15_1">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Администрирование</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_2]" id="cg15_2" <?php echo $cg15_2; ?>>
                            <label for="cg15_2">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Подбор людей</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_3]" id="cg15_3" <?php echo $cg15_3; ?>>
                            <label for="cg15_3">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Менеджер проекта</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_4]" id="cg15_4" <?php echo $cg15_4; ?>>
                            <label for="cg15_4">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Менеджер по продажам</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_5]" id="cg15_5" <?php echo $cg15_5; ?>>
                            <label for="cg15_5">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">PR-менеджер</div>
                            </label>
                        </div>
                        <div class="categories_mini_wrapper">
                            <input type="checkbox" name="cg[15_6]" id="cg15_6" <?php echo $cg15_6; ?>>
                            <label for="cg15_6">
                                <div class="categories_mini_box">
                                    <i class="material-icons">done</i>
                                </div>
                                <div class="categories_mini_text">Другое</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="categories_comment_me_wrap">
                    <h3>Комментарий к сферам деятельности:</h3>
                    <textarea maxlength="1200" name="cgComment" class="userStart_textarea_comments" style="width: 530px;"><?php echo $itemsSeText['about_cg']; ?></textarea>
                    <span class="userStart_for_comment">Необязательно</span>
                </div>
            </div>               
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>С какими предложениями обращаться?</h2>
            <textarea maxlength="1200" class="userStart_textarea_comments" style="width: 550px;" name="commentCall"><?php echo $itemsSeText['callback']; ?></textarea>
            <span class="userStart_for_comment">По умолчанию: "С любыми"</span>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content" style="margin-top: 0;">
            <h2>Смена пароля:</h2>
            <div class="userStart_wrap_table">
                <div class="userStart_wrap_table_item">
                    <h3>Старый пароль:</h3>
                    <div class="userStart_input_item">
                        <input type="password" name="passwordOld" style="margin-left: 10px;">
                    </div>
                </div>
            </div>
            <div class="userStart_wrap_table">
                <div class="userStart_wrap_table_item">
                    <h3>Новый пароль:</h3>
                    <div class="userStart_input_item newPasswordJS">
                        <input type="password" name="passwordNew" style="margin-left: 10px;" id="passwordNewJs">
                        <div class="changePassJs"></div>
                    </div>
                </div>
            </div>
            <div class="userStart_wrap_table">
                <div class="userStart_wrap_table_item">
                    <h3>Повторите новый пароль:</h3>
                    <div class="userStart_input_item newPasswordJS">
                        <input type="password" name="passwordNewTwo" style="margin-left: 10px;" id="passwordNewTwoJs">
                        <div class="changePassJs"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Средства связи</h2>
            <div class="userStart_callback_inputs_wrapper">
                <div class="userStart_callback_inputs" id="userStart_callback_append">
                  <?php if ($itemSelCall) { 
                    foreach ($itemSelCall as $callNum => $itemsSelCall) {
                  ?>
                    <div class="userStart_callback_inputs_item2" id="userStart_callback_inputs_item2_<?php echo $callNum; ?>">
                        <input type="text" name="CallName[<?php echo $callNum; ?>]" placeholder="Название" value="<?php echo $itemsSelCall['name']; ?>" maxlength="30">
                        <input type="text" name="CallContact[<?php echo $callNum; ?>]" placeholder="Контакт" value="<?php echo $itemsSelCall['contact']; ?>" maxlength="30">
                    </div>
                  <?php } } else {  ?>
                    <div class="userStart_callback_inputs_item2" id="userStart_callback_inputs_item2_0">
                        <input type="text" name="CallName[0]" placeholder="Название" maxlength="30">
                        <input type="text" name="CallContact[0]" placeholder="Контакт" maxlength="30">
                    </div>
                  <?php } ?>
                </div>
                <div class="btn_add_inputs_wrap" id="btn_add_inputs_callback_span">
                    <div class="btn_add_inputs" id="create_callback_inputs">Добавить поле</div>
                    <span>Больше добавить нельзя</span>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_userStart_content">
            <h2>Ссылки на социальные сети</h2>
            <div class="userStart_callback_inputs_wrapper">
                <div class="userStart_callback_inputs" id="create_netword_inputs_append">
                  <?php if ($itemSelNet) { 
                    foreach ($itemSelNet as $netNum => $itemsSelNet) {
                  ?>
                    <div class="userStart_callback_inputs_item2" id="userStart_callback_inputs_item2_<?php echo $netNum; ?>">
                        <input type="text" name="networkName[<?php echo $netNum; ?>]" placeholder="Название соц сети" value="<?php echo $itemsSelNet['network']; ?>" maxlength="30">
                        <input type="url" name="networkUrl[<?php echo $netNum; ?>]" placeholder="Прямая ссылка" value="<?php echo $itemsSelNet['url']; ?>" maxlength="30">
                    </div>
                  <?php } } else {  ?>
                    <div class="userStart_callback_inputs_item2" id="userStart_callback_inputs_item2_0">
                        <input type="text" name="networkName[0]" placeholder="Название соц сети" maxlength="30">
                        <input type="url" name="networkUrl[0]" placeholder="Прямая ссылка" maxlength="30">
                    </div>
                  <?php } ?>
                </div>
                <div class="btn_add_inputs_wrap" id="btn_add_inputs_network_span">
                    <div class="btn_add_inputs" id="create_netword_inputs">Добавить поле</div>
                    <span>Больше добавить нельзя</span>
                </div>
            </div>
        </div>
        <hr class="fancy-line">
        <div class="wrapper_btn_submit">
            <input type="submit" value="Обновить" name="submit" class="btn_submitMain">
            <div class="wrapper_btn_reset">
                <input type="reset" value="Вернуть как было" class="btnSettingForm">
                <i class="material-icons">check</i>
            </div>
        </div>
        <script src="static/formStart/formStart.js"></script>
        <script src="static/edit/edit.js"></script>
        <script type="text/javascript" src="static/main/autosize.js"></script>
        <script type="text/javascript">
          autosize(document.querySelectorAll('textarea'));
        </script>
    </form>


<?php include "footer.php"; ?>
<?php } } } } } ?>