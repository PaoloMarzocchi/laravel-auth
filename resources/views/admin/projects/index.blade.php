@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
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
                                <td>View/Edit/Delete</td>
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
