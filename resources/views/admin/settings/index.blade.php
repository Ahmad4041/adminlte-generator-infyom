@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('admin.settings.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card col-sm-6">
            <div class="card-body p-0">
                @include('admin.settings.models.pumps.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $settings])
                    </div>
                </div>
            </div>

        </div>
    </div>
       <div class="content px-3">
        <div class="clearfix"></div>
         <div class="card col-sm-6">
            <div class="card-body p-0">
                @include('admin.settings.models.grades.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $settings])
                    </div>
                </div>
            </div>

        </div>
       </div>

       <div class="content px-3">
        <div class="clearfix"></div>
         <div class="card col-sm-6">
            <div class="card-body p-0">
                @include('admin.settings.models.fuelcards.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $settings])
                    </div>
                </div>
            </div>

        </div>
       </div>

       <div class="content px-3">
        <div class="clearfix"></div>
         <div class="card col-sm-6">
            <div class="card-body p-0">
                @include('admin.settings.models.sales.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $settings])
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

