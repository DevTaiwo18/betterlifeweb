@extends('welcome')
@section('section')
    <section class="con shadow-lg">

        <div class="transaction">
            <h1><span>Transactions</span></h1>
            @include('dropdown')
        </div>

        <div class="flexxx">

            <div class="flex-box">
                <div class="blue">
                    <h3>March Total Transaction</h3>
                    <p>798696</p>
                </div>
                <div class="blue">
                    <h3>March Total Airtime Income</h3>
                    <p>₦1,037,302.36</p>
                </div>
            </div>

            <div class="date">
                <div class="form-group">
                    <label for="date">From</label>
                    <input type="date" name="date" id="">
                </div>

                <div class="form-group">
                    <label for="">To</label>
                    <input type="date" name="date" id="">
                </div>
            </div>

        </div>

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
            <table class="acc-table table table-striped table-responsive">
                <thead id="tableHead"></thead>
                <tbody id="tableBody"></tbody>
            </table>
        </div>
    </section>
    <script>
        const staticTransactions = [{
                TransactionID: '20220730123950ref',
                Time: '30-07-2022 4:39:50am',
                Receiver: '08034263407',
                Network: 'MTN',
                "Bal.B4": '₦0',
                'Bal.A': '₦0',
                Amount: '₦100',
                Status: 'Failed'
            },
            {
                TransactionID: '20220730124030ref',
                Time: '30-07-2022 4:40:30am',
                Receiver: '08022332233',
                Network: 'Airtel',
                "Bal.B4": '₦0',
                'Bal.A': '₦0',
                Amount: '₦100',
                Status: 'Failed'
            },
            {
                TransactionID: '20220812145609ref',
                Time: '12-08-2022 11:56:09am',
                Receiver: '08123456789',
                Network: 'GLO',
                "Bal.B4": '₦0',
                'Bal.A': '₦0',
                Amount: '₦500',
                Status: 'Completed'
            },
            {
                TransactionID: '20220812150821ref',
                Time: '12-08-2022 12:08:21pm',
                Receiver: '09098765432',
                Network: '9mobile',
                "Bal.B4": '₦0',
                'Bal.A': '₦0',
                Amount: '₦200',
                Status: 'Completed'
            },
            {
                TransactionID: '20220812152203ref',
                Time: '12-08-2022 12:22:03pm',
                Receiver: '08087654321',
                Network: 'Airtel',
                "Bal.B4": '₦0',
                'Bal.A': '₦0',
                Amount: '₦300',
                Status: 'Completed'
            },
            {
                TransactionID: '20220812153515ref',
                Time: '12-08-2022 12:35:15pm',
                Receiver: '07011223344',
                Network: 'MTN',
                "Bal.B4": '₦0',
                'Bal.A': '₦0',
                Amount: '₦400',
                Status: 'Completed'
            },
            {
                TransactionID: '20220812154729ref',
                Time: '12-08-2022 12:47:29pm',
                Receiver: '08134567890',
                Network: 'GLO',
                "Bal.B4": '₦0',
                'Bal.A': '₦0',
                Amount: '₦600',
                Status: 'Failed'
            }
        ];

        function updateTable(action) {
            const headers = {
                'Transfer': ['TransactionID', 'Time', 'Receiver', 'Sender', "Bal.B4", 'Bal.A', 'Amount',
                    'Source', 'Status'
                ],
                'Fund Deposit': ['TransactionID', 'Time', 'User', 'Methods', "Bal.B4", 'Bal.A', 'Amount',
                    'Source', 'Status'
                ],
                'static': ['TransactionID', 'Time', 'Receiver', 'Network', "Bal.B4", 'Bal.A', 'Amount',
                    'Status'
                ],
                'Data subscription': ['TransactionID', 'Time', 'Receiver', 'Network', "Bal.B4", 'Bal.A',
                    'Amount',
                    'Status'
                ],
                "Airtime": ['TransactionID', 'Time', 'Receiver', 'Network', "Bal.B4", 'Bal.A',
                    'Amount',
                    'Status'
                ],
                "Airtime 2 cash": ['TransactionID', 'Time', 'Sender', 'Receiver', "Bal.B4", 'Bal.A',
                    'Amount',
                    'Status'
                ],
                "Bill Payment": [],
                "cable & Tv": ['TransactionID', 'Time', 'Receiver', 'DISCO', "Bal.B4", 'Bal.A',
                    'Amount', 'Sources',
                    'Status'
                ],
                "Merchant Upgrade": []
            };

            const dynamicData = {
                'Transfer': [{
                        TransactionID: '20240306011157ref4',
                        Time: '05-03-2024 4:11:57pm',
                        Receiver: 'makanjuola Balikis',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,241,614',
                        'Bal.A': '₦4,241,418',
                        Amount: '₦196',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240306011128ref3',
                        Time: '05-03-2024 4:11:28pm',
                        Receiver: 'makanjuola Balikis',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,242,302',
                        'Bal.A': '₦4,241,614',
                        Amount: '₦688',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240306010933ref2',
                        Time: '05-03-2024 4:9:33pm',
                        Receiver: 'makanjuola Balikis',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,242,792',
                        'Bal.A': '₦4,242,302',
                        Amount: '₦490',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240301103529ref4',
                        Time: '01-03-2024 1:35:30am',
                        Receiver: 'Idowu Either John',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,247,087',
                        'Bal.A': '₦4,247,038',
                        Amount: '₦49',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240302093045ref1',
                        Time: '02-03-2024 9:30:45am',
                        Receiver: 'Samuel Adekunle',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦5,000,000',
                        'Bal.A': '₦4,999,800',
                        Amount: '₦200',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240302101530ref2',
                        Time: '02-03-2024 10:15:30am',
                        Receiver: 'Joy Emeka',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,999,800',
                        'Bal.A': '₦4,999,500',
                        Amount: '₦300',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240302110000ref3',
                        Time: '02-03-2024 11:00:00am',
                        Receiver: 'Peter Osinbajo',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,999,500',
                        'Bal.A': '₦4,999,200',
                        Amount: '₦300',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240302114500ref4',
                        Time: '02-03-2024 11:45:00am',
                        Receiver: 'Linda Igho',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,999,200',
                        'Bal.A': '₦4,999,000',
                        Amount: '₦200',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240302123000ref5',
                        Time: '02-03-2024 12:30:00pm',
                        Receiver: 'Chukwudi Eze',
                        Sender: 'BETTERLIFE',
                        "Bal.B4": '₦4,999,000',
                        'Bal.A': '₦4,998,700',
                        Amount: '₦300',
                        Status: 'Completed'
                    }

                ],
                'Fund Deposit': [{
                        TransactionID: '20240307034550',
                        Time: '06-03-2024 6:45:50pm',
                        User: 'oluwafunto olusola aladesola',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦14.04',
                        'Bal.A': '₦1,014.04',
                        Amount: '₦1,000',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307032659',
                        Time: '06-03-2024 6:26:59pm',
                        User: 'adekunle hammed yussuf',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦110.4',
                        'Bal.A': '₦610.4',
                        Amount: '₦500',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240306234841',
                        Time: '06-03-2024 2:48:41pm',
                        User: 'ALARAPE TOPE KEHINDE',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦735',
                        'Bal.A': '₦2,235',
                        Amount: '₦1,500',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240306234650',
                        Time: '06-03-2024 2:46:50pm',
                        User: '2071072823',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦18',
                        'Bal.A': '₦268',
                        Amount: '₦250',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307045610',
                        Time: '06-03-2024 7:56:10pm',
                        User: 'TIMOTHY OLUSHOLA IBITOYE',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦412',
                        'Bal.A': '₦512',
                        Amount: '₦100',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307045444',
                        Time: '06-03-2024 7:54:44pm',
                        User: 'ODUNLADE OLUWASEUN OGUNRONBI',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦8',
                        'Bal.A': '₦320',
                        Amount: '₦312',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307045040',
                        Time: '06-03-2024 7:50:40pm',
                        User: 'TIMOTHY OLUSHOLA IBITOYE',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦92',
                        'Bal.A': '₦1,092',
                        Amount: '₦1,000',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307034550',
                        Time: '06-03-2024 6:45:50pm',
                        User: 'oluwafunto olusola aladesola',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦14.04',
                        'Bal.A': '₦1,014.04',
                        Amount: '₦1,000',
                        Source: '',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307032659',
                        Time: '06-03-2024 6:26:59pm',
                        User: 'adekunle hammed yussuf',
                        Methods: 'Bank Transfer',
                        "Bal.B4": '₦110.4',
                        'Bal.A': '₦610.4',
                        Amount: '₦500',
                        Source: '',
                        Status: 'Completed'
                    }

                ],
                'Data subscription': [{
                        TransactionID: '20240307045809ref8',
                        Time: '06-03-2024 7:58:14pm',
                        Receiver: '07061070861',
                        Network: 'MTN',
                        "Bal.B4": '60',
                        'Bal.A': '₦320',
                        Amount: '₦133',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307045635ref7',
                        Time: '06-03-2024 7:56:40pm',
                        Receiver: '08068973680',
                        Network: 'MTN',
                        "Bal.B4": '51',
                        'Bal.A': '₦544',
                        Amount: '₦260',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307045207ref1',
                        Time: '06-03-2024 7:52:09pm',
                        Receiver: '07086770200',
                        Network: 'Airtel',
                        "Bal.B4": '214',
                        'Bal.A': '₦832',
                        Amount: '₦420',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307045123ref0',
                        Time: '06-03-2024 7:51:28pm',
                        Receiver: '07066909696',
                        Network: 'MTN',
                        "Bal.B4": '51',
                        'Bal.A': '₦1,092',
                        Amount: '₦260',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307035254ref8',
                        Time: '06-03-2024 6:52:55pm',
                        Receiver: '07085439231',
                        Network: 'Airtel',
                        "Bal.B4": '213',
                        'Bal.A': '₦294.2',
                        Amount: '₦210',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307034704ref0',
                        Time: '06-03-2024 6:47:08pm',
                        Receiver: '08066473134',
                        Network: 'MTN',
                        "Bal.B4": '51',
                        'Bal.A': '₦1,014.04',
                        Amount: '₦260',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307034148ref6',
                        Time: '06-03-2024 6:41:50pm',
                        Receiver: '09119284762',
                        Network: 'Airtel',
                        "Bal.B4": '212',
                        'Bal.A': '₦135',
                        Amount: '₦110',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307032921ref2',
                        Time: '06-03-2024 6:29:25pm',
                        Receiver: '08114048216',
                        Network: 'GLO',
                        "Bal.B4": '262',
                        'Bal.A': '₦610.4',
                        Amount: '₦500',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307021339ref8',
                        Time: '06-03-2024 5:13:40pm',
                        Receiver: '09074053142',
                        Network: 'Airtel',
                        "Bal.B4": '213',
                        'Bal.A': '₦2,365',
                        Amount: '₦210',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240307021154ref5',
                        Time: '06-03-2024 5:11:58pm',
                        Receiver: '07037429694',
                        Network: 'MTN',
                        "Bal.B4": '50',
                        'Bal.A': '₦1,026',
                        Amount: '₦520',
                        Status: 'Completed'
                    }

                ],
                'Airtime': [{
                        TransactionID: '20240307050734ref7',
                        Time: '06-03-2024 8:7:34pm',
                        Receiver: '07013389805',
                        Network: 'Airtel',
                        "Bal.B4": '₦122.4',
                        'Bal.A': '₦4.8',
                        Amount: '₦117.6',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307045929ref8',
                        Time: '06-03-2024 7:59:29pm',
                        Receiver: '07038898304',
                        Network: 'MTN',
                        "Bal.B4": '₦187',
                        'Bal.A': '₦3.74',
                        Amount: '₦183.26',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307044929ref7',
                        Time: '06-03-2024 7:49:29pm',
                        Receiver: '08166438000',
                        Network: 'MTN',
                        "Bal.B4": '₦1,164.2',
                        'Bal.A': '₦1,066.2',
                        Amount: '₦98',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307041029ref6',
                        Time: '06-03-2024 7:10:29pm',
                        Receiver: '09152382635',
                        Network: 'GLO',
                        "Bal.B4": '₦926.6',
                        'Bal.A': '₦828.6',
                        Amount: '₦98',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307031322ref4',
                        Time: '06-03-2024 6:13:22pm',
                        Receiver: '07086612562',
                        Network: 'Airtel',
                        "Bal.B4": '₦88',
                        'Bal.A': '₦39',
                        Amount: '₦49',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307031230ref2',
                        Time: '06-03-2024 6:12:30pm',
                        Receiver: '07086612562',
                        Network: 'MTN',
                        "Bal.B4": '₦88',
                        'Bal.A': '₦39',
                        Amount: '₦49',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307015912ref2',
                        Time: '06-03-2024 4:59:12pm',
                        Receiver: '08077114043',
                        Network: 'GLO',
                        "Bal.B4": '₦8,685.14',
                        'Bal.A': '₦8,489.14',
                        Amount: '₦196',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307005907ref9',
                        Time: '06-03-2024 3:59:7pm',
                        Receiver: '07082573143',
                        Network: 'Airtel',
                        "Bal.B4": '₦1,336',
                        'Bal.A': '₦846',
                        Amount: '₦490',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307004548ref0',
                        Time: '06-03-2024 3:45:48pm',
                        Receiver: '07051605267',
                        Network: 'GLO',
                        "Bal.B4": '₦623',
                        'Bal.A': '₦35',
                        Amount: '₦588',
                        Status: 'app'
                    },
                    {
                        TransactionID: '20240307002607ref0',
                        Time: '06-03-2024 3:26:7pm',
                        Receiver: '09050268289',
                        Network: 'GLO',
                        "Bal.B4": '₦424.06',
                        'Bal.A': '₦326.06',
                        Amount: '₦98',
                        Status: 'app'
                    }
                ],
                'Airtime 2 cash': [{
                        TransactionID: '2024030602337ref',
                        Time: '05-03-2024 2:38:57pm',
                        Sender: '07034563210',
                        Receiver: '08069482612',
                        "Bal.B4": '₦0',
                        'Bal.A': '₦1,600',
                        Amount: '₦2,000',
                        Status: 'Settled'
                    },
                    {
                        TransactionID: '20240306002017ref',
                        Time: '05-03-2024 3:20:17pm',
                        Sender: '07034563210',
                        Receiver: '08069482612',
                        "Bal.B4": '₦0',
                        'Bal.A': '₦0',
                        Amount: '₦2,000',
                        Status: 'Under Review'
                    },
                    {
                        TransactionID: '20240306001935ref',
                        Time: '05-03-2024 3:19:35pm',
                        Sender: '07034563210',
                        Receiver: '08069482612',
                        "Bal.B4": '₦0',
                        'Bal.A': '₦0',
                        Amount: '₦2,000',
                        Status: 'Under Review'
                    },
                    {
                        TransactionID: '20240304155937ref',
                        Time: '04-03-2024 6:59:37am',
                        Sender: '07034563210',
                        Receiver: '08108082141',
                        "Bal.B4": '₦96',
                        'Bal.A': '₦96',
                        Amount: '₦2,500',
                        Status: 'Under Review'
                    },
                    {
                        TransactionID: '20240304155925ref',
                        Time: '04-03-2024 6:59:25am',
                        Sender: '07034563210',
                        Receiver: '08108082141',
                        "Bal.B4": '₦96',
                        'Bal.A': '₦96',
                        Amount: '₦2,500',
                        Status: 'Under Review'
                    },
                    {
                        TransactionID: '20240304081444ref',
                        Time: '03-03-2024 11:14:44pm',
                        Sender: '07034563210',
                        Receiver: '09168135058',
                        "Bal.B4": '₦0',
                        'Bal.A': '₦0',
                        Amount: '₦500',
                        Status: 'Under Review'
                    }
                ],
                'cable & Tv': [{
                        TransactionID: '20240305175814ref1',
                        Time: '05-03-2024 8:58:17am',
                        Receiver: '02764528699',
                        DISCO: 'StarTimes Subscription',
                        "Bal.B4": '₦4,192',
                        'Bal.A': '₦3,162',
                        Amount: '₦1,030',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240305095010ref1',
                        Time: '05-03-2024 12:50:26am',
                        Receiver: '8061002458',
                        DISCO: 'DSTV Subscription',
                        "Bal.B4": '₦5,278.22',
                        'Bal.A': '₦2,298.22',
                        Amount: '₦2,980',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240304193716ref1',
                        Time: '04-03-2024 10:37:19am',
                        Receiver: '018320487160',
                        DISCO: 'StarTimes Subscription',
                        "Bal.B4": '₦3,662',
                        'Bal.A': '₦662',
                        Amount: '₦3,000',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240304155906ref5',
                        Time: '04-03-2024 6:59:40am',
                        Receiver: '8071309044',
                        DISCO: 'GoTv',
                        "Bal.B4": '₦90,842.63',
                        'Bal.A': '₦88,112.63',
                        Amount: '₦2,730',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240303212935ref0',
                        Time: '03-03-2024 12:29:48pm',
                        Receiver: '8212277764',
                        DISCO: 'DSTV Subscription',
                        "Bal.B4": '₦94,621.63',
                        'Bal.A': '₦91,641.63',
                        Amount: '₦2,980',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240303183014ref0',
                        Time: '03-03-2024 9:30:20am',
                        Receiver: '02724975879',
                        DISCO: 'StarTimes Subscription',
                        "Bal.B4": '₦5,289.8',
                        'Bal.A': '₦1,489.8',
                        Amount: '₦3,800',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240303180141ref2',
                        Time: '03-03-2024 9:1:57am',
                        Receiver: '8216550156',
                        DISCO: 'GoTv',
                        "Bal.B4": '₦3,338',
                        'Bal.A': '₦638',
                        Amount: '₦2,700',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240302204511ref1',
                        Time: '02-03-2024 11:45:23am',
                        Receiver: '8072164605',
                        DISCO: 'GoTv',
                        "Bal.B4": '₦8,978',
                        'Bal.A': '₦4,998',
                        Amount: '₦3,980',
                        Sources: 'app',
                        Status: 'Completed'
                    },
                    {
                        TransactionID: '20240302155709ref7',
                        Time: '02-03-2024 6:57:11am',
                        Receiver: '01831682289',
                        DISCO: 'StarTimes Subscription',
                        "Bal.B4": '₦5,561',
                        'Bal.A': '₦2,531',
                        Amount: '₦3,030',
                        Sources: 'app',
                        Status: 'Completed'
                    }
                ]
            };

            const tableHead = document.getElementById('tableHead');
            const tableBody = document.getElementById('tableBody');
            const transactionsTitle = document.querySelector('h1 span');

            tableHead.innerHTML = '';
            tableBody.innerHTML = '';

            let dataToShow = action === 'static' ? staticTransactions : dynamicData[action];
            let headerRow = tableHead.insertRow();

            headers[action].forEach(headerText => {
                let headerCell = document.createElement("th");
                headerCell.textContent = headerText;
                headerRow.appendChild(headerCell);
            });

            dataToShow.forEach(record => {
                let row = tableBody.insertRow();
                headers[action].forEach(header => {
                    let cell = row.insertCell();
                    cell.textContent = record[header];
                });
            });

            transactionsTitle.textContent = action === 'static' ? 'Transactions' : `${action} Transaction`;
        }

        document.addEventListener('DOMContentLoaded', function() {
            updateTable('static');
        });
    </script>
@endsection
