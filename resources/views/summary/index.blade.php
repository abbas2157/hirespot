<div class="modal fade" id="summaryModal" tabindex="-1" aria-labelledby="summaryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="summaryModalLabel"><b>Add Summary</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="summaryForm" 
                  action="{{ isset($summary) ? route('summary.update', $summary->id) : route('summary.store') }}" 
                  method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($summary))
                    @method('PUT')
                @endif
                <input type="hidden" name="id" value="{{ $summary->id ?? '' }}">
                
                <div class="modal-body">
                    <div class="form-group">
                        <label for="summaryInput" class="form-label"><b>Summary</b></label>
                        <textarea class="form-control" id="summaryInput" name="summary" rows="4" required>{{ isset($summary) ? $summary->summary : '' }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>