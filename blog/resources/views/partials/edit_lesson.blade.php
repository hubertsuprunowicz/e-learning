@extends('layouts.master')

@section('content')

    <div class="container">
    <form class="edit-form mt-5" method="POST" action="{{ route('lesson.edit', $lesson->id) }}">
        {{ csrf_field() }}"
        {{ method_field('put') }}"
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputTitle">Title*</label>
                <input name="title" value="{{ $lesson->subject }}" type="text" class="form-control" id="inputTitle"
                       maxlength="30" required autofocus autocomplete="off">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4 col-form-label">
                <label for="example-datetime-local-input">Date and time*</label>
                <input name="date" value="{{ $lesson->date }}" class="form-control" type="datetime-local"
                       min="{{ \Carbon\Carbon::now() }}"
                       id="example-datetime-local-input" required>
            </div>
            @if($errors->any())
                <strong class="text-danger">{{ $errors->first() }}</strong>
            @endif

            <div class="form-group col-md-3 col-form-label">
                <label for="inputQuantity">Unlimited quantity:</label>
                @if($lesson->student_limit)
                    <input id="unlimitedQty" type="checkbox" name="unlimitedQty"/>
                    <input name="qty" value="{{ $lesson->student_limit }}" type="text" class="form-control"
                           id="inputQuantity" placeholder="Students quantity" pattern="[0-9]{1,5}">
                @else
                    <input id="unlimitedQty" type="checkbox" name="unlimitedQty" checked/>
                    <input name="qty" type="text" class="form-control" id="inputQuantity"
                           placeholder="Students quantity" pattern="[0-9]{1,5}">
                @endif
            </div>
            <div class="form-group col-md-2 col-form-label">
                <label for="inputZip">Price*</label>
                <input name="price" value="{{ $lesson->price }}" type="text" class="form-control" id="inputZip"
                       pattern="[0-9]{1,5}.[0-9]{2}" placeholder="Full price" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputLength">Length*</label>
                <input name="length" value="{{ $lesson->length }}" type="text" class="form-control"
                       placeholder="in minutes..." id="inputLength" pattern="[0-9]{1,4}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputDescription">Description*</label>
            <textarea name="desc" type="text" class="form-control" id="inputDescription" minlength="30" maxlength="1500"
                      rows="8" placeholder="Write something about your lesson..." required>
                    {{ $lesson->description }}
                </textarea>
        </div>

        <div class="form-group">
            <label for="videoLink">Video link*</label>
            <input name="videoLink" value="{{ $lesson->video_link }}" type="text" class="form-control" minlength="8" pattern="http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/embed\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?.[A-za-z]*|=[0-9]" required/>
        </div>

        <button type="submit" class="btn adv-button text-white">Edit lesson</button>
    </form>
    </div>
@endsection
