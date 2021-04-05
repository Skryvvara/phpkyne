@extends('base')

@section('title', 'Darkyne | Work')

@section('content')
    <section class="main-section">
        <div class="container">
            <h1 class="section-title">Projects</h1>
            @include('components/warning', ['title' => 'Caution!', 'message' => 'Not all projects are listed here and will be added soon.'])
            <div class="project-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <div class="project-header">
                    <h2>{{$project->projectName}}</h2>
                    <span class="tag tag-{{$project->projectTag}}">{{strtoupper($project->projectTag)}}</span>
                </div>
                <div class="project-body">
                    <p>{{$project->projectDesc}}</p>
                </div>
                <div class="project-footer">
                    <a href="{{$project->projectUrl}}" class="app-button">Source<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M13 3L16.293 6.293 9.293 13.293 10.707 14.707 17.707 7.707 21 11 21 3z"/><path d="M19,19H5V5h7l-2-2H5C3.897,3,3,3.897,3,5v14c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2v-5l-2-2V19z"/></svg></a>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
