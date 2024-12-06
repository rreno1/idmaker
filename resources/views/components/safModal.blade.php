<div class="modal fade" id="staffAndFaculty" tabindex="-1" aria-labelledby="staffAndFacultyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staffAndFacultyLabel">Create ID</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="faculty-id" class="col-form-label">Enter Faculty ID:</label>
                        <input type="text" class="form-control" id="faculty-id">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staffAndFaculty2">Submit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staffAndFaculty2" tabindex="-1" aria-labelledby="staffAndFaculty2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staffAndFaculty2Label">Create ID</h1>
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
