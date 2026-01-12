@extends('index')
@section('content')

<h4>registration</h4>

<form id="applicationForm" onsubmit="submitApplication(event)">

    <label for="">first name</label>
    <input style="border: 1px solid black" type="text" id="first_name" required>

    <label for="">last name</label>
    <input style="border: 1px solid black" type="text" id="last_name" required>

    <label for="">email</label>
    <input style="border: 1px solid black" type="email" id="email" required>

    <label for="">student id</label>
    <input style="border: 1px solid black" type="text" id="student_id_number" required>

    <label for="">password</label>
    <input style="border: 1px solid black" type="password" name="password" id="password">

    <label for="">confirmed password</label>
    <input style="border: 1px solid black" type="password" name="" id="password_confirmation">

    <button type="submit" id="submitBtn">submit</button>



    <div id="message" class="hidden"></div>
</form>

@endsection
