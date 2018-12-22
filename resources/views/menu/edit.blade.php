<?php/** * Created by PhpStorm. * User: gnumux * Date: 12/22/18 * Time: 5:42 PM */ ?>@extends('adminlte::page')@section('title',  $title )@section('content_header')    <h1>{{$title}}</h1>@stop@section('content')    <div class="box box-default">        <div class="box-header with-border">            <h3 class="box-title">{{ $title }}</h3>            <a href="{{ route($ruta.'.index') }}" class="btn btn-primary  pull-right"><i class="fa fa-list"></i> Volver</a>        </div>        <div class="box-body">            {{ Form::model($data, ['route' => [$ruta.'.update', $data->id], 'method' => 'patch']) }}            <div class="form-group col-xs-5">                {!!Form::label('Nombres')!!}                {!!Form::text('name',null,['id'=>'name','class'=>'form-control ', 'required'])!!}            </div>            <div class="form-group col-xs-5">                {!!Form::label('URL')!!}                {!!Form::text('url',null,['id'=>'url','class'=>'form-control ', 'required'])!!}            </div>            <div class="form-group col-xs-2">                {!!Form::label('Activo')!!}                {!! Form::select('active', array('1' => 'Si', '0' => 'No'), null, ['id'=> 'active', 'required' => 'required' ,'class' => 'form-control select2']) !!}            </div>            <div class="clearfix"></div>            {!!Form::submit('Guardar',['id'=>'guardar','content'=>'<span>Continuar</span>', 'class'=>'btn btn-primary btn-sm'])!!}            {!! Form::close() !!}        </div></div>@stop