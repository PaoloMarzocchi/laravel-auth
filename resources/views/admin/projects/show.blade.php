@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-end pb-2">
                <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}">Go Back</a>
            </div>
            <div class="row py-3">
                <div class="col-6">
                    <img class="mw-100" src="{{ $project->preview }}" alt="{{ $project->title }}">
                </div>
                <div class="col-6">
                    <h2>{{ $project->title }}</h2>
                    <ul class="list-unstyled d-flex flex-column gap-3 pt-2">
                        <li>
                            <strong>Description: </strong>
                            <p>{{ $project->description }}</p>
                        </li>
                        <li>
                            <strong>Repository link: </strong>
                            <a href="{{ $project->repo_link }}">Go to project repository</a>
                        </li>
                        <li>
                            <strong>Start Date: </strong>
                            {{ $project->start_date }}
                        </li>
                        <li>
                            <strong>End Date: </strong>
                            {{ $project->end_date }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
