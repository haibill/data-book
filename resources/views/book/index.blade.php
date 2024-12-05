<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:breadcrumb>{{ $breadcrumb }}</x-slot:breadcrumb>
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
                    <th data-priority="1">Title</th>
                    <th data-priority="2">Writer</th>
                    <th data-priority="3">Published Date</th>
                    <th data-priority="4">Genre</th>
                    <th data-priority="5">Synopsis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="http://" style="color:dodgerblue">Marsuto Shippuden</a></td>
                    <td>Masashi Ajinomoto</td>
                    <td>2023/01/20</td>
                    <td>Romance</td>
                    <td>Blut is an advanced Quincy technique that infuses Reishi within the user’s vascular system to
                        bestow superhuman offensive or defensive abilities.</td>
                </tr>
                <tr>
                    <td><a href="http://" style="color:dodgerblue">Infinite Mediasure</a></td>
                    <td>Dieq Syahreal</td>
                    <td>2024/01/02</td>
                    <td>Drama, Thriller, Horror</td>
                    <td>"Portal: Dimensi Kesengsaraan" adalah kisah tentang lima pegawai yang tanpa sadar terjebak dalam
                        dimensi gelap penuh siksaan saat menguji sebuah perangkat teleportasi eksperimental. Di dunia
                        yang dipenuhi makhluk grotesk dan aturan waktu serta ruang yang kacau, mereka dipaksa menghadapi
                        dosa-dosa masa lalu dan bekerja sama untuk bertahan hidup. Ketegangan meningkat saat
                        pengkhianatan dan rasa bersalah memecah belah kelompok, sementara satu-satunya jalan keluar
                        adalah dengan menghadapi entitas kuno bernama The Lord—dengan harga yang tidak semua orang
                        bersedia membayar.</td>
                </tr>
            </tbody>

        </table>
    </div>
</x-layout>
