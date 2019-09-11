@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-8">
               <h3>New Project</h3>
               
               <form method="post" action="{{ route('project.store') }}">
                   <div class="form-group">
                       <label>Project name</label>
                       <input class="form-control" name="project_name" placeholder="Project name" >
                   </div>
                   <div class="form-group">
                       <label>Project description</label>
                       <textarea class="form-control" name="project_description" placeholder="Project description" ></textarea>
                   </div>
                   <button class="btn btn-info">Create</button>
                   @csrf
               </form>
           </div>
        </div>
    </div>
</div>
@endsection
