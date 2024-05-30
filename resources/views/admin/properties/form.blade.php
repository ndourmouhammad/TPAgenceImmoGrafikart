@extends('admin.admin')

@section('title', $property->exists ? "Editer un bien " : "Créer un bien")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property->exists ? 'adminproperty.update' : 'adminproperty.store', $property) }}" method="post">

        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('admin.shared.input', ['class' => 'col','label' => 'Titre', 'name' => 'title', 'value' => $property->title])
            <div class="col row">
                @include('admin.shared.input', ['class' => 'col','name' => 'surface', 'value' => $property->surface])
                @include('admin.shared.input', ['class' => 'col','label' => 'Prix', 'name' => 'price', 'value' => $property->price])
            </div>
        </div>
        @include('admin.shared.input', ['type' => 'textarea', 'class' => 'col','name' => 'description', 'value' => $property->description])
        <div class="row">
            @include('admin.shared.input', ['class' => 'col','label' => 'Pièces', 'name' => 'rooms', 'value' => $property->rooms])
            @include('admin.shared.input', ['class' => 'col','label' => 'Chambres', 'name' => 'bedrooms', 'value' => $property->bedrooms])
            @include('admin.shared.input', ['class' => 'col','label' => 'Etage', 'name' => 'floors', 'value' => $property->floors])
        </div>
        <div class="row">
            @include('admin.shared.input', ['class' => 'col','label' => 'Adresse', 'name' => 'address', 'value' => $property->address])
            @include('admin.shared.input', ['class' => 'col','label' => 'Ville', 'name' => 'city', 'value' => $property->city])
            @include('admin.shared.input', ['class' => 'col','label' => 'Code postal', 'name' => 'postal_code', 'value' => $property->postal_code])
        </div>
        @include('admin.shared.checkbox', ['class' => 'col','label' => 'Vendu', 'name' => 'sold', 'value' => $property->sold])
        

        <div>
            <button class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>
    
@endsection