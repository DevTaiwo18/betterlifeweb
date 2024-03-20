@extends('welcome')
@section('section')
    <style>
        .api {
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 40px;
        }

        .api select {
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 5px;
            background-color: transparent;
        }

        .tv-settings {
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 40px;
        }

        .tv-settings select {
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 5px;
            background-color: transparent;
        }

        .title {
            font-size: 16px !important;
            color: #000000;
            font-weight: 600;
            padding-bottom: 15px;
            font-family: "Open Sans", sans-serif;
        }

        button {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
            border: 1px solid rgb(10, 26, 168);
        }

    </style>

    <section class="con shadow-lg">
        <div class="api">
            <h2 class="title">DATA API SETTINGS</h2>
            <div class="mb-3">
                <label for="mtnDataApi">MTN Data API</label>
                <br>
                <select class="form-select" id="mtnDataApi">
                    <option value="">SME PLUG</option>
                    <option value="">CARDRI</option>
                    <option value="">CARDRI CONNECT</option>
                    <option value="">HUSMODATA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="airtelDataApi">Airtel Data API</label>
                <br>
                <select class="form-select" id="airtelDataApi">
                    <option value="1">SME PLUG</option>
                    <option value="2">CARDRI</option>
                    <option value="3">CARDRI CONNECT</option>
                    <option value="6">HUSMODATA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gloDataApi">Glo Data API</label>
                <br>
                <select class="form-select" id="gloDataApi">
                    <option value="">SME PLUG</option>
                    <option value="">CARDRI</option>
                    <option value="">CARDRI CONNECT</option>
                    <option value="">HUSMODATA</option>
                </select>
            </div>
            <button>Save</button>
        </div>

        <div class="api">
            <h2 class="title">AIRTIME API SETTINGS</h2>
            <div class="mb-3">
                <label for="mtnAirtimeApi">MTN Airtime API</label>
                <br>
                <select class="form-select" id="mtnAirtimeApi">
                    <option value="">SME PLUG</option>
                    <option value="">CARDRI</option>
                    <option value="">CARDRI CONNECT</option>
                    <option value="">HUSMODATA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="airtelAirtimeApi">Airtel Airtime API</label>
                <br>
                <select class="form-select" id="airtelAirtimeApi">
                    <option value="1">SME PLUG</option>
                    <option value="2">CARDRI</option>
                    <option value="3">CARDRI CONNECT</option>
                    <option value="6">HUSMODATA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gloAirtimeApi">Glo Airtime API</label>
                <br>
                <select class="form-select" id="gloAirtimeApi">
                    <option value="">SME PLUG</option>
                    <option value="">CARDRI</option>
                    <option value="">CARDRI CONNECT</option>
                    <option value="">HUSMODATA</option>
                </select>
            </div>
            <button>Save</button>
        </div>

        <div class="tv-settings">
            <h2 class="title">TV API SETTINGS</h2>
            <div class="mb-3">
                <label for="tvApi">TV API</label>
                <br>
                <select class="form-select" id="tvApi">
                    <option value="smePlug">SME PLUG</option>
                    <option value="cardri">CARDRI</option>
                    <option value="cardriConnect">CARDRI CONNECT</option>
                    <option value="husmoData">HUSMODATA</option>
                </select>
            </div>
            <button>Save</button>
        </div>
        
    </section>
@endsection