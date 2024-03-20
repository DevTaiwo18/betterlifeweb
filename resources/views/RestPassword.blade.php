@extends('welcome')
@section('section')

<style>
    .title {
        font-size: 16px !important;
        color: #000000;
        font-weight: 600;
        padding-bottom: 15px;
        font-family: "Open Sans", sans-serif;
    }

    button {
        background-color: rgb(10, 26, 168); 
        color: #ced4da;
        border: 1px solid rgb(10, 26, 168); 
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 12px;
        font-weight: 500;
        font-family: "Quicksand", sans-serif;
        cursor: pointer; 
    }

    input[type="password"] {
        width: 100%;
        border: 1px solid #ced4da; 
        border-radius: 5px;
        padding: 8px; 
        box-sizing: border-box; 
        font-family: "Quicksand", sans-serif;
        background-color: transparent;
        font-size: 14px;
    }

</style>

<section class="con shadow-lg">
    <h1 class="title">Reset Password</h1>
    <div class="RestPassword">
        <form>
            <div class="mb-3">
                <label for="oldPassword" class="form-label">Old Password</label>
                <input type="password" class="form-control" id="oldPassword" placeholder="Enter Old Password">
            </div>
            <div class="mb-3">
                <label for="newPassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Enter New Password">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password">
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</section>
@endsection
