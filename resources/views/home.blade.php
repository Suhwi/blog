@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Codility Example with PHP</div>

                <div class="panel-body">
                    <ul>
                        <li><a href="codility/binarygap/5123">Binary Gap</a></li>
                        <li><a href="codility/binarygap2/5123">Binary Gap v2</a></li>
                        <li><a href="codility/cyclicrotation">Cyclic Rotation</a></li>
                        <li><a href="codility/oddoccurrencesinarray">Odd Occurences in array</a></li>
                        <li><a href="codility/tapeequilibrium">Tape Equilibrium</a></li>
                        <li><a href="codility/forjump">For Jump</a></li>
                        <li><a href="codility/permmissingelem">Permmissing Elements</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
