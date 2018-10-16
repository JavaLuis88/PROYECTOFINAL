function getAjax() {

    var ajaxobj;
    ajaxobj = null;
    if (window.XMLHttpRequest) {
        ajaxobj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        ajaxobj = new ActiveXObject("Microsoft.XMLHTTP");
    }

    return ajaxobj;
}

