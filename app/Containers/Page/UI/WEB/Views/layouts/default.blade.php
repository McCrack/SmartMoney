@extends('page::markup')

@section('layout')
    <h1 align="center">This's Default layout</h1>
    <x-breadcrumbs entry-point="{{ $page->id }}"></x-breadcrumbs>
    <x-level-menu level="3">Services:</x-level-menu>
    <x-branch entry-point="1">TREE: </x-branch>
@endsection