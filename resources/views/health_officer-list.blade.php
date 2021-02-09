<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALTH OFFICERS</title>
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
    <div class="main">

<table>
<a style ="float:right" href="{{route('health_officer.add')}}">ADD HEALTH_OFFICER</a>
        <thead>
                <tr>
                   <th>id</th>
                    <th>NIN</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Hospital</th>
                    <th>Position</th>
                    <th>No. of patients treated</th>
                    <th>Action</th>
                </tr>
            </thead>
        
            @foreach($health_officers as $health_officer)
            <tr>
              <td>{{$health_officer ->id}}
                 </td>
              <td>{{$health_officer ->NIN}}
                 </td>
              <td>{{$health_officer ->Name}}
                 </td>
               <td>{{$health_officer ->Gender}}
                   </td>
                   <td> </td>
                   <td></td>
                   <td></td>
                    <td>
                    <a href ="/edit-health_officer/{{$health_officer->id}}">Edit</a>
                    <a href ="/delete-health_officer/{{$health_officer->id}}" >Delete</a>
                   </td>
                </tr>
            @endforeach
            </table>
            </div>
            </body>
</html>