@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-4">
            <img src="{{asset('images/logo.png')}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form>
                <div class=" col-lg-4 col-lg-offset-10">
                    <div class=" input-group">
                        <span class="input-group-btn">
                            <a href="{{route('contracts.create')}}" class="btn btn-success" type="submit">New contract</a>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ">
            <h4>Quick search</h4>
            <div class="col-lg-12">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Assureur</th>
                <th>Date</th>
                <th>Assuré</th>
                <th>Type</th>
                
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>Rhona Davidson</td>
                <td>22/04/2018</td>
                <td>Tokyo</td>
                <td>55</td>
                
            </tr>
           
        
            <tr>
                <td>Hermione Butler</td>
                <td>22/04/2018</td>
                <td>London</td>
                <td>47</td>
                
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Assureur</th>
                <th>Date</th>
                <th>Assuré</th>
                <th>Type</th>
                
            </tr>
        </tfoot>
    </table>
           </div>
        </div>
    </div>
</div>


@endsection
