function update_dialog() {
	var count = document.querySelector('#counter_dialog_mess').innerHTML;

	if (count > 0) {
		var place = document.querySelector('#header_dialogs_btn');

		place.innerHTML = "Диалоги<div class='nH_count_dialogsNR'>" + count + "</div>";
	}
}
update_dialog();