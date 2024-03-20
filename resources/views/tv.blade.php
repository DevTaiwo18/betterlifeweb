@extends('welcome')

@section('section')
    <section class="con shadow-lg">
        <div class="transaction">
            <h1 id="serviceHeading"><span>DSTV</span> Plans</h1>
            <div class="dropdown">
                <button class="dropdown-toggle drop" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateContent('DSTV')">DSTV</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateContent('GOTV')">GOTV</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateContent('STARTIME')">STARTIME</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateContent('SHOWMAX')">SHOWMAX</a></li>
                </ul>
            </div>
        </div>

        <div class="addPlan">
            <p></p>
            <button type="button" onclick="showModal()" class="blu" data-toggle="modal"
                data-target="#exampleModalCenter">
                ADD PLAN
            </button>
        </div>


        <div id="myModal">
            <div class="modal-content">
                <form id="planForm" class="shadow-lg">
                    <h2>ADD PLAN</h2>
                    <div class="mb-3">
                        <label for="planId" class="form-label">Plan ID</label>
                        <input type="text" class="form-control" id="planId" placeholder="Enter Plan ID"
                            data-base-name="PlanId">
                    </div>
                    <div class="mb-3">
                        <label for="planNetwork" class="form-label">Plan Network</label>
                        <input type="text" class="form-control" id="planNetwork" placeholder="Enter Plan Network">
                    </div>
                    <div class="mb-3">
                        <label for="planPrice" class="form-label">Plan Price</label>
                        <input type="text" class="form-control" id="planPrice" placeholder="Enter Plan Price"
                            data-base-name="PlanPrice">
                    </div>
                    <div class="mb-3">
                        <label for="planName" class="form-label">Plan Name</label>
                        <input type="text" class="form-control" id="planName" placeholder="Enter Plan Name"
                            data-base-name="PlanName">
                    </div>
                    <div>
                        <button type="submit" class="save">Save</button>
                        <button type="button" class="btn btn-secondary ps-4 pe-4 pt-2 pb-2"
                            onclick="closeModal()">Close</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="myEditModal">
            <div class="Emodal-content">
                <form id="planForm" class="shadow-lg">
                    <h2>EDIT PLAN</h2>
                    <div class="mb-3">
                        <label for="planId" class="form-label">Plan ID</label>
                        <input type="text" class="form-control" id="planId" placeholder="Enter Plan ID"
                            data-base-name="PlanId">
                    </div>
                    <div class="mb-3">
                        <label for="planNetwork" class="form-label">Plan Network</label>
                        <input type="text" class="form-control" id="planNetwork" placeholder="Enter Plan Network">
                    </div>
                    <div class="mb-3">
                        <label for="planPrice" class="form-label">Plan Price</label>
                        <input type="text" class="form-control" id="planPrice" placeholder="Enter Plan Price"
                            data-base-name="PlanPrice">
                    </div>
                    <div class="mb-3">
                        <label for="planName" class="form-label">Plan Name</label>
                        <input type="text" class="form-control" id="planName" placeholder="Enter Plan Name"
                            data-base-name="PlanName">
                    </div>
                    <div>
                        <button type="submit" class="save">Save</button>
                        <button type="button" class="btn btn-secondary ps-4 pe-4 pt-2 pb-2"
                            onclick="closeEditModal()">Close</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="contentContainer">

        </div>

    </section>

    <script>
        const servicesContent = {
            'DSTV': [{
                    planId: 'dstv-padi',
                    id: 40,
                    network: 'DSTV',
                    price: '₦2150',
                    name: 'DStv Padi N2,150'
                },
                {
                    planId: 'dstv-yanga',
                    id: 41,
                    network: 'DSTV',
                    price: '₦2950',
                    name: 'DStv Yanga N2,950'
                },
                {
                    planId: 'dstv-confam',
                    id: 42,
                    network: 'DSTV',
                    price: '₦5300',
                    name: 'Dstv Confam N5,300'
                },
                {
                    planId: 'dstv-premium',
                    id: 43,
                    network: 'DSTV',
                    price: '₦21000',
                    name: 'DStv Premium N21,000'
                },
                {
                    planId: 'dstv-asia',
                    id: 44,
                    network: 'DSTV',
                    price: '₦7100',
                    name: 'DStv Asia N7,100'
                },
                {
                    planId: 'dstv-compact-plus',
                    id: 45,
                    network: 'DSTV',
                    price: '₦14250',
                    name: 'DStv Compact Plus N14,250'
                },
                {
                    planId: 'dstv-premium-french',
                    id: 46,
                    network: 'DSTV',
                    price: '₦29300',
                    name: 'DStv Premium-French N29,300'
                },
            ],
            'GOTV': [{
                    planId: 'gotv-max',
                    id: 33,
                    network: 'GOTV',
                    price: '₦4150',
                    name: 'GOtv Max N4,150'
                },
                {
                    planId: 'gotv-jolli',
                    id: 34,
                    network: 'GOTV',
                    price: '₦2800',
                    name: 'GOtv Jolli N2,800'
                },
                {
                    planId: 'gotv-jinja',
                    id: 35,
                    network: 'GOTV',
                    price: '₦1900',
                    name: 'GOtv Jinja N1,900'
                },
                {
                    planId: 'gotv-smallie',
                    id: 36,
                    network: 'GOTV',
                    price: '₦900',
                    name: 'GOtv Smallie - monthly N900'
                },
            ],
            'STARTIME': [{
                    planId: 'nova',
                    id: 74,
                    network: 'Startimes',
                    price: '₦900',
                    name: 'Nova - 900 Naira - 1 Month'
                },
                {
                    planId: 'basic',
                    id: 75,
                    network: 'Startimes',
                    price: '₦1850',
                    name: 'Basic (Antenna) - 1,850 Naira - 1 Month'
                },
                {
                    planId: 'smart',
                    id: 76,
                    network: 'Startimes',
                    price: '₦2600',
                    name: 'Smart (Dish) - 2,600 Naira - 1 Month'
                },
                {
                    planId: 'classic',
                    id: 77,
                    network: 'Startimes',
                    price: '₦2750',
                    name: 'Classic (Antenna) - 2,750 Naira - 1 Month'
                },
                {
                    planId: 'super',
                    id: 78,
                    network: 'Startimes',
                    price: '₦4900',
                    name: 'Super (Dish) - 4,900 Naira - 1 Month'
                },
            ],
            'SHOWMAX': [{
                    planId: 'mobile_only',
                    id: 91,
                    network: 'Showmax',
                    price: '₦1450',
                    name: 'Mobile Only - N1,450'
                },
                {
                    planId: 'sports_full',
                    id: 92,
                    network: 'Showmax',
                    price: '₦6300',
                    name: 'Sports Full - N6,300'
                },
                {
                    planId: 'sports_mobile_only',
                    id: 93,
                    network: 'Showmax',
                    price: '₦3200',
                    name: 'Sports Mobile Only - N3,200'
                },
            ],
        };

        function updateContent(service) {
            const serviceHeading = document.getElementById('serviceHeading');
            const contentContainer = document.getElementById('contentContainer');

            serviceHeading.innerHTML = `<span>${service}</span> PLANS`;

            let contentHTML = `<table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Plan ID</th>
                                <th>ID</th>
                                <th>Plan Network</th>
                                <th>Plan Price</th>
                                <th>Plan Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>`;

            servicesContent[service].forEach(plan => {
                contentHTML += `<tr>
                            <td>${plan.planId}</td>
                            <td>${plan.id}</td>
                            <td>${plan.network}</td>
                            <td>${plan.price}</td>
                            <td>${plan.name}</td>
                            <td>
                                <button class="btn btn-primary btn-sm edit-btn" data-plan-id="dstv-padi"><i class="bi bi-pencil-square"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>`;
            });

            contentHTML += `</tbody></table>`;

            contentContainer.innerHTML = contentHTML;
            attachEditEventListeners();
        }

        updateContent("DSTV")

        function showModal() {
            let myModal = document.querySelector("#myModal");
            myModal.style.display = "block";
        }

        function closeModal() {
            let myModal = document.querySelector("#myModal");
            myModal.style.display = "none";
        }

        function attachEditEventListeners() {
            const editButtons = document.querySelectorAll('.edit-btn');
            const modal = document.getElementById('myEditModal');

            editButtons.forEach((editBtn) => {
                editBtn.addEventListener('click', () => {
                    modal.style.display = 'block';
                })
            })
        }

        function closeEditModal() {
            let modal = document.getElementById('myEditModal');
            modal.style.display = 'none';
        }
    </script>
@endsection
