document.addEventListener('DOMContentLoaded', function() {
	var editButtons = document.querySelectorAll('.edit_button');
	editButtons.forEach(function(button, index) {
		button.addEventListener('click', function() {
		var formRow = document.querySelectorAll('.form_row')[index];
		var form = formRow.querySelector('form');
		form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
		});
	});
});
const formSelector = document.getElementById("formSelector");
	formSelector.addEventListener("change", function() {
	const selectedFormId = this.value;
	const forms = document.querySelectorAll("form");
	
	forms.forEach(form => {
		if (form.id === selectedFormId) {
			form.classList.remove("add_form");
		} else {
			form.classList.add("add_form");
		}
	});
});
// ยืนยันก่อน POST
function askDNSAdd() {
	var agree=confirm("Add DNS Record?");
	return agree;
}
function askDNSUpdate(form) {
	var updateRadio = form.querySelector('input[name="RR_MODE"][value="UPDATE"]');
	var deleteRadio = form.querySelector('input[name="RR_MODE"][value="DELETE"]');

	if (updateRadio.checked) {
		var agree=confirm("!! Update !! DNS Record?");
	} else if (deleteRadio.checked) {
		var agree=confirm("!! DELETE !! DNS Record?");
	}
	return agree;
}
