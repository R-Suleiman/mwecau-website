@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = 'null';
    @endphp

    <section class="w-full p-4">
        <h2 class="bg-header text-center text-blue-800 text-3xl my-8">Eating a Healthy Meal</h2>

        <div class="w-full lg:w-10/12 mx-auto flex flex-col lg:flex-row border-box gap-4">
            <div class="w-full lg:w-3/5 text-justify text-default-text text-lg p-2">
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nisi illum est cum, ducimus
                    odio, quis doloremque molestias quos possimus corrupti, magni adipisci sint error laboriosam quibusdam
                    officiis. Id, necessitatibus.Facilis sed quos nostrum sapiente dicta, quia impedit nemo tenetur quas id
                    deleniti et cumque, asperiores at eveniet officia. Similique, iste perspiciatis. Ratione obcaecati
                    veritatis consequuntur! Sapiente perspiciatis exercitationem dolorum.</p>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nisi illum est cum, ducimus
                    odio, quis doloremque molestias quos possimus corrupti, magni adipisci sint error laboriosam quibusdam
                    officiis. Id, necessitatibus.Facilis sed quos nostrum sapiente dicta, quia impedit nemo tenetur quas id
                    deleniti et cumque, asperiores at eveniet officia. Similique, iste perspiciatis. Ratione obcaecati
                    veritatis consequuntur! Sapiente perspiciatis exercitationem dolorum.</p>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nisi illum est cum, ducimus
                    odio, quis doloremque molestias quos possimus corrupti, magni adipisci sint error laboriosam quibusdam
                    officiis. Id, necessitatibus.Facilis sed quos nostrum sapiente dicta, quia impedit nemo tenetur quas id
                    deleniti et cumque, asperiores at eveniet officia. Similique, iste perspiciatis. Ratione obcaecati
                    veritatis consequuntur! Sapiente perspiciatis exercitationem dolorum.</p>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nisi illum est cum, ducimus
                    odio, quis doloremque molestias quos possimus corrupti, magni adipisci sint error laboriosam quibusdam
                    officiis. Id, necessitatibus.Facilis sed quos nostrum sapiente dicta, quia impedit nemo tenetur quas id
                    deleniti et cumque, asperiores at eveniet officia. Similique, iste perspiciatis. Ratione obcaecati
                    veritatis consequuntur! Sapiente perspiciatis exercitationem dolorum.</p>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nisi illum est cum, ducimus
                    odio, quis doloremque molestias quos possimus corrupti, magni adipisci sint error laboriosam quibusdam
                    officiis. Id, necessitatibus.Facilis sed quos nostrum sapiente dicta, quia impedit nemo tenetur quas id
                    deleniti et cumque, asperiores at eveniet officia. Similique, iste perspiciatis. Ratione obcaecati
                    veritatis consequuntur! Sapiente perspiciatis exercitationem dolorum.</p>
            </div>
            <div class="w-full lg:w-2/5 py-4 px-8">
                <div class="flex flex-col items-center w-max mb-4">
                    <h2 class="text-center text-blue-800">Event Details</h2>
                    <div class="mt-3 border border-purple-500 w-3/5"></div>
                </div>

                <div class="w-full mx-auto">
                    <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="event image" class="w-full">
                </div>
                <div class="w-full event-details">
                    <ul class="my-4">
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Date:
                            </span>Friday, 22 April 2024</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Time:
                            </span>06.00 - 11.00</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Location:
                            </span>Mwenge Catholic University</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Organizer :
                            </span>Mwenge Catholic University</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Phone:
                            </span>123456789</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Email:
                            </span>test@email.com</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- related events --}}
        <div class="w-10/12 mx-auto my-6">
            <div class="flex flex-col items-center w-max mb-4">
                <h2 class="uppercase text-2xl text-center text-blue-800">Related Events</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="events w-full">
                <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300">
                    <a href="{{ route('health.view-event', 1) }}">
                        <div class="w-full mb-2 overflow-hidden">
                            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                        </div>
                        <div class="w-full mt-2 p-2 text-justify">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold"> News Title</h4>
                            <span class="my-4 text-gray-400 text-sm"><i class="fa fa-calendar"></i> 12 April, 2024</span>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium
                                nostrum</p>
                        </div>
                    </a>
                </div>
                <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300">
                    <a href="{{ route('health.view-event', 1) }}">
                        <div class="w-full mb-2 overflow-hidden">
                            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                        </div>
                        <div class="w-full mt-2 p-2 text-justify">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold"> News Title</h4>
                            <span class="my-4 text-gray-400 text-sm"><i class="fa fa-calendar"></i> 12 April, 2024</span>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium
                                nostrum</p>
                        </div>
                    </a>
                </div>
                <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300">
                    <a href="{{ route('health.view-event', 1) }}">
                        <div class="w-full mb-2 overflow-hidden">
                            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                        </div>
                        <div class="w-full mt-2 p-2 text-justify">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold"> News Title</h4>
                            <span class="my-4 text-gray-400 text-sm"><i class="fa fa-calendar"></i> 12 April, 2024</span>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium
                                nostrum</p>
                        </div>
                    </a>
                </div>
                <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300">
                    <a href="{{ route('health.view-event', 1) }}">
                        <div class="w-full mb-2 overflow-hidden">
                            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                        </div>
                        <div class="w-full mt-2 p-2 text-justify">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold"> News Title</h4>
                            <span class="my-4 text-gray-400 text-sm"><i class="fa fa-calendar"></i> 12 April, 2024</span>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium
                                nostrum</p>
                        </div>
                    </a>
                </div>
                <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300">
                    <a href="{{ route('health.view-event', 1) }}">
                        <div class="w-full mb-2 overflow-hidden">
                            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                        </div>
                        <div class="w-full mt-2 p-2 text-justify">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold"> News Title</h4>
                            <span class="my-4 text-gray-400 text-sm"><i class="fa fa-calendar"></i> 12 April, 2024</span>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium
                                nostrum</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
