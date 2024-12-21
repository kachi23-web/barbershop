
@extends('admin-dash.layouts.admin')
            
        @section('content')

 <div class="px-6 pb-20 pt-6">
                  <div class="mb-4">
                     <!-- title -->
                     <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Invoice</h1>
                  </div>
                  <!-- row -->

                  <!-- Card body -->
                  <div class="grid xl:grid-cols-4 lg:grid-cols-2 col-span-1 gap-6 mb-6">
                     <div class="card card-lift">
                        <div class="card-body">
                           <div class="flex items-center justify-between mb-5">
                              <div class="h-10 w-10 flex items-center justify-center bg-yellow-100 text-yellow-800 rounded-lg">
                                 <i data-feather="users" class="h-4 w-4 inline-flex"></i>
                              </div>
                              <div>
                                 <span class="text-green-600">
                                    <i data-feather="arrow-up-right" class="h-4 w-4 inline-flex"></i>
                                    +9.18 %
                                 </span>
                              </div>
                           </div>
                           <div>
                              <span class="font-semibold">Clients</span>
                              <h3 class="font-bold">
                                 <span class="counter-value" data-target="3156">0</span>
                              </h3>
                           </div>
                        </div>
                     </div>

                     <div class="card card-lift">
                        <div class="card-body">
                           <div class="flex items-center justify-between mb-5">
                              <div class="h-10 w-10 flex items-center justify-center bg-cyan-100 text-cyan-800 rounded-lg">
                                 <i data-feather="file-text" class="h-4 w-4 inline-flex"></i>
                              </div>
                              <div>
                                 <span class="text-red-600">
                                    <i data-feather="arrow-down-right" class="h-4 w-4 inline-flex"></i>
                                    -3.18 %
                                 </span>
                              </div>
                           </div>
                           <div>
                              <span class="font-semibold">Invoices</span>
                              <h3 class="font-bold">
                                 <span class="counter-value" data-target="167">0</span>
                              </h3>
                           </div>
                        </div>
                     </div>

                     <div class="card card-lift">
                        <div class="card-body">
                           <div class="flex items-center justify-between mb-5">
                              <div class="h-10 w-10 flex items-center justify-center bg-red-100 text-red-800 rounded-lg">
                                 <i data-feather="heart" class="h-4 w-4 inline-flex"></i>
                              </div>
                              <div>
                                 <span class="text-green-600">
                                    <i data-feather="arrow-up-right" class="h-4 w-4 inline-flex"></i>
                                    +183
                                 </span>
                              </div>
                           </div>
                           <div>
                              <span class="font-semibold">Sent Invoiced</span>
                              <h3 class="font-bold">
                                 $
                                 <span class="counter-value" data-target="41.56">0</span>
                                 k
                              </h3>
                           </div>
                        </div>
                     </div>

                     <div class="card card-lift">
                        <div class="card-body">
                           <div class="flex items-center justify-between mb-5">
                              <div class="h-10 w-10 flex items-center justify-center bg-indigo-100 text-indigo-800 rounded-lg">
                                 <i data-feather="activity" class="h-4 w-4 inline-flex"></i>
                              </div>
                              <div>
                                 <span class="text-green-600">
                                    <i data-feather="arrow-up-right" class="h-4 w-4 inline-flex"></i>
                                    +6.18 %
                                 </span>
                              </div>
                           </div>
                           <div>
                              <span class="font-semibold">Paid</span>
                              <h3 class="font-bold">
                                 $
                                 <span class="counter-value" data-target="33.16">0</span>
                                 k
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="grid grid-cols-1">
                     <div class="card" id="listjs" data-list="check_all,invoices,status,customer_info,date,email,amount,action_info">
                        <div class="border-b border-gray-300 px-5 py-3">
                           <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center mb-4 gap-3">
                              <a
                                 href="invoice-generator.html"
                                 class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                 + Create New Invoice
                              </a>
                              <div class="flex">
                                 <select
                                    class="md:w-60 text-base py-2 px-4 block w-full border-gray-300 rounded-md focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                    <option selected>Status</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                                 <a
                                    href="#!"
                                    class="btn gap-x-2 bg-red-600 text-white border-red-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-red-700 hover:border-red-700 active:bg-red-700 active:border-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 btn-icon ml-2 texttooltip"
                                    data-template="trashOne">
                                    <i data-feather="trash-2" class="h-4 w-4 inline-flex"></i>
                                    <div id="trashOne" class="hidden">
                                       <span>Delete</span>
                                    </div>
                                 </a>
                              </div>
                           </div>

                           <div class="btn-toolbar flex flex-col lg:flex-row lg:justify-between lg:items-center mb-4 gap-3">
                              <div class="flex">
                                 <label class="leading-[1.7] p-2 px-3 border flex items-center justify-center bg-gray-200 border-gray-300 rounded-l-md">Search</label>
                                 <input
                                    type="search"
                                    class="border border-l-0 border-gray-300 text-gray-900 rounded-r-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none listjs-search" />
                              </div>

                              <div class="ml-auto flex">
                                 <label class="leading-[1.7] p-2 px-3 border border-r-0 flex items-center justify-center bg-gray-200 border-gray-300 rounded-l-md">Show</label>
                                 <select
                                    class="text-base py-2 px-4 block w-40 border-gray-300 focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
                                    id="listjs-items-per-page">
                                    <option value="10" selected>10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                 </select>
                                 <label class="-ml-px leading-[1.7] p-2 px-3 border border-l-0 flex items-center justify-center bg-gray-200 border-gray-300 rounded-r-md">items</label>
                              </div>
                           </div>
                        </div>

                        <div class="relative overflow-x-auto">
                           <table class="text-left w-full whitespace-nowrap">
                              <thead class="bg-gray-200 text-gray-700">
                                 <tr class="border-b border-gray-300">
                                    <th class="listjs-sorter px-6 py-3" data-sort="check_all">
                                       <div class="flex items-center mb-1">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="checkAll" />
                                          <label for="checkAll"></label>
                                       </div>
                                    </th>
                                    <th class="listjs-sorter px-6 py-3" data-sort="invoices">Invoices</th>
                                    <th class="listjs-sorter px-6 py-3" data-sort="status">Status</th>
                                    <th class="listjs-sorter px-6 py-3" data-sort="customer_info">Customer Info</th>
                                    <th class="listjs-sorter px-6 py-3" data-sort="date">Date</th>
                                    <th class="listjs-sorter px-6 py-3" data-sort="email">Email</th>
                                    <th class="listjs-sorter px-6 py-3" data-sort="amount">Amount</th>
                                    <th class="listjs-sorter px-6 py-3" data-sort="action_info">Action</th>
                                 </tr>
                              </thead>
                              <tbody class="list">
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox2" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox2"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88120</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-yellow-100 px-2 py-1 text-yellow-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Pending</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-11.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Jan Harmon</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">19 Apr 2023</td>

                                    <td class="px-6 py-3 email">michaelbaggett@dayrep.com</td>
                                    <td class="px-6 py-3 amount">$35.99</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox3" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox3"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88119</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-2.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Helen Mullins</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">18 Apr 2023</td>

                                    <td class="px-6 py-3 email">helenmullins@dayrep.com</td>
                                    <td class="px-6 py-3 amount">$135.99</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox12" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox12"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88118</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-3.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Agnes Addison</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">16 Apr 2023</td>

                                    <td class="px-6 py-3 email">agnesaddison@gmail.com</td>
                                    <td class="px-6 py-3 amount">$235.99</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox4" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox4"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88117</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-4.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Justin Holtz</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">16 Apr 2023</td>

                                    <td class="px-6 py-3 email">justinholtz@gmail.com</td>
                                    <td class="px-6 py-3 amount">$235.23</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox5" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox5"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88116</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-5.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Lamont Laurel</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">15 Apr 2023</td>

                                    <td class="px-6 py-3 email">lamontlaurel@gmail.com</td>
                                    <td class="px-6 py-3 amount">$789.18</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox6" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox6"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88115</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-6.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Maria Velez</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">15 Apr 2023</td>

                                    <td class="px-6 py-3 email">mariavelez@gmail.com</td>
                                    <td class="px-6 py-3 amount">$35.99</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox7" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox7"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88114</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-red-100 px-2 py-1 text-red-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Refunded</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-7.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Marty Perez</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">14 Apr 2023</td>

                                    <td class="px-6 py-3 email">martyperez@gmail.com</td>
                                    <td class="px-6 py-3 amount">$135.99</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox8" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox8"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88113</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-yellow-100 px-2 py-1 text-yellow-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Pending</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-8.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Edgar Elliot</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">14 Apr 2023</td>

                                    <td class="px-6 py-3 email">edgarelliott@dayrep.com</td>
                                    <td class="px-6 py-3 amount">$490.00</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox9" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox9"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88112</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-9.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Debra Montoya</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">13 Apr 2023</td>

                                    <td class="px-6 py-3 email">debramontoya@teleworm.us</td>
                                    <td class="px-6 py-3 amount">$49.00</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox10" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox10"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88111</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-10.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Lonnie Gordon</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">13 Apr 2023</td>

                                    <td class="px-6 py-3 email">lonniegordon@jourrapide.com</td>
                                    <td class="px-6 py-3 amount">$149.00</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3 check_all">
                                       <div class="flex">
                                          <input
                                             class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                             type="checkbox"
                                             value=""
                                             id="contactCheckbox11" />
                                          <label class="text-gray-500 ml-3" for="contactCheckbox11"></label>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 invoices">
                                       <a href="#!" class="text-indigo-600">#88110</a>
                                    </td>
                                    <td class="px-6 py-3 status">
                                       <span class="bg-green-100 px-2 py-1 text-green-900 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                    <td class="px-6 py-3 customer_info">
                                       <div class="flex items-center">
                                          <a href="#!"><img src="assets/images/avatar/avatar-11.jpg" alt="Image" class="h-8 max-w-8 rounded-full" /></a>
                                          <div class="ml-2">
                                             <h5 class=""><a href="#!" class="text-inherit">Alison Romaine</a></h5>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-3 date">13 Apr 2023</td>

                                    <td class="px-6 py-3 email">alisonromaine@dayrep.com</td>
                                    <td class="px-6 py-3 amount">$129.00</td>
                                    <td class="px-6 py-3 action_info">
                                       <div>
                                          <div class="dropdown">
                                             <a
                                                class="btn rounded-full h-8 w-8 flex items-center gap-x-2 bg-transparent text-gray-600 border-transparent border disabled:opacity-50 disabled:pointer-events-none hover:text-gray-800 hover:bg-gray-300 hover:border-gray-300 active:bg-gray-300 active:border-gray-300 active:text-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 btn-sm"
                                                href="#!"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" class="h-3 w-3 inline-flex"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="eye"></i>
                                                   View
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="edit"></i>
                                                   Edit
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="download"></i>
                                                   Download
                                                </a>

                                                <a class="dropdown-item flex items-center" href="#!">
                                                   <i class="mr-2 h-3 w-3" data-feather="trash-2"></i>
                                                   Delete
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="btn-toolbar flex flex-col md:flex-row justify-between items-center px-6 py-4 gap-2">
                           <p class="" id="listjs-showing-items-label">Showing 100 items</p>
                           <div class="pagination-buttons flex gap-2">
                              <button
                                 class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 prev">
                                 Previous
                              </button>

                              <ul class="pagination flex gap-2"></ul>
                              <button
                                 class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 next">
                                 Next
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

         @endsection