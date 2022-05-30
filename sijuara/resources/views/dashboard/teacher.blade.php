<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-red-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", $teacher->classes_count) }}</span>
                <span class="leading-tight">Kelas</span>
            </h3>
        </div>
        <div class="w-full bg-purple-200 text-center border border-gray-300 px-8 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", $teacher->subjects_count) }}</span>
                <span class="leading-tight">Mata Pelajaran</span>
            </h3>
        </div>
        <div class="w-full bg-green-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ ($teacher->students[0]->students_count) ?? 0 }}</span>
                <span class="leading-tight">Siswa</span>
            </h3>
        </div>
    </div>
</div>
<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full sm:w-1/2 mr-2 mb-6">
            <h3 class="text-gray-700 uppercase font-bold mb-2">Daftar Kelas</h3>
            <div class="flex flex-wrap items-center">
                @foreach ($teacher->classes as $class)
                    <div class="w-full sm:w-1/2 text-center border border-gray-200 rounded">
                        <div class="text-gray-800 uppercase font-semibold px-4 py-4 mb-2">{{ $class->class_name }}</div>
                        <a href="{{ route('teacher.attendance.create',$class->id) }}" class="bg-blue-500 hover:bg-purple-700 inline-block mb-4 text-xs text-dark-600 uppercase font-semibold px-4 py-2 border border-gray-200 rounded">Attendence</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-full sm:w-1/2 ml-2 mb-6">
            <h3 class="text-gray-700 uppercase font-bold mb-2">Daftar Mata Pelajaran</h3>
            <div class="flex items-center bg-pink-400 rounded-tl rounded-tr">
                <div class="w-1/3 text-left text-dark-600 py-2 px-4 font-semibold">Kode</div>
                <div class="w-1/3 text-left text-dark-600 py-2 px-4 font-semibold">Mata Pelajaran</div>
                <div class="w-1/3 text-right text-dark-600 py-2 px-4 font-semibold">Guru</div>
            </div>
            @foreach ($teacher->subjects as $subject)
                <div class="flex items-center justify-between border border-gray-200">
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->subject_code }}</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->name }}</div>
                    <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{ $subject->teacher->user->name }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div> <!-- ./END TEACHER -->