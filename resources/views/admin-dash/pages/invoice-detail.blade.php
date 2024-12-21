

@extends('admin-dash.layouts.admin')
            
        @section('content')

        <div class="px-6 pb-20 pt-6">
          <div class="grid grid-cols-12">
                     <div class="2xl:col-start-3 2xl:col-end-11 col-span-12">
                        <div class="card" id="invoice">
                           <!-- Page header -->
                           <div class="card-body">
                              <div class="grid grid-cols-12 justify-between md:mb-10">
                                 <div class="lg:col-span-3 md:col-span-6 col-span-12">
                                    <a href="#">
                                       <img src="assets/images/brand/logo/logo-2.svg" alt="" class="text-inverse" />
                                    </a>
                                    <div class="mt-6">
                                       <span class="font-semibold">Address</span>
                                       <p class="mt-2">
                                          4333 Edwards Rd undefined Erie,
                                          <br />
                                          Oklahoma, United States
                                          <br />
                                          Legal Registration No:123345
                                       </p>
                                    </div>
                                 </div>
                                 <div class="lg:col-span-9 md:col-span-6 col-span-12 flex md:justify-end">
                                    <ul class="list-unstyled">
                                       <li class="mb-1">
                                          <span>Invoice No. :</span>
                                          <span class="ml-2 text-gray-900">#DU120620</span>
                                       </li>
                                       <li class="mb-1">
                                          <span>Invoice date :</span>
                                          <span class="ml-2 text-gray-900">27 April 2023</span>
                                       </li>
                                       <li class="mb-1">
                                          <span>Due Date :</span>
                                          <span class="ml-2 text-gray-900">6 May 2023</span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="grid grid-cols-12 justify-between mb-8">
                                 <div class="lg:col-span-3 md:col-span-6 col-span-12">
                                    <div class="mt-6">
                                       <span class="font-semibold">Invoice To</span>
                                       <h4>Robert Hernandez</h4>
                                       <p class="mt-2 mb-2">
                                          4333 Edwards Rdundefined
                                          <br />
                                          Erie, Oklahoma 14355,
                                          <br />
                                          United States
                                       </p>
                                       <span>(123) 456-7890</span>
                                       <br />
                                       <span class="font-semibold">roberthernandez@gmail.com</span>
                                    </div>
                                 </div>
                                 <div class="lg:col-span-9 md:col-span-6 col-span-12 flex md:justify-end">
                                    <div class="mt-6">
                                       <span class="font-semibold">Invoice From</span>
                                       <h4>Susan Hartness</h4>
                                       <p class="mt-2 mb-2">
                                          4333 Edwards Rdundefined
                                          <br />
                                          Erie, Oklahoma
                                          <br />
                                          14355 United States
                                       </p>
                                       <span>+1 (123) 456 7891</span>
                                       <br />
                                       <span class="font-semibold">dashui@example.com</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="grid grid-cols-1">
                                 <div class="relative overflow-x-auto">
                                    <table class="text-left w-full whitespace-nowrap">
                                       <thead class="bg-gray-200 text-gray-700">
                                          <tr>
                                             <th class="px-6 py-3">Product Description</th>
                                             <th class="px-6 py-3">Quantity</th>
                                             <th class="px-6 py-3">Unit Price</th>
                                             <th class="px-6 py-3">Amount (USD)</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="border-gray-300 border-b">
                                             <td class="px-6 py-3">
                                                <h5 class="">Web Design</h5>
                                                <p class="">Lorem ipsum dolor sit amet, consectetur.</p>
                                             </td>
                                             <td class="px-6 py-3">1</td>
                                             <td class="px-6 py-3">$39.00</td>
                                             <td class="px-6 py-3">$39.00</td>
                                          </tr>
                                          <tr class="border-gray-300 border-b">
                                             <td class="px-6 py-3">
                                                <h5 class="">Web Development</h5>
                                                <p class="">Fusce in sem placerat, dictum tellus nec.</p>
                                             </td>
                                             <td class="px-6 py-3">1</td>
                                             <td class="px-6 py-3">$99.00</td>
                                             <td class="px-6 py-3">$99.00</td>
                                          </tr>
                                          <tr class="border-gray-300 border-b">
                                             <td class="px-6 py-3">
                                                <h5 class="">Social Media Marketing</h5>
                                                <p class="">Fusce eleifend tortor in lacinia dictum.</p>
                                             </td>
                                             <td class="px-6 py-3">1</td>
                                             <td class="px-6 py-3">$49.00</td>
                                             <td class="px-6 py-3">$49.00</td>
                                          </tr>
                                          <tr>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3 border-gray-300 border-b"><span class="text-gray-900">Sub Total</span></td>
                                             <td class="px-6 py-3 border-gray-300 border-b"><span class="text-gray-900">$117.00</span></td>
                                          </tr>
                                          <tr>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3 border-gray-300 border-b"><span class="text-gray-900">Net Amount</span></td>
                                             <td class="px-6 py-3 border-gray-300 border-b"><span class="text-gray-900">$117.00</span></td>
                                          </tr>
                                          <tr>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3 border-gray-300 border-b"><span class="text-gray-900">Tax*</span></td>
                                             <td class="px-6 py-3 border-gray-300 border-b"><span class="text-gray-900">$2.00</span></td>
                                          </tr>
                                          <tr>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3"></td>
                                             <td class="px-6 py-3"><span class="text-gray-900 font-bold">Total paid</span></td>
                                             <td class="px-6 py-3"><span class="text-gray-900 font-bold">$115.00</span></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="border-t border-gray-300 pt-8">
                                    <div>
                                       <h5 class="mb-1">Notes:</h5>
                                       <p class="">
                                          All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within
                                          7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.
                                       </p>
                                    </div>
                                    <div class="mt-6">
                                       <a
                                          href="#"
                                          class="btn gap-x-2 bg-indigo-600 text-white border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 print-link no-print">
                                          Print
                                       </a>
                                       <a
                                          href="#"
                                          class="btn gap-x-2 bg-red-600 text-white border-red-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-red-700 hover:border-red-700 active:bg-red-700 active:border-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 ml-2">
                                          Download
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
        </div>
        @endsection