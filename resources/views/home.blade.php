<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SimTrack Web</title>
</head>
<body>
    <header>
        <div class="container mx-auto max-w-full py-30">
            <div class="flex items-center justify-center shadow-md">
                <img src="img/logo.png" alt="" class="h-20 w-20">
                <h1 class="text-2xl font-bold font-serif text-green-700">ANUGRAH HADI ELECTRIC</h1>                    
            </div>
        </div>
    </header>
    <section>
        <div class="container mx-auto max-w-full py-5 px-10 flex justify-center items-center">
            <div class="">
                <img class="h-1/4 w-1/4 m-auto" src="img/navigation.png" alt="">
                    <h1 class="items-center justify-center flex p-8 text-5xl font-sans font-bold text-green-700">Tracking</h1>
                
                <!-- Container Input Resi -->
                <div class="border rounded-3xl shadow-md max-w-lg p-10 mx-auto">
                    <!-- Input Resi -->
                    <input id="resiInput" 
                        type="text" 
                        placeholder="Enter your receipt.." 
                        onkeydown="addResi(event)"
                        class="w-full py-2 text-black font-semibold rounded-md focus:outline-none">              

                    <!-- Container for Resi Bubbles -->
                    <div class="resi-container mt-4 flex flex-wrap gap-2">
                        <!-- Resi bubbles will be added here dynamically -->
                    </div>
                </div>

                <!-- Search Button Outside Container -->
                <div class="flex justify-center mt-6">
                    <button id="searchButton" class="bg-green-700 text-white font-semibold py-2 px-4 rounded-xl hover:bg-green-800" onclick="showResiTable()">
                        Shipment Track
                    </button>
                </div>

                <!-- Table to display resi information -->
                <div class="overflow-x-auto mt-8">
                    <table id="resiTable" class="min-w-full border-collapse border border-gray-300 hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">No Resi</th>
                                <th class="border border-gray-300 px-4 py-2">Kota Tujuan</th>
                                <th class="border border-gray-300 px-4 py-2">Perusahaan</th>
                                <th class="border border-gray-300 px-4 py-2">Tanggal Diterima</th>
                                <th class="border border-gray-300 px-4 py-2">Status</th>
                                <th class="border border-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="resiTableBody">
                            <!-- Rows will be dynamically added here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>   
    </section>
    <footer class="text-black py-16 mt-10 shadow-lg border">
        <div class="container mx-auto flex justify-between items-center"> <!-- Flex container for alignment -->
            <div class="text-center"> <!-- Centered text section -->
                <p class="text-lg font-semibold">Anugrah Hadi Electric</p>
                <p class="text-sm">General Supplier Electrical</p>
    
                <!-- Social Links -->
                <div class="flex justify-center mt-2 space-x-4"> <!-- Space between icons -->
                    <a href="https://wa.me/+62 856923534834" target="_blank" class="flex items-center">
                        <img src="img/wa.png" alt="WhatsApp" class="h-6 w-6"> <!-- Adjust path -->
                        <span class="text-sm">089629625484</span>
                    </a>
                    <a href="mailto:anugrahhadielectric.com" target="_blank" class="flex items-center">
                        <img src="img/email.png" alt="Email" class="h-6 w-6"> <!-- Adjust path -->
                        <span class="text-sm">anugrahhadielectric.com</span>
                    </a>
                </div>
            </div>
            
            <div class="w-1/3"> <!-- Map container -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.397219777975!2d106.59237567603742!3d-6.211226960842041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff8c61e3b72d%3A0xb5aa5f38db758c1f!2sPT.%20Anugrah%20Hadi%20Electric!5e0!3m2!1sen!2sid!4v1730407289234!5m2!1sen!2sid" 
                    width="300" 
                    height="200" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </footer>
    
    
    
    <!-- Inline JavaScript -->
    <script>
        const resiList = []; // Array to store resi information
    
        // Function to add a resi bubble
        // function addResi(event) {
        //     if (event.key === "Enter") {
        //         event.preventDefault();
                
        //         const resiInput = document.getElementById("resiInput");
        //         const resiNumber = resiInput.value.trim();
    
        //         if (resiNumber) {
        //             // Add resi details to the array
        //             resiList.push({
        //                 noResi: resiNumber,
        //                 kotaTujuan: "Surabaya", // sample data
        //                 perusahaan: "PT. ABC",   // sample data
        //                 tanggalDiterima: new Date().toLocaleDateString(),
        //                 status: "In Transit"
        //             });
        function addResi(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        
        const resiInput = document.getElementById("resiInput");
        const resiNumber = resiInput.value.trim();

        if (resiNumber) {
            let resiDetails = {
                noResi: resiNumber,
                kotaTujuan: "Surabaya", // Default sample data
                perusahaan: "PT. ABC",   // Default sample data
                tanggalDiterima: new Date().toLocaleDateString(),
                status: "In Transit"
            };

            // Specific data for resi 12345
            if (resiNumber === "12345") {
                resiDetails = {
                    noResi: "12345",
                    kotaTujuan: "Jakarta",
                    perusahaan: "PT. Anugrah Express",
                    tanggalDiterima: "2023-11-01",
                    status: "Delivered"
                };
            }

            // Add resi details to the array
            resiList.push(resiDetails);
    
                    // Create the bubble element
                    const bubble = document.createElement("div");
                    bubble.className = "bg-green-100 text-green-700 font-semibold px-4 py-2 rounded-full inline-flex items-center space-x-2 shadow-md";
                    
                    // Add text for the resi number
                    const resiText = document.createElement("span");
                    resiText.textContent = resiNumber;
                    bubble.appendChild(resiText);
    
                    // Add close button
                    const closeButton = document.createElement("button");
                    closeButton.className = "text-red-500 hover:text-red-700 font-bold";
                    closeButton.innerHTML = "&times;";
                    closeButton.onclick = function () {
                        // Remove resi from resiList
                        const index = resiList.findIndex(r => r.noResi === resiNumber);
                        if (index !== -1) resiList.splice(index, 1);
    
                        // Update table
                        showResiTable();
    
                        // Remove bubble
                        bubble.remove();
                    };
    
                    bubble.appendChild(closeButton);
    
                    // Append to the container
                    document.querySelector(".resi-container").appendChild(bubble);
    
                    // Clear input
                    resiInput.value = "";
    
                    console.log(bubble); // Check if the bubble element has the correct classes
                }
            }
        }
    
        // Function to show the resi table
        function showResiTable() {
            const resiTable = document.getElementById("resiTable");
            const resiTableBody = document.getElementById("resiTableBody");
    
            // Clear previous rows
            resiTableBody.innerHTML = "";
    
            // Populate table rows if there are any resis
            if (resiList.length > 0) {
                resiList.forEach((resi, index) => {
                    const row = document.createElement("tr");
    
                    row.innerHTML = `
                        <td class="border border-gray-300 px-4 py-2">${resi.noResi}</td>
                        <td class="border border-gray-300 px-4 py-2">${resi.kotaTujuan}</td>
                        <td class="border border-gray-300 px-4 py-2">${resi.perusahaan}</td>
                        <td class="border border-gray-300 px-4 py-2">${resi.tanggalDiterima}</td>
                        <td class="border border-gray-300 px-4 py-2">${resi.status}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button onclick="openResiDetail(${index})" class="text-blue-500 hover:text-blue-700">Detail</button>
                        </td>
                    `;
    
                    resiTableBody.appendChild(row);
                });
    
                // Show the table if it has content
                resiTable.classList.remove("hidden");
            } else {
                // Hide the table if there are no resis
                resiTable.classList.add("hidden");
            }
        }
    
        // Function to open a detailed page for a specific resi
        function openResiDetail(index) {
    const resi = resiList[index];
    window.location.href = `/resi/${resi.noResi}`;
}


        // function openResiDetail(index) {
        //     const resi = resiList[index];
        //     alert(`Detail of No Resi: ${resi.noResi}\n\nKota Tujuan: ${resi.kotaTujuan}\nPerusahaan: ${resi.perusahaan}\nTanggal Diterima: ${resi.tanggalDiterima}\nStatus: ${resi.status}`);
            // Alternatively, redirect to a detail page with resi data
            // window.location.href = `detail.html?resi=${resi.noResi}`;
        
    </script>
    
</body>
</html>
