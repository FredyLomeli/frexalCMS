@extends('layouts.front')
@section('title', "Single - ")
@section('content')

<!-- Single Page Start -->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title"> Titulo {{$post->title}}</h2>
                <h3>Decripcion corta</h3>
                <p>
                    {{$post->brief}}
                </p>
                <ul class="list-group">
                    <li class="list-group-item">First list item</li>
                    <li class="list-group-item">Second list item</li>
                    <li class="list-group-item">Third list item</li>
                </ul>
                <h3>Contenido</h3>
                {!!$post->content!!}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Table Head</th>
                            <th>Table Head</th>
                            <th>Table Head</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Table Cell</td>
                            <td>Table Cell</td>
                            <td>Table Cell</td>
                        </tr>
                        <tr>
                            <td>Table Cell</td>
                            <td>Table Cell</td>
                            <td>Table Cell</td>
                        </tr>
                        <tr>
                            <td>Table Cell</td>
                            <td>Table Cell</td>
                            <td>Table Cell</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Single Page End -->

@endsection
