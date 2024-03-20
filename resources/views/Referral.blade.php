@extends('welcome')
@section('section')
    <style>
        .btnsss {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 10px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
        }
    </style>

    <section class="con shadow-lg">

        <div class="transaction">
            <h1><span>Referral</span></h1>
        </div>

        <div class="btns">
            <p></p>
            <div class="btn">
                <button>Export Excel</button>
                <button>Export PDF</button>
            </div>
        </div>

        <div class="tab">
            <table class="acc-table table table-striped table-responsive">
                <thead id="tableHead">
                    <tr>
                        <th>Users</th>
                        <th>All Referrals</th>
                        <th>Earned Referral</th>
                        <th>Not Earned</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr>
                        <td>joyfulsam1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>@oyinda iyiola</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>debbytunrayo</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>oladapo</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>Makenny</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>darasimi</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>Roqeeb</td>
                        <td>2</td>
                        <td>2</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>teedoller</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>arabasamson</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>kausara</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>sukurat67</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>adedoyin ibukunoluwa</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>kolly</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>mojeed2009</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>kehindeajala75</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>KEHINDE</td>
                        <td>2</td>
                        <td>1</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>Sadiat</td>
                        <td>2</td>
                        <td>2</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>Adeyinka</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>alabi</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>GM</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>basit</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>agidigbo fm</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    <tr>
                        <td>musa ogungbade</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td><button class="btnsss">Get Details</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </section>
@endsection
