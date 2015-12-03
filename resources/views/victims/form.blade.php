<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h2 class="text-center">
            @if($victim->exists)
                Modification d'un victime
            @else
                Création d'une victime
            @endif
        </h2>
    </div>

    <div class="ibox-content">
        @if($victim->exists)
            {!! Form::open(['url' => ['victim.update', $victim->id], 'class' => 'form-horizontal']) !!}
        @else
            {!! Form::open(['url' => ['victim.store'], 'class' => 'form-horizontal']) !!}
        @endif

            <p class="text-right"><i class="text-navy">* Champs obligatoires</i></p>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('last', 'Nom :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::text('name', $season->exists ? $season->name : old('name'), ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

        {!! Form::close() !!}
    </div>
</div>