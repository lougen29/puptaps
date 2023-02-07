<div class="col-10 col-sm-9 col-md-9 col-lg-6 col-xl-6">
    <form>
    @csrf
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Category..." name="query" value="{{ $query }}">
            <button  type="submit" name="query" value="" class="btn btn-secondary fs-7">
                <i class="fa-solid fa-rotate-left"></i>
                <span class="d-none d-sm-none d-md-none d-lg-inline d-xl-inline"></span>
            </button>
            <button class="btn btn-primary fs-7" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span class="d-none d-sm-none d-md-none d-lg-inline d-xl-inline"></span>
            </button>
        </div>
    </form>
</div>
<div class="col-1 col-sm-3 col-md-3 col-lg-6 col-xl-6">
    <div class="dropdown text-end">
        {{-- <button class="btn btn-primary dropdown fs-7" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-plus d-inline d-sm-inline d-md-inline d-lg-none d-xl-none"></i>
            <span class="d-none d-sm-none d-md-none d-lg-inline d-xl-inline">Post a Job</span>
        </button> --}}
        <div class="btn-group" role="group">
            <button class="btn btn-primary dropdown fs-7" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-plus d-inline d-sm-inline d-md-inline d-lg-none d-xl-none"></i>
                <span class="d-none d-sm-none d-md-none d-lg-inline d-xl-inline">Post a Job</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-md-end fs-7">
                <li>
                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCareerImage">Add as Image</button>
                </li>
                <li>
                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCareerText">Add as Text</button>
                </li>
            </ul>
            <button type="button" class="btn btn-secondary px-2 fs-7"><i class="fa-solid fa-circle-question"></i></button>
        </div>
        <livewire:career.add-career-image />
        <livewire:career.add-career-text />
    </div>
</div>
