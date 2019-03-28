@extends('layouts.master')

@section('content')

    <section id="content-ajax" class="w-100">
        <div class="list-group list-lessons">
            <a href="{{ route('lesson.get'), 1 }}" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2 h5">List group item heading</h5>
                    <small>03-04-2019, 14:00</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                <small>Donec id elit non mi porta.</small>
            </a>
            <a href="{{ route('lesson.get'), 1 }}" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2 h5">List group item heading</h5>
                    <small class="text-muted">Tommorow, 19:30</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <a href="{{ route('lesson.get'), 1 }}" class="list-group-item list-group-item-action flex-column align-items-start passed">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2 h5">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <a href="{{ route('lesson.get'), 1 }}" class="list-group-item list-group-item-action flex-column align-items-start passed">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2 h5">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <a href="{{ route('lesson.get'), 1 }}"  class="list-group-item list-group-item-action flex-column align-items-start passed">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2 h5">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <a href="{{ route('lesson.get'), 1 }}" class="list-group-item list-group-item-action flex-column align-items-start passed">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2 h5">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
        </div>
    </section>
@endsection