function ajax(donde, formData, hacer = '') {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200)
        {
            var respuesta = this.responseText;
            console.log(respuesta);
            document.getElementById(hacer).innerHTML = respuesta;
        }
    };
    xhr.open('POST', donde, true);
    xhr.send(formData);
}
    