<div class="modal fade" id="referenceModal" tabindex="-1" aria-labelledby="referenceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="referenceModalLabel">{{ isset($reference) ? 'Edit Reference' : 'Add Reference' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ isset($reference) ? route('references.update', $reference->id) : route('references.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($reference))
                    @method('PUT')
                @endif
                <input type="hidden" name="id" value="{{ $reference->id ?? '' }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $reference->name ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone"><b>Mobile</b></label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ $reference->phone ?? '' }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"><b>Email</b></label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $reference->email ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company"><b>Company</b></label>
                                <input type="text" class="form-control" id="company" name="company" value="{{ $reference->company ?? '' }}" required>
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
