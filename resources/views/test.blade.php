<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    
    {{-- <section class="container mx-auto max-w-full py-60 flex px-10 justify-center items-center gap-5">
        <div class="mx-auto">
            <img class="h-32 w-32" src="img/shopping-cart.png" alt="">
        </div>
        <div class="border rounded-3xl shadow-md max-w-lg p-10 mx-auto">
            <input id="resiInput" 
                        type="text" 
                        placeholder="Masukan No Resi.." 
                        onkeydown="addResi(event)"
                        class="w-full py-2 text-black font-semibold rounded-md focus:outline-none">
                    <div class="flex justify-center mt-6">
                            <button id="searchButton" class="bg-green-700 text-white font-semibold py-2 px-4 rounded-md hover:bg-green-800" onclick="showResiTable()">
                                Search
                            </button>
                    </div>
        </div>
        <div class="mx-auto">
            <img class="h-32 w-32" src="img/navigation.png" alt="">
        </div>
    </section> --}}

    <section class="container mx-auto max-w-full py-60 flex px-10 justify-center items-center">
        <div class="flex gap-5">
            <img class="h-60 w-60" src="img/shopping-cart.png" alt="">
            <div class="border max-w-lg py-32 px-80 justify-center items-center">
                <div class="border shadow-2xl p-28 mx-auto">

                </div>
                <div class="flex justify-center mt-6">
                    <button id="searchButton" class="bg-green-700 text-white font-semibold py-2 px-4 rounded-md hover:bg-green-800" onclick="showResiTable()">
                        Search
                    </button>
                </div>

            </div>
            <img class="h-60 w-60" src="img/navigation.png" alt="">
        </div>
    </section>
    
    

</body>
</html>