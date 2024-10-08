import './bootstrap';

function displayCurrentUser() {
	const currentUser = document.querySelector(".current-user-posting");
	document.getElementById("current-user").textContent = currentUser;
}

displayCurrentUser();