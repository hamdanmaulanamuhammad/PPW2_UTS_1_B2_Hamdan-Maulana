<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-600">
<h1 class="text-center text-4xl font-bold text-white mt-8">Data Pemain</h1>
<!-- Tabel Pemain -->
<div class="flex justify-center mt-8 mx-10">
    <table class="min-w-full max-w-4xl bg-white border border-gray-200 shadow-md rounded-lg mx-4">
        <thead>
            <tr class="bg-gray-100 border-b border-gray-200">
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">No</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">ID</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama Pemain</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">No Punggung</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Posisi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($data_pemain as $index => $pemain)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 text-sm text-gray-700">{{ $index+1 }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pemain->id }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pemain->nama_pemain }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pemain->no_punggung }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $pemain->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
