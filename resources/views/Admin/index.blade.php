@extends('Admin.master')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            
            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                    
                    
                    <script type="text/javascript">
                    @if(Session::has('message'))
                    
               //     swal("Creation Compte ", "Well done, you pressed a button", "success")
                             swal("Good job!", "You clicked the button!", "success")

                                                                      @endif
                    </script>
                    
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm"  title="add"><a href="{{url('/admin/create')}}"><i class="glyphicon glyphicon-plus"></i></a></button>
                        </div><!-- /. tools -->
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom de User</th>
                                        <th>Prenom</th>
                                        <th>mail(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>Internet
                                        Explorer 4.0</td>
                                        <td>{{$user->email}}</td>
                                        <td> 4</td>
                                        <td>X</td>
                                        <td><span style="margin-left:8px;"><a href="" style="color: #c00;margin-left:8px;"><i class="glyphicon glyphicon-remove"></i></a></span><span style="margin-left:8px;"><a href="" style="color: #3B5998;margin-left:8px;"><i class="glyphicon glyphicon-eye-open"></i></a></span><span style="margin-left:8px;"><a href="" style="color: #EFA740;margin-left:8px;"><i class="glyphicon glyphicon-pencil"></i></a></span></td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot>
                            </table>
                            </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                    </section><!-- /.content -->
                    @endsection