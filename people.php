<?php include "header.php"; 
include_once "phpScripts/formatDateWord.php"; ?>
<script type="text/javascript" src="static/search/startups.js"></script>


<?php 

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

          $where = " "."WHERE"." ";
          $formStart = "formStart=1";
          $ANDForm = "";
          $arraySql = "";
          $Order = " "."id"." ";
          $DESC = " "."DESC"." ";
          $arraySql = ""; $arrayGet = "";
          $arrayEx = null; $stringPr = null; $arrayWords2 = null; $statusJoin = ""; $arrayStatus = ""; $cgJoin = ""; $arrayChS = "";
          $ST1 = null; $ST2 = null; $ST3 = null; $ST4 = null; $statusPr = null; $cgPr = null;
          $DESC_check = "";



          if (count($_POST) > 0 && isset($_POST['filters'])) {

              if (empty($_POST['desc'])) {
                $DESC = " "."DESC";
              } else {
                  $DESC = null;
                  $DESC_check = " "."checked";
                  $arrayEx = 1;
              }

              if (empty($_GET['search']) || $_GET['search'] == "undefined") {
                $pointSql = null;
              } else {
                  $pointSql = " ". "AND" ." "; 
              }


            if ( $_POST['status'] == "not_found_0" || $_POST['status'] == "not_found_S0") {
              $forCgSql = "";
            }
            else {
              
              $where = " "."WHERE"." ";
              $ANDForm = "AND";
              $arrayEx = 1;
              $statusPr = 1;
              $forCgSql = " "."AND" ." ";

              if ($_POST['status'] == "status_1") {
                $statusSql = "Свободен";
                $ST1 = " "."selected";
              } if ($_POST['status'] == "status_2") {
                  $statusSql = "Частично свободен";
                  $ST2 = " "."selected";
                } if ($_POST['status'] == "status_3") {
                    $statusSql = "Частично занят";
                    $ST3 = " "."selected";
                  } if ($_POST['status'] == "status_4") {
                      $statusSql = "Занят";
                      $ST4 = " "."selected";
                    }

              $statusJoin = "INNER JOIN users_static_info ON users_static_info.id=users.id";

              if ( $_POST['cg'] == false ) {
                $arrayStatus = "users_static_info.status=:status".$pointSql;
              } else {
                  $arrayStatus = "users_static_info.status=:status";
              }
            }


            if ( $_POST['cg'] == false ) {} 
              else {
                $where = " "."WHERE"." ";
                $ANDForm = "AND";
                $arrayEx = 1;
                $cgPr = 1;

                foreach ($_POST['cg'] as $itemsCg => $itemsSelCg) {                   
                    ${'cg'.$itemsCg} = " "."checked";                 
                }


                $cgJoin = "INNER JOIN users_want_cg ON users_want_cg.id=users.id";



                $arrayChS = $forCgSql."users_want_cg.cg=:cg".$pointSql;
            }
          }



          if (empty($_GET['search'])) { $string = null; } 
          elseif ($_GET['search'] == "undefined") { $string = null; }
            else {
              $string = strip_tags($_GET['search']);

              $where = " "."WHERE"." ";
              $ANDForm = "AND";
              $arrayEx = 1;
              $stringPr = 1;
            
              
              
              $arrayGet = "((name LIKE '%" . $string . "%' OR lastname LIKE '%" . $string . "%')
OR (CONCAT(name,' ',lastname) LIKE '%" . $string . "%'))";
             
          } 


          $sqlHuman = "SELECT users.id,`date`,name,lastname,url_avatar FROM users". " "."$statusJoin" ." ". "$cgJoin". " ".
                        "$where"." ". "$arrayStatus" ." ". "$arrayChS" ." ". "$arrayGet"." ". "$ANDForm" ." "."$formStart"  ." ".
                        " "."ORDER BY"."$Order"."$DESC"; 
          $stmtHuman = $pdo->prepare($sqlHuman); 
          if ($arrayEx > 0) {
            if ($statusPr > 0) {
              $stmtHuman->bindParam(':status' , $statusSql);
            }
            if ($cgPr > 0) {
              foreach ($_POST['cg'] as $key => &$val){
                $ArrCateg = explode("_", $key);
                  if ($ArrCateg[1] == 0){
                    $val= $ArrCateg[0];
                  } else {
                    $val = $ArrCateg[0]."_".$ArrCateg[1];
                  }
                  $key = ':cg';

                  $stmtHuman->bindParam($key, $val);
              }
            }
          } 
          $stmtHuman->execute();
          $itemHuman = $stmtHuman->fetchAll(PDO::FETCH_ASSOC);   ?>


<title>Поиск пользователей</title>
<link rel="stylesheet" type="text/css" href="static/search/searchUp.css">
<link rel="stylesheet" type="text/css" href="static/search/peopleCg.css">
<div class="wrap_with_Fo">


