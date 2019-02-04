@extends('layouts.master')

@section('content')

    <h2>Añadir pelicula</h2>
    <form method="post" action="">
        <label class="description" for="title">Titulo: </label>
        <input id="element_1" name="title" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="year">Año: </label>
        <input id="element_2" name="year" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="director">Director: </label>
        <input id="element_3" name="director" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="poster">Poster: </label>
        <input id="element_4" name="poster" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="synopsis">Resumen: </label>
        <textarea id="element_5" name="synopsis" class="element textarea medium"></textarea>
        <br><br>
        <input id="saveForm" class="button_text" type="submit" name="submit" value="Añadir Pelicula" />
    </form>

@stop
