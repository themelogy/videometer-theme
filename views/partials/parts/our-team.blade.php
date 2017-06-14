<div class="container">
    <div class="row pt120 mb30">

        <div class="col-lg-12">
            <div class="heading align-center">
                <h4 class="h1 heading-title">{{ trans('themes::employee.titles.our team') }}</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
                <p class="heading-text">{{ trans('themes::employee.titles.our team desc') }}</p>
            </div>
        </div>

    </div>

    <div class="row pb120">
        @foreach(app(\Modules\Employee\Repositories\EmployeeRepository::class)->all() as $employee)
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="teammembers-item">
                @if($image = $employee->present()->firstImage(210,231,'fit',80))
                    <img class="img-circle" src="{{ $image }}" alt="{{ $employee->fullname }}">
                @else
                    <img src="{{ Theme::url('img/teammember1.png') }}" alt="{{ $employee->fullname }}">
                @endif
                <h5 class="teammembers-item-name">{{ $employee->fullname }}</h5>
                <p class="teammembers-item-prof">{{ $employee->position }}</p>

                <div class="socials">

                    @php $socials = ['twitter', 'facebook', 'google', 'instagram', 'linkedin', 'youtube', 'pinterest']; @endphp
                    @foreach($socials as $social)
                        @if(!empty(@$employee->{$social}))
                            <a href="{{ $employee->{$social} }}" class="social__item" target="_blank">
                                <img src="{{ Theme::url("svg/".$social.".svg") }}" alt="{{ $social }}">
                            </a>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>