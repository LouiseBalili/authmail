@extends('base')

@section('content')
@include('components.navbar')

<div class="content">
    <div class="container w-2xl my-3">
        <h1>Items</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Qantity</th>
                    <th scope="col">Date Received</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
    </div>
</div>
@endsection
