@extends('errors::layout')

@section('title', __('forbidden'))
@section('message', __($exception->getMessage() ?: __('errorPages.forbidden')))
