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

    input[type="text"],
    textarea {
        width: 100%;
        border: 1px solid #ced4da; 
        border-radius: 5px;
        padding: 8px; 
        box-sizing: border-box; 
        font-family: "Quicksand", sans-serif;
        background-color: transparent;
        font-size: 14px;
        margin-bottom: 10px;
    }
    
    #broadcastText{
        background: transparent;
        font-size: 14px;
        height: 120px;
        overflow-y: auto;
    }

    .char-count {
        font-size: 12px;
        color: #6c757d;
        margin-bottom: 10px;
    }

</style>

<section class="con shadow-lg">
    <h1 class="title">Broadcast a Title</h1>
    <div class="broadcast-form">
        <form>
            <div class="mb-3">
                <label for="broadcastTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="broadcastTitle" placeholder="Enter Title">
            </div>
            <div class="mb-0">
                <label for="broadcastText" class="formlabel">Message</label>
                <textarea class="form-control" id="broadcastText" placeholder="Enter Text here..."></textarea>
            </div>
            <p class="char-count"><span id="Count">0</span> words</p>
            <button type="submit">Send Broadcast</button>
        </form>
    </div>
</section>

<script>
    const broadcastText = document.getElementById('broadcastText');
    const Count = document.getElementById('Count');

    broadcastText.addEventListener('input', function() {
        Count.textContent = this.value.length;
    });
</script>

@endsection
