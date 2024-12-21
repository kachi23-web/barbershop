        
    @extends('admin-dash.layouts.admin')
            
     @section('content')    
          <div class="px-6 pb-20 pt-6">
                  <div class="flex items-center mb-4 justify-between">
                     <!-- title -->
                     <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Inbox</h1>
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
                                 <div class="flex flex-wrap gap-2 mb-2 md:mb-0">
                                    <div class="flex items-center border border-gray-300 px-3 py-2 rounded-lg">
                                       <div class="flex items-center mb-1">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="checkAll" />
                                       </div>
                                       <div class="dropdown">
                                          <a href="#!" class="dropdown-toggle text-inherit" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                          <ul class="dropdown-menu dropdown-menu-xs" aria-labelledby="dropdownMenuButton1">
                                             <li><a class="dropdown-item flex items-center" href="#!">All</a></li>
                                             <li><a class="dropdown-item flex items-center" href="#!">Read</a></li>
                                             <li><a class="dropdown-item flex items-center" href="#!">Unread</a></li>
                                             <li><a class="dropdown-item flex items-center" href="#!">Starred</a></li>
                                             <li><a class="dropdown-item flex items-center" href="#!">Unstarred</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <a
                                       href="#!"
                                       class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-icon">
                                       <i class="align-middle h-4 w-4" data-feather="rotate-cw"></i>
                                    </a>
                                    <div class="dropdown">
                                       <a
                                          href="#!"
                                          class="btn gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-icon"
                                          id="dropdownMenuButton2"
                                          data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="align-middle h-4 w-4" data-feather="more-vertical"></i>
                                       </a>
                                       <ul class="dropdown-menu dropdown-menu-xs" aria-labelledby="dropdownMenuButton2">
                                          <li><a class="dropdown-item flex items-center" href="#!">Action</a></li>
                                          <li><a class="dropdown-item flex items-center" href="#!">Another action</a></li>
                                          <li><a class="dropdown-item flex items-center" href="#!">Something else here</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div>
                                    <form>
                                       <input
                                          type="search"
                                          class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                          placeholder="Search Email" />
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body p-0">
                              <!-- list group -->
                              <div class="list-group-mail">
                                 <!-- list group itme -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listOne" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="#facc15"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star text-yellow-600">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a class="text-gray-800" href="mail-details.html">Material UI</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="text-gray-800 list-text">
                                                   Start working on Material UI Design layouts encourage consistency across platforms, environments, and screen sizes by using uniform elements and
                                                   spacing.
                                                </p>
                                             </a>
                                          </div>
                                          <!-- badge -->
                                          <div class="hidden lg:block">
                                             <span class="bg-red-100 px-2 py-1 text-red-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Important</span>
                                          </div>
                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">10:49 pm</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveOne">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveOne" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashOne">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashOne" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailOne">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailOne" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailOne">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailOne" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listTwo" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">Search Console</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   New Mobile Usability issues detected for site To fix this error, make sure the pages use relative width and position values for CSS elements, and
                                                   make sure images can scale as well.
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">2:02 am</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveTwo">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveTwo" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashTwo">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashTwo" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailTwo">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailTwo" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailTwo">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailTwo" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listThree" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">Indie Hackers</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   Get conversions by sampling product features in your blog amet consectetur adipisicing elit. Quibusdam aut soluta repellendus culpa voluptatibus quam
                                                   rerum dignissimos minus repellat? Aliquid eius commodi maiores tempora....
                                                </p>
                                             </a>
                                          </div>
                                          <!-- badge -->
                                          <div class="hidden lg:block">
                                             <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Social</span>
                                          </div>
                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">4:02 am</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveThree">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveThree" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashThree">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashThree" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailThree">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailThree" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailThree">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailThree" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>

                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listFour" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">LinkedIn</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   See Jitu and other people s connections, experience lorem ipsum dolor sit amet consectetur adipisicing elit. Minima atque beatae nisi illo
                                                   consequatur omnis reprehenderit iste porro, praesentium animi..
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">May 12</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveFour">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveFour" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashFour">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashFour" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailFour">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailFour" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailFour">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailFour" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listFive" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="#facc15"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star text-yellow-600">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html" class="text-gray-800">Bootstrap Themes</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text text-gray-800">
                                                   [Bootstrap Themes] New order (89153)! You ve received the following consectetur adipisicing elit. Sequi sed dolor repellat reprehenderit officia est
                                                   sint cupiditate esse error quo dolore, non ab voluptates?
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">May 2</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveFive">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveFive" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashFive">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashFive" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailFive">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailFive" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailFive">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailFive" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listSix" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">Dribbble</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   NEW two week crash course: Grow Your Creative Business lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perspiciatis excepturi nihil
                                                   earum exercitationem. Deserunt expedita nostrum illum facilis incidunt delectus veniam!
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">Apr 30</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveSix">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveSix" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashSix">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashSix" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailSix">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailSix" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailSix">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailSix" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listSeven" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">Mailchimp Account</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   Weekly account summary from Mailchimp. Here are your weekly stats ipsum dolor sit, amet consectetur adipisicing elit. Quisquam sunt aliquam,
                                                   molestiae sapiente eos error quam maxime distinctio ea, aut eveniet libero!.
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">Apr 22</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveSeven">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveSeven" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashSeven">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashSeven" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailSeven">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailSeven" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailSeven">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailSeven" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listEight" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">Anita , me 2</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   theme js files aren't working. Hello anita, I think you need to use amet consectetur adipisicing elit. At ea nesciunt eos quod, amet culpa veritatis
                                                   maxime odit. Doloribus facilis, omnis totam nisi nulla voluptatem. ...
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">Apr 20</p>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveEight">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveEight" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashEight">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashEight" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailEight">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailEight" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailEight">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailEight" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listNine" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">Substack Blog</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   Introducing Substack Local, for a new generation of local news lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus veritatis hic minima
                                                   architecto, quasi suscipit.
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">Apr 12</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveNine">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveNine" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashNine">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashNine" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailNine">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailNine" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailNine">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailNine" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listTen" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html" class="text-gray-800">Google Analytics</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text text-gray-800">
                                                   Remember to set up today for the future of Google Analytics sit amet consectetur adipisicing elit. Repellendus, asperiores veritatis. Reiciendis
                                                   optio ex nisi, odit id atque ipsum iusto obcaecati earum.
                                                </p>
                                             </a>
                                          </div>
                                          <!-- badge -->
                                          <div class="hidden lg:block">
                                             <span class="bg-yellow-100 px-2 py-1 text-yellow-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Promotions</span>
                                          </div>
                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">Mar 31</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveTen">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveTen" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashTen">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashTen" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailTen">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailTen" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailEleven">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailEleven" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="border-b border-gray-300 p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listEleven" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">YouTube</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   New comment on Designing The Perfect Accordion UI Design in Figma" Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe at in excepturi
                                                   quos ipsam atque odit.
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">Feb 24</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveEleven">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveEleven" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashEleven">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashEleven" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailEleven">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailEleven" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailTweleve">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailTweleve" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <!-- list group item -->
                                 <div class="p-4 list-mail">
                                    <div class="flex items-center">
                                       <!-- checkbox -->
                                       <div class="mr-2">
                                          <div class="flex items-center mb-1">
                                             <input
                                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                                type="checkbox"
                                                value=""
                                                id="listTwelve" />
                                          </div>
                                       </div>
                                       <!-- rating -->
                                       <div class="mr-2">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="12"
                                             height="12"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="#919eab"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-star">
                                             <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                          </svg>
                                       </div>

                                       <div class="flex items-center">
                                          <!-- title -->
                                          <div class="list-title">
                                             <a href="mail-details.html">Twitter</a>
                                          </div>
                                          <!-- text -->
                                          <div class="mr-6 2xl:w-1/2 xl:w-[20%] w-1/12">
                                             <a href="mail-details.html">
                                                <p class="list-text">
                                                   @getcodescandy, check out the notifications you have on Twitter Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe at in excepturi quos
                                                   ipsam atque odit.
                                                </p>
                                             </a>
                                          </div>

                                          <!-- time -->
                                          <div class="list-time">
                                             <p class="">Feb 20</p>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mail action -->
                                    <div class="actions-mail">
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="archiveTwelve">
                                          <i data-feather="archive" class="h-4 w-4"></i>
                                          <div id="archiveTwelve" class="hidden">
                                             <span>Archive</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="trashTwelve">
                                          <i data-feather="trash-2" class="h-4 w-4"></i>
                                          <div id="trashTwelve" class="hidden">
                                             <span>Delete</span>
                                          </div>
                                       </a>

                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="mailTwelve">
                                          <i data-feather="mail" class="h-4 w-4"></i>
                                          <div id="mailTwelve" class="hidden">
                                             <span>Mail</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="hiddenMailThirteen">
                                          <i data-feather="eye-off" class="h-4 w-4"></i>
                                          <div id="hiddenMailThirteen" class="hidden">
                                             <span>Hidden Mail</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="py-2 px-5 border-t border-gray-300 flex items-center justify-between">
                              <div>
                                 <p class="">Showing 1 20 of 289</p>
                              </div>
                              <div>
                                 <a href="#" class="btn btn-outline-white btn-sm btn-icon texttooltip" data-template="newerOne">
                                    <i data-feather="chevron-left" class="h-4 w-4"></i>
                                    <div id="newerOne" class="hidden">
                                       <span>Newer</span>
                                    </div>
                                 </a>
                                 <a href="#" class="btn btn-outline-white btn-sm btn-icon texttooltip" data-template="olderOne">
                                    <i data-feather="chevron-right" class="h-4 w-4"></i>
                                    <div id="olderOne" class="hidden">
                                       <span>Older</span>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
    @endsection