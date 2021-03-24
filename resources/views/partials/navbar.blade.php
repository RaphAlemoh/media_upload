<!--Nav-->
<nav id="header" class="bg-gray-400 opacity-75 fixed w-full z-30 top-0 text-gray">
	<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
			
		<div class="pl-4 flex items-center">
			<a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="{{ url('/') }}">MediaUpload	</a>
		</div>

		<div class="block lg:hidden pr-4">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				<li class="mr-3">
					<a class=" lg:text-white lg:hover:text-green-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('display') }}">Display</a>
				</li>
			</ul>
            <a href="{{ route('create') }}">
			<button  id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Upload</button>
            </a>
		</div>
	</div>
	
	<hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
