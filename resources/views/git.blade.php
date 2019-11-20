@extends('layouts.app')

@section('title', 'UD5. ORM Eloquent')

@section('content')

  Introduce el resultado del ejercicio de git (ejercicio 1).

¿Qué deberías realizar para fusionar esta rama con la rama master? Indica los comandos necesarios para ello.

Hay que situarse en una de las ramas y usar el comando "git merge origin/taerea1" desde la rama master

  Introduce el resultado del ejercicio de git (ejercicio 2).

Indica en que consiste el modelo vista-controlador. Describe brevemente cada uno de los componentes que lo forman.

El "modelo-vista-controlador" consiste en modular el proyecto en, principalmente, 3 partes:
Vista: deberá ir aquí todo lo que el usuario ve
Controlador: es la funcionalidad que recoge las acciones del usuario y devuelve una respuesta adecuada a éstas
Modelo: parte que trabaja con la base de datos recogiendo datos del usuario y de la base de datos, para mandarlos a la bbdd o al usuario según sea requerido




@endsection
