{{-- <!-- resources/views/resi/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resi Details - {{ $resi['noResi'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto p-10">
        <h1 class="text-3xl font-bold mb-5">Detail of Resi {{ $resi['noResi'] }}</h1>

        <div class="border p-5 rounded shadow-md">
            <p><strong>No Resi:</strong> {{ $resi['noResi'] }}</p>
            <p><strong>Kota Tujuan:</strong> {{ $resi['kotaTujuan'] }}</p>
            <p><strong>Perusahaan:</strong> {{ $resi['perusahaan'] }}</p>
            <p><strong>Tanggal Diterima:</strong> {{ $resi['tanggalDiterima'] }}</p>
            <p><strong>Status:</strong> {{ $resi['status'] }}</p>
        </div>

        <a href="/" class="text-blue-500 hover:underline mt-5 inline-block">Back to Home</a>
    </div>
</body>
</html> --}}
<!-- resources/views/resi/show.blade.php -->
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Ensure CSS is linked -->
</head>
<body>
    <div class="container mx-auto mt-10 p-6 border rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-green-700 mb-4">Resi Detail</h1>
        <p><strong>No Resi:</strong> {{ $resi['noResi'] }}</p>
        <p><strong>Kota Tujuan:</strong> {{ $resi['kotaTujuan'] }}</p>
        <p><strong>Perusahaan:</strong> {{ $resi['perusahaan'] }}</p>
        <p><strong>Tanggal Diterima:</strong> {{ $resi['tanggalDiterima'] }}</p>
        <p><strong>Status:</strong> <span id="resiStatus">{{ $resi['status'] }}</span></p>
        
        <!-- Confirm Arrival Button -->
        <button id="confirmArrivalBtn" onclick="confirmArrival()" class="mt-4 px-4 py-2 bg-green-700 text-white rounded hover:bg-green-800">
            Confirm Arrival
        </button>
        
        <a href="/" class="mt-4 block text-blue-500 hover:underline">Back to Tracking</a>
    </div>
    <button onclick="openMaps()">Track</button>

   

    <script>
        function confirmArrival() {
            // Update the status in the page
            document.getElementById('resiStatus').textContent = 'Delivered';

            // Optionally, you can send an AJAX request here to update the status in the database
            alert('Arrival has been confirmed as "Delivered".');
            
            // Disable the button after confirmation
            document.getElementById('confirmArrivalBtn').disabled = true;
        }
        function openMaps() {
            // Ganti koordinat latitude dan longitude sesuai lokasi yang diinginkan
            const latitude = -6.1751; // Contoh: Jakarta
            const longitude = 106.8650;
            const url = `https://www.google.com/maps?q=${latitude},${longitude}`;
            window.open(url, '_blank');
        }
    </script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-green-700 mb-6 text-center">Resi Detail</h1>
        
        <div class="space-y-4"> <!-- Space between elements for better readability -->
            <p class="text-lg"><strong>No Resi:</strong> {{ $resi['noResi'] }}</p>
            <p class="text-lg"><strong>Kota Tujuan:</strong> {{ $resi['kotaTujuan'] }}</p>
            <p class="text-lg"><strong>Perusahaan:</strong> {{ $resi['perusahaan'] }}</p>
            <p class="text-lg"><strong>Nama Penerima:</strong> {{ $resi['namaPenerima'] }}</p>
            <p class="text-lg"><strong>Tanggal Pengiriman:</strong> {{ $resi['tanggalPengiriman'] }}</p>
            <p class="text-lg"><strong>Tanggal Diterima:</strong> {{ $resi['tanggalDiterima'] }}</p>
            <p class="text-lg"><strong>Status:</strong> <span id="resiStatus" class="font-semibold">{{ $resi['status'] }}</span></p>
        </div>
        
        <!-- Action Buttons -->
        <div class="mt-6 flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 justify-center">
            <button id="confirmArrivalBtn" onclick="confirmArrival()" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 w-full sm:w-auto">
                Confirm Arrival
            </button>
            <button onclick="openMaps()" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full sm:w-auto">
                Track
            </button>
        </div>
        
        <a href="/" class="mt-4 inline-block text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 text-center">Back to Tracking</a>
    </div>

    <script>
        function confirmArrival() {
            // Update the status in the page
            document.getElementById('resiStatus').textContent = 'Delivered';

            // Optionally, you can send an AJAX request here to update the status in the database
            alert('Arrival has been confirmed as "Delivered".');
            
            // Disable the button after confirmation
            document.getElementById('confirmArrivalBtn').disabled = true;
        }

        function openMaps() {
            // Change the coordinates as per your desired location
            const latitude = -6.1751; // Example: Jakarta
            const longitude = 106.8650;
            const url = `https://www.google.com/maps?q=${latitude},${longitude}`;
            window.open(url, '_blank');
        }
    </script>
</body>
</html>

