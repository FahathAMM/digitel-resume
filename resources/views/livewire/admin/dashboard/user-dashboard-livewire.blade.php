<div>
    @section('title')
    {{ $title }}
@endsection
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Skills</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $numberOfSkills }}</h2>
                        <a href="#" class="text-white mb-0">Click Here More Details</a>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-wrench"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Messages</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $numberOfMessage }}</h2>
                        <a href="#" class="text-white mb-0">Click Here More Details</a>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-envelope"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">Projects</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $numberOfProjects }}</h2>
                        <a href="#" class="text-white mb-0">Click Here More Details</a>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-folder-open"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Number of Place Work </h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $numberOfExperiences }}</h2>
                        <a href="#" class="text-white mb-0">Click Here More Details</a>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-briefcase"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white"> Number Of Viewed Your Profile </h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $numberOfProfileViewed }}</h2>
                        <a href="#" class="text-white mb-0">Profile Viewers in the Past days</a>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>


        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Number of Place Work </h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $numberOfProfileViewed }}</h2>
                        <a href="#" class="text-white mb-0">Click Here More Details</a>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-briefcase"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
