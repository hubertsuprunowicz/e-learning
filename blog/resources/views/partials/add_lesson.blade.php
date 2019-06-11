@extends('layouts.master')

@section('content')

    <section id="content-ajax"  class="w-100">

        <form class="add-product-form" method="POST" action="{{ route('lesson.post') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputTitle">Title</label>
                    <input name="title" type="text" class="form-control" id="inputTitle" maxlength="30" required autofocus autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 col-form-label">
                    <label for="example-datetime-local-input">Date and time</label>
                    <input name="date" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" required>
                </div>
                @if($errors->any())
                    <strong class="text-danger">{{ $errors->first() }}</strong>
                @endif

                <div class="form-group col-md-3 col-form-label">
                    <label for="inputQuantity">Students quantity</label>
                    <input name="qty" type="text" class="form-control" id="inputQuantity" pattern="[0-9]{1,5}" required>
                </div>
                <div class="form-group col-md-2 col-form-label">
                    <label for="inputZip">Price</label>
                    <input name="price" type="text" class="form-control" id="inputZip" pattern="[0-9]{1,5}" placeholder="Full prices" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-check col-md-2 pl-4 mb-3">
                    <input name="exam" class="form-check-input" type="checkbox" id="examCheck">
                    <label class="form-check-label" for="examCheck">Exam</label>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLength">Length</label>
                    <input name="length" type="text" class="form-control" id="inputLength" pattern="[0-9]{1,4}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea name="desc" type="text" class="form-control" id="inputDescription" minlength="30" maxlength="1500" rows="8" placeholder="Write something about your lesson..." required></textarea>
            </div>


            <button type="submit" class="btn adv-button text-white">Add product</button>
        </form>


    </section> <!-- container// -->

@endsection