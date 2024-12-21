
    @extends('admin-dash.layouts.admin')
            
            @section('content')
            <div class="px-6 pb-20 pt-6">
                  <div class="flex items-center mb-4 justify-between">
                     <!-- title -->
                     <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Draft</h1>
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
                           <div class="card-body py-32 text-center">
                              <img src="assets/images/svg/draft.svg" alt="Image" class="mb-6 mx-auto" />
                              <p class="text-gray-800 xl:text-2xl text-lg">There is no conversation</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endsection