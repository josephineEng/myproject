<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>
        CMARS General Hopsitals
    </title>
    
    <link href="{{asset('css/main design.css')}}" rel="stylesheet"/>
    <style>
        a.link {
            font-weight: bold;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
            background-color: lightgray;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h1>COVID-19 CASE MANAGEMENT AND REPORTING TOOL FOR UGANDA</h1>

    <nav>
    <a href="/signout">
 <input type=button value="LOGOUT"><br>
                    </a><br>
        <strong class="indent">MENU</strong><br>
        <a href="/dashboard">
            Dashboard
        </a><br><br>

        <a href="/health_officer-list">
            Health officers
        </a><br><br>

        <a href="/patients">
            Patients
        </a><br><br>

        <a href="/Hospitals">
            Hospitals
        </a><br><br>

        <a href="/payments">
            Payments
        </a><br><br>

        <a href="/funds-list">
            Treasury
        </a><br><br>
    </nav>

    <h2>General hospitals</h2>

    <div class="main">
        <div>
            <a href="/Hospitals" class="link">All</a>
            <a href="/general hospitals" class="link" style="color: black; font-weight: bold; background-color: white;">General</a>
            <a href="/regional referral hospitals" class="link">Regional</a>
            <a href="/national referral hospitals" class="link">National</a>
        </div>
        <br>
        <table>
            <tr>
                <th>Hospital name</th>
                <th>Location</th>
                <th>Number of health workers</th>
                <th>Number of patients</th>
                <th>Contact</th>
                <th>Head</th>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>