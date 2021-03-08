<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del post']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug del post','readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas:</p>
    @foreach ($tags as $tag)
        <label class="mr-4">
            {!! Form::checkbox('tags[]',$tag->id,null) !!}
            {{$tag->name}}
        </label>
    @endforeach
    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado:</p>
    <label for="">
        {!! Form::radio('status',1,true) !!}
        Borrador
    </label>
    <label for="">
        {!! Form::radio('status',2) !!}
        Publicado
    </label>
    @error('status')
    <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://www.ciesi.net/images/blog1.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file','Imagen que se mostrará en el Post') !!}
            {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
            {{-- {!! Form::file('file', ['class'=>'form-control-file']) !!} --}}
            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse vel, libero rerum soluta, officiis corporis laborum vero, amet accusamus omnis aut iste suscipit. Cumque nulla nemo, rem numquam error odit!</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract','Extracto:') !!}
    {!! Form::textarea('extract',null, ['class'=>'form-control']) !!}
    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body','Cuerpo del Post:') !!}
    {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>