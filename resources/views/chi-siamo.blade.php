<x-layout>
    <div class="container">
        <div class="row py-5 align-items-center justify-content-center">
            <div class="col-12 col-md-4">
                <ul class="list-group">
                    @foreach($students as $student)
                        <li class="list-group-item">{{$student['name']}} {{$student['surname']}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-layout>