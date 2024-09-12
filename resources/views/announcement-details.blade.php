@include('links')
@include('partials.navbar')
<section class="main-section">
    <div class="main-content">
        <div class="content-box event-box">
            <div class="category-content">
                <div class=" container-fluid event-header">
                    <p>{{ $announcementDetails->event_category }}</p>
                    <div class="underline mt-1 mb-3">
                        <h3 style="text-align: center"><strong
                                class="favColor fs-1">{{ $announcementDetails->name }} </strong></h3>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row event-row">
                        <div class="col-sm-12 col-lg-10 mx-auto">
                            <div class="about-event text-center">
                                <p>{{ $announcementDetails->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <a target="_blank" href="{{ route('announcement.attachment.preview', $announcementDetails->attachment) }}">
                                <button class="btn favbg text white">
                                    Preview attachment <i class="fa fa-download" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const eventsTable = document.querySelector('.events-table')

    window.addEventListener('load', () => {
        eventsTable.style.display = 'block'
    })
</script>
{{-- <script src="./sidebar.js"></script> --}}
@include('partials.footer')
