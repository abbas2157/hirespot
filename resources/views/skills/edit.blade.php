@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Edit Skill
                        <a href="{{ route('skills.index') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="skill">Skill</label>
                            <input type="text" name="skill" class="form-control" id="skill"
                                value="{{ $skill->title }}" placeholder="Enter a skill" autocomplete="off" />

                            <!-- Suggestions container -->
                            <div id="suggestions" class="mt-2"></div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('skill').addEventListener('keyup', function () {
        let query = this.value;

        console.log('User is typing:', query);

        if (query.length >= 2) {
            let url = `{{ route('skills.search') }}?query=${query}`;

            console.log('Request URL:', url);

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log('Data received:', data);

                    let suggestions = document.getElementById('suggestions');
                    suggestions.innerHTML = '';

                    if (data.length > 0) {
                        let ul = document.createElement('ul');
                        ul.classList.add('list-group');

                        data.forEach(skill => {
                            let li = document.createElement('li');
                            li.classList.add('list-group-item');
                            li.textContent = skill.title;

                            li.addEventListener('click', function () {
                                document.getElementById('skill').value = skill.title;
                                suggestions.innerHTML = '';
                            });

                            ul.appendChild(li);
                        });

                        suggestions.appendChild(ul);
                    }
                })
                .catch(error => console.error('Error fetching data:', error));
        } else {
            console.log('Clearing suggestions because query length is less than 2');
            document.getElementById('suggestions').innerHTML = '';
        }
    });
</script>
@endsection
