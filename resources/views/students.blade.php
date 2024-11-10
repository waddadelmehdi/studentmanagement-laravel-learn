<x-layout>
    <x-slot:tittle>
        Students
    </x-slot:tittle>
    <x-slot:heading>
        Student Dashboard
    </x-slot:heading>
    <h1><b>Students List</b></h1>
    <br/>
    <ul>
        @foreach( $students as $student)
            <li>
                <a href="/students/{{$student['id']}}" class="text-blue-500 hover:underline">
                    <strong>Name: {{ $student['name'] }} </strong> Age:  {{ $student['age'] }}
                    Email: {{$student['email']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
