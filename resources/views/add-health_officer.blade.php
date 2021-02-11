<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>
        CMARS Health Officer Registration
    </title>
    
    <link href="{{asset('css/main design.css')}}" rel="stylesheet"/>
    
</head>
<body>
<h1>COVID-19 CASE MANAGEMENT AND REPORTING TOOL FOR UGANDA</h1>
    <nav>
        <strong class="indent">MENU</strong><br>
        <a href="/dashboard">
            Dashboard
        </a><br><br>

        <a href="/health_officer-list">
            Health officers
        </a><br>

        <a href="/add-health_officer" class="indent" style="display: inline-block; position: relative; left: -20px; width: 145px; padding-left: 35px; color: black; font-weight: bold; background-color: white;">
            Register
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
    <h2>Register health officers</h2>

<div class="main">
@if(Session::has('health_officer_add'))
<span> {{Session::get('health_officer_add')}}</span>
@endif
    <form method="post" action="{{route('save.health_officer')}}">
    @csrf
    NIN    :<br><input type="text"name="NIN"value=""><br>
    Name   :<br><input type="text"name="Name"value=""><br>
    Gender :<br><input type="text"name="Gender"value=""><br>
    <input type="submit"value="ADD">
    </form>
    </div>
</body>
</html>