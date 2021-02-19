<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNDS</title>
    <link href="{{asset('css/main design.css')}}" rel="stylesheet"/>
</head>
<body>
<h1>COVID-19 CASE MANAGEMENT AND REPORTING TOOL FOR UGANDA</h1>

<nav> 
    <strong class="indent">MENU</strong><br>
    <a href="/signout">
 <input type=button value="LOGOUT"><br>
                    </a><br>
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

    <a href="/funds-list" style="display: inline-block; position: relative; left: -20px; width: 160px; padding-left: 20px; color: black; font-weight: bold; background-color: white;">
        Treasury
    </a><br>
    <a href="/add-funds" class="indent">
        FUNDS
    </a><br><br>


    <a href="/donations graph" class="indent">
        Donations graph
    </a><br>
    
</nav>

<h2>Treasury</h2>

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

<table>
<thead>
            <tr>
                <th>id</th>
                <th>Well-wisher</th>
                <th>Donation</th>
                <th>Action</th>
            </tr>
</thead>
        
            @foreach($funds as $fund)
            <tr>
              <td>{{$fund ->id}}
                 </td>
              <td>{{$fund ->fund_source}}
                 </td>
              <td>{{$fund ->Amount}}
                 </td>
                 <td>
                    <a href ="/edit-funds/{{$fund->id}}">Edit</a><br>
                    <a href ="/delete-funds/{{$fund ->id}}">Delete</a>
                   </td>
                </tr>
            @endforeach
</table>
<br>
<a style="background-color:grey" href="{{route('fund.add')}}">ADD FUNDS</a>
<br><br>
        Total amount in treasury:
        {{ $funds->sum('Amount') }}
        <br><br>
       
    </div>
    
</body>
</html>