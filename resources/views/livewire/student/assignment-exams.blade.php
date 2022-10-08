<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>TimeLine</small></h1>
    </div>
    <section id="cd-timeline" class="cd-container">
        @if ($subjects->count())
            {{ $subjects->links('vendor.livewire.tailwind') }}

            @foreach ($subjects as $exam)
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="{{ asset('./assets/img/avatar.jpg') }}" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">{{ $exam->id_examen->name }}</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start:
                            <em>{{ date('H:i', strtotime($exam->id_examen->timeStart)) }}</em> &nbsp;&nbsp;&nbsp;
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End:
                            <em>{{ date('H:i', strtotime($exam->id_examen->timeEnd)) }}</em>
                        </p>
                        <p class="text-center">
                            <i class="zmdi zmdi-copy"></i> Points: <em>{{ $exam->id_examen->calification }}</em>
                        </p>
                        <div class="row">
                            <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-danger">
                <strong>No hay registros</strong>
            </div>
        @endif


    </section>
</div>
