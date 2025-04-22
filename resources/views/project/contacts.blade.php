@extends('layouts.project.project-layout')

@section('content')
    <section class="w-full  px-4 pt-10 md:py-10 my-4 flex flex-col items-center">
        <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
            <h2 class="uppercase text-2xl text-center text-blue-800">Contact Us</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>
        <div class="w-11/12 mx-auto py-12">
            <div class="w-full flex flex-col md:flex-row justify-center items-start">
                {{-- Tanzania Contacts --}}
                <div class="w-full md:w-1/2 p-4">
                    <h1 class="font-semibold text-lg">Tanzania Address</h1>
                    <div class="flex flex-col text-gray-500">
                        <span class="py-6">Mwenge Catholic University</span>
                        <span class="pb-6">P.O. Box 1226, Moshi, Kilimanjaro Tanzania, East Africa</span>
                        <span class="pb-6"> Vice Chancellor: vc@mwecau.ac.tz</span>
                        <span class="pb-6">Secretary: info@mwecau.ac.tz</span>
                        <span class="pb-6"> Admission: admissions@mwecau.ac.tz</span>
                        <span class="pb-6"> ICT Office: admin@mwecau.ac.tz</span>
                        <span class="pb-6"> PRO Office: pr@mwecau.ac.tz</span>
                    </div>
                    {{-- map --}}
                    <div class="mt-10">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.193615381449!2d37.32090297497185!3d-3.3022081966726824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1839df349756f46f%3A0x611a580d0cca73ed!2sMwenge%20Catholic%20University!5e0!3m2!1sen!2stz!4v1735916057587!5m2!1sen!2stz"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                {{-- Belgium Contacts --}}
                <div class="w-full md:w-1/2 p-4">
                    <h1 class="font-semibold text-lg">Belgium Address</h1>
                    <div class="flex flex-col text-gray-500">
                        <span class="py-6">University of KU Leuven</span>
                        <span class="pb-6">Phone: +32 16 32 40 10</span>
                    </div>
                    {{-- map --}}
                    <div class="mt-10">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1292028.0120479853!2d2.725866675271059!3d50.76644864276742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c160d85ad4f2af%3A0x2cf72ac3db15442d!2sKU%20Leuven!5e0!3m2!1sen!2stz!4v1735916422952!5m2!1sen!2stz"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>


        {{-- Location per each contact address --}}
        {{-- <div class="w-full p-2 md:w-8/12 flex flex-col md:flex-row my-8 mx-auto justify-between">
            <div class="w-full md:w-1/2 flex my-4 md:my-2">
                <h1>Tanzania Address</h1>
                <i class="fa fa-house mx-4 text-xl text-purple-800"></i>
                <div class="flex flex-col text-gray-500">
                    <label class="mb-2">Physical Address:</label>
                    <span>Mwenge Catholic University</span>
                    <span>PO.BOX 1226 Moshi.</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex my-4 md:my-2">
                <i class="fa fa-phone mx-4 text-xl text-purple-800"></i>
                <div class="flex flex-col text-gray-500">
                    <label class="mb-2">Call Us:</label>
                    <span>+255 27 297 4110</span>
                    <span>+255 27 297 4110</span>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
