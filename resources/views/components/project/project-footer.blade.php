    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <!-- footer section -->
    <section class="footer-container text-white mt-10 fixed-bottom">
        <!-- Section: Social media -->
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 pt-16">
                <div class="pb-10">
                    <h6 class="uppercase text-center font-extrabold pb-10">Mwenge Catholic University</h6>
                    <hr class=" mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #e000ef; height: 5px" />
                    <p style="color: white">
                        Welcome to Mwenge Catholic University (MWECAU), a University that gives you the opportunity to
                        pursue quality education in truthfulness and freedom of thought, so that you may gain
                        professional competency to boldly serve and contribute to the development of humanity.
                    </p>
                </div>

                <div class=" ">
                    <h6 class="uppercase text-center font-extrabold pb-10">University Documents</h6>
                    <hr class=" mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #e000ef; height: 5px" />
                    <ul class="list-unstyled">
                        @if ($postgraduateJoiningInstruction)
                            <li class="mb-3"><a target="_blank"
                                    href="{{ route('uni-pdf-preview', $postgraduateJoiningInstruction->file) }}"
                                    target="_blank" class="text-light">Joining Instruction (Postgraduate Programmes)</a>
                            </li>
                        @else
                            <li class="mb-3"><a
                                    href="https://mwecau.ternet.or.tz/storage/files/1/Joining_Instruction/Joining-Instructions-for-postgraduate-students-2022-2023.pdf"
                                    target="_blank" class="text-light">Joining Instruction (Postgraduate Programmes)</a>
                            </li>
                        @endif
                        @if ($undergrduateJoiningInstruction)
                            <li class="mb-3"><a target="_blank"
                                    href="{{ route('uni-pdf-preview', $undergrduateJoiningInstruction->file) }}"
                                    target="_blank" class="text-light">Joining Instruction (Undergraduate
                                    Programmes)</a></li>
                        @else
                            <li class="mb-3"><a
                                    href="https://mwecau.ternet.or.tz/storage/files/1/Joining_Instruction/Joining-Instructions-for-postgraduate-students-2022-2023.pdf"
                                    target="_blank" class="text-light">Joining Instruction (Undergraduate
                                    Programmes)</a></li>
                        @endif
                        @if ($NondegreeJoiningInstruction)
                            <li class="mb-3"><a target="_blank"
                                    href="{{ route('uni-pdf-preview', $NondegreeJoiningInstruction->file) }}"
                                    target="_blank" class="text-light">Joining Instruction (Non-Degree Programmes)</a>
                            </li>
                        @else
                            <li class="mb-3"><a
                                    href="https://mwecau.ternet.or.tz/storage/files/1/Joining_Instruction/Joining-Instructions-for-postgraduate-students-2022-2023.pdf"
                                    target="_blank" class="text-light">Joining Instruction (Postgraduate
                                    Programmes)</a></li>
                        @endif
                        {{-- fee structures --}}

                        {{-- for postgraduate --}}
                        @if ($postgraduateFeeStructure)
                            <li class="mb-3"><a href="{{ route('uni-pdf-preview', $postgraduateFeeStructure->file) }}"
                                    target="_blank" class="text-light">Fee Structure (Postgraduate)</a></li>
                        @else
                            <li class="mb-3"><a href="#" target="_blank" class="text-light">Fee Structure
                                    (Postgraduate)</a></li>
                        @endif

                        {{-- for undergraduate --}}
                        @if ($undergrduateFeeStructure)
                            <li class="mb-3"><a href="{{ route('uni-pdf-preview', $undergrduateFeeStructure->file) }}"
                                    target="_blank" class="text-light">Fee Structure (Undergraduate)</a></li>
                        @else
                            <li class="mb-3"><a href="#" target="_blank" class="text-light">Fee Structure
                                    (Undergraduate)</a></li>
                        @endif

                        {{-- for Non-Degree Programmes --}}
                        @if ($NondegreeFeeStructure)
                            <li class="mb-3"><a href="{{ route('uni-pdf-preview', $NondegreeFeeStructure->file) }}"
                                    target="_blank" class="text-light">Fee Structure (Non-Degree)</a></li>
                        @else
                            <li class="mb-3"><a href="#" target="_blank" class="text-light">Fee Structure
                                    (Non-Degree)</a></li>
                        @endif
                    </ul>
                </div>

                @if ($footer->isNotEmpty())
                    <div class="">
                        <h6 class="uppercase text-center font-extrabold pb-10">Popular links</h6>
                        <hr class=" mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #e000ef; height: 5px" />
                        @foreach ($footer as $item)
                            <ul class="list-unstyled">
                                <li class="mb-3"><a href="{{ $item->link }}" target="_blank" class="text-light">
                                        {{ $item->name }}
                                    </a></li>
                            </ul>
                        @endforeach

                    </div>
                @endif

                <div class="">
                    <h6 class="uppercase text-center font-extrabold pb-10">Contacts</h6>
                    <hr class=" mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #e000ef; height: 5px" />
                    <p style="color: white">Mwenge Catholic University</p>
                    <p style="color: white"> P.O. Box 1226, Moshi, Kilimanjaro Tanzania, East Africa </p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="mailto:vc@mwecau.ac.tz" class="text-light"> <i
                                    class="fas fa-envelope mr-3"></i>
                                Vice
                                Chancellor: vc@mwecau.ac.tz</a></li>
                        <li class="mb-3"><a href="mailto:info@mwecau.ac.tz" class="text-light"> <i
                                    class="fas fa-envelope mr-3"></i>
                                Secretary: info@mwecau.ac.tz</a></li>
                        <li class="mb-3"><a href="mailto:admissions@mwecau.ac.tz" class="text-light"> <i
                                    class="fas fa-envelope mr-3"></i>
                                Admission: admissions@mwecau.ac.tz</a></li>
                        <li class="mb-3"><a href="mailto:admin@mwecau.ac.tz" class="text-light"> <i
                                    class="fas fa-envelope mr-3"></i>
                                ICT Office: admin@mwecau.ac.tz</a></li>
                        <li class="mb-3"><a href="mailto:pr@mwecau.ac.tz" class="text-light"> <i
                                    class="fas fa-envelope mr-3"></i>
                                PRO Office: pr@mwecau.ac.tz</li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            <label for="">
                Copyright © <span id="live-year"></span>
                <a class="text-white" href=""> MWECAU. </a>
                All right reserved.
            </label>
        </div>
        <!-- Copyright -->
    </section>
