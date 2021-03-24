@extends('layouts.app')
@section('content')
<div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
  <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("https://images.unsplash.com/photo-1579358959725-436f0cb45ca2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'>
    <span id="blackOverlay"  class="w-full h-full absolute opacity-60 bg-black"></span>
  </div>
  <div class="container relative mx-auto">
    <div class="items-center flex flex-wrap">
      <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
        <div class="pr-12">
          <h1 class="text-white font-semibold text-5xl">
            Upload media file
          </h1>
          <p class="mt-4 text-lg text-gray-300">
              We display uploaded media file
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="pb-20 -mt-24">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
        >
          <div class="px-4 py-5 flex-auto">
            <div
              class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
            >
              <i class="fas fa-award"></i>
            </div>
            <h6 class="text-xl font-semibold">Awarded Agency</h6>
            <p class="mt-2 mb-4 text-gray-600">
              Divide details about your product or agency work into parts.
              A paragraph describing a feature will be enough.
            </p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-4/12 px-4 text-center">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
        >
          <div class="px-4 py-5 flex-auto">
            <div
              class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
            >
              <i class="fas fa-retweet"></i>
            </div>
            <h6 class="text-xl font-semibold">Free Revisions</h6>
            <p class="mt-2 mb-4 text-gray-600">
              Keep you user engaged by providing meaningful information.
              Remember that by this time, the user is curious.
            </p>
          </div>
        </div>
      </div>
      <div class="pt-6 w-full md:w-4/12 px-4 text-center">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
        >
          <div class="px-4 py-5 flex-auto">
            <div
              class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
            >
              <i class="fas fa-fingerprint"></i>
            </div>
            <h6 class="text-xl font-semibold">Verified Company</h6>
            <p class="mt-2 mb-4 text-gray-600">
              Write a few lines about each one. A paragraph describing a
              feature will be enough. Keep you user engaged!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="relative py-10">
  <div class="container mx-auto px-4">
    <div class="items-center flex flex-wrap">
      <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
        <img
          alt="..."
          class="max-w-full rounded-lg shadow-lg"
          src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
        />
      </div>
      <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
        <div class="md:pr-12">
          <div
            class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
          >
            <i class="fas fa-rocket text-xl"></i>
          </div>
          <h3 class="text-3xl font-semibold">Upload and view media files</h3>
          <p class="mt-4 text-lg leading-relaxed text-gray-600">
              View media files at ease anytime on our website
          </p>
          <ul class="list-none mt-6">
            <li class="py-2">
              <div class="flex items-center">
                <div>
                  <span
                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                    ><i class="fas fa-fingerprint"></i
                  ></span>
                </div>
                <div>
                  <h4 class="text-gray-600">
                    Carefully crafted components
                  </h4>
                </div>
              </div>
            </li>
            <li class="py-2">
              <div class="flex items-center">
                <div>
                  <span
                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                    ><i class="fab fa-html5"></i
                  ></span>
                </div>
                <div>
                  <h4 class="text-gray-600">Amazing page examples</h4>
                </div>
              </div>
            </li>
            <li class="py-2">
              <div class="flex items-center">
                <div>
                  <span
                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                    ><i class="far fa-paper-plane"></i
                  ></span>
                </div>
                <div>
                  <h4 class="text-gray-600">Dynamic components</h4>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
function toggleNavbar(collapseID) {
document.getElementById(collapseID).classList.toggle("hidden");
document.getElementById(collapseID).classList.toggle("block");
}
</script>
@endsection
