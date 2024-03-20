@extends('welcome')
@section('section')
    <style>
        .box-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 17rem;
        }

        .box-flex button {
            background-color: #ffffff;
            color: #000000;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
            border: none;
        }

        .upload,
        .dataManagement,
        .manage {
            display: none;
            margin-top: 30px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .dataManagement input {
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 5px;
            background-color: transparent;
        }

        .dataManagement select {
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

        .formGroup {
            margin-bottom: 20px;
        }

        .file-input {
            position: relative;
            overflow: hidden;
            display: inline-block;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 20px;
            color: #555;
            width: 100%;
            height: 20vh;
        }

        .file-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            width: 100%;
            height: 100%;
        }

        .file-input .icon {
            width: 100%;
            height: 100%;
            background: url('/public/image/21455356.jpg');
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

        @media (max-width: 1200px) {
            .box-flex {
                gap: 10rem;
            }
        }

        @media (max-width: 1000px) {
            .box-flex {
                gap: 4rem;
            }
        }

        @media (max-width: 767px) {
            .box-flex {
                gap: 2rem;
            }

            .box-flex button {
                background-color: #ffffff;
                color: #000000;
                border: none;
                border-radius: 5px;
                padding: 10px 10px;
                font-size: 10px;
            }

        }
    </style>

    <section class="con shadow-lg">

        <div class="box-flex">
            <button id="uploadBtn" class="shadow-lg" onclick="handleButtonClick('upload')">Upload</button>
            <button id="dataBtn" class="shadow-lg" onclick="handleButtonClick('data')">Data Management</button>
        </div>

        <div class="upload">
            <h2 class="title">Upload Banners</h2>

            <div class="formGroup">
                <label for="adsOne">Select Ads One (svg only) (315 by 103px)</label>
                <label class="file-input">
                    <div class="icon"></div>
                    <input type="file" id="adsOne" accept=".svg">
                </label>
            </div>

            <div class="formGroup">
                <label for="adsTwo">Select Ads Two (svg only) (315 by 103px)</label>
                <label class="file-input">
                    <div class="icon"></div>
                    <input type="file" id="adsTwo" accept=".svg">
                </label>
            </div>

            <div class="formGroup">
                <label for="adsThree">Select Ads Three (svg only) (315 by 103px)</label>
                <label class="file-input">
                    <div class="icon"></div>
                    <input type="file" id="adsThree" accept=".svg">
                </label>
            </div>

            <button class="shadow-lg">Save</button>
        </div>


        <div class="dataManagement">
            <h2 class="title">Data Management</h2>

            <div class="mb-3">
                <label for="normalDataUser" class="form-label">Normal Data User</label>
                <input type="text" class="form-control" id="normalDataUser" placeholder="Normal Data User"
                    value="0">
            </div>
            <div class="mb-3">
                <label for="merchantDataUser" class="form-label">Merchant Data User</label>
                <input type="text" class="form-control" id="merchantDataUser" placeholder="Merchant Data User"
                    value="0">
            </div>
            <div class="mb-3">
                <label for="normalAirtimeUser" class="form-label">Normal Airtime User</label>
                <input type="text" class="form-control" id="normalAirtimeUser" value="0.02">
            </div>
            <div class="mb-3">
                <label for="merchantAirtimeUser" class="form-label">Merchant Airtime User</label>
                <input type="text" class="form-control" id="merchantAirtimeUser" value="0.02">
            </div>
            <div class="mb-3">
                <label for="normalElectricUser" class="form-label">Normal Electric User</label>
                <input type="text" class="form-control" id="normalElectricUser" value="20">
            </div>
            <div class="mb-3">
                <label for="merchantElectricUser" class="form-label">Merchant Electric User</label>
                <input type="text" class="form-control" id="merchantElectricUser" value="30">
            </div>
            <div class="mb-3">
                <label for="normalCableUsers" class="form-label">Normal Cable Users</label>
                <input type="text" class="form-control" id="normalCableUsers" value="0">
            </div>
            <div class="mb-3">
                <label for="merchantCableUser" class="form-label">Merchant Cable User</label>
                <input type="text" class="form-control" id="merchantCableUser" value="30">
            </div>
            <div class="mb-3">
                <label for="billCommission" class="form-label">Bill Commission</label>
                <input type="text" class="form-control" id="billCommission" value="10">
            </div>
            <div class="mb-3">
                <label for="dataCommission" class="form-label">Data Commission</label>
                <input type="text" class="form-control" id="dataCommission" value="0">
            </div>
            <div class="mb-3">
                <label for="airtimeCommission" class="form-label">Airtime Commission</label>
                <input type="text" class="form-control" id="airtimeCommission" value="0.02">
            </div>
            <div class="mb-3">
                <label for="kudaTransferFees" class="form-label">KUDA Transfer Fees</label>
                <input type="text" class="form-control" id="kudaTransferFees" value="10">
            </div>
            <div class="mb-3">
                <label for="transferFees" class="form-label">Transfer fees</label>
                <input type="text" class="form-control" id="transferFees" value="20">
            </div>
            <div class="mb-3">
                <label for="aggregatorReferral" class="form-label">Aggregator Referral</label>
                <input type="text" class="form-control" id="aggregatorReferral" value="500">
            </div>
            <div class="mb-3">
                <label for="bulkSms" class="form-label">Bulk SMS</label>
                <input type="text" class="form-control" id="bulkSms" placeholder="Bulk SMS" value="4">
            </div>
        
            <button>Save</button>
        </div>

    </section>

    <script>
        function handleButtonClick(btn) {
            document.querySelectorAll('.upload, .dataManagement').forEach(div => {
                div.style.display = 'none';
            });

            document.getElementById('uploadBtn').style.backgroundColor = '';
            document.getElementById('uploadBtn').style.color = '';
            document.getElementById('dataBtn').style.backgroundColor = '';
            document.getElementById('dataBtn').style.color = '';

            if (btn === 'upload') {
                document.getElementById('uploadBtn').style.backgroundColor = 'rgb(10, 26, 168)';
                document.getElementById('uploadBtn').style.color = '#ffffff';
                document.querySelector('.upload').style.display = 'block';
            } else if (btn === 'data') {
                document.getElementById('dataBtn').style.backgroundColor = 'rgb(10, 26, 168)';
                document.getElementById('dataBtn').style.color = '#ffffff';
                document.querySelector('.dataManagement').style.display = 'block';
            } else if (btn === 'manage') {
                document.getElementById('manageBtn').style.backgroundColor = 'rgb(10, 26, 168)';
                document.getElementById('manageBtn').style.color = '#ffffff';
                document.querySelector('.manage').style.display = 'block';
            }
        }

        handleButtonClick("upload");
    </script>
@endsection
