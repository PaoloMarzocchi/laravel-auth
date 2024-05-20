@extends('layouts.admin')

@section('content')
    <section class="py-5 bg-dark text-light">
        <div class="container">
            <h2>Create a new project</h2>
            <div class="d-flex justify-content-end pb-2">
                <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}">Go Back</a>
            </div>
            <form action="{{ route('admin.projects.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                        placeholder="Project title here" />
                    <small id="titleHelper" class="form-text text-secondary">Insert the project title</small>
                </div>

                <div class="mb-3">
                    <label for="preview" class="form-label">Preview URL</label>
                    <input type="text" class="form-control" name="preview" id="preview"
                        aria-describedby="previewHelper" placeholder="URL project preview here" />
                    <small id="previewHelper" class="form-text text-secondary">Insert URL of the project preview</small>
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start date</label>
                    <input type="text" class="form-control" name="start_date" id="start_date"
                        aria-describedby="start_dateHelper" placeholder="Project start date here" />
                    <small id="start_dateHelper" class="form-text text-secondary">Insert the project start date</small>
                </div>

                <div class="mb-3">
                    <label for="end_date" class="form-label">End date</label>
                    <input type="text" class="form-control" name="end_date" id="end_date"
                        aria-describedby="end_dateHelper" placeholder="Project end_date here" />
                    <small id="end_dateHelper" class="form-text text-secondary">Insert the project end date</small>
                </div>

                <div class="mb-3">
                    <label for="repo_url" class="form-label">Repository URL</label>
                    <input type="text" class="form-control" name="repo_url" id="repo_url"
                        aria-describedby="repo_urlHelper" placeholder="URL project repository here" />
                    <small id="repo_urlHelper" class="form-text text-secondary">Insert URL of the project repository</small>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                        aria-describedby="descriptionHelper" placeholder="Project description here"></textarea>
                    <small id="descriptionHelper" class="form-text text-secondary">Insert the project description</small>
                </div>

                <button class="btn btn-success" type="submit">Add project</button>

            </form>
        </div>
    </section>
@endsection
