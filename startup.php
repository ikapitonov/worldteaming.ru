<?php include "header.php"; $getURLid = $_GET['id']; ?>
<?php 
  if ($getURLid == 0 ) {
    echo '<script type="text/javascript">location="index.php"</script>';
  }  else { 

$sqlStartup = "SELECT id ,date_born, name, status, type, area, people, views,avatar_src FROM startups WHERE id = :id";
$stmtStartup = $pdo->prepare($sqlStartup);
$stmtStartup->execute([':id' => $getURLid]);
$itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
if (!$itemStartup) { ?>
    <style type="text/css">       
      .not_foundSandU {
        width: 300px;
        position: relative;
        top: 70px;
        margin: 0 auto;
      }
      .not_foundSandU img {
        width: 300px;
        display: block;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
      }
    </style>
    <div class="not_foundSandU">
        <img src="static/img/notFound.png">
    </div>
    </body>
    </html>
<?php } else {
$itemsStartup = $itemStartup[0];    


$sqlStartupTxt = "SELECT idea ,purpose, problems, philosophy, comment  FROM startups_text WHERE parent_id = :parent_id";
$stmtStartupTxt = $pdo->prepare($sqlStartupTxt);
$stmtStartupTxt->execute([':parent_id' => $getURLid]);
$itemStartupTxt = $stmtStartupTxt->fetchAll(PDO::FETCH_ASSOC); 
$itemsStartupTxt = $itemStartupTxt[0]; 

if ($itemsStartup['avatar_src']) {
    $Avatarka = "avatarsStartups/". $itemsStartup['avatar_src'];
} else {
    $Avatarka = "avatarsStartups/group.jpg";
}

if ($_SESSION['id'] && $_SESSION['auth']) {
  $sqlverify = "SELECT verify,creater FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
  $stmtverify = $pdo->prepare($sqlverify);
  $stmtverify->execute([':parent_id' => $getURLid , ':user_id' => $_SESSION['id']]);
  $itemverify = $stmtverify->fetchAll(PDO::FETCH_ASSOC);
  if ($itemverify) {
  $itemsverify = $itemverify[0];
  }

}

  $sqlUserFor = "SELECT id ,name, lastname, url_avatar FROM users WHERE id=:id";
  $stmtUserFor = $pdo->prepare($sqlUserFor);
?>
<?php include "static/startup/popupFunctions.php"; ?>
<title><?php echo $itemsStartup['name']; ?></title>
<link rel="stylesheet" type="text/css" href="static/startup/startup.css?v1"> 
<div class="wrap_with_Fo">  
    <div id="startup_wrapper_2divs">
        <div id="startup_wrapper_left">
            <div id="navbar_startups_forum">
                <div id="navbar_startups_wrap_items">
                    <a href="" id="startups_main_UNDERNAME"><h1 class="item_h1_main"><?php echo $itemsStartup['name']; ?></h1></a>
                </div>
                <div class="selectAll"><?php echo $itemsStartup['status']; ?></div>
            </div>
            <div class="startup_wrap_padding">
                <div class="setting_groupWrap"><span>Информация о стартапе</span></div>
                <ul class="startup_about_items_wrap">
                    <li class="startup_about_items_wraPper">
                        <div class="startup_about_Mainitem"><strong>Идея:</strong></div>
                        <div class="startup_about_Appenditem txtControl"><?php echo $itemsStartupTxt['idea']; ?></div>
                    </li>
                    <li class="startup_about_items_wraPper">
                        <div class="startup_about_Mainitem"><strong>Цель проекта:</strong></div>
                        <div class="startup_about_Appenditem txtControl"><?php echo $itemsStartupTxt['purpose']; ?></div>
                    </li>
                    <li class="startup_about_items_wraPper">
                        <div class="startup_about_Mainitem"><strong>Решаемые<br>проблемы:</strong></div>
                        <div class="startup_about_Appenditem txtControl"><?php echo $itemsStartupTxt['problems']; ?></div>
                    </li>
                    <li class="startup_about_items_wraPper">
                        <div class="startup_about_Mainitem"><strong>Философия<br>проекта:</strong></div>
                        <div class="startup_about_Appenditem txtControl"><?php echo $itemsStartupTxt['philosophy']; ?></div>
                    </li>
                    <?php if (!$itemsStartupTxt['comment']) {} else { ?>
                    <li class="startup_about_items_wraPper">
                        <div class="startup_about_Mainitem"><strong>Дополнительно:</strong></div>
                        <div class="startup_about_Appenditem txtControl"><?php echo $itemsStartupTxt['comment']; ?></div>
                    </li>
                    <?php } ?>
                    <li class="startup_about_items_wraPper" id="startup_about_items_last">
                        <div class="startup_about_Mainitem"><strong>Тематика:</strong></div>
                        <div class="startup_about_Appenditem">
                            <div class="statrup_categoryBiz_wrap">
                                <div class="cg_MAIN_print"><?php echo $itemsStartup['type']; ?></div>
                                <i class="material-icons tranform_icon">keyboard_backspace</i>        
                                <div class="cg_small_WRAPPER_DIV">
                                    <div class="cg_smallITEM"><?php echo $itemsStartup['area']; ?></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <hr class="fancy-line">
                <div class="setting_groupWrapUn">Не забывайте, что самое интересное в разделах :)</div>
                <div class="startup_wrappRetake">
                    <a href="section_idea-<?php echo $getURLid; ?>" class="Retake_bigItem">
                        <div class="Retake_1_item">
                            <i class="material-icons-outlined">accessibility_new</i>
                        </div>
                        <div class="Retake_2_item"><span>Идеи и предложения</span></div>
                        <div class="Retake_3_item"><i class="material-icons">keyboard_backspace</i></div>
                    </a>
                    <a href="section_docs-<?php echo $getURLid; ?>" class="Retake_bigItem">
                        <div class="Retake_1_item">
                            <i class="material-icons-outlined">insert_drive_file</i>
                        </div>
                        <div class="Retake_2_item"><span>Документы</span></div>
                        <div class="Retake_3_item"><i class="material-icons">keyboard_backspace</i></div>
                    </a>
                    <a href="section_task-<?php echo $getURLid; ?>" class="Retake_bigItem">
                        <div class="Retake_1_item">
                            <i class="material-icons-outlined">person_add</i>
                        </div>
                        <div class="Retake_2_item"><span>Задачник</span></div>
                        <div class="Retake_3_item"><i class="material-icons">keyboard_backspace</i></div>
                    </a>
                </div>
            </div>
        </div>
        <div id="startup_wrapper_right">
            <?php include "startupRight.php"; ?>
        </div>
    </div>


   <script src="static/startup/functionStartup.js"></script>
<?php include "footer.php"; ?>
<?php } } ?>
