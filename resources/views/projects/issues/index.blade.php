@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="fa fa-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="fa fa-cubes"></i> {{ trans('dashboard.projects.projects') }}
    </span>
    &gt; <small>{{ $project->name }}</small>&gt; <small>{{ trans('dashboard.issues.issues') }}</small>
</div>

<div class="content-wrapper">

    @include('projects.partials.sub-navbar')
    <div class="row">
        <div class="col-sm-12">
         <a href="issues/new" class="btn btn-success pull-right"><i class="fa fa-plus"></i> {{ trans('dashboard.issues.add.title') }}</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <div class="striped-list">
                @foreach($issues as $issue)
                <div class="row striped-list-item">
                    <div class="col-xs-6">
                        <i class="{{ $issue->icon }}"></i> <strong>{{ $issue->title }}</strong>
                        <p><small>#{{ $issue->id }}</small></p>
                    </div>
                    <div class="col-xs-6 text-right">
                        updated 3 minutes ago
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop