function showModel(e){
	var showDiv = document.getElementById("showDiv");
	showDiv.style.display = "block";
	var childs = e.childNodes;
	var landmass1 = document.getElementById("landmass1");
	landmass1.value = childs[0].innerHTML;
	var crop_id = document.getElementById("crop_id");
	crop_id.value = childs[1].innerHTML;
	var crop_name = document.getElementById("crop_name");
	crop_name.value = childs[2].innerHTML;
	var landmass_id = document.getElementById("landmass_id");
	landmass_id.value = childs[3].innerHTML;
}



function closeDiv(){
	var closeDiv = document.getElementById("showDiv");
	closeDiv.style.display = "none";
}