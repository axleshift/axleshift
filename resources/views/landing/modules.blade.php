@php
    $modules = [
        [
            'name' => 'ADMIN',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://admin.axleshift.com',
        ],
        [
            'name' => 'CORE 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://core1.axleshift.com/login',
        ],
        [
            'name' => 'CORE 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://core2.axleshift.com',
        ],
        [
            'name' => 'FINANCE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://finance.axleshift.com',
        ],
        [
            'name' => 'HR 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://hr1.axleshift.com',
        ],
        [
            'name' => 'HR 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://hr2.axleshift.com',
        ],
        [
            'name' => 'HR 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://hr3.axleshift.com',
        ],
        [
            'name' => 'HR 4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://hr4.axleshift.com',
        ],
        [
            'name' => 'LOG 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://log1.axleshift.com',
        ],
        [
            'name' => 'LOG 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'url' => 'https://log2.axleshift.com',
        ],
    ];
@endphp

<div class="h-100">
    <div class="container pt-5">
        <div class="mb-2" data-aos="fade-down">
            <span>MODULES</span>
            <h2 class="text-primary">
                Without them, there's no axleshift!
            </h2>
        </div>
        <div class="row">
            @foreach ($modules as $module)
                <div class="col-sm-4">
                    <div class="card mb-4 border-0 rounded-0 module-card" data-aos="fade-up" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body">
                            <h5 class="card-title" data-aos="fade-up" data-aos-delay="500">
                                {{ $module['name'] }}
                            </h5>
                            <p class="card-text text-muted" data-aos="fade-up" data-aos-delay="800">
                                {{ $module['description'] }}
                            </p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ $module['url'] }}" class="btn rounded-pill bg-primary bg-opacity-25 text-primary"
                                    data-aos="fade-right" data-aos-delay="1000">
                                    <i class="fas fa-chevron-right p-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
