@extends('layouts.master')

@section('content')

    <section id="content-ajax"  class="w-100">

        <form class="add-product-form" method="POST" action="{{ route('lesson.post') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputTitle">Title*</label>
                    <input name="title" type="text" class="form-control" id="inputTitle" maxlength="30" required autofocus autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 col-form-label">
                    <label for="example-datetime-local-input">Date and time*</label>
                    <input name="date" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" required>
                </div>
                @if($errors->any())
                    <strong class="text-danger">{{ $errors->first() }}</strong>
                @endif

                <div class="form-group col-md-3 col-form-label">
                    <label for="inputQuantity">Unlimited quantity:</label>
                    <input id="unlimitedQty" type="checkbox" name="unlimitedQty" value="Unlimited">
                    <input name="qty" type="text" class="form-control" id="inputQuantity" placeholder="Students quantity" pattern="[0-9]{1,5}">
                </div>
                <div class="form-group col-md-2 col-form-label">
                    <label for="inputZip">Price*</label>
                    <input name="price" type="text" class="form-control" id="inputZip" pattern="[0-9]{1,5}" placeholder="Full price" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLength">Length*</label>
                    <input name="length" type="text" class="form-control" placeholder="in minutes..." id="inputLength" pattern="[0-9]{1,4}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputDescription">Description*</label>
                <textarea name="desc" type="text" class="form-control" id="inputDescription" minlength="30" maxlength="1500" rows="8" placeholder="Write something about your lesson..." required></textarea>
            </div>

            <div class="form-group">
                <label for="videoLink">Video link*</label>
                <input name="videoLink" type="text" class="form-control" pattern="http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/embed\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?.[A-za-z]*|=[0-9]" required/>
            </div>


            <button type="submit" class="btn adv-button text-white">Add lesson</button>
        </form>


    </section> <!-- container// -->

@endsection
