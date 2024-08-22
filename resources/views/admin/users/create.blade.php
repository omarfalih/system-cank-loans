<div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Basic Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="row g-3" action="{{ route('post.offer') }}" method="POST">
                @csrf
                <input type="hidden" id="id" name="id" />
                <div class="modal-body">
                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-12">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="col-12">
                        <label for="salary_min" class="form-label">Salary Min</label>
                        <input type="text" class="form-control" id="salary_min" name="salary_min">
                    </div>

                    <div class="col-12">
                        <label for="salary_max" class="form-label">Salary Max</label>
                        <input type="text" class="form-control" id="salary_max" name="salary_max">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
