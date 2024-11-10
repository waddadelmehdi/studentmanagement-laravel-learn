<x-layout>
    <x-slot:tittle>
        Student
    </x-slot:tittle>
    <x-slot:heading>
        Student Dashboard
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$student['name']}}</h2>
    <p>
        Student Name : {{$student['name']}}<br/>
        Student Email : {{$student['email']}}<br/>
        Student Age : {{$student['age']}}<br/>
        Student gender : {{$student['gender']}}
    </p>
</x-layout>
