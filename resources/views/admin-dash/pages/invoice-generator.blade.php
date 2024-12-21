
@extends('admin-dash.layouts.admin')
            
        @section('content')

<div class="px-6 pb-20 pt-6">
                  <div class="grid grid-cols-12 gap-6">
                     <div class="2xl:col-start-3 2xl:col-end-11 col-span-12">
                        <div class="card">
                           <!-- Page header -->
                           <div class="card-body">
                              <div class="grid grid-cols-12 justify-between md:mb-10 gap-6">
                                 <div class="lg:col-span-3 col-span-12">
                                    <a href="#">
                                       <img src="assets/images/brand/logo/logo-2.svg" alt="" />
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
                                 <div class="lg:col-span-9 col-span-12">
                                    <div class="flex gap-2 justify-end mb-2 items-center">
                                       <div class="flex-[0_0_auto]">
                                          <span>Invoice No:</span>
                                       </div>
                                       <div class="flex-[0_0_auto]">
                                          <input
                                             class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                             placeholder=""
                                             value="#DU120620" />
                                       </div>
                                    </div>
                                    <div class="flex gap-2 justify-end mb-2 items-center">
                                       <div class="flex-[0_0_auto]">
                                          <span>Invoice Date:</span>
                                       </div>
                                       <div class="flex-[0_0_auto]">
                                          <input
                                             class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none flatpickr"
                                             placeholder=""
                                             value="27 April 2023" />
                                       </div>
                                    </div>
                                    <div class="flex gap-2 justify-end mb-2 items-center">
                                       <div class="flex-[0_0_auto]">
                                          <span>Due Date:</span>
                                       </div>
                                       <div class="flex-[0_0_auto]">
                                          <input
                                             class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none flatpickr"
                                             placeholder=""
                                             value="29 April 2023" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="grid grid-cols-12 justify-between mb-8 gap-3">
                                 <div class="2xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12">
                                    <div class="mt-6">
                                       <span class="font-semibold">Invoice To</span>
                                       <textarea
                                          rows="3"
                                          class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mt-2"
                                          placeholder="Who is this invoice from?"></textarea>
                                    </div>
                                 </div>
                                 <div class="2xl:col-span-9 lg:col-span-4 md:col-span-6 col-span-12 lg:flex lg:justify-end">
                                    <div class="mt-6">
                                       <span class="font-semibold">Invoice From</span>
                                       <textarea
                                          rows="3"
                                          class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mt-2"
                                          placeholder="Who is this invoice from?"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
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
                                             <tr>
                                                <td class="w-2/5 px-6 py-3">
                                                   <input
                                                      type="text"
                                                      class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2"
                                                      placeholder="Product Name" />
                                                   <textarea
                                                      rows="2"
                                                      class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                                      placeholder="Product Description"></textarea>
                                                </td>
                                                <td class="px-6 py-3">
                                                   <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                                      <input type="button" value="-" class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300" data-field="quantity" />
                                                      <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                                      <input type="button" value="+" class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300" data-field="quantity" />
                                                   </div>
                                                </td>
                                                <td class="px-6 py-3">
                                                   <input
                                                      type="text"
                                                      class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2"
                                                      placeholder="$39" />
                                                </td>
                                                <td class="px-6 py-3">
                                                   <input
                                                      type="text"
                                                      class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none mb-2"
                                                      placeholder="$39" />
                                                </td>
                                             </tr>

                                             <tr>
                                                <td colspan="2" class="px-6 py-3"></td>
                                                <td class="px-6 py-3 border-b border-gray-300"><span class="text-gray-800">Sub Total</span></td>
                                                <td class="px-6 py-3 border-b border-gray-300"><span class="text-gray-800">$0.00</span></td>
                                             </tr>
                                             <tr>
                                                <td colspan="2" class="px-6 py-3"></td>
                                                <td class="px-6 py-3 border-b border-gray-300"><span class="text-gray-800">Net Amount</span></td>
                                                <td class="px-6 py-3 border-b border-gray-300"><span class="text-gray-800">$0.00</span></td>
                                             </tr>
                                             <tr>
                                                <td colspan="2" class="px-6 py-3"></td>
                                                <td class="px-6 py-3 border-b border-gray-300"><span class="text-gray-800">Tax*</span></td>
                                                <td class="px-6 py-3 border-b border-gray-300">
                                                   <div class="lg:flex mb-3">
                                                      <input
                                                         type="text"
                                                         class="border border-gray-300 text-gray-900 rounded-l-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                                         placeholder="0.00" />
                                                      <select
                                                         class="text-base py-2 px-4 block w-full border-gray-300 rounded-r-md -mx-px focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                                         <option selected>Flat($)</option>
                                                         <option value="1">Percent(%)</option>
                                                      </select>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td colspan="2" class="px-6 py-3"></td>
                                                <td class="px-6 py-3 border-b border-gray-300"><span class="text-gray-800 font-bold">Total paid</span></td>
                                                <td class="px-6 py-3 border-b border-gray-300"><span class="text-gray-800 font-bold">$0.00</span></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <div class="border-t pt-8">
                                       <div>
                                          <h5 class="mb-1">Notes:</h5>
                                          <textarea
                                             class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                             rows="4"
                                             placeholder="Terms and Condition"></textarea>
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