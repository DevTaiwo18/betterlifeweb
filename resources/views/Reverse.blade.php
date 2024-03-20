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

    #TransactionReference {
        width: 100%;
        border: 1px solid #ced4da; 
        border-radius: 5px;
        padding: 8px; 
        box-sizing: border-box; 
        font-family: "Quicksand", sans-serif;
        background-color: transparent;
        font-size: 14px;
    }

    .transaction{
        display: block;
    }

</style>

<section class="con shadow-lg">
    <h1 class="title">Reverse Transaction</h1>
    <div class="transaction">
        <form>
            <div class="mb-3">
                <label for="TransactionReference" class="form-label">Transaction Reference</label>
                <input type="text" class="form-control" id="TransactionReference" placeholder="Transaction Reference">
            </div>
            <button>Save</button>
        </form>
    </div>
</section>
@endsection
