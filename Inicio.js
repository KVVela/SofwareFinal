function inicio()
{
	switch(document.getElementById('usuario').value)
	{
		case "empresa":
		    window.location.replace('ViewEmpresa.html');
		break;
		case "usuario":
		  	window.location.replace('ViewUsuario.html');
		break;
		case "voluntario":
		  	window.location.replace('ViewVoluntario.html');
		break;
		default:
		    document.getElementById('respuesta').innerHTML = "USUARIO NO AUTORIZADO"
	}
}