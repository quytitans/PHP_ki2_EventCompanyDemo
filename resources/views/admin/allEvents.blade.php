@extends('admin.layout.master-layout')

@section('title')
    <title>Table</title>
@endsection

@section('breadcrumb')
    <header class="page-header">
        <h2>Table Create</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Table Create</span></li>
            </ol>

            <div class="sidebar-right-toggle"></div>
        </div>
    </header>
@endsection

@section('content')
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <form action="#" method="get" name='searchForm'>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="form-group">
                                <label>Search</label>
                                <select id="company" class="form-control" name="category" required="">
                                    <option value="0" selected disabled>--All--</option>
                                    <option> SomeThing</option>
                                </select>
                                <label class="error" for="company"></label>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-2">
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <label>Search</label>
                            <div class="input-group input-search">
                                <input type="text" class="form-control" name="keyword" placeholder="Search...">
                                <span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-sm-12 col-md-6">

                </div>

                <div class="col-sm-12 col-md-6">

                </div>
                <!--                <hr class="separator">-->

            </header>
            <div class="panel-body" style="display: block;">
                <div class="table-responsive">
                    <table class="table mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Band Names</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Portfolio</th>
                            <th>Ticket Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->eventName}}</td>
                                <td>{{$item->bandNames}}</td>
                                <td>{{$item->startDate}}</td>
                                <td>{{$item->endDate}}</td>
                                <td>
                                    {{$item->portfolio}}
                                </td>
                                <td>{{$item->ticketPrice}}</td>
                                <td>
                                    @if($item->status ==1)
                                        Dang dien ra
                                    @endif
                                    @if($item->status ==2)
                                        Da dien ra
                                    @endif
                                    @if($item->status ==3)
                                        Tam hoan
                                    @endif
                                </td>
                                <td>
                                    <a href="/events/edit?id={{$item->id}}"><i class="fa fa-pencil"></i></a>
                                    <a href="/events/delete?id={{$item->id}}" class="on-default "><i
                                            class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row datatables-footer dataTables_paginate paging_bs_normal">
                   {!! $items->links() !!}
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        document.forms['searchForm']['category'].onchange = function () {
            document.forms['searchForm'].submit();
        };
    </script>
@endsection
