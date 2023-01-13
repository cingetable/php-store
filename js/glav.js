window.onload = function () {
	var c1=document.getElementsByClassName('c1');
	var btn_c1=document.getElementById('btn_c1');
	var c2=document.getElementsByClassName('c2');
	var btn_c2=document.getElementById('btn_c2');
	var c3=document.getElementsByClassName('c3');
	var btn_c3=document.getElementById('btn_c3');
	var c4=document.getElementsByClassName('c4');
	var btn_c4=document.getElementById('btn_c4');
	var countD1,countD2,countD3,countD4;
	var a1=document.getElementById("a1");
	var a2=document.getElementById("a2");
	var a3=document.getElementById("a3");
	var a4=document.getElementById("a4");
	a1.style.display = "none";
	a2.style.display = "none";
	a3.style.display = "none";
	a4.style.display = "none";
	if (window. innerWidth > 768) {
		for (let i=3;i<c1.length;i++) {
			c1[i].style.display = "none";
		}
		for (let i=3;i<c2.length;i++) {
			c2[i].style.display = "none";
		}
		for (let i=3;i<c3.length;i++) {
			c3[i].style.display = "none";
		}
		for (let i=3;i<c4.length;i++) {
			c4[i].style.display = "none";
		}
		
		countD1 = 3;
		countD2 = 3;
		countD3 = 3;
		countD4 = 3;
		btn_c1.addEventListener("click", function() {
			var box=document.getElementsByClassName('c1');
			countD1 += 3;
			if (countD1 <= box.length){
				for(let i=0;i<countD1;i++){
					box[i].style.display = "flex";
				}
				if (countD1 >= box.length) {
					btn_c1.style.display = "none";
					a1.style.display = "flex";
				}
			}
		})
		btn_c2.addEventListener("click", function() {
			var box=document.getElementsByClassName('c2');
			countD2 += 3;
			if (countD2 <= box.length){
				for(let i=0;i<countD2;i++){
					box[i].style.display = "flex";
				}
				if (countD1 >= box.length) {
					btn_c2.style.display = "none";
					a2.style.display = "flex";
				}
			}
		})
		btn_c3.addEventListener("click", function() {
			var box=document.getElementsByClassName('c3');
			countD3 += 3;
			if (countD1 <= box.length){
				for(let i=0;i<countD3;i++){
					box[i].style.display = "flex";
				}
				if (countD3 >= box.length) {
					btn_c3.style.display = "none";
					a3.style.display = "flex";
				}
			}
		})
		btn_c4.addEventListener("click", function() {
			var box=document.getElementsByClassName('c4');
			countD4 += 3;
			if (countD4 <= box.length){
				for(let i=0;i<countD4;i++){
					box[i].style.display = "flex";
				}
				if (countD4 >= box.length) {
					btn_c4.style.display = "none";
					a4.style.display = "flex";
				}
			}
		})
	} else {
		for (let i=2;i<c1.length;i++) {
			c1[i].style.display = "none";
		}
		for (let i=2;i<c2.length;i++) {
			c2[i].style.display = "none";
		}
		for (let i=2;i<c3.length;i++) {
			c3[i].style.display = "none";
		}
		for (let i=2;i<c4.length;i++) {
			c4[i].style.display = "none";
		}
		
		countD1 = 2;
		countD2 = 2;
		countD3 = 2;
		countD4 = 2;
		btn_c1.addEventListener("click", function() {
			var box=document.getElementsByClassName('c1');
			countD1 += 2;
			if (countD1 <= box.length){
				for(let i=0;i<countD1;i++){
					box[i].style.display = "flex";
				}
				if (countD1 >= box.length) {
					btn_c1.style.display = "none";
					a1.style.display = "flex";
				}
			}
		})
		btn_c2.addEventListener("click", function() {
			var box=document.getElementsByClassName('c2');
			countD2 += 2;
			if (countD2 <= box.length){
				for(let i=0;i<countD2;i++){
					box[i].style.display = "flex";
				}
				if (countD1 >= box.length) {
					btn_c2.style.display = "none";
					a2.style.display = "flex";
				}
			}
		})
		btn_c3.addEventListener("click", function() {
			var box=document.getElementsByClassName('c3');
			countD3 += 2;
			if (countD1 <= box.length){
				for(let i=0;i<countD3;i++){
					box[i].style.display = "flex";
				}
				if (countD3 >= box.length) {
					btn_c3.style.display = "none";
					a3.style.display = "flex";
				}
			}
		})
		btn_c4.addEventListener("click", function() {
			var box=document.getElementsByClassName('c4');
			countD4 += 2;
			if (countD4 <= box.length){
				for(let i=0;i<countD4;i++){
					box[i].style.display = "flex";
				}
				if (countD4 >= box.length) {
					btn_c4.style.display = "none";
					a4.style.display = "flex";
				}
			}
		})
	}
}
