window.addEventListener('DOMContentLoaded', function() {  

    //форматирование текста textarea_blog 
    var textarea_blog_setting_text = document.querySelector('#textarea_blog');
    textarea_blog_setting_text.designMode = 'on';
    // document.execCommand('styleWithCSS', false , true );
    var onclick_function_textarea_focus_class = document.querySelectorAll('.onclick_function_textarea_focus_class');
    for (var i = 0; i < onclick_function_textarea_focus_class.length; i++) {
      onclick_function_textarea_focus_class[i].addEventListener('click', function () {
        document.querySelector('#textarea_blog').focus(); });
    }
document.execCommand("defaultParagraphSeparator", false, "br");

    document.querySelector('#btn_exec_strong').addEventListener('click', function Bold () {
      textarea_blog_setting_text.value = document.execCommand('Bold', false , null );
      if (document.queryCommandState('bold')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_italic').addEventListener('click', function Italic () {
      textarea_blog_setting_text.value = document.execCommand('italic', false , null );
      if (document.queryCommandState('italic')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_underline').addEventListener('click', function underline () {
      textarea_blog_setting_text.value = document.execCommand('underline', false , null );
      if (document.queryCommandState('underline')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_format_list_numbered').addEventListener('click', function insertOrderedList () {
      textarea_blog_setting_text.value = document.execCommand('insertOrderedList', false , null );
      if (document.queryCommandState('insertOrderedList')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_format_list_bulleted').addEventListener('click', function insertUnorderedList () {
      textarea_blog_setting_text.value = document.execCommand('insertUnorderedList', false , null );
      if (document.queryCommandState('insertUnorderedList')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_format_align_left').addEventListener('click', function justifyLeft () {
      textarea_blog_setting_text.value = document.execCommand('justifyLeft', false , null );
      if (document.queryCommandState('justifyLeft')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_format_align_center').addEventListener('click', function justifyCenter () {
      textarea_blog_setting_text.value = document.execCommand('justifyCenter', false , null );
      if (document.queryCommandState('justifyCenter')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_format_align_right').addEventListener('click', function justifyRight () {
      textarea_blog_setting_text.value = document.execCommand('justifyRight', false , null );
      if (document.queryCommandState('justifyRight')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_exec_format_align_justify').addEventListener('click', function justifyFull () {
      textarea_blog_setting_text.value = document.execCommand('justifyFull', false , null );
      if (document.queryCommandState('justifyFull')) {
        this.classList.add('btn_minimal_execActive');
      } else { this.classList.remove('btn_minimal_execActive'); }
    });



    document.querySelector('#btn_exec_linkCreate').addEventListener('click', function () {
      var trueUrl = prompt('Введите адрес на выделенную область', 'http://');
      if (trueUrl != "") {
        createLink();
      }

      function saveSelection() {
          if (window.getSelection) {
              sel = window.getSelection();
              if (sel.getRangeAt && sel.rangeCount) {
                  var ranges = [];
                  for (var i = 0, len = sel.rangeCount; i < len; ++i) {
                      ranges.push(sel.getRangeAt(i));
                  }
                  return ranges;
              }
          } else if (document.selection && document.selection.createRange) {
              return document.selection.createRange();
          }
          return null;
      }

      function restoreSelection(savedSel) {
          if (savedSel) {
              if (window.getSelection) {
                  sel = window.getSelection();
                  sel.removeAllRanges();
                  for (var i = 0, len = savedSel.length; i < len; ++i) {
                      sel.addRange(savedSel[i]);
                  }
              } else if (document.selection && savedSel.select) {
                  savedSel.select();
              }
          }
      }

      function createLink() {
          var savedSel = saveSelection();
          restoreSelection(savedSel);
          textarea_blog_setting_text.value = document.execCommand("CreateLink", false, trueUrl);
      }
    });


document.querySelector('[contenteditable]').addEventListener('paste', (e) => {
    e.preventDefault();
    const text = (e.originalEvent || e).clipboardData.getData('text/plain');
    window.document.execCommand('insertText', false, text);
});

    //Не получается передавать одну и ту же функцию с разными параметрами
    document.querySelector('#btn_minimal_exec_text_format_Roboto').addEventListener('click', function fontName () {
      textarea_blog_setting_text.value = document.execCommand('fontName', false , 'Roboto' );
      // if (document.queryCommandValue('fontName', 'Roboto' )) {
      //   this.classList.add('btn_minimal_execActive');
      // } else { this.classList.remove('btn_minimal_execActive'); }
    });
    document.querySelector('#btn_minimal_exec_text_format_Cuprum').addEventListener('click', function fontName () {
      textarea_blog_setting_text.value = document.execCommand('fontName', false , 'Cuprum' );
    });
    document.querySelector('#btn_minimal_exec_text_format_Germania').addEventListener('click', function fontName () {
      textarea_blog_setting_text.value = document.execCommand('fontName', false , 'Germania One' );
    });
    document.querySelector('#btn_minimal_exec_text_format_Krushnadevaraya').addEventListener('click', function fontName () {
      textarea_blog_setting_text.value = document.execCommand('fontName', false , 'Sree Krushnadevaraya' );
    });
    // нужно сделать
    document.querySelector('#btn_minimal_exec_text_size8').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("fontSize", false, "1");
    });
    document.querySelector('#btn_minimal_exec_text_size14').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("fontSize", false, "2");
    });
    document.querySelector('#btn_minimal_exec_text_size16').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("fontSize", false, "3");
    });
    document.querySelector('#btn_minimal_exec_text_size20').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("fontSize", false, "4");
    });
    document.querySelector('#btn_minimal_exec_text_size24').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("fontSize", false, "5");
    });
    document.querySelector('#btn_minimal_exec_text_size36').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("fontSize", false, "6");
    });
    document.querySelector('#btn_minimal_exec_text_size48').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("fontSize", false, "7");
    });

    document.querySelector('#btn_minimal_exec_text_color1').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(51, 51, 51)');
      FontColor1_On (this, 'rgb(51, 51, 51)');
    });
    document.querySelector('#btn_minimal_exec_text_color2').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(0, 0, 0)');
      FontColor2_On (this, 'rgb(0, 0, 0)');
    });
    document.querySelector('#btn_minimal_exec_text_color3').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(255, 255, 255)');
      FontColor3_On (this, 'rgb(255, 255, 255)');
    });
    document.querySelector('#btn_minimal_exec_text_color4').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(216, 216, 216)');
      FontColor4_On (this, 'rgb(216, 216, 216)');
    });
    document.querySelector('#btn_minimal_exec_text_color5').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(153, 139, 139)');
      FontColor5_On (this, 'rgb(153, 139, 139)');
    });
    document.querySelector('#btn_minimal_exec_text_color6').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(5, 0, 255)');
      FontColor6_On (this, 'rgb(5, 0, 255)');
    });
    document.querySelector('#btn_minimal_exec_text_color7').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(22, 20, 167)');
      FontColor7_On (this, 'rgb(22, 20, 167)');
    });
    document.querySelector('#btn_minimal_exec_text_color8').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(80, 108, 255)');
      FontColor8_On (this, 'rgb(80, 108, 255)');
    });
    document.querySelector('#btn_minimal_exec_text_color9').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(234, 0, 255)');
      FontColor9_On (this, 'rgb(234, 0, 255)');
    });
    document.querySelector('#btn_minimal_exec_text_color10').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(255, 0, 26)');
      FontColor10_On (this, 'rgb(255, 0, 26)');
    });
    document.querySelector('#btn_minimal_exec_text_color11').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(200, 0, 20)');
      FontColor11_On (this, 'rgb(200, 0, 20)');
    });
    document.querySelector('#btn_minimal_exec_text_color12').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(0, 255, 146)');
      FontColor12_On (this, 'rgb(0, 255, 146)');
    });
    document.querySelector('#btn_minimal_exec_text_color13').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(0, 176, 101)');
      FontColor13_On (this, 'rgb(0, 176, 101)');
    });
    document.querySelector('#btn_minimal_exec_text_color14').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(0, 255, 0)');
      FontColor14_On (this, 'rgb(0, 255, 0)');
    });
    document.querySelector('#btn_minimal_exec_text_color15').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(255, 250, 0)');
      FontColor15_On (this, 'rgb(255, 250, 0)');
    });
    document.querySelector('#btn_minimal_exec_text_color16').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(255, 207, 5)');
      FontColor16_On (this, 'rgb(255, 207, 5)');
    });
    document.querySelector('#btn_minimal_exec_text_color17').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, 'rgb(238, 229, 35)');
      FontColor17_On (this, 'rgb(238, 229, 35)');
    });
    document.querySelector('#btn_minimal_exec_text_color18').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("foreColor", false, '#DB1010');
      FontColor18_On (this, 'rgb(219, 16, 16)');
    });

    document.querySelector('#btn_minimal_exec_textBack_color1').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("Backcolor", false, 'rgb(51, 51, 51)');
      BackColor1_On (this, 'rgb(51, 51, 51)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color2').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(0, 0, 0)');
      BackColor2_On (this, 'rgb(0, 0, 0)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color3').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(255, 255, 255)');
      BackColor3_On (this, 'rgb(255, 255, 255)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color4').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(216, 216, 216)');
      BackColor4_On (this, 'rgb(216, 216, 216)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color5').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(153, 139, 139)');
      BackColor5_On (this, 'rgb(153, 139, 139)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color6').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(5, 0, 255)');
      BackColor6_On (this, 'rgb(5, 0, 255)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color7').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(22, 20, 167)');
      BackColor7_On (this, 'rgb(22, 20, 167)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color8').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(80, 108, 255)');
      BackColor8_On (this, 'rgb(80, 108, 255)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color9').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(234, 0, 255)');
      BackColor9_On (this, 'rgb(234, 0, 255)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color10').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(255, 0, 26)');
      BackColor10_On (this, 'rgb(255, 0, 26)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color11').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(200, 0, 20)');
      BackColor11_On (this, 'rgb(200, 0, 20)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color12').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(0, 255, 146)');
      BackColor12_On (this, 'rgb(0, 255, 146)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color13').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(0, 176, 101)');
      BackColor13_On (this, 'rgb(0, 176, 101)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color14').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(0, 255, 0)');
      BackColor14_On (this, 'rgb(0, 255, 0)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color15').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(255, 250, 0)');
      BackColor15_On (this, 'rgb(255, 250, 0)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color16').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(255, 207, 5)');
      BackColor16_On (this, 'rgb(255, 207, 5)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color17').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, 'rgb(238, 229, 35)');
      BackColor17_On (this, 'rgb(238, 229, 35)');
    });
    document.querySelector('#btn_minimal_exec_textBack_color18').addEventListener('click', function () {
      textarea_blog_setting_text.value = document.execCommand("BackColor", false, '#DB1010');
      BackColor18_On (this, 'rgb(219, 16, 16)');
    });

     

     

    // общая валидация формы  
    document.querySelector('#textarea_blog').addEventListener('mouseup', function() {
      BoldOn(document.querySelector('#btn_exec_strong'));
      ItalicOn(document.querySelector('#btn_exec_italic'));
      underlineOn(document.querySelector('#btn_exec_underline'));
      insertOrderedListOn(document.querySelector('#btn_exec_format_list_numbered'));
      insertUnorderedListOn(document.querySelector('#btn_exec_format_list_bulleted'));
      justifyLeftOn(document.querySelector('#btn_exec_format_align_left'));
      justifyCenterOn(document.querySelector('#btn_exec_format_align_center'));
      justifyRightOn(document.querySelector('#btn_exec_format_align_right'));
      justifyFullOn(document.querySelector('#btn_exec_format_align_justify'));

      FontFamily1_On(document.querySelector('#btn_minimal_exec_text_format_Roboto'));
      FontFamily2_On(document.querySelector('#btn_minimal_exec_text_format_Cuprum'));
      FontFamily3_On(document.querySelector('#btn_minimal_exec_text_format_Germania'));
      FontFamily4_On(document.querySelector('#btn_minimal_exec_text_format_Krushnadevaraya'));

      FontSize1_On(document.querySelector('#btn_minimal_exec_text_size8'));
      FontSize2_On(document.querySelector('#btn_minimal_exec_text_size14'));
      FontSize3_On(document.querySelector('#btn_minimal_exec_text_size16'));
      FontSize4_On(document.querySelector('#btn_minimal_exec_text_size20'));
      FontSize5_On(document.querySelector('#btn_minimal_exec_text_size24'));
      FontSize6_On(document.querySelector('#btn_minimal_exec_text_size36'));
      FontSize7_On(document.querySelector('#btn_minimal_exec_text_size48'));

      // Цвет текста 
      FontColor1_On (document.querySelector('#btn_minimal_exec_text_color1'), 'rgb(51, 51, 51)');
      FontColor2_On (document.querySelector('#btn_minimal_exec_text_color2'), 'rgb(0, 0, 0)');
      FontColor3_On (document.querySelector('#btn_minimal_exec_text_color3'), 'rgb(255, 255, 255)');
      FontColor4_On (document.querySelector('#btn_minimal_exec_text_color4'), 'rgb(216, 216, 216)');
      FontColor5_On (document.querySelector('#btn_minimal_exec_text_color5'), 'rgb(153, 139, 139)');
      FontColor6_On (document.querySelector('#btn_minimal_exec_text_color6'), 'rgb(5, 0, 255)');
      FontColor7_On (document.querySelector('#btn_minimal_exec_text_color7'), 'rgb(22, 20, 167)');
      FontColor8_On (document.querySelector('#btn_minimal_exec_text_color8'), 'rgb(80, 108, 255)');
      FontColor9_On (document.querySelector('#btn_minimal_exec_text_color9'), 'rgb(234, 0, 255)');
      FontColor10_On (document.querySelector('#btn_minimal_exec_text_color10'), 'rgb(255, 0, 26)');
      FontColor11_On (document.querySelector('#btn_minimal_exec_text_color11'), 'rgb(200, 0, 20)');
      FontColor12_On (document.querySelector('#btn_minimal_exec_text_color12'), 'rgb(0, 255, 146)');
      FontColor13_On (document.querySelector('#btn_minimal_exec_text_color13'), 'rgb(0, 176, 101)');
      FontColor14_On (document.querySelector('#btn_minimal_exec_text_color14'), 'rgb(0, 255, 0)');
      FontColor15_On (document.querySelector('#btn_minimal_exec_text_color15'), 'rgb(255, 250, 0)');
      FontColor16_On (document.querySelector('#btn_minimal_exec_text_color16'), 'rgb(255, 207, 5)');
      FontColor17_On (document.querySelector('#btn_minimal_exec_text_color17'), 'rgb(238, 229, 35)');
      FontColor18_On (document.querySelector('#btn_minimal_exec_text_color18'), 'rgb(219, 16, 16)');

      // Фон текста 
      BackColor1_On (document.querySelector('#btn_minimal_exec_textBack_color1'), 'rgb(51, 51, 51)');
      BackColor2_On (document.querySelector('#btn_minimal_exec_textBack_color2'), 'rgb(0, 0, 0)');
      BackColor3_On (document.querySelector('#btn_minimal_exec_textBack_color3'), 'rgb(255, 255, 255)');
      BackColor4_On (document.querySelector('#btn_minimal_exec_textBack_color4'), 'rgb(216, 216, 216)');
      BackColor5_On (document.querySelector('#btn_minimal_exec_textBack_color5'), 'rgb(153, 139, 139)');
      BackColor6_On (document.querySelector('#btn_minimal_exec_textBack_color6'), 'rgb(5, 0, 255)');
      BackColor7_On (document.querySelector('#btn_minimal_exec_textBack_color7'), 'rgb(22, 20, 167)');
      BackColor8_On (document.querySelector('#btn_minimal_exec_textBack_color8'), 'rgb(80, 108, 255)');
      BackColor9_On (document.querySelector('#btn_minimal_exec_textBack_color9'), 'rgb(234, 0, 255)');
      BackColor10_On (document.querySelector('#btn_minimal_exec_textBack_color10'), 'rgb(255, 0, 26)');
      BackColor11_On (document.querySelector('#btn_minimal_exec_textBack_color11'), 'rgb(200, 0, 20)');
      BackColor12_On (document.querySelector('#btn_minimal_exec_textBack_color12'), 'rgb(0, 255, 146)');
      BackColor13_On (document.querySelector('#btn_minimal_exec_textBack_color13'), 'rgb(0, 176, 101)');
      BackColor14_On (document.querySelector('#btn_minimal_exec_textBack_color14'), 'rgb(0, 255, 0)');
      BackColor15_On (document.querySelector('#btn_minimal_exec_textBack_color15'), 'rgb(255, 250, 0)');
      BackColor16_On (document.querySelector('#btn_minimal_exec_textBack_color16'), 'rgb(255, 207, 5)');
      BackColor17_On (document.querySelector('#btn_minimal_exec_textBack_color17'), 'rgb(238, 229, 35)');
      BackColor18_On (document.querySelector('#btn_minimal_exec_textBack_color18'), 'rgb(219, 16, 16)');
    });
    document.querySelector('#textarea_blog').addEventListener('input', function() {
      BoldOn(document.querySelector('#btn_exec_strong'));
      ItalicOn(document.querySelector('#btn_exec_italic'));
      underlineOn(document.querySelector('#btn_exec_underline'));
      insertOrderedListOn(document.querySelector('#btn_exec_format_list_numbered'));
      insertUnorderedListOn(document.querySelector('#btn_exec_format_list_bulleted'));
      justifyLeftOn(document.querySelector('#btn_exec_format_align_left'));
      justifyCenterOn(document.querySelector('#btn_exec_format_align_center'));
      justifyRightOn(document.querySelector('#btn_exec_format_align_right'));
      justifyFullOn(document.querySelector('#btn_exec_format_align_justify'));

      FontFamily1_On(document.querySelector('#btn_minimal_exec_text_format_Roboto'));
      FontFamily2_On(document.querySelector('#btn_minimal_exec_text_format_Cuprum'));
      FontFamily3_On(document.querySelector('#btn_minimal_exec_text_format_Germania'));
      FontFamily4_On(document.querySelector('#btn_minimal_exec_text_format_Krushnadevaraya'));

      FontSize1_On(document.querySelector('#btn_minimal_exec_text_size8'));
      FontSize2_On(document.querySelector('#btn_minimal_exec_text_size14'));
      FontSize3_On(document.querySelector('#btn_minimal_exec_text_size16'));
      FontSize4_On(document.querySelector('#btn_minimal_exec_text_size20'));
      FontSize5_On(document.querySelector('#btn_minimal_exec_text_size24'));
      FontSize6_On(document.querySelector('#btn_minimal_exec_text_size36'));
      FontSize7_On(document.querySelector('#btn_minimal_exec_text_size48'));
     

      // Цвет текста 
      FontColor1_On (document.querySelector('#btn_minimal_exec_text_color1'), 'rgb(51, 51, 51)');
      FontColor2_On (document.querySelector('#btn_minimal_exec_text_color2'), 'rgb(0, 0, 0)');
      FontColor3_On (document.querySelector('#btn_minimal_exec_text_color3'), 'rgb(255, 255, 255)');
      FontColor4_On (document.querySelector('#btn_minimal_exec_text_color4'), 'rgb(216, 216, 216)');
      FontColor5_On (document.querySelector('#btn_minimal_exec_text_color5'), 'rgb(153, 139, 139)');
      FontColor6_On (document.querySelector('#btn_minimal_exec_text_color6'), 'rgb(5, 0, 255)');
      FontColor7_On (document.querySelector('#btn_minimal_exec_text_color7'), 'rgb(22, 20, 167)');
      FontColor8_On (document.querySelector('#btn_minimal_exec_text_color8'), 'rgb(80, 108, 255)');
      FontColor9_On (document.querySelector('#btn_minimal_exec_text_color9'), 'rgb(234, 0, 255)');
      FontColor10_On (document.querySelector('#btn_minimal_exec_text_color10'), 'rgb(255, 0, 26)');
      FontColor11_On (document.querySelector('#btn_minimal_exec_text_color11'), 'rgb(200, 0, 20)');
      FontColor12_On (document.querySelector('#btn_minimal_exec_text_color12'), 'rgb(0, 255, 146)');
      FontColor13_On (document.querySelector('#btn_minimal_exec_text_color13'), 'rgb(0, 176, 101)');
      FontColor14_On (document.querySelector('#btn_minimal_exec_text_color14'), 'rgb(0, 255, 0)');
      FontColor15_On (document.querySelector('#btn_minimal_exec_text_color15'), 'rgb(255, 250, 0)');
      FontColor16_On (document.querySelector('#btn_minimal_exec_text_color16'), 'rgb(255, 207, 5)');
      FontColor17_On (document.querySelector('#btn_minimal_exec_text_color17'), 'rgb(238, 229, 35)');
      FontColor18_On (document.querySelector('#btn_minimal_exec_text_color18'), 'rgb(219, 16, 16)');

      // Фон текста 
      BackColor1_On (document.querySelector('#btn_minimal_exec_textBack_color1'), 'rgb(51, 51, 51)');
      BackColor2_On (document.querySelector('#btn_minimal_exec_textBack_color2'), 'rgb(0, 0, 0)');
      BackColor3_On (document.querySelector('#btn_minimal_exec_textBack_color3'), 'rgb(255, 255, 255)');
      BackColor4_On (document.querySelector('#btn_minimal_exec_textBack_color4'), 'rgb(216, 216, 216)');
      BackColor5_On (document.querySelector('#btn_minimal_exec_textBack_color5'), 'rgb(153, 139, 139)');
      BackColor6_On (document.querySelector('#btn_minimal_exec_textBack_color6'), 'rgb(5, 0, 255)');
      BackColor7_On (document.querySelector('#btn_minimal_exec_textBack_color7'), 'rgb(22, 20, 167)');
      BackColor8_On (document.querySelector('#btn_minimal_exec_textBack_color8'), 'rgb(80, 108, 255)');
      BackColor9_On (document.querySelector('#btn_minimal_exec_textBack_color9'), 'rgb(234, 0, 255)');
      BackColor10_On (document.querySelector('#btn_minimal_exec_textBack_color10'), 'rgb(255, 0, 26)');
      BackColor11_On (document.querySelector('#btn_minimal_exec_textBack_color11'), 'rgb(200, 0, 20)');
      BackColor12_On (document.querySelector('#btn_minimal_exec_textBack_color12'), 'rgb(0, 255, 146)');
      BackColor13_On (document.querySelector('#btn_minimal_exec_textBack_color13'), 'rgb(0, 176, 101)');
      BackColor14_On (document.querySelector('#btn_minimal_exec_textBack_color14'), 'rgb(0, 255, 0)');
      BackColor15_On (document.querySelector('#btn_minimal_exec_textBack_color15'), 'rgb(255, 250, 0)');
      BackColor16_On (document.querySelector('#btn_minimal_exec_textBack_color16'), 'rgb(255, 207, 5)');
      BackColor17_On (document.querySelector('#btn_minimal_exec_textBack_color17'), 'rgb(238, 229, 35)');
      BackColor18_On (document.querySelector('#btn_minimal_exec_textBack_color18'), 'rgb(219, 16, 16)');
    });
    
      function BoldOn (name) {
        if (document.queryCommandState('Bold')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function ItalicOn (name) {
        if (document.queryCommandState('Italic')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function underlineOn (name) {
        if (document.queryCommandState('underline')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function insertOrderedListOn (name) {
        if (document.queryCommandState('insertOrderedList')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function insertUnorderedListOn (name) {
        if (document.queryCommandState('insertUnorderedList')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function justifyLeftOn (name) {
        if (document.queryCommandState('justifyLeft')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function justifyCenterOn (name) {
        if (document.queryCommandState('justifyCenter')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function justifyRightOn (name) {
        if (document.queryCommandState('justifyRight')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 
      function justifyFullOn (name) {
        if (document.queryCommandState('justifyFull')) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      }; 

      function FontFamily1_On (name) {
        if (document.queryCommandValue('fontName') == 'Roboto' ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontFamily2_On (name) {
        if (document.queryCommandValue('fontName') == 'Cuprum' ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontFamily3_On (name) {
        if (document.queryCommandValue('fontName') === "GermaniaOne" ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontFamily4_On (name) {
        if (document.queryCommandValue('fontName') == "Krushnadevaraya" ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };

      function FontSize1_On (name) {
        if (document.queryCommandValue('fontSize') == 1 ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontSize2_On (name) {
        if (document.queryCommandValue('fontSize') == 2 ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontSize3_On (name) {
        if (document.queryCommandValue('fontSize') == 3 ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontSize4_On (name) {
        if (document.queryCommandValue('fontSize') == 4 ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontSize5_On (name) {
        if (document.queryCommandValue('fontSize') == 5 ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontSize6_On (name) {
        if (document.queryCommandValue('fontSize') == 6 ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontSize7_On (name) {
        if (document.queryCommandValue('fontSize') == 7 ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };

      function FontColor1_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor2_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor3_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor4_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor5_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor6_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor7_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor8_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor9_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor10_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor11_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor12_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor13_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor14_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor15_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor16_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor17_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function FontColor18_On (name , rgb) {
        if (document.queryCommandValue("foreColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };

      function BackColor1_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor2_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor3_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor4_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor5_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor6_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor7_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor8_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor9_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor10_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor11_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor12_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor13_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor14_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor15_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor16_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor17_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
      function BackColor18_On (name , rgb) {
        if (document.queryCommandValue("BackColor") == rgb ) {
          name.classList.add('btn_minimal_execActive');
        } else { name.classList.remove('btn_minimal_execActive'); }
      };
});