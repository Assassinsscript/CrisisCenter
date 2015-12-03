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
                    {!! Form::label('lastname', 'Nom :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::text('lastname', $victim->exists ? $season->lastname : old('lastname'), ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('firstname', 'Prénom :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::text('firstname', $victim->exists ? $season->firstname : old('firstname'), ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('gender', 'Sexe :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>

                <div class="col-md-9">
                    <div class="radio-inline">
                        <label>
                            {!! Form::radio('gender', 'man', $victim->exists ? $user->gender === 'man' ? true : false : false, ['required']) !!}
                            Homme
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            {!! Form::radio('gender', 'woman', $victim->exists ? $user->gender === 'woman' ? true : false : false, ['required']) !!}
                            Femme
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('address', 'Adresse :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::textarea('address', $victim->exists ? $victim->address : old('address'), ['class' => 'form-control', 'rows' => 3, 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('postal_code', 'Code postal :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::number('postal_code', $victim->exists ? $victim->postal_code : old('postal_code'), ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('city', 'Ville :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::select('city', $cities, $victim->exists ? $victim->city : old('city'),['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('country', 'Pays :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::select('country', $countries, $victim->exists ? $victim->country : old('country'),['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('phone1', 'N ° téléphone 1 :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::number('phone1', $victim->exists ? $victim->phone1 : old('phone1'), ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('phone2', 'N ° téléphone 2 :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::number('phone2', $victim->exists ? $victim->phone2 : old('phone2'), ['class' => 'form-control', 'required']) !!}
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('blood_type', 'Pays :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::select('blood_type', $bloodsType, $victim->exists ? $victim->blood_type : old('blood_type'),['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('birth_date', 'Fin de blessure :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>

                <div class="col-md-9">
                    {!! Form::text('birth_date', $victim->exists ? $victim->birth_date : old('birth_date'), ['class' => 'form-control', 'data-mask' => '99/99/9999']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('contraindication', 'Contre indication :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::textarea('contraindication', $victim->exists ? $victim->contraindication : old('contraindication'), ['class' => 'form-control', 'rows' => 3, 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('state', 'État :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::select('state', $states, $victim->exists ? $victim->state : old('state'),['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    {!! Form::label('support_center_id', 'Centre support :', ['class' => 'control-label']) !!}
                    <i class="text-navy">*</i>
                </div>
                <div class="col-md-9">
                    {!! Form::select('support_center_id', $supportCenter, $victim->exists ? $victim->support_center_id : old('support_center_id'),['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            @if($victim->exists)
                <div class="form-group text-center">
                    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
                </div>
            @else
                <div class="form-group text-center">
                    {!! Form::submit('Créer', ['class' => 'btn btn-primary']) !!}
                </div>
            @endif

        {!! Form::close() !!}
    </div>
</div>