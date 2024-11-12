<div class="modal fade" id="hobbyModal" tabindex="-1" aria-labelledby="hobbyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hobbyModalLabel">{{ $hobby->isEmpty() ? 'Add Hobby' : 'Edit Hobby' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form id="hobbyForm" action="{{ $hobby->isEmpty() ? route('hobby.store') : route('hobby.update', $hobby->first()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(!$hobby->isEmpty())
                        @method('PUT')
                    @endif
                    @if(!$hobby->isEmpty())
                        <input type="hidden" name="id" value="{{ $hobby->first()->id }}">
                    @endif
                    
                    <div id="hobbyInputs">
                        @if(!$hobby->isEmpty())
                            @foreach($hobby->first()->hobby as $index => $hobby)
                                <div class="form-group mb-2 d-flex align-items-center">
                                    <input type="checkbox" class="me-2" title="Mark as primary hobby">
                                    <input type="text" class="form-control me-2" name="hobby[]" value="{{ $hobby }}" placeholder="Hobby name" required>
                                    <button type="button" class="btn btn-danger btn-sm removeHobby">&times;</button>
                                </div>
                            @endforeach
                        @else
                            <div class="form-group mb-2 d-flex align-items-center">
                                <input type="checkbox" class="me-2" title="Mark as primary skill">
                                <input type="text" class="form-control me-2" name="hobby[]" placeholder="Hobby name" required>
                                <button type="button" class="btn btn-danger btn-sm removeHobby">&times;</button>
                            </div>
                        @endif
                    </div>
                    <button type="button" id="addMoreHobby" class="btn btn-link p-0">+ Add More</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveHobby">Save</button>
            </div>
        </div>
    </div>
</div>
