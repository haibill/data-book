<x-layout>
	<x-slot:title>{{ $title }}</x-slot:title>
    <div id='writers' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <div>
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Add
                </button>
            </div>
        </div>
        <br>
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">Name</th>
                    <th data-priority="2">Nationality</th>
                    <th data-priority="3">Gender</th>
                    <th data-priority="4">Biography</th>
                    <th data-priority="5">Birth Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Masashi Ajinomoto</td>
                    <td>Japan</td>
                    <td>Male</td>
                    <td>Blut is an advanced Quincy technique that infuses Reishi within the user’s vascular system to bestow superhuman offensive or defensive abilities./td>
                    <td>1998/04/25</td>
                </tr>
                <tr>
                    <td>Dieq Syahreal</td>
                    <td>Spain</td>
                    <td>Male</td>
                    <td>After amassing a large amount of Reishi from the user’s surroundings, the user will focus it into their bow before launch thousands of arrows towards the intended target.</td>
                    <td>1997/01/25</td>
                </tr>
            </tbody>

        </table>
    </div>
</x-layout>