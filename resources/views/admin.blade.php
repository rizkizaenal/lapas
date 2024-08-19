<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  {{-- <div class="bg-white container-sm col-100 border my-3 rounded px-3 py-3 pb-9"> --}}
    <h1></h1>
    <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
    {{-- <div class="card mt-3"> --}}
      {{-- <ul class="list-group list-group-flush"> --}}























        @if (Auth::user()->role == 'superadmin')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            display: flexbox;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .sidebar {
            width: 200px;
            background-color: #ccc;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }
        .sidebar img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px; /* Add some space below the logo */
        }
        .sidebar a {
            display: flexbox;
            padding: 10px;
            margin: 20px 0;
            background-color: white;
            text-align: center;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            width: 100%;
        }
        .sidebar a:hover {
            background-color: #ddd;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #eee;
            border-radius: 5px;
        }
        .search-bar input[type="text"] {
            padding: 5px;
            border-radius: 20px;
            border: 1px solid #ddd;
            width: 200px;
        }
        .calendar, .agenda {
            margin: 20px 0;
        }
        .calendar {
            text-align: center;
        }
        .calendar table {
            margin: 50 auto;
            border-collapse: collapse;
        }
        .calendar th, .calendar td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .calendar th {
            background-color: #f0f0f0;
        }
        .agenda {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .agenda-item {
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            margin: 50 auto;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <a href="#">Agenda</a>
        <a href="#">Dashboard 2</a>
        <a href="#">Akun</a>
    </div>
    <div class="main-content">
        <div class="top-bar">
            <span class="menu-icon">☰</span>
            <div class="search-bar">
                <input type="text" placeholder="Hinted search text">
            </div>
        </div>

        <div class="calendar">
            <p>January</p>
            <table>
                <tr>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>

        <div class="agenda">
            <h2>Agenda</h2>
            <div class="agenda-item">Agenda item 1</div>
            <div class="agenda-item">Agenda item 2</div>
            <div class="agenda-item">Agenda item 3</div>
            <div class="agenda-item">Agenda item 4</div>
        </div>
    </div>
</body>
</html>
























        @endif
        @if (Auth::user()->role == 'admin')
        <h1>Admin</h1>
        @endif




































































        
        @if (Auth::user()->role == 'user')
        <h1>User</h1>
        @endif
        
        
      </ul>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

<footer>
    <p>
        <!--awal FOOTER-->
        <div class="col-md-12">
            <div class="row" style="background:rgba(63, 67, 102, 0.562)">
                <div class="col-md-9">
                    <h3>Visi</h3>
                    <p>Mengambangkan Budaya Membaca
    
                    <p>
                    <h3>Misi</h3>
                    <ul>
                        <li>Siap Melayani Anggota</li>
                        <li>Menciptakan Suasana Baca Yang Nyaman</li>
                    </ul>                     
                </div>
                <div class="col-md-3">
                    Copyright &copy; 2017. All right reserve
                    <p>
                    Developed by The Letter</div>
            </div>
        </div>
        <!--akhir FOOTER-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>

</html>