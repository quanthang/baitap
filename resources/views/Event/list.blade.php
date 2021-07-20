@extends('layout.master-layout')
@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="breadcome-heading">
                                    <form id="form-filter">
                                        <div class="col-md-3 form-group">
                                            <input type="text" placeholder="Search..." class="search-int form-control" id="search" name="search">
                                        </div>
                                        <div class="form-group col-md-9">
                                            <select class="form-control" id="status" name="status">
                                                <option value="" selected>All Status</option>
                                                @foreach(\App\Enums\EventStatus::getValues() as $type)
                                                    <option value="{{$type}}" {{$type == $status ? 'selected' : ''}}>{{\App\Enums\EventStatus::getDescription($type)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>

                                </div>


                                {{--                     data-search="true",data-pagination="true",data-show-pagination-switch="true",data-show-refresh="true", data-show-toggle="true",data-show-export="true",data-show-columns="true" --}}
                                <table id="table" data-toggle="table" data-key-events="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Event Name</th>
                                        <th>Band Names</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Port Folio</th>
                                        <th>Ticket Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $event)
                                        <tr>
                                            <td>{{$event->id}}</td>
                                            <td>{{$event->eventName}}</td>
                                            <td>{{$event->bandNames}}</td>
                                            <td>{{$event->startDate}}</td>
                                            <td>{{$event->endDate}}</td>
                                            <td>{{$event->portfolio}}</td>
                                            <td>${{$event->ticketPrice}}</td>
                                            <td>{{\App\Enums\EventStatus::getDescription($event->status)}}</td>
                                            <td>
                                                <a href="/admin/events/edit/{{$event->id}}"><button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a>
                                                <a href="/admin/events/delete/{{$event->id}}"><button class="btn btn-danger" onclick="return confirm('Are you sure delete event ?')"><i class="fas fa-trash"></i> Delete</button></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @include('paginate.template',['list' => $list])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const form = document.getElementById('form-filter');
        const search = document.getElementById('search');
        const status = document.getElementById('status');
        search.onkeypress = function (event){
            if(event.key == 'Enter'){
                form.submit();
            }
        }
        if(status){
            status.onchange = function (){
                form.submit();
            }
        }
    </script>
@endsection
