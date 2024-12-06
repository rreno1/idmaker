<div class="modal fade" id="student" tabindex="-1" aria-labelledby="studentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studentLabel">Create ID</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="student-id" class="col-form-label">Enter Student ID:</label>
                        <input type="text" class="form-control" id="student-id">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#student2">Submit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="student2" tabindex="-1" aria-labelledby="student2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="student2Label">Create ID</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row modal-body flex-row">
                <img src="{{URL::asset('/images/sample.jpg')}}" class="col-md-6" alt="sample">
                <img src="{{URL::asset('/images/sample2.jpg')}}" class="col-md-6" alt="sample">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create ID</button>
            </div>
        </div>
    </div>
</div>
