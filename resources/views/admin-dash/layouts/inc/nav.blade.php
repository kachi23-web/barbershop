<div id="app-layout" class="overflow-x-hidden flex">
            <!-- start navbar -->
            <nav class="navbar-vertical navbar">
               <div id="myScrollableElement" class="h-screen" data-simplebar>
                  <!-- brand logo -->
                  <a class="navbar-brand" href="index.html">
                     <img src="assets/images/brand/logo/logo.svg" alt="" />
                  </a>

                  <!-- navbar nav -->
                  <ul class="navbar-nav flex-col" id="sideNavbar">
                     <li class="nav-item">
                        <a class="nav-link collapsed" href="{{('admin-dash.index')}}" data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                           <i data-feather="home" class="w-4 h-4 mr-2"></i>
                           Dashboard
                        </a>
                  
                     <!-- Nav item -->
                     <li class="nav-item">
                        <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navEmail" aria-expanded="false" aria-controls="navEmail">
                           <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                           Email
                        </a>

                        <div id="navEmail" class="collapse" data-bs-parent="#sideNavbar">
                           <ul class="nav flex-col">
                              <li class="nav-item">
                                 <a class="nav-link" href="mail.html">Inbox</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="mail-details.html">Details</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="mail-draft.html">Draft</a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <!-- Nav item -->
                     
                     <!-- Nav item -->
                     <!-- Nav item -->
                   
                     <!-- Nav item -->
                     <li class="nav-item">
                        <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navinvoice" aria-expanded="false" aria-controls="navinvoice">
                           <i data-feather="clipboard" class="w-4 h-4 mr-2"></i>
                           Invoice
                        </a>

                        <div id="navinvoice" class="collapse" data-bs-parent="#sideNavbar">
                           <ul class="nav flex-col">
                              <li class="nav-item">
                                 <a class="nav-link" href="invoice-list.html">List</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="invoice-detail.html">Detail</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="invoice-generator.html">Invoice Generator</a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{('profile')}}"  data-bs-target="#navprofilePages" aria-expanded="false" aria-controls="navprofilePages">
                        <i data="edit" class="w-4 h-4 mr-2"></i>     
                        Profile</a>
                        
                     </li>
                     <!-- Nav item -->
                     <li class="nav-item">
                        <a class="nav-link collapsed" href="blog" data-bs-toggle="collapse" data-bs-target="#navblog" aria-expanded="false" aria-controls="navblog">
                           <i data-feather="edit" class="w-4 h-4 mr-2"></i>
                           Blog
                        </a>

                        <div id="navblog" class="collapse" data-bs-parent="#sideNavbar">
                           <ul class="nav flex-col">
                              <li class="nav-item">
                                 <a class="nav-link" href="blog-author.html">Author</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog-author-detail.html">Detail</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="create-blog-post.html">Create Post</a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     
                     
               </div>
            </nav>
            <!-- app layout content -->
            <div id="app-layout-content" class="relative min-h-screen w-full min-w-[100vw] md:min-w-0 ml-[15.625rem] [transition:margin_0.25s_ease-out]">
               <!-- start navbar -->
               <div class="header">
                  <!-- navbar -->
                  <nav class="bg-white px-6 py-[10px] flex items-center justify-between shadow-sm">
                     <a id="nav-toggle" href="#" class="text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                     </a>
                     <div class="ml-3 hidden md:hidden lg:block">
                        <!-- form -->
                        <form class="flex items-center">
                           <input
                              type="search"
                              class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                              placeholder="Search" />
                        </form>
                     </div>
                     <!-- navbar nav -->
                     <ul class="flex ml-auto items-center">
                        <li class="dropdown stopevent mr-2">
                           <a class="text-gray-600" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                              </svg>
                           </a>
                           <div class="dropdown-menu dropdown-menu-lg lg:left-auto lg:right-0" aria-labelledby="dropdownNotification">
                              <div>
                                 <div class="border-b px-3 pt-2 pb-3 flex justify-between items-center">
                                    <span class="text-lg text-gray-800 font-semibold">Notifications</span>
                                    <a href="#">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                             <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                       </span>
                                    </a>
                                 </div>
                                 <!-- list group -->
                                 <ul class="h-56" data-simplebar="">
                                    <!-- list group item -->
                                    <li class="bg-gray-100 px-3 py-2 border-b">
                                       <a href="#">
                                          <h5 class="mb-1">Rishi Chopra</h5>
                                          <p>Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.</p>
                                       </a>
                                    </li>
                                    <!-- list group item -->
                                    <li class="px-3 py-2 border-b">
                                       <a href="#">
                                          <h5 class="mb-1">Neha Kannned</h5>
                                          <p>Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.</p>
                                       </a>
                                    </li>
                                    <!-- list group item -->
                                    <li class="px-3 py-2 border-b">
                                       <a href="#">
                                          <h5 class="mb-1">Nirmala Chauhan</h5>
                                          <p>Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.</p>
                                       </a>
                                    </li>
                                    <!-- list group item -->
                                    <li class="px-3 py-2 border-b">
                                       <a href="#">
                                          <h5 class="mb-1">Sina Ray</h5>
                                          <p>Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.</p>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="border-t px-3 py-2 text-center">
                                    <a href="#" class="text-gray-800 font-semibold">View all Notifications</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!-- list -->
                        <li class="dropdown ml-2">
                           <a class="rounded-full" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <div class="w-10 h-10 relative">
                                 <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-full" />
                                 <div class="absolute border-gray-200 border-2 rounded-full right-0 bottom-0 bg-green-600 h-3 w-3"></div>
                              </div>
                           </a>
                           <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="dropdownUser">
                              <div class="px-4 pb-0 pt-2">
                                 <div class="leading-4">
                                    <h5 class="mb-1">John E. Grainger</h5>
                                    <a href="#">View my profile</a>
                                 </div>
                                 <div class="border-b mt-3 mb-2"></div>
                              </div>

                              <ul>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="w-4 h-4" data-feather="user"></i>
                                       Edit Profile
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="w-4 h-4" data-feather="activity"></i>
                                       Activity Log
                                    </a>
                                 </li>

                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="w-4 h-4" data-feather="star"></i>
                                       Go Pro
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="w-4 h-4" data-feather="settings"></i>
                                       Account Settings
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="index.html">
                                       <i class="w-4 h-4" data-feather="power"></i>
                                       Sign Out
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </nav>
               </div>
               <!-- end of navbar -->




                <!--  -->