function filtroMarca()
{
	var seleccion = document.getElementById("opcionMarca").value;

	if(seleccion == 'Seleccione marca')
	{
		$('div.elementoZapato div.hidden').fadeIn('slow').removeClass('hidden');
		
	}//fin de if
	else if(seleccion == 'Addidas')
	{
		$('.Addidas').fadeIn('slow').removeClass('hidden');
		$('.Nike').fadeIn('slow').addClass('hidden');
		$('.Reebok').fadeIn('slow').addClass('hidden');
		$('.Pirma').fadeIn('slow').addClass('hidden');
	}
	else if(seleccion == 'Nike')
	{
		$('.Nike').fadeIn('slow').removeClass('hidden');
		$('.Addidas').fadeIn('slow').addClass('hidden');
		$('.Reebok').fadeIn('slow').addClass('hidden');
		$('.Pirma').fadeIn('slow').addClass('hidden');
		//a los demas que no sean nike agregar clase hidden
	}
	else if(seleccion == 'Reebok')
	{
		$('.Reebok').fadeIn('slow').removeClass('hidden');
		$('.Nike').fadeIn('slow').addClass('hidden');
		$('.Addidas').fadeIn('slow').addClass('hidden');
		$('.Pirma').fadeIn('slow').addClass('hidden');
	}
	else if(seleccion == 'Pirma')
	{
		$('.Pirma').fadeIn('slow').removeClass('hidden');
		$('.Nike').fadeIn('slow').addClass('hidden');
		$('.Reebok').fadeIn('slow').addClass('hidden');
		$('.Addidas').fadeIn('slow').addClass('hidden');
	}

}//fin de la funcion filtroMarca

function filtroColor()
{
	var seleccion = document.getElementById("opcionColor").value;

	if(seleccion == 'Seleccione color')
	{
		$('div.elementoZapato div.hidden').fadeIn('slow').removeClass('hidden');
		
	}//fin de if
	else if(seleccion == 'Azul')
	{
		$('.Azul').fadeIn('slow').removeClass('hidden');
		$('.Verde').fadeIn('slow').addClass('hidden');
		$('.Negro').fadeIn('slow').addClass('hidden');
		$('.Rojo').fadeIn('slow').addClass('hidden');
	}
	else if(seleccion == 'Verde')
	{
		$('.Verde').fadeIn('slow').removeClass('hidden');
		$('.Azul').fadeIn('slow').addClass('hidden');
		$('.Negro').fadeIn('slow').addClass('hidden');
		$('.Rojo').fadeIn('slow').addClass('hidden');
	}
	else if(seleccion == 'Negro')
	{
		$('.Negro').fadeIn('slow').removeClass('hidden');
		$('.Verde').fadeIn('slow').addClass('hidden');
		$('.Azul').fadeIn('slow').addClass('hidden');
		$('.Rojo').fadeIn('slow').addClass('hidden');
	}
	else if(seleccion == 'Rojo')
	{
		$('.Rojo').fadeIn('slow').removeClass('hidden');
		$('.Verde').fadeIn('slow').addClass('hidden');
		$('.Negro').fadeIn('slow').addClass('hidden');
		$('.Azul').fadeIn('slow').addClass('hidden');
	}

}//fin de la funcion filtroColor

function filtroTipo()
{

}//fin de la funcion filtroTipo

function filtroTalla()
{

}//fin de la funcion filtroTipo