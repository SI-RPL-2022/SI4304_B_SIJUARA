<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-blue-300 text-center border border-blue-300 px-10 py-6 rounded">
            <h3 class="text-white-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($parents)) }}</span>
                <span class="leading-tight">Orang Tua</span>
            </h3>
        </div>
        <div class="w-full bg-green-300 text-center border border-green-300 px-10 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-white-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($teachers)) }}</span>
                <span class="leading-tight">Guru</span>
            </h3>
        </div>
        <div class="w-full bg-pink-400 text-center border border-pink-300 px-10 py-6 rounded">
            <h3 class="text-white-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($students)) }}</span>
                <span class="leading-tight">Siswa</span>
            </h3>
        </div>
    </div>
</div>