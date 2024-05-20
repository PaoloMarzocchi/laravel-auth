@extends('layouts.admin')

@section('content')
    <section class="py-3">
        <div class="container">
            <h2 class="py-2 text-center">My projects</h2>
            <div class="d-flex justify-content-end pb-2">
                <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Add new Project</a>
            </div>
            <div class="table-responsive">
                <table class="table table-light table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Preview</th>
                            <th scope="col">Title</th>
                            <th scope="col">Repository link</th>
                            <th scope="col">Start date</th>
                            <th scope="col">End date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse($projects as $project)
                            <tr class="">
                                <td scope="row">
                                    <img width="200" src="{{ $project->preview }}" alt="{{ $project->title }}">
                                </td>
                                <td>{{ $project->title }}</td>
                                <td>
                                    <a href="{{ $project->repo_url }}">{{ $project->repo_url }}</a>
                                </td>
                                <td width='100'>{{ $project->start_date }}</td>
                                <td width='100'>{{ $project->end_date }}</td>
                                <td>
                                    <a class="btn btn-dark" href="{{ route('admin.projects.show', $project) }}">
                                        <i class="fa-solid fa-eye fa-xs fa-fw" style="color: #ffffff;"></i>
                                    </a>
                                    <a class="btn btn-secondary" href="{{ route('admin.projects.edit', $project) }}">
                                        <i class="fa-solid fa-pen-to-square fa-xs fa-fw" style="color: #ffffff;"></i>
                                    </a>/Delete
                                </td>
                            </tr>
                        @empty
                            <tr class="">
                                <td scope="row" colspan="6">Nothing Found</td>
                            </tr>
                        @endforelse



                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
