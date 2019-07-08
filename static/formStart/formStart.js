window.addEventListener('DOMContentLoaded', function() {

var x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

 
function Create2Input (pHolder1,pHolder2,append,name1,name2) {
  var mainElem = document.createElement('div');
  append.appendChild(mainElem);
  mainElem.classList.add('userStart_callback_inputs_item2');
  
    var input = document.createElement('input');
    mainElem.appendChild(input);
    input.type = 'text';
    input.placeholder = pHolder1;
    input.name = name1;

    var input2 = document.createElement('input');
    mainElem.appendChild(input2);
    input2.type = 'text';
    input2.placeholder = pHolder2;
    input2.name = name2;
}

function CreateInput (name) {
  var input, Append;
      append = document.querySelector('#lang_append_for_add');
      input = document.createElement('input');
      append.appendChild(input);
      input.type = 'text';
      input.name = name;
}


// для соц сетей
document.querySelector('#create_netword_inputs').addEventListener('click', function () {
  var appendC = document.querySelector('#create_netword_inputs_append');
  var LengthIn =  appendC.querySelectorAll('.userStart_callback_inputs_item2');
  if (LengthIn.length == 5) {
    var span = document.querySelector('#btn_add_inputs_network_span span');
    span.style.display = 'block';
  } else {
    var name1, name2;
        name1 = "networkName" + "[" + parseInt(LengthIn.length) + "]";
        name2 = "networkUrl" + "[" + parseInt(LengthIn.length) + "]";
    Create2Input ('Название соц сети','Прямая ссылка',appendC,name1,name2);
  }
});


// для связи
document.querySelector('#create_callback_inputs').addEventListener('click', function () {
  var appendC = document.querySelector('#userStart_callback_append');
  var LengthIn =  appendC.querySelectorAll('.userStart_callback_inputs_item2');
  if (LengthIn.length == 5) {
    var span = document.querySelector('#btn_add_inputs_callback_span span');
    span.style.display = 'block';
  } else {
    var name1, name2;
        name1 = "CallName" + "[" + parseInt(LengthIn.length) + "]";
        name2 = "CallContact" + "[" + parseInt(LengthIn.length) + "]";
    Create2Input ('Название','Контакт',appendC,name1,name2);
  }
});


// для языков
document.querySelector('#btn_add_lang').addEventListener('click', function () {
  appentInput = document.querySelectorAll('#lang_append_for_add input').length;
  if ( appentInput == 5 ) {
    var span = document.querySelector('#lang_no_more span');
    span.style.display = 'block';
  } else {
    CreateInput ("lang" + "[" + parseInt(appentInput) + "]");
  }
});


// функция открытия блока предпочтений 
var wrap_categories = document.querySelectorAll('.userStart_categoriesMains_wth_btn') || [];
    wrap_categories= [].slice.apply(wrap_categories);
    wrap_categories.forEach(function (element, i) {
     var btn_open_mini, list_categoties_mini, icon_tranform, checkbox_big, checkbox_small;
         btn_open_mini        = element.querySelector('.btn_open_mini_categories');
         list_categoties_mini = element.querySelector('.categories_mini_close');
         icon_tranform        = element.querySelector('.btn_open_mini_categories i');
         checkbox_big         = element.querySelector('.CGMAIN');
         checkbox_small       = element.querySelectorAll('.categories_mini_close input');
     btn_open_mini.addEventListener('click', function () {

      list_categoties_mini.classList.toggle('categories_mini_open');
      icon_tranform.classList.toggle('icon_tranform');

     });
     checkbox_big.onchange = function() {
        if (checkbox_big.checked == true ) {
        } else {
          var checkbox_small_all = element.querySelectorAll('.categories_mini_close input');
          for (var i = 0; i < checkbox_small_all.length; i++) {
            checkbox_small_all[i].checked = false;
          }     
        }          
      }
      for (var i = 0; i < checkbox_small.length; i++) {
        checkbox_small[i].onchange = function () {
          var checkbox_small_len = list_categoties_mini.querySelectorAll('input');
          for (var i = 0; i < checkbox_small_len.length; i++) {
            if (checkbox_small_len[i].checked == true) {
              checkbox_big.checked = true;
            } else {}
          }
        }
      }
      
     
    });

 
});















