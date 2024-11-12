<div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="educationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="educationModalLabel">Education</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="educationForm" action="{{ route('educations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="degree_title"><b>Degree Title</b></label>
                                <input type="text" class="form-control" id="degree_title" name="degree_title">
                            </div>
                            <div class="form-group">
                                <label for="institute"><b>Institute</b></label>
                                <input type="text" class="form-control" id="institute" name="institute">
                            </div>
                            <div class="form-group">
                                <label for="city"><b>City</b></label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="year_completion"><b>Year of Completion</b></label>
                                <input type="number" class="form-control" id="year_completion" name="year_completion">
                            </div>
                            <div class="form-group">
                                <label for="cgpa_percentage"><b>CGPA/Percentage</b></label>
                                <div class="input-group">
                                    <input type="number" step="0.01" class="form-control" id="cgpa_percentage" name="cgpa_percentage">
                                    <div class="input-group-append">
                                        <select class="form-control" id="is_percentage" name="is_percentage">
                                            <option value="0">CGPA</option>
                                            <option value="1">Percentage</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('educationModal').addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;

    var id = button.getAttribute('data-id');
    var degreeTitle = button.getAttribute('data-degree-title');
    var yearCompletion = button.getAttribute('data-year-completion');
    var institute = button.getAttribute('data-institute');
    var city = button.getAttribute('data-city');
    var cgpaPercentage = button.getAttribute('data-cgpa-percentage');
    var isPercentage = button.getAttribute('data-is-percentage');

    var modal = this;
    modal.querySelector('.modal-title').textContent = id ? 'Edit Education' : 'Add Education';
    modal.querySelector('input[name="id"]').value = id || '';
    modal.querySelector('input[name="degree_title"]').value = degreeTitle || '';
    modal.querySelector('input[name="year_completion"]').value = yearCompletion || '';
    modal.querySelector('input[name="institute"]').value = institute || '';
    modal.querySelector('input[name="city"]').value = city || '';
    modal.querySelector('input[name="cgpa_percentage"]').value = cgpaPercentage || '';
    modal.querySelector('select[name="is_percentage"]').value = isPercentage || '0';

    // Change the form action and method based on whether we're editing or creating a new record
    var form = modal.querySelector('#educationForm');
    if (id) {
        form.action = `{{ url('/educations/update') }}/${id}`;
        form.method = 'POST';
        form.insertAdjacentHTML('beforeend', '<input type="hidden" name="_method" value="PUT">');
    } else {
        form.action = `{{ route('educations.store') }}`;
        form.method = 'POST';
        let methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) methodInput.remove();
    }
});
</script>