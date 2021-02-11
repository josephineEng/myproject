<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>
        CCMRTU Payments Per Health Officer
    </title>
    
    <link href="{{asset('css/main design.css')}}" rel="stylesheet"/>
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
        </a><br>

        <a href="/per health officer" class="indent" style="display: inline-block; position: relative; left: -20px; width: 145px; padding-left: 35px; color: black; font-weight: bold; background-color: white;">
            Per health officer
        </a><br><br>

        <a href="/funds-list">
            Treasury
        </a><br><br>
        <a href="/hierachy">
            hierarchy
        </a><br><br>
    </nav>

    <h2>Payments per health officer</h2>

    <div class="main">

        Month:
        <select name="month">
            <option value="Jan">January</option>
            <option value="Feb">February</option>
            <option value="Mar">March</option>
            <option value="Apr">April</option>
            <option value="May">May</option>
            <option value="Jun">June</option>
            <option value="Jul">July</option>
            <option value="Aug">August</option>
            <option value="Sept">September</option>
            <option value="Oct">October</option>
            <option value="Nov">November</option>
            <option value="Dec">December</option>
        </select>
        <br><br>
        
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Hospital</th>
                    <th>Position</th>
                    <th>Allowance</th>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>