<?php include "header.php"; 
include_once "phpScripts/formatDateWord.php"; ?>
<script type="text/javascript" src="static/search/startups.js"></script>


<?php 

            
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
            if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {
                $startupHref = "signup";
            } else {
                $startupHref = "createStartup";
            }



          
          	$where = "";
          	$arraySql = ""; $arrayGet = "";
          	$arrayEx = null; $statusPr = null; $categPr = null; $areaPr = null; $stringPr = null;
          	$Order = " ". "id" ." "; $DESC = " "."DESC"; $Order_check1 = " "."checked"; $Order_check2 = ""; $DESC_check = "";

          	$ST1=""; $ST2=""; $ST3=""; $ST4="";
          	$CGst1=""; $CGst2=""; $CGst3=""; $CGst4="";
          	$areaS1="";$areaS2="";$areaS3="";$areaS4="";$areaS5="";$areaS6="";$areaS7="";$areaS8="";$areaS9="";$areaS10="";
            $areaS11="";$areaS12="";$areaS13="";$areaS14="";$areaS15="";$areaS16="";$areaS17="";$areaS18="";$areaS19="";$areaS20="";
            $areaS21="";$areaS22="";$areaS23="";$areaS24="";$areaS25="";$areaS26="";
            


          if (count($_POST) > 0 && isset($_POST['filters'])) {

          	if (empty($_POST['orderBy'])) {
          	} else {
          		  if ($_POST['orderBy'] == "orderBy1") {
                  $Order = " ". "id" ." ";
                  $Order_check1 = " "."checked";
                  $Order_check2 = "";
                } elseif ($_POST['orderBy'] == "orderBy2"){
		        			  $Order = " ". "views" ." ";
		        			  $Order_check2 = " "."checked";
		        			  $Order_check1 = "";
          	    }
          	}
          		if (empty($_POST['desc'])) {
          			$DESC = " "."DESC";
          		} else {
          			  $DESC = null;
          			  $DESC_check = " "."checked";
          		}

            if (empty($_GET['search']) || $_GET['search'] == "undefined") {
            	$pointSql = null;
            } else {
            	  $pointSql = " ". "AND" ." "; 
            }

          	if ( $_POST['status'] == "not_found_0" || $_POST['status'] == "not_found_S0") {}
          	  else {
                $where = " "."WHERE"." ";
                $arrayEx = 1;
                $statusPr = 1;

                if ($_POST['status'] == "status_1") {
						      $statusSql = "Новый проект";
						      $ST1 = " "."selected";
						    } if ($_POST['status'] == "status_2") {
						        $statusSql = "Развивающийся проект";
						        $ST2 = " "."selected";
						      } if ($_POST['status'] == "status_3") {
						          $statusSql = "Действующий стартап";
						          $ST3 = " "."selected";
						        } if ($_POST['status'] == "status_4") {
						            $statusSql = "Компания";
						            $ST4 = " "."selected";
						          }

                $arraySql = "status=:status".$pointSql;
          	}
          	if ( $_POST['Main_categ'] == "not_found_1" || $_POST['Main_categ'] == "not_found_C1") {}
          		else {
          			$where = " "."WHERE"." ";
          			$arrayEx = 1;
          			$categPr = 1;

          			  if ($_POST['Main_categ'] == "categ_1") {
									  $categSql = "Производство";
									  $CGst1 = " "."selected";
									} if ($_POST['Main_categ'] == "categ_2") {
									    $categSql = "Торговля";
									    $CGst2 = " "."selected";
									  } if ($_POST['Main_categ'] == "categ_3") {
									      $categSql = "Финансы/страхование";
									      $CGst3 = " "."selected";
									    } if ($_POST['Main_categ'] == "categ_4") {
									        $categSql = "Агенство";
									        $CGst4 = " "."selected";
									      }
                  
                  if ($statusPr > 0) {
                  	$arraySql =  "status=:status AND type=:type".$pointSql;
                  }	else {
                  	  $arraySql =  "type=:type".$pointSql;
                  }
									     
          	}
          	if ( $_POST['area_st'] == "not_found_2" || $_POST['area_st'] == "not_found_A2") {}
          		else {
          			$where = " "."WHERE"." ";
          			$arrayEx = 1;
          			$areaPr = 1;


          			if ($_POST['area_st'] == "area_1") {
							    $areaSql = "Автомобильный бизнес";
							    $areaS1 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_2") {
							    $areaSql = "Гостиницы, рестораны";
							    $areaS2 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_3") {
							    $areaSql = "Государственная деятельность";
							    $areaS3 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_4") {
							    $areaSql = "Дизайн, проектирование";
							    $areaS4 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_5") {
							    $areaSql = "Добывающая отрасль";
							    $areaS5 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_6") {
							    $areaSql = "Исскуство, культура";
							    $areaS6 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_7") {
							    $areaSql = "ИТ, интернет";
							    $areaS7 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_8") {
							    $areaSql = "Кино, СМИ,Продюсирование";
							    $areaS8 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_9") {
							    $areaSql = "Лесная промышленность";
							    $areaS9 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_10") {
							    $areaSql = "Маркетинг, реклама, PR";
							    $areaS10 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_11") {
							    $areaSql = "Медицина";
							    $areaS11 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_12") {
							    $areaSql = "Недвижимость, аренда";
							    $areaS12 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_13") {
							    $areaSql = "Оптовая торговля";
							    $areaS13 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_14") {
							    $areaSql = "Образование";
							    $areaS14 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_15") {
							    $areaSql = "Перевозки, логистика";
							    $areaS15 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_16") {
							    $areaSql = "Продукты питания";
							    $areaS16 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_17") {
							    $areaSql = "Розничная торговля";
							    $areaS17 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_18") {
							    $areaSql = "Сельское хозяйство";
							    $areaS18 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_19") {
							    $areaSql = "Строительство, проектирование";
							    $areaS19 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_20") {
							    $areaSql = "Товары потребления (непищевые)";
							    $areaS20 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_21") {
							    $areaSql = "Услуги для бизнеса, B2B";
							    $areaS21 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_22") {
							    $areaSql = "Услуги для населения";
							    $areaS22 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_23") {
							    $areaSql = "Финансовый сектор";
							    $areaS23 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_24") {
							    $areaSql = "Химическое производство";
							    $areaS24 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_25") {
							    $areaSql = "Электроника, техника";
							    $areaS25 = " "."selected";
							  } elseif ($_POST['area_st'] == "area_26") {
							    $areaSql = "Энергетика";
							    $areaS26 = " "."selected";
							  }

							  if ($statusPr > 0 && $categPr == null) {
                	$arraySql =  "status=:status AND area=:area".$pointSql;
                }	elseif ($statusPr == null && $categPr >0) {
                	  $arraySql =  "type=:type AND area=:area".$pointSql;
                } elseif ($statusPr > 0 && $categPr > 0) {
                	  $arraySql = "status=:status AND type=:type AND area=:area".$pointSql;
                }
                  elseif ($statusPr == null && $categPr == null) {
                	  $arraySql = "area=:area".$pointSql;
                }
          	}
          }


        





          if (empty($_GET['search'])) { $string = null; } 
          elseif ($_GET['search'] == "undefined") { $string = null; }
          	else {
          	  $string = strip_tags($_GET['search']);

          	  $where = " "."WHERE"." ";
          		$arrayEx = 1;
          		$stringPr = 1;

              $arrayGet = "name LIKE :name";
          }
          


          $sqlStartup = "SELECT id,date_born,name,status,type,area,views,avatar_src FROM startups $where"."$arraySql"."$arrayGet".
                        " "."ORDER BY"."$Order"."$DESC";
          $stmtStartup = $pdo->prepare($sqlStartup); 
          if ($arrayEx > 0) {
            
          	if ($statusPr > 0) {
              $stmtStartup->bindParam(':status' , $statusSql);           
          	} 
          	if ($categPr > 0) {
          		$stmtStartup->bindParam(':type' , $categSql);
          	}
          	if ($areaPr > 0) {
          		$stmtStartup->bindParam(':area' , $areaSql);
          	}
          	if ($stringPr > 0) {
          		$stmtStartup->bindValue(':name',"%". $string ."%");
          	}
          } 
          $stmtStartup->execute();
          $itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC);   ?>


<title>Поиск стартапов</title>
<link rel="stylesheet" type="text/css" href="static/settingStartup/settingMain.css">
<link rel="stylesheet" type="text/css" href="static/search/searchUp.css">
<link rel="stylesheet" type="text/css" href="static/search/startups.css">
<div class="wrap_with_Fo">


<div id="startup_wrapper_2divs">
    <div id="startup_wrapper_left">
        <div id="navbar_startups_forum">
            <div id="navbar_startups_wrap_items">
                <a href="" id="startups_main_UNDERNAME"><h1>Поиск стартапов</h1></a>
            </div>
            <div class="selectAll">
            	Найдено:<span><?php if ($itemStartup) { echo count($itemStartup); } else {echo 0;}?></span>
            </div>
               <?php if ($CountStart < 6) { ?>
                <a href="<?php echo $startupHref; ?>" id="createStartup_wrap">Создать стартап</a>
               <?php } else {} ?>
        </div>
    	<div class="wrapper_search">
    		<div class="search_Icon1">
    			<i class="material-icons">search</i>
    		</div>
    		<form method="GET" id="formSearchText">
    		    <input type="text" autocomplete="off" style="width: 580px;" name="search" class="search_inputMain" placeholder="Поиск по названию" maxlength="80" value="<?php echo $string; ?>">
    		    <div class="labelForReset">
    		    	<i class="material-icons">close</i>
    		    </div>
    		    <input type="submit" name="searchSub" class="search_inputBtn" value="Найти!">
    	    </form>
    	</div>
        <div class="startup_wrap_padding">
     	       

          <?php if ($itemStartup) { ?>

        	<?php foreach ($itemStartup as $itemsStartup) { 


            if ($itemsStartup['avatar_src']) {
              $UrlImgSt3 = "avatarsStartups/". $itemsStartup['avatar_src'];
            } else {
                $UrlImgSt3 = "avatarsStartups/group.jpg";
            }

            $dateDateSmall = formatDate($itemsStartup['date_born'],"Дата основная:"); 
            ?> 
            <div class="itemContent_wrapper">
                <div class="itemContent_wrapper_left">
                    <a href="startup-<?php echo $itemsStartup['id']; ?>">
                        <div class="content_bigImg content_bigImgSt3<?php echo $itemsStartup['id']; ?>"></div>
                        <style type="text/css">
                              .content_bigImgSt3<?php echo $itemsStartup['id']; ?> {
                                background-image: url(<?php echo $UrlImgSt3; ?>);
                              }
                        </style>
                    </a>
                </div>
                <div class="itemContent_wrapper_right" style="width: 670px;">
                    <div class="itemContentR_1">
                        <a href="startup-<?php echo $itemsStartup['id']; ?>" class="item_a_main itemContent_HREF namesHidden"><?php echo $itemsStartup['name']; ?></a>
                        <!-- <div>действие</div> -->
                    </div>
                    <div class="itemContentR_2">
                        <span><?php echo $itemsStartup['type']; ?></span>
                        <i class="material-icons tranform_icon">keyboard_backspace</i>
                        <span><?php echo $itemsStartup['area']; ?></span>
                    </div>
                    <div class="itemContentR_3">
                        <div class="itemContent_countSt"><?php echo $dateDateSmall; ?></div>
                        <div class="itemContent_countSt">
                            <i class="material-icons">remove_red_eye</i>Просмотры: <span><?php echo $itemsStartup['views']; ?></span>
                        </div>
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
		        		  <input type="radio" name="orderBy" value="orderBy1" id="orderBy1" <?php echo $Order_check1; ?>>
                  <input type="radio" name="orderBy" value="orderBy2" id="orderBy2" <?php echo $Order_check2; ?>>
                  <label for="orderBy1" class="orderByLabel orderByLabel1">По дате регистрации</label>
                  <label for="orderBy2" class="orderByLabel orderByLabel2">По популярности</label>
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
		        	<h3>Статус стартапа:</h3>
		        	<div class="custom-select">
		                <select name="status">
		                    <option value="not_found_0">Не указано</option>
		                    <option value="not_found_S0">Не указано</option>
		                    <option value="status_1" <?php echo $ST1; ?>>Новый проект (на уровне идеи)</option>
		                    <option value="status_2" <?php echo $ST2; ?>>Развивающийся проект (на уровне развития)</option>
		                    <option value="status_3" <?php echo $ST3; ?>>Действующий стартап</option>
		                    <option value="status_4" <?php echo $ST4; ?>>Компания</option>
		                </select>
		            </div>
		        </div>
		        <div class="filters_wrapper">
		        	<h3>Вид деятельности:</h3>
		        	<div class="custom-select">
                        <select name="Main_categ">
                            <option value="not_found_1">Не указано</option>
                            <option value="not_found_C1">Не указано</option>
                            <option value="categ_1" <?php echo $CGst1; ?>>Производство</option>
                            <option value="categ_2" <?php echo $CGst2; ?>>Торговля</option>
                            <option value="categ_3" <?php echo $CGst3; ?>>Финансы/страхование</option>>
                            <option value="categ_4" <?php echo $CGst4; ?>>Агенство</option>
                        </select>
                    </div>
		        </div>
		        <div class="filters_wrapper">
		        	<h3>Отрасль стартапа:</h3>
		        	<div class="custom-select">
                        <select name="area_st">
                            <option value="not_found_2">Не указано</option>
                            <option value="not_found_A2">Не указано</option>
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
            <div class="wrapSubBTNSr"><input type="submit" name="filters" class="btnSubFilters" value="Применить"></div>
		        <?php if ($arrayEx > 0) { ?>
		        <a href="phpScripts/resetAll.php?id=1" id="resetFiltersHrefS">Очистить</a>
		        <?php } else {} ?>
		    </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="static/search/search.js"></script>


<?php include "footer.php"; ?>
</body>
</html>
