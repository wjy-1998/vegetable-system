function showRecord(e){
	var showDiv = document.getElementById("showDiv");
	showDiv.style.display = "block";
	var childs = e.childNodes;
	var nowland = document.getElementById("nowland");
	nowland.innerHTML = childs[0].innerHTML;
	var nowland_id = document.getElementById("nowland_id");
	nowland_id.innerHTML = childs[1].innerHTML;
	var nowland_name = document.getElementById("nowland_name");
	nowland_name.innerHTML = childs[2].innerHTML;
	var landname = document.getElementById("landname");
	landname.value = childs[2].innerHTML;
	var cropname = document.getElementById("cropname");
	cropname.value = childs[3].innerHTML;
	var cropid = document.getElementById("cropid");
	cropid.value = childs[4].innerHTML;
	var plantarea = document.getElementById("plantarea");
	plantarea.value = childs[5].innerHTML;
	var planttime = document.getElementById("planttime");
	planttime.value = childs[6].innerHTML;
	var bftime = document.getElementById("bftime");
	bftime.value = childs[6].innerHTML;
}



function closeDiv(){
	var closeDiv = document.getElementById("showDiv");
	closeDiv.style.display = "none";
}