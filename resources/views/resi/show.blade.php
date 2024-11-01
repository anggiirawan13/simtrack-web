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
<!DOCTYPE html>
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

    <script>
        function confirmArrival() {
            // Update the status in the page
            document.getElementById('resiStatus').textContent = 'Delivered';

            // Optionally, you can send an AJAX request here to update the status in the database
            alert('Arrival has been confirmed as "Delivered".');
            
            // Disable the button after confirmation
            document.getElementById('confirmArrivalBtn').disabled = true;
        }
    </script>
</body>
</html>
