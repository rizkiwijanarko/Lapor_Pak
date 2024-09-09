@extends('admin.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="p-10">
        <h1 class="text-gray-700 text-3xl font-semibold">Kategori</h1>
        <p class="mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dolorem repellat ?
            Deleniti, assumenda.</p>

        <div id="wrapper"></div>

        <button onclick="getLocation()">Get My Location</button>

        <p id="location">Coordinates will appear here</p>
    </div>

    {{-- <div>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
            </tbody>
        </table>
    </div> --}}



@endsection

@section('scripts')
    <script>
        // Your JavaScript code here
        console.log('This is a separate script section.');

        // new DataTable('#example');
        new gridjs.Grid({
            columns: ["Name", "Email", "Phone Number"],
            data: [
                ["John", "john@example.com", "(353) 01 222 3333"],
                ["Mark", "mark@gmail.com", "(01) 22 888 4444"],
                ["Eoin", "eoin@gmail.com", "0097 22 654 00033"],
                ["Sarah", "sarahcdd@gmail.com", "+322 876 1233"],
                ["Afshin", "afshin@mail.com", "(353) 22 87 8356"]
            ],
            className: {
                table: 'text-sm'
            }
        }).render(document.getElementById("wrapper"));
    </script>
@endsection
