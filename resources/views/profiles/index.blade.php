@extends('layouts.master')
@section('title')
<title>Profile | Hire Spot</title>
@endsection
{{-- @section('content')
    <div class="container mt-5 p-5">
        <div class="row p-4">
            @include('profiles.partials.left-sidebar')
            @include('profiles.partials.right-sidebar')
        </div>
    </div>
    @include('educations.index')
    @include('references.index')
    @include('profiles.partials.modals.edit-profile')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Start JavaScript to toggle the end date input -->
    <script>
        function toggleEndDate(checkboxId, endDateId) {
            const endDateInput = document.getElementById(endDateId);
            const checkbox = document.getElementById(checkboxId);
            if (checkbox.checked) {
                endDateInput.disabled = true;
                endDateInput.value = '';
            } else {
                endDateInput.disabled = false;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('end_date_experience').disabled = false;
            document.getElementById('end_date_project').disabled = false;
        });
    </script>

    <script>
    // Clear form data for adding a new experience
    function clearForm() {
        $('#experienceModalLabel').text('Add Experience');
        $('#experienceForm')[0].reset();
        $('#experienceForm').attr('action', '{{ route('work_history.store') }}');
        $('#experienceForm').find('input[name="_method"]').remove();
        $('#currently_project_here').prop('checked', false);
        toggleEndDate('currently_project_here', 'end_date_experience');
        $('input[name="id"]').val('');
    }

    function editExperience(experience) {
        $('#experienceModalLabel').text('Edit Experience');
        $('#experienceForm').attr('action', '{{ route('work_history.update', '') }}/' + experience.id);
        $('#experienceForm').append('<input type="hidden" name="_method" value="PUT">');

        $('.job_title').val(experience.job_title);
        $('.company').val(experience.company);
        $('.country').val(experience.country);
        $('.city').val(experience.city);
        $('#start_date').val(experience.start_date);
        $('#end_date_experience').val(experience.end_date);
        $('#description').val(experience.description);
        $('input[name="id"]').val(experience.id);

        // Handle checkbox for currently working
        if (experience.end_date === null) {
            $('#currently_project_here').prop('checked', true);
            toggleEndDate('currently_project_here', 'end_date_experience');
        } else {
            $('#currently_project_here').prop('checked', false);
            toggleEndDate('currently_project_here', 'end_date_experience');
        }
    }

    </script>
    <!--End JavaScript to toggle the end date input -->

    <script>
        $(document).ready(function() {
            $('.work_history_title').hover(
                function() {
                    $(this).find('.experience-edit-btn').show();
                },
                function() {
                    $(this).find('.experience-edit-btn').hide();
                }
            );
            $('.edit-btn').click(function() {
                $('#experienceModal').modal('show');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.projectTitle').hover(
                function() {
                    $(this).find('.edit-btn-project').show();
                },
                function() {
                    $(this).find('.edit-btn-project').hide();
                }
            );
            $('.edit-btn').click(function() {
                $('#projectModal').modal('show');
            });
        });
    </script>

    <script>
        $('#profileModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);

            var id = button.data('id');
            var firstName = button.data('first-name');
            var lastName = button.data('last-name');
            var email = button.data('email');
            var mobile = button.data('mobile');
            var state = button.data('state');
            var city = button.data('city');
            var experience = button.data('experience');
            var jobTitle = button.data('job-title');
            var currentCompany = button.data('current-company');
            var linkedin = button.data('linkedin');
            var imageSrc = button.data('image') ? '{{ asset('storage/') }}/' + button.data('image') : '{{ asset('default-avatar.png') }}';

            var modal = $(this);
            modal.find('.modal-title').text(id ? 'Edit Profile' : 'Add Profile');
            modal.find('input[name="id"]').val(id);
            modal.find('input[name="first_name"]').val(firstName);
            modal.find('input[name="last_name"]').val(lastName);
            modal.find('input[name="email"]').val(email);
            modal.find('input[name="mobile"]').val(mobile);
            modal.find('input[name="state"]').val(state);
            modal.find('input[name="city"]').val(city);
            modal.find('input[name="experience"]').val(experience);
            modal.find('input[name="job_title"]').val(jobTitle);
            modal.find('input[name="current_company"]').val(currentCompany);
            modal.find('input[name="linkedin"]').val(linkedin);
            modal.find('#imagePreview').attr('src', imageSrc);
        });

        $('#profileImage').change(function(e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    </script>

    <!-- Start Skills jQuery -->
    <script>
        $(document).ready(function() {
        let skillCount = 1;

        $('#addMoreSkill').on('click', function() {
            skillCount++;
            const newSkill = `
                <div class="form-group mb-2 d-flex align-items-center">
                    <input type="checkbox" class="me-2" title="Mark as primary skill">
                    <input type="text" class="form-control me-2" name="skills[]" placeholder="Skill name" required>
                    <button type="button" class="btn btn-danger btn-sm removeSkill">&times;</button>
                </div>`;
            $('#skillInputs').append(newSkill);
        });

        $('#skillsForm').on('click', '.removeSkill', function() {
            $(this).parent().remove();
        });

        $('#saveSkills').on('click', function() {
            $('#skillsForm').submit();
        });

    });
    </script>
    <!-- Start Hobbies jQuery -->
    <script>
        $(document).ready(function() {
        let hobbyCount = 1;

        $('#addMoreHobby').on('click', function() {
            hobbyCount++;
            const newSkill = `
                <div class="form-group mb-2 d-flex align-items-center">
                    <input type="checkbox" class="me-2" title="Mark as primary hobby">
                    <input type="text" class="form-control me-2" name="hobby[]" placeholder="Hobby name" required>
                    <button type="button" class="btn btn-danger btn-sm removeHobby">&times;</button>
                </div>`;
            $('#hobbyInputs').append(newSkill);
        });

        $('#hobbyForm').on('click', '.removeHobby', function() {
            $(this).parent().remove();
        });

        $('#saveHobby').on('click', function() {
            $('#hobbyForm').submit();
        });

    });
    </script>
    <!-- End Hobbies jQuery -->

    <!-- Start Reference jQuery -->
    <script>
        $('#referenceModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);

            var id = button.data('id');
            var name = button.data('name');
            var company = button.data('company');
            var email = button.data('email');
            var phone = button.data('phone');

            var modal = $(this);
            modal.find('.modal-title').text(id ? 'Edit Reference' : 'Add Reference');
            modal.find('input[name="id"]').val(id);
            modal.find('input[name="name"]').val(firstName);
            modal.find('input[name="company"]').val(lastName);
            modal.find('input[name="email"]').val(email);
            modal.find('input[name="phone"]').val(mobile);
        });
    </script>
    <!-- End Reference jQuery -->


    <script>
        // Clear form data for adding a new experience
        function clearForm() {
            $('#projectModalLabel').text('Add Project');
            $('#projectForm')[0].reset();
            $('#projectForm').attr('action', '{{ route('projects.store') }}');
            $('#projectForm').find('input[name="_method"]').remove();
            $('#currently_project_here').prop('checked', false);
            toggleEndDate('currently_project_here', 'end_date_project');
            $('input[name="id"]').val('');
        }

        function editProject(project) {
            $('#projectModalLabel').text('Edit Project');
            $('#projectForm').attr('action', '{{ route('projects.update', '') }}/' + project.id);
            $('#projectForm').append('<input type="hidden" name="_method" value="PUT">');

            // Populate fields
            $('#project_title').val(project.title); // Make sure the IDs match
            $('.company').val(project.company);
            $('#project_url').val(project.project_url);
            $('#tools').val(project.tools ? project.tools.split(',') : []); // Handle tools as array
            $('.start_date').val(project.start_date);
            $('#end_date_project').val(project.end_date);
            $('.description').val(project.description);
            $('input[name="id"]').val(project.id);

            // Handle checkbox for currently working
            if (project.end_date === null) {
                $('#currently_project_here').prop('checked', true);
                toggleEndDate('currently_project_here', 'end_date_project');
            } else {
                $('#currently_project_here').prop('checked', false);
                toggleEndDate('currently_project_here', 'end_date_project');
            }
        }


    </script>
@endsection --}}
