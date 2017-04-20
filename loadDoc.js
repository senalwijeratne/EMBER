function loadDoc(refNum) {
    switch(refNum){
        case 2:
            url = "schedule.html";
            break;
        case 3:
            url = "notifications.html"
            break;
        case 4:
            url = "lecturers.html"
            break;
        case 5:
            url = "students.html"
            break;
        case 6:
            url = "test.html"
            break;
        default:
            url = "home.html"
    }
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 2) {
            document.getElementById("replace").innerHTML = '<img src="images/loading.gif" style="hight:100%; width:200%;"/>';
        }
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("replace").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}