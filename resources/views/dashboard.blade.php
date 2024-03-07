@extends('welcome')
@section('section')
<section class="con shadow-lg">
            <div class="flex-div">
                <div class="flex-1">
                    <div class="text">
                        <img src="./image/user.png" alt="">
                        <p>Total User</p>
                    </div>
                    <p class="flex-p">9495</p>
                </div>
                <div class="flex-1">
                    <div class="text">
                        <img src="./image/briefcase.png" alt="">
                        <p>Total wallet</p>
                    </div>
                    <p class="flex-p">₦6,689,445.11</p>
                </div>
                <div class="flex-1">
                    <div class="text">
                        <img src="./image/briefcase.png" alt="">
                        <p>Mar Transacton</p>
                    </div>
                    <p class="flex-p">9633</p>
                </div>
                <div class="flex-1">
                    <div class="text">
                        <img src="./image/get-revenue--v3.png" alt="">
                        <p>Mar Income</p>
                    </div>
                    <p class="flex-p">₦1,419,386</p>
                </div>
            </div>

            <h1 class="hi">user information</h1>


            <div class="search">
                <p></p>
                <div class="flex-2">
                    <label class="form-label" style="padding-top: 5px;" for="exampleFormControlInput1">Search:</label>
                    <input type="text" class="form-control" style="font-size: 13px;" id="exampleFormControlInput1"
                        name="text" placeholder="Search by number">
                </div>
            </div>

            <div class="btns">
                <p></p>
                <div class="btn">
                    <button>Export Excel</button>
                    <button>Export PDF</button>
                </div>
            </div>

            <div class="tab">
                <table class="table table-striped acc-table">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">FisrtName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">PhoneNumber</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Commission</th>
                        <th scope="col">Source</th>
                        <th scope="col">Status</th>
                    </tr>

                    <tr>
                        <td>Bolajialabi</td>
                        <td>Bolaji</td>
                        <td>Bolaji</td>
                        <td>2349063866781</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Steph09</td>
                        <td>oladimeji</td>
                        <td>adenusi</td>
                        <td>2349063866781</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>obasanmi1991</td>
                        <td>joy</td>
                        <td>joy</td>
                        <td>2348126808793</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>nikkybaby</td>
                        <td>OLANIKE</td>
                        <td>OLATUNJI</td>
                        <td>2348144424219</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Moshood</td>
                        <td>Rukayat</td>
                        <td>Hadiza</td>
                        <td>2348132150044</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Rokibat01</td>
                        <td>Rokibat</td>
                        <td>Alawode</td>
                        <td>2349168980533</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>ganiya</td>
                        <td>ganiyat</td>
                        <td>nasiru</td>
                        <td>2348157571999</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Nim@670502#</td>
                        <td>Ntokozo</td>
                        <td>Myeni</td>
                        <td>0828494081</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Debbiepretty</td>
                        <td>Deborah</td>
                        <td>Fagbayi</td>
                        <td>2348143505349</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>AFOLABIAYOMIDE</td>
                        <td>AYOMIDE</td>
                        <td>AYOMIDE</td>
                        <td>2349074140989</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Timothy</td>
                        <td>Alade</td>
                        <td>Timothy</td>
                        <td>2347066089348</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Lefty</td>
                        <td>Rofiyat</td>
                        <td>Fagbemi</td>
                        <td>2349157286096</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Teesquare</td>
                        <td>olusola</td>
                        <td>olakanmi</td>
                        <td>2348028949019</td>
                        <td>₦0</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Bushrah</td>
                        <td>Bushrah</td>
                        <td>Musediq</td>
                        <td>2349067276886</td>
                        <td>₦1,200</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>Godswill17</td>
                        <td>Godswill</td>
                        <td>Ibeawuchi</td>
                        <td>2347048546162</td>
                        <td>₦1,200</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>wrre</td>
                        <td>Ibeawuchi</td>
                        <td>Godswill</td>
                        <td>2347067409231</td>
                        <td>₦1,200</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <td>An-nabeely</td>
                        <td>Abdulwarith</td>
                        <td>olowooribi</td>
                        <td>2347018911156</td>
                        <td>₦1,200</td>
                        <td>₦0</td>
                        <td>app</td>
                        <td>Normal</td>
                    </tr>

                </table>
            </div>
        </section>
@endsection