@extends('admin-dash.layouts.admin')
            
            @section('content')
            <div class="px-6 pb-20 pt-6">
                  <div class="grid grid-cols-1 items-center">
                     <div>
                        <!-- Bg -->
                        <div class="pt-24 rounded-t-lg" style="background: url{{asset('admin/assets/images/background/profile-cover.jpg')}} no-repeat; background-size: cover"></div>
                        <div class="card rounded-b-lg shadow-sm mb-5">
                           <div class="flex items-center justify-between pt-4 pb-6 px-4">
                              <div class="flex items-center">
                                 <!-- avatar -->
                                 <div class="w-24 h-24 mr-2 relative flex justify-end items-end -mt-10">
                                    <img src="assets/images/avatar/avatar-1.jpg" class="rounded-full border-4 border-white" alt="" />
                                    <span class="h-3 w-3 rounded-full flex items-center bg-green-600 absolute right-3 bottom-2"></span>
                                    <a href="#!" class="absolute top-0 right-0 mr-2" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Verified" data-bs-original-title="">
                                       <img src="assets/images/svg/checked-mark.svg" alt="" height="30" width="30" />
                                    </a>
                                 </div>

                                 <!-- text -->
                                 <div>
                                    <h1 class="text-lg">Jitu Chauhan</h1>
                                    <p class="block">@imjituchauhan</p>
                                 </div>
                              </div>
                              <div>
                                 <a
                                    href="#!"
                                    class="btn gap-x-2 bg-transparent text-indigo-600 border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:text-white hover:border-indigo-800 active:text-white active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 hidden md:block">
                                    Edit Profile
                                 </a>
                              </div>
                           </div>
                           <!-- nav -->
                           <ul class="nav nav-lt-tab" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" href="profile-overview.html">Overview</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="profile-project.html">Project</a>
                              </li>

                              <li class="nav-item">
                                 <a class="nav-link" href="profile-files.html">Files</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="profile-team.html">Team</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="profile-followers.html">Followers</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="profile-activity.html">Activity</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- content -->
                  <div>
                     <!-- row -->
                     <div class="grid grid-cols-12 gap-6">
                        <div class="2xl:col-span-6 col-span-12">
                           <!-- card -->
                           <div class="card h-full">
                              <!-- card body -->
                              <div class="px-6 py-3 border-b border-gray-300">
                                 <h4>About Me</h4>
                              </div>
                              <div class="card-body">
                                 <!-- card title -->

                                 <h5 class="text-uppercase">Bio</h5>
                                 <!-- text -->
                                 <p class="mt-2 mb-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen disse var ius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                    interdum nulla, ut commodo diam libero vitae erat.
                                 </p>
                                 <!-- row -->
                                 <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                       <!-- text -->
                                       <h5 class="text-uppercase">Position</h5>
                                       <p>Theme designer at Gumroad.</p>
                                    </div>
                                    <div class="col-span-6">
                                       <h5 class="text-uppercase">Phone</h5>
                                       <p>+32112345689</p>
                                    </div>
                                    <div class="col-span-6">
                                       <h5 class="text-uppercase">Date of Birth</h5>
                                       <p>01.10.1997</p>
                                    </div>
                                    <div class="col-span-6">
                                       <h5 class="text-uppercase">Email</h5>
                                       <p>Dashui@gmail.com</p>
                                    </div>
                                    <div class="col-span-6">
                                       <h5 class="text-uppercase">Location</h5>
                                       <p>Ahmedabad, India</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="2xl:col-span-6 col-span-12">
                           <!-- card -->
                           <div class="card">
                              <div class="px-6 py-3 border-b border-gray-300">
                                 <h4>Projects Contributions</h4>
                              </div>
                              <!-- card body -->
                              <div class="card-body">
                                 <!-- card title -->

                                 <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                       <div class="hidden md:block">
                                          <img src="{{asset('admin/assets/images/svg/brand-logo-1.svg')}}" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="md:ml-3">
                                          <h5 class="mb-1">
                                             <a href="#!" class="text-inherit">Slack Figma Design UI</a>
                                          </h5>
                                          <p>Project description and details about...</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center ml-10 mt-3">
                                       <!-- avatar group -->
                                       <div class="-space-x-3 flex items-center">
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="{{asset('admin/assets/images/avatar/avatar-11.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="{{asset('admin/assets/images/avatar/avatar-2.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="{{asset('admin/assets/images/avatar/avatar-3.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                       </div>
                                       <div>
                                          <!-- dropdown -->
                                          <div class="dropdown dropstart">
                                             <a
                                                href="#!"
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                id="dropdownprojectOne"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownprojectOne">
                                                <a class="dropdown-item flex items-center" href="#!">Action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Another action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Something else here</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                       <div class="hidden md:block">
                                          <!-- icon shape -->

                                          <img src="{{('admin/assets/images/svg/brand-logo-2.sv')}}g" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="md:ml-3">
                                          <h5 class="mb-1">
                                             <a href="#!" class="text-inherit">Design 3d Character</a>
                                          </h5>
                                          <p>Project description and details about...</p>
                                       </div>
                                    </div>

                                    <div class="flex items-center ml-10 mt-3">
                                       <!-- avatar group -->
                                       <div class="-space-x-3 flex items-center">
                                          <span>
                                             <!-- img -->
                                             <img alt="avatar" src="{{('admin/assets/images/avatar/avatar-4.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <span>
                                             <!-- img -->
                                             <img alt="avatar" src="{{('admin/assets/images/avatar/avatar-5.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <span>
                                             <!-- img -->
                                             <img alt="avatar" src="{{('admin/assets/images/avatar/avatar-6.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                       </div>
                                       <div>
                                          <!-- dropdown -->
                                          <div class="dropdown dropstart">
                                             <a
                                                href="#!"
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                id="dropdownprojectTwo"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownprojectTwo">
                                                <a class="dropdown-item flex items-center" href="#!">Action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Another action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Something else here</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                       <div class="hidden md:block">
                                          <!-- icon shape -->

                                          <img src="{{asset('admin/assets/images/svg/brand-logo-3.svg')}}" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="md:ml-3">
                                          <h5 class="mb-1">
                                             <a href="#!" class="text-inherit">Github Development</a>
                                          </h5>
                                          <p>Project description and details about...</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center ml-10 mt-3">
                                       <!-- avatar group -->
                                       <div class="-space-x-3 flex items-center">
                                          <span>
                                             <!-- img -->
                                             <img alt="avatar" src="{{asset('admin/assets/images/avatar/avatar-7.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <span>
                                             <!-- img -->
                                             <img alt="avatar" src="{{asset('admin/assets/images/avatar/avatar-8.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <span>
                                             <!-- img -->
                                             <img alt="avatar" src="{{asset('admin/assets/images/avatar/avatar-9.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                       </div>
                                       <div>
                                          <!-- dropdown -->
                                          <div class="dropdown dropstart">
                                             <a
                                                href="#!"
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                id="dropdownprojectThree"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownprojectThree">
                                                <a class="dropdown-item flex items-center" href="#!">Action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Another action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Something else here</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                       <!-- icon shape -->
                                       <div class="hidden md:block">
                                          <img src="{{asset('assets/images/svg/brand-logo-4.svg')}}" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="md:ml-3">
                                          <h5 class="mb-1">
                                             <a href="#!" class="text-inherit">Dropbox Design System</a>
                                          </h5>
                                          <p>Project description and details about...</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center ml-10 mt-3">
                                       <!-- avatar group -->
                                       <div class="-space-x-3 flex items-center">
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="{{asset('assets/images/avatar/avatar-10.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="{{asset('assets/images/avatar/avatar-11.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="{{asset('assets/images/avatar/avatar-12.jpg')}}" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                       </div>
                                       <div>
                                          <!-- dropdown -->
                                          <div class="dropdown dropstart">
                                             <a
                                                href="#!"
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                id="dropdownprojectFour"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownprojectFour">
                                                <a class="dropdown-item flex items-center" href="#!">Action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Another action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Something else here</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                       <!-- icon shape -->
                                       <div class="hidden md:block">
                                          <img src="assets/images/svg/brand-logo-5.svg" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="md:ml-3">
                                          <h5 class="mb-1">
                                             <a href="#!" class="text-inherit">Project Management</a>
                                          </h5>
                                          <p>Project description and details about...</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center ml-10 mt-3">
                                       <!-- avatar group -->
                                       <div class="-space-x-3 flex items-center">
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="assets/images/avatar/avatar-13.jpg" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="assets/images/avatar/avatar-14.jpg" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                          <!-- img -->
                                          <span>
                                             <img alt="avatar" src="assets/images/avatar/avatar-15.jpg" class="h-7 max-w-7 rounded-full" />
                                          </span>
                                       </div>
                                       <div>
                                          <!-- dropdown -->
                                          <div class="dropdown dropstart">
                                             <a
                                                href="#!"
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                id="dropdownprojectFoufive"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="dropdownprojectFoufive">
                                                <a class="dropdown-item flex items-center" href="#!">Action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Another action</a>
                                                <a class="dropdown-item flex items-center" href="#!">Something else here</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="2xl:col-span-6 col-span-12 mb-5">
                           <!-- card -->
                           <div class="card">
                              <!-- card body -->
                              <div class="card-body">
                                 <div class="flex justify-between mb-5 items-center">
                                    <!-- avatar -->
                                    <div class="flex items-center">
                                       <div>
                                          <img src="assets/images/avatar/avatar-3.jpg" alt="Image" class="h-10 max-w-10 rounded-full" />
                                       </div>
                                       <div class="ml-3">
                                          <h5>Jitu Chauhan</h5>
                                          <p>19 minutes ago</p>
                                       </div>
                                    </div>
                                    <div>
                                       <!-- dropdown -->
                                       <div class="dropdown dropstart">
                                          <a
                                             href="#!"
                                             class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                             id="dropdownprojectFive"
                                             data-bs-toggle="dropdown"
                                             aria-haspopup="true"
                                             aria-expanded="false">
                                             <i data-feather="more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="dropdownprojectFive">
                                             <a class="dropdown-item flex items-center" href="#!">Action</a>
                                             <a class="dropdown-item flex items-center" href="#!">Another action</a>
                                             <a class="dropdown-item flex items-center" href="#!">Something else here</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4">
                                    <!-- text -->
                                    <p class="mb-4">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen disse var ius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                       interdum nulla, ut commodo diam libero vitae erat.
                                    </p>
                                    <img src="assets/images/blog/blog-img-4.jpg" class="rounded-lg w-full" alt="Image" />
                                 </div>
                                 <!-- icons -->
                                 <div class="mb-4 flex items-center gap-6">
                                    <span class="flex items-center gap-1">
                                       <i data-feather="heart" class="h-4 w-4 text-gray-500"></i>
                                       <span>20 Like</span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                       <i data-feather="message-square" class="h-4 w-4 text-gray-500"></i>
                                       <span>12 Comment</span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                       <i data-feather="share-2" class="h-4 w-4 text-gray-500 mr-2"></i>
                                       <span>Share</span>
                                    </span>
                                 </div>
                                 <div class="border-b border-t border-gray-300 py-5 flex items-center mb-4">
                                    <!-- avatar group -->
                                    <div class="-space-x-3 flex items-center mr-3">
                                       <span>
                                          <!-- img -->
                                          <img alt="avatar" src="assets/images/avatar/avatar-7.jpg" class="h-7 max-w-7 rounded-full" />
                                       </span>
                                       <span>
                                          <!-- img -->
                                          <img alt="avatar" src="assets/images/avatar/avatar-8.jpg" class="h-7 max-w-7 rounded-full" />
                                       </span>
                                       <span>
                                          <!-- img -->
                                          <img alt="avatar" src="assets/images/avatar/avatar-9.jpg" class="h-7 max-w-7 rounded-full" />
                                       </span>
                                    </div>
                                    <div><span>You and 20 more liked this</span></div>
                                 </div>
                                 <!-- row -->
                                 <div class="grid grid-cols-12">
                                    <div class="2xl:col-span-1 col-span-2 mb-3 lg:mb-0">
                                       <!-- avatar -->
                                       <img src="assets/images/avatar/avatar-11.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                    </div>
                                    <!-- input -->
                                    <div class="2xl:col-span-11 lg:col-span-10 md:col-span-9 col-span-10">
                                       <div class="grid grid-cols-12 gap-3 items-center">
                                          <div class="md:col-span-10 2xl:col-span-10 col-span-9">
                                             <input
                                                type="password"
                                                id="name"
                                                class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-describedby="name" />
                                          </div>
                                          <div class="md:col-span-2 2xl:col-span-2 grid col-span-3">
                                             <button
                                                type="submit"
                                                class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                Post
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="2xl:col-span-6 col-span-12 mb-5">
                           <!-- card -->
                           <div class="card mb-5">
                              <!-- card body -->
                              <div class="px-6 py-3 border-b border-gray-300">
                                 <h4>My Team</h4>
                              </div>

                              <div class="card-body">
                                 <!-- card title -->

                                 <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                       <!-- img -->
                                       <div>
                                          <img src="assets/images/avatar/avatar-11.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="ml-3">
                                          <h5 class="mb-1">Dianna Smiley</h5>
                                          <p class="text-gray-500">UI / UX Designer</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center">
                                       <!-- icons -->
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="callOne">
                                          <i data-feather="phone-call"></i>
                                          <div id="callOne" class="hidden">
                                             <span>Call</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="videoOne">
                                          <i data-feather="video"></i>
                                          <div id="videoOne" class="hidden">
                                             <span>Video</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                       <!-- img -->
                                       <div>
                                          <img src="assets/images/avatar/avatar-2.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                       </div>
                                       <!-- content -->
                                       <div class="ml-3">
                                          <h5 class="mb-1">Anne Brewer</h5>
                                          <p class="text-gray-500">Senior UX Designer</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center">
                                       <!-- icons -->
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="callTwo">
                                          <i data-feather="phone-call"></i>
                                          <div id="callTwo" class="hidden">
                                             <span>Call</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="videoTwo">
                                          <i data-feather="video"></i>
                                          <div id="videoTwo" class="hidden">
                                             <span>Video</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                       <!-- img -->
                                       <div>
                                          <img src="assets/images/avatar/avatar-3.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="ml-3">
                                          <h5 class="mb-1">Richard Christmas</h5>
                                          <p class="text-gray-500">Front-End Engineer</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center">
                                       <!-- icons -->
                                       <!-- icons -->
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="callThree">
                                          <i data-feather="phone-call"></i>
                                          <div id="callThree" class="hidden">
                                             <span>Call</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="videoThree">
                                          <i data-feather="video"></i>
                                          <div id="videoThree" class="hidden">
                                             <span>Video</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="flex justify-between items-center">
                                    <!-- img -->
                                    <div class="flex items-center">
                                       <div>
                                          <img src="assets/images/avatar/avatar-4.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                       </div>
                                       <!-- text -->
                                       <div class="ml-3">
                                          <h5 class="mb-1">Nicholas Binder</h5>
                                          <p class="text-gray-500">Content Marketing Manager</p>
                                       </div>
                                    </div>
                                    <div class="flex items-center">
                                       <!-- icons -->
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="callFour">
                                          <i data-feather="phone-call"></i>
                                          <div id="callFour" class="hidden">
                                             <span>Call</span>
                                          </div>
                                       </a>
                                       <a
                                          href="#!"
                                          class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm texttooltip"
                                          data-template="videoFour">
                                          <i data-feather="video"></i>
                                          <div id="videoFour" class="hidden">
                                             <span>Video</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="grid grid-cols-1">
                              <!-- card -->
                              <div class="card">
                                 <!-- card body -->
                                 <div class="px-6 py-3 border-b border-gray-300">
                                    <h4>Activity Feed</h4>
                                 </div>
                                 <div class="card-body">
                                    <!-- card title -->

                                    <div class="flex mb-5">
                                       <!-- img -->
                                       <div>
                                          <img src="assets/images/avatar/avatar-6.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                       </div>
                                       <!-- content -->
                                       <div class="ml-3">
                                          <h5 class="mb-1">Dianna Smiley</h5>
                                          <p class="text-gray-500 mb-2">Just create a new Project in Dashui...</p>
                                          <p class="">2m ago</p>
                                       </div>
                                    </div>
                                    <div class="flex mb-5">
                                       <!-- img -->
                                       <div>
                                          <img src="assets/images/avatar/avatar-7.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                       </div>
                                       <!-- content -->
                                       <div class="ml-3">
                                          <h5 class="mb-1">Irene Hargrove</h5>
                                          <p class="text-gray-500 mb-2">Comment on Bootstrap Tutorial Says Hi, I m irene...</p>
                                          <p class="">1hour ago</p>
                                       </div>
                                    </div>
                                    <div class="flex">
                                       <!-- img -->
                                       <div>
                                          <img src="assets/images/avatar/avatar-9.jpg" class="h-10 max-w-10 rounded-full" alt="Image" />
                                       </div>
                                       <!-- content -->
                                       <div class="ml-3">
                                          <h5 class="mb-1">Trevor Bradley</h5>
                                          <p class="text-gray-500 mb-2">Just share your article on Social Media..</p>
                                          <p>2month ago</p>
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