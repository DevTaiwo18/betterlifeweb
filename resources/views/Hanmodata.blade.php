@extends('welcome')
@section('section')
    <section class="con shadow-lg">
        <div class="transaction">
            <h1 id="serviceHeading"><span>MTN</span> NETWORK</h1>
            <div class="dropdown">
                <button class="dropdown-toggle drop" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateContent('MTN')">MTN</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateContent('GLO')">GLO</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateContent('AIRTEL')">AIRTEL</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateContent('9MOBILE')">9MOBILE</a></li>
                </ul>
            </div>
        </div>

        <div class="addPlan">
            <p></p>
            <button type="button" onclick="showCustomModal()" class="blu" data-toggle="modal"
                data-target="#exampleModalCenter">
                ADD PLAN
            </button>
        </div>

        <table id="planTable" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Plan Name</th>
                    <th scope="col">Plan Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody id="planTableBody">

            </tbody>
        </table>

        <div id="myCustomModal">
            <div class="modal-content">
                <form id="planForm" class="shadow-lg">
                    <h2>ADD PLAN</h2>
                    <div class="mb-3">
                        <label for="planId" class="form-label">Plan Name</label>
                        <input type="text" class="form-control" id="planname" placeholder="Enter Plan Name"
                            data-base-name="PlanId">
                    </div>
                    <div class="mb-3">
                        <label for="planNetwork" class="form-label">Plan Price</label>
                        <input type="text" class="form-control" id="planPrice" placeholder="Enter Plan Price">
                    </div>
                    <div>
                        <button type="submit" class="save">Save</button>
                        <button type="button" class="btn btn-secondary ps-4 pe-4 pt-2 pb-2"
                            onclick="closeCustomModal()">Close</button>
                    </div>
                </form>
            </div>
        </div>


        <div id="myEditCustomModal">
            <div class="modal-content">
                <form id="planForm" class="shadow-lg">
                    <h2>EDIT PLAN</h2>
                    <div class="mb-3">
                        <label for="planId" class="form-label">Plan Name</label>
                        <input type="text" class="form-control" id="planname" placeholder="Enter Plan Name"
                            data-base-name="PlanId">
                    </div>
                    <div class="mb-3">
                        <label for="planNetwork" class="form-label">Plan Price</label>
                        <input type="text" class="form-control" id="planPrice" placeholder="Enter Plan Price">
                    </div>
                    <div>
                        <button type="submit" class="save">Save</button>
                        <button type="button" class="btn btn-secondary ps-4 pe-4 pt-2 pb-2"
                            onclick="closeEditCustomModal()">Close</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <script>
        function updateContent(network) {
            const plans = {
                'MTN': [{
                        sn: 1,
                        name: '500MB SME',
                        price: '₦133'
                    },
                    {
                        sn: 2,
                        name: 'MTN 1GB SME',
                        price: '₦260'
                    },
                    {
                        sn: 3,
                        name: 'MTN 2GB SME',
                        price: '₦520'
                    },
                    {
                        sn: 4,
                        name: 'MTN 3GB SME',
                        price: '₦780'
                    },
                    {
                        sn: 5,
                        name: 'MTN 5GB SME',
                        price: '₦1300'
                    },
                    {
                        sn: 6,
                        name: 'MTN 10GB SME',
                        price: '₦2600'
                    },
                    {
                        sn: 7,
                        name: 'MTN 50MB CG',
                        price: '₦30'
                    },
                    {
                        sn: 8,
                        name: 'MTN 150MB CG',
                        price: '₦60'
                    },
                    {
                        sn: 9,
                        name: 'MTN 250MB CG',
                        price: '₦80'
                    },
                    {
                        sn: 10,
                        name: 'MTN 500MB CG',
                        price: '₦133'
                    },
                    {
                        sn: 11,
                        name: 'MTN 1GB CG',
                        price: '₦265'
                    },
                    {
                        sn: 12,
                        name: 'MTN 2GB CG',
                        price: '₦530'
                    },
                    {
                        sn: 13,
                        name: 'MTN 5GB CG',
                        price: '₦1320'
                    },
                    {
                        sn: 14,
                        name: 'MTN 10GB CG',
                        price: '₦2640'
                    },
                    {
                        sn: 15,
                        name: 'MTN 15GB CG',
                        price: '₦3960'
                    },
                    {
                        sn: 16,
                        name: 'MTN 20GB CG',
                        price: '₦5280'
                    },
                    {
                        sn: 17,
                        name: 'MTN 40GB CG',
                        price: '₦10500'
                    },
                    {
                        sn: 18,
                        name: 'MTN 75GB CG',
                        price: '₦19750'
                    },
                    {
                        sn: 19,
                        name: 'MTN 100GB CG',
                        price: '₦27000'
                    }
                ],
                'GLO': [{
                        sn: 1,
                        name: '500MB [CORPORATE] 1 MONTH',
                        price: '₦125'
                    },
                    {
                        sn: 2,
                        name: '1GB [CORPORATE] 1 MONTH',
                        price: '₦250'
                    },
                    {
                        sn: 3,
                        name: '2GB [CORPORATE] 1 MONTH',
                        price: '₦500'
                    },
                    {
                        sn: 4,
                        name: '3GB [CORPORATE]',
                        price: '₦750'
                    },
                    {
                        sn: 5,
                        name: '5GB [CORPORATE]',
                        price: '₦1200'
                    },
                    {
                        sn: 6,
                        name: '10GB [CORPORATE]',
                        price: '₦1400'
                    },
                    {
                        sn: 7,
                        name: '50MG CG',
                        price: '₦50'
                    },
                    {
                        sn: 8,
                        name: '150MB CG',
                        price: '₦130'
                    },
                    {
                        sn: 9,
                        name: '350MB CG',
                        price: '₦170'
                    },
                    {
                        sn: 10,
                        name: '1.8GB CG',
                        price: '₦420'
                    }
                ],
                'AIRTEL': [{
                        sn: 1,
                        name: '100MB',
                        price: '₦50'
                    },
                    {
                        sn: 2,
                        name: '300MB',
                        price: '₦150'
                    },
                    {
                        sn: 3,
                        name: '500MB',
                        price: '₦180'
                    },
                    {
                        sn: 4,
                        name: '1GB',
                        price: '₦280'
                    },
                    {
                        sn: 5,
                        name: '2GB',
                        price: '₦560'
                    },
                    {
                        sn: 6,
                        name: '5GB',
                        price: '₦1400'
                    },
                    {
                        sn: 7,
                        name: '10GB',
                        price: '₦2800'
                    },
                    {
                        sn: 8,
                        name: '15GB',
                        price: '₦4200'
                    },
                    {
                        sn: 9,
                        name: '20GB',
                        price: '₦5600'
                    }
                ],
                '9MOBILE': [{
                        sn: 1,
                        name: '11.0 GB',
                        price: '₦3240'
                    },
                    {
                        sn: 2,
                        name: '4.5 GB',
                        price: '₦1620'
                    },
                    {
                        sn: 3,
                        name: '2.0 GB',
                        price: '₦972'
                    },
                    {
                        sn: 4,
                        name: '1.5 GB',
                        price: '₦810'
                    },
                    {
                        sn: 5,
                        name: '75.0 GB',
                        price: '₦12150'
                    },
                    {
                        sn: 6,
                        name: '25.0 MB',
                        price: '₦44'
                    },
                    {
                        sn: 7,
                        name: '100.0 MB',
                        price: '₦84'
                    },
                    {
                        sn: 8,
                        name: '40.0 GB',
                        price: '₦8100'
                    },
                    {
                        sn: 9,
                        name: '5.0 GB',
                        price: '₦675'
                    },
                    {
                        sn: 10,
                        name: '100.0 GB',
                        price: '₦13500'
                    }
                ]

            };

            const serviceHeading = document.getElementById('serviceHeading');
            serviceHeading.innerHTML = `${network} NETWORK`

            const planTableBody = document.getElementById('planTableBody');
            planTableBody.innerHTML = '';

            plans[network].forEach(plan => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${plan.sn}</td>
                    <td>${plan.name}</td>
                    <td>${plan.price}</td>
                    <td>
                        <button class="Husmo btn btn-primary btn-sm edit-btn" data-plan-id="dstv-padi"><i class="bi bi-pencil-square"></i></button>
                    </td>
                    <td>
                        <button class="Husmo btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                    </td>
                `;
                planTableBody.appendChild(row);
            });
            attachEditeventfuction()
        }
        updateContent("MTN")

        function showCustomModal() {
            let myModal = document.querySelector("#myCustomModal");
            myModal.style.display = "block";
        }

        function closeCustomModal() {
            let myModal = document.querySelector("#myCustomModal");
            myModal.style.display = "none";
        }

        function attachEditeventfuction() {
            const editButton = document.querySelectorAll('.edit-btn');
            let modal = document.getElementById('myEditCustomModal');

            editButton.forEach((editBtn) => {
                editBtn.addEventListener('click', () => {
                    modal.style.display = 'block';
                })
            })
        }

        function closeEditCustomModal() {
            let modal = document.getElementById('myEditCustomModal');
            modal.style.display = 'none';
        }
    </script>
@endsection
