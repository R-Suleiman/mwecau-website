@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Edit Scholarship
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">

    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.scholarship.scholarships') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.scholarship.update', $scholarship->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Scholarship
                                Name</label>
                            <input type="text" id="name" name="name" value="{{ $scholarship->name }}"
                                placeholder="eg. MWECAU 2025 full funded scholarships"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Offerd By -->
                        <div class="mb-4">
                            <label for="offerd_by" class="block text-sm mb-4 font-medium text-gray-700">Offerd By</label>
                            <input type="offerd_by" id="offerd_by" name="offerd_by" value="{{ $scholarship->offerd_by }}"
                                placeholder="Fill in who offers the Scholarship"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('offerd_by')" class="mt-2" />
                        </div>

                        <!-- County -->
                        <div class="mb-4">
                            <label for="country" class="block text-sm mb-4 font-medium text-gray-700">Country</label>
                            <input type="text" id="country" name="country" value="{{ $scholarship->country }}"
                                placeholder="Country"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>

                        <!-- Contact E-Mail -->
                        <div class="mb-4">
                            <label for="contact_email" class="block text-sm mb-4 font-medium text-gray-700">Contact
                                E-Mail</label>
                            <input type="text" id="contact_email" name="contact_email"
                                value="{{ $scholarship->contact_email }}" placeholder="Contact E-Mail"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label for="status" class="block text-sm mb-4 font-medium text-gray-700">Status of the
                                Scholarship</label>
                            <select name="status" id="status"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">
                                <option value="Open" {{ $scholarship->status == 'Open' ? 'selected' : '' }}>Open</option>
                                <option value="Closed" {{ $scholarship->status == 'Closed' ? 'selected' : '' }}>Closed
                                </option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <!-- Duration -->
                        <div class="mb-4">
                            <label for="duration" class="block text-sm mb-4 font-medium text-gray-700">Duration</label>
                            <input type="text" id="duration" name="duration" value="{{ $scholarship->duration }}"
                                placeholder="Duration of scholarship"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                        </div>

                        <!--Start  Date -->
                        <div class="mb-4">
                            <label for="start_date" class="block text-sm mb-4 font-medium text-gray-700">Start Date</label>
                            <input type="date" id="start_date" value="{{ $scholarship->start_date }}" name="start_date"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>

                        <!--End  Date -->
                        <div class="mb-4">
                            <label for="end_date" class="block text-sm mb-4 font-medium text-gray-700">End Date</label>
                            <input type="date" id="end_date" value="{{ $scholarship->end_date }}" name="end_date"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>

                    </div>

                    <div class="w-full">
                        <div class="mb-4">
                            <label for="description" class="block text-sm mb-4 font-medium text-gray-700">Description about
                                the Scholarship </label>
                            <textarea name="description" id="" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $scholarship->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <!--Application Url -->
                        <div class="mb-4">
                            <label for="application_url" class="block text-sm mb-4 font-medium text-gray-700">Scholarship
                                application url</label>
                            <input type="text" id="application_url" value="{{ $scholarship->application_url }}"
                                name="application_url"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('application_url')" class="mt-2" />
                        </div>
                        <!-- PDF file -->
                        <div class="mb-4">
                            <label for="attachment" class="block text-sm mb-4 font-medium text-gray-700">Scholarship
                                attachment<strong class="text-green-600"> (if Applicable)</strong> </label>
                            <input type="file" id="attachment" name="attachment"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <div class="mt-6">
                                @if ($scholarship->attachment != null)
                                    <a target="_blank"
                                        href="{{ route('conference-attachment-preview', $scholarship->attachment) }}"
                                        class="text-green-600 font-semibold"> <i class="fas fa-eye"></i>
                                        <span>Attachment is Available</span>
                                    </a>
                                @else
                                    <span class="text-red-600 font-semibold italic">Currently, No attachment is
                                        available</span>
                                @endif
                            </div>

                            <x-input-error :messages="$errors->get('pdf')" class="mt-2" />
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Save Changes </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