<div id="startup_wrapper_2divs">
    <div id="startup_wrapper_left">
        <div id="navbar_startups_forum">
            <div id="navbar_startups_wrap_items">
                <a href="" id="startups_main_UNDERNAME"><h1>Поиск пользователей</h1></a>
            </div>
            <div class="selectAll">
            	Найдено:<span><?php if ($itemHuman) { echo count($itemHuman); } else {echo 0;}?></span>
            </div>
        </div>
    	<div class="wrapper_search">
    		<div class="search_Icon1">
    			<i class="material-icons">search</i>
    		</div>
    		<form method="GET" id="formSearchText">
    		    <input type="text" autocomplete="off" style="width: 480px;" name="search" class="search_inputMain" placeholder="Поиск по имени и фамилии" maxlength="80" value="<?php echo $string; ?>">
    		    <div class="labelForReset">
    		    	<i class="material-icons">close</i>
    		    </div>
    		    <input type="submit" name="searchSub" class="search_inputBtn" value="Найти!">
    	    </form>
    	</div>
        <div class="startup_wrap_padding">
     	       

          <?php if ($itemHuman) { 

            $sqlSelStaticU = "SELECT status,city FROM users_static_info WHERE id=:id";
            $stmtSelStaticU = $pdo->prepare($sqlSelStaticU);

          ?>  

        	<?php foreach ($itemHuman as $itemsHuman1) { 


              $stmtSelStaticU->execute([':id' => $itemsHuman1['id'] ]);
              $itemSelStaticU = $stmtSelStaticU->fetchAll(PDO::FETCH_ASSOC); 
              $itemsSelStaticU = $itemSelStaticU[0];


              if ($itemsHuman1['url_avatar']) {
              $UrlImgPe = "avatarsUsers/". $itemsHuman1['url_avatar'];
              } else {
                $UrlImgPe = "avatarsUsers/itsMe.jpg";
              }   
              $dateDateSmall = formatDate($itemsHuman1['date'],"Регистрация:");  
            ?> 
            <div class="itemContent_wrapper">
                <div class="itemContent_wrapper_left">
                    <a href="user-<?php echo $itemsHuman1['id']; ?>">
                        <div class="content_bigImg content_bigImgPe<?php echo $itemsHuman1['id']; ?>"></div>
                        <style type="text/css">
                              .content_bigImgPe<?php echo $itemsHuman1['id']; ?> {
                                background-image: url(<?php echo $UrlImgPe; ?>);
                              }
                        </style>
                    </a>
                </div>
                <div class="itemContent_wrapper_right" style="margin-top: 5px; width: 570px;">
                    <div class="itemContentR_0">
                        <a href="user-<?php echo $itemsHuman1['id']; ?>" class="item_a_main itemContent_HREF namesHidden"><?php echo $itemsHuman1['name']." ".$itemsHuman1['lastname']; ?></a>
                        <!-- <div>действие</div> -->
                    </div>
                    <div class="itemContentR_2">
                        <span><?php echo $itemsSelStaticU['city']; ?></span>
                        <i class="material-icons tranform_icon">keyboard_backspace</i>
                        <span><?php echo $itemsSelStaticU['status']; ?></span>
                    </div>
                    <div class="itemContentR_3">
                        <div class="itemContent_countSt"><?php echo $dateDateSmall; ?></div>                       
                    </div>
                </div>
            </div>
            <?php } } else {?>
            	  <div class="notFound_pickImg">
                    <img src="static/img/notFound.png">
                </div>
            <?php } ?>
        </div>
    </div>

    <div id="startup_wrapper_right">
        <div class="profile_left_header_info">Фильтры поиска</div>
        <form method="POST" class="formWrapperFilters">
		    <div class="startup_menuSetting" style="margin: 0; padding: 0;">
            <div class="filters_wrapper">
                <h3>Сортировать по:</h3>
                <div class="filters_staticOrders">
                    <input type="radio" name="orderBy" value="orderBy1" id="orderBy1" checked>
                    <label for="orderBy1" class="orderByLabel orderByLabel1 orderByLabel1_Check">По дате регистрации</label>
                </div>
                <div class="filters_staticDesc">
                    <input type="checkbox" name="desc" id="descList" <?php echo $DESC_check; ?>>
                    <label for="descList" class="descListLabel">
                        <div class="categories_mini_box">
                            <i class="material-icons">done</i>
                        </div>
                        <div class="categories_mini_text">Обратный порядок</div>
                    </label>
                </div>
            </div>
            <div class="filters_wrapper">
                <h3>Статус:</h3>
                <div class="custom-select" style="width: 380px;">
                    <select name="status">
                        <option value="not_found_0">Не указано</option>
                        <option value="not_found_S0">Не указано</option>
                        <option value="status_1" <?php echo $ST1; ?>>Свободен</option>
                        <option value="status_2" <?php echo $ST2; ?>>Частично свободен</option>
                        <option value="status_3" <?php echo $ST3; ?>>Частично занят</option>
                        <option value="status_4" <?php echo $ST4; ?>>Занят</option>
                    </select>
                </div>
            </div>	
            <div class="filters_wrapper wrapperPcgAll">
              <h3>Сфера деятельности</h3>
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
                            <input type="checkbox" name="cg[12_1]" id="cg12_1">
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
            </div>    	
		        <div class="wrapSubBTNSr"><input type="submit" name="filters" class="btnSubFilters" value="Применить"></div>
		        <?php if ($arrayEx > 0) { ?>
            <a href="phpScripts/resetAll.php?id=2" id="resetFiltersHref">Очистить</a>
            <?php } else {} ?>
		    </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="static/search/search.js"></script>
<script type="text/javascript" src="static/search/peopleCg.js"></script>
<?php include "footer.php"; ?>


