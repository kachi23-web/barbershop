
@extends('admin-dash.layouts.admin')
            
     @section('content')  

        <div class="px-6 pb-20 pt-6">
                  <div class="flex justify-between items-center mb-4">
                     <!-- title -->
                     <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">General</h1>
                     <a
                        href="#!"
                        class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                        Button
                     </a>
                  </div>
                  <div class="grid grid-cols-12 gap-6">
                     <div class="2xl:col-span-9 lg:col-span-8 md:col-span-12 col-span-12">
                        <!-- Card -->
                        <div class="card border-0 mb-4">
                           <!-- Card header -->
                           <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                              <h4>Create Post</h4>
                           </div>
                           <!-- Card body -->
                           <div class="card-body">
                              <div class="flex flex-wrap items-center gap-2">
                                 <button
                                    type="button"
                                    class="flex items-center btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    <i class="h-4 w-4 text-gray-500" data-feather="image"></i>
                                    Photo
                                 </button>
                                 <button
                                    type="button"
                                    class="flex items-center btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    <i class="h-4 w-4 text-gray-500" data-feather="video"></i>
                                    Video
                                 </button>
                                 <button
                                    type="button"
                                    class="flex items-center btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    Quote
                                 </button>
                                 <button
                                    type="button"
                                    class="flex items-center btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    <i class="h-4 w-4 text-gray-500" data-feather="link"></i>
                                    Link
                                 </button>
                              </div>

                              <!-- <form action="/upload" class="dropzone mt-4 border-dashed rounded-lg min-h-0" id="myDropzone"></form> -->
                              <form action="#" class="block mt-4 dropzone border-dashed rounded-lg" id="myDropzone">
                                 <div class="fallback">
                                    <input name="file" type="file" multiple />
                                 </div>
                              </form>
                              <div class="mt-4">
                                 <form>
                                    <!-- Form -->
                                    <div class="grid grid-cols-12">
                                       <!-- Date -->
                                       <div class="mb-3 md:col-span-2 col-span-12">
                                          <label for="selectDate" class="mb-2 block text-gray-800 font-semibold">Date</label>
                                          <input
                                             type="text"
                                             id="selectDate"
                                             class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none flatpickr"
                                             placeholder="Select Date" />
                                       </div>
                                       <div class="mb-3 md:col-span-9 col-span-12">
                                          <!-- Title -->
                                          <label for="postTitle" class="mb-2 block text-gray-800 font-semibold">Title</label>
                                          <input
                                             type="text"
                                             id="postTitle"
                                             class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                             placeholder="Post Title" />
                                          <small>Keep your post titles under 60 characters. Write heading that describe the topic content. Contextualize for Your Audience.</small>
                                       </div>
                                       <!-- Slug -->
                                       <div class="mb-3 md:col-span-9 col-span-12">
                                          <label for="basic-url" class="mb-2 block text-gray-800 font-semibold">Slug</label>
                                          <div class="flex">
                                             <span class="p-3 px-3 border flex items-center justify-center bg-gray-200 border-gray-300 rounded-l-md" id="slug">https://example.com/</span>
                                             <input
                                                type="text"
                                                class="border border-gray-300 text-gray-900 rounded-r-md -mx-px focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                                id="basic-url"
                                                aria-describedby="slug"
                                                placeholder="post-title" />
                                          </div>

                                          <small class="form-text">Field must contain an unique value</small>
                                       </div>
                                       <!-- Excerpt -->
                                       <div class="mb-3 md:col-span-9 col-span-12">
                                          <label for="Excerpt" class="mb-2 block text-gray-800 font-semibold">Excerpt</label>
                                          <textarea
                                             rows="3"
                                             id="Excerpt"
                                             class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                             placeholder="Excerpt"></textarea>
                                          <small>A short extract from writing.</small>
                                       </div>
                                       <!-- Category -->
                                       <div class="mb-3 md:col-span-9 col-span-12">
                                          <label class="mb-2 block text-gray-800 font-semibold">Category</label>
                                          <select
                                             class="text-base py-2 px-4 block w-full border-gray-300 rounded-md focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                             <option value="">Course</option>
                                             <option value="Post Category">Post Category</option>
                                             <option value="Workshop">Workshop</option>
                                             <option value="Marketing">Marketing</option>
                                          </select>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              <!-- Editor -->
                              <div class="mt-2 mb-4">
                                 <div id="editor">
                                    <br />
                                    <h4>One Ring to Rule Them All</h4>
                                    <br />
                                    <p>
                                       Three Rings for the
                                       <i>Elven-kingsunder</i>
                                       the sky,
                                       <br />
                                       Seven for the
                                       <u>Dwarf-lords</u>
                                       in halls of stone, Nine for Mortal Men,
                                       <br />
                                       doomed to die, One for the Dark Lord on his dark throne.
                                       <br />
                                       In the Land of Mordor where the Shadows lie.
                                       <br />
                                       <br />
                                    </p>
                                    <p>
                                       One Ring to
                                       <b>rule</b>
                                       them all,
                                       <br />
                                       One Ring to find them,
                                       <br />
                                       One Ring to bring them all and in the darkness bind them.
                                       <br />
                                       In the Land of Mordor where the Shadows lie.
                                    </p>
                                    <p>
                                       <br />
                                    </p>
                                 </div>
                              </div>
                              <!-- button -->
                              <div class="flex gap-3">
                                 <a
                                    href="#!"
                                    class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                    Publish
                                 </a>
                                 <a
                                    href="#!"
                                    class="flex items-center btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    Save to Draft
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="2xl:col-span-3 lg:col-span-4 md:col-span-12 col-span-12">
                        <!-- Card -->
                        <div class="card mb-6">
                           <!-- Card Header -->
                           <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                              <h4>Post Info</h4>
                           </div>
                           <!-- List Group -->
                           <ul>
                              <li class="px-5 py-3 border-b border-gray-300">
                                 <span>Post ID</span>
                                 <h5>8693637308</h5>
                              </li>
                              <li class="px-5 py-3 border-b border-gray-300">
                                 <span>Status</span>
                                 <h5>
                                    <span class="h-2 w-2 bg-green-600 inline-flex items-center rounded-full"></span>
                                    Published (unsaved changes)
                                 </h5>
                              </li>
                              <li class="px-5 py-3 border-b border-gray-300">
                                 <span>Created by</span>
                                 <div class="flex mt-2">
                                    <img src="assets/images/avatar/avatar-11.jpg" alt="Image" class="h-8 max-w-8 rounded-full" />
                                    <div class="ml-2">
                                       <h5>Dashui Post</h5>
                                       <small>Admin</small>
                                    </div>
                                 </div>
                              </li>
                              <li class="px-5 py-3 border-b border-gray-300">
                                 <span>Created at</span>
                                 <h5>Jul 30, 2:21 PM</h5>
                              </li>
                              <li class="px-5 py-3 border-b border-gray-300">
                                 <span>First published at</span>
                                 <h5>Jul 30, 2:21 PM</h5>
                              </li>
                              <li class="px-5 py-3 border-b border-gray-300">
                                 <span>Last update</span>
                                 <h5>Aug 31, 12:21 PM</h5>
                              </li>
                              <li class="px-5 py-3">
                                 <span>Last Published</span>
                                 <h5>Aug 31, 12:21 PM</h5>
                              </li>
                           </ul>
                           <!-- Card -->
                        </div>
                        <div class="card mb-6">
                           <!-- Card Header -->
                           <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                              <h4>Actions</h4>
                           </div>
                           <!-- List group -->
                           <ul>
                              <li class="px-5 py-3 border-b border-gray-300 flex justify-between items-center">
                                 <span>Unpublish</span>
                                 <a href="#!" class="text-inherit"><i data-feather="x-circle" class="h-4 w-4"></i></a>
                              </li>
                              <li class="px-5 py-3 border-b border-gray-300 flex justify-between items-center">
                                 <span>Duplicate</span>
                                 <a href="#!" class="text-inherit"><i data-feather="copy" class="h-4 w-4"></i></a>
                              </li>
                              <li class="px-5 py-3 flex justify-between items-center">
                                 <span>Delete</span>
                                 <a href="#!"><i class="text-red-600 h-4 w-4" data-feather="trash"></i></a>
                              </li>
                           </ul>
                        </div>
                        <!-- Card  -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                              <h4>Revision History</h4>
                           </div>
                           <!-- List group -->
                           <ul>
                              <li class="px-5 py-3 flex justify-between items-center">
                                 <div>
                                    <h5>Aug 31, 12:21 PM</h5>
                                    <span>Dashui Post</span>
                                 </div>
                                 <div>
                                    <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Published</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
     @endsection          