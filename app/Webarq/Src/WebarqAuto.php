<?php

function webarq()
{
	return new App\Webarq\Src\Webarq;
}

function injectModel($model)
{
	$inject = "App\Models\\".$model;
	return new $inject;
}

function urlBackend($slug)
{
	return url(webarq()->backendUrl.'/'.$slug);
}

function urlBackendAction($action)
{
	return urlBackend(request()->segment(2).'/'.$action);
}

function getUser()
{
	return Auth::user();
}

function randomImage($str = "")
{
	return str_random(6).date("YmdHis");
}

