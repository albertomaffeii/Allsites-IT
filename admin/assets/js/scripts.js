<!--/*!
  * Allsites Web Systems
  * Copyright 2023 The Allsites Author: Alberto Maffei
  */-->

<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<script>

function message($message) {
	alert(message);
}

//Sugere um username para cadastrar um novo usuário no painel administrativo
function suggestUserName() {
	var inputFirstName = document.getElementById('fname').value;
	var inputLastName = document.getElementById('lname').value;
	document.getElementById("uname").value = inputFirstName.concat(inputLastName);
}

//Sugere um Slug (URL) para cadastrar uma nova caegoria no painel administrativo
function suggestSlugName() {

	var inputName = document.getElementById('name').value;

	const convertToSlug = (text) => {
		const a = 'àáäâãèéëêìíïîòóöôùúüûñçßÿœæŕśńṕẃǵǹḿǘẍźḧ·/_,:;'
		const b = 'aaaaaeeeeiiiioooouuuuncsyoarsnpwgnmuxzh------'
		const p = new RegExp(a.split('').join('|'), 'g')
		return text.toString().toLowerCase().trim()
		.replace(p, c => b.charAt(a.indexOf(c))) // Replace special chars
		.replace(/&/g, '-and-') // Replace & with 'and'
		.replace(/[\s\W-]+/g, '-') // Replace spaces, non-word characters and dashes with a single dash (-)
	}

	document.getElementById("slug").value = convertToSlug(inputName);
}

//Sugere um Meta Title
function suggestMetaTitle($campo1, $campo2) {
	var input1 = document.getElementById($campo1).value;
	document.getElementById($campo2).value = input1;
}

</script>