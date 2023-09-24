
@props([
    "task"
])
    <div class="col-sm-6 my-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$task->title}}</h5>
                <p class="card-text">{{$task->desc}}</p>
                <a href="pages.edittask" class="btn btn-primary"><i class="lni lni-pencil"></i> Edit</a>
                <button type="button" class="btn btn-primary" id="toggleButton" data-toggle="button" aria-pressed="false" autocomplete="off">
                Mark As Complete
                </button>
                <div class="btn btn-danger float-right"><i class="lni lni-trash-can"></i></div>
            </div>
        </div>
    </div>   

