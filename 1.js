const scrollUp = document.querySelector("#scroll-up");
const day = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
const MONTH = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"]

scrollUp.addEventListener("click",() =>{
	window.scrollTo({
		top:0,
		left:0,
		behavior: "smooth",
	});
});

function updateTime() {
	var now = new Date();

	/*document.getElementById("time").innerText =
			zeroPadding(now.getHours(), 2) + ":" +
			zeroPadding(now.getMinutes(), 2) + ":" +
			zeroPadding(now.getSeconds(), 2);*/

	document.getElementById("date").innerText =
			day[now.getDay()] + ", " +
			zeroPadding(now.getDate(), 2) + " " +
			MONTH[now.getMonth()] + " " +	
			now.getFullYear();
}

updateTime();
setInterval(updateTime, 1000);

function zeroPadding(num, digit) {
	return String(num).padStart(digit, '0');
}
