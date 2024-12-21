

@extends('admin-dash.layouts.admin')
            
        @section('content')

<div class="px-6 pb-20 pt-6">
                  <div class="flex items-center mb-4 justify-between">
                     <!-- title -->
                     <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Details</h1>
                  </div>
                  <!-- Card body -->
                  <div class="grid grid-cols-12 gap-6">
                     <div class="2xl:col-span-2 xl:col-span-3 lg:col-span-4 col-span-12">
                        <div class="card">
                           <div class="card-body">
                              <nav class="navbar-mail">
                                 <ul class="navbar-nav flex-col w-full">
                                    <li class="grid mb-4">
                                       <a
                                          href="#!"
                                          class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300"
                                          data-bs-toggle="modal"
                                          data-bs-target="#composeMailModal">
                                          Compose New Email
                                       </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                       <span class="text-uppercase">Mailbox</span>
                                    </li>

                                    <li class="nav-item">
                                       <a class="nav-link active" aria-current="page" href="mail.html">
                                          <span class="flex items-center justify-between">
                                             <span class="flex items-center">
                                                <i class="mr-2 h-4 w-4" data-feather="inbox"></i>
                                                Inbox
                                             </span>
                                             <span>3</span>
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center justify-between">
                                             <span class="flex items-center">
                                                <i class="mr-2 h-4 w-4" data-feather="send"></i>
                                                Sent
                                             </span>
                                             <span>5</span>
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="mail-draft.html">
                                          <span class="flex items-center">
                                             <i class="mr-2 h-4 w-4" data-feather="mail"></i>
                                             Drafts
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center justify-between">
                                             <span class="flex items-center">
                                                <i class="mr-2 h-4 w-4" data-feather="alert-circle"></i>
                                                Spam
                                             </span>
                                             <span>1</span>
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center">
                                             <i class="mr-2 h-4 w-4" data-feather="trash-2"></i>
                                             Trash
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center">
                                             <i class="mr-2 h-4 w-4" data-feather="archive"></i>
                                             Archive
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item mb-3 mt-6">
                                       <span class="text-uppercase">Filter</span>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center">
                                             <i class="mr-2 h-4 w-4" data-feather="star"></i>
                                             Starred
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center gap-2">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-tag">
                                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                             </svg>
                                             Important
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item mb-3 mt-6">
                                       <span class="text-uppercase">Labels</span>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center gap-2">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="rgb(22 163 74)"
                                                stroke="rgb(22 163 74)"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-tag">
                                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                             </svg>
                                             Personal
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center gap-2">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="#dc2626"
                                                stroke="#dc2626"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-tag">
                                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                             </svg>
                                             Work
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center gap-2">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="#facc15"
                                                stroke="#facc15"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-tag">
                                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                             </svg>
                                             Payments
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center gap-2">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="#0891b2"
                                                stroke="#0891b2"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-tag text-cyan-600">
                                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                             </svg>
                                             Invoices
                                          </span>
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#!">
                                          <span class="flex items-center gap-2">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="#624bff"
                                                stroke="#624bff"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-tag text-indigo-600">
                                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                             </svg>
                                             Bank
                                          </span>
                                       </a>
                                    </li>
                                    <li class="flex items-center border-t border-gray-300 pt-3 mt-5">
                                       <a href="#!" class="nav-link">
                                          <i data-feather="settings" class="h-4 w-4 me-1 inline-block"></i>
                                          Setting
                                       </a>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                     <div class="2xl:col-span-10 xl:col-span-9 lg:col-span-8 col-span-12">
                        <div class="card">
                           <div class="border-b border-gray-300 px-5 py-3">
                              <div class="md:flex justify-between items-center">
                                 <div class="flex">
                                    <div>
                                       <a
                                          href="mail.html"
                                          class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm btn-icon texttooltip"
                                          data-template="inboxOne">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-arrow-left icon-xxs">
                                             <line x1="19" y1="12" x2="5" y2="12"></line>
                                             <polyline points="12 19 5 12 12 5"></polyline>
                                          </svg>
                                          <div id="inboxOne" class="hidden">
                                             <span>Back to inbox</span>
                                          </div>
                                       </a>
                                    </div>
                                    <!-- button group -->
                                    <div class="ml-2">
                                       <div>
                                          <a
                                             href="#"
                                             class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm btn-icon texttooltip"
                                             data-template="archieveOne">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="12"
                                                height="12"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-archive icon-xxs">
                                                <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                                <rect x="1" y="3" width="22" height="5"></rect>
                                                <line x1="10" y1="12" x2="14" y2="12"></line>
                                             </svg>
                                             <div id="archieveOne" class="hidden">
                                                <span>Archive</span>
                                             </div>
                                          </a>
                                          <a
                                             href="#"
                                             class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm btn-icon texttooltip"
                                             data-template="spanOne">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="12"
                                                height="12"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-alert-triangle icon-xxs">
                                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                             </svg>
                                             <div id="spanOne" class="hidden">
                                                <span>Spam</span>
                                             </div>
                                          </a>
                                          <a
                                             href="#"
                                             class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm btn-icon texttooltip"
                                             data-template="trashOne">
                                             <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="12"
                                                height="12"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-trash-2 icon-xxs">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                             </svg>
                                             <div id="trashOne" class="hidden">
                                                <span>Delete</span>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="ml-2">
                                       <a
                                          href="#"
                                          class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm btn-icon texttooltip"
                                          data-template="mailOne">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-mail icon-xxs">
                                             <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                             <polyline points="22,6 12,13 2,6"></polyline>
                                          </svg>
                                          <div id="mailOne" class="hidden">
                                             <span>Mark as unread</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- button -->
                                 <div class="flex items-center mt-2 md:mt-0">
                                    <div>
                                       <span>4 of 437</span>
                                    </div>
                                    <div class="ml-3">
                                       <a
                                          href="#"
                                          class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm btn-icon texttooltip"
                                          data-template="newerOne">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-chevron-left icon-xxs">
                                             <polyline points="15 18 9 12 15 6"></polyline>
                                          </svg>
                                          <div id="newerOne" class="hidden">
                                             <span>Newer</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#"
                                          class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm btn-icon texttooltip"
                                          data-template="olderOne">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-chevron-right icon-xxs">
                                             <polyline points="9 18 15 12 9 6"></polyline>
                                          </svg>
                                          <div id="olderOne" class="hidden">
                                             <span>Older</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="card-body">
                              <div class="flex flex-col xl:flex-row xl:justify-between xl:items-center gap-4">
                                 <div class="flex items-center">
                                    <!-- img -->
                                    <div>
                                       <img src="assets/images/avatar/avatar-11.jpg" alt="Image" class="rounded-full h-10 max-w-10" />
                                    </div>
                                    <!-- sidebar -->
                                    <div class="ml-3">
                                       <h5>Contact For "Website Design"</h5>
                                       <p class="text-sm">Codescandy hello@example.com</p>
                                    </div>
                                 </div>
                                 <!-- text -->
                                 <div class="flex items-center mt-2 md:mt-0">
                                    <div>
                                       <span class="text-gray-500">Apr 22, 2023, 12:40 AM (1 day ago)</span>
                                    </div>
                                    <div class="ml-2 flex justify-center">
                                       <a href="#!" class="text-gray-500 texttooltip" data-template="starOne">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                          <div id="starOne" class="hidden">
                                             <span>Star</span>
                                          </div>
                                       </a>
                                       <a href="#!" class="text-gray-500 texttooltip ml-2" data-template="repyOne">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-corner-up-right">
                                             <polyline points="15 14 20 9 15 4"></polyline>
                                             <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                                          </svg>
                                          <div id="repyOne" class="hidden">
                                             <span>Reply</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- text -->
                              <div class="mt-6 flex flex-col gap-3">
                                 <p class="mb-3 text-gray-800">Hello Lesile Alexander,</p>
                                 <p>
                                    Ullamco deserunt commodo esse deserunt deserunt quis eiusmod. Laborum sint excepteur non sit eiusmod sunt voluptate ipsum nisi ullamco magna. Lorem consectetur est
                                    dolor minim exercitation deserunt quis duis fugiat ipsum incididunt non.
                                    <span class="text-gray-800">Anim aute ipsum cupidatat</span>
                                    nisi occaecat quis sit nisi labore labore dolore do. Pariatur veniam culpa quis veniam nisi exercitation veniam ut.
                                 </p>
                                 <p>
                                    Quis do sint proident fugiat ad. Nunc at magna vitae dolor maximus placerat. Nam quis arcu sodales, eleifend ex vitae, pellentesque ligula. Nunc ut tristique
                                    <a href="#!">nisi, id ullamcorper justo.</a>
                                 </p>
                                 <p>
                                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.Quisque imperdiet mauris turpis, sed malesuada
                                    metus elementum dictum. Vestibulum hendrerit malesuada elementum.
                                 </p>
                                 <p>
                                    Proin elementum, sem in ornare sodales, dui purus lobortis mi, ut iaculis lacus enim in dolor. In velit sapien, dignissim accumsan nibh eu, eleifend luctus metus.
                                    Quisque egestas nisl in enim hendrerit, at vestibulum turpis tincidunt.
                                 </p>
                                 <div class="mt-6">
                                    <p>Cheers!</p>
                                    <p class="text-gray-800 font-bold">Leslie Alexander</p>
                                 </div>
                                 <div class="border-t border-gray-300 py-4 mt-6">
                                    <div class="mb-3 flex items-center gap-2">
                                       <i class="h-4 w-4" data-feather="paperclip"></i>
                                       2 Attachments
                                    </div>
                                    <div class="flex">
                                       <div class="md:flex items-center">
                                          <div class="h-9 w-9 rounded-lg bg-indigo-600 rounded-lg"></div>
                                          <div class="md:ml-2">
                                             <p>image-thumbnail.jpg</p>
                                             <p>15.54 KB</p>
                                          </div>
                                       </div>
                                       <div class="md:flex items-center justify-center ml-6">
                                          <div class="h-8 w-8 bg-red-600 text-white rounded flex justify-center items-center">PDF</div>
                                          <div class="md:ml-2">
                                             <p>pdf-thumbnail.jpg</p>
                                             <p>243.45 KB</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

        @endsection