<div class="modal fade" id="skillsModal" tabindex="-1" aria-labelledby="skillsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="skillsModalLabel">{{ $skills->isEmpty() ? 'Add Skills' : 'Edit Skills' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form id="skillsForm" action="{{ $skills->isEmpty() ? route('skills.store') : route('skills.update', $skills->first()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(!$skills->isEmpty())
                        @method('PUT')
                    @endif
                    @if(!$skills->isEmpty())
                        <input type="hidden" name="id" value="{{ $skills->first()->id }}">
                    @endif
                    
                    <div id="skillInputs">
                        @if(!$skills->isEmpty())
                            @foreach($skills->first()->skills as $index => $skill)
                                <div class="form-group mb-2 d-flex align-items-center">
                                    <input type="checkbox" class="me-2" title="Mark as primary skill">
                                    <input type="text" class="form-control me-2" name="skills[]" value="{{ $skill }}" placeholder="Skill name" required>
                                    <button type="button" class="btn btn-danger btn-sm removeSkill">&times;</button>
                                </div>
                            @endforeach
                        @else
                            <div class="form-group mb-2 d-flex align-items-center">
                                <input type="checkbox" class="me-2" title="Mark as primary skill">
                                <input type="text" class="form-control me-2" name="skills[]" placeholder="Skill name" required>
                                <button type="button" class="btn btn-danger btn-sm removeSkill">&times;</button>
                            </div>
                        @endif
                    </div>
                    <button type="button" id="addMoreSkill" class="btn btn-link p-0">+ Add More</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveSkills">Save</button>
            </div>
        </div>
    </div>
</div>
