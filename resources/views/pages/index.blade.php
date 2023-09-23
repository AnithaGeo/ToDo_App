@extends('layouts.layout')

@section('title','ViewTask')

@section('content')
<div class="container vertical-scrollable mx-auto my-5 p-3 border" style="width: 1000px; height: 650px; overflow-y: scroll; background-color: aquamarine;">
    <div class="h1"><i class="lni lni-check-box"></i> TaskList</div>
    <div class="row">
        <x-task-card />
        <x-task-card />
        <x-task-card />
        <x-task-card />
        <x-task-card />
        <x-task-card />
    </div>
</div>

@endsection

